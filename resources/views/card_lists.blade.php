@extends('layouts/index')

@section('section')
<div class="section">
  <div class="container">
    <table class="table">
      <thead>
        <th>id</th>
        <th>Card Title</th>
        <th>Description</th>
        <th>Image Path</th>
        <th>Action</th>
      </thead>
      <tbody>
        @foreach ($card_contents as $data)
        <tr>
          <td>{{ $data->id }}</td>
          <td>{{ $data->card_title }}</td>
          <td>{{ $data->description }}</td>
          <td>{{ $data->path }}</td>
          <td>
          <a href="/welcome/cards/delete/{{$data->id}}">delete</a>
          <a href="/welcome/cards/edit/{{$data->id}}">edit</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection