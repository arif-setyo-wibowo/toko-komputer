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
    $("#moboImage").change(function () {
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
        var id = $(this).attr("id");
        var moboGambar = document.getElementById('moboGambar');
        var nama = document.getElementById('nama');
        var merk = document.getElementById('merk');
        var chipset = document.getElementById('chipset');
        var socket = document.getElementById('socket');
        var port = document.getElementById('port');
        var storageSata = document.getElementById('storageSata');
        var storageM2 = document.getElementById('storageM2');
        var formFactor = document.getElementById('formFactor');
        var typeMemory = document.getElementById('typeMemory');
        var maxMemory = document.getElementById('maxMemory');
        var garansi = document.getElementById('garansi');
        var stok = document.getElementById('stok');
        var harga = document.getElementById('harga');
        var deskripsi = document.getElementById('deskripsi');

        $.ajax({
            method: "GET",
            url: base_url + "/find/" + id,
            dataType: "json",
            success: function (response) {
                moboGambar.src = asset_url + response[0]['moboImage'];
                nama.textContent = response[0]['moboName'];
                merk.textContent = response[0]['brand']['brandName'];
                chipset.textContent = response[0]['moboChipset'];
                socket.textContent = response[0]['socket']['processorSocketName'];
                storageSata.textContent = response[0]['moboStorageSata'];
                storageM2.textContent = response[0]['moboStorageM2'];
                formFactor.textContent = response[0]['moboFormFactor'];
                typeMemory.textContent = response[0]['moboMemorySlot'] + " x " + response[0]['moboMemoryType'];
                maxMemory.textContent = response[0]['moboMemoryCap'];
                garansi.textContent = response[0]['moboWarranty'];
                stok.textContent = response[0]['moboStock'];
                deskripsi.textContent = response[0]['moboDescription'];
                harga.textContent = formatRupiah(response[0]['moboPrice']);

                // moboPort
                var portdetail = response[0]['moboPort'].split(', ');
                var arrPort = [];
                for (let i = 0; i < portdetail.length; i++) {
                    if (portdetail[i] != "0") {
                        arrPort.push(" " + portdetail[i]);
                    }
                }

                port.textContent = arrPort;
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
                updateGambar.src = asset_url + response[0]['moboImage'];
                $('#idUpdate').val(response[0]['moboId']);
                $('#imageAwal').val(response[0]['moboImage']);
                $('#namaUpdate').val(response[0]['moboName']);
                $('#typeUpdate').val(response[0]['moboMemoryType']);
                $('#socketUpdate').val(response[0]['socket']['processorSocketId']);
                $('#chipsetUpdate').val(response[0]['moboChipset']);
                $('#sataUpdate').val(response[0]['moboStorageSata']);
                $('#M2Update').val(response[0]['moboStorageM2']);
                $('#slotUpdate').val(response[0]['moboMemorySlot']);
                $('#capUpdate').val(response[0]['moboMemoryCap']);
                $('#ffUpdate').val(response[0]['moboFormFactor']);
                $('#descUpdate').val(response[0]['moboDescription']);
                $('#brandUpdate').val(response[0]['brand']['brandId']);
                $('#garansiUpdate').val(response[0]['moboWarranty']);
                $('#hargaUpdate').val(response[0]['moboPrice']);
                $('#stokUpdate').val(response[0]['moboStock']);

                // Real Panel Parts
                var parts = (response[0]['moboPort'].split(', '));

                $('#usbcUpdate').val(parts[0]);
                $('#usb20Update').val(parts[1]);
                $('#usb32Update').val(parts[2]);
                $('#psUpdate').val(parts[3]);
                $('#dsubUpdate').val(parts[4]);
                $('#pdifUpdate').val(parts[5]);
                $('#ethernetUpdate').val(parts[6]);
                $('#firewireUpdate').val(parts[7]);
                $('#paralelUpdate').val(parts[8]);
                $('#serialUpdate').val(parts[9]);
                $('#audioUpdate').val(parts[10]);
                $('#hdmiUpdate').val(parts[11]);
                $('#dpUpdate').val(parts[12]);
                $('#eSataUpdate').val(parts[13]);
                $('#dviUpdate').val(parts[14]);
                $("#updateMobo").modal("show");

            }
        });
    });

    // Modal Hapus
    $(document).on('click', '.button-hapus', function () {
        var id = $(this).attr("id");
        $("#hapusData").modal("show");

        $(document).on('click', '.buttonAksiHapus', function () {
            window.location.replace(base_url + "/delete/" + id);
        })
    });

});