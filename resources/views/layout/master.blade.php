<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
  </head>
  <body>
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav m-auto">
                      <li class="nav-item">
                        <a class="nav-link @yield('active1')" aria-current="page" href="/">DOSEN</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link @yield('active2')" href="/mahasiswa">MAHASISWA</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link @yield('active3')" href="/matkul">MATAKULIAH</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
            </div>

            <section class="konten">
                <div class="container">
                    <div class="backgroundshape col-lg-8 m-auto">
                        <div class="container judulhalaman m-auto">
                            <h2 style="font-weight: bold">@yield('judulhalaman')</h2>
                        <div class="shapecard m-auto">
                            <div class="container">
                                <div class="col-lg-8 m-auto">
                                    @yield('daftar')
                                </div>
                                <div class="footer">
                                    <p>Created by : Fathan Pebrilliestyo Ridwan</p>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>