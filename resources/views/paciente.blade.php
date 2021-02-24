
  @include("template.encabezado")
  @include("template.menu")






  @if($layout == 'index')
    <div class="container-fluid mt-4">
      <div class="row">
          @include("template.slider")
          @include("home-body")
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
            <img src="https://cadenaser00.epimg.net/ser/imagenes/2020/06/18/gente/1592468970_021363_1592471025_noticia_normal.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Registro</h5>
              
              <form action="{{ url('/store') }}" method="post">
                @csrf
                <div class="mb-3">
                  <label>Cedula</label>
                  <input name="cedula" type="text" class="form-control" placeholder="Ingresa tu cedula">
                </div>
                <div class="mb-3">
                  <label>Nombre</label>
                  <input name="primerNombre" type="text" class="form-control" placeholder="Ingresa tu nombre">
                </div>
                <div class="mb-3">
                  <label>Apellido</label>
                  <input name="segundoNombre" type="text" class="form-control" placeholder="Ingresa tu apellido">
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
                    <label>Nombre</label>
                    <input value="{{ $paciente->primerNombre }}" name="primerNombre" type="text" class="form-control" placeholder="Ingresa tu nombre">
                  </div>
                  <div class="mb-3">
                    <label>Apellido</label>
                    <input value="{{ $paciente->segundoNombre }}" name="segundoNombre" type="text" class="form-control" placeholder="Ingresa tu apellido">
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

  @include("template.pie")