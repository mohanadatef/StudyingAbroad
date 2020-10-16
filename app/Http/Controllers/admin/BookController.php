<?php

namespace App\Http\Controllers\admin;
use App\Models\Book_Service;
use App\Http\Controllers\Controller;
use App\Models\Book;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    public function indexbook()
    {
        $book = Book::all();
        return view('admin.book.book_index',compact('book'));
    }
    public function deletebook($id)
    {
        $book_service = Book_Service::where('book_id',$id)->get();
        if($book_service != null)
        {
            foreach($book_service as $mybook)
            {
                $mybook->delete();
            }
        }
        $book = Book::find($id);
        $book->delete();
        return redirect()->back()->with('message', 'Delete request Is Done!');
    }
}

?>