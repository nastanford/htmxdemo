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
        hx-get="./views/home.php"
        hx-trigger="click, load"
        hx-target="#mainContent">HTMX Demo</a>
      <button class="btn btn-sm btn-primary"
        hx-get="./views/people.php"
        hx-trigger="click"
        hx-target="#mainContent">People</button>
      <button class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <form class="d-flex">
        <input class="form-control me-2"
          type="search"
          placeholder="Search"
          aria-label="Search">
        <button class="btn btn-info"
          type="submit">Search</button>
      </form>
    </div>
    </div>
  </nav>


  <div id="mainContent"></div>

  <div class="container-fluid bg-dark text-white mt-3">
    <div class="row">
      <div class="col-12 text-center p-2 h5">
        footer
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>