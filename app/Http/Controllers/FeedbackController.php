<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedback = Feedback::all();
        return view('backend.feedback.index')->with('feedback', $feedback)->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->param['subtitle'] = 'Tambah Feedback';
        $this->param['top_button'] = route('feedback.index');

        return view('backend.feedback.create', $this->param);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
                'nama_depan' => 'required|max:50',
                'nama_belakang' => 'required|max:50',
                'saran' => 'required|max:50',
                'email' => 'required|max:50',

            ],
            [
                'required' => ':attribute harap diisi.',
                'max' => ':attribute tidak boleh lebih dari 50 karakter',
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

            return redirect('administrator/feedback')->withStatus('Berhasil menyimpan data.');
        }
        catch(\Exception $e){
            return redirect()->back()->withError($e->getMessage());
        }
        catch(\Illuminate\Database\QueryException $e){
            return redirect()->back()->withError($e->getMessage());
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Feedback $feedback)
    {
        return view('backend.feedback.index',compact('feedback'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_feedback)
    {
         try {
                DB::table('feedback')->where('id_feedback', $id_feedback)->delete();


            return redirect()->back()->withStatus('Berhasil menghapus data.');
        }
        catch(\Exception $e){
            return redirect()->back()->withError($e->getMessage());
        }
        catch(\Illuminate\Database\QueryException $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }
}
