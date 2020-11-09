<form action="{{ route('pacientes.destroy', $id) }}" method="POST">
    <a href="{{ route('pacientes.show', $id) }}"><button type="button" class="btn btn-secondary btn-sm"><i class="fas fa-eye"></i></button></a>
    <a href="{{ route('pacientes.edit', $id) }}"><button type="button" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button></a>
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
</form>
