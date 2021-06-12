@extends('layouts.dashboard')
@section('title', 'Detail')

@push('after-style')
@endpush

@section('content')
<div class="flex flex-row px-8 justify-between">
    @if (request()->input('service') == 'test')
    <div class="flex flex-col w-1/2">
        <h1 class="font-semibold text-2xl text-center text-white mb-12">Detail pembayaran</h1>
        <div class="flex flex-col  p-4">
            <div class="flex flex-row justify-between pr-8 w-full mb-2">
                <p class="text-lg font-semibold text-white">Lokasi: </p>
                <p class="text-lg text-white">{{$detail->name}}</p>
            </div>
            <div class="flex flex-row justify-between pr-8 w-full mb-2">
                <p class="text-lg font-semibold text-white">Tipe Lokasi: </p>
                <p class="text-lg text-white">{{$detail->type}}</p>
            </div>
            
            <div class="flex flex-row justify-between pr-8 w-full mb-2">
                <p class="text-lg font-semibold text-white">Alamat: </p>
                <p class="text-lg text-right text-white">{{$detail->address}}, {{$detail->kelurahan}}, {{$detail->kecamatan}}</p>
            </div>
            <div class="flex flex-row justify-between pr-8 w-full mb-2">
                <p class="text-lg font-semibold text-white">Provinsi: </p>
                <p class="text-lg text-right text-white">{{$detail->provinsi}}</p>
            </div>
            <div class="flex flex-row justify-between pr-8 w-full mb-2">
                <p class="text-lg font-semibold text-white">Kota: </p>
                <p class="text-lg text-right text-white">{{$detail->kota}}</p>
            </div>
            <div class="flex flex-row justify-between pr-8 w-full mb-2">
                <p class="text-lg font-semibold text-white">Kegiatan: </p>
                <p class="text-lg text-white">Test Covid-19</p>
            </div>
            <div class="flex flex-row justify-between pr-8 w-full mb-2">
                <p class="text-lg font-semibold text-white">Jenis: </p>
                <p class="text-lg text-white">{{$detail->service[0]->name}}</p>
            </div>
            <div class="flex flex-row justify-between pr-8 w-full mb-2">
                <p class="text-lg font-semibold text-white">Harga: </p>
                <p class="text-lg text-white">Rp{{$detail->service[0]->price/1000}}.000</p>
            </div>
            <div class="flex flex-col pr-8 w-full mb-2">
                <p class="text-lg mb-3 font-semibold text-white">Deskripsi: </p>
                <p class="text-lg text-left text-white">{{$detail->service[0]->description}}</p>
            </div>
            
            <hr class="mt-2 mb-4">
            @if ($possible == 'no')
                <p class="text-white text-center text-lg">
                    Produk sudah pernah dibeli
                </p>
            @else
            <a href="{{route('checkout')}}?location={{$location_id}}"
            class="text-black text-lg leading-7 py-3 px-8 rounded-xl text-center focus:outline-none box-shadow-header-4-4  font-semibold"
            style="background-color: #FFF2DE; font-family: 'Poppins', sans-serif;">Checkout</a>
            @endif
            
        </div>
    </div>
    <div class="flex flex-row bg-white h-300 w-1/2 justify-center items-center rounded">
        <p class="text-black font-bold text-2xl">Maps</p>
    </div>
    @else
    <div class="flex flex-col w-1/2">
        <h1 class="font-semibold text-2xl text-center text-white mb-12">Detail pembayaran</h1>
        <div class="flex flex-col  p-4">
            <div class="flex flex-row justify-between pr-8 w-full mb-2">
                <p class="text-lg font-semibold text-white">Lokasi: </p>
                <p class="text-lg text-white">{{$detail->name}}</p>
            </div>
            <div class="flex flex-row justify-between pr-8 w-full mb-2">
                <p class="text-lg font-semibold text-white">Tipe Lokasi: </p>
                <p class="text-lg text-white">{{$detail->type}}</p>
            </div>
            <div class="flex flex-row justify-between pr-8 w-full mb-2">
                <p class="text-lg font-semibold text-white">Alamat: </p>
                <p class="text-lg text-right text-white">{{$detail->address}}, {{$detail->kelurahan}}, {{$detail->kecamatan}}</p>
            </div>
            <div class="flex flex-row justify-between pr-8 w-full mb-2">
                <p class="text-lg font-semibold text-white">Provinsi: </p>
                <p class="text-lg text-right text-white">{{$detail->provinsi}}</p>
            </div>
            <div class="flex flex-row justify-between pr-8 w-full mb-2">
                <p class="text-lg font-semibold text-white">Kota: </p>
                <p class="text-lg text-right text-white">{{$detail->kota}}</p>
            </div>
            <div class="flex flex-row justify-between pr-8 w-full mb-2">
                <p class="text-lg font-semibold text-white">Kegiatan: </p>
                <p class="text-lg text-white">Vaksin Covid-19</p>
            </div>
            <div class="flex flex-row justify-between pr-8 w-full mb-2">
                <p class="text-lg font-semibold text-white">Jenis Vaksin: </p>
                <p class="text-lg text-white">{{$detail->schedule[0]->title}}</p>
            </div>
            <div class="flex flex-row justify-between pr-8 w-full mb-2">
                <p class="text-lg font-semibold text-white">Tanggal: </p>
                <p class="text-lg text-white">{{$detail->schedule[0]->date}}</p>
            </div>
            <div class="flex flex-row justify-between pr-8 w-full mb-2">
                <p class="text-lg font-semibold text-white">Waktu: </p>
                <p class="text-lg text-white">{{$detail->schedule[0]->time_start}} - {{$detail->schedule[0]->time_end}}</p>
            </div>
            
            <hr class="mt-2 mb-4">
            @if ($possible == 'no')
                <p class="text-white text-center text-lg">
                    Produk sudah pernah dibeli
                </p>
            @else
            <a href="{{route('checkout')}}?location={{$location_id}}"
            class="text-black text-lg leading-7 py-3 px-8 rounded-xl text-center focus:outline-none box-shadow-header-4-4  font-semibold"
            style="background-color: #FFF2DE; font-family: 'Poppins', sans-serif;">Checkout</a>
            @endif
            
        </div>
    </div>
    <div class="flex flex-row bg-white h-300 w-1/2 justify-center items-center rounded">
        <p class="text-black font-bold text-2xl">Maps</p>
    </div>
    @endif
</div>
@endsection