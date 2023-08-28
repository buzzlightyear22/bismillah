<?php

namespace App\Http\Controllers;

use File;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $clients = Client::latest()->paginate(10);
        return view('client.index', compact('clients'));
    }
    

    public function create()
    {
        return view('client.create');
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
        $image->move(public_path('clients') ,$image_name);

        $client = Client::create([
            'image'     => $image_name,
            'title'     => $request->title
        ]);

        if($client){
            //redirect dengan pesan sukses
            return redirect()->route('client.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('client.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function edit(Client $client)
    {
        return view('client.edit', compact('client'));
    }

    public function update(Request $request, Client $client)
    {
        $this->validate($request, [
            'title'     => 'required'
        ]);

        //get data Blog by ID
        $client = Client::findOrFail($client->id);

        if($request->file('image') == "") {

            $client->update([
                'title'     => $request->title
            ]);

        } else {

            //hapus old image
            if( File::exists(public_path('clients/' . $client->image)) ) {
                File::delete(public_path('clients/' . $client->image));
            }

            //upload new image
            $image = $request->file('image');
            $image_name = $image->hashName();
            $image->move(public_path('clients') ,$image_name);

            $client->update([
                'image'     => $image_name,
                'title'     => $request->title
            ]);

        }

        if($client){
            //redirect dengan pesan sukses
            return redirect()->route('client.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('client.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        if( File::exists(public_path('clients/' . $client->image)) ) {
            File::delete(public_path('clients/' . $client->image));
        }
        $client->delete();

        if($client){
            //redirect dengan pesan sukses
            return redirect()->route('client.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('client.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
