@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Categoría</h3>
        <div class="card text-dark bg-light border-primary" style="width: 24rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $category->id }}. {{ $category->category_name }} </h5>
                <h6 class="card-subtitle mb-2 text-muted"></h6>
                <p class="card-text">
                <p>
                    @if ($category->active)
                        Activa
                    @else
                        Inactiva
                    @endif
                </p>
                </p>
                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary">EDITAR</a>
                <form action="{{ route('categories.destroy', $category->id) }}" method="post" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">ELIMINAR</button>
                </form>
            </div>
        </div>
    </div>
@endsection
