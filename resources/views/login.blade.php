<!doctype html>
<html lang="en">
<!--
    CREATED BY
    RIZKAN FIRMANSYAH -> github.com/rizkanfirmansyah
    PLEASE DONT REMOVE THIS
-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 vh-100 d-none d-xl-block d-lg-block" id="side-1">
                <div class="brand">
                    <h3 class="logo m-4">Your Logo</h3>
                </div>
                <div class="px-5 mx-4">
                    <div class="header text-center text-xl-start text-lg-start">
                        <h1 class="title">Sign in to</h1>
                        <span>Your Application</span>
                    </div>
                    <div class="body">
                        <p>If you don’t have an account register</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-12 col-lg-6" id="side-2">
                <div class="d-flex justify-content-center align-items-center align-items-xl-start flex-column">
                    <div class="header text-center text-xl-start text-lg-start float-left">
                        <h1>Sign In</h1>
                    </div>
                    <div class="col-8">
                        <form action="{{ route('login.submit') }}" method="POST" class="mt-5">
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                            @csrf
                            <input type="text" placeholder="Username" id="Username" name="username"
                                class="form-control" aria-describedby="passwordHelpBlock">
                            <div class="input-group mb-3 mt-3">
                                <input type="password" class="form-control" name="password" placeholder="Password"
                                    aria-label="Password" id="password" aria-describedby="basic-addon2">
                                <span class="input-group-text" id="show-hide"><i class="fas fa-eye"></i></span>
                            </div>

                            <div class="text-end mt-4">
                                <span class="text-small text-muted mt-4 pt-4">Forgot Password?</span>
                            </div>
                            <div class="d-grid gap-2 mt-5">
                                <button class="btn btn-primary" type="submit">Login</button>
                            </div>
                            <div class="text-center mt-5 ">
                                <small class="text-muted">or continue with</small>
                            </div>
                        </form>
                        <div class="images">
                            <div class="row justify-content-center mt-4">
                                <div class="col-xl-1 col-2 me-3">
                                    <img src="/assets/img/apple.png" alt="">
                                </div>
                                <div class="col-xl-1 col-2 me-3">
                                    <img src="/assets/img/Facebook.png" alt="">
                                </div>
                                <div class="col-xl-1 col-2 me-3">
                                    <img src="/assets/img/google.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    <script>
        let password = document.getElementById('password')
        let button = document.getElementById('show-hide')

        button.addEventListener('click', function() {
            if (password.type === "password") {
                button.innerHTML = "<i class='fas fa-eye-slash'></i>"
                password.type = "text"
            } else {
                button.innerHTML = "<i class='fas fa-eye'></i>"
                password.type = "password"
            }
        })
    </script>
</body>

</html>
