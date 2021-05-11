@extends('layout.index')

@section('hero')
    @include('partials.hero')
@endsection

@if (session('success'))
    <div class="alert alert-secondary" role="alert">
        {{ session('success') }}
    </div>
@endif

@section('content')
    <div class="album py-5 bg-light">
        <div class="container">
            <h2 class="text-center pb-4">Dernier articles</h2>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 pb-4">
            @foreach ($articles as $article)
                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">{{ $article->title }}</text>
                            </svg>
                            <div class="card-body">
                                <p class="card-text">{{ $article->shortdescription }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    <a href="{{ route('article.show', ["slug" => $article->slug]) }}"><button type="button" class="btn btn-sm btn-outline-secondary">Voir</button></a>
                                    <a href="{{ route('article.edit', ["id" => $article->id]) }}"><button type="button" class="btn btn-sm btn-outline-secondary">Modifier</button></a>
                                    </div>
                                    <small class="text-muted">{{ $article->created_at->format('d/m/Y') }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $articles->links('pagination::bootstrap-4') }}
        </div>
    </div>
@endsection
