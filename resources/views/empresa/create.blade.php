<form action="{{ route('empresas.store') }}" method="post">
    @csrf
    <div class="form-group">
      <label for="">Nombre</label>
      <input type="text"
        class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="">
    </div>
    <button type="submit">Guardar</button>
</form>