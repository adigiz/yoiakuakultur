@extends('layouts/index')

@section('section')
<div class="section">
  <div class="container">
    <div class="level">
      <div class="level-left">
        <h1 class="level-item title">Card List</h1>
      </div>
      <div class="level-right">
        <div class="level-item">
          <a class="button is-link" href="/welcome/cards/new">New Card</a>
        </div>
      </div>
    </div>
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