<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('login_style.css') }}" />
    <title>Document</title>
</head>

<body>
    <div class = "main-body">
        <div class = "header">
            <h1>Login Page</h1>
        </div>

        <form method = "$GET" action="/login">
        @csrf
        <div class = "form-container">
            <div class = "form-group">
                <label for="inputEmail" class = "form-label">Email</label>
                <input type="email" class = "form-control" id = "inputEmail" name = "email" placeholder = "123@gmail.com" required/>
            </div>
            
            <div class = "form-group">
                <label for="inputPassword" class = "form-label">Password</label>
                <input type="password" class = "form-control" id = "inputPassword" name = "password" placeholder = "******" required />
            </div>

            <div class = "center-button">
                <button type = "submit" class = "btn">Sign in</button>

            </div>
        </div>
        </form>

    </div>
    
</body>
</html>

<style>
.main-body{
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20x;
    min-height: 100vh;
    background: #f4f4f9;
    box-sizing: border-box;
}

.header{
    text-align: center;
    margin-bottom: 20px;
}

.form-container{
    
    width: 1000px;
    max-width: 500px;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    box-shadow: 0 4px 8px rgba (0, 0, 0, 0.1);
    box-sizing: border-box;
}

.form-group{
    margin-bottom: 15px;
}

.form-label{
    display: block;
    margin-bottom: 5px;
    color: #333;
    font-weight: bold;
}

.form-control{
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    transition: border-color 0.3s;
}

.form-control: focus{
    outline: none;
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 225, 0.5)
}

.center-button{
    text-align: center;
}

.btn{
    background: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 4px;
    cursor: pointer;
    transition: background 0.3s;
}

.btn:hover{
    background: #0056b3;
}

/* Responsive Design */
@media (max-width: 600px){
    .form-container{
        width: 90%;
        padding: 15px;
    }
}
</style>