<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
		$books = Book::paginate(5);

        return view('index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([

            'name' => 'required|max:255',
			
            'Author' => 'required|max:255',
			
            'pages' => 'required|integer',

            'language' => 'required|integer',

        ]);

        $book = Book::create($validatedData);

        return redirect('/book')->with('success', 'The Book is successfully saved');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::findOrFail($id);

        return view('edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([

            'name' => 'required|max:255',
			
            'city' => 'required|max:255',
			
            'rooms' => 'required|numeric',

            'apart' => 'required|numeric',

        ]);

        Book::whereId($id)->update($validatedData);

        return redirect('/book')->with('success', 'Book data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::findOrFail($id);

        $book->delete();

        return redirect('/book')->with('success', 'Book data is successfully deleted');
    }
}
