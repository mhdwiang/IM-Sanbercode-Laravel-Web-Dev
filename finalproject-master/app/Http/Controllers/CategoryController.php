<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function create()
    {
        return view('category.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        DB::table('categories')->insert([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        return redirect('/category');
    }

    public function index()
    {
        $category = DB::table('categories')->get();
        return view('category.tampil', ['category' => $category]);
    }

    public function show($id)
    {
        $category = DB::table('categories')->find($id);

        return view('category.detail', ['category' => $category]);
    }

    public function edit($id)
    {
        $category = DB::table('categories')->find($id);
        return view('category.edit', ['category' => $category]);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $users = DB::table('categories')
            ->where('id', $id)
            ->update([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
            ]);

            return redirect('/category');
    }

    public function destroy($id){
        DB::table('categories')->where('id', '=', $id)->delete();

        return redirect('/category');
    }
}
