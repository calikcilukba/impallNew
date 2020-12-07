<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use App\reparasi;
use App\order;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware( 'auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function biodata_diri()
    {
        return view('biodata_diri');
    }
    public function lihatservice()
    {
        $id = Auth::User()->id;
//        dd($id);
        $orders = reparasi::where('userid',$id)->get();
        return view('lihat_service',['orders' =>$orders]);
    }
    public function pesanan(){
        $orders = Auth::User()->orders;
        $orders->transform(function($order, $key){
            $order->keranjang = unserialize($order->keranjang);
            return $order;
        });
//        dd($orders);
        return view('pesanan_user',['orders' =>$orders]);
    }
    public function update(Request $request){
//        dd($request);
        if (Hash::check($request->input(
            'password'), Auth::User()->password)){
        $user = \App\User::findOrFail($request->id);
        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'alamat' => $request->input('alamat'),
            'jeniskelamin' => $request->input('jeniskelamin'),
            'umur' => $request->input('umur'),
            'updated_at' => $request->input('update'),
        ]);
        return redirect('/home')->with('sukses','Data berhasil Diedit');
        }
    }

}
