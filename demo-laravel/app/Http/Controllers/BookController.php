<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Student;
use App\Repositories\Impl\BookRepositoryImpl;
use App\Services\Impl\BookServiceImpl;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class BookController extends Controller
{
    protected $book;
    protected $bookRepositoryImpl;
    public function __construct(Book $book, BookRepositoryImpl $bookRepositoryImpl)
    {
        $this->book = $book;
        $this->bookRepositoryImpl = $bookRepositoryImpl;
    }

    public function index()
    {
        
        $books = $this->bookRepositoryImpl->getAll();
        return view('book.list', compact('books'));
    }

    public function create()
    {
        $students = Student::all();
        return view('book.create', compact('students'));
    }

    public function store(Request $request)
    {
        $this->bookRepositoryImpl->create($request);
        return redirect()->route('book.list');
    }

    public function edit($id)
    {
        $book = $this->bookRepositoryImpl->findById($id);
        $students = Student::all();
        return view('book.edit', compact('book','students'));
    }

    public function update($id, Request $request)
    {
        $this->bookRepositoryImpl->update($request, $id);
        return redirect()->route('book.list');
    }

    public function delete($id)
    {
        $this->bookRepositoryImpl->destroy($id);
        return redirect()->route('book.list');
    }

    public function search(Request $request)
    {
        $keyword = $request->keyword;
        if(!$keyword){
            return redirect()->route('book.index');
        }
        $books = Book::where('name', 'LIKE' , '%' . $keyword . '%');
        return view('book.list', compact('books'));
    }
}
