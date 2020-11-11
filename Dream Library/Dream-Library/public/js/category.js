$(document).ready(function () {
    $('#button_create_category').click(function () {
        $("#add-category-bag").hide();
        $('#createCategoryModal').modal('show');
    });
});

$(document).ready(function () {
    $("#addCategory").click(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: '/categories/store',
            data: $('#addForm').serialize(),
            dataType: 'json',
            success: function (data) {
                $('#addForm').trigger("reset");
                $("#addForm .close").click();
            },
            error: function (data) {
                var errors = $.parseJSON(data.responseText);
                $('#add-category-errors').html('');
                $.each(errors.messages, function (key, value) {
                    $('#add-category-errors').append('<li>' + value + '</li>');
                });
                $("#add-category-errors").show();
            }
        });
    });
});

$("#deleteCategory").click(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'GET',
        url: '/categories/destroy/' + $("#formDeleteCategory input[name=category_id]").val(),
        dataType: 'json',
        success: function (data) {
            $("#formDeleteCategory .close").click();
            window.location.reload();
        },
        error: function (data) {
            console.log(data);
        }
    });
});

$('#editCategory').click(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        method: 'POST',
        url: '/categories/update/' + $("#formEditCategory input[name=category_id]").val(),
        data: {
            name: $("#formEditCategory input[name=name]").val(),
        },
        dataType: 'json',
        success: function (data) {
            $('#formEditCategory .close').click();
            window.location.reload()
        },
        error: function (data) {
            console.log(data)
        }
    })
});
function buttonDeleteCategory(category_id) {
    $.ajax({
        type: 'GET',
        url: '/categories/' + category_id,

        success: function (data) {
            $("#formDeleteCategory input[name=category_id]").val(data.category.id);

            $('#deleteCategoryModal').modal('show');
        },
        error: function (data) {
            console.log(data);
        }
    });
}

function buttonEditCategory(category_id) {
    $(document).ready(function () {
        $.ajax({
            method: 'GET',
            url: '/categories/' + category_id,
            success: function (data) {
                $('#formEditCategory input[name=category_id]').val(data.category.id);
                $('#formEditCategory input[name=name]').val(data.category.name);
                $('#editCategoryModal').modal('show');
            },
            error: function (data) {
                console.log(data);
            }
        })
    })
}


