<header class="container">
    <nav class="d-flex align-items-center">
      <img src="{{ Vite::asset('resources/assets/images/dc-logo.png')}}" alt="DC logo">
      <ul class="d-flex ms-5 mb-0">
        <li class="list-group-item nav-ink ps-4"><a href="{{ route('guest.index') }}" class="text-decoration-none {{Route::currentRouteName() == 'guest.index' ? 'text-primary' : 'text-black'}}">Home</a></li>
        <li class="list-group-item nav-ink ps-4"><a href="{{ route('admin.comic.index') }}" class="text-decoration-none {{Route::currentRouteName() == 'admin.comic.index' ? 'text-primary' : 'text-black'}}">Admin Management</a></li>
        <li class="list-group-item nav-ink ps-4 {{Route::currentRouteName() == 'admin.comic.show' ? 'text-primary' : 'text-black'}}">Card Info</li>
  
  
      </ul>
    </nav>
  </header>