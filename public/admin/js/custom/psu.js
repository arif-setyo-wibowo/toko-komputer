const base_url = document.URL;
const asset_url = window.location.origin + "/uploads/";

$(document).ready(function () {

    function formatRupiah(amount) {
        const formatter = new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR'
        });
        return formatter.format(amount);
    }

    // Auto Load Image Insert
    $("#psuImage").change(function () {
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
                $('#updateGambar').attr('src', e.target.result);
                console.log(e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });

    // Detail Data
    $(document).on('click', '.button-detail', function () {
        var id = $(this).attr('id');
        var psuGambar = document.getElementById('gambarDetail');
        var namaDetail = document.getElementById('namaDetail');
        var merk = document.getElementById('brandDetail');
        var power = document.getElementById('powerDetail');
        var certification = document.getElementById('certificationDetail');
        var efficiency = document.getElementById('efficiencyDetail');
        var cooling = document.getElementById('coolingDetail');
        var modular = document.getElementById('modularDetail');
        var connector = document.getElementById('connectorDetail');
        var garansi = document.getElementById('garansi');
        var stok = document.getElementById('stok');
        var harga = document.getElementById('harga');

        $.ajax({
            method: "GET",
            url: base_url + "/find/" + id,
            dataType: "json",
            success: function (response) {
                psuGambar.src = asset_url + response[0]['psuImage'];
                namaDetail.textContent = response[0]['psuName'];
                merk.textContent = response[0]['brand']['brandName'];
                power.textContent = response[0]['psuPower'] + "W";
                certification.textContent = response[0]['psuCertification'];
                efficiency.textContent = response[0]['psuEfficiency'];
                cooling.textContent = response[0]['psuCooling'];
                modular.textContent = response[0]['psuModular'];
                connector.textContent = response[0]['psuConnector'];
                garansi.textContent = response[0]['psuWarranty'];
                stok.textContent = response[0]['psuStock'];
                harga.textContent = formatRupiah(response[0]['psuPrice']);
                $("#detail").modal("show");
            }
        });
    });

    // Update Data
    $(document).on('click', '.button-update', function () {
        var id = $(this).attr('id');
        var updateGambar = document.getElementById('updateGambar');

        $.ajax({
            method: "GET",
            url: base_url + "/find/" + id,
            dataType: "json",
            success: function (response) {
                updateGambar.src = asset_url + response[0]['psuImage'];
                $('#idUpdate').val(response[0]['psuId']);
                $('#imageAwal').val(response[0]['psuImage']);
                $('#namaUpdate').val(response[0]['psuName']);
                $('#certificationUpdate').val(response[0]['psuCertification']);
                $('#powerUpdate').val(response[0]['psuPower']);
                $('#efficiencyUpdate').val(response[0]['psuEfficiency']);
                $('#coolingUpdate').val(response[0]['psuCooling']);
                $('#modularUpdate').val(response[0]['psuModular']);
                $('#connectorUpdate').val(response[0]['psuConnector']);
                $('#brandUpdate').val(response[0]['brand']['brandId']);
                $('#garansiUpdate').val(response[0]['psuWarranty']);
                $('#stokUpdate').val(response[0]['psuStock']);
                $('#hargaUpdate').val(response[0]['psuPrice']);

                $("#updatePower").modal("show");

            }
        });
    });

    // Modal Hapus
    $(document).on('click', '.button-delete', function () {
        var id = $(this).attr("id");
        $("#hapusData").modal("show");

        $(document).on('click', '.buttonAksiHapus', function () {
            window.location.replace(base_url + "/delete/" + id);
        })
    });

});