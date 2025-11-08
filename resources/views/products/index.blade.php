<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk</title>
</head>
<body>
    <h1>Daftar Produk</h1>

    @foreach ($products as $product)
        <div>
            <strong>{{ $product->name }}</strong><br>
            Deskripsi: {{ $product->description ?? '-' }}<br>
            Harga: Rp{{ number_format($product->price) }}<br>
            Stok: {{ $product->stock }}<br>
            Kategori: {{ $product->category ?? '-' }}
        </div>
        <hr>
    @endforeach
</body>
</html>