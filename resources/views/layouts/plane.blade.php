<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@section('htmlheader')
    @include('layouts.partials.htmlheader')
@show

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">DC COMICS</a>
         
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('comics.index')}}">Comics</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('comics.create')}}">Create</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    @yield('body')
</body>

</html>

