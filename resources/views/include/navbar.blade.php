<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        header {
            background: lightblue;
            padding: 10px 0;
        }
    
        nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
            width: 100%;
            box-sizing: border-box;
        }
        .logo{
            display: flex;
            align-items: center;
        }
        .logo img {
            margin-left: 100px;
            width: 80px;
        }
        h1{
            color: rgb(255, 255, 255);
            margin: 0 12px;
        }
        nav ul {
            list-style: none;
            display: flex;
            margin: 0;
            margin-right: 100px;
            padding: 0;
        }
        nav ul li {
            margin-left: 20px;
            
        }
        nav ul li a {
            text-decoration: none;
            color: rgb(255, 255, 255);
            font-weight: bold;

        }
        nav ul li a:hover{
            color: purple;
        }

    </style>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img src="imagenes/logo.png" alt="Logo">
            </div>
            <ul>
                <li><a href="/">Móviles</a></li>
                <li><a href="/computadores">Computadores</a></li>
                <li><a href="/televisores">Televisores</a></li>
                <li><a href="/contacto">Contacto</a></li>
            </ul>
           
        </nav>
    </header>
    
</body>
</html>
