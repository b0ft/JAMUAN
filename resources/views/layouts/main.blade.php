<!doctype html>
<html lang="en">

@include('partials.tag_head')

<body>
    @include('partials.spinner')
    @include('partials.navbar')
    <div class="container-xxl bg-white p-0">
        @yield('home')
    </div>
    <div class="container my-4">
        @yield('content')
    </div>
    @include('partials.footer')
    @include('partials.tag_script')
</body>

</html>
