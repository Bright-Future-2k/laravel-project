<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use App\Http\Requests\BookRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BookController extends Controller
{
    protected $book;
    protected $category;

    public function __construct(Book $book, Category $category)
    {
        $this->book = $book;
        $this->category = $category;
    }

    public function index()
    {
        $books = $this->book->paginate(7);
        $categories = $this->category->getAll();
//        return response()->json([
//            'success' => true,
//            'task' => $books,
//        ], 200);
        return view('book.list', compact('books','categories'));
    }

    public function store(BookRequest $request)
    {
        $book = $this->book->create($request->all());
        if($request->hasFile('avatar')){
            $img = $request->file('avatar');
            $path = $img->store('public');

        }
        if ($book) {
            alert()->success('Book Created', 'Successfully');
        } else {
            alert()->error('Book Created Failed', 'Something went wrong!');
        }
        return response()->json([
            'success' => true,
            'book' => $book,
        ], 200);
    }

    public function update(BookRequest $request, $id)
    {
        $book = $this->book->findOrFail($id);
        $book->update($request->all());
        if ($book) {
            alert()->success('Book Updates', 'Successfully');
        } else {
            alert()->error('Book Updates', 'Something went wrong!');
        }
        return response()->json([
            'status' => 200,
            'message' => 'cap nhat thanh cong',
            'book' => $book
        ]);
    }

    public function show($id)
    {
        $book = $this->book->findOrFail($id);
        return response()->json([
            'status' => 200,
            'message' => 'OK!',
            'book' => $book
        ]);

    }

    public function destroy($id)
    {
        $book = $this->book->destroy($id);
        if ($book) {
            alert()->success('Book Deleted', 'Successfully');
        } else {
            alert()->error('Book Deleted', 'Something went wrong!');
        }
        return response()->json([
            'error' => false,
            'book' => $book,
        ], 200);
    }
}
