<?php

namespace App\Http\Controllers;

use App\Models\Infaq;
use Illuminate\Http\Request;

class InfaqController extends Controller
{
    public function index()
    {
      
        return view('infaqs.index', [
            'infaqs' => Infaq::get(),
        ]);
    }

    public function create()
    {
        return view('infaqs.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [

            'keterangan' => ['required'],
            'jumlah' => ['required'],

            
            
            
        ]);

        $infaq = new Infaq();


        $infaq->keterangan = $request->keterangan;
        $infaq->jumlah = $request->jumlah;

        $infaq->save();
        session()->flash('success', 'Data Berhasil Ditambahkan.');

        return redirect()->route('infaqs.index');
    }

    public function edit($id)
    {
        $infaq = Infaq::find($id);
        return view('infaqs.edit', [
            'infaqs' => $infaq,
        ]);
    }

    public function update(Request $request, $id)
    {
        $infaq = Infaq::find($id);

        $infaq->keterangan = $request->keterangan;
        $infaq->jumlah = $request->jumlah;

        $infaq->save();

        session()->flash('info', 'Data Berhasil Diperbarui.');
        
        return redirect()->route('infaqs.index');
    }

    public function destroy($id)
    {
        $infaq = Infaq::find($id);
        $infaq->delete();
        session()->flash('danger', 'Data Berhasil Dihapus.');

        return redirect()->route('infaqs.index');
    }
}
