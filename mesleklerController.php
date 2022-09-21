<?php

namespace App\Http\Controllers;

use App\Models\meslekler;
use Illuminate\Http\Request;

class mesleklerController extends Controller
{

	public function index()
    {
 $mesleklers = meslekler::latest()->paginate(15);
  return view('crud.mliste', compact('mesleklers'))
  ->with('i', (request()->input ('page',1)- 1)*15);

    }
    public function create()
    {
      return view  ("crud.mekle");
    }
    public function store(Request $request)
    {
      $request-> validate(['meslekadi'=>'requaried']);

      meslekler::create($request->all());
      return redirect()->route('meslekler.index')
      ->with('succes','meslekler Başarı ile Eklendi');
    }
    public function show(meslekler $meslekler)
    {
        //
    }
    public function edit(meslekler $meslekler)
    {
      return view  ("crud.mduzenle");
    }
    public function update(Request $request, meslekler $meslekler)
    {
        //
    }
    public function destroy(meslekler $meslekler)
    {
        //
    }
}
