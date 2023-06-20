<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Contact_model;
use App\Models\Login_model;
use App\Models\Lokasi_model;
use App\Models\Studi_model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Session;
  
class AdminController extends Controller
{
    public function index()
    {
        $dt = ['form' => 1];
        $data = [
            'title' => 'Dashboard Admin',
            'user' => DB::table('mahasiswa')->get(),
            'lokasi' => DB::table('lokasi')->get(),
            'studi' => DB::table('studi')->get(),
            'daftar' => DB::table('mahasiswa')
            ->where($dt)
            ->get(),
        ];
        return view('admin.index',$data);
    }
    public function user()
    {
       
        $data = [
            'title' => 'List User',
            'user' => DB::table('mahasiswa')->get(),
        ];
        return view('admin.user',$data);
    }
    public function usr_u(Request $request, $id_mahasiswa)
    {
        //validate form
        $this->validate($request, [
            'email' => 'required|min:5|max:200',
            'nama' => 'required|min:5|max:200',
            'role' => 'required',
            'status' => 'required'
        ]);
        $up = Login_model::find($id_mahasiswa);
        $up->email    = $request->email;
        $up->nama    = $request->nama;
        $up->role    = $request->role;
        $up->status    = $request->status;
        $up->save();
        Session::flash('message', 'Data Berhasil Di Update');
        return redirect('list_user');

    }
    public function usr_d($id_mahasiswa){
        $dl   = Login_model::find($id_mahasiswa);
        $dl->delete();
        Session::flash('message', 'Data Berhasil Di Hapus');
        return redirect('list_user');
    }
    public function lokasi_k()
    {
       
        $data = [
            'title' => 'List Lokasi Kampus',
            'lokasi' => DB::table('lokasi')->get(),
        ];
        return view('admin.lokasi',$data);
    }
    public function lks_u(Request $request, $id_lokasi)
    {
        //validate form
        $this->validate($request, [
            'kota' => 'required|min:3|max:200',
            'provinsi' => 'required|min:3|max:200'
        ]);
        $up = Lokasi_model::find($id_lokasi);
        $up->kota    = $request->kota;
        $up->provinsi    = $request->provinsi;
        $up->save();
        Session::flash('message', 'Data Berhasil Di Update');
        return redirect('list_lokasi');

    }
    public function lks_d($id_lokasi){
        $dl   = Lokasi_model::find($id_lokasi);
        $dl->delete();
        Session::flash('message', 'Data Berhasil Di Hapus');
        return redirect('list_lokasi');
    }
    public function actionlokasi(Request $request)
    {
        $this->validate($request,[
            'provinsi' => 'required|min:3|max:200',
            'kota' => 'required|min:3|max:200'
         ]);
        $crt = Lokasi_model::create([
            'provinsi' => $request->provinsi,
            'kota' => $request->kota
        ]);
        Session::flash('message', 'Data Berhasil Di Tambahkan');
        return redirect('list_lokasi');
    }
    public function studi_p()
    {
       
        $data = [
            'title' => 'List Program Studi',
            'studi' => DB::table('studi')->get(),
        ];
        return view('admin.studi',$data);
    }
    public function std_u(Request $request, $id_studi)
    {
        //validate form
        $this->validate($request, [
            'jurusan' => 'required|min:1|max:200'
        ]);
        $up = Studi_model::find($id_studi);
        $up->jurusan    = $request->jurusan;
        $up->save();
        Session::flash('message', 'Data Berhasil Di Update');
        return redirect('list_studi');

    }
    public function actionstudi(Request $request)
    {
        $this->validate($request,[
            'jurusan' => 'required|min:3|max:200'
         ]);
        $crt = Studi_model::create([
            'jurusan' => $request->jurusan
        ]);
        Session::flash('message', 'Data Berhasil Di Tambahkan');
        return redirect('list_studi');
    }
    public function std_d($id_studi){
        $dl   = Studi_model::find($id_studi);
        $dl->delete();
        Session::flash('message', 'Data Berhasil Di Hapus');
        return redirect('list_studi');
    }
    public function calon_m()
    {
        $dt = ['form' => 1];
        $data = [
            'title' => 'List Calon Mahasiswa',
            'calon' => DB::table('mahasiswa')
            ->join('lokasi', 'mahasiswa.id_lokasi_k', '=', 'lokasi.id_lokasi')
            ->join('studi', 'mahasiswa.id_program', '=', 'studi.id_studi')
            ->where($dt)
            ->get(),
        ];
        return view('admin.calon',$data);
    }
    public function calon_d($id_mahasiswa){
        $dl   = Login_model::find($id_mahasiswa);
        $dl->delete();
        Session::flash('message', 'Data Berhasil Di Hapus');
        return redirect('list_calon');
    }
    public function no()
    {
        $data = [
            'title' => '404 Not Found'
          
        ];
        return view('admin.404',$data);
    }
}