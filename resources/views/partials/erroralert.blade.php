<section>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @else
    <div class="alert alert-success">
        <ul>
            Tout est ok !
        </ul>
    </div>
    @endif
</section>
