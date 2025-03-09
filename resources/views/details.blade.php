<!DOCTYPE html>
<html>

<body>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Organic</th>
                <th>Gluten Free</th>
                <th>Expiration</th>
                <th>Edit</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $food->id }}</td>
                <td>{{ $food->name }}</td>
                <td>{{ $food->category }}</td>
                <td>{{ $food->price }}</td>
                <td>{{ $food->organic ? 'Yes' : 'No' }}</td>
                <td>{{ $food->gluten_free ? 'Yes' : 'No' }}</td>
                <td>{{ $food->expiration_date }}</td>

                <td>

                    <a href="{{ route('food.edit', ['id' => $food->id]) }}">Editar</a>

                </td>
            </tr>
        </tbody>
    </table>

</body>

</html>