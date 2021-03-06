@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Lista de pacientes registrados <a href="pacientes/create"><button type="button" class="btn btn-success float-right">Agregar Paciente</button></a></h2>
    {{-- <h6>
        @if ($search)
        <div class="alert alert-primary" role="alert">
            Los resultados de la búsqueda '{{ $search }}' son:
        </div>
        @endif

    </h6> --}}
  <table class="table table-striped table-bordered data-table">
      <thead>
        <tr>
          <th scope="col">RUT</th>
          <th scope="col">Nombre</th>
          <th scope="col">Email</th>
          <th scope="col">Motivo</th>
          <th scope="col">Fecha de Evaluación</th>
          <th scope="col">Nutricionista</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
          {{-- @foreach ($patients as $patient)
              <tr>
                  <th scope="row">{{$patient->rut}}</th>
                  <td>{{$patient->nombre}} {{$patient->apellido}}</td>
                  <td>{{$patient->email}}</td>
                  <td>{{$patient->motivo_consulta}}</td>
                  <td>{{$patient->fecha_evaluacion}}</td>
                  <td>{{$patient->nutricionista}}</td>

                  <td>
                    <form action="{{ route('pacientes.destroy', $patient->id) }}" method="POST">
                      <a href="{{ route('pacientes.show', $patient->id) }}"><button type="button" class="btn btn-secondary btn-sm"><i class="fas fa-eye"></i></button></a>
                      <a href="{{ route('pacientes.edit', $patient->id) }}"><button type="button" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button></a>
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                    </form>
                  </td>
              </tr>
          @endforeach --}}
      </tbody>
  </table>
</div>

@push('scripts')
    <script>
        $(function(){
            var table = $('.data-table').DataTable({
                "language":{
                    "url":"http://cdn.datatables.net/plug-ins/a5734b29083/i18n/Spanish.json"
                },
                processing: true,
                serverSide: true,
                ajax: "{{ route('pacientes.index') }}",
                columns: [
                    {data: 'rut', name: 'rut'},
                    {data: 'nombre', name: 'nombre'},
                    {data: 'email', name: 'email'},
                    {data: 'motivo_consulta', name: 'motivo_consulta'},
                    {data: 'fecha_evaluacion', name: 'fecha_evaluacion'},
                    {data: 'nutricionista', name: 'nutricionista'},
                    {data: 'action', name: 'action', searchable: false, orderable: false},
                ]
            });
        });
    </script>
@endpush
@endsection
