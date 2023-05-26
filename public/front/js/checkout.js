$(document).ready(function () {
    var provinceSelect = $('#provinceSelect');
    var citySelect = $('#citySelect');
    var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    var subtotal = parseInt(document.getElementById('subtotal').value);
    var myOngkir = document.getElementById('ongkir');
    var myTotal = document.getElementById('total');
    var kota = document.getElementById('kota');

    // Permintaan GET untuk mendapatkan daftar provinsi
    $.ajax({
        url: '/provinces',
        type: 'GET',
        success: function (response) {
            var provinces = response;

            provinces.forEach(function (province) {
                provinceSelect.append('<option value="' + province.province_id + '">' + province.province + '</option>');
            });
        },
        error: function (xhr, status, error) {
            console.error(error);
        }
    });

    // Menangani perubahan pada elemen select form provinsi
    provinceSelect.on('change', function () {
        var selectedProvinceId = $(this).val();
        // Menghapus opsi kota yang ada
        citySelect.empty();

        // Permintaan GET untuk mendapatkan daftar kota berdasarkan provinsi yang dipilih
        $.ajax({
            url: '/cities',
            type: 'GET',
            data: {
                province_id: selectedProvinceId
            },
            success: function (response) {
                var cities = response;

                // Loop melalui daftar kota dan tambahkan sebagai opsi ke elemen select form
                citySelect.append('<option value="" selected disabled>Pilih kota...</option > ');
                cities.forEach(function (city) {
                    citySelect.append('<option value="' + city.city_id + '">' + city.city_name + '</option>');
                });
            },
            error: function (xhr, status, error) {
                console.error(error);
            }
        });
    });

    citySelect.on('change', function () {
        var destination = $(this).val();
        var origin = 409;
        var weight = 2000;
        var courier = "pos";

        $.ajax({
            url: '/cost',
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            data: {
                origin: origin,
                destination: destination,
                weight: weight,
                courier: courier
            },
            success: function (response) {
                var hasil = response['results'][0].costs[0]['cost'][0]['value'];
                kota.value = response['destination_details']['city_name'];
                myOngkir.textContent = "Rp. " + hasil.toFixed(0).replace(/\B(?=(\d{3})+(?!\d))/g, '.');
                total = hasil + subtotal;
                myTotal.textContent = "Rp. " + total.toFixed(0).replace(/\B(?=(\d{3})+(?!\d))/g, '.');
            },
            error: function (xhr, status, error) {
                console.error(error);
            }
        });
    })
});
