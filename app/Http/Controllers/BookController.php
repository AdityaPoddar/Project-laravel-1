<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Database\Eloquent\Collection;
use Newsletter;

class BookController extends Controller
{
    // show():to display all the data for the admin user pagination and search
    public function show(Request $request)
    {
        $search=$request['search'];
        $higher=$request['higher'];
        $lower=$request['lower'];

        if($search !="" || $higher !="")
        {
            $data=Book::where('Author','LIKE',"%$search%")->orWhere('Title','LIKE',"%$search%")->orderBy('price', 'DESC')->paginate(20);
        }
        else if($search !="" ||$lower !="")
        {
            $data=Book::where('Author','LIKE',"%$search%")->orderBy('price', 'ASC')->paginate(20);
        }
        else
        {
        $data=Book::latest()->paginate(20);
        }
        return view('admin.book',['books'=>$data,'search'=>$search]);
    }
    // Usershow():to display all the data for the regular user with pagination and search 
    public function Usershow(Request $request)
    {
        $search=$request['search'];
        $higher=$request['higher'];
        $lower=$request['lower'];

        if($search !="" || $higher !="")
        {
            $data=Book::where('Author','LIKE',"%$search%")->orWhere('Title','LIKE',"%$search%")->orderBy('price', 'DESC')->paginate(20);
        }
        else if($search !="" ||$lower !="")
        {
            $data=Book::where('Author','LIKE',"%$search%")->orderBy('price', 'ASC')->paginate(20);
        }
        else
        {
        $data=Book::latest()->paginate(20);
        }
        return view('user.userbook',['books'=>$data,'search'=>$search]);
        
    }
    //  addBookData():'C'RUD 
    public function addBookData(Request $request)
    {
        // $book=new Book;
        // $book->Author=$request->Author;
        // $book->Title=$request->Title;
        // $book->Pages=$request->Pages;
        // $book->price=$request->price;
        //  $book->save();
        // return redirect('/book');
        
        $book = request()->validate([
            'Author' => 'required',
            'Title' =>'required',
            'Pages' => 'required',
            'price' => 'required',
            
        ]);
        
        Book::create($book);
        return redirect('/book');
    }
    // deleteBookData():CRU'D' 
    public function deleteBookData($id)
    {
        
        // $Title=$request->Title;
        $book=Book::find($id);
        if($book !=null)
        {
        $book->delete();
        return redirect('book');
        }
        echo "no value";
        
    }
    public function updateShowBookData($id)
    {
        $data=Book::find($id);
        return view('admin.update_book',['book'=>$data]);

    }
    // updateBookData():CR'U'D 
    public function updateBookData(Request $request)
    {
        $book=Book::find($request->id);
        $book->Author=$request->Author;
        $book->Title=$request->Title;
        $book->Pages=$request->Pages;
        $book->price=$request->price;
        $book->save();
        return redirect('/book');
    }


}
