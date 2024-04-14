@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Publicación</h3>
        <div class="card text-dark bg-light border-primary" style="width: 24rem;">
            <div class="card-header">
                {{ $post->title }}
            </div>
            <div class="card-body">
                <p>Categoría: {{ $post->category_id }}</p>
                <p>{{ $post->content }}</p>
                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary m-1">EDITAR</a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="post" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">ELIMINAR</button>
                </form>
            </div>
        </div>
    </div>
@endsection
