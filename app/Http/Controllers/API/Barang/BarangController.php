<?php

namespace App\Http\Controllers\API\Barang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\barang;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
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
            'id' => 'required',
            'nama' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
            'total' => 'required'
        ]);

        $data=new Barang();
        $data->id=$request->id;
        $data->nama=$request->nama;
        $data->jumlah=$request->jumlah;
        $data->harga=$request->harga;
        $data->total=($request->harga*$request->jumlah);
        $data->save();

        return response()->json($data, 201);
    }

    public function BarangUpdate(Request $request, $id){
        $validateData = $request->validate([
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

    public function BarangDelete(Request $request, $id){
        $data= Barang::find($id);

        if(!empty($data)){
            $data->delete();
            return response()->json([
                'succes' => 'data sudah terhapus' 
            ], 404);
        }
        else{
            return response()->json([
                'error' => 'data tidak ditemukan' 
            ], 404);
        }

    }
}
