<?php

namespace App\Http\Controllers;

use File;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $sliders = Slider::latest()->paginate(10);
        return view('slider.index', compact('sliders'));
    }
    

    public function create()
    {
        return view('slider.create');
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
        $image->move(public_path('sliders') ,$image_name);

        $slider = Slider::create([
            'image'     => $image_name,
        ]);

        if($slider){
            //redirect dengan pesan sukses
            return redirect()->route('slider.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('slider.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function edit(Slider $slider)
    {
        return view('slider.edit', compact('slider'));
    }

    public function update(Request $request, Slider $slider)
    {
        //get data Blog by ID
        $slider = Slider::findOrFail($slider->id);
            //hapus old image
            if( File::exists(public_path('sliders/' . $slider->image)) ) {
                File::delete(public_path('sliders/' . $slider->image));
            }

            //upload new image
            $image = $request->file('image');
            $image_name = $image->hashName();
            $image->move(public_path('sliders') ,$image_name);

            $slider->update([
                'image'     => $image_name,
            ]);

        if($slider){
            //redirect dengan pesan sukses
            return redirect()->route('slider.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('slider.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
}
