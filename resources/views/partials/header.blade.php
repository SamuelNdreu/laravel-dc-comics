<header class="container">
    <nav class="d-flex align-items-center">
      <img src="{{ Vite::asset('resources/assets/images/dc-logo.png')}}" alt="DC logo">
      <ul class="d-flex ms-auto mb-0">
        <li class="list-group-item nav-ink ps-4 {{Route::currentRouteName() == 'admin.index' ? 'text-primary' : ''}}">Home</li>
        <li class="list-group-item nav-ink ps-4 {{Route::currentRouteName() == 'admin.show' ? 'text-primary' : ''}}">Card Info</li>
  
  
      </ul>
    </nav>
  </header>