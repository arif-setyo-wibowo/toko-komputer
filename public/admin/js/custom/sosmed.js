const base_url = document.URL;

$(document).ready(function () {

    // Update Data
    $(document).on('click', '.buttonupdate', function () {
        var id = $(this).attr("id");

        $('#mediaName').val("");
        $('#medialink').val("");
        $('#mediaId').val("");

        $.ajax({
            method: "GET",
            url: base_url + "/find/" + id,
            dataType: "json",
            success: function (response) {
                $('#mediaName').val(response[0]['mediaName']);
                $('#medialink').val(response[0]['medialink']);
                $('#mediaId').val(response[0]['mediaId']);
                $("#updateSosmed").modal("show");

            }
        });
    });

    // Modal Hapus
    $(document).on('click', '.buttonHapus', function () {
        var id = $(this).attr("id");
        $("#hapusData").modal("show");

        $(document).on('click', '.buttonAksiHapus', function () {
            window.location.replace(base_url + "/delete/" + id);
        })
    });

});






