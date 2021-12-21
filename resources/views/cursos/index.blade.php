@extends('layauts.plantilla')

@section ('title', 'cursos')
@section('content')
    <h1>Bienvenidos a la pagina principal de cursos</h1>
    <a href="{{route('cursos.create')}}">Crear curso</a>
    <ul>
        @foreach ($cursos as $curso)
            <li>
                <a href ="{{route('cursos.show', $curso->id)}}">{{$curso->slug}}</a>
            </li>
        @endforeach
    </ul>

    {{$cursos->links()}}
    @endsection
