import toastr from 'toastr';

const blogPage = () => {
    const addblogBtn = document.getElementById('addBlogBtn');
    addblogBtn.addEventListener('click', (e) => {
        e.preventDefault();

        fetch('/blogs/form')
            .then(res => res.text())
            .then(html => {
                document.getElementById('main-content').innerHTML = html;
            });
    });
    
    $(document).on('click', '.deleteBtn', function (e) {
        e.preventDefault();

        const id = $(this).data('id');

        if (!confirm('Are you sure you want to delete this blog?')) {
            return;
        }
        $.ajax({
            url: '/blogs/' + id,
            type: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                if (data?.status === 'success') {
                    toastr.success(
                        data.message ?? 'Blog deleted successfully',
                        'Success'
                    );
                    location.reload();
                } else {
                    toastr.error(
                        data?.message ?? 'Something went wrong',
                        'Error'
                    );
                }
            },
            error: function (xhr) {
                const res = xhr.responseJSON;
                toastr.error(
                    res?.message ?? 'Delete failed',
                    'Error'
                );
            }
           
        });
    });

    document.addEventListener('submit',function(e){
        if(e.target.id === 'blogForm'){
            e.preventDefault();
            const formData = new FormData(e.target);
            
            $.ajax({
                url: '/blogs',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-TOKEN': document
                        .querySelector('meta[name="csrf-token"]')
                        ?.getAttribute('content')
                },
                success: function (data) {
                    if (data?.status === 'success') {
                        toastr.success(
                            data.message ?? 'Blog created successfully',
                            'Success'
                        );
                        location.reload();
                    } else {
                        toastr.error(
                            data?.message ?? 'Something went wrong',
                            'Error'
                        );
                    }
                }
            })
        }
    
    });
};

export default blogPage;