@extends('book.indexBook')
@section('title', 'Edit CRole')
@section('body')

<div class="container">
  <div class="row">
    <div class="col-12">
      <form method="post" action="{{ route('role.update' , $role->id) }}">
        @csrf
        <div class="form-group">
          <label>Name:</label>
          <input type="text" class="form-control" name='name' value='{{ $role->name }}'>
        </div>
          <br><br>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a onclick="return window.history.go(-1)" class="btn btn-danger">Cancel</a>
      </form>
    </div>
  </div>
</div>

@endsection