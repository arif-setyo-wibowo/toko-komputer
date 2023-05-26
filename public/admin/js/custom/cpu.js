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
    $("#processorImage").change(function () {
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
    $("#processorImageUpdate").change(function () {
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
        var id = $(this).attr("id");
        var processorGambar = document.getElementById('gambarDetail');
        var nama = document.getElementById('processorNameDetail');
        var merk = document.getElementById('processorBrandDetail');
        var gen = document.getElementById('processorGenDetail');
        var socket = document.getElementById('processorSocketDetail');
        var core = document.getElementById('processorCoreDetail');
        var thread = document.getElementById('processorThreadDetail');
        var baseSpeed = document.getElementById('processorBaseSpeedDetail');
        var boostSpeed = document.getElementById('processorBoostSpeedDetail');
        var cache = document.getElementById('processorCacheDetail');
        var iGpu = document.getElementById('processorIgpuDetail');
        var power = document.getElementById('processorPowerDetail');
        var heatsink = document.getElementById('processorHeatsinkDetail');
        var garansi = document.getElementById('processorWarrantyDetail');
        var harga = document.getElementById('processorPriceDetail');
        var stok = document.getElementById('processorStockDetail');

        $.ajax({
            method: "GET",
            url: base_url + "/find/" + id,
            dataType: "json",
            success: function (response) {
                processorGambar.src = asset_url + response[0]['processorImage'];
                nama.textContent = response[0]['processorName'];
                merk.textContent = response[0]['brand']['brandName'];
                gen.textContent = response[0]['processorGen'];
                socket.textContent = response[0]['socket']['processorSocketName'];
                core.textContent = response[0]['processorCore'];
                thread.textContent = response[0]['processorThread'];
                baseSpeed.textContent = response[0]['processorBaseSpeed'];
                boostSpeed.textContent = response[0]['processorBoostSpeed'];
                cache.textContent = response[0]['processorCache'];
                iGpu.textContent = response[0]['processorIgpu'];
                power.textContent = response[0]['processorPower'] + "W";
                heatsink.textContent = response[0]['processorHeatsink'];
                garansi.textContent = response[0]['processorWarranty'];
                stok.textContent = response[0]['processorStock'];
                harga.textContent = formatRupiah(response[0]['processorPrice']);
                $("#detail").modal("show");


            }
        });
    });

    // Update Data
    $(document).on('click', '.button-update', function () {
        var id = $(this).attr("id");
        var updateGambar = document.getElementById('updateGambar');

        $.ajax({
            method: "GET",
            url: base_url + "/find/" + id,
            dataType: "json",
            success: function (response) {
                updateGambar.src = asset_url + response[0]['processorImage'];
                $('#idUpdate').val(response[0]['processorId']);
                $('#imageAwal').val(response[0]['processorImage']);
                $('#processorNameUpdate').val(response[0]['processorName']);
                $('#processorGenUpdate').val(response[0]['processorGen']);
                $('#socketProcessorUpdate').val(response[0]['socket']['processorSocketId']);
                $('#brandProcessorUpdate').val(response[0]['brand']['brandId']);
                $('#processorCoreUpdate').val(response[0]['processorCore']);
                $('#processorThreadUpdate').val(response[0]['processorThread']);
                $('#processorBaseSpeedUpdate').val(response[0]['processorBaseSpeed']);
                $('#processorBoostSpeedUpdate').val(response[0]['processorBoostSpeed']);
                $('#processorCacheUpdate').val(response[0]['processorCache']);
                $('#processorArchUpdate').val(response[0]['processorArch']);
                $('#processorIgpuUpdate').val(response[0]['processorIgpu']);
                $('#processorPowerUpdate').val(response[0]['processorPower']);
                $('#processorHeatsinkUpdate').val(response[0]['processorHeatsink']);
                $('#processorWarrantyUpdate').val(response[0]['processorWarranty']);
                $('#processorPriceUpdate').val(response[0]['processorPrice']);
                $('#processorStockUpdate').val(response[0]['processorStock']);

                $("#updateCPU").modal("show");
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