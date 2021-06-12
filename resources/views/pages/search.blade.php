@extends('layouts.dashboard')
@section('title', 'Search')

@push('after-style')
@endpush

@section('content')
<div class="flex flex-col px-8">
    <h2 class="text-2xl font-semibold mb-12 text-white">Tempat terdekat dari lokasi mu</h2>
@forelse ($near as $item)
@if (request()->input('service') == 'vaccine')
<div class="flex flex-col rounded bg-yellow-200 p-4 h-100 w-full mb-4">
    <div class="flex flex-row">
        <div style="width: 500px" class="flex justify-center items-center mr-4 rounded bg-gray-400"><p class="text-white font-bold text-2xl">Image</p></div>
        <div class="w-full flex flex-col">
            <div class="flex justify-between">
                <p style="font-size: 22px;" class="font-semibold text-yellow-700">{{$item->name}}</p>
                <p style="font-weight: 500; font-size: 14px" class="text-white text-center bg-yellow-700 p-1 rounded w-1/6">Vaksin Covid</p>
            </div>
            <p>{{$item->type}}</p>
            <br>
            
            <p class="mb-2">Jenis yang diambil: {{$item->schedule[0]->title}}</p>
            <p class="mb-2">Tanggal Pelaksanaan: {{$item->schedule[0]->date}}</p>
            <p class="mb-2">Waktu: {{$item->schedule[0]->time_start}} - {{$item->schedule[0]->time_end}}</p>
            <br>
            <div class="flex flex-row justify-between">
                <p class="font-bold mb-2">{{$item->address}}, {{$item->kelurahan}}, {{$item->kecamatan}}, {{$item->kota}}, {{$item->provinsi}}</p>
                <a href="{{route('detail', $item->id)}}?service=vaccine"
                            class="inline-flex  text-black text-lg leading-7 py-3 px-8 rounded-xl focus:outline-none box-shadow-header-4-4  font-semibold"
                            style="background-color: #FFF2DE; font-family: 'Poppins', sans-serif;">Lihat Detail</a>
            </div>
            
        </div>
    </div>
</div>
@else
<div class="flex flex-col rounded bg-yellow-200 p-4 h-100 w-full mb-4">
    <div class="flex flex-row">
        <div style="width: 500px" class="flex justify-center items-center mr-4 rounded bg-gray-400"><p class="text-white font-bold text-2xl">Image</p></div>
        <div class="w-full flex flex-col">
            <div class="flex justify-between">
                <p style="font-size: 22px;" class="font-semibold text-yellow-700">{{$item->name}}</p>
                <p style="font-weight: 500; font-size: 14px" class="text-white text-center bg-yellow-700 p-1 rounded w-1/6">Rp{{$item->service[0]->price/1000}}.000</p>
            </div>
            <p>{{$item->type}}</p>
            <br>
            
            <p class="mb-2">Jenis yang diambil: {{$item->service[0]->name}}</p>
            <p class="mb-2 font-semibold">Deskripsi: </p>
            <p class="mb-2">{{$item->service[0]->description}}</p>
            <br>
            <div class="flex flex-row justify-between">
                <p class="font-bold mb-2">{{$item->address}}, {{$item->kelurahan}}, {{$item->kecamatan}}, {{$item->kota}}, {{$item->provinsi}}</p>
                <a href="{{route('detail', $item->id)}}?service=test"
                            class="inline-flex  text-black text-lg leading-7 py-3 px-8 rounded-xl focus:outline-none box-shadow-header-4-4  font-semibold"
                            style="background-color: #FFF2DE; font-family: 'Poppins', sans-serif;">Lihat Detail</a>
            </div>
            
        </div>
    </div>
</div>
@endif

@empty
    
@endforelse
    <h2 class="text-2xl font-semibold mt-8 mb-12 text-white">Semua Lokasi</h2>
@forelse ($all as $item)
    @if (request()->input('service') == 'vaccine')
    <div class="flex flex-col rounded bg-yellow-200 p-4 h-100 w-full mb-4">
        <div class="flex flex-row">
            <div style="width: 500px" class="flex justify-center items-center mr-4 rounded bg-gray-400"><p class="text-white font-bold text-2xl">Image</p></div>
            <div class="w-full flex flex-col">
                <div class="flex justify-between">
                    <p style="font-size: 22px;" class="font-semibold text-yellow-700">{{$item->name}}</p>
                    <p style="font-weight: 500; font-size: 14px" class="text-white text-center bg-yellow-700 p-1 rounded w-1/6">Vaksin Covid</p>
                </div>
                <p>{{$item->type}}</p>
                <br>
                
                <p class="mb-2">Jenis yang diambil: {{$item->schedule[0]->title}}</p>
                <p class="mb-2">Tanggal Pelaksanaan: {{$item->schedule[0]->date}}</p>
                <p class="mb-2">Waktu: {{$item->schedule[0]->time_start}} - {{$item->schedule[0]->time_end}}</p>
                <br>
                <div class="flex flex-row justify-between">
                    <p class="font-bold mb-2">{{$item->address}}, {{$item->kelurahan}}, {{$item->kecamatan}}, {{$item->kota}}, {{$item->provinsi}}</p>
                    <a href="{{route('detail', $item->id)}}?service=vaccine"
                                class="inline-flex  text-black text-lg leading-7 py-3 px-8 rounded-xl focus:outline-none box-shadow-header-4-4  font-semibold"
                                style="background-color: #FFF2DE; font-family: 'Poppins', sans-serif;">Lihat Detail</a>
                </div>
                
            </div>
        </div>
        
        
      </div>
    @else
    <div class="flex flex-col rounded bg-yellow-200 p-4 h-100 w-full mb-4">
        <div class="flex flex-row">
            <div style="width: 500px" class="flex justify-center items-center mr-4 rounded bg-gray-400"><p class="text-white font-bold text-2xl">Image</p></div>
            <div class="w-full flex flex-col">
                <div class="flex justify-between">
                    <p style="font-size: 22px;" class="font-semibold text-yellow-700">{{$item->name}}</p>
                    <p style="font-weight: 500; font-size: 14px" class="text-white text-center bg-yellow-700 p-1 rounded w-1/6">Rp{{$item->service[0]->price/1000}}.000</p>
                </div>
                <p>{{$item->type}}</p>
                <br>
                
                <p class="mb-2">Jenis yang diambil: {{$item->service[0]->name}}</p>
                <p class="mb-2 font-semibold">Deskripsi: </p>
                <p class="mb-2">{{$item->service[0]->description}}</p>
                <br>
                <div class="flex flex-row justify-between">
                    <p class="font-bold mb-2">{{$item->address}}, {{$item->kelurahan}}, {{$item->kecamatan}}, {{$item->kota}}, {{$item->provinsi}}</p>
                    <a href="{{route('detail', $item->id)}}?service=test"
                                class="inline-flex  text-black text-lg leading-7 py-3 px-8 rounded-xl focus:outline-none box-shadow-header-4-4  font-semibold"
                                style="background-color: #FFF2DE; font-family: 'Poppins', sans-serif;">Lihat Detail</a>
                </div>
                
            </div>
        </div>
    </div>
    @endif

@empty
    
@endforelse
</div>

@endsection