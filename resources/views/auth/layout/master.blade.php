<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', config('app.name'))</title>
    <link rel="shortcut icon" href="{{ url('public/assets/images/favicon.ico') }}">
    <link href="{{ url('public/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet"
          type="text/css"/>
    <link href="{{ url('public/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ url('public/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css"/>
    @stack('css')
</head>
<body>
<div class="authentication-bg min-vh-100">
    <div class="bg-overlay bg-white"></div>
    <div class="container-fluid">
        <div class="d-flex flex-column min-vh-100 px-3 pt-4">
           @yield('content')
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center text-muted p-4">
                        <p class="mb-0">&copy;
                            <script>document.write(new Date().getFullYear())</script>
                            {{ config('app.name') }}.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- JAVASCRIPT -->
<script src="{{ url('public/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ url('public/assets/libs/metismenujs/metismenujs.min.js') }}"></script>
<script src="{{ url('public/assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ url('public/assets/libs/feather-icons/feather.min.js') }}"></script>
@stack('script')
<script>
    (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>

</body>
</html>
