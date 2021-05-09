@extends('layout.index')

@section('content')
<div class="album py-5 bg-light">
    <div class="container">
        <h2 class="text-center pb-4">{{ $article->title }}</h2>
        <div class="row">
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
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                            <a href="{{ route('article.update', ["id" => $article->id]) }}"><button type="button" class="btn btn-sm btn-outline-secondary">Edit</button></a>
                            </div>
                            <small class="text-muted">{{ $article->created_at->format('d/m/Y') }}</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection