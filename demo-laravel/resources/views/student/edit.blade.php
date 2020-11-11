@extends('book.indexBook')
@section('title','Create Student')
@section('body')

<div class="container">
    <div class="row">
        <div class="col-12">
            <form method="post" action="{{ route('student.update' , $student->id )}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" class="form-control" name='name' value="{{ $student->name }}">
                    <!-- @if($errors->has('song'))
                    <p class="text-danger">*{{$errors->first('song')}}</p>
                    @endif -->
                </div>

                <div class="form-group">
                    <label>Age:</label>
                    <input type="number" class="form-control" name='age' value="{{ $student->age }}">
                </div>
                <select name='rule_id'>
                    @foreach($rules as $rule)
                    <option value="{{ $rule->id }}">
                        {{ $rule->name_rule }}
                    </option>
                    @endforeach
                </select>

                <label>Avatar:</label><br>
                <input type="file" name='avatar' value="{{ $student->avatar }}">
                <br><br>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a onclick="return window.history.go(-1)" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection