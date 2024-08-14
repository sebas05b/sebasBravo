<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="icon" href="imagenes/logo2.png" type="image/png">
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
        }
        .titulo{
            text-align: center;
            color: black;
            margin-top: 20px;
            font-size: 32px;
            font-weight: bold;
        }
        main {
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        section {
            margin-bottom: 40px;
        }
        
        section h2 {
            margin-top: 20px;
            font-size: 26px;
        }
        
        section p {
            margin: 10px 0;
            font-size: 22px;
        }
        .titulo-formulario{
            padding-top: 17px;
            text-align: center;
        }
        .contacto{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .contacto form{
            display: flex;
            flex-direction: column;
            gap: 18px; /*espacio entre los elementos del formulario*/
            padding: 25px;
            margin-bottom: 20px;
            height: 520px;
            max-width: 400px;
            width: 100%;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.9);
        }
        .contacto .nombre{
            margin-top: 16px;
        }
        
        .contacto form label {
            margin-left: 12px;
            font-weight: bold;
            font-size: 18px;
        }
        
        .contacto form input, 
        .contacto form textarea {
            margin-left: 12px;
            width: 90%;
            font-size: 16px;
            padding: 10px;
            border: 1px solid #555555;
            border-radius: 4px;
        }
        .contacto form textarea{
            width: 90%;
            height: 100px;
            resize: none;
        }
        
        .contacto form button {
            margin-left: 12px;
            width: 96%;
            background-color: lightblue;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;/*para que cambie a la manito*/
            font-size: 16px;
        }
        
        .contacto form button:hover {
            background-color: purple;
        }
        
        section ul {
            list-style: none;
            padding: 0;
            font-size: 19px;
        }
        section ul li {
            margin-bottom: 10px;
            
        }
        
        
    </style>
</head>
<body>
@include('include.navbar')
<h1 class=titulo>Contacto</h1>
    <main>
        <section>
            <p>Si tienes alguna pregunta, sugerencia o simplemente quieres ponerte en contacto con nosotros, no dudes en utilizar el siguiente formulario o los datos de contacto proporcionados.</p>
            
            <h2 class="titulo-formulario">Formulario de Contacto</h2>
            <div class="contacto">
                <form action="#">
                    <label class="nombre" for="nombre">Nombre:</label>
                    <input type="text" id="nombre" placeholder="Sebastian Bravo" required>

                    <label class="edad" for="edad">Edad:</label>
                    <input type="number" id="edad" required>

                    
                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" placeholder="sebastianbravo0511@gmail.com" required>
                    
                    <label for="mensaje">Mensaje:</label>
                    <textarea id="mensaje" placeholder="Hola..." required></textarea>
                    
                    <button type="submit">Enviar</button>
                </form>
            </div>
        
        </section>
    </main>
</body>
@include('include.footer');
</html>
