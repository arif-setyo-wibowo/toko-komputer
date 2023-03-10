const base_url = document.URL;

$(document).ready(function () {

    //edit Brand
    $(document).on('click', '.buttonupdate', function () {
        var id = $(this).attr("id");

        $.ajax({
            type: "GET",
            url: base_url + "/find/" + id,
            dataType: "json",
            success: function (response) {
                $("#brandIdUpdate").val(response[0]['brandId']);
                $('#brandNameUpdate').val(response[0]['brandName']);
                $('#imageAwal').val(response[0]['brandLogo']);
                $("#updateBrand").modal("show");
            }
        });
    });

    //delete Brand
    $(document).on('click', '.buttondelete', function () {
        var id = $(this).attr("id");
        $("#hapusData").modal("show");

        $(document).on('click', '.buttonAksiHapus', function () {
            window.location.replace(base_url + "/delete/" + id);
        })
    });
});