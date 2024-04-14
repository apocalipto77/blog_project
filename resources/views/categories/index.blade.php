@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="mb-4">Lista de categorias</h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr class="align-middle">
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->category_name }}</td>
                        <td>
                            @if ($category->active)
                                Activo
                            @else
                                Inactivo
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('categories.show', $category->id) }}" class="btn btn-primary m-1">VER</a>
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary">EDITAR</a>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="post"
                                style="display: inline;">
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
