@extends ('layauts.plantilla')
@section('title', 'Cursos create')
@section('content')
    <h1>En esta pagina puedes editar un curso</h1>
    <form action="{{route('cursos.update', $curso)}}" method="POST" >
        @csrf
        @method('put')

        <label>
            Nombre: 
            <br>
            <input type="text" name="name" value='{{$curso->name}}'>
        </label>
        <br>
        <label>
            Descripcion: 
            <br>
            <textarea name="descripcion" rows="5">{{$curso->descripcion}}</textarea>
        </label>
        <br>
        <label>
            Categoria: 
            <br>
            <input type="text" name="categoria" value='{{$curso->categoria}}'>
        </label>
        <br>
        <button type="submit">Actualizar Formulario</button>
    </form>
@endsection