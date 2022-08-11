<?php

namespace App\Http\Controllers\API\Tugas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TugasController extends Controller
{
    //
    public function getAll(){
        $data=DB::table('barangs')
        ->orderBy('id','desc')
        ->get();

        return response()->json($data, 200);
    }

    public function BarangStore(Request $request){
        $validateData = $request->validate([
            'name' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
            'total' => 'required'
        ]);

        $data=new Barang();
        $data->nama=$request->name;
        $data->jumlah=$request->jumlah;
        $data->harga=$request->harga;
        $data->total=($request->harga*$request->jumlah);
        $data->save();

        return response()->json($data, 201);
    }

    public function BarangUpdate(Request $request, $id){
        $validateData = $request->validate([
            'name' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
            'total' => 'required'
        ]);

        $data=Barang::find($id);
        $data->jumlah=$request->jumlah;
        $data->harga=$request->harga;
        $data->total=($request->harga*$request->jumlah);
        $data->save();

        return response()->json($data, 201);
    }

    public function BarangDelete(Request $request){
        $data= Barang::find($id);

        if(!empty($data)){
            $data->delete();
            return response()->json($data, 201);
        }
        else{
            return response()->json([
                'error' => 'data tidak ditemukan' 
            ], 404);
        }

    }
}
