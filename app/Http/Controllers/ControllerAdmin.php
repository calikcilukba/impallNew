<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dataservice;
use App\kategori;
use App\kerusakan;
use App\order;
use App\reparasi;
use Auth;

class ControllerAdmin extends Controller
{
    public function index()
    {
        return view('admin');
    }
    public function pengguna()
    {
        $data_users = \App\user::all();
        return view('pengguna',['data_users' => $data_users]);
    }
    public function service(){
        $order = reparasi::paginate(10);
        return view('lihat_service_admin',['order' => $order]);
    }

    public function pembelian(){
        $order = order::paginate(10);
        $order->transform(function($order, $key){
           $order->keranjang = unserialize($order->keranjang);
           return $order;
        });
//        dd($order);
        return view('lihat_pembelian_admin',['order' => $order]);
    }

    public function updateverifikasi($id)
    {
//        dd($id);
        order::where('idorder',$id)->update(['verifikasi' => 1]);
        return redirect('lihatpembelian');
    }
    public function updateverifikasiservice($id)
    {
//        dd($id);
        reparasi::where('id',$id)->update(['verifikasi' => 1]);
        return redirect('lihatservice');
    }

    public function delete($id){
        $data_users = \App\user::find($id);
        $data_users->delete($data_users);
        return redirect('pengguna')->with('sukses','Data Berhasil Dihapus');
    }


    public function dataproductservice(){
        $data = \App\dataservice::paginate(10);
        $kategori = kategori::all();
        $kerusakan = kerusakan::all();
        return view('dataproductservice',['data'=> $data], ['kategori' => $kategori])->with(['kerusakan' => $kerusakan]);
    }


    public function dscreate(Request $data)
    {
        dataservice::create([
            'handphone' => $data['handphone'],
            'model' => $data['model'],
            'kerusakan' => $data['kerusakan'],
            'detail' => $data['detail'],
            'harga' => $data['harga'],
        ]);
        return redirect('dataservices')->with('sukses','Data berhasil terinput');
    }
    public function updateds(Request $request, $id)
    {
//        $dataservice1 = dataservice::findOrFail($request->id);
//        $dataservice1->update($this->validateReq());
//        return redirect('dataservices')->with('sukses','Data berhasil diedit');

        $data = dataservice::findOrFail($request->id );
        $data->update($this->validateReq());
        return redirect('/dataservices')->with('sukses', 'Data berhasil Diedit');
    }
    //delete handphone
    public function deleteds($id)
    {
        $dataservice = dataservice::find($id);
        $dataservice->delete($dataservice);
        return redirect('dataservices')->with('sukses','Data Berhasil Dihapus');
    }
    public function searchuser(Request $request)
    {
        $query = $request->input('query');
        $data_users = \App\user::where('name','like',"%$query")->get();
        return view('pengguna',['data_users' => $data_users]);
    }

    private function validateReq(){
        return tap(request()->validate([
            'handphone' => 'required',
            'model' => 'required',
            'kerusakan' => 'required',
            'detail' => 'required',
            'harga' => 'required',
        ]), function (){
            if (request()->hasFile('image')){
                request()->validate([
                    'image' => 'file|image',
                ]);
            }
        });
    }


}
