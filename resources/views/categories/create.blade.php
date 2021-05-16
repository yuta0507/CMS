@extends('layouts.app')

@section('content')
    <div class="card card-default">
        <div class="card-header">Create category</div>
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
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control">
                <div class="form-group">
                    <button class="btn btn-success mt-3">Add Category</button>
                </div>
            </form>
        </div>
    </div>
@endsection