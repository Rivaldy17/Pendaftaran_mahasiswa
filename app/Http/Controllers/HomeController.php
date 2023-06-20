<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Contact_model;
use Illuminate\Support\Str;
use Session;
  
class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact'
          
        ];
        return view('contact',$data);
    }
    public function actioncontact(Request $request)
    {
        $messages = [
            'unique' => 'Your Inquiry is Still Processing',
        ];
        $this->validate($request,[
            'email_c' => 'required|min:5|max:200|unique:contact',
            'subject' => 'required|min:5|max:200',
            'message' => 'required|min:5|max:200'
         ],$messages);
        $ct = Contact_model::create([
            'nama_c' => $request->nama_c,
            'email_c' => $request->email_c,
            'subject' => $request->subject,
            'message' => $request->message,
            'status' => $request->status
        ]);
        Session::flash('message', 'Question successfully sent, we will process it, please check your email to find out our answer !!!');
        return redirect('contact');
    }
    public function about()
    {
        $data = [
            'title' => 'About'
          
        ];
        return view('about',$data);
    }
}