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
        $infaq = new Infaq();

        $infaq->tanggal = $request->tanggal;
        $infaq->keterangan = $request->keterangan;
        $infaq->jumlah = $request->jumlah;

        $infaq->save();
        
        return redirect()->route('infaqs.index');
    }

    public function edit($id)
    {
        $infaq = Infaq::find($id);
        return view('infaqs.edit', [
            'infaq' => $infaq,
        ]);
    }

    public function update(Request $request, $id)
    {
        $infaq = Infaq::find($id);

        $infaq->tanggal = $request->tanggal;
        $infaq->keterangan = $request->keterangan;
        $infaq->jumlah = $request->jumlah;

        $infaq->save();
        
        return redirect()->route('infaqs.index');
    }

    public function destroy($id)
    {
        $infaq = Infaq::find($id);
        $infaq->delete();

        return redirect()->route('infaqs.index');
    }
}
