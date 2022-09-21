<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 <meta name="csrf-token" content="{{ csrf_token() }}">
  </head>
  <body>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
<div class="row">
  <div class="col-sx-12 col-sm-12 col-md-12">
<table class="table table-bordered table-responsive-lg">
  <tr>
    <td>okulID</td>
      <td>ili</td>
    <td>okul Adı</td>
    <td> <a class="btn btn-primary" href="/okullar/create">EKLE</a> </td>
  </tr>
 @foreach ($okullark as $okullar)
  <tr>
    <td>{{ $okullar->okulid }}</td>
      <td>{{ $okullar->ili }}</td>
    <td> {{ $okullar->okuladi }}</td>
<td>
<form class="" action="{{ route('okullar.destroy', $okullar->okulid)}}" method="POST">
<a class="btn btn-info" href="{{ route('okullar.show', $okullar->okulid)}}">Göster</a>
<a class="btn btn-primary" href="{{ route('okullar.edit', $okullar->okulid)}}">Düzenle</a>
@csrf
@method('DELETE')
<button type="submit" name="button" class="btn btn-danger">SİL</button>
</form>
</td>
 </tr>
  @endforeach
</table>
  </div>
</div>
   </div>
  </body>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
