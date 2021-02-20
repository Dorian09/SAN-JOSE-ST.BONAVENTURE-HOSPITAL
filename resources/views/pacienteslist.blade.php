<div class="card mb-3">
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRD-NqMfeMPF09UPjxcYcMO8xME7-2NrCGy_w&usqp=CAU" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">San Jose St. Bonaventure Hospital</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

    <table class="table">
    <thead class="table-light">
        <tr>
            <th scope="col">Cedula</th>
            <th scope="col">Primer nombre</th>
            <th scope="col">Segundo nombre</th>
            <th scope="col">Edad</th>
            <th scope="col">Especialista</th>
            <th scope="col">Operaciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($pacientes as $paciente)
    <tr>
        <td>{{ $paciente->cedula }}</td>
        <td>{{ $paciente->primerNombre }}</td>
        <td>{{ $paciente->segundoNombre }}</td>
        <td>{{ $paciente->edad }}</td>
        <td>{{ $paciente->especialidad }}</td>
        <td>
            <a href="{{ url('/edit/'.$paciente->id) }}" class="btn btn-sm btn-warning">Edit</a>
        </td>
    </tr>
    @endforeach
    </tbody>
    </table>
  </div>
</div>
    
    