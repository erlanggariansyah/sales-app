<!DOCTYPE html>
<html>
    <head>
    <title>Master</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Sales App</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/dasbor">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/nasabah">Nasabah</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/role">Role</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/master">Karyawan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/produk">Produk</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Aktivitas
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="/activity">Aktivitas</a></li>
            <li><a class="dropdown-item" href="/custjourney">Customer Journey</a></li>
            <li><a class="dropdown-item" href="/logout">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <form class="d-flex" method="GET" action="/master">
      <input name="cari" class="form-control me-2" type="search" placeholder="Username, NIK, dll" aria-label="search">
      <button class="btn btn-outline-success" type="submit">Cari</button>
    </form>
  </div>
</nav>
  </div>
</nav>
<div class="container">
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>