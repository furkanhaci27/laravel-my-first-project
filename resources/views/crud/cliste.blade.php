<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="csrf-token" content="{{ csrf_token() }}">
  </head>
  <body>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
    <table class="table table-bordered table-responsive-lg">
      <tr>
        <td>cid</td>
        <td>cinsiyet</td>
      <td>  <a class="btn btn-primary"href="/cinsiyet/create ">ekle<a/></td>
      </tr>
      @foreach($cinsiyets as $cinsiyet)
      <tr>
        <td>{{ $cinsiyet->cid}}</td>
        <td>{{ $cinsiyet->cinsiyet}}</td>
      <td>

        <form action="{{ route('cinsiyet.destroy', $cinsiyet->cid)}}" method="POST">
          <a class="btn btn-info" href="{{route('cinsiyet.show',$cinsiyet->cid) }}">Göster</a>
            <a class="btn btn-primary"href="{{route('cinsiyet.edit',$cinsiyet->cid) }}">Düzenle<a/>
              @csrf
              @method('DELETE')
        <button type="submit" class="btn btn-danger">SİL</button>
        </form>
        </td>



      </tr>
      @endforeach
    </table>
</div>
</div>
</div>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</div>
