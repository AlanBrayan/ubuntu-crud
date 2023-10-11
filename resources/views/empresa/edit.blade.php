<form action="{{ route('empresas.update', $empresas->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="">Nombre</label>
      <input type="text"
        class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="" value="{{ $empresas->nombre }}">
    </div>
    <button type="submit">Guardar</button>
</form>