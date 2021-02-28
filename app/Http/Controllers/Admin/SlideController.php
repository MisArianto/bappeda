<?php

namespace App\Http\Controllers\Admin;

use Storage;
use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides = Slide::latest()->paginate(20);
        return view('admin.slide.index', compact('slides'))->with('no', 1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slide.add');
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
            'name' => 'required|unique:slides',
            'slide' => 'required|mimes:jpeg,jpg,png'
        ]);

        try {

           if($request->has('slide'))
            {
                $file = $request->file('slide');

                $ext = $file->getClientOriginalExtension();
                $name = time().'.'.$ext;
                Storage::putFileAs('public/slide', $request->file('slide'), $name);

            }

            Slide::create([
                'uuid' => (string) Str::uuid(),
                'name' => $request->name,
                'slide' => $name ? $name : 'slide.jpeg',
                'index' => 0
            ]);

            return redirect('admin/slides')->with('success', 'Tambah Data berhasil');

        } catch (Exception $e) {
            return $e;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function show(Slide $slide)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Slide::findOrFail($id);
        
        return view('admin.slide.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = Slide::findOrFail($id);

        $this->validate($request, [
            'name' => 'required|unique:slides,name,'.$id,
            'slide' => 'mimes:jpeg,jpg,png'
        ]);

        try {
             $current = $model->slide;

            if($request->slide !== null && $model->slide !== 'slide.mp4')
            {

                if ($request->slide != $current) {

                    $file = $request->file('slide');

                    $ext = $file->getClientOriginalExtension();
                    $name = time().'.'.$ext;
                    Storage::putFileAs('public/slide', $request->file('slide'), $name);

                    Storage::disk('local')->delete('public/slide/'. $model->slide);
                   
                }else{
                    $name = $current;
                }

            }else{
                $name = $current;
            }

            $model->update([
                'name' => $request->name,
                'slide' => $name ? $name : 'slide.jpeg',
            ]);

            return redirect('admin/slides')->with('success', 'Update Data berhasil');

        } catch (Exception $e) {
            return $e;
        }
    }

    public function indexing($id)
    {
        $model = Slide::findOrFail($id);
        $model->update([
            'index' => 1
        ]);

        return redirect('admin/slides')->with('success', 'Indexing Data berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Slide::findOrFail($id);
        Storage::disk('local')->delete('public/slide/'. $model->slide);
        $model->delete();

        return redirect('admin/slides')->with('success', 'Delete Data berhasil');
    }
}
