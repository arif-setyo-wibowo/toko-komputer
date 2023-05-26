const base_url = document.URL;
const asset_url = window.location.origin + "/uploads/gambar/cooler/";

$(document).ready(function() {

    function formatRupiah(amount) {
        const formatter = new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR'
        });
        return formatter.format(amount);
    }

    // Auto Load Image Insert
    $("#coolerImage").change(function() {
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
        var nama1 = document.getElementById('nama');
        var merk1 = document.getElementById('merk');
        var type1 = document.getElementById('type');
        var caseType1 = document.getElementById('caseType');
        var rpm1 = document.getElementById('rpm');
        var deskripsi1 = document.getElementById('deskripsi');
        var garansi1 = document.getElementById('garansi');
        var harga1 = document.getElementById('harga');
        var stok1 = document.getElementById('stok');

        $.ajax({
            method: "GET",
            url: base_url + "/find/" + id,
            dataType: "json",
            success: function(response) {
                gambar1.src = asset_url + response[0]['coolerImage'];
                nama1.textContent = response[0]['coolerName'];
                merk1.textContent = response[0]['brand']['brandName'];
                caseType1.textContent = response[0]['coolerCaseType'];
                type1.textContent = response[0]['coolerType'];
                rpm1.textContent = response[0]['coolerRpm'];
                deskripsi1.textContent = response[0]['coolerDescription'];
                garansi1.textContent = response[0]['coolerWarranty'];
                harga1.textContent = formatRupiah(response[0]['coolerPrice']);
                stok1.textContent = response[0]['coolerStock'];
                console.log(response[0]);
                $("#detail").modal("show");
            }
        });
    });

    // Update Data
    $(document).on('click', '.button-update', function() {
        var id = $(this).attr("id");
        var UpdateGambar = document.getElementById('UpdateGambar');

        $.ajax({
            method: "GET",
            url: base_url + "/find/" + id,
            dataType: "json",
            success: function(response) {
                UpdateGambar.src = asset_url + response[0]['coolerImage'];
                $('#idUpdate').val(response[0]['coolerId']);
                $('#imageAwal').val(response[0]['coolerImage']);
                $('#namaUpdate').val(response[0]['coolerName']);
                $('#typeUpdate').val(response[0]['coolerType']);
                $('#rpmUpdate').val(response[0]['coolerRpm']);
                $('#socketUpdate').val(response[0]['coolerSocket']);
                $('#caseTypeUpdate').val(response[0]['coolerCaseType']);
                $('#stokUpdate').val(response[0]['coolerStock']);
                $('#hargaUpdate').val(response[0]['coolerPrice']);
                $('#garansiUpdate').val(response[0]['coolerWarranty']);
                $('#descriptionUpdate').val(response[0]['coolerDescription']);
                $('#brandUpdate').val(response[0]['brand']['brandId']);
                $('#updateCooler').modal("show");
            }
        });
    });

    // Modal Hapus
    $(document).on('click', '.button-hapus', function() {
        var id = $(this).attr("id");
        $("#hapusData").modal("show");

        $(document).on('click', '.buttonAksiHapus', function() {
            window.location.replace(base_url + "/delete/" + id);
        })
    });

});