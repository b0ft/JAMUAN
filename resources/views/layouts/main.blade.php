<!doctype html>
<html lang="en">

@include('partials.tag_head')

<body>
    @include('partials.spinner')
    @include('partials.navbar')
    <div class="container-xxl bg-white p-0 mb-0">
        @yield('landing')
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>
        @include('partials.footer')
    </div>
    {{-- <div class="container my-4">
        @yield('content')
    </div> --}}
    @include('partials.tag_script')
</body>

</html>
