$(document).ready(function () {
    $('#button_create_book').click(function () {
        $("#add-book-bag").hide();
        $('#createBookModal').modal('show');
    });
});

$(document).ready(function () {
    $("#addBook").click(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
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

$("#deleteBook").click(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'GET',
        url: '/books/destroy/' + $("#formDeleteBook input[name=book_id]").val(),
        dataType: 'json',
        success: function (data) {
            $("#formDeleteBook .close").click();
            window.location.reload();
        },
        error: function (data) {
            console.log(data);
        }
    });
});

$('#editBook').click(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        method: 'POST',
        url: '/books/update/' + $("#formEditBook input[name=book_id]").val(),
        data: {
            name: $("#formEditBook input[name=name]").val(),
        },
        dataType: 'json',
        success: function (data) {
            $('#formEditBook .close').click();
            window.location.reload()
        },
        error: function (data) {
            console.log(data)
        }
    })
});

function buttonDeleteBook(id) {
    $.ajax({
        type: 'GET',
        url: '/categories/' + id,

        success: function (data) {
            $("#formDeleteCategory input[name=category_id]").val(data.category.id);

            $('#deleteCategoryModal').modal('show');
        },
        error: function (data) {
            console.log(data);
        }
    });
}

function buttonEditBook(id) {
    $(document).ready(function () {
        $.ajax({
            method: 'GET',
            url: '/categories/' + id,
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

// $(document).ready(function () {

// fetch_customer_data();
// function fetch_customer_data(query = '') {
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });
//     $.ajax({
//         method: 'post',
//         url: "/categories/search",
//         data: {query:query},
//         dataType: 'json',
//         success: function (data) {
//             console.log(data);
//             $('tbody').html(data.table_data)
//         }
//     })
// }
// $(document).on('keyup','#search',function () {
//     var query  = $(this).val();
//     fetch_customer_data(query);
// });
// });

