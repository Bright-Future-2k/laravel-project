@extends('book.indexBook')
@section('title','List Book')
@section('body')

@can('isAdmin')
<p>Ban co the sua</p>
@endcan

<div class="container">
    <div class="row">
        <div class="col-12 pt-10 pb-10">
            <h1>List Book</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="col-12">
        <a href="{{ route('book.create')}}" class='btn btn-outline-primary -bottom-10'>Create</a><br><br>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Status</th>
                        <th scope="col">Student</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                @if(empty($books))
                <tr>
                    <p>No data</p>
                </tr>
                @else
                @foreach($books as $key => $book)
                <tbody>
                    <tr>
                        <th>{{ ++$key }}</th>
                        <td>{{ $book->name }}</td>
                        <td>{{ $book->price }}</td>
                        <td>{{ $book->status }}</td>
                        <td>{{ $book->student->name }}</td>
                        <td>
                            <a class="btn btn-secondary" href="{{ route('book.edit', $book->id) }}">Edit</a></td>
                        <td>
                            <a class="btn btn-danger" href="{{ route('book.delete',$book->id) }}" onclick="return (confirm('Are You Sure?'))">Delete
                            </a>
                        </td>
                    </tr>
                </tbody>
                @endforeach
                @endif
            </table>
        </div>
    </div>
</div>

@endsection