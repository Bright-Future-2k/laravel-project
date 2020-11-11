
<div class="modal fade" id="editBookModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Book</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="editFormBook" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
{{--                    <div class="alert alert-danger" id="add-book-bag">--}}
{{--                        <ul id="add-book-errors">--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" class="form-control" name="name" >
                    </div>
                    <div class="form-group">
                        <label>Author:</label>
                        <input type="text" class="form-control" name="author" >
                    </div>
                    <div class="form-group">
                        <label>Price:</label>
                        <input type="number" class="form-control" name="price" >
                    </div>
                    <div class="form-group">
                        <label>Category:</label>
                        <select class="custom-select custom-select-sm">
{{--                            @foreach($categories as $category)--}}
{{--                                <option name="category_id" id="category_id" value="{{ $category->id }}">{{ $category->name }}</option>--}}
{{--                            @endforeach--}}
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
                        <input type="radio" name="status" value="have book">Have Books
                        <br>
                        <input type="radio" name="status" value="out of book">Out of Book
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="editBook">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


