@extends('dashboard')
@section('content')
    <h1 style="text-align: center">Book Store</h1>
    <table class="table mx-4 my-4">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Name</th>
            <th scope="col">Author</th>
            <th scope="col">Status</th>
            <th scope="col">Category</th>
            <th scope="col">Avatar</th>
            <th scope="col">Price</th>
            <th colspan="2" style="padding-left: 45px;">
                <button type="button" class="btn btn-outline-primary" data-toggle="modal" id="button_create_book">
                    <i class="fas fa-plus-square"></i>
                    Create
                </button>
            </th>
        </tr>
        @if(count($books) === 0)
            <td colspan="8" style="text-align: center">No data...</td>
        @else
        </thead>
        @foreach($books as $key => $book)

            <tbody>
            <tr>
                <th scope="row">{{ ++$key }}</th>
                <td>{{ $book->name }}</td>
                <td>{{ $book->author }}</td>
                @if($book->status === 'have book')
                    <td style="color: green !important;">{{ $book->status }}</td>
                @else
                    <td style="color: red !important;">{{ $book->status }}</td>
                @endif
                <td>{{ $book->category_id }}</td>
                <td><img src="{{asset('public/img/dog1.jpg' )}}" alt="  " style="max-height: 100px"></td>
                <td>{{ $book->price }}</td>
                {{--                <td style="width: 150px; padding-left: 30px; padding-right: 0 !important;">--}}
                {{--                    <button type="button" data-toggle="modal" class="btn btn-outline-info"--}}
                {{--                            onclick="buttonShowCategory({{$category->id}})">--}}
                {{--                        <i class="fas fa-eye"></i>--}}
                {{--                        Show--}}
                {{--                    </button>--}}
                {{--                </td >--}}
                <td style="width: 100px; padding-left: 0; padding-right: 0 !important;">
                    <button type="button" data-toggle="modal" class="btn btn-outline-warning"
                            onclick="buttonEditBook({{$book->id}})">
                        <i class="fas fa-pencil-alt"></i>
                        Edit
                    </button>
                </td>
                <td style="width: 150px; padding-left: 0; padding-right: 0 !important;">
                    <button class="btn btn-outline-danger" data-toggle="modal"
                            onclick="buttonDeleteBook({{ $book->id }})">
                        <i class="fas fa-trash-alt"></i>
                        Delete
                    </button>
                </td>
            </tr>
            </tbody>
        @endforeach
        @endif
    </table>
    <div class="clearfix row">
        <div class="hint-text col-8" style="text-align: center">Showing <b>{{$books->count()}}</b> out of
            <b>{{$books->total()}}</b>
            entries
        </div>
        <div class="col-4">
            {{ $books->links() }}
        </div>
    </div>

<!--CreateBookModal-->
    <div class="modal fade" id="createBookModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create Book</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="addFormBook">
                    @csrf
                    <div class="modal-body">
                        <div class="alert alert-danger" id="add-book-bag">
                            <ul id="add-book-errors">
                            </ul>
                        </div>
                        <div class="form-group">
                            <label>Name:</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label>Author:</label>
                            <input type="text" class="form-control" name="author">
                        </div>
                        <div class="form-group">
                            <label>Price:</label>
                            <input type="text" class="form-control" name="price">
                        </div>
                        <div class="form-group">
                            <label>Category:</label>
                            <select name="category_id" class="custom-select custom-select-sm">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Avatar:</label>
                            <br>
                            <input type="file" name="avatar">
                        </div>
                        <div class="form-group">
                            <label>Status:</label>
                            <br>
                            <input type="radio" name="status" value="have books">Have Books
                            <br>
                            <input type="radio" name="status" value="out of book">Out of Book
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" id="addBook">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!--DeleteBookModal-->
    <!-- Delete Book -->
    <div class="modal fade" id="deleteBookModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="formDeleteBook">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Book</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                            Are you sure want to delete this ?
                        </p>
                        <p class="text-warning">
                            <small>
                                This action can lost your data.
                            </small>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <input name="book_id" type="hidden" value="0">
                        <input class="btn btn-default" data-dismiss="modal" type="button" value="Cancel">
                        <button class="btn btn-danger" id="deleteBook" type="button">
                            Delete Task
                        </button>
                        </input>
                        </input>
                    </div>
                </form>
            </div>
        </div>
    </div>




@endsection
@section('ajax')
    <script>
        $(document).ready(function () {
            $('#button_create_book').click(function () {
                $("#add-book-bag").hide();
                $('#createBookModal').modal('show');
            });
        });

        $(document).ready(function () {
            $("#addBook").click(function () {
                // $.ajaxSetup({
                //     headers: {
                //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                //     }
                // });
                $.ajax({
                    type: 'POST',
                    url: '/books/store',
                    data: $('#addFormBook').serialize(),
                    success: function (data) {
                        console.log(data);
                        $('#addFormBook').trigger("reset");
                        $("#addFormBook .close").click();
                    },
                    error: function (data) {
                        console.log(data);
                    }
                });
            });
        });

        function buttonDeleteBook(id) {
            $.ajax({
                method: 'GET',
                url: '/books/' + id,
                success: function (data) {
                    $('#formDeleteBook input[name = book_id]').val(data.book.id);
                    $('#deleteBookModal').modal('show')
                },
                error: function (data) {
                    console.log(data)
                }
            })
        }
        $(document).ready(function () {
            $('#deleteBook').click(function () {
                $.ajax({
                    method: 'GET',
                    url: '/books/destroy' + $('#formDeleteBook input[name = book_id]').val(),
                    dataType: 'json',
                    success: function (data) {
                        $('#formDeleteBook .close').click();
                        window.location.reload();
                    },
                    error: function (data) {
                        console.log(data)
                    }
                })
            })
        })
    </script>

    @include('book.create')
{{--    @include('book.show')--}}
    @include('book.edit')
    @include('book.delete')

@endsection



