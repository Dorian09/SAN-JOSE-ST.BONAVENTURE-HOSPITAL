<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>SAN JOSE ST.BONAVENTURE HOSPITAL</title>
  </head>
  <body>

  @include("navbar")

  <div class="row header-container justify-content-center">
    <div class="header">
      <h1>SAN JOSE ST.BONAVENTURE HOSPITAL</h1>
    </div>
  </div>

  @if($layout == 'index')
    <div class="container-fluid mt-4">
      <div class="row">
        <section class="col-md-7">
          @include("pacienteslist")
        </section>
        <section class="col-md-5"></section>
      </div>
    </div>
  @elseif($layout == 'create')
    <div class="container-fluid mt-4">
      <div class="row">
        <section class="col-md-7">
          @include("pacienteslist")
        </section>
        <section class="col-md-5">

          <div class="card mb-3">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQa6D9xQAemd5994Ugn45h412UCXbdINsy-eA&usqp=CAU" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Registro</h5>
              
              <form action="{{ url('/store') }}" method="post">
                @csrf
                <div class="mb-3">
                  <label>Cedula</label>
                  <input name="cedula" type="text" class="form-control" placeholder="Ingresa tu cedula">
                </div>
                <div class="mb-3">
                  <label>Primer nombre</label>
                  <input name="primerNombre" type="text" class="form-control" placeholder="Ingresa tu primer nombre">
                </div>
                <div class="mb-3">
                  <label>Segundo nombre</label>
                  <input name="segundoNombre" type="text" class="form-control" placeholder="Ingresa tu segundo nombre">
                </div>
                <div class="mb-3">
                  <label>Edad</label>
                  <input name="edad" type="text" class="form-control" placeholder="Ingresa tu cedula">
                </div>
                <div class="mb-3">
                  <label class="form-label">Especialidad</label>
                  <input name="especialidad" type="text" class="form-control" placeholder="Ingresa la especialidad">
                </div>
                <input type="submit" class="btn btn-info" value="Save">
                <input type="reset" class="btn btn-warning" value="Reset">
              </form>

            </div>
          </div>
          
        </section>
      </div>
    </div>
  @elseif($layout == 'show')
    <div class="container-fluid mt-4">
      <div class="row"></div>
        <section class="col">
          @include("pacienteslist")
        </section>
        <section class="col"></section>
      </div>
    </div>
  @elseif($layout == 'edit')
    <div class="container-fluid mt-4">
      <div class="row">
        <section class="col-md-7">
          @include("pacienteslist")
        </section>
        <section class="col-md-5">

          <div class="card mb-3">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQa6D9xQAemd5994Ugn45h412UCXbdINsy-eA&usqp=CAU" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Registro</h5>
                <form action="{{ url('/update/'. $paciente->id) }}" method="post">
                  @csrf
                  <div class="mb-3">
                    <label>Cedula</label>
                    <input value="{{ $paciente->cedula }}" name="cedula" type="text" class="form-control" placeholder="Ingresa tu cedula">
                  </div>
                  <div class="mb-3">
                    <label>Primer nombre</label>
                    <input value="{{ $paciente->primerNombre }}" name="primerNombre" type="text" class="form-control" placeholder="Ingresa tu primer nombre">
                  </div>
                  <div class="mb-3">
                    <label>Segundo nombre</label>
                    <input value="{{ $paciente->segundoNombre }}" name="segundoNombre" type="text" class="form-control" placeholder="Ingresa tu segundo nombre">
                  </div>
                  <div class="mb-3">
                    <label>Edad</label>
                    <input value="{{ $paciente->edad }}" name="edad" type="text" class="form-control" placeholder="Ingresa tu cedula">
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Especialidad</label>
                    <input value="{{ $paciente->especialidad }}" name="especialidad" type="text" class="form-control" placeholder="Ingresa la especialidad">
                  </div>
                  <input type="submit" class="btn btn-info" value="Update">
                  <input type="reset" class="btn btn-warning" value="Reset">
                </form>
            </div>
          </div>
          
        </section>
      </div>
    </div>
  @endif

  <footer></footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>