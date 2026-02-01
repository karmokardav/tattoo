
const dashboardPage = () => {
    window.loadPage = function (event, url) {
        event.preventDefault();

        fetch(url, {
            headers: {
                "X-Requested-With": "XMLHttpRequest",
            },
        })
            .then((res) => res.text())
            .then((html) => {
                document.getElementById("main-content").innerHTML = html;
            })
            .catch((err) => console.error(err));
    };
    console.log('dashboard');
};

export default dashboardPage;