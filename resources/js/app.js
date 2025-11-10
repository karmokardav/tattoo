const slides = [
    '/images/tattoo1.jpg',
    '/images/tattoo2.jpg',
    '/images/tattoo3.jpg',
    '/images/tattoo1.jpg',
    '/images/tattoo2.jpg',
    '/images/tattoo3.jpg',
];
const titles = ['Cover-up', 'Black & Grey', 'Linework', 'Japanese', 'Portraits', 'Piercing'];

const container = document.getElementById('carousel');

let activeIndex = 2; // start with the 3rd panel active

function createPanel(src, idx) {
    const el = document.createElement('div');
    el.className = 'panel rounded-2xl flex items-end p-6 flex-col cursor-pointer select-none collapsed';
    el.style.backgroundImage = `url(${src})`;
    el.setAttribute('data-index', idx);

    const label = document.createElement('div');
    label.className = 'label';
    label.textContent = `${String(idx + 1).padStart(2, '0')} — ${titles[idx] || 'Service'}`;

    const caption = document.createElement('div');
    caption.className = 'w-full text-right';
    caption.innerHTML = `<div class="text-sm text-gray-200">${titles[idx] || ''}</div>`;

    el.appendChild(label);
    el.appendChild(caption);

    el.addEventListener('click', () => {
        setActive(idx);
    });

    return el;
}

function render() {
    container.innerHTML = '';
    slides.forEach((s, i) => {
        const panel = createPanel(s, i);
        container.appendChild(panel);
    });
    updateActiveClass();
}

function updateActiveClass() {
    const panels = Array.from(container.children);
    panels.forEach((p, i) => {
        p.classList.remove('active');
        p.classList.add('collapsed');
        if (i === activeIndex) {
            p.classList.add('active');
            p.classList.remove('collapsed');
        }
    });
}

function setActive(idx) {
    activeIndex = (idx + slides.length) % slides.length;
    updateActiveClass();
}

document.getElementById('prev').addEventListener('click', () => setActive(activeIndex - 1));
document.getElementById('next').addEventListener('click', () => setActive(activeIndex + 1));

document.addEventListener('keydown', (e) => {
    if (e.key === 'ArrowLeft') setActive(activeIndex - 1);
    if (e.key === 'ArrowRight') setActive(activeIndex + 1);
});

// initial render
render();

// make container flex children behave like a 'split' carousel
// using Tailwind utilities via classList
container.classList.add('flex');
container.classList.add('items-stretch');
container.classList.add('gap-4');
container.style.flexWrap = 'nowrap';

// Allow double-click to open a demo modal (optional)
container.addEventListener('dblclick', (e) => {
    const idx = e.target.closest('[data-index]')?.dataset?.index;
    if (idx != null) window.open(slides[idx], '_blank');
});