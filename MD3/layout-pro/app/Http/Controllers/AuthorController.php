<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AuthorController extends Controller
{
    public function index()
    {
        $authors =  DB::table('authors')->select()->get();
        return view('backend.author.list', compact('authors'));
    }

    public function create()
    {
        return view('backend.author.add');
    }


    public function store(Request $request)
    {
        $author = [
            'name' => $request->input('name'),
            'date' => $request->input('date'),
            'description' => $request->input('desc'),

        ];
        DB::table('authors')->insert($author);
        return redirect()->route('author.index');
    }



    function destroy($id)
    {
        DB::table('authors')->where('id', $id)->delete();
        return redirect()->route('author.index');
    }



    function edit($id)
    {
        $author = DB::select('select * from authors where id =:id', ['id' => $id]);
        return view('backend.author.update', compact('author'));
    }


    function update(Request $request, $id)
    {
        DB::table('authors')->where('id', $id)
            ->update(
                ['name' => $request->name, 'date' => $request->date, 'desc' => $request->description]
            );
            return redirect()->route('author.index');
    }
}
