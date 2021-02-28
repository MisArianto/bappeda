<?php

namespace App\Http\Controllers\Admin;

use Storage;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::latest()->paginate(20);
        return view('admin.video.index', compact('videos'))->with('no', 1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.video.add');
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
            'name' => 'required|unique:videos',
            'video' => 'required|mimes:mp4'
        ]);

        try {

           if($request->has('video'))
            {
                $file = $request->file('video');

                $ext = $file->getClientOriginalExtension();
                $name = time().'.'.$ext;
                Storage::putFileAs('public/video', $request->file('video'), $name);

            }

            Video::create([
                'uuid' => (string) Str::uuid(),
                'name' => $request->name,
                'video' => $name ? $name : 'video.mp4',
                'index' => 0,
                'slug' => \Str::slug($request->name)
            ]);

            return redirect('admin/videos')->with('success', 'Tambah Data berhasil');

        } catch (Exception $e) {
            return $e;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Video::findOrFail($id);
        
        return view('admin.video.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = Video::findOrFail($id);

        $this->validate($request, [
            'name' => 'required|unique:videos,name,'.$id,
            'video' => 'mimes:mp4'
        ]);

        try {
             $current = $model->video;

            if($request->video !== null && $model->video !== 'video.mp4')
            {

                if ($request->video != $current) {

                    $file = $request->file('video');

                    $ext = $file->getClientOriginalExtension();
                    $name = time().'.'.$ext;
                    Storage::putFileAs('public/video', $request->file('video'), $name);

                    Storage::disk('local')->delete('public/video/'. $model->video);
                   
                }else{
                    $name = $current;
                }

            }else{
                $name = $current;
            }

            $model->update([
                'name' => $request->name,
                'video' => $name ? $name : 'video.mp4',
                'slug' => \Str::slug($request->name)
            ]);

            return redirect('admin/videos')->with('success', 'Update Data berhasil');

        } catch (Exception $e) {
            return $e;
        }
    }

    public function indexing($id)
    {
        $videos = Video::get();

        foreach ($videos as $value) {
            $value->update([
                'index' => 0
            ]);
        }
        
        $model = Video::findOrFail($id);
        $model->update([
            'index' => 1
        ]);

        return redirect('admin/videos')->with('success', 'Indexing Data berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Video::findOrFail($id);
        Storage::disk('local')->delete('public/video/'. $model->video);
        $model->delete();

        return redirect('admin/videos')->with('success', 'Delete Data berhasil');
    }
}
