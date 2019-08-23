<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\M_barang;
use Illuminate\Support\Facades\DB;


class Utama extends Controller
{
    public function index(){
        $barang = DB::table('tbl_barang')->get();
        return view('Utama',['barang'=>$barang]);
    }

    public function store(Request $request){
        $this->validate($request,[
            'file'=>'required|max:2048',
        ]);
        $file = $request->file('file');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'data_file';

        if($file->move($tujuan_upload,$nama_file)){
            $data=M_barang::create([
                'nama_produk' => $request->nama_produk,
                'harga' => $request->harga,
                'gambar' => $nama_file
            ]);
            $res['message']='Success!';
            $res['values']=$data;
            return response($res);
        }
    }
}
