<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    //
    public function BarangView(){
        $data['allDataBarang']=Barang::all();
        return view('backend.barang.view_barang', $data);
    }

    public function BarangAdd(){
        return view('backend.barang.add_barang');
    }

    public function BarangStore(Request $request){

        $data=new Barang();
        $data->nama=$request->nama;
        $data->jumlah=$request->jumlah;
        $data->harga=$request->harga;
        $data->total=($request->harga*$request->jumlah);
        if ($request->nama== "" or $request->jumlah== "" or $request->harga== ""){
            return redirect()->route('barang.add')->with('info','terdapat kolom yang kosong');
        }
        $data->save();

        return redirect()->route('barang.view')->with('info','Data added Successfully');
    }

    public function BarangEdit($id){
        $editData= Barang::find($id);
        return view('backend.barang.edit_barang', compact('editData'));
    }

    public function BarangUpdate(Request $request, $id){

        $data=Barang::find($id);
        $data->jumlah=$request->jumlah;
        $data->harga=$request->harga;
        $data->total=($request->harga*$request->jumlah);

        $data->save();

        return redirect()->route('barang.view')->with('info','Update Data Successfully');
    }

    public function BarangDelete($id){
        $deleteData= Barang::find($id);
        $deleteData->delete();

        return redirect()->route('barang.view')->with('info','Delete Data Successfully');
    }
}