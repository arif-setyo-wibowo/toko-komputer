const base_url = document.URL;

// Update Data

$(document).on('click', '.buttonupdate', function () {
    var id = $(this).attr("id");

    $.ajax({
        method: "GET",
        url: base_url + "/find/" + id,
        dataType: "json",
        success: function (response) {
            $.each(response, function (key, editValue) {
                $('#mediaName').val(editValue['mediaName']);
                $('#medialink').val(editValue['medialink']);
                $('#mediaId').val(id);
                $("#updateSosmed").modal("show");
            });
        }
    });
});