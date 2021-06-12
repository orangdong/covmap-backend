@extends('layouts.dashboard')
@section('title', 'Dashboard')

@push('after-style')
@endpush

@section('content')
    <div class="flex lg:px-8 sm:px-1 flex-col">

        <h2 class="text-2xl font-semibold mb-12 text-white">Jadwal Yang Akan Datang</h2>
    @forelse ($history as $item)
        @if ($item->location->service_type == 'test')
        <div class="flex flex-col rounded bg-yellow-200 p-4 h-100 w-1/2 mb-4">
            <p style="font-size: 22px;" class="font-semibold text-yellow-700">{{$item->location->name}}</p>
            <p>{{$item->location->type}}</p>
            <br>
            <p class="mb-2">{{$item->location->address}}, {{$item->location->kelurahan}}, {{$item->location->kecamatan}}, {{$item->location->kota}}, {{$item->location->provinsi}}</p>
            <p class="mb-4">Jenis yang diambil: {{$item->location->service[0]->name}}</p>
            <p style="font-weight: 500; font-size: 14px" class="text-white text-center bg-yellow-700 p-1 rounded w-1/6">Tes Covid</p>
          </div>
          @else
          <div class="flex flex-col rounded bg-yellow-200 p-4 h-100 w-1/2 mb-4">
            <p style="font-size: 22px;" class="font-semibold text-yellow-700">{{$item->location->name}}</p>
            <p>{{$item->location->type}}</p>
            <br>
            <p class="mb-2">{{$item->location->address}}, {{$item->location->kelurahan}}, {{$item->location->kecamatan}}, {{$item->location->kota}}, {{$item->location->provinsi}}</p>
            <p class="mb-2">Jenis yang diambil: {{$item->location->schedule[0]->title}}</p>
            <p class="mb-2">Tanggal Pelaksanaan: {{$item->location->schedule[0]->date}}</p>
            <p class="mb-4">Waktu: {{$item->location->schedule[0]->time_start}} - {{$item->location->schedule[0]->time_end}}</p>
            <p style="font-weight: 500; font-size: 14px" class="text-white text-center bg-yellow-700 p-1 rounded w-1/6">Vaksin Covid</p>
          </div>
          @endif
       
    @empty
    <div class="flex flex-col items-center">
        <img style="width: 500px; height: auto" src="{{asset('assets/img/empty.svg')}}" alt="empty">
    <h2 class="text-3xl text-center font-semibold mt-20 mb-4 text-white">Kamu belum ada jadwal</h2>
    <a href="{{route('search')}}?service=test&sort=near"
                            class="inline-flex text-black text-lg leading-7 py-3 px-8 rounded-xl focus:outline-none box-shadow-header-4-4  font-semibold"
                            style="background-color: #FFF2DE; font-family: 'Poppins', sans-serif;">Buat Janji </a>
    </div>
    
    
    @endforelse
    </div>
@endsection