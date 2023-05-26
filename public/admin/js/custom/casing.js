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
    $("#caseImage").change(function () {
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
        var caseGambar = document.getElementById('caseGambar');
        var caseName = document.getElementById('caseName');
        var caseMerk = document.getElementById('caseMerk');
        var caseType = document.getElementById('caseType');
        var caseFanSlot = document.getElementById('caseFanSlot');
        var caseDescription = document.getElementById('caseDescription');
        var caseWarranty = document.getElementById('caseWarranty');
        var casePrice = document.getElementById('casePrice');
        var caseStock = document.getElementById('caseStock');

        $.ajax({
            method: "GET",
            url: base_url + "/find/" + id,
            dataType: "json",
            success: function (response) {
                console.log(id);
                caseGambar.src = asset_url + response[0]['caseImage'];
                caseName.textContent = response[0]['caseName'];
                caseMerk.textContent = response[0]['brand']['brandName'];
                caseType.textContent = response[0]['caseType'];
                caseFanSlot.textContent = response[0]['caseFanSlot'];
                caseDescription.textContent = response[0]['caseDescription'];
                caseWarranty.textContent = response[0]['caseWarranty'];
                casePrice.textContent = formatRupiah(response[0]['casePrice']);
                caseStock.textContent = response[0]['caseStock'];
                $("#detail").modal("show");
            }
        });
    });

    // Update Data
    $(document).on('click', '.buttonupdate', function () {
        var id = $(this).attr("id");
        var UpdateGambar = document.getElementById('UpdateGambar');
        $("#updateCase").modal("show");

        $.ajax({
            method: "GET",
            url: base_url + "/find/" + id,
            dataType: "json",
            success: function (response) {
                UpdateGambar.src = asset_url + response[0]['caseImage'];
                $('#idUpdate').val(response[0]['caseId']);
                $('#imageAwal').val(response[0]['caseImage']);
                $('#namaUpdate').val(response[0]['caseName']);
                $('#typeUpdate').val(response[0]['caseType']);
                $('#fanUpdate').val(response[0]['caseFanSlot']);
                $('#stokUpdate').val(response[0]['caseStock']);
                $('#hargaUpdate').val(response[0]['casePrice']);
                $('#garansiUpdate').val(response[0]['caseWarranty']);
                $('#deskripsiUpdate').val(response[0]['caseDescription']);
                $('#brandUpdate').val(response[0]['brand']['brandId']);
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