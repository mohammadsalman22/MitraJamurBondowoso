<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kontak = Kontak::all();
        return view('backend.kontak.index')->with('kontak', $kontak)->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->param['subtitle'] = 'Tambah Kontak';
        $this->param['top_button'] = route('kontak.index');

        return view('backend.kontak.create', $this->param);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required|min:6',
            'logo'=>'required',
            'kontak'=>'required',
        ],
        [
            'required' => 'Harap isi :attribute',
            'deskripsi.required' => 'Isi Deskripsi',
            'min' => 'Panjang karakter minimal 6',
        ],
        [
            'nama' => 'Nama Kontak',
            'logo' => 'Logo Kontak',
            'kontak' => 'Kontak'
        ]
        );
        try{
            $data = array(
                'nama' => $request->get('nama'),
                'kontak' => $request->get('kontak')
            );
            $lastId = DB::table('kontak')->insertGetId($data, 'id_kontak');

            if($request->file('logo') != null) {
                $folder = 'upload/kontak/'.$request->get('logo');
                $file = $request->file('logo');
                $filename = date('YmdHis').$file->getClientOriginalName();
                $path = realpath($folder);
                if (!($path !== true AND is_dir($path))) {
                    mkdir($folder, 0755, true);
                }
                if ($file->move($folder, $filename)) {
                    DB::table('kontak')->where('id_kontak', '=', $lastId)->update([
                        'logo' => $folder.$filename
                    ]);
                }
            }

            return redirect('backend/kontak')->withStatus('Berhasil menambah data');
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Kontak $kontak)
    {
        return view('backend.kontak.index',compact('kontak'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($kontak)
    {
        $kontak = Kontak::where('id_kontak', $kontak)->first();
        return view('backend.kontak.edit',compact('kontak'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_kontak)
    {
        $request->validate([
            'nama'=>'required|min:6',
            'kontak'=>'required',
        ],
        [
            'required' => 'Harap isi :attribute',
            'deskripsi.required' => 'Isi Deskripsi',
            'min' => 'Panjang karakter minimal 6',
        ],
        [
            'nama' => 'Nama Kontak',
            'kontak' => 'Kontak'
        ]
        );
        try{
            $foto = Kontak::where('id_kontak', $id_kontak)->first()->logo;
            DB::table('kontak')->where('id_kontak', $id_kontak)->update([
            'nama' => $request->get('nama'),
            'kontak' => $request->get('kontak')
        ]);
            if($request->file('logo') != null) {
                $folder = 'upload/kontak/'.$request->get('logo');
                $file = $request->file('logo');
                $filename = date('YmdHis').$file->getClientOriginalName();
                $path = realpath($folder);
                if (!($path !== true AND is_dir($path))) {
                    mkdir($folder, 0755, true);
                }
                if(file_exists($foto)){
                    if(File::delete($foto)){
                        if ($file->move($folder, $filename)) {
                            DB::table('kontak')->where('id_kontak', '=', $id_kontak)->update([
                                'logo' => $folder.$filename
                            ]);
                        }
                    }
                }

            }
            return redirect()->route('kontak.index')->with('Berhasil', 'Data kontak berhasil Diubah');
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_kontak)
    {
        try{
            $foto = Kontak::where('id_kontak', $id_kontak)->first()->logo;
            if($foto != null){
                if(file_exists($foto)){
                    if(File::delete($foto)){
                        DB::table('kontak')->where('id_kontak', $id_kontak)->delete();
                    }
                }
            }
            return redirect()->route('kontak.index')->with('Berhasil', 'Data Kontak berhasil Dihapus');

        }
        catch(\Exception $e){
            return $e->getMessage();
            //return redirect()->back()->withError($e->getMessage());
        }
        catch(\Illuminate\Database\QueryException $e){
            return $e->getMessage();
            //return redirect()->back()->withError($e->getMessage());
        }
    }
}
