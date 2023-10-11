<a class="nav-link active" href="{{ url('empresas/create') }}">Crear</a>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($empresas as $empresa)
        <tr>
            <td scope="row">{{ $empresa->id }}</td>
            <td>{{ $empresa->nombre }}</td>
            <td>
                <a class="nav-link active" href="{{ route('empresas.edit', $empresa->id ) }}">Editar</a>

                <form action="{{ route('empresas.destroy', $empresa->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>