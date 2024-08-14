<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moviles</title>
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
            margin-top: 0px;
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
    @include('include.navbar');
    <h1 class="titulo">Móviles</h1>
    <main>
            <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="imagenes/samsung.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="imagenes/iphone.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="imagenes/xiaomi.jpg" class="d-block w-100" alt="...">
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
            <img src="imagenes/google.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Google Pixel 8</h5>
                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni fugiat modi assumenda atque, totam dolores exercitationem vitae, sequi harum sed saepe hic adipisci ipsum non porro incidunt quibusdam laborum a?</p>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
            <img src="imagenes/asus.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Asus RogPhone</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quasi officiis numquam incidunt tempora dicta, molestias ipsam nulla ipsa ea minima excepturi! Beatae ipsum dignissimos amet dolorum quis minima possimus?</p>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
            <img src="imagenes/iphonee.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Iphone 15 Pro Max</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, atque! Omnis quaerat consequuntur repellendus neque autem rerum facilis ducimus, excepturi voluptatum, fugit quis, natus dicta ex quasi ullam deleniti veritatis.</p>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
            <img src="imagenes/samsung1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Samsung s24 Ultra</h5>
                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad repudiandae tempore officiis commodi veniam quidem, eaque soluta dolorem magnam doloremque explicabo delectus aperiam, iusto quisquam, neque corporis porro atque sint?</p>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
            <img src="imagenes/huawei.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Huawei p50 Pro</h5>
                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui omnis facere blanditiis iure, illo tenetur magnam unde natus consectetur! Impedit laboriosam vel corrupti iure placeat molestias provident odio dolores ut.</p>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
            <img src="imagenes/oppo.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Oppo Find x2 Pro</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam assumenda repellendus natus in neque id recusandae inventore magnam quam! Dignissimos, perferendis accusamus! Beatae assumenda repellat minima velit nostrum sunt tempora.</p>
            </div>
            </div>
        </div>

        </div>
    </section>
    
</body>

@include('include.footer');

</html>
