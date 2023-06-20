<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Mahasiswa_model;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\MailSend;
use Illuminate\Support\Facades\Validator;
use Session;

class RegisterController extends Controller
{
    public function actionregister(Request $request)
    {
        $str = Str::random(100);
        $this->validate($request,[
            'email' => 'required|min:5|max:200|unique:mahasiswa',
            'nama' => 'required|min:5|max:200',
            'password' => 'required|min:5|max:250'
         ]);
        $mh = Mahasiswa_model::create([
            'email' => $request->email,
            'nama' => $request->nama,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'verify_key' => $str
        ]);

        $details = [
            'email' => $request->email,
            'website' => 'www.CampusAi.com',
            'datetime' => date('Y-m-d H:i:s'),
            'url' => request()->getHttpHost().'/register/verify/'.$str
        ];
        Mail::to($request->email)->send(new MailSend($details));
        Session::flash('message', 'Please Check Your Email to Activate Your Account, If Not There Please Check Your Email Spam');
        return redirect('/');
    }
    public function actionadmin(Request $request)
    {
        $str = Str::random(100);
        $this->validate($request,[
            'email' => 'required|min:5|max:200|unique:mahasiswa',
            'nama' => 'required|min:5|max:200',
            'password' => 'required|min:5|max:250'
         ]);
        $mh = Mahasiswa_model::create([
            'email' => $request->email,
            'nama' => $request->nama,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'verify_key' => $str
        ]);

        $details = [
            'email' => $request->email,
            'website' => 'www.CampusAi.com',
            'datetime' => date('Y-m-d H:i:s'),
            'url' => request()->getHttpHost().'/register/verify/'.$str
        ];
        Mail::to($request->email)->send(new MailSend($details));
        Session::flash('message', 'Data Berhasil Di Tambahkan');
        return redirect('list_user');
    }
    public function verify($verify_key)
    {
        $keyCheck = Mahasiswa_model::select('verify_key')
                    ->where('verify_key', $verify_key)
                    ->exists();
        
        if ($keyCheck) {
            $user = Mahasiswa_model::where('verify_key', $verify_key)
            ->update([
                'status' => 1
            ]);
            
            return "Verifikasi Berhasil. Akun Anda sudah aktif.";
        }else{
            return "Key tidak valid!";
        }
    }
}