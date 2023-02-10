<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\PetugasModel;
use App\Models\PenumpangModel;
use App\Models\RuteModel;
use Illuminate\Support\Facades\Auth;
 
class CustomAuthController extends Controller
{
 
    public function index()
    {
        return view('auth.login');
    }  
       
 
    // public function customLogin(Request $request)
    // {
    //     $request->validate([
    //         'username' => 'required',
    //         'password' => 'required',
    //     ]);
    
    //     if ($cek = Petugas::where('username',$request->username)->first()) {
    //         if(Hash::check($request->password, $cek->password)){
    //             $credentials = $request->only('username', 'password');
    //             if (Auth::guard('petugas')->attempt($credentials)) {
    //                 return redirect()->intended('dashboard')
    //                             ->withSuccess('Signed in');
    //             }
    //         }
    //     }
    //     else if ($cek = Penumpang::where('username',$request->username)->first()) {
    //         if(Hash::check($request->password, $cek->password)){
    //             $credentials = $request->only('username', 'password');
    //             if (Auth::guard('web')->attempt($credentials)) {
    //                 return redirect()->intended('dashboard')
    //                             ->withSuccess('Signed in');
    //             }
    //         }
    //     }
    //     return redirect("login")->withSuccess('Login details are not valid');
    // }
    public function customLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
    
        if ($cek = PetugasModel::where('username',$request->username)->first()) {
            if(Hash::check($request->password, $cek->password)){
                $sessionData = (Object)[
                    'id' => $cek->id_petugas,
                    'nama_lengkap' => $cek->nama_petugas,
                    'username' => $cek->username,
                    'alamat' => '',
                    'tanggal_lahir' => '',
                    'jenis_kelamin' => '',
                    'telepon' => '',
                    'id_level' => $cek->id_level,
                ];
                Session::put('user', $sessionData);
                Session::put('isLogin', true);
                return redirect()->intended('dashboard')
                            ->withSuccess('Signed in');
            }
        }
        else if ($cek = PenumpangModel::where('username',$request->username)->first()) {
            if(Hash::check($request->password, $cek->password)){
                $sessionData = (Object)[
                    'id' => $cek->id_petugas,
                    'nama_lengkap' => $cek->nama_penumpang,
                    'username' => $cek->username,
                    'alamat' => $cek->alamat_penumpang,
                    'tanggal_lahir' => $cek->tanggal_lahir,
                    'jenis_kelamin' => $cek->jenis_kelamin,
                    'telepon' => $cek->telepon,
                    'id_level' => 3,
                ];
                Session::put('user', $sessionData);
                Session::put('isLogin', true);
                return redirect()->intended('dashboard')
                            ->withSuccess('Signed in');
            }
        }
        return redirect("login")->withSuccess('Login details are not valid');
    }
 
 
 
    public function registration()
    {
        return view('auth.registration');
    }
       
 
    public function customRegistration(Request $request)
    {  
        $request->validate([
            'nama_penumpang' => 'required',
            'username' => 'required|unique:penumpang|unique:petugas',
            'password' => 'required|min:6',
            'alamat_penumpang' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'telepon' => 'required',
        ]);
            
        $data = $request->all();
        $check = $this->create($data);
          
        return redirect("dashboard");
    }
 
 
    public function create(array $data)
    {
      return Penumpang::create([
        'nama_penumpang' => $data['nama_penumpang'],
        'username' => $data['username'],
        'password' => Hash::make($data['password']),
        'alamat_penumpang' => $data['alamat_penumpang'],
        'tanggal_lahir' => $data['tanggal_lahir'],
        'jenis_kelamin' => $data['jenis_kelamin'],
        'telepon' => $data['telepon'],
      ]); 
    }     
     
 
    // public function dashboard()
    // {
    //     dd(Auth::guard('web')->user()->password);
    //     if(Auth::guard('web')->check() || Auth::guard('petugas')->check()){
    //         return view('dashboard');
    //     }
   
    //     return redirect("login")->withSuccess('are not allowed to access');
    // }

    public function dashboard(request $request)
    {
        // dd(Session::get('user')->username);
        if(Session::has('isLogin')){
            if (session('user')->id_level === 3){
                $rute = RuteModel::all();
                $choiceTicket = (object)[];
                if(isset($request->id_rute)){
                    $choiceTicket = RuteModel::where('id_rute', $request->id_rute)->first();
                }
                $data['rute'] = $rute;
                $data['choiceTicket'] = $choiceTicket;
            }else{
                $data = [];
            }
			return view('dashboard', $data);
		}else{
			return redirect("login")->withSuccess('are not allowed to access');
		}
          
    }
     
 
    public function logout() {
        Session::flush();
        Auth::logout();
   
        return Redirect('login');
    }
}
