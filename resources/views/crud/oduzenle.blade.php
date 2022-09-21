<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>problem var</strong> kontrol etmeniz gerekenler var.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<div class="row">
  <form action="{{ route('okullar.update',$okullar->okulid) }}" method="POST">
       @csrf
       @method('PUT')
  <div class="col-sx-12 col-sm-12 col-md-12">
    <div class="form-group">
      <strong>okul Adı</strong> <input type="text" name="okuladi"  value="{{ $okullar->okuladi }}">
    </div>
    <div class="form-group">
      <select name="ili">
        foreach ($illers as $iller) {
          <option value="<?php $iller[ilid] ?>">$iller[iladi]</option>
        }
      </select>
    </div>
    <div class="col-sx-12 col-sm-12 col-md-12">
      <button type="submit" name="Kaydet" class="btn btn-primary">okul Kaydet</button>
    </div>

  </div>
</form>
</div>



   </div>
  </body>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
