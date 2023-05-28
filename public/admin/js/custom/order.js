const base_url = document.URL;

$(document).ready(function () {

    //Input Resi
    $(document).on('click', '.btn-resi', function () {
        var id = $(this).attr("data-id");
        $("#orderId").val(id);
    });
});