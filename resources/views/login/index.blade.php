<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('login_style.css') }}">
    <title>Login</title>
</head>

<body>
    <h1>Login Page</h1>
    <form method="POST" action="/login">
        @csrf
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" name="email" />
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" name="password" />
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-10 offset-sm-2"></div>
        </div>
        <br />
        <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
</body>
</html>