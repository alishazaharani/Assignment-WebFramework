@extends('layout')

@section('title', 'Program')

@section('content')
<div class="text-left">
    <h1>Program Kami</h1>
    <p>Mini Market Mitra Buana Melawi tidak hanya sekadar tempat belanja, tapi juga mendukung masyarakat sekitar melalui program-program:</p>
    
    @php
        $programs = [
            ['nama' => 'Promo Mingguan: Diskon menarik untuk kebutuhan harian.', 'status' => 'aktif'],
            ['nama' => 'Belanja Hemat Grosir: Harga spesial untuk pembelian dalam jumlah banyak.', 'status' => 'aktif'],
            ['nama' => 'Layanan Antar Area Pinoh: Belanja jadi lebih mudah, tinggal pesan dan barang sampai di rumah.', 'status' => 'aktif'],
            ['nama' => 'Dukungan Produk Lokal: Kami menyediakan ruang bagi produk-produk lokal Melawi untuk lebih dikenal masyarakat.', 'status' => 'selesai'],
        ];
    @endphp

    <ul>
        @foreach ($programs as $p)
            <li>
                {{ $p['nama'] }} 
                @if ($p['status'] == 'aktif')
                    <span class="badge bg-success">Sedang Berjalan</span>
                @else
                    <span class="badge bg-secondary">Selesai</span>
                @endif
            </li>
        @endforeach
    </ul>
</div>
@endsection
