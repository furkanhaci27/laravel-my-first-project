<?php

namespace App\Http\Controllers;
use App\Models\okullar;
use App\Models\iller;
use Illuminate\Http\Request;
class okullarController extends Controller
{
      public function index()
    {
$okullark = okullar::latest()->paginate(15);
return view('crud.oliste', compact('okullark'))
      ->with('i', (request()->input('page', 1) - 1) * 15);
      }
    public function create()
    {
      $illers = iller::all();
      return view('crud.oekle',compact( 'illers'));

    }

    public function store(Request $request)
    {
    $request->validate(['okuladi' => 'required']);
        okullar::create($request->all());
        return redirect()->route('okullar.index')
            ->with('success', 'okul ekleme işlemi başarılı.');
    }

    public function show(okullar $okullar)
    {
      $okullar = okullar::find($okulid);
      return view('crud.oduzenle',compact('okullar'));
    }
    public function edit($okulid)
    {
       $okullar = okullar::find($okulid);
       return view('crud.oduzenle',compact('okullar'));

    }

    public function update(Request $request, okullar $okullar)
    {
      $request->validate([
          'okuladi' => 'required',
      ]);

      $okullar->update($request->all());

      return redirect()->route('okullar.index')
                      ->with('success','okul başarı ile güncellendi.');
    }

    public function destroy($okulid)
    {
        okullar::destroy($okulid);
        return redirect()->route('okullar.index')->with('success','okul başarı ile silindi');
    }
}
