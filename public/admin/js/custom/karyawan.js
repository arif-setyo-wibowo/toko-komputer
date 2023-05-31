const base_url = document.URL;

$(document).ready(function() {
    // Update Data
    $(document).on('click', '.button-update', function() {
        var id = $(this).attr("id");

        $.ajax({
            method: "GET",
            url: base_url + "/find/" + id,
            dataType: "json",
            success: function(response) {
                $('#idUpdate').val(response[0]['employeeId']);
                $('#namaUpdate').val(response[0]['employeeName']);
                $('#emailUpdate').val(response[0]['employeeEmail']);
                $('#roleUpdate').val(response[0]['employeeRole']);
                $('#passwordLama').val(response[0]['employeePassword']);

                $("#update").modal("show");

            }
        });
    });

    // Modal Hapus
    $(document).on('click', '.button-delete', function() {
        var id = $(this).attr("id");
        $("#hapusData").modal("show");

        $(document).on('click', '.buttonAksiHapus', function() {
            window.location.replace(base_url + "/delete/" + id);
        })
    });

});