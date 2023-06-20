<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Contact_model;
use App\Models\Login_model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Session;
  
class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'studi' => DB::table('studi')->get(),
            'lokasi' => DB::table('lokasi')->get()
          
        ];
        return view('dashboard.index',$data);
    }
    public function form()
    {
        $data = [
            'title' => 'Form',
            'studi' => DB::table('studi')->get(),
            'lokasi' => DB::table('lokasi')->get()
        ];
        return view('dashboard.form',$data);
    }
    public function form_u(Request $request, $id_mahasiswa)
    {
        //validate form
        $this->validate($request, [
            'email' => 'required|min:5|max:200',
            'name' => 'required|min:5|max:200',
            'jenis' => 'required',
            'tanggal' => 'required',
            'agama' => 'required',
            'alamat' => 'required|min:5|max:200',
            'pendidikan' => 'required',
            'lokasi' => 'required',
            'program' => 'required',
            'ktp' => 'required|mimes:pdf|max:10000',
            'ijazah' => 'required|mimes:pdf|max:10000',
            'form' => 'required'
        ]);
        $ktp_g = $request->file('ktp');
        $ijazah_g = $request->file('ijazah');
        $extension1 = $ktp_g->getClientOriginalExtension();
        $rename1 = 'file_'.uniqid().'.' . $extension1;
        $extension2 = $ijazah_g->getClientOriginalExtension();
        $rename2 = 'file_'.uniqid().'.' . $extension2;
        $up = Login_model::find($id_mahasiswa);
        $up->email    = $request->email;
        $up->nama    = $request->name;
        $up->jkl    = $request->jenis;
        $up->tgl_laghir    = $request->tanggal;
        $up->agama    = $request->agama;
        $up->alamat    = $request->alamat;
        $up->pdk_trkhr    = $request->pendidikan;
        $up->id_lokasi_k    = $request->lokasi;
        $up->id_program    = $request->program;
        $up->ktp    = $rename1;
        $up->ijazah    = $rename2;
        $up->form    = $request->form;
        $up->save();
        $ktp_g->move('uploads/pdf/', $rename1);
        $ijazah_g->move('uploads/pdf/', $rename2);
        Session::flush();
        return redirect('/')->with('alert',"Please Login Again !");

    }
    public function profil()
    {
        $id_lokasi = session()->get('id_lokasi_k');
        $id_prog = session()->get('id_program');
        $loc = ['id_lokasi_k' => $id_lokasi];
        $st = ['id_program' => $id_prog];
        $data = [
            'title' => 'Profil',
            'lokasi' => DB::table('mahasiswa')
            ->join('lokasi', 'mahasiswa.id_lokasi_k', '=', 'lokasi.id_lokasi')
            ->where($loc)
            ->get(),
            'program' => DB::table('mahasiswa')
            ->join('studi', 'mahasiswa.id_program', '=', 'studi.id_studi')
            ->where($st)
            ->get()
          
          
        ];
        return view('dashboard.profil',$data);
    }
}