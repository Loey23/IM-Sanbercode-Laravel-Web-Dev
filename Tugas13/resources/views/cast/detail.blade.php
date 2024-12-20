@extends('layouts.master')

@section('title')
    Detail Cast
@endsection

@section('content')
    <h1 class="text-primary">{{$kast->name}}</h1>
    <p>{{ $kast->age}}</p>
    <p>{{ $kast->bio }} </p>

    <a href="/cast" class="btn btn-sm btn-secondary">Kembali</a>
@endsection