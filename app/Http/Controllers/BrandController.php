<?php

namespace App\Http\Controllers;

use File;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $brands = Brand::latest()->paginate(10);
        return view('brand.index', compact('brands'));
    }
    

    public function create()
    {
        return view('brand.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image'     => 'required|image|mimes:png,jpg,jpeg',
            'title'     => 'required'
        ]);

        //upload image
        $image = $request->image;
        //$image->storeAs('public', $image->hashName());
        $image_name = $image->hashName();
        $image->move(public_path('brands') ,$image_name);

        $brand = Brand::create([
            'image'     => $image_name,
            'title'     => $request->title
        ]);

        if($brand){
            //redirect dengan pesan sukses
            return redirect()->route('brand.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('brand.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function edit(Brand $brand)
    {
        return view('brand.edit', compact('brand'));
    }

    public function update(Request $request, Brand $brand)
    {
        $this->validate($request, [
            'title'     => 'required'
        ]);

        //get data Blog by ID
        $brand = Brand::findOrFail($brand->id);

        if($request->file('image') == "") {

            $brand->update([
                'title'     => $request->title
            ]);

        } else {

            //hapus old image
            if( File::exists(public_path('brands/' . $brand->image)) ) {
                File::delete(public_path('brands/' . $brand->image));
            }

            //upload new image
            $image = $request->file('image');
            $image_name = $image->hashName();
            $image->move(public_path('brands') ,$image_name);

            $brand->update([
                'image'     => $image_name,
                'title'     => $request->title
            ]);

        }

        if($brand){
            //redirect dengan pesan sukses
            return redirect()->route('brand.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('brand.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
        $brand = Brand::findOrFail($id);
        if( File::exists(public_path('brands/' . $brand->image)) ) {
            File::delete(public_path('brands/' . $brand->image));
        }
        $brand->delete();

        if($brand){
            //redirect dengan pesan sukses
            return redirect()->route('brand.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('brand.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
