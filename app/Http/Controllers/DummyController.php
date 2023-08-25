<?php

namespace App\Http\Controllers;

use File;
use App\Models\Test;
use Illuminate\Http\Request;

class DummyController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $tests = Test::latest()->paginate(10);
        return view('test.index', compact('tests'));
    }
    

    public function create()
    {
        return view('test.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image'     => 'required|image|mimes:png,jpg,jpeg',
        ]);

        //upload image
        $image = $request->image;
        //$image->storeAs('public', $image->hashName());
        $image_name = $image->hashName();
        $image->move(public_path('tests') ,$image_name);

        $test = Test::create([
            'image'     => $image_name,
        ]);

        if($test){
            //redirect dengan pesan sukses
            return redirect()->route('test.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('test.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function edit(Test $test)
    {
        return view('test.edit', compact('test'));
    }

    public function update(Request $request, Test $test)
    {
        $this->validate($request, [
            'title'     => 'required',
            'content'   => 'required'
        ]);

        //get data Blog by ID
        $test = Test::findOrFail($test->id);

        if($request->file('image') == "") {

            $test->update([
                'title'     => $request->title,
                'content'   => $request->content
            ]);

        } else {

            //hapus old image
            if( File::exists(public_path('tests/' . $test->image)) ) {
                File::delete(public_path('tests/' . $test->image));
            }

            //upload new image
            $image = $request->file('image');
            $image_name = $image->hashName();
            $image->move(public_path('tests') ,$image_name);

            $test->update([
                'image'     => $image_name,
            ]);

        }

        if($test){
            //redirect dengan pesan sukses
            return redirect()->route('test.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('test.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
}
