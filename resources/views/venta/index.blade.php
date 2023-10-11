<a class="nav-link active" href="{{ url('ventas/create') }}">Crear venta</a>


<table class="table">
    <thead>
        <tr>
            <th>Fecha</th>
            <th>Nombre</th>
            <th>Empresa</th>
            <th>Cantidad</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        @foreach($ventas as $venta)
        <tr>
        
            <td>{{ $venta->fecha }}</td>
            <td>{{ $venta->producto_id }}</td>
            <td>{{ $venta->empresa_id }}</td>
            <td>{{ $venta->cantidad }}</td>
            <td>{{ $venta->precio_total }}</td>
         
        </tr>
        @endforeach
    </tbody>
</table>