<!-- Edit Category -->
<div class="modal fade" id="editCategoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formEditCategory">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name"
                               aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="modal-footer">
                    <input name="category_id" type="hidden" value="0">
                    <input class="btn btn-default" data-dismiss="modal" type="button" value="Cancel">
                    <button class="btn btn-danger" id="editCategory" type="button">
                        Save
                    </button>
                    </input>
                    </input>
                </div>
            </form>
        </div>
    </div>
</div>
