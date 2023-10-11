<!DOCTYPE html>
<html>

<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <form action="{{ route('ventas.store') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="">Fecha</label>
            <input type="date" class="form-control" name="fecha" id="fecha" aria-describedby="helpId" placeholder="">
        </div>
        <br>

        <div class="form-group">
            <label for="">Empresa</label>
            <select class="form-control" name="empresa_id" id="empresa_id">
                @foreach ($empresas as $empresa)
                    <option value="{{ $empresa->id }}">{{ $empresa->nombre }}</option>
                @endforeach
            </select>
        </div>

        <br>

        <div class="form-group">
            <label for="">Producto</label>
            <select class="form-control" name="producto_id" id="producto_id">
                @foreach ($productos as $producto)
                    <option value="{{ $producto->id }}" data-empresa="{{ $producto->empresa_id }}"
                        data-precio="{{ $producto->precio }}">{{ $producto->nombre }}</option>
                @endforeach
            </select>
        </div>

        <br>

        <div class="form-group">
            <label for="precio">Precio:</label>
            <span id="precio-value">Seleccione un producto para ver el precio.</span>
        </div>

        <div class="form-group">
            <label for="">Cantidad</label>
            <input type="number" class="form-control" name="cantidad" id="cantidad" aria-describedby="helpId"
                placeholder="">
        </div>

        <br>

        <div class="form-group">
            <label for="precio_total">Total</label>
            <input type="text" class="form-control" name="precio_total" id="precio_total" aria-describedby="helpId"
                placeholder="">
        </div>

        <br>
        <button type="submit">Guardar venta</button>
    </form>

    <script>
        $(document).ready(function() {
            $('#empresa_id').change(function() {
                var selectedNegocioId = $(this).val();
                $('#producto_id option').each(function() {
                    var productoNegocioId = $(this).data('empresa');
                    if (selectedNegocioId == productoNegocioId || selectedNegocioId === "") {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            });

            $('#producto_id').change(function() {
                var selectedPrecio = $(this).find(':selected').data('precio');
                $('#precio-value').text('Precio: ' + selectedPrecio);
            });
        });

        $(document).ready(function() {
            $('#empresa_id, #producto_id, #cantidad').change(function() {
                var selectedPrecio = parseFloat($('#producto_id option:selected').data('precio'));
                var cantidad = parseInt($('#cantidad').val());

                if (!isNaN(selectedPrecio) && !isNaN(cantidad)) {
                    var total = selectedPrecio * cantidad;
                    $('#precio-value').text('Precio: ' + selectedPrecio);
                    $('#precio_total').val(total); // Actualizar el campo de entrada Total
                } else {
                    $('#precio-value').text('Seleccione un producto para ver el precio.');
                    $('#precio_total').val(''); // Borrar el campo Total si no se puede calcular
                }
            });
        });
    </script>


    </script>
</body>

</html>
