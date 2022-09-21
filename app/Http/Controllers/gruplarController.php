<?php
namespace App\Http\Controllers;
use App\Models\gruplar;
use Illuminate\Http\Request;
class gruplarController extends Controller
{
      public function index()
    {
$gruplars = gruplar::latest()->paginate(15);
return view('crud.gliste', compact('gruplars'))
      ->with('i', (request()->input('page', 1) - 1) * 15);
      }
    public function create()
    {
      return view('crud.gekle');
    }

    public function store(Request $request)
    {
    $request->validate(['grupadi' => 'required']);
        gruplar::create($request->all());
        return redirect()->route('gruplar.index')
            ->with('success', 'grup ekleme işlemi başarılı.');
    }

    public function show(gruplar $gruplar)
    {
      $gruplar = gruplar::find($gid);
      return view('crud.gduzenle',compact('gruplar'));
    }
    public function edit($gid)
    {
       $gruplar = gruplar::find($gid);
       return view('crud.gduzenle',compact('gruplar'));

    }

    public function update(Request $request, gruplar $gruplar)
    {
      $request->validate([
          'grupadi' => 'required',
      ]);

      $gruplar->update($request->all());

      return redirect()->route('gruplar.index')
                      ->with('success','grup başarı ile güncellendi.');
    }

    public function destroy($gid)
    {
        gruplar::destroy($gid);
        return redirect()->route('gruplar.index')->with('success','grup başarı ile silindi');
    }
}
