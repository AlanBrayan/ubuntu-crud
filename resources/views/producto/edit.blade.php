<form action="{{ route('productos.update', $productos->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="">Nombre</label>
        <input type="text" class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="" value="{{ $productos->nombre }}">
    </div>
    <div class="form-group">
        <label for="">Descripcion</label>
        <input type="text" class="form-control" name="descripcion" id="" aria-describedby="helpId"
            placeholder="" value="{{ $productos->descripcion }}">
    </div>
    <div class="form-group">
        <label for="">Precio</label>
        <input type="number" class="form-control" name="precio" id="" aria-describedby="helpId"
            placeholder="" value="{{ $productos->precio }}">
    </div>
    <div class="form-group">
        <label for="">Cantidad</label>
        <input type="text" class="form-control" name="cantidad" id="" aria-describedby="helpId"
            placeholder="" value="{{ $productos->cantidad }}">
    </div>

    <div class="form-group">
        <label for="">Empresa</label>
        <select class="form-control" name="empresa_id" id="">
            @foreach ($empresas as $empresa)
                <option value="{{ $empresa->id }}">{{ $empresa->nombre }}</option>
            @endforeach
        </select>

    </div>

    <button type="submit">Guardar</button>
</form>
