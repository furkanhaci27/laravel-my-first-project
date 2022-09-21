<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="csrf-token" content="{{ csrf_token() }}">







  </head>
  <body>
    <form action="{{  route('okullar.store') }}" method="POST">
    @csrf
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
  <div class="form-group">
    <strong>okul Adı</strong> <input type="text" name="okuladi" value="">



    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>İli</strong> <input type="text" name="ili" value="">




  </div>
<div class="col-sx-12 col-sm-12 col-md-12">
  <button type="submit" name="Kaydet"class="btn btn-primary">okul Kaydet</button>

</div>
</div>
</div>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</div>
