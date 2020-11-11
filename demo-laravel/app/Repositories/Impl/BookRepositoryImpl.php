<?php

namespace App\Repositories\Impl;

use App\Models\Book;
use App\Helpers\Result;
use App\Repositories\BookRepositoryInterface;
use Exception;
use GrahamCampbell\ResultType\Result as ResultTypeResult;
use Illuminate\Support\Facades\DB;

class BookRepositoryImpl  implements BookRepositoryInterface
{
    
    public function __construct()
    {
        
    }
    public function getAll()
    {
        $books = Book::all();
        return $books;
    }

    public function findById($id)
    {
        // dd($id);
        try {
            $book = Book::find($id);
            $book = DB::table('books')->where('id', $id)->get();
            //dd($book);
            return $book;
        } catch (Exception $ex) {
            return false;
        }
    }

    public function create($request)
    {
        $book = new Book();
        $book->fill($request->all());
        $book->student_id = $request->input('student_id');
        $book->save();
        return $book;
    }

    public function update($id, $request )
    {
        $book = Book::find($id);
        $book->fill($request->all());
        $book->student_id = $request->input('student_id');
        $book->save();
        return $book;

        
    }

    public function destroy($id)
    {
        try {
            $book = Book::where('id', $id)->first();
            return $book;
        } catch (Exception $ex) {
            return false;
        }
        $book->delete();
        return $book;
    }
}