@extends('dashboard')
@section('content')

    <div class="row">
        <div class="col-8">
            <h1 style="text-align: center">Category</h1>
        </div>
        <div class="col-4">
            <form method="post" action="{{ route('categories.search') }}" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                @csrf
                <div class="input-group">
                    <input type="text" style="background: white !important;" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" value="{{ $keyword }}" name="search">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <table class="table mx-4 my-4">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Category</th>
            <th colspan="2" style="padding-left: 45px;">
                <button type="button" class="btn btn-outline-primary" data-toggle="modal" id="button_create_category">
                    <i class="fas fa-plus-square"></i>
                    Create
                </button>
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $key => $category)
            <tr>
                <th scope="row">{{ ++$key }}</th>
                <td>{{ $category->name }}</td>
                <td style="width: 100px; padding-left: 0; padding-right: 0 !important;">
                    <button type="button" data-toggle="modal" class="btn btn-outline-warning"
                            onclick="buttonEditCategory({{$category->id}})">
                        <i class="fas fa-pencil-alt"></i>
                        Edit
                    </button>
                </td>
                <td style="width: 150px; padding-left: 0; padding-right: 0 !important;">
                    <button class="btn btn-outline-danger" data-toggle="modal"
                            onclick="buttonDeleteCategory({{ $category->id }})">
                        <i class="fas fa-trash-alt"></i>
                        Delete
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="clearfix row">
        <div class="hint-text col-8" style="text-align: center">Showing <b>{{$categories->count()}}</b> out of
            <b>{{$categories->total()}}</b>
            entries
        </div>
        <div class="col-4">
            {{ $categories->links() }}
        </div>
    </div>

@endsection
@section('ajax')
    <script type="text/javascript" src="{{ asset('js/category.js') }}"></script>
@endsection


