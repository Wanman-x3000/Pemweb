<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale())
}}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,
        initial-scale=1">
        <title>Pemesanan</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
    </head>
    <body>
        <h1>Form Pemesanan</h1>
        <form method="post" action="{{ route('submit-order')
        }}">
             @csrf
             <label for="nik">NIK:</label>
             <input type="number" id="nik" name="nik"
             required><br>
             <label for="name">Nama:</label>
             <input type="text" id="name" name="name"
             required><br>
             <label for="provinsi">Provinsi:</label>
             <input type="text" id="provinsi" name="provinsi"
             required><br>
             <label for="kota">Kota:</label>
             <input type="text" id="kota" name="kota"
             required><br>
             <label for="telpon">Nomor Telpon:</label>
             <input type="number" id="telpon" name="telpon"
             required><br>
            <button type="submit">Submit Pesanan</button>
        </form>
    </body>
</html>
