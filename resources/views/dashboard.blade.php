@extends('layouts.dashboard')
@section('title', 'Dashboard')

@push('after-style')
@endpush

@section('content')
    <div class="flex flex-col items-center">

    
    @forelse ($history as $item)
        
    @empty
    <img style="width: 500px; height: auto" src="{{asset('assets/img/empty.svg')}}" alt="empty">
    <h2 class="text-3xl text-center font-semibold mt-20 mb-4 text-white">Kamu belum ada jadwal</h2>
    <a href="{{route('search')}}?service=test&sort=near"
                            class="inline-flex text-black text-lg leading-7 py-3 px-8 rounded-xl focus:outline-none box-shadow-header-4-4  font-semibold"
                            style="background-color: #FFF2DE; font-family: 'Poppins', sans-serif;">Buat Janji </a>
    
    @endforelse
    </div>
@endsection