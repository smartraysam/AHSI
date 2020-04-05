$(document).ready(function (e) {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $("body").on("click", ".donate-btn", function () {
      
        $("#modal-donate").modal('show');
    });

    // Edit var userId t User Info
    $("#modal-donate").on("show.bs.modal", function (e) {});
});
