<?php

namespace App\Http\Controllers;

use App\dataservice;
use App\keranjang;
use Illuminate\Http\Request;
use App\product;
use App\kategori;
use App\order;
use App\reparasi;
use Session;
use Auth;
use Carbon\Carbon;

class halamanutamaController extends Controller
{
    public function index($id)
    {
        $kategori = kategori::all();
        $dataproduk = product::where('golongan',$id)->inRandomOrder()->paginate(16);
        return view('katalog',['data_produk' => $dataproduk],['kategori' => $kategori]);
    }

    public function detail_katalog($id)
    {
        $dataproduk = \App\product::find($id);
        return view('detail_katalog',['data_produk' => $dataproduk]);
    }

    public function filter($id){
        $kategori = kategori::all();
        $dataproduk = \App\product::where('kategori',$id)->inRandomOrder()->paginate(16);
        return view('katalog',['data_produk' => $dataproduk],['kategori' => $kategori]);
    }

    public function tambah_keranjang(Request $request, $id){
        if (Auth::user()){
            $produk = product::find($id);
            $oldcard = Session::has('keranjang') ? Session::get('keranjang') : null;
            $keranjang = new keranjang($oldcard);
            $keranjang->tambah($produk, $produk->id);
            $request->session()->put('keranjang',$keranjang);
//        dd($request->session()->get('keranjang'));
//        return ;
            return view('welcome');
        }else{
            return redirect('login');
        }
    }

    public function keranjang()
    {
        if (!Session::has('keranjang')){
            return view('keranjang',['produk' => null]);
        }
        $oldcard = Session::get('keranjang');
        $keranjang = new keranjang($oldcard);
        return view('keranjang', ['produk' => $keranjang->items, 'totalharga' => $keranjang->totalharga]);
    }

    public function getHapusItem($id)
    {
        $oldcart = Session::has('keranjang') ? Session::get('keranjang') : null;
        $keranjang = new keranjang($oldcart);
        $keranjang->hapus_item($id);
        if (count($keranjang->items) > 0){
            Session::put('keranjang', $keranjang);
        }else{
            Session::forget('keranjang');
        }
        return redirect()->route('keranjang');
//        dd($id);
    }

    public function checkout(Request $request)
    {
        if (!Session::has('keranjang')) {
            return redirect()->route('keranjang', ['produk' => null]);
        }
        $oldcard = Session::get('keranjang');
        $keranjang = new keranjang($oldcard);
        foreach ($keranjang->items as $data) {
            $id = $data['item']['id'];
        }
        $test = product::where('id', $id)->decrement('jumlah', $keranjang->items[$id]['qty']);
        $order = new order();
        $order->keranjang = serialize($keranjang);
        $order->verifikasi = $request->input('verifikasi');
        if ($order->verifikasi == 'false') {
            $order->verifikasi = false;
        }
        Auth::User()->orders()->save($order);

        Session::forget('keranjang');
        return redirect('/home')->with('sukses','Data berhasil Ditambahkan');
    }

//    public function bayar(Request $request){
//        if (!Session::has('keranjang')){
//            return redirect()->route('keranjang',['produk' => null]);
//        }
//        $oldcard = Session::get('keranjang');
//        $keranjang = new keranjang($oldcard);
//        $order = new order();
//        $order->keranjang = serialize($keranjang);
//        $order->verifikasi = $request->input('verifikasi');
//        if ($order->verifikasi == 'true') {
//            $order->verifikasi = true;
//        }
//        Auth::User()->orders()->save($order);
//        Session::forget('keranjang');
//        return redirect('/home');
//    }

    public function inputreparasi(Request $request)
    {
        if (Auth::User()){
            if (Auth::User()->role != '1'){
                reparasi::insert([
                    'userid' => $request->userid,
                    'iddservice' => $request->iddservice,
                    'service' => $request->service,
                    'verifikasi' => false,
                    'harga' => $request->harga,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
                return redirect('/home');
            }
            else{
                return redirect('dashboard');
            }
        }else{
            return redirect('login');
        }
    }

    public function service()
    {
        $data = \App\dataservice::distinct()->select('model')->get();
//        dd($data);
        return view('service',['dataservice' => $data]);
    }
    public function service_handphone($id)
    {
//        return dd($id);

        $data1 = \App\dataservice::where('model',$id);
        $data2 = $data1->distinct()->get(['handphone' => 'handphone', 'model' => 'model']);
//        dd($data2);
        return view('service_handphone',['dataservice1' => $data2]);

    }
    public function kendala($id,$ids)
    {

        $data1 = \App\dataservice::where('model',$id)->where('handphone',$ids)->get();
//        dd($data1);
//        return dd($id,$ids,$data1);
        return view('kendala',['dataservice2' => $data1]);
    }
    public function detail_service($id,$ids,$idss)
    {
        $data1 = \App\dataservice::where('model',$id)->where('handphone',$ids)->where('kerusakan',$idss)->get();
//        dd($data1);
        return view('detail_service',['dataservice' => $data1]);
    }

    public function search(Request $request)
    {
        $kategori = kategori::all();
        $query = $request->input('query');
        $dataproduk = product::where('namabarang','like', "%$query%")->paginate(16);
//        dd($product);
        return view('katalog',['data_produk' => $dataproduk],['kategori' => $kategori]);
    }
}
