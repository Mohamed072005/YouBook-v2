<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{


    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'author'=>'required',
            'description'=>'required',
            'price'=>'required'
        ]);

        $book =Book::create([
            'title'=> $request->input('title'),
            'author'=> $request->input('author'),
            'description'=> $request->input('description'),
            'prix'=> $request->input('price'),
        ]);

        
        $book->save();

        return redirect()->route('show');

    }


    public function showBook()
    {
        $book = Book::all();
        return view('displayBook', compact('book'));
    }


    public function edit($id)
    {
        $book = Book::find($id);
        return view('updateBook', compact('book'));
    }

    
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'title'=>'required',
            'author'=>'required',
            'description'=>'required',
            'price'=>'required'
        ]);


        $book = Book::find($id);
        $book->update([
            'title'=>$request->input('title'),
            'author'=>$request->input('author'),
            'description'=>$request->input('description'),
            'prix'=>$request->input('price'),
        ]);

        return redirect()->route('show');
    }

    
    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect()->route('show');
    }

    public function bookDetails($id){
        $book = Book::find($id);
        return view('showBook', compact('book'));
    }
}
