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
    $("#monitorImage").change(function() {
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
        var refresh = document.getElementById('refresh');
        var port = document.getElementById('port');
        var respons = document.getElementById('response');
        var gamut = document.getElementById('gamut');
        var panel = document.getElementById('panel');
        var size = document.getElementById('size');
        var resolusi = document.getElementById('resolusi');
        var garansi = document.getElementById('garansi');
        var stok = document.getElementById('stok');
        var harga = document.getElementById('harga');
        var deskripsi = document.getElementById('deskripsi');

        $.ajax({
            method: "GET",
            url: base_url + "/find/" + id,
            dataType: "json",
            success: function(response) {
                gambar.src = asset_url + response[0]['monitorImage'];
                nama.textContent = response[0]['monitorName'];
                merk.textContent = response[0]['brand']['brandName'];

                refresh.textContent = response[0]['monitorRefreshRate'];
                port.textContent = response[0]['monitorPort'];
                respons.textContent = response[0]['monitorResponseTime'];
                gamut.textContent = response[0]['monitorGamut'];
                panel.textContent = response[0]['monitorPanel'];
                size.textContent = response[0]['monitorSize'];
                resolusi.textContent = response[0]['monitorResolution'];

                garansi.textContent = response[0]['monitorWarranty'];
                stok.textContent = response[0]['monitorStock'];
                deskripsi.textContent = response[0]['monitorDescription'];
                harga.textContent = formatRupiah(response[0]['monitorPrice']);
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
                UpdateGambar.src = asset_url + response[0]['monitorImage'];
                $('#idUpdate').val(response[0]['monitorId']);
                $('#imageAwal').val(response[0]['monitorImage']);
                $('#namaUpdate').val(response[0]['monitorName']);
                $('#brandUpdate').val(response[0]['brand']['brandId']);

                $('#responseUpdate').val(response[0]['monitorResponseTime']);
                $('#refreshUpdate').val(response[0]['monitorRefreshRate']);
                $('#portUpdate').val(response[0]['monitorPort']);
                $('#panelUpdate').val(response[0]['monitorPanel']);
                $('#sizeUpdate').val(response[0]['monitorSize']);
                $('#resolutionUpdate').val(response[0]['monitorResolution']);
                $('#gamutUpdate').val(response[0]['monitorGamut']);

                $('#stokUpdate').val(response[0]['monitorStock']);
                $('#hargaUpdate').val(response[0]['monitorPrice']);
                $('#garansiUpdate').val(response[0]['monitorWarranty']);
                $('#deskripsiUpdate').val(response[0]['monitorDescription']);

                $("#updateMonitor").modal("show");

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