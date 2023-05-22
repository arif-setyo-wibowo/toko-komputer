const base_url = document.URL;
const asset_url = window.location.origin + "/uploads/gambar/storage/";

$(document).ready(function () {

    function formatRupiah(amount) {
        const formatter = new Intl.NumberFormat('id-ID', {
          style: 'currency',
          currency: 'IDR'
        });
        return formatter.format(amount);
      }

    // Auto Load Image Insert
    $("#storageImage").change(function () {
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
        var gambarStorage = document.getElementById('gambarStorage');
        var storageName = document.getElementById('storageName');
        var merk = document.getElementById('merk');
        var type = document.getElementById('type');
        var size = document.getElementById('size');
        var read = document.getElementById('read');
        var write = document.getElementById('write');
        var rpm = document.getElementById('rpm');
        var dimension = document.getElementById('dimension');
        var garansi = document.getElementById('garansi');
        var stok = document.getElementById('stok');
        var harga = document.getElementById('harga');

        $.ajax({
            method: "GET",
            url: base_url + "/find/" + id,
            dataType: "json",
            success: function (response) {
                gambarStorage.src = asset_url + response[0]['storageImage'];
                storageName.textContent = response[0]['storageName'];
                merk.textContent = response[0]['brand']['brandName'];
                type.textContent = response[0]['storageType'];
                size.textContent = response[0]['storageSize'];
                read.textContent = response[0]['storageReadSpeed'] + " Mb/s";
                write.textContent = response[0]['storageWriteSpeed'] + " Mb/s";
                rpm.textContent = response[0]['storageRpm'] + " Mb/s";
                dimension.textContent = response[0]['storageDimension'];
                garansi.textContent = response[0]['storageWarranty'];
                stok.textContent = response[0]['storageStock'];
                harga.textContent = formatRupiah(response[0]['storagePrice']);
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
                UpdateGambar.src = asset_url + response[0]['storageImage'];
                $('#idUpdate').val(response[0]['storageId']);
                $('#imageAwal').val(response[0]['storageImage']);
                $('#nameUpdate').val(response[0]['storageName']);
                $('#typeUpdate').val(response[0]['storageType']);
                $('#sizeUpdate').val(response[0]['storageSize'].split(' ')[0]);
                $('#sizeUpdate2').val(response[0]['storageSize'].split(' ')[1]);
                $('#readUpdate').val(response[0]['storageReadSpeed']);
                $('#writeUpdate').val(response[0]['storageWriteSpeed']);
                $('#rpmUpdate').val(response[0]['storageRpm']);
                $('#dimensionUpdate').val(response[0]['storageDimension']);
                $('#stokUpdate').val(response[0]['storageStock']);
                $('#hargaUpdate').val(response[0]['storagePrice']);
                $('#garansiUpdate').val(response[0]['storageWarranty']);
                $('#brandUpdate').val(response[0]['brand']['brandId']);

                $("#updateStorage").modal("show");

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