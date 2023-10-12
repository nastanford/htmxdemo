<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0">
  <title>HTMX Demo</title>
  <script src="https://unpkg.com/htmx.org@1.9.6"
    defer></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand"
        hx-get="./controllers/home.php"
        hx-trigger="click, load"
        hx-target="#mainContent"
        style="cursor: pointer">HTMX Demo</a>
      <button class="btn btn-sm btn-secondary"
        hx-get="./controllers/people.php"
        hx-trigger="click"
        hx-target="#mainContent">People</button>
      <!-- 
      <button class="btn btn-sm btn-secondary"
        hx-get="./controllers/people.php"
        hx-trigger="click"
        hx-target="#mainContent">test</button> -->

    </div>
    </div>
  </nav>