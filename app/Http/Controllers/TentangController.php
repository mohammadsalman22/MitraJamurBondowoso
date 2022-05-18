<?php

namespace App\Http\Controllers;

use App\Models\Tentang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class TentangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tentang = Tentang::all();
        return view('backend.tentang.index')->with('tentang', $tentang)->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->param['subtitle'] = 'Tambah Tentang';
        $this->param['top_button'] = route('tentang.index');

        return view('backend.tentang.create', $this->param);
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
                'nama' => 'required|max:50',
                'konten' => 'required|max:50',

            ],
            [
                'required' => ':attribute harap diisi.',
                'max' => ':attribute tidak boleh lebih dari 50 karakter',
            ],
            [
                'nama' => 'Nama Konten',
                'konten' => 'Konten'
            ]
        );

        try {
            $newTentang = new Tentang;
            $newTentang->nama = $request->nama;
            $newTentang->konten = $request->konten;

            $newTentang->save();

            return redirect('backend/tentang')->withStatus('Berhasil menyimpan data.');
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
    public function show($id)
    {
        return view('backend.tentang.index',compact('tentang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($tentang)
    {
        $tentang = Tentang::where('id_tentang', $tentang)->first();
        return view('backend.tentang.edit',compact('tentang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_tentang)
    {
        try {

            $this->validate($request,
                [
                    'nama' => 'required|max:50',
                    'konten' => 'required|max:50',

                ],
                [
                    'required' => ':attribute harap diisi.',
                    'max' => ':attribute tidak boleh lebih dari 50 karakter',
                ],
                [
                    'nama' => 'Nama Konten',
                    'konten' => 'Konten'
                ]);

                $updateGenre = Genre::find($id);
                $updateGenre->nama = $request->nama_genre;

                $updateGenre->save();

                return redirect('genre')->withStatus('Berhasil Mengedit Data Genre');
        } catch (\Exception $e) {
                return redirect()->back()->withError($e->getMessage());
        }catch(\Illuminate\Database\QueryException $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
