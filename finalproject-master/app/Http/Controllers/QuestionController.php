<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Question;
use File;

class QuestionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $question = Question::all();
        return view('question.tampil', ['question' => $question]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();

        return view('question.tambah', ['category' => $category]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'image' => 'required|mimes:jpg,png,jpeg|max:2048',
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required',
        ]);

        $imageName = time().'.'.$request->image->extension();  

        $request->image->move(public_path('image'), $imageName);

        Question::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'category_id' => $request->input('category_id'),
            'image' => $imageName,
        ]);

        return redirect('/question');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $question = Question::find($id);

        return view('question.detail', ['question' => $question]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $question = Question::find($id);
        $category = Category::all();

        return view('question.edit', ['question' => $question, 'category' => $category]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([

            'image' => 'mimes:jpg,png,jpeg|max:2048',
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required',
        ]);

        $question = Question::find($id);
 
        if($request->has('image')){
            $path ='image/';
            File::delete($path . $question->image);

            $fileImage = time().'.'.$request->image->extension();

            $request->image->move(public_path('image'), $fileImage);

            $question->image = $fileImage;
        }

        $question->title = $request->input('title');
        $question->content = $request->input('content');
        $question->category_id = $request->input('category_id');

        
        $question->save();

        return redirect('/question');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $question = Question::find($id);

        $path = 'image/';
            File::delete($path . $question->image);

            $question->delete();

            return redirect('/question');
    }
}
