<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>{{ $judul }}</title>
    <link rel="stylesheet" href="{{ asset('Login-Template/style.css') }}">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="bg-img">
        <div class="content">
            <header>Reset Password</header>
            <form action="{{ route('password.update') }}" method="post">
                @csrf

                <input type="hidden" name="email" value="{{ request('email') }}">
                <input type="hidden" name="token" value="{{ request('token') }}">
                <div class="field space">
                    <span class="fa fa-lock"></span>
                    <input type="password" class="pass-key" required placeholder="Password" name="password">
                    <span class="show">SHOW</span>
                </div>
                <div class="field space" style="margin-bottom: 17px;">
                    <span class="fa fa-lock"></span>
                    <input type="password" class="pass-key" required placeholder="Confirmation Password" name="password_confirmation">
                    <span class="show">SHOW</span>
                </div>
                <div class="field" style="margin-bottom: 10px;">
                    <input type="submit" value="Reset">
                </div>
            </form>
        </div>
    </div>

    <script>
        const pass_field = document.querySelector('.pass-key');
        const showBtn = document.querySelector('.show');
        showBtn.addEventListener('click', function() {
            if (pass_field.type === "password") {
                pass_field.type = "text";
                showBtn.textContent = "HIDE";
                showBtn.style.color = "#3498db";
            } else {
                pass_field.type = "password";
                showBtn.textContent = "SHOW";
                showBtn.style.color = "#222";
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>