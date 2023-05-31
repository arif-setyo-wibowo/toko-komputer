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
    $("#gpuImage").change(function () {
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
    $("#gpuImageUpdate").change(function () {
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
        var gpuGambar = document.getElementById('gpuImageDetail');
        var namaDetail = document.getElementById('gpuNameDetail');
        var merk = document.getElementById('gpuBrandDetail');
        var interface = document.getElementById('gpuInterfaceDetail');
        var baseclock = document.getElementById('gpuBaseClockDetail');
        var boostclock = document.getElementById('gpuBoostClockDetail');
        var clockspeed = document.getElementById('gpuMemoryClockSpeedDetail');
        var memorytype = document.getElementById('gpuMemoryTypeDetail');
        var memorysize = document.getElementById('gpuMemorySizeDetail');
        var memoryinterface = document.getElementById('gpuMemoryInterfaceDetail');
        var fitur = document.getElementById('gpuFeatureDetail');
        var power = document.getElementById('gpuPowerReqDetail');
        var casesupport = document.getElementById('gpuCaseSupportDetail');
        var garansi = document.getElementById('gpuWarrantyDetail');
        var stok = document.getElementById('gpuStockDetail');
        var harga = document.getElementById('gpuPriceDetail');

        $.ajax({
            method: "GET",
            url: base_url + "/find/" + id,
            dataType: "json",
            success: function (response) {
                gpuGambar.src = asset_url + response[0]['gpuImage'];
                namaDetail.textContent = response[0]['gpuName'];
                merk.textContent = response[0]['brand']['brandName'];
                power.textContent = response[0]['gpuPowerReq'] + "W";
                interface.textContent = response[0]['gpuInterface'];
                baseclock.textContent = response[0]['gpuBaseClock'];
                boostclock.textContent = response[0]['gpuBoostClock'];
                clockspeed.textContent = response[0]['gpuMemoryClockSpeed'];
                memorytype.textContent = response[0]['gpuMemoryType'];
                memorysize.textContent = response[0]['gpuMemorySize'];
                memoryinterface.textContent = response[0]['gpuMemoryInterface'];
                fitur.textContent = response[0]['gpuFeature'];
                casesupport.textContent = response[0]['gpuCaseSupport'];
                garansi.textContent = response[0]['gpuWarranty'];
                stok.textContent = response[0]['gpuStock'];
                harga.textContent = formatRupiah(response[0]['gpuPrice']);
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
                updateGambar.src = asset_url + response[0]['gpuImage'];
                $('#idUpdate').val(response[0]['gpuId']);
                $('#imageAwal').val(response[0]['gpuImage']);
                $('#gpuNameUpdate').val(response[0]['gpuName']);
                $('#gpuInterfaceUpdate').val(response[0]['gpuInterface']);
                $('#gpuBaseClockUpdate').val(response[0]['gpuBaseClock']);
                $('#gpuBoostClockUpdate').val(response[0]['gpuBoostClock']);
                $('#gpuMemoryClockSpeedUpdate').val(response[0]['gpuMemoryClockSpeed']);
                $('#gpuMemorySizeUpdate').val(response[0]['gpuMemorySize']);
                $('#gpuMemoryInterfaceUpdate').val(response[0]['gpuMemoryInterface']);
                $('#gpuMemoryTypeUpdate').val(response[0]['gpuMemoryType']);
                $('#gpuFeatureUpdate').val(response[0]['gpuFeature']);
                $('#gpuPowerReqUpdate').val(response[0]['gpuPowerReq']);
                $('#gpuCaseSupportUpdate').val(response[0]['gpuCaseSupport']);
                $('#gpuBrandUpdate').val(response[0]['brand']['brandId']);
                $('#garansiUpdate').val(response[0]['gpuWarranty']);
                $('#stokUpdate').val(response[0]['gpuStock']);
                $('#hargaUpdate').val(response[0]['gpuPrice']);

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