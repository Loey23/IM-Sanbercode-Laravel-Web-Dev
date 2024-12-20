@extends('layouts.master')

@section('title')
    Cast
@endsection

@section('content')
    <a href="/cast/create" class="btn btn-sm btn-primary">Create</a>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Umur</th>
      <th scope="col">Bio</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($casts as $cast)
    <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{ $cast->name }}</td>
        <td>{{ $cast->age }}</td>
        <td>
            <form action="/cast/{{$cast->id}}" method="POST">
                @csrf
                @method('DELETE')
                <a href="/cast/{{$cast->id}}" class="btn btn-sm btn-info">Detail</a>
                <a href="/cast/{{$cast->id}}/edit" class="btn btn-sm btn-warning">Edit</a>
                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @empty
        <tr>
            <<th scope="row">Cast masih kosong</th>
        </tr>
    @endforelse
  </tbody>
</table>
@endsection