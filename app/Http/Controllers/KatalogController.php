<?php

namespace App\Http\Controllers;

use File;
use App\Models\Katalog;
use Illuminate\Http\Request;

class KatalogController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $katalogs = Katalog::latest()->paginate(20);
        return view('katalog.index', compact('katalogs'));

        $tests = Test::where('id', '=', 2)->first();
        return view('welcome', compact('tests'));
    }
    

    public function create()
    {
        return view('katalog.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image'     => 'required|image|mimes:png,jpg,jpeg',
            'title'     => 'required',
            'content'   => 'required'
        ]);

        //upload image
        $image = $request->image;
        //$image->storeAs('public', $image->hashName());
        $image_name = $image->hashName();
        $image->move(public_path('katalogs') ,$image_name);

        $katalog = Katalog::create([
            'image'     => $image_name,
            'title'     => $request->title,
            'content'   => $request->content
        ]);

        if($katalog){
            //redirect dengan pesan sukses
            return redirect()->route('katalog.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('katalog.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function edit(Katalog $katalog)
    {
        return view('katalog.edit', compact('katalog'));
    }

    public function update(Request $request, Katalog $katalog)
    {
        $this->validate($request, [
            'title'     => 'required',
            'content'   => 'required'
        ]);

        //get data Blog by ID
        $katalog = Katalog::findOrFail($katalog->id);

        if($request->file('image') == "") {

            $katalog->update([
                'title'     => $request->title,
                'content'   => $request->content
            ]);

        } else {

            //hapus old image
            if( File::exists(public_path('katalogs/' . $katalog->image)) ) {
                File::delete(public_path('katalogs/' . $katalog->image));
            }

            //upload new image
            $image = $request->file('image');
            $image_name = $image->hashName();
            $image->move(public_path('katalogs') ,$image_name);

            $katalog->update([
                'image'     => $image_name,
                'title'     => $request->title,
                'content'   => $request->content
            ]);

        }

        if($katalog){
            //redirect dengan pesan sukses
            return redirect()->route('katalog.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('katalog.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
        $katalog = Katalog::findOrFail($id);
        if( File::exists(public_path('katalogs/' . $katalog->image)) ) {
            File::delete(public_path('katalogs/' . $katalog->image));
        }
        $katalog->delete();

        if($katalog){
            //redirect dengan pesan sukses
            return redirect()->route('katalog.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('katalog.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
