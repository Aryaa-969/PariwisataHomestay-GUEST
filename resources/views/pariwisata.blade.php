<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pariwisata & Homestay</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h2 { color: darkblue; }
        .card { border: 1px solid #ccc; padding: 15px; margin-bottom: 10px; border-radius: 8px; }
        .fasilitas { margin-top: 5px; font-size: 14px; color: #555; }
    </style>
</head>
<body>

    <h1>Daftar Destinasi Pariwisata</h1>
    @foreach($destinasi as $item)
        <div class="card">
            <h2>{{ $item['nama'] }}</h2>
            <p><b>Lokasi:</b> {{ $item['lokasi'] }}</p>
            <p>{{ $item['deskripsi'] }}</p>
        </div>
    @endforeach

    <hr>

    <h1>Rekomendasi Homestay</h1>
    @foreach($homestay as $stay)
        <div class="card">
            <h2>{{ $stay['nama'] }}</h2>
            <p><b>Harga:</b> {{ $stay['harga'] }}</p>
            <div class="fasilitas">
                <b>Fasilitas:</b> {{ implode(', ', $stay['fasilitas']) }}
            </div>
        </div>
    @endforeach

</body>
</html>
