<?php

namespace App\Http\Controllers;

use App\order;
use App\product;
use App\kategori;
use Illuminate\Http\Request;

class controllerproduct extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //index handphone
    public function handphone()
    {

//        $data_products = \App\product::all();
        $data_products = product::where('golongan','handphone')->paginate(10);
        $kategori = kategori::where('kategori','Handphone')->get();
        return view('handphone',['data_product' => $data_products],['kategori' => $kategori]);
    }
    //index sparepart
    public function sparepart()
    {
        $data_products = product::where('golongan','sparepart')->paginate(10);
        $kategori = kategori::where('kategori','Sparepart')->get();
        return view('sparepart',['data_product' => $data_products],['kategori' => $kategori]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //create handphone
    public function hcreate(Request $request)
    {
        $product = product::create($this->validateReq());
        $this->storeimage($product);
        return redirect('/handphone')->with('sukses','Data berhasil terinput');
    }
    //create sparepart
    public function screate(Request $request)
    {
        $product = product::create($this->validateReq());
        $this->storeimage($product);
        return redirect('/sparepart')->with('sukses','Data berhasil terinput');
    }
    //update handphone
    public function updateh(Request $request)
    {
        $product = product::findOrFail($request->id);
        $product->update($this->validateReq());
        $this->storeimage($product);
        return redirect('/handphone')->with('sukses', 'Data berhasil Diedit');
    }
    //update sparepart
    public function updates(Request $request)
    {
        $product = product::findOrFail($request->id);
        $product->update($this->validateReq());
        $this->storeimage($product);
        return redirect('/sparepart')->with('sukses', 'Data berhasil Diedit');
    }
    //delete handphone
    public function deleteh($id)
    {
        $produk = product::find($id);
        $produk->delete($produk);
        return redirect('handphone')->with('sukses','Data Berhasil Dihapus');
    }
    //delete sparepart
    public function deletes($id)
    {
        $produk = \App\product::find($id);
        $produk->delete($produk);
        return redirect('sparepart')->with('sukses','Data Berhasil Dihapus');
    }
    public function searchspar(Request $request)
    {
        $query = $request->input('query');
        $dataproduk = product::where('namabarang','like', "%$query%")->paginate(10);
        $kategori = kategori::where('kategori','Sparepart')->get();
        return view('sparepart',['data_product' => $dataproduk],['kategori' => $kategori]);
    }
    public function searchhand(Request $request)
    {
        $query = $request->input('query');
        $dataproduk = product::where('namabarang','like', "%$query%")->paginate(10);
        $kategori = kategori::where('kategori','Handphone')->get();
        return view('handphone',['data_product' => $dataproduk],['kategori' => $kategori]);
    }
    //validasi request
    private function validateReq(){
        return tap(request()->validate([
            'kodeproduk' => 'required',
            'namabarang' => 'required',
            'golongan' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
        ]), function (){
            if (request()->hasFile('image')){
                request()->validate([
                    'image' => 'file|image',
                ]);
            }
        });
    }
    //simpan gambar ke folder
    private function storeimage($product){
        if(request()->has('image')){
            $product->update([
                'image' => request()->image->store('uploads','public'),
            ]);
        }
    }
}
