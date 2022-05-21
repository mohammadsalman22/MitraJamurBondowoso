<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dashboard;
use App\Models\Gallery;
use App\Models\Feedback;
use App\Models\Post;


class DashboardController extends Controller
{

    public function show(Post $post)
    {
        $post->visitsCounter()->increment();

        return view('post.show', ['post' => $post]);
    }

    public function add(Post $post) {
        $post = Post::first();

        visits($post)->period('day')->count();
        visits($post)->period('week')->count();
        visits($post)->period('month')->count();
        visits($article)->countries();
        visits($article)->refs();
        visits($article)->operatingSystems();
        visits($article)->languages();
    }

    public function index()
    {
        $this->param['dashboard'] = Dashboard::first();
        $this->param['agallery'] = Gallery::inRandomOrder()->limit(5)->get();
        $this->param['ogallery'] = Gallery::inRandomOrder()->limit(3)->get();

        return view('dashboard', $this->param);
    }

    public function store(Request $request)
    {
        // return $request;
        $this->validate($request,
            [
                'nama_depan' => 'required',
                'nama_belakang' => 'required',
                'saran' => 'required',
                'email' => 'required',

            ],
            [
                'required' => ':attribute harap diisi.',
                'min' => ':attribute tidak boleh lebih dari 10 karakter',
            ],
            [
                'nama_depan' => 'Nama Depan',
                'nama_belakang' => 'Nama Belakang',
                'saran' => 'Saran',
                'email' => 'Email'

            ]
        );



        try {
            $newFeedback = new Feedback;
            $newFeedback->nama_depan = $request->nama_depan;
            $newFeedback->nama_belakang = $request->nama_belakang;
            $newFeedback->saran = $request->saran;
            $newFeedback->email = $request->email;
            $newFeedback->save();

            return redirect('/')->withStatus('Berhasil menyimpan data.');
        }
        catch(\Exception $e){
            return $e->getMessage();
            return redirect()->back()->withError($e->getMessage());
        }
        catch(\Illuminate\Database\QueryException $e){
            return $e->getMessage();
            return redirect()->back()->withError($e->getMessage());
        }

    }
}
