// import $ from "jquery";
const gallery = () => {


    const modal = document.getElementById("gallery-modal");

    modal.querySelector("#openModalBtn").addEventListener("click", () => {
        console.log("click");
    });

    modal.querySelector("#closeModalBtn").addEventListener("click", () => {
        modal.querySelector("form").reset();
    });

    // modal.querySelector("form").addEventListener("submit", function (event) {
    //     event.preventDefault();

    //     const formElement = event.target;
    //     const formData = new FormData(formElement); // image সহ সব input

    //     // Determine create vs update based on hidden #gallery_id
    //     const gallery_id = formData.get("gallery_id"); // "" অথবা null হলে নতুন
    //     let url = "gallery"; // create endpoint
    //     let method = "POST";

    //     $.ajax({
    //         url: url,
    //         method: method,
    //         dataType: "json",
    //         processData: false,
    //         contentType: false,
    //         data: {
    //             _token: $('meta[name="csrf-token"]').attr("content"),
    //             image: formData.get("image"),
    //             status: formData.get("status")
    //         },
    //         success: function (data) {
    //             console.log(data);
    //         },


    //     });

    // });

    modal.querySelector("form").addEventListener("submit", function (event) {
        event.preventDefault();

        const formElement = event.target;
        const formData = new FormData(formElement); // সব ইনপুট একসাথে

        // checkbox handling: ensure status is 0/1 instead of "on"/null
        const statusEl = formElement.querySelector("#status");
        if (statusEl) {
            formData.set("status", statusEl.checked ? 1 : 0);
        }

        // CSRF token (Laravel)
        const csrf = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
        if (csrf) formData.set("_token", csrf);

        // Determine create vs update
        const gallery_id = formData.get("gallery_id"); // empty string/null -> create
        let url = "/gallery"; // create endpoint (adjust route if needed)
        let method = "POST";

        if (gallery_id !== null && gallery_id !== "") {
            // Use POST + _method=PUT for multipart form (Laravel-compatible)
            formData.set("_method", "PUT");
            url = `/gallery/${gallery_id}`;
            method = "POST";
        }

        $.ajax({
            url: url,
            method: method,
            data: formData,            // <-- pass FormData directly
            dataType: "json",
            processData: false,       // <-- required for FormData
            contentType: false,       // <-- required for FormData
            cache: false,
            beforeSend: function () {
                $(formElement).find('button[type="submit"]').attr('disabled', true);
            },
            success: function (response) {
                console.log("Server response:", response);
                if (response.status === "success") {
                    // success handling (toastr/datatable/modal)
                    toastr.success(response.message || "Saved");
                    formElement.reset();
                    // close Alpine modal:
                    if (modal.__x && modal.__x.$data) modal.__x.$data.isModelopen = false;
                } else {
                    toastr.error(response.message || "Error");
                }
            },
            error: function (xhr, status, error) {
                console.error("AJAX error:", xhr, status, error);
                toastr.error("Server error. Check console.");
            },
            complete: function () {
                $(formElement).find('button[type="submit"]').attr('disabled', false);
            }
        });

    });


};
export default gallery;