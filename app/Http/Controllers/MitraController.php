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
        }
        elseif($request->has('searchkodemitra')){
            $data = Mitra::where('kodemitra', 'LIKE', '%' .$request->searchkodemitra. '%')->paginate(5);
        }
        else{
            $data = Mitra::paginate(5);
        }

        return view('dataMitra', compact('data'));
    
    }

    public function index_admin(Request $request){

        if($request->has('search')){
            $data = Mitra::where('namamitra', 'LIKE', '%' .$request->search. '%')->paginate(5);
        }
        elseif($request->has('searchkodemitra')){
            $data = Mitra::where('kodemitra', 'LIKE', '%' .$request->searchkodemitra. '%')->paginate(5);
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
        
        if($request->hasFile('datalengkap')){
            $request->file('datalengkap')->move('datalengkap/', $request->file('datalengkap')->getClientOriginalName());
            $data->datalengkap = $request->file('datalengkap')->getClientOriginalName();
            $data->save();
        }

        if($request->hasFile('proposal')){
            $request->file('proposal')->move('proposal/', $request->file('proposal')->getClientOriginalName());
            $data->proposal = $request->file('proposal')->getClientOriginalName();
            $data->save();
        }

        
        if($request->hasFile('sp3k')){
            $request->file('sp3k')->move('sp3k/', $request->file('sp3k')->getClientOriginalName());
            $data->sp3k = $request->file('sp3k')->getClientOriginalName();
            $data->save();
        }

        
        if($request->hasFile('agunan')){
            $request->file('agunan')->move('agunan/', $request->file('agunan')->getClientOriginalName());
            $data->agunan = $request->file('agunan')->getClientOriginalName();
            $data->save();
        }
    
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
        // $data = $request->file('file_excel');
        // $namafile = $data->getClientOriginalName();
        // $data->move(storage_path('/app/excel/MitraData'), $namafile);
        
        // Excel::import(new MitraImport, \storage_path('/app/excel/MitraData/'.$namafile));
        // return \redirect()->back();

        Excel::import(new MitraImport, $request->file('file_excel'));
        $import_errors = $request->session()->get('import_errors');
        if ($import_errors) {
            return redirect()->back()->with('failed','Imported Mitra Failed');
        } else{
            return redirect()->back()->with('success', 'Imported Mitra berhasil');
        }
    }
    
    // public function downloadFile(){
    //         // $filename = $request->datalengkap;
    //         // $filepath = public_path(). "/datalengkap/" . $filename;

    //        return response()->download("/public/datalengkap/dummy-excel.csv");
    //     } 
    }

