<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>{{ $judul }}</title>
    <link rel="stylesheet" href="{{ asset('Login-Template/style.css') }}">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
    <div class="bg-img">
        <div class="content">
            <header>Register</header>
            <form action="/postregisteruser" method="post">
                @csrf

                <div class="field" style="margin-bottom: 17px;">
                    <span class="fa fa-user"></span>
                    <input type="text" required placeholder="Username" name="name">
                </div>
                <div class="field">
                    <span class="fa fa-user"></span>
                    <input type="text" required placeholder="Email" name="email">
                </div>
                <div class="field space">
                    <span class="fa fa-lock"></span>
                    <input type="password" class="pass-key" required placeholder="Password" name="password">
                    <span class="show">SHOW</span>
                </div>
                <div class="pass">
                    <a href="#">Forgot Password?</a>
                </div>
                <div class="field" style="margin-bottom: 10px;">
                    <input type="submit" value="Daftar">
                </div>
            </form>
            <div class="signup">Sudah Punya Akun ?
                <a href="/login">Login Sekarang</a>
            </div>
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


</body>

</html>