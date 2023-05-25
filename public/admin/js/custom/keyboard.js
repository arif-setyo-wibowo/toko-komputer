const base_url = document.URL;
const asset_url = window.location.origin + "/uploads/gambar/keyboard/";

$(document).ready(function() {

    function formatRupiah(amount) {
        const formatter = new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR'
        });
        return formatter.format(amount);
    }

    // Auto Load Image Insert
    $("#keyboardImage").change(function() {
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
        var gambar1 = document.getElementById('gambar');
        var nama2 = document.getElementById('nama');
        var tipe3 = document.getElementById('type');
        var merk4 = document.getElementById('merk');
        var size1 = document.getElementById('size');
        var switc2 = document.getElementById('switc');
        var layout3 = document.getElementById('layout');
        var connection4 = document.getElementById('connection');
        var deskripsi1 = document.getElementById('deskripsi');
        var garansi2 = document.getElementById('garansi');
        var stok3 = document.getElementById('stok');
        var harga4 = document.getElementById('harga');

        $.ajax({
            method: "GET",
            url: base_url + "/find/" + id,
            dataType: "json",
            success: function(response) {
                gambar1.src = asset_url + response[0]['keyboardImage'];
                nama2.textContent = response[0]['keyboardName'];
                merk4.textContent = response[0]['brand']['brandName'];
                tipe3.textContent = response[0]['keyboardType'];
                size1.textContent = response[0]['keyboardSize'];
                switc2.textContent = response[0]['keyboardSwitch'];
                layout3.textContent = response[0]['keyboardLayout'];
                connection4.textContent = response[0]['keyboardConnection'];
                deskripsi1.textContent = response[0]['keyboardDescription'];
                garansi2.textContent = response[0]['keyboardWarranty'];
                stok3.textContent = response[0]['keyboardStock'];
                harga4.textContent = formatRupiah(response[0]['keyboardPrice']);
                console.log(response[0]);
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
                UpdateGambar.src = asset_url + response[0]['keyboardImage'];
                $('#idUpdate').val(response[0]['keyboardId']);
                $('#imageAwal').val(response[0]['keyboardImage']);
                $('#namaUpdate').val(response[0]['keyboardName']);
                $('#layoutUpdate').val(response[0]['keyboardLayout']);
                $('#sizeUpdate').val(response[0]['keyboardSize']);
                $('#connectionUpdate').val(response[0]['keyboardConnection']);
                $('#descriptionUpdate').val(response[0]['keyboardDescription']);
                $('#featureUpdate').val(response[0]['keyboardFeature']);
                $('#stokUpdate').val(response[0]['keyboardStock']);
                $('#hargaUpdate').val(response[0]['keyboardPrice']);
                $('#garansiUpdate').val(response[0]['keyboardWarranty']);
                $('#brandUpdate').val(response[0]['brand']['brandId']);
                $('#switchUpdate').val(response[0]['keyboardSwitch']);
                $('#typeUpdate').val(response[0]['keyboardType']);

                $("#updateKeyboard").modal("show");

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