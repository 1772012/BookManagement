<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Book;
use App\Category;
use DB;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $select = [];
        foreach($categories as $category) {
            $select[$category->id] = $category->name;
        }

        // $books = Book::orderBy('title', 'desc')->paginate(10);
        // $books = Book::has('category')->get();
        $books = DB::table('categories')
        ->select('*')
        ->join('books', 'books.category_id', '=', 'categories.id')
        ->get();
        return view('books.index', compact('select'))->with('books', $books);

        // $books = DB::table('books')
        // ->select('*')
        // ->join('categories', 'categories.id', '=', 'books.category_id')
        // ->get();
        // return view('books.index', compact('select'))->with('books', $books);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'isbn' => 'required',
            'title' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'description' => 'required',
            'doc_photo' => 'image|nullable|max:1999',
            'category_id' => 'required'
            ]);

        //  Handle file upload
        if ($request->hasFile('doc_photo')) {
            $fileNameWithExt = $request->file('doc_photo')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('doc_photo')->getClientOriginalExtension();
            $fileNameToStore = $fileName . '-' . time() . $extension;
            $path = $request->file('doc_photo')->storeAs('public/doc_photos', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $book = new Book;
        $book->isbn = $request->input('isbn');
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->publisher = $request->input('publisher');
        $book->description = $request->input('description');
        $book->category_id = $request->input('category_id');
        $book->doc_photo = $fileNameToStore;
        $book->save();

        return redirect('/books')->with('success', 'Book added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $book = Book::find($id);
        // return view('books.show')->with('book', $book);

        $books = DB::table('books')
        ->select('*', 'books.id')
        ->join('categories', 'categories.id', '=', 'books.category_id')
        ->where(['books.id' => $id])
        ->get();
        $book = $books[0];
        return view('books.show')->with('book', $book);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $select = [];
        foreach($categories as $category) {
            $select[$category->id] = $category->name;
        }

        $books = DB::table('books')
        ->select('*', 'books.id')
        ->join('categories', 'categories.id', '=', 'books.category_id')
        ->where(['books.id' => $id])
        ->get();
        $book = $books[0];
        // return view('books.show')->with('book', $book);
        // $book = Book::find($id);
        return view('books.edit', compact('select'))->with('book', $book);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'isbn' => 'required',
            'title' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'description' => 'required',
            'category_id' => 'required'
            ]);

        //  Handle file upload
        if ($request->hasFile('doc_photo')) {
            $fileNameWithExt = $request->file('doc_photo')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('doc_photo')->getClientOriginalExtension();
            $fileNameToStore = $fileName . '-' . time() . $extension;
            $path = $request->file('doc_photo')->storeAs('public/doc_photos', $fileNameToStore);
        }

        $book = Book::find($id);
        $book->isbn = $request->input('isbn');
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->publisher = $request->input('publisher');
        $book->description = $request->input('description');
        $book->category_id = $request->input('category_id');
        if ($request->hasFile('doc_photo')) {
            $book->doc_photo = $fileNameToStore;
        }
        $book->save();

        return redirect('/books')->with('success', 'Book added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);

        if ($book->doc_photo != 'noimage.jpg') {
            Storage::delete('public/doc_photos/' . $book->doc_photo);
        }  

        $book->delete();
        return redirect('/books')->with('success', 'Books removed');
    }
}
