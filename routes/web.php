<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PublicController@index');
Route::get('/visi-misi', 'PublicController@visi_misi');
Route::get('/kontak', 'PublicController@kontak');
Route::get('/aplikasi', 'PublicController@aplikasi');
Route::get('/foto', 'PublicController@foto');
Route::post('/message-store', 'PublicController@message');
Route::get('/galeri-video', 'PublicController@video');
Route::get('/watching-video/{slug}', 'PublicController@watching_video');
Route::get('/tugas-pokok-fungsi', 'PublicController@tugas_pokok_fungsi');
Route::get('/struktur-organisasi', 'PublicController@struktur_organisasi');
Route::get('/dokumen-publik', 'PublicController@dokumen_publik');
Route::post('/search-dokumen-publik', 'PublicController@search_dokumen_publik');
Route::get('/berita', 'PublicController@berita');
Route::get('/download/{id}', 'PublicController@download');
Route::get('/berita/{slug}', 'PublicController@berita_single');
Route::get('/berita-kategori/{slug}', 'PublicController@berita_kategori');
Route::get('/berita-tag/{slug}', 'PublicController@berita_tag');
Route::get('single/{slug}', 'PublicController@single_post');
Route::post('search', 'PublicController@search');

Route::get('storie-categories/{slug}', 'PublicController@storie_categories');
Route::get('stories', 'PublicController@stories');
Route::get('author', 'PublicController@author');

Route::get('products', 'PublicController@product');
Route::get('single-product/{slug}', 'PublicController@single_product');

Route::get('contact', 'PublicController@contact');
Route::get('jasa', 'PublicController@jasa');

Auth::routes();

// Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
//      \UniSharp\LaravelFilemanager\Lfm::routes();
//  });

Route::group(['middleware' => 'auth'], function(){

    // Route::get('/laravel-filemanager', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show');
    // Route::post('/laravel-filemanager/upload', '\UniSharp\LaravelFilemanager\Controllers\UploadController@upload');
    
    Route::get('/home', 'HomeController@index')->name('home');

    Route::group(['prefix' => 'profile'], function(){
        Route::get('/', 'Admin\ProfileController@index');
        Route::put('/update/{id}', 'Admin\ProfileController@update');
    });

    Route::group(['prefix' => 'admin', 'middleware' => 'Admin'], function(){

        Route::group(['prefix' => 'master'], function(){

            Route::group(['prefix' => 'levels'], function(){
                Route::get('/fetch', 'Admin\Master\LevelController@fetch');
                Route::get('/', 'Admin\Master\LevelController@index');
                Route::post('/store', 'Admin\Master\LevelController@store');
                Route::get('/edit/{id}', 'Admin\Master\LevelController@edit');
                Route::put('/update/{id}', 'Admin\Master\LevelController@update');
                Route::get('/destroy/{id}', 'Admin\Master\LevelController@destroy');
            });

        	Route::group(['prefix' => 'users'], function(){
        		Route::get('/fetch', 'Admin\Master\UserController@fetch');
    	    	Route::get('/', 'Admin\Master\UserController@index');
    	    	Route::post('/store', 'Admin\Master\UserController@store');
    	    	Route::get('/edit/{id}', 'Admin\Master\UserController@edit');
    	    	Route::put('/update/{id}', 'Admin\Master\UserController@update');
    	    	Route::get('/destroy/{id}', 'Admin\Master\UserController@destroy');
        	});
        	
        	Route::group(['prefix' => 'categories'], function(){
        		Route::get('/fetch', 'Admin\Master\CategoryController@fetch');
    	    	Route::get('/', 'Admin\Master\CategoryController@index');
    	    	Route::post('/store', 'Admin\Master\CategoryController@store');
    	    	Route::get('/edit/{id}', 'Admin\Master\CategoryController@edit');
    	    	Route::put('/update/{id}', 'Admin\Master\CategoryController@update');
    	    	Route::get('/destroy/{id}', 'Admin\Master\CategoryController@destroy');
        	});

            Route::group(['prefix' => 'tags'], function(){
                Route::get('/fetch', 'Admin\Master\TagController@fetch');
                Route::get('/', 'Admin\Master\TagController@index');
                Route::post('/store', 'Admin\Master\TagController@store');
                Route::get('/edit/{id}', 'Admin\Master\TagController@edit');
                Route::put('/update/{id}', 'Admin\Master\TagController@update');
                Route::get('/destroy/{id}', 'Admin\Master\TagController@destroy');
            });

            Route::group(['prefix' => 'contact'], function(){
                Route::get('/', 'Admin\Master\ContactController@index');
                Route::post('/store', 'Admin\Master\ContactController@store');
                Route::put('/update/{id}', 'Admin\Master\ContactController@update');
                Route::get('/destroy/{id}', 'Admin\Master\ContactController@destroy');
            });

            Route::group(['prefix' => 'tahun'], function(){
                Route::get('/', 'Admin\Master\TahunController@index');
                Route::get('/fetch', 'Admin\Master\TahunController@fetch');
                Route::post('/store', 'Admin\Master\TahunController@store');
                Route::put('/update/{id}', 'Admin\Master\TahunController@update');
                Route::get('/destroy/{id}', 'Admin\Master\TahunController@destroy');
            });

            Route::group(['prefix' => 'sumber'], function(){
                Route::get('/', 'Admin\Master\SumberController@index');
                Route::get('/fetch', 'Admin\Master\SumberController@fetch');
                Route::post('/store', 'Admin\Master\SumberController@store');
                Route::put('/update/{id}', 'Admin\Master\SumberController@update');
                Route::get('/destroy/{id}', 'Admin\Master\SumberController@destroy');
            });

            Route::group(['prefix' => 'versi'], function(){
                Route::get('/', 'Admin\Master\VersiController@index');
                Route::get('/fetch', 'Admin\Master\VersiController@fetch');
                Route::post('/store', 'Admin\Master\VersiController@store');
                Route::put('/update/{id}', 'Admin\Master\VersiController@update');
                Route::get('/destroy/{id}', 'Admin\Master\VersiController@destroy');
            });

            Route::group(['prefix' => 'kategori'], function(){
                Route::get('/', 'Admin\Master\KategoriDokumenController@index');
                Route::get('/fetch', 'Admin\Master\KategoriDokumenController@fetch');
                Route::post('/store', 'Admin\Master\KategoriDokumenController@store');
                Route::put('/update/{id}', 'Admin\Master\KategoriDokumenController@update');
                Route::get('/destroy/{id}', 'Admin\Master\KategoriDokumenController@destroy');
            });

            Route::group(['prefix' => 'pic'], function(){
                Route::get('/', 'Admin\Master\PicDokumenController@index');
                Route::get('/fetch', 'Admin\Master\PicDokumenController@fetch');
                Route::post('/store', 'Admin\Master\PicDokumenController@store');
                Route::put('/update/{id}', 'Admin\Master\PicDokumenController@update');
                Route::get('/destroy/{id}', 'Admin\Master\PicDokumenController@destroy');
            });

            Route::group(['prefix' => 'keterangan'], function(){
                Route::get('/', 'Admin\Master\KeteranganDocController@index');
                Route::get('/fetch', 'Admin\Master\KeteranganDocController@fetch');
                Route::post('/store', 'Admin\Master\KeteranganDocController@store');
                Route::put('/update/{id}', 'Admin\Master\KeteranganDocController@update');
                Route::get('/destroy/{id}', 'Admin\Master\KeteranganDocController@destroy');
            });

        });
    

        Route::group(['prefix' => 'posts'], function(){
            Route::get('/', 'Admin\Posts\PostController@index');
            Route::post('/store', 'Admin\Posts\PostController@store');
            Route::get('/edit/{id}', 'Admin\Posts\PostController@edit');
            Route::put('/update/{id}', 'Admin\Posts\PostController@update');
            Route::get('/destroy/{id}', 'Admin\Posts\PostController@destroy');
        });

        Route::group(['prefix' => 'products'], function(){
            Route::get('/', 'Admin\Product\ProductController@index');
            Route::post('/store', 'Admin\Product\ProductController@store');
            Route::get('/edit/{id}', 'Admin\Product\ProductController@edit');
            Route::put('/update/{id}', 'Admin\Product\ProductController@update');
            Route::get('/destroy/{id}', 'Admin\Product\ProductController@destroy');
        });

        Route::group(['prefix' => 'fotos'], function(){
            Route::get('/fetch', 'Admin\FotoController@fetch');
            Route::get('/', 'Admin\FotoController@index');
            Route::post('/store', 'Admin\FotoController@store');
            Route::get('/edit/{id}', 'Admin\FotoController@edit');
            Route::put('/update/{id}', 'Admin\FotoController@update');
            Route::get('/destroy/{id}', 'Admin\FotoController@destroy');
        });

        Route::group(['prefix' => 'aplikasi'], function(){
            Route::get('/fetch', 'Admin\AplikasiController@fetch');
            Route::get('/', 'Admin\AplikasiController@index');
            Route::post('/store', 'Admin\AplikasiController@store');
            Route::get('/edit/{id}', 'Admin\AplikasiController@edit');
            Route::put('/update/{id}', 'Admin\AplikasiController@update');
            Route::get('/destroy/{id}', 'Admin\AplikasiController@destroy');
        });

        Route::group(['prefix' => 'message'], function(){
            Route::get('/fetch', 'Admin\MessageController@fetch');
            Route::get('/', 'Admin\MessageController@index');
            Route::get('/destroy/{id}', 'Admin\MessageController@destroy');
        });

        Route::group(['prefix' => 'visi-misi'], function(){
            Route::get('/', 'Admin\VisiMisiController@index');
            Route::put('/update/{id}', 'Admin\VisiMisiController@update');
        });

        Route::group(['prefix' => 'tugas-fungsi'], function(){
            Route::get('/', 'Admin\TugasPokokFungsiController@index');
            Route::put('/update/{id}', 'Admin\TugasPokokFungsiController@update');
        });

        Route::group(['prefix' => 'struktur-organisasi'], function(){
            Route::get('/', 'Admin\StrukturOrganisasiController@index');
            Route::put('/update/{id}', 'Admin\StrukturOrganisasiController@update');
        });


        Route::group(['prefix' => 'videos'], function(){
            Route::get('/', 'Admin\VideoController@index');
            Route::get('/create', 'Admin\VideoController@create');
            Route::post('/store', 'Admin\VideoController@store');
            Route::get('/edit/{id}', 'Admin\VideoController@edit');
            Route::put('/update/{id}', 'Admin\VideoController@update');
            Route::get('/destroy/{id}', 'Admin\VideoController@destroy');
            Route::get('/indexing/{id}', 'Admin\VideoController@indexing');
        });

        Route::group(['prefix' => 'slides'], function(){
            Route::get('/', 'Admin\SlideController@index');
            Route::get('/create', 'Admin\SlideController@create');
            Route::post('/store', 'Admin\SlideController@store');
            Route::get('/edit/{id}', 'Admin\SlideController@edit');
            Route::put('/update/{id}', 'Admin\SlideController@update');
            Route::get('/destroy/{id}', 'Admin\SlideController@destroy');
            Route::get('/indexing/{id}', 'Admin\SlideController@indexing');
        });

        Route::group(['prefix' => 'dokumens'], function(){
            Route::get('/', 'Admin\DokumenController@index');
            Route::get('/create', 'Admin\DokumenController@create');
            Route::post('/store', 'Admin\DokumenController@store');
            Route::get('/edit/{id}', 'Admin\DokumenController@edit');
            Route::put('/update/{id}', 'Admin\DokumenController@update');
            Route::get('/destroy/{id}', 'Admin\DokumenController@destroy');
            Route::get('/download/{id}', 'Admin\DokumenController@download');
        });

        Route::group(['prefix' => 'setting'], function(){
            Route::group(['prefix' => 'pengaturan'], function(){
                Route::get('/', 'Admin\PengaturanController@index');
                Route::put('/update/{id}', 'Admin\PengaturanController@update');
            });
        });

    });
    // end admin

    // user
    Route::group(['prefix' => 'user', 'middleware' => 'User'], function(){
        Route::group(['prefix' => 'posts'], function(){
            Route::get('/', 'User\PostController@index');
            Route::post('/store', 'User\PostController@store');
            Route::get('/edit/{id}', 'User\PostController@edit');
            Route::put('/update/{id}', 'User\PostController@update');
            Route::get('/destroy/{id}', 'User\PostController@destroy');
        });

        Route::group(['prefix' => 'products'], function(){
            Route::get('/', 'User\ProductController@index');
            Route::post('/store', 'User\ProductController@store');
            Route::get('/edit/{id}', 'User\ProductController@edit');
            Route::put('/update/{id}', 'User\ProductController@update');
            Route::get('/destroy/{id}', 'User\ProductController@destroy');
        });

        Route::group(['prefix' => 'fotos'], function(){
            Route::get('/fetch', 'User\FotoController@fetch');
            Route::get('/', 'User\FotoController@index');
            Route::post('/store', 'User\FotoController@store');
            Route::get('/edit/{id}', 'User\FotoController@edit');
            Route::put('/update/{id}', 'User\FotoController@update');
            Route::get('/destroy/{id}', 'User\FotoController@destroy');
        });

        Route::group(['prefix' => 'aplikasi'], function(){
            Route::get('/fetch', 'User\AplikasiController@fetch');
            Route::get('/', 'User\AplikasiController@index');
            Route::post('/store', 'User\AplikasiController@store');
            Route::get('/edit/{id}', 'User\AplikasiController@edit');
            Route::put('/update/{id}', 'User\AplikasiController@update');
            Route::get('/destroy/{id}', 'User\AplikasiController@destroy');
        });

        Route::group(['prefix' => 'message'], function(){
            Route::get('/fetch', 'User\MessageController@fetch');
            Route::get('/', 'User\MessageController@index');
            Route::get('/destroy/{id}', 'User\MessageController@destroy');
        });

        Route::group(['prefix' => 'visi-misi'], function(){
            Route::get('/', 'User\VisiMisiController@index');
            Route::put('/update/{id}', 'User\VisiMisiController@update');
        });

        Route::group(['prefix' => 'tugas-fungsi'], function(){
            Route::get('/', 'User\TugasPokokFungsiController@index');
            Route::put('/update/{id}', 'User\TugasPokokFungsiController@update');
        });

        Route::group(['prefix' => 'struktur-organisasi'], function(){
            Route::get('/', 'User\StrukturOrganisasiController@index');
            Route::put('/update/{id}', 'User\StrukturOrganisasiController@update');
        });


        Route::group(['prefix' => 'videos'], function(){
            Route::get('/', 'User\VideoController@index');
            Route::get('/create', 'User\VideoController@create');
            Route::post('/store', 'User\VideoController@store');
            Route::get('/edit/{id}', 'User\VideoController@edit');
            Route::put('/update/{id}', 'User\VideoController@update');
            Route::get('/destroy/{id}', 'User\VideoController@destroy');
            Route::get('/indexing/{id}', 'User\VideoController@indexing');
        });

        Route::group(['prefix' => 'slides'], function(){
            Route::get('/', 'User\SlideController@index');
            Route::get('/create', 'User\SlideController@create');
            Route::post('/store', 'User\SlideController@store');
            Route::get('/edit/{id}', 'User\SlideController@edit');
            Route::put('/update/{id}', 'User\SlideController@update');
            Route::get('/destroy/{id}', 'User\SlideController@destroy');
            Route::get('/indexing/{id}', 'User\SlideController@indexing');
        });

        Route::group(['prefix' => 'dokumens'], function(){
            Route::get('/', 'User\DokumenController@index');
            Route::get('/create', 'User\DokumenController@create');
            Route::post('/store', 'User\DokumenController@store');
            Route::get('/edit/{id}', 'User\DokumenController@edit');
            Route::put('/update/{id}', 'User\DokumenController@update');
            Route::get('/destroy/{id}', 'User\DokumenController@destroy');
            Route::get('/download/{id}', 'User\DokumenController@download');
        });

        Route::group(['prefix' => 'setting'], function(){
            Route::group(['prefix' => 'pengaturan'], function(){
                Route::get('/', 'User\PengaturanController@index');
                Route::put('/update/{id}', 'User\PengaturanController@update');
            });
        });

    });
    // end user

    // author
    Route::group(['prefix' => 'author', 'middleware' => 'Author'], function(){
        Route::group(['prefix' => 'posts'], function(){
            Route::get('/', 'Author\PostController@index');
            Route::post('/store', 'Author\PostController@store');
            Route::get('/edit/{id}', 'Author\PostController@edit');
            Route::put('/update/{id}', 'Author\PostController@update');
            Route::get('/destroy/{id}', 'Author\PostController@destroy');
        });
    });
    // end author


});


