@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="mb-4">Lista de categorias</h3>
        <a href="{{ route('posts.create') }}" class="btn btn-primary mb-2">Crear Publicación</a>
        <table class="table">
            <thead>

                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Contenido</th>
                    <th scope="col">Categoría</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr class="align-middle">
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->content }}</td>
                        <td>{{ $post->category_id }}</td>
                        <td>
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-secondary m-1">VER</a>
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary m-1">EDITAR</a>
                            <form action="{{ route('posts.destroy', $post->id) }}" method="post" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">ELIMINAR</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
