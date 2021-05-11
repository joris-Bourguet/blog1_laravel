<header>
  <div class="px-3 py-2 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
            @foreach ( App\Models\Menu::where('is_active', '1')->get() as $menu)
                <li>
                    <a href="{{ $menu->slug }}" class="nav-link text-secondary">
                        <svg class="bi d-block mx-auto mb-1" width="24" height="24"></svg>
                        {{ $menu->title }}
                    </a>
                </li>
            @endforeach
        </ul>
      </div>
    </div>
  </div>
  <div class="px-3 py-2 border-bottom mb-3">
    <div class="container d-flex flex-wrap justify-content-center">
      <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto">
        <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
      </form>

      <div class="text-end">
        <a href="{{ route('connexion') }}"><button type="button" class="btn btn-light text-dark me-2">{{ __('connexion') }}</button></a>
        <a href="{{ route('inscription') }}"><button type="button" class="btn btn-primary">{{ __('inscription') }}</button></a>
      </div>
    </div>
  </div>
</header>
