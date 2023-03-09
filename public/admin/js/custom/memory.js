const base_url = document.URL;
const asset_url = window.location.origin + "/uploads/gambar/ram/";

$(document).ready(function () {

    // Auto Load Image
    $("#memoryImage").change(function () {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#gambarTambah').attr('src', e.target.result);
                console.log(e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });

    // Detail Data
    $(document).on('click', '.button-detail', function () {
        var id = $(this).attr("id");
        var memoriGambar = document.getElementById('memoriGambar');
        var memoryName = document.getElementById('memoryName');
        var merk = document.getElementById('merk');
        var capacity = document.getElementById('capacity');
        var type = document.getElementById('type');
        var speed = document.getElementById('speed');
        var latency = document.getElementById('latency');
        var volt = document.getElementById('volt');
        var garansi = document.getElementById('garansi');

        $.ajax({
            method: "GET",
            url: base_url + "/find/" + id,
            dataType: "json",
            success: function (response) {
                memoriGambar.src = asset_url + response[0]['memoryImage'];
                memoryName.textContent = response[0]['memoryName'];
                merk.textContent = response[0]['brand']['brandName'];
                capacity.textContent = response[0]['memoryCapacity'];
                type.textContent = response[0]['memoryType'];
                speed.textContent = response[0]['memorySpeed'];
                latency.textContent = response[0]['memoryCasLatency'];
                volt.textContent = response[0]['memoryVoltage'];
                garansi.textContent = response[0]['memoryWarranty'];
                $("#detail").modal("show");
            }
        });
    });

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