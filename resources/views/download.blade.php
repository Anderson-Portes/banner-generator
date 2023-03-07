<!doctype html>
<html lang="en" id="linkQR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.5.2/dom-to-image.min.js"></script>
</head>

<body>
  <div class="vh-100 bg-dark"
    style="background-size: cover;background-repeat: no-repeat; background-image: url({{ $url_photo }})">
    {{ $content }}
  </div>
  <script>
    $(document).ready(function() {
      domtoimage
        .toJpeg(document.getElementById('linkQR'), {
          quality: 0.95
        })
        .then(function(dataUrl) {
          let link = document.createElement('a')
          link.download = 'imageQR.jpeg'
          link.href = dataUrl
          link.click()
        })
    })
  </script>
</body>

</html>
