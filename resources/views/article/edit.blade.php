@extends('layout.index')

@section('content')
    <section class="container">
        <h1 class="text-center">Modification de l'article </h1>
        <form action="{{ route('article.update') }}" method="post">

            @method('PUT')
            @csrf

            <input type="hidden" name="id" value="{{ $article->id }}">
            <input type="hidden" name="slug" value="{{ $article->slug }}">

            <div class="mb-3">
                <label for="title" class="form-label">Title : </label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ $article->title }}">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="shortDescription" class="form-label">Description courte : </label>
                <input type="text" class="form-control @error('shortDescription') is-invalid @enderror" id="shortDescription" name="shortDescription" value="{{ $article->shortdescription }}">
                @error('shortDescription')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description : </label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror">{{ $article->description }}</textarea>
                    @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </section>
@endsection
