<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-6 p-0 border border-dark" style="height: 500px;background-size:cover;background-repeat: no-repeat"
        id="banner"></div>
      <div class="col-6 p-0">
        <form method="POST" action="{{ route('download') }}" enctype="multipart/form-data">
          @csrf
          <input hidden name="url_photo" id="url_photo">
          <textarea placeholder="Conteudo" name="content" class="form-control" style="height: 200px;resize: none" id="content"></textarea>
          <label class="btn btn-sm btn-primary" for="photo">
            Adicionar Imagem
          </label>
          <input type="file" name="photo" hidden id="photo" accept="image/*">
          <button class="btn btn-sm btn-primary d-block ms-auto">
            Download
          </button>
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="{{ asset('home.js') }}"></script>
</body>

</html>
