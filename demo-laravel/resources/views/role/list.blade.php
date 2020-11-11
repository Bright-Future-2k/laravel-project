@extends('book.indexBook')
@section('title', 'List Role')
@section('body')

<div class="container">
    <div class="row">
        <div class="col-12 pt-10 pb-10">
            <h1>List Role</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="col-12">
        <a href="{{ route('role.create')}}" class='btn btn-outline-primary -bottom-10'>Create</a><br><br>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Name</th>
                        <th scope="col">Student's Role</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                @if(empty($roles))
                <tr>
                    <p>No data</p>
                </tr>
                @else
                @foreach($roles as $key => $role)
                <tbody>
                    <tr>
                        <th>{{ ++$key }}</th>
                        <td>{{ $role->name_role }}</td>
                        @foreach($role->students as $student)
                        <td>{{ $student->name }}</td>
                        @endforeach
                        
                        <td><a class="btn btn-secondary" href="{{ route('role.edit', $role->id) }}">Edit</a></td>
                        <td>
                            <a class="btn btn-danger" href="{{ route('role.delete',$role->id) }}" onclick="return (confirm('Are You Sure?'))">Delete
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