<?php

namespace App\Http\Controllers\Admin;

use Storage;
use App\Models\Pengaturan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PengaturanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengaturan = Pengaturan::get()[0];

        // dd(json_decode($pengaturan->name));
        
        return view('admin.pengaturan.index', compact('pengaturan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pengaturan  $pengaturan
     * @return \Illuminate\Http\Response
     */
    public function show(Pengaturan $pengaturan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pengaturan  $pengaturan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengaturan $pengaturan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pengaturan  $pengaturan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $uuid)
    {
        $model = Pengaturan::where('uuid', $uuid)->first();

        $this->validate($request, [
            'email' => 'required',
            'hp' => 'required',
            'link' => 'required',
            'judul' => 'required',
            'keterangan_video' => 'required',
            'alamat' => 'required',
            'keterangan' => 'required',
            'footer_name' => 'required'
        ]);

        if($request->has('logo'))
        {
            $file = $request->file('logo');

            $ext = $file->getClientOriginalExtension();
            $name = time().'.'.$ext;
            Storage::putFileAs('public/pengaturan', $request->file('logo'), $name);

        }

        if($request->has('image'))
        {
            $file1 = $request->file('image');

            $ext1 = $file1->getClientOriginalExtension();
            $name_image_video = time().'.'.$ext1;
            Storage::putFileAs('public/video', $request->file('image'), $name_image_video);

        }

        $json = [
            'header' => [
                'email' => $request->email,
                'hp' => $request->hp,
                'logo' => $request->logo ? $name : 'logo.png'
            ],
            'contact' => [
                'alamat' => $request->alamat
            ],
            'content' => [
                'video' => $request->link,
                'img_video' => $request->image ? $name_image_video : 'video.jpg',
                'judul' => $request->judul,
                'keterangan' => $request->keterangan_video
            ],
            'footer' => [
                'keterangan' => $request->keterangan,
                'footer_name' => $request->footer_name
            ]
        ];

        $model->update([
            'name' => json_encode($json)
        ]); 

        return redirect('admin/setting/pengaturan')->with('success', 'Update Pengaturan Success!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pengaturan  $pengaturan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengaturan $pengaturan)
    {
        //
    }
}
