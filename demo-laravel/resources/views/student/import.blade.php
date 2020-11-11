@extends('book.indexBook')
@section('title','List Student')
@section('body')

<div class="container">
    <div class="row">
        <div class="col-12 pt-10 pb-10">
            <h1>List Student</h1>
        </div>
    </div>
</div>

<div class="container">

    <div class="col-12">
        <div class="row">
            <form method="POST" action="{{ route('student.importStore') }}" enctype="multipart/form-data">
                @csrf
                    <div class="form_group">
                        <input type="file" name="file">
                        <button type="submit" class="btn btn-info">Import</button>
                    </div>
            </form>
        </div>
    </div>
</div>

@endsection