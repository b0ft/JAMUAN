<!doctype html>
<html lang="en">

@include('partials.tag_head')

<body>
    @include('partials.navbar')
    <div class="container my-4">
        @yield('content')
    </div>
    @include('partials.tag_script')
</body>

</html>
