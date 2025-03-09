<!DOCTYPE html>
<html lang="es">
<body>
    <h1>Editar Comida</h1>
    
    <form action="{{ route('food.update', $food->id) }}" method="POST">
        @csrf
        @method('PUT')  {{-- Laravel requiere este método para actualizar --}}

        <label>Nombre:</label>
        <input type="text" name="name" value="{{ $food->name }}" required>

        <label>Categoria:</label>
        <select name="category" required>
            <option value="Frutas" {{ $food->category == 'Frutas' ? 'selected' : '' }}>Frutas</option>
            <option value="Carnes" {{ $food->category == 'Carnes' ? 'selected' : '' }}>Carnes</option>
            <option value="Panaderia" {{ $food->category == 'Panaderia' ? 'selected' : '' }}>Panaderia</option>
            <option value="Lacteos" {{ $food->category == 'Lacteos' ? 'selected' : '' }}>Lacteos</option>
            <option value="Verduras" {{ $food->category == 'Verduras' ? 'selected' : '' }}>Verduras</option>
            <option value="Granos" {{ $food->category == 'Granos' ? 'selected' : '' }}>Granos</option>
            <option value="Frutos Secos" {{ $food->category == 'Frutos Secos' ? 'selected' : '' }}>Frutos Secos</option>
            <option value="Proteinas" {{ $food->category == 'Proteinas' ? 'selected' : '' }}>Proteinas</option>
            <option value="Condimentos" {{ $food->category == 'Condimentos' ? 'selected' : '' }}>Condimentos</option>
            <option value="Endulzantes" {{ $food->category == 'Endulzantes' ? 'selected' : '' }}>Endulzantes</option>
            <option value="Embutidos" {{ $food->category == 'Embutidos' ? 'selected' : '' }}>Embutidos</option>
            <option value="Pastas" {{ $food->category == 'Pastas' ? 'selected' : '' }}>Pastas</option>
        </select>

        <label>Precio:</label>
        <input type="number" name="price" step="0.01" value="{{ $food->price }}" required>

        <label>Organico:</label>
        @if ($food->organic == true)
            <input type="radio" name="organic" value="{{ $food->organic }}" required>True
            <input type="radio" name="organic" value="False" required>False
        @else
            <input type="radio" name="organic" value="True" required>True
            <input type="radio" name="organic" value="{{ $food->organic }}" required>False  
        @endif

        <label>Libre de gluten:</label>
        @if ($food->gluten_free == true)
            <input type="radio" name="gluten_free" value="{{ $food->gluten_free }}" required>True
            <input type="radio" name="gluten_free" value="False" required>False
        @else
            <input type="radio" name="gluten_free" value="True" required>True
            <input type="radio" name="gluten_free" value="{{ $food->gluten_free }}" required>False  
        @endif
                
        <label>Fecha de expiracion:</label>
        <label style="color: gray">{{$food->expiration_date}}</label>

        <button type="submit">Actualizar</button>
    </form>

    <a href="{{ route('foods.index') }}">Volver</a>
</body>
</html>