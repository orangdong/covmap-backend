@extends('layouts.dashboard')
@section('title', 'Checkout')

@push('after-style')
@endpush

@section('content')
<div class="flex flex-col items-center">
    <img class="mt-n12" width="500px" height="500px" src="{{asset('assets/img/happy.svg')}}" alt="">
    <h1 class="mt-24 text-center text-white text-2xl font-bold">
        YAY! Selamat, {{$user->name}} Kamu telah terdaftar.<br> Tinggal tunggu sesuai jadwal ya!
    </h1>
    <a class="text-white mt-4 text-lg underline" href="{{route('dashboard')}}">Kembali ke Home</a>
</div>
@endsection