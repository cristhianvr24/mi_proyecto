@extends ('layauts.plantilla')
@section('title', 'Cursos create')
@section('content')
    <h1>En esta pagina puede crear tu propio curso</h1>
    <form action="{{route('cursos.store')}}" method="POST">
        @csrf
        <label>
            Nombre: 
            <br>
            <input type="text" name="name">
        </label>
        @error('name')
        <br>
            <small>*{{$message}}</small>
        <br>
        @enderror
        <br>
        <label>
            Descripcion: 
            <br>
            <textarea name="descripcion" rows="5"></textarea>
        </label>
        <br>
        @error('descripcion')
        <br>
            <small>*{{$message}}</small>
        <br>
        @enderror
        <br>
        <label>
            Categoria: 
            <br>
            <input type="text" name="categoria">
        </label>
        <br>
        @error('categioria')
        <br>
            <small>*{{$message}}</small>
        <br>
        @enderror
        <br>
        <button type="submit">Enviar Formulario</button>
    </form>
@endsection