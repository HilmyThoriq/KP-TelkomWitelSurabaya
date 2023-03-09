<?php

namespace App\Http\Controllers;

use App\Imports\MitraImport;
use App\Models\Lampiran;
use App\Models\Mitra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class MitraController extends Controller
{
    public function index(Request $request){

        if($request->has('search')){
            $data = Mitra::where('namamitra', 'LIKE', '%' .$request->search. '%')->paginate(5);
            if($data->isEmpty()){
                return redirect()->route('daftarMitra', compact('data'))->with('failed', 'Data Mitra tidak ditemukan');
            }else return redirect()->route('daftarMitra', compact('data'))->with('success', 'Data Mitra ditemukan');
        }
        elseif($request->has('searchkodemitra')){
            $data = Mitra::where('kodemitra', 'LIKE', '%' .$request->searchkodemitra. '%')->paginate(5);
            if($data->isEmpty()){
                return redirect()->route('daftarMitra', compact('data'))->with('failed', 'Data Mitra tidak ditemukan');
            }else return redirect()->route('daftarMitra', compact('data'))->with('success', 'Data Mitra ditemukan');
        }
        else{
            $data = Mitra::paginate(5);
        }

        return view('dataMitra', compact('data'));
    
    }

    public function index_admin(Request $request){

        if($request->has('search')){
            $data = Mitra::where('namamitra', 'LIKE', '%' .$request->search. '%')->paginate(5);
            if($data->isEmpty()){
                return redirect()->route('daftarMitra_Admin', compact('data'))->with('failed', 'Data Mitra tidak ditemukan');
            }else return redirect()->route('daftarMitra_Admin', compact('data'))->with('success', 'Data Mitra ditemukan');
        }
        elseif($request->has('searchkodemitra')){
            $data = Mitra::where('kodemitra', 'LIKE', '%' .$request->searchkodemitra. '%')->paginate(5);
            if($data->isEmpty()){
                return redirect()->route('daftarMitra_Admin', compact('data'))->with('failed', 'Data Mitra tidak ditemukan');
            }else return redirect()->route('daftarMitra_Admin', compact('data'))->with('success', 'Data Mitra ditemukan');
        }
        else{
            $data = Mitra::paginate(5);
        }

        return view('dataMitra_Admin', compact('data'));
    
    }

    public function tambahMitra(){

        return view('tambahMitra');
    
    }
    
    public function insertData(Request $request){

        $data = Mitra::create($request->all());
        return redirect()->route("daftarMitra")->with('success', 'Data Mitra Berhasil Di Tambahkan!');
    }

    public function tampilkanData($id){

        $data = Mitra::find($id);
        // dd($data);
        return view('tampilMitra', compact('data'));
    }

    public function updateData(Request $request, $id){
        $data = Mitra::find($id);
        $data->update($request->all());
        
        return redirect()->route("daftarMitra")->with('success', 'Data Mitra Berhasil Di Update!');
    }

    public function deleteData($kodemitra){
        $data = Mitra::where('kodemitra',$kodemitra)->first()->delete();
        $file = Lampiran::where('kodemitra', $kodemitra)->get();
        
        foreach($file as $f){
            unlink(storage_path("/app/file/$f->namafile"));
        }
        $filebaru = Lampiran::where('kodemitra', $kodemitra)->delete();
        
        return redirect()->route("daftarMitra")->with('success', 'Data Berhasil Di Hapus!');
    }

    public function detailData($kodemitra){
        // $kode = Crypt::decrypt($kodemitra);
        $data = Mitra::where('kodemitra',$kodemitra)->first();
        $file = Lampiran::where('kodemitra', $kodemitra)->get();
        // dd($file);
        return view('detailMitra', compact('data', 'file'));
    }
    
    public function uploadPage($kodemitra){

        return view('uploadPage', compact('kodemitra'));
    }

    public function upload(Request $request){

        $rules = [
            'namafile' => 'required|mimes:pdf,jpeg,png,jpg',
        ];
        
        $messages = [
            'namafile.mimes' => 'The uploaded file must be in PDF, JPEG, PNG, or JPG format.',
        ];

        $request->validate($rules,$messages);

        $file = Lampiran::create($request->all());
        if($request->hasFile('namafile')){
            $request->file('namafile')->move(storage_path('/app/file/'), $request->file('namafile')->getClientOriginalName());
            $file->namafile = $request->file('namafile')->getClientOriginalName();
            $file->save();
        }

        return redirect()->route("daftarMitra")->with('success', 'File Mitra Berhasil Di Update!');
    }

    public function deleteFile($kodemitra, $namafile){
        unlink(storage_path("/app/file/$namafile"));
        $filebaru = Lampiran::where('namafile', $namafile)->delete();

        return back();
    }

    public function importExcel(Request $request){
        try {
            Excel::import(new MitraImport, $request->file('file_excel'));
            return redirect()->back()->with('success', 'File CSV Berhasil di Import');
        } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
            $failures = $e->failures();
            $errorMessage = "Terdapat Kesalahan Saat Mengimport CSV:\n";
            foreach ($failures as $failure) {
                $errorMessage .= "- Row " . $failure->row() . ": " . implode(", ", $failure->errors()) . "\n";
            }
            return redirect()->back()->with('failed', $errorMessage);
        }
    }
    }

