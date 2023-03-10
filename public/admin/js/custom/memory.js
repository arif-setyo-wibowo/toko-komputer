const base_url = document.URL;
const asset_url = window.location.origin + "/uploads/gambar/ram/";

$(document).ready(function () {

    // Auto Load Image Insert
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

    // Auto Load Image Update
    $("#imageUpdate").change(function () {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#UpdateGambar').attr('src', e.target.result);
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
        var stok = document.getElementById('stok');
        var harga = document.getElementById('harga');

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
                stok.textContent = response[0]['memoryStock'];
                harga.textContent = "Rp. " + response[0]['memoryPrice'];
                $("#detail").modal("show");
            }
        });
    });

    // Update Data
    $(document).on('click', '.buttonupdate', function () {
        var id = $(this).attr("id");
        var UpdateGambar = document.getElementById('UpdateGambar');

        $.ajax({
            method: "GET",
            url: base_url + "/find/" + id,
            dataType: "json",
            success: function (response) {
                UpdateGambar.src = asset_url + response[0]['memoryImage'];
                $('#idUpdate').val(response[0]['memoryId']);
                $('#imageAwal').val(response[0]['memoryImage']);
                $('#namaUpdate').val(response[0]['memoryName']);
                $('#typeUpdate').val(response[0]['memoryType']);
                $('#speedUpdate').val(response[0]['memorySpeed']);
                $('#latencyUpdate').val(response[0]['memoryCasLatency']);
                $('#voltUpdate').val(response[0]['memoryVoltage']);
                $('#stokUpdate').val(response[0]['memoryStock']);
                $('#hargaUpdate').val(response[0]['memoryPrice']);
                $('#garansiUpdate').val(response[0]['memoryWarranty']);
                $('#mediaId').val(response[0]['mediaId']);
                $('#brandUpdate').val(response[0]['brand']['brandId']);
                $('#capacityUpdate').val(response[0]['memoryCapacity']);
                $('#typeUpdate').val(response[0]['memoryType']);

                $("#updateMemory").modal("show");

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