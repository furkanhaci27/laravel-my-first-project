<?php
namespace App\Http\Controllers;
use App\Models\iller;
use Illuminate\Http\Request;
class illerController extends Controller
{
      public function index()
    {
$illers = iller::latest()->paginate(15);
return view('crud.liste', compact('illers'))
      ->with('i', (request()->input('page', 1) - 1) * 15);
      }
    public function create()
    {
      return view('crud.ekle');
    }

    public function store(Request $request)
    {
    $request->validate(['iladi' => 'required']);
        iller::create($request->all());
        return redirect()->route('iller.index')
            ->with('success', 'il ekleme işlemi başarılı.');
    }

    public function show(iller $iller)
    {
      $iller = iller::find($ilid);
      return view('crud.duzenle',compact('iller'));
    }
    public function edit($ilid)
    {
       $iller = iller::find($ilid);
       return view('crud.duzenle',compact('iller'));

    }

    public function update(Request $request, iller $iller)
    {
      $request->validate([
          'iladi' => 'required',
      ]);

      $iller->update($request->all());

      return redirect()->route('iller.index')
                      ->with('success','il başarı ile güncellendi.');
    }

    public function destroy($ilid)
    {
        iller::destroy($ilid);
        return redirect()->route('iller.index')->with('success','il başarı ile silindi');
    }
}
