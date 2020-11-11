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
            <a href="{{ route('student.export') }}" class="btn btn-info">Export file Excel</a>
        </div>
    </div>
    <div class="col-12">
        <a href="{{ route('student.create')}}" class='btn btn-outline-primary -bottom-10'>Create</a><br><br>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Avatar</th>
                        <th scope="col">Role</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                @if(empty($students))
                <tr>
                    <p>No data</p>
                </tr>
                @else
                
                @foreach($students as $key => $student)
                <tbody>
                    <tr>
                        <th>{{ ++$key }}</th>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->age }}</td>
                        <td><a>
                            <img src="{{asset('storage/'. $student->avatar)}}" alt="shoes.img" hight='100' width='100'>
                        </a></td>
                        @foreach($student->roles as $role)
                            <td>{{ $role->name_role }}</td>
                        @endforeach
                        <td>
                            <a class="btn btn-secondary" href="{{ route('student.edit', $student->id) }}">Edit</a></td>
                        <td>
                            <a class="btn btn-danger" href="{{ route('student.delete',$student->id) }}" onclick="return (confirm('Are You Sure?'))">Delete
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