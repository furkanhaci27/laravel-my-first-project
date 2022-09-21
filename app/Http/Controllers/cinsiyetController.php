<?php
namespace App\Http\Controllers;
use App\Models\cinsiyet;
use Illuminate\Http\Request;
class cinsiyetController extends Controller
{
      public function index()
    {
$cinsiyets = cinsiyet::latest()->paginate(15);
return view('crud.cliste', compact('cinsiyets'))
      ->with('i', (request()->input('page', 1) - 1) * 15);
      }
    public function create()
    {
      return view('crud.cekle');
    }

    public function store(Request $request)
    {
    $request->validate(['cinsiyet' => 'required']);
        cinsiyet::create($request->all());
        return redirect()->route('cinsiyet.index')
            ->with('success', 'cinsiyet ekleme işlemi başarılı.');
    }

    public function show(cinsiyet $cinsiyet)
    {
      $cinsiyet = cinsiyet::find($cid);
      return view('crud.cduzenle',compact('cinsiyet'));
    }
    public function edit($cid)
    {
       $cinsiyet = cinsiyet::find($cid);
       return view('crud.cduzenle',compact('cinsiyet'));

    }

    public function update(Request $request, cinsiyet $cinsiyet)
    {
      $request->validate([
          'cinsiyet' => 'required',
      ]);

      $cinsiyet->update($request->all());

      return redirect()->route('cinsiyet.index')
                      ->with('success','cinsiyet başarı ile güncellendi.');
    }

    public function destroy($cid)
    {
        cinsiyet::destroy($cid);
        return redirect()->route('cinsiyet.index')->with('success','cinsiyet başarı ile silindi');
    }
}
