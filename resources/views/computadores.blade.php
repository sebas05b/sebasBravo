<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computadores</title>
    <link rel="icon" href="imagenes/logo.png" type="image/png">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
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
        .carousel-inner img {
            max-height: 1000px; /* Ajusta la altura máxima según tus necesidades */
            object-fit: cover; /* Asegura que la imagen cubra el área del carrusel sin distorsionarse */
        }
        
        /* Estilo para los botones de navegación */
        .carousel-control-prev, .carousel-control-next {
            width: 5%; /* Ajusta el ancho de los botones */
            opacity: 5; /* Ajusta la opacidad de los botones */
        }

        .cards{
            width: 80%;
            margin-left: 200px;
            margin-top: 30px;
        }

        
       
    </style>

    
</head>
<body>
@include('include.navbar')
<h1 class="titulo">Computadores</h1>
    <main>
            <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="imagenes/pc1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="imagenes/pc2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="imagenes/pc3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    </main>

    <section class="cards">
            <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
            <div class="card">
            <img src="imagenes/pc1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Asus sb1200</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa incidunt quaerat, sed, iure itaque iste molestias ex rerum doloremque, voluptate aliquid a? Explicabo eum excepturi cumque possimus officiis quos veniam.</p>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
            <img src="imagenes/pc2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Asus rx123</h5>
                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo expedita pariatur necessitatibus molestias doloremque sapiente, ex laboriosam reprehenderit provident impedit consequuntur sit fugiat repudiandae, fuga asperiores maiores enim aliquid porro!</p>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
            <img src="imagenes/pc3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Asus 321R</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi cupiditate minus, deleniti enim maxime iusto magni nam porro nisi, sunt hic error eum nobis veniam dolores consequatur. Voluptatibus, earum saepe!</p>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
            <img src="imagenes/pcdell.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Dell Optiplex 7010</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, eum labore error reprehenderit pariatur inventore quia asperiores harum maxime numquam cum at doloribus consequatur dolor non quod est corrupti alias!</p>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
            <img src="imagenes/pchp.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">HP ProDesk 600</h5>
                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis officia quaerat cupiditate optio rerum explicabo magnam minus molestias totam veniam consectetur architecto quia quas deserunt, impedit excepturi ipsam, neque ipsa?</p>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
            <img src="imagenes/pclenovo.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Lenovo SFF</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, facilis. Libero maiores est autem porro accusamus unde animi eum provident consequatur molestiae, obcaecati nemo nihil quod saepe alias velit aliquid.</p>
            </div>
            </div>
        </div>

        </div>
    </section>
    @include('include.footer');
    
</body>
</html>

