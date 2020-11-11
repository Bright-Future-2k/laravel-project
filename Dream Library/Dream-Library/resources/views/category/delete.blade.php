<!-- Delete Category -->
<div class="modal fade" id="deleteCategoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="formDeleteCategory">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Category</h5>
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
                    <input name="category_id" type="hidden" value="0">
                    <input class="btn btn-default" data-dismiss="modal" type="button" value="Cancel">
                    <button class="btn btn-danger" id="deleteCategory" type="button">
                        Delete Task
                    </button>
                    </input>
                    </input>
                </div>
            </form>
        </div>
    </div>
</div>
