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
    $("#earphoneImage").change(function() {
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

        var type = document.getElementById('type');
        var sensitivity = document.getElementById('sensitivity');
        var impedance = document.getElementById('impedance');
        var driver = document.getElementById('driver');
        var connection = document.getElementById('connection');
        var sounsig = document.getElementById('soundsig');

        var garansi = document.getElementById('garansi');
        var stok = document.getElementById('stok');
        var harga = document.getElementById('harga');
        var deskripsi = document.getElementById('deskripsi');

        $.ajax({
            method: "GET",
            url: base_url + "/find/" + id,
            dataType: "json",
            success: function(response) {
                gambar.src = asset_url + response[0]['earphoneImage'];
                nama.textContent = response[0]['earphoneName'];
                merk.textContent = response[0]['brand']['brandName'];

                type.textContent = response[0]['earphoneType'];
                sensitivity.textContent = response[0]['earphoneSensitivity'];
                impedance.textContent = response[0]['earphoneImpedance'];
                driver.textContent = response[0]['earphoneDriver'];
                connection.textContent = response[0]['earphoneConnection'];
                sounsig.textContent = response[0]['earphoneSoundSig'];

                garansi.textContent = response[0]['earphoneWarranty'];
                stok.textContent = response[0]['earphoneStock'];
                deskripsi.textContent = response[0]['earphoneDescription'];
                harga.textContent = formatRupiah(response[0]['earphonePrice']);
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
                UpdateGambar.src = asset_url + response[0]['earphoneImage'];
                $('#idUpdate').val(response[0]['earphoneId']);
                $('#imageAwal').val(response[0]['earphoneImage']);
                $('#namaUpdate').val(response[0]['earphoneName']);
                $('#brandUpdate').val(response[0]['brand']['brandId']);

                $('#typeUpdate').val(response[0]['earphoneType']);
                $('#sensitivityUpdate').val(response[0]['earphoneSensitivity']);
                $('#impedanceUpdate').val(response[0]['earphoneImpedance']);
                $('#driverUpdate').val(response[0]['earphoneDriver']);
                $('#connectionUpdate').val(response[0]['earphoneConnection']);
                $('#soundUpdate').val(response[0]['earphoneSoundSig']);
                $('#micUpdate').val(response[0]['earphoneHaveMic']);

                $('#stokUpdate').val(response[0]['earphoneStock']);
                $('#hargaUpdate').val(response[0]['earphonePrice']);
                $('#garansiUpdate').val(response[0]['earphoneWarranty']);
                $('#deskripsiUpdate').val(response[0]['earphoneDescription']);

                $("#updateEarphone").modal("show");

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