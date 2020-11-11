@extends('book.indexBook')
@section('title','Edit Book')
@section('body')

<div class="container">
  <div class="row">
    <div class="col-12">
      <form method="post" action="{{ route('book.update', $book->id)}}">
        @csrf
        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" name='name' value="{{ $book->name }}">
        </div>
        <div class="form-group">
          <label>Price</label>
          <input type="number" class="form-control" name='price' value="{{ $book->price }}">
        </div>
        <div class="form-group">
          <label>Status</label>
          <input type="radio" name='status' value="con hang">Con Hang
          <input type="radio" name='status' value="het hang">Het Hang </div>
        <div class="form-group">
          <label>Student:</label>
          <select name='student_id'>
            @foreach($students as $student)
            <option value="{{ $student->id }}">{{ $student->name }}</option>
            @endforeach
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
        <a onclick="return window.history.go(-1)" class="btn btn-danger">Cancel</a>
      </form>
    </div>
  </div>
</div>
@endsection