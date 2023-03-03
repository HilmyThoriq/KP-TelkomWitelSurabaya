<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class adminController extends Controller
{

    public function login(Request $request){
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $role = Auth::user()->role;
            // dd($role);
            if($role == "admin"){
                $request->session()->regenerate();
                return redirect('/daftarMitra');
            }
            elseif($role == "superadmin"){
                $request->session()->regenerate();
                return redirect('/daftarAdmin');
            }
        }

        return redirect()->route("home")->with('failed', 'Username atau Password Salah!');
        // dd($data);
        // return \redirect('/')-> with('failed', 'Username atau Password Salah Silahkan Coba Lagi!');
    }
    
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function tambahAdmin(){
        return view('tambahAdmin');
    }

    public function insertAdmin(Request $request){
        $pw = bcrypt($request->password);
        $data = Admin::create([
                'username' => $request->username,
                'password' => $pw
            ]);
        // dd($data);
        return redirect()->route("daftarAdmin")->with('success', 'Admin Baru Berhasil Di Tambahkan!');
    }

    public function daftarAdmin(){
        $data = Admin::where('role','admin')->get();
        // dd($data);
        return view('dataAdmin', compact('data'));
    }

    public function deleteAdmin($id){
        $data = Admin::where('id',$id)->first()->delete();
    
        return redirect()->route("daftarAdmin")->with('success', 'Admin Berhasil Di Hapus!');
    }

    // public function editAdmin($id){
    //     $data = Admin::find($id);
    //     // dd($data);
    //     return view('editAdmin', compact('data'));
    // }

    public function updateAdmin(Request $request, $id){
        $data = Admin::find($id);
        $data->update($request->all());
        
        return redirect()->route("daftarAdmin")->with('success', 'Data Mitra Berhasil Di Update!');
    }


}