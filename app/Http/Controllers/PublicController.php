<?php

namespace App\Http\Controllers;

use Storage;
use PengaturanHelp;
use App\Models\Message;
use App\Models\VisiMisi;
use App\Models\Pengaturan;
use App\Models\TugasPokokFungsi;
use App\Models\StrukturOrganisasi;
use App\Models\Slide;
use App\Models\Dokumen;
use App\Models\Master\Jasa;
use App\Models\Master\Contact;
use App\Models\Master\Category;
use App\Models\Post;
use App\Models\Foto;
use App\Models\Video;
use App\Models\Master\Tag;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = Video::where('index', 1)->first();
        $slides = Slide::where('index', 1)->get();
        $title = "Artikel Belajar Pemograman Sejati";
        $posts = Post::with('user')->latest()->get()->take(6);
        return view('public.beranda.index', compact('posts', 'title', 'slides', 'model'));
    }

    public function single_post($slug)
    {
        $post = Post::where('slug', $slug)->first();

        if($post)
        {
            $post->update([
                'eye' => $post->eye + 1
            ]);

            $posts = Post::where('category_id', $post->category_id)->paginate(3);
            $artikel_terbaru = Post::latest()->paginate(6);

            $title = $post->judul;
            $description = $post->content;
            $image = $post->image;
        }


        return view('public.single_post.index', compact('post', 'posts', 'title', 'description', 'image','artikel_terbaru'));
    }

    public function single_product($slug)
    {

        $product = Product::where('slug', $slug)->first();
        $products = Product::latest()->paginate(3);

        $title = $product->product_name;
        $description = $product->content;
        $image = $product->image;

        return view('public.product.single', compact('product', 'products','title', 'description', 'image'));
    }

    public function berita()
    {
        // $categories = Category::with('posts')->get();
        $title = "Semua Berita";
        $categories = Category::with('posts')->get()->map(function($category) {
            $category->setRelation('posts', $category->posts->take(5));
            return $category;
        });

        // $categories = Category::get();

        $posts = Post::paginate(10);
        $beritas = Post::latest()->get()->take(5);
        $tags = Tag::latest()->get();

        return view('public.berita.index', compact('categories', 'title', 'posts', 'categories', 'beritas', 'tags'));
    }

    public function author()
    {
        
    }

    public function berita_single($slug)
    {

        $post = Post::with('category')->where('slug', $slug)->first();

        $categories = Category::with('posts')->get()->map(function($category) {
            $category->setRelation('posts', $category->posts->take(5));
            return $category;
        });

        $beritas = Post::latest()->get()->take(5);
        $tags = Tag::latest()->get();
        // $posts = Post::with(["category" => function($q) use($slug) {
        //     $q->where('slug', '=', $slug);
        // }])->paginate(10);

        // $post = [];
        // $category = Category::where('slug', $slug)->first();

        // if($category)
        // {
        //     $posts = Post::where('category_id', $category->id)->paginate(10);
        // }

        $post->update([
            'eye' => $post->eye + 1
        ]);

        $title = $post->judul;
        
        return view('public.berita.berita_single', compact('post', 'title', 'categories', 'beritas', 'tags'));
    }

    public function search(Request $request)
    {
        $title = "Berita";

        $posts = Post::where('judul','like',"%".$request->search."%")->orWhere('content','like',"%".$request->search."%")->paginate(10);

        $categories = Category::with('posts')->get()->map(function($category) {
            $category->setRelation('posts', $category->posts->take(5));
            return $category;
        });

        $beritas = Post::latest()->get()->take(5);
        $tags = Tag::latest()->get();

        return view('public.berita.index', compact('categories', 'title', 'posts', 'beritas', 'tags'));
    }

    public function product()
    {
        $title = "Product Hcode yang anda butuhkan";
        $products = Product::latest()->paginate(10);
        return view('public.product.index', compact('products', 'title'));
    }

    public function contact()
    {
        $contact = Contact::first();
        $title = "Kontak Hcode";
        return view('public.contact.index', compact('title', 'contact'));
    }

    public function jasa()
    {
        $jasa = Jasa::first();
        $title = "Jasa Hcode yang di tawarkan untuk teman-teman, diantaranya pembuatan website, aplikasi dekstop, aplikasi mobile dan sebagainya";
        return view('public.jasa.index', compact('title', 'jasa'));
    }

    public function visi_misi()
    {
        $title = "Visi Misi";
        $model = VisiMisi::findOrFail(1);
        $categories = Category::get();
        $beritas = Post::latest()->get()->take(5);
        $tags = Tag::latest()->get();

        return view('public.visi_misi.index', compact('title', 'categories', 'beritas', 'tags', 'model'));
    }

    public function tugas_pokok_fungsi()
    {
        $title = "Tugas Poko dan Fungsi";
        $model = TugasPokokFungsi::findOrFail(1);
        $categories = Category::get();
        $beritas = Post::latest()->get()->take(5);
        $tags = Tag::latest()->get();

        return view('public.tugas_pokok_fungsi.index', compact('title', 'categories', 'beritas', 'tags', 'model'));
    }

    public function struktur_organisasi()
    {
        $title = "Struktur Organisasi";
        $model = StrukturOrganisasi::findOrFail(1);
        $categories = Category::get();
        $beritas = Post::latest()->get()->take(5);
        $tags = Tag::latest()->get();

        return view('public.struktur_organisasi.index', compact('title', 'categories', 'beritas', 'tags', 'model'));
    }

    public function dokumen_publik()
    {
        $dokumens = Dokumen::latest()->paginate(10);
        $rpjpds = Dokumen::where('keterangan', 'RPJPD')->latest()->get();
        $rpjmds = Dokumen::where('keterangan', 'RPJMD')->latest()->get();
        $rkpds = Dokumen::where('keterangan', 'RKPD')->latest()->get();
        $kuappas = Dokumen::where('keterangan', 'KUAPPA')->latest()->get();
        $lkpjs = Dokumen::where('keterangan', 'LKPJ')->latest()->get();
        $rtrws = Dokumen::where('keterangan', 'RTRW')->latest()->get();


        $title = "Dokumen Publik";

        return view('public.dokumen_publik.index', compact('title', 'dokumens', 'rpjpds', 'rpjmds','rkpds', 'kuappas', 'lkpjs', 'rtrws'))->with('no', 1);
    }

    public function kontak()
    {
        $title = "Kontak";
        $categories = Category::get();
        $beritas = Post::latest()->get()->take(5);
        $tags = Tag::latest()->get();

        return view('public.kontak.index', compact('title', 'categories', 'beritas', 'tags'));
    }

    public function foto()
    {
        $title = "Foto";

        $fotos = Foto::latest()->paginate(10);
        $categories = Category::get();
        $beritas = Post::latest()->get()->take(5);
        $tags = Tag::latest()->get();

        return view('public.foto.index', compact('title', 'categories', 'beritas', 'tags', 'fotos'));
    }

    public function video()
    {
        $title = "Foto";

        $videos = Video::latest()->paginate(10);
        $categories = Category::get();
        $beritas = Post::latest()->get()->take(5);
        $tags = Tag::latest()->get();

        return view('public.video.index', compact('title', 'categories', 'beritas', 'tags', 'videos'));
    }

    public function watching_video($slug)
    {
        $title = "Foto";

        $model = Video::where('slug', $slug)->first();
        $categories = Category::get();
        $beritas = Post::latest()->get()->take(5);
        $tags = Tag::latest()->get();

        return view('public.video.watching', compact('title', 'categories', 'beritas', 'tags', 'model'));
    }

    public function download($id)
    {
        $model = Dokumen::findOrFail($id);
        return Storage::disk('local')->download('public/dokumen/'. $model->file);
    }

    public function aplikasi()
    {
        $title = "Aplikasi";
        return view('public.aplikasi.index', compact('title'));
    }

    public function berita_kategori($slug)
    {

        $posts = []; 
        $title = "Berita Kategori";
        $category_id = PengaturanHelp::getNameCategorySlug($slug);

        if(!empty($category_id))
        {
            $posts = Post::where('category_id', $category_id->id)->paginate(10);
        }

        $categories = Category::with('posts')->get()->map(function($category) {
            $category->setRelation('posts', $category->posts->take(5));
            return $category;
        });

        $beritas = Post::latest()->get()->take(5);
        $tags = Tag::latest()->get();

        return view('public.berita.index', compact('categories', 'title', 'posts', 'beritas', 'tags'));
    }

    public function search_dokumen_publik(Request $request)
    {
        $title = "Dokumen Publik";

        $dokumens = Dokumen::where('name','like',"%".$request->search."%")->orWhere('keterangan','like',"%".$request->search."%")->paginate(10);

        $rpjpds = Dokumen::where('keterangan', 'RPJPD')->latest()->get();
        $rpjmds = Dokumen::where('keterangan', 'RPJMD')->latest()->get();
        $rkpds = Dokumen::where('keterangan', 'RKPD')->latest()->get();
        $kuappas = Dokumen::where('keterangan', 'KUAPPA')->latest()->get();
        $lkpjs = Dokumen::where('keterangan', 'LKPJ')->latest()->get();
        $rtrws = Dokumen::where('keterangan', 'RTRW')->latest()->get();


        return view('public.dokumen_publik.index', compact('title', 'dokumens', 'rpjpds', 'rpjmds','rkpds', 'kuappas', 'lkpjs', 'rtrws'))->with('no', 1);
    }

    public function message(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|unique:messages,name',
            'email' => 'required|unique:messages,email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        try{
            Message::create([
                'uuid' => (string) Str::uuid(),
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message
            ]);

            return back()->with('success', 'Message Send Success');
        }catch(Exception $e)
        {
            return $e;
        }
    }

    // public function berita_tag($slug)
    // {
    //     $posts = []; 
    //     $title = "Berita Tag";
    //     $tag_id = PengaturanHelp::getNameTagSlug($slug);

    //     if(!empty($tag_id))
    //     {
    //         $pp = Post::get();
    //         foreach ($pp as $key => $value) {
    //             $tag_posts = json_decode($value->tag);
    //             foreach ($tag_posts as $tp) {
    //                 if($tag_id->tag_name == $tp){
    //                    $posts[] = $value;
    //                 }
    //             }
    //         }
    //     }

    //     $categories = Category::with('posts')->get()->map(function($category) {
    //         $category->setRelation('posts', $category->posts->take(5));
    //         return $category;
    //     });

    //     $beritas = Post::latest()->get()->take(5);
    //     $tags = Tag::latest()->get();

    //     return view('public.berita.index', compact('categories', 'title', 'posts', 'beritas', 'tags'));
    // }


}
