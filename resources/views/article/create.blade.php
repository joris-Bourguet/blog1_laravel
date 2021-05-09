@extends('layout.index')

@section('content')
    <section class="container">
        <form action="{{ route('article.store') }}" method="post">
            @csrf
            
            <div class="mb-3">
                <label for="title" class="form-label">Title : </label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="shortDesc" class="form-label">Description courte : </label>
                <input type="text" class="form-control" id="shortDesc" name="shortDesc">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description : </label>
                <input type="text" class="form-control" id="description" name="description">
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </section>

@endsection