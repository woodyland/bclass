@extends('layouts.masterlayout')
@section('title', 'hal produk')
@section('content')
<h1> 
{{ $product['id'] }}<br>
{{ $product['barang'] }}<br>
Rp. {{ $product['harga'] }}<br>

</h1>
@endsection