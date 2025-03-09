<!DOCTYPE html>
<html>

<body>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
                <th>Details</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($foods as $food)
            <tr>
                <td>{{ $food->id }}</td>
                <td>{{ $food->name }}</td>
                <td>{{ $food->category }}</td>

                <td>

                    <a href="{{route('food.details', ['id'=>$food['id']])}}">Show</a>
                    
                </td>

                <td>

                    <form action="{{route('food.destroy', $food->id)}}" method="POST">

                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Estas seguro que quieres eliminar este elemento?')">Eliminar</button>

                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>