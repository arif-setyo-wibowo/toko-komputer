const base_url = document.URL;

$(document).ready(function () {

    // Update Data
    $(document).on('click', '.buttonupdate', function () {
        var id = $(this).attr("id");

        $('#socketName').val("");
        $('#socketId').val("");

        $.ajax({
            method: "GET",
            url: base_url + "/find/" + id,
            dataType: "json",
            success: function (response) {
                $('#socketName').val(response[0]['processorSocketName']);
                $('#socketId').val(response[0]['processorSocketId']);
                $("#updateSocket").modal("show");

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






