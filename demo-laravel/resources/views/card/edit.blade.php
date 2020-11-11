@extends('book.indexBook')
@section('title', 'Edit Card')
@section('body')

<div class="container">
  <div class="row">
    <div class="col-12">
      <form method="post" action="{{ route('card.update', $card->id) }}">
        @csrf
        <div class="form-group">
          <label>Name:</label>
          <input type="text" class="form-control" name='name' value='{{ $card->name}}'>
        </div>
        <div class="form-group">
          <label>Class:</label>
          <input type="text" class="form-control" name='class' value='{{ $card->class }}'>
        </div>
          <label>Gender:</label><br>
          <input type="radio" name='status' value="male">Nam
          <input type="radio" name='status' value="female">Nu
          <div class="form-group">
          <label>Address:</label>
          <input type="text" class="form-control" name='address' value = '{{ $card->address }}'>
        </div>
          <br><br>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a onclick="return window.history.go(-1)" class="btn btn-danger">Cancel</a>
      </form>
    </div>
  </div>
</div>

@endsection