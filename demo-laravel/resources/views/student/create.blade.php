@extends('book.indexBook')
@section('title','Create Student')
@section('body')

<div class="container">
    <div class="row">
        <div class="col-12">
            <form method="post" action="{{ route('student.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" class="form-control" name='name'>
                    <!-- @if($errors->has('song'))
                    <p class="text-danger">*{{$errors->first('song')}}</p>
                    @endif -->
                </div>

                <div class="form-group">
                    <label>Age:</label>
                    <input type="number" class="form-control" name='age'>
                </div>
                <div class="form-group">
                    <label>Role:</label>
                    <select name='role_id'>
                        @foreach($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name_role }}</option>
                        @endforeach
                    </select>
                </div>
                <label>Avatar:</label><br>
                <input type="file" name='avatar'>
                <br><br>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a onclick="return window.history.go(-1)" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection