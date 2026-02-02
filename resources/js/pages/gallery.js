import toastr from "toastr";

const galleryPage = () => {

    const addGalleryBtn = document.getElementById('addGalleryBtn');

    addGalleryBtn?.addEventListener('click', (e) => {
        e.preventDefault();

        fetch('/galleries/form')
            .then(res => res.text())
            .then(html => {
                document.getElementById('main-content').innerHTML = html;
            });
    });

        $(document).on('click', '.deleteBtn', function (e) {
        e.preventDefault();

        const id = $(this).data('id');

        if (!confirm('Are you sure you want to delete this gallery?')) {
            return;
        }

        $.ajax({
            url: '/galleries/' + id,
            type: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                if (data?.status === 'success') {
                    toastr.success(
                        data.message ?? 'Gallery deleted successfully',
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


    document.addEventListener('submit', function (e) {
        if (e.target.id === 'galleryForm') {
            e.preventDefault();

            const formData = new FormData(e.target);

            $.ajax({
                url: '/galleries',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': document
                        .querySelector('meta[name="csrf-token"]')
                        ?.getAttribute('content')
                },
                success: function (response) {
                    document.getElementById('backBtn')?.click();

                    if (response?.status === 'success') {
                        toastr.success(response.message ?? 'Gallery created successfully', 'Success');
                    } else {
                        toastr.error(response.message ?? 'Something went wrong', 'Error');
                    }
                },
                error: function (xhr) {
                    toastr.error(
                        xhr.responseJSON?.message ?? 'Validation failed',
                        'Error'
                    );
                }
            });
        }
    });
};

export default galleryPage;