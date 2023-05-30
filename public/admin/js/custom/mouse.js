const base_url = document.URL;
const asset_url = window.location.origin + "/uploads/";

$(document).ready(function() {

    function formatRupiah(amount) {
        const formatter = new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR'
        });
        return formatter.format(amount);
    }

    // Auto Load Image Insert
    $("#mouseImage").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#gambarTambah').attr('src', e.target.result);
                console.log(e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });

    // Auto Load Image Update
    $("#imageUpdate").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#UpdateGambar').attr('src', e.target.result);
                console.log(e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });

    // Detail Data
    $(document).on('click', '.button-detail', function() {
        var id = $(this).attr("id");
        var gambar = document.getElementById('gambar');
        var nama = document.getElementById('nama');
        var merk = document.getElementById('merk');
        var connection = document.getElementById('connection');
        var pollrate = document.getElementById('pollrate');
        var speed = document.getElementById('speed');
        var dpi = document.getElementById('dpi');
        var switc = document.getElementById('switch');
        var sensor = document.getElementById('sensor');
        var grip = document.getElementById('grip');
        var garansi = document.getElementById('garansi');
        var stok = document.getElementById('stok');
        var harga = document.getElementById('harga');
        var deskripsi = document.getElementById('deskripsi');

        $.ajax({
            method: "GET",
            url: base_url + "/find/" + id,
            dataType: "json",
            success: function(response) {
                gambar.src = asset_url + response[0]['mouseImage'];
                nama.textContent = response[0]['mouseName'];
                merk.textContent = response[0]['brand']['brandName'];
                connection.textContent = response[0]['mouseConnection'];
                pollrate.textContent = response[0]['mousePollRate'];
                speed.textContent = response[0]['mouseSpeed'];
                dpi.textContent = response[0]['mouseDpi'];
                sensor.textContent = response[0]['mouseSensor'];
                grip.textContent = response[0]['mouseGrip'];
                switc.textContent = response[0]['mouseSwitch'];
                garansi.textContent = response[0]['mouseWarranty'];
                stok.textContent = response[0]['mouseStock'];
                deskripsi.textContent = response[0]['mouseDescription'];
                harga.textContent = formatRupiah(response[0]['mousePrice']);
                $("#detail").modal("show");
            }
        });
    });

    // Update Data
    $(document).on('click', '.buttonupdate', function() {
        var id = $(this).attr("id");
        var UpdateGambar = document.getElementById('UpdateGambar');

        $.ajax({
            method: "GET",
            url: base_url + "/find/" + id,
            dataType: "json",
            success: function(response) {
                UpdateGambar.src = asset_url + response[0]['mouseImage'];
                $('#idUpdate').val(response[0]['mouseId']);
                $('#imageAwal').val(response[0]['mouseImage']);
                $('#namaUpdate').val(response[0]['mouseName']);
                $('#brandUpdate').val(response[0]['brand']['brandId']);

                $('#sensorUpdate').val(response[0]['mouseSensor']);
                $('#speedUpdate').val(response[0]['mouseSpeed']);
                $('#connectionUpdate').val(response[0]['mouseConnection']);
                $('#switchUpdate').val(response[0]['mouseSwitch']);
                $('#pollrateUpdate').val(response[0]['mousePollRate']);
                $('#dpiUpdate').val(response[0]['mouseDpi']);
                $('#gripUpdate').val(response[0]['mouseGrip']);

                $('#stokUpdate').val(response[0]['mouseStock']);
                $('#hargaUpdate').val(response[0]['mousePrice']);
                $('#garansiUpdate').val(response[0]['mouseWarranty']);
                $('#deskripsiUpdate').val(response[0]['mouseDescription']);

                $("#updateMouse").modal("show");

            }
        });
    });

    // Modal Hapus
    $(document).on('click', '.buttonHapus', function() {
        var id = $(this).attr("id");
        $("#hapusData").modal("show");

        $(document).on('click', '.buttonAksiHapus', function() {
            window.location.replace(base_url + "/delete/" + id);
        })
    });

});