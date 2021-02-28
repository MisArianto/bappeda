<?php

namespace App\Http\Controllers\User;

use Storage;
use App\Models\Master\KeteranganDoc;
use App\Models\Master\Tahun;
use App\Models\Master\Sumber;
use App\Models\Master\Versi;
use App\Models\Master\KategoriDokumen as Kategori;
use App\Models\Master\PicDokumen as PIC;
use App\Models\Dokumen;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

class DokumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dokumens = Dokumen::latest()->paginate(20);
        return view('user.dokumen.index', compact('dokumens'))->with('no', 1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $keterangans = KeteranganDoc::latest()->get();
        $tahuns = Tahun::latest()->get();
        $sumbers = Sumber::latest()->get();
        $versis = Versi::latest()->get();
        $kategoris = Kategori::latest()->get();
        $pics = PIC::latest()->get();
        return view('user.dokumen.add', compact('tahuns', 'sumbers', 'versis', 'kategoris', 'pics', 'keterangans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:kategori_dokumens,name',
            'file' => 'required|mimes:pdf,xlsx,xls,doc,docx',
            // 'tahun' => 'required',
            // 'sumber' => 'required',
            // 'versi' => 'required',
            // 'kategori' => 'required',
            // 'pic' => 'required',
            'keterangan' => 'required',
        ]);

        try {
            if($request->has('file'))
            {
                $file = $request->file('file');

                $ext = $file->getClientOriginalExtension();
                $name = time().'.'.$ext;
                Storage::putFileAs('public/dokumen', $request->file('file'), $name);

            }

            Dokumen::create([
                'uuid' => (string) Str::uuid(),
                'name' => $request->name,
                'file' => $name ? $name : 'file.pdf',
                'tahun' => $request->tahun,
                'sumber' => $request->sumber,
                'versi' => $request->versi,
                'kategori' => $request->kategori,
                'pic' => $request->pic,
                'keterangan' => $request->keterangan,
                'slug' => \Str::slug($request->name)
            ]);

            return redirect('user/dokumens')->with('success', 'Tambah Data berhasil');

        } catch (Exception $e) {
            return $e;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dokumen  $dokumen
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dokumen  $dokumen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Dokumen::findOrFail($id);
        $keterangans = KeteranganDoc::latest()->get();
        $tahuns = Tahun::latest()->get();
        $sumbers = Sumber::latest()->get();
        $versis = Versi::latest()->get();
        $kategoris = Kategori::latest()->get();
        $pics = PIC::latest()->get();
        return view('user.dokumen.edit', compact('model', 'tahuns', 'sumbers', 'versis', 'kategoris', 'pics', 'keterangans'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dokumen  $dokumen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = Dokumen::findOrFail($id);

        $this->validate($request, [
            'name' => 'required|unique:kategori_dokumens,name,'.$id,
            'file' => 'mimes:pdf,xlsx,xls,doc,docx',
            // 'tahun' => 'required',
            // 'sumber' => 'required',
            // 'versi' => 'required',
            // 'kategori' => 'required',
            // 'pic' => 'required',
            'keterangan' => 'required',
        ]);

        try {
             $current = $model->file;

            if($request->file !== null && $model->file !== 'file.pdf')
            {

                if ($request->file != $current) {

                    $file = $request->file('file');

                    $ext = $file->getClientOriginalExtension();
                    $name = time().'.'.$ext;
                    Storage::putFileAs('public/dokumen', $request->file('file'), $name);

                    Storage::disk('local')->delete('public/dokumen/'. $model->file);
                   
                }else{
                    $name = $current;
                }

            }else{
                $name = $current;
            }

            $model->update([
                'name' => $request->name,
                'file' => $name ? $name : 'file.pdf',
                'tahun' => $request->tahun,
                'sumber' => $request->sumber,
                'versi' => $request->versi,
                'kategori' => $request->kategori,
                'pic' => $request->pic,
                'keterangan' => $request->keterangan,
                'slug' => \Str::slug($request->name)
            ]);

            return redirect('user/dokumens')->with('success', 'Update Data berhasil');

        } catch (Exception $e) {
            return $e;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dokumen  $dokumen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Dokumen::findOrFail($id);
        Storage::disk('local')->delete('public/dokumen/'. $model->file);
        $model->delete();

        return redirect('user/dokumens')->with('success', 'Delete Data berhasil');
    }

    public function download($id)
    {
        $model = Dokumen::findOrFail($id);
        return Storage::disk('local')->download('public/dokumen/'. $model->file);
        // return redirect('admin/dokumens');
    }

}
