<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>iMob - Login</title>
    <link href="data:image/x-icon;base64,AAABAAEAEBAAAAEAIABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAABILAAASCwAAAAAAAAAAAAAAAAAAAAAAAAAAAAEAAAABAAAAAgAAAAcAAAATAAAAFQAAABUAAAASAAAABgAAAAEAAAABAAAAAQAAAAAAAAAAAAAAAAAAAAIAAAAxAAAASgAAAEgAAABhAAAAsQAAALQAAAC0AAAAsAAAAFcAAABIAAAASgAAACoAAAACAAAAAAAAAAAAAAAEAAAAbgAAAKUAAABNAAAASwAAAE0AAABNAAAATQAAAE0AAABLAAAATwAAALQAAABWAAAAAgAAAAAAAAAAAAAAAgAAAGMAAACVAAAABwAAAAEAAAABAAAAAQAAAAEAAAABAAAAAQAAAAoAAACtAAAASAAAAAEAAAAAAAAAAAAAAAIAAABjAAAAlgAAAAYAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAJAAAArgAAAEgAAAABAAAAAAAAAAAAAAACAAAAYwAAAJYAAAAGAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACgAAAK4AAABIAAAAAQAAAAAAAAAAAAAAAgAAAGMAAACXAAAABgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAoAAACvAAAASAAAAAEAAAAAAAAAAAAAAAIAAABjAAAAmAAAAAYAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAKAAAAsAAAAEgAAAABAAAAAAAAAAAAAAAGAAAAZgAAAJkAAAAGAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACgAAALAAAABMAAAABQAAAAAAAAADAAAAaAAAAKIAAACRAAAABwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAoAAACkAAAAmwAAAFUAAAACAAAAAgAAADcAAADJAAAAuwAAADAAAAAGAAAAAAAAAAAAAAAAAAAAAAAAAAcAAAA4AAAAxQAAAL0AAAAtAAAAAQAAAAAAAAADAAAAGQAAAIcAAADfAAAAawAAABIAAAACAAAAAgAAABQAAAB1AAAA3gAAAHgAAAAVAAAAAgAAAAAAAAAAAAAAAAAAAAEAAAAKAAAARgAAAM8AAAC0AAAAMwAAADgAAAC9AAAA1QAAADsAAAAIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMAAAAcAAAAkAAAANcAAADdAAAApwAAAJoAAAAIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQAAAAoAAAA0AAAALwAAAD0AAAB8AAAABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQAAAAEAAAAGAAAACQAAAAEAAAAAAAAAAAAAAAAAAAAAgAEAAIABAACAAQAAgAEAAIfhAACH4QAAh+EAAIfhAAAH4AAAA8AAAAGAAAAAAAAAwAMAAOAHAAD4DwAA/A8AAA==" rel="icon" type="image/x-icon">

    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body background="others/background.jpg">
<div class="login-page">
    <div class="form">
        <h5 class="my-0 mr-md-auto font-weight-normal"><a href="#"><img src="others/house.png" height="50px"></a></h5>

        <form class="register-form">
            <input type="text" placeholder="usuario"/>
            <input type="password" placeholder="senha"/>
            <input type="text" placeholder="email"/>
            <button>Criar conta</button>
            <p class="message">Já é registrado? <a href="#">Entrar</a></p>
        </form>
        <form class="login-form">
            <input type="text" placeholder="usuario"/>
            <input type="password" placeholder="senha"/>
            <button type="button" onclick="location.href = 'pages/home.html';">Entrar</button>

            <p class="message">Não é registrado? <a href="#">Crie uma conta</a></p>
        </form>
        <hr>
        <button type="button" onclick="location.href = 'pages/home.html';">Entrar sem conta</button>
    </div>

</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/login.js"></script>
</body>
</html>