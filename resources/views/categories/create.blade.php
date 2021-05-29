@extends('layouts.app')

@section('content')
    <div class="card card-default">
        <div class="card-header">
            {{ isset($category) ? 'Edit Category' : 'Create Category' }}
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-group">
                        @foreach ($errors->all() as $error)
                            <li class="list-group-item text-danger">
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ isset($category) ? route('categories.update', $category->id) : route('categories.store') }}" method="POST">
                @csrf
                @if (isset($category))
                    @method('PUT')
                @endif
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ isset($category) ? $category->name : '' }}">
                <div class="form-group">
                    <button class="btn btn-success mt-3">
                        {{ isset($category) ? 'Update Category' : 'Edit Category' }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection