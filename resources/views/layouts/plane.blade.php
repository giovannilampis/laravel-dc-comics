<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@section('htmlheader')
    @include('layouts.partials.htmlheader')
@show

<body>
    @yield('body')
</body>

</html>

