@extends('book.indexBook')
@section('title', 'List Card')
@section('body')

<div class="container">
    <div class="row">
        <div class="col-12 pt-10 pb-10">
            <h1>List Card</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="col-12">
        <a href="{{ route('card.create')}}" class='btn btn-outline-primary -bottom-10'>Create</a><br><br>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Name</th>
                        <th scope="col">Class</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Address</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                @if(empty($cards))
                <tr>
                    <p>No data</p>
                </tr>
                @else
                @foreach($cards as $key => $card)
                <tbody>
                    <tr>
                        <th>{{ ++$key }}</th>
                        <td>{{ $card->name }}</td>
                        <td>{{ $card->class }}</td>
                        <td>{{ $card->gender }}</td>
                        <td>{{ $card->address }}</td>
                        <td>
                            <a class="btn btn-secondary" href="{{ route('card.edit', $card->id) }}">Edit</a></td>
                        <td>
                            <a class="btn btn-danger" href="{{ route('card.delete',$card->id) }}" onclick="return (confirm('Are You Sure?'))">Delete
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