  <div class="modal fade" id="modalDelete-{{$nota->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar nota</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ¿Está seguro de eliminar?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          {!! Form::open(['action' => ['NotasController@destroy', $nota->id], 'method' => 'delete']) !!}
          {{ Form::token() }}
            <button type="submit" class="btn btn-primary">Sí</button>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>