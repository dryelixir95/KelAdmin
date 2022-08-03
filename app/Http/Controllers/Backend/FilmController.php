<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\film;

class filmController extends Controller
{
    //
    public function filmView(){
        $data['allDataFilm']=Film::all();
        return view('backend.film.view_film', $data);
    }

    public function filmAdd(){
        return view('backend.film.add_film');
    }

    public function filmStore(Request $request){

        $data=new Film();
        $data->judul=$request->judul;
        $data->tahun=$request->tahun;
        $data->sutradara=$request->sutradara;
        $data->save();

        return redirect()->route('film.view')->with('info','Data added Successfully');
    }

    public function filmEdit($id){
        $editData= Film::find($id);
        return view('backend.film.edit_film', compact('editData'));
    }

    public function filmUpdate(Request $request, $id){

        $data=Film::find($id);
        $data->tahun=$request->tahun;
        $data->sutradara=$request->sutradara;

        $data->save();

        return redirect()->route('film.view')->with('info','Update Data Successfully');
    }

    public function filmDelete($id){
        $deleteData= Film::find($id);
        $deleteData->delete();

        return redirect()->route('film.view')->with('info','Delete Data Successfully');
    }

}
