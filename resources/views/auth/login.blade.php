<!DOCTYPE html>
<html lang="en">

<head>

    <title>Ablepro v8.0 bootstrap admin template by Phoenixcoded</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">




</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
    <div class="auth-content">
        <div class="card">
            <div class="row align-items-center text-center">
                <div class="col-md-12">
                    <form method="POST" action="{{ route('authlogin') }}"> 
                        @csrf
                        <div class="card-body">
                            <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" class="img-fluid mb-4">
                            <h4 class="mb-3 f-w-400">Login</h4>
                            @if (session('status'))
                            <div class="alert alert-danger">
                                {{ session('status')}}
                            </div>
                            @endif
                            <div class="form-group mb-3">
                                <label class="floating-label" for="username" >Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="" required="">
                                @error('username')
                                    <div class="alert alert-danger">
                                        {{ $messages }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-4">
                                <label class="floating-label" for="Password">Password</label>
                                <input type="password" class="form-control" id="Password" name="password" placeholder="">
                                @error('password')
                                    <div class="alert alert-danger">
                                        {{ $messages }}
                                    </div>
                                @enderror
                            </div>
                            <button class="btn btn-block btn-primary mb-4" type="submit" >Login</button>
                            <p class="mb-0 text-muted">Don’t have an account? <a href="{{ route('register')}}"
                                    class="f-w-400">Register</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="{{ asset('assets/js/vendor-all.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/ripple.js') }}"></script>
<script src="{{ asset('assets/js/pcoded.min.js') }}"></script>



</body>

</html>