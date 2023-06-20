<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Mahasiswa_model;
use App\Models\Login_model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index(){
        if(!Session::get('login')){
            return redirect('/')->with('alert','You must login first !');
        }
        else{
            $data = [
                'title' => 'Home'
              
            ];
            return view('home',$data);
        }
    }

    public function login(){
        return view('/');
    }

    public function loginPost(Request $request){

        $email = $request->email;
        $password = $request->password;
        $status = 1;
        $ar = ['email' => $email, 'status' => $status];

        $data = Login_model::where($ar)
        ->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('id_mahasiswa',$data->id_mahasiswa );
                Session::put('nama',$data->nama);
                Session::put('email',$data->email);
                Session::put('jkl',$data->jkl);
                Session::put('tgl_laghir',$data->tgl_laghir);
                Session::put('agama',$data->agama);
                Session::put('alamat',$data->alamat);
                Session::put('pdk_trkhr',$data->pdk_trkhr);
                Session::put('id_lokasi_k',$data->id_lokasi_k);
                Session::put('id_program',$data->id_program);
                Session::put('ktp',$data->ktp);
                Session::put('ijazah',$data->ijazah);
                Session::put('role',$data->role);
                Session::put('status',$data->status);
                Session::put('verify_key',$data->verify_key);
                Session::put('form',$data->form);
                Session::put('login',TRUE);
                return redirect('home');
            }
            else{
                return redirect('/')->with('alert','Password or Email, Wrong!');
            }
        }
        else{
            return redirect('/')->with('alert','Password or Email, Wrong!');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('/')->with('alert',"You've logged out !");
    }
}