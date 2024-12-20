@extends('layouts.master')

@section('title')
    Halaman Create Cast
@endsection

@section('content')
<form action="/cast" method="POST">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @csrf
  <div class="form-group">
    <label>Name: </label>
    <input type="text" name="name" class="form-control" value="{{old('name')}}">
  </div>
  <div class="form-group">
    <label">Umur: </label>
    <input type="number" name="age" class="form-control" value="{{old('age')}}>
  </div>
  <div class="form-group">
    <label">Bio: </label>
    <textarea name="bio" class="form-control" id="" cols="30" rows="10">{{old('age')}}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection