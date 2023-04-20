Listado de mascotas
<br />
<a href="{{ url('pet/create') }}">Nuevo registro</a> <br />

<table>
    <thead>
        <th>#</th>
        <th>Name</th>
        <th>Age</th>
        <th>Actions</th>
    </thead>
    <body>
        @foreach($pets as $pet)
            <tr>
                <td>{{ $pet->id }}</td>
                <td>{{ $pet->name }}</td>
                <td>{{ $pet->age }}</td>

                <form method="POST" action="{{ url('/pet/'.$pet->id )}}">
                   
                    @csrf
                    {{ method_field('DELETE') }}
                    <td>
                        <a href="{{ route('pet.edit' , $pet->id }}">Editar</a>
                        <input type="submit" onclick="return confirm('Desea borrar el registro?')" value="Eliminar"/>
                    </td>

                </form>
            </tr>
        @endforeach
    </body>
</table>