@extends('book.indexBook')
@section('title', 'Create Role')
@section('body')

<div class="container">
  <div class="row">
    <div class="col-12">
      <form method="post" action="{{ route('role.store') }}">
        @csrf
        <div class="form-group">
          <label>Name:</label>
          <input type="text" class="form-control" name='name_role'>
        </div>
        <div class="form-group">
          <label>Student:</label>
          <select name='student_id'>
            @foreach($students as $student)
            <option value="{{ $student->id }}">
              {{ $student->name }}
            </option>
            @endforeach
          </select>
        </div>
        <br><br>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a onclick="return window.history.go(-1)" class="btn btn-danger">Cancel</a>
      </form>
    </div>
  </div>
</div>
@endsection