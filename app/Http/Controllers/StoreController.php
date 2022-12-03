<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\Type;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(){
        $shirts = Store::with('type')->paginate(5);  
            return view('baju.index', [
                'shirts' => $shirts
            ]);
    }

    public function create(){
        return view('baju.create');
    }

      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        $this->validate($request,[
            'kode'=>'required',
            'nama'=>'required',
            'brand'=>'required',
            'ukuran' => 'required',
            'harga' => 'required',
        ]);

        $shirt = Store::create([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'brand' => $request->brand,
        ]);

        $shirt->type()->create([
            'ukuran'=> $request->ukuran,
            'harga'=> $request->harga,
        ]);

        if($shirt){
            return redirect()->route('baju.index')->with(['success' => 'Data berhasil ditambahkan']);
        }else{
            return redirect()->route('baju.update')->with('error');
        }
    }

    public function show(){}

        /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Store $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $shirt = Store::find($id);
        
        return view('baju.edit',compact('shirt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Store
     * @param  \App\Models\Type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id){
        $validated = $this->validate($request,[
            'kode'=>'required',
            'nama'=>'required',
            'brand'=>'required',
            'ukuran' => 'required',
            'harga' => 'required',
        ]);

        $shirt = Store::with('type')->find($id);
        
        $shirt->update([
            // Isi field pada model store saja
            'kode' => $validated['kode'],
            'nama' => $validated['nama'],
            'brand' => $validated['brand'],
        ]);
        $shirt->type->update([
            // Isi field pada model type saja
            'ukuran'=> $request['ukuran'],
            'harga'=> $request['harga'],
        ]);

        // $this->validate($request,[
        //     'kode'=>'required',
        //     'nama'=>'required',
        //     'brand'=>'required',
        //     'ukuran' => 'required',
        //     'harga' => 'required',
        // ]);
        // $shirt = Store::with('Type')->find($id);
        // $shirt->update($request->all());
        // $shirt-Type->update([
        //     'ukuran' =>$request['ukuran'],
        //     'harga' => $request['harga'],
        // ]);

        if($shirt){
            return redirect()->route('baju.index')->with(['success' => 'Data berhasil diubah']);
        }else{
            return redirect()->route('baju.edit')->with('error');
        }
    }
 /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Store $mahasiswa
     * @return \Illuminate\Http\Response
     */

    public function destroy(Store $shirt){
        
        $shirt->delete();

        return redirect()->route('baju.index')->with('success',"Data member berhasil dihapus");
    }
}
