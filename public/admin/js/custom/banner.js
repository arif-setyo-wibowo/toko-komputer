const base_url = document.URL;
const asset_url = window.location.origin + "/uploads/";

$(document).ready(function() {

    // Auto Load Image Update
    $("#sliderImageUpdate").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#updateGambar').attr('src', e.target.result);
                console.log(e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });

    //edit Brand
    $(document).on('click', '.buttonupdate', function() {
        var id = $(this).attr("id");
        var UpdateGambar = document.getElementById('updateGambar');

        $.ajax({
            type: "GET",
            url: base_url + "/find/" + id,
            dataType: "json",
            success: function(response) {

                UpdateGambar.src = asset_url + response[0]['sliderImage'];
                $("#IdUpdate").val(response[0]['sliderId']);
                $('#imageAwal').val(response[0]['sliderImage']);
                $("#updateSlider").modal("show");
            }
        });
    });
});