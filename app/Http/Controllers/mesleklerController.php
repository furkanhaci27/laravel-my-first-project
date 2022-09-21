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
      ->with('i', (request()->input('page', 1) - 1) * 15);
      }
    public function create()
    {
      return view('crud.mekle');
    }

    public function store(Request $request)
    {
    $request->validate(['meslekadi' => 'required']);
        meslekler::create($request->all());
        return redirect()->route('meslekler.index')
            ->with('success', 'il ekleme işlemi başarılı.');
    }

    public function show(meslekler $meslekler)
    {
      $meslekler = meslekler::find($mid);
      return view('crud.mduzenle',compact('meslekler'));
    }
    public function edit($mid)
    {
       $meslekler = meslekler::find($mid);
       return view('crud.mduzenle',compact('meslekler'));

    }

    public function update(Request $request, meslekler $meslekler)
    {
      $request->validate([
          'meslekadi' => 'required',
      ]);

      $meslekler->update($request->all());

      return redirect()->route('meslekler.index')
                      ->with('success','il başarı ile güncellendi.');
    }

    public function destroy($mid)
    {
        meslekler::destroy($mid);
        return redirect()->route('meslekler.index')->with('success','il başarı ile silindi');
    }
}
