<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dashboard;
use App\Models\Gallery;
use App\Models\Feedback;


class DashboardController extends Controller
{
    public function index()
    {
        $this->param['dashboard'] = Dashboard::first();
        $this->param['agallery'] = Gallery::inRandomOrder()->limit(5)->get();
        $this->param['ogallery'] = Gallery::inRandomOrder()->limit(3)->get();

        return view('dashboard', $this->param);
    }

    public function store(Request $request)
    {

        $this->validate($request,
        [
                'nama_depan' => 'required',
                'nama_belakang' => 'required',
                'saran' => 'required|max:10',
                'email' => 'required',

            ],
            [
                'required' => ':attribute harap diisi.',
                'max' => ':attribute tidak boleh lebih dari 10 karakter',
            ],
            [
                'nama_depan' => 'Nama Depan',
                'nama_belakang' => 'Nama Belakang',
                'saran' => 'Saran',
                'email' => 'Email'

            ]
        );

        $newFeedback = new Feedback;
        $newFeedback->nama_depan = $request->nama_depan;
        $newFeedback->nama_belakang = $request->nama_belakang;
        $newFeedback->saran = $request->saran;
        $newFeedback->email = $request->email;

        try {
            $newFeedback->save();
            return redirect('/')->withStatus('Berhasil menyimpan data.');
        }
        catch(\Exception $e){
            return redirect()->back()->withError($e->getMessage());
        }
        catch(\Illuminate\Database\QueryException $e){
            return redirect()->back()->withError($e->getMessage());
        }

    }
}
