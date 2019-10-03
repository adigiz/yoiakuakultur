@extends('layouts/index')

@section('section')

<div class="section">
  <div class="container">
    <h1 class="title has-text-centered">Form</h1>
    @if ($errors->any())
    <div class="notification is-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    @if ($message = Session::get('success'))
      <div class="notification is-success">
          <strong>{{ $message }}</strong>
      </div>
    @endif
    @if (isset($card))
    <form action="/welcome/cards/edit/{{$card->id}}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="field">
        <label class="label">Card Title</label>
        <div class="control">
          <input class="input" type="text" placeholder="e.g. Modal Gotong Royong" name="card_title"
            value="{{ $card->card_title }}" required>
        </div>
      </div>
      <div class="field">
        <label class="label">Card Description</label>
        <div class="control">
          <textarea class="textarea"
            placeholder="e.g. Dengan digunakannya modal gotong royong sehingga tidak harus menggunakan modal besar"
            name="card_description" required>{{ $card->description }}</textarea>
        </div>
      </div>
      <div class="field">
        <label class="label">Image Upload</label>
        <div class="control">
          <div class="file">
            <label class="file-label">
              <input class="file-input" type="file" name="image" required>
              <span class="file-cta">
                <span class="file-icon">
                  <i class="fas fa-upload"></i>
                </span>
                <span class="file-label">
                  Choose a image
                </span>
              </span>
            </label>
          </div>
        </div>
      </div>
      <div class="field is-grouped">
        <div class="control">
          <button class="button is-success">Submit</button>
        </div>
      </div>
    </form>
    @else
    <form action="/welcome/cards/new" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="field">
        <label class="label">Card Title</label>
        <div class="control">
          <input class="input" type="text" placeholder="e.g. Modal Gotong Royong" name="card_title" required>
        </div>
      </div>
      <div class="field">
        <label class="label">Card Description</label>
        <div class="control">
          <textarea class="textarea"
            placeholder="e.g. Dengan digunakannya modal gotong royong sehingga tidak harus menggunakan modal besar"
            name="card_description" required></textarea>
        </div>
      </div>
      <div class="field">
        <label class="label">Image Upload</label>
        <div class="control">
          <div class="file">
            <label class="file-label">
              <input class="file-input" type="file" name="image" required>
              <span class="file-cta">
                <span class="file-icon">
                  <i class="fas fa-upload"></i>
                </span>
                <span class="file-label">
                  Choose an image
                </span>
              </span>
            </label>
          </div>
        </div>
      </div>
      <div class="field is-grouped">
        <div class="control">
          <button class="button is-success">Submit</button>
        </div>
      </div>
    </form>
    @endif
  </div>
</div>
@endsection