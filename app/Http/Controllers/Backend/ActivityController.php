<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File; 

use App\Models\Activity;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['items']  = Activity::all(); 
        return view('backend.activity.list.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['item']   = new Activity();
        $data['page']   = 'create';
        $data['url']    = route('activity.store');
        return view('backend.activity.create.index', $data);
    }

    protected function validator(array $data, $edit = false)
    {
        $validation_list = [
            'judul'         => 'required|max:255',
            'deskripsi'     => 'required',
            'foto'          => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ];
        if( $edit ){
            $validation_list['foto'] = "image|mimes:jpeg,png,jpg,gif,svg";
        }
        return Validator::make($data, $validation_list);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $this->validator($data)->validate();
        
        $originalImage = $request->file('foto');
        $originalImage->move(public_path().'/images/Kegiatan', $img = 'img_'.Str::random(15). '.' . $originalImage->getClientOriginalExtension());
        $data['foto'] = $img;

        $data = Activity::create($data);
        return redirect()->route('activity.index')->with('message', 'Berhasil Tambah data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['item']   = Activity::findOrFail($id);
        $data['page']   = 'edit';
        $data['url']    = route('activity.update', $id);
        return view('backend.activity.create.index', $data);
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
        $data = $request->all();
        $this->validator($data, true)->validate();
        
        if( $request->file('foto') ){
            $item   = Activity::findOrFail($id);
            
            $image_path = public_path().'/images/Artikel/'.$item->foto;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }

            $originalImage = $request->file('foto');
            $originalImage->move(public_path().'/images/Kegiatan', $img = 'img_'.Str::random(15). '.' . $originalImage->getClientOriginalExtension());
            $data['foto'] = $img;
        }

        $data = Activity::find($id)->update($data);;
        return redirect()->route('activity.index')->with('message', 'Berhasil Update data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item   = Activity::findOrFail($id);
        $image_path = public_path().'/images/Artikel/'.$item->foto;
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
        $item->delete();
        return redirect()->route('activity.index')->with('message', 'Berhasil Menghapus data');
    }
}
