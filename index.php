<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>L'Oeno'tech</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://kit.fontawesome.com/00085c2723.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/navbar.css">
</head>

<body>
    <?php include 'vue/navbar.php'?>
    <header class="container-fluid d-flex align-items-center">

        <div class="container d-flex flex-column align-items-between" style="height:40%;">
            <h1 class="text-light text-center ">Une large selection de <span class="text-danger">vins</span> et <span
                    class="text-warning">champagne</span> !</h1>
            <div class="searchbar" id="search1">
                <input class="search_input1 w-75" type="text" name="" placeholder="Rechercher...">
                <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
            </div>
            <a href="" class="btn btn-warning w-50 mx-auto">S'inscrire</a>
        </div>
    </header>

    <section id="selection" class="pt-5">
        <div class="container-fluid">
            <div class="d-flex flex-row align-items-center justify-content-center">
            <div class="hr col-1 mr-3"></div>
                <h2 class="text-center ">Notre selection pour vous</h2>
            <div class="hr col-1 ml-3 "></div>
            </div>
            <div class="hr col-2 mx-auto mt-3"></div>
        </div>
        <div class="p-3 mt-4" style="background-color:#fed136">
        <h4 class="text-center">Les nouveautés</h4>
        <div class="carousel mt-3 mb-5 " data-flickity='{ "wrapAround": true }'>
            <div class="carousel-cell shadow">
                <img class="carrousel-img img-fluid mt-3"
                    src="http://static.xo-vin.fr/media/catalog/product/i/m/img_2d_0002_large_493.png">
                <h6 class="text-light text-center mt-3">Bon vin sa mere</h6>
                <p class="text-center">16 euros</p>
            </div>
            <div class="carousel-cell shadow">
                <img class="carrousel-img img-fluid mt-3"
                    src="http://static.xo-vin.fr/media/catalog/product/i/m/img_2d_0002_large_493.png">
                <h6 class="text-light text-center mt-3">Bon vin sa mere</h6>
                <p class="text-center">16 euros</p>
            </div>
            <div class="carousel-cell shadow">
                <img class="carrousel-img img-fluid mt-3"
                    src="http://static.xo-vin.fr/media/catalog/product/i/m/img_2d_0002_large_493.png">
                <h6 class="text-light text-center mt-3">Bon vin sa mere</h6>
                <p class="text-center">16 euros</p>
            </div>
            <div class="carousel-cell shadow">
                <img class="carrousel-img img-fluid mt-3"
                    src="http://static.xo-vin.fr/media/catalog/product/i/m/img_2d_0002_large_493.png">
                <h6 class="text-light text-center mt-3">Bon vin sa mere</h6>
                <p class="text-center">16 euros</p>
            </div>
            <div class="carousel-cell shadow">
                <img class="carrousel-img img-fluid mt-3"
                    src="http://static.xo-vin.fr/media/catalog/product/i/m/img_2d_0002_large_493.png">
                <h6 class="text-light text-center mt-3">Bon vin sa mere</h6>
                <p class="text-center">16 euros</p>
            </div>
            <div class="carousel-cell shadow">
                <img class="carrousel-img img-fluid mt-3"
                    src="http://static.xo-vin.fr/media/catalog/product/i/m/img_2d_0002_large_493.png">
                <h6 class="text-light text-center mt-3">Bon vin sa mere</h6>
                <p class="text-center">16 euros</p>
            </div>

        </div>
        </div>
        
        <div class="p-3 " style="background-color:#e0e0e0">
        <h4 class="text-center ">Les Pépites</h4>
        <div class="carousel mt-3 mb-5" data-flickity='{ "wrapAround": true }'>
            <div class="carousel-cell">
                <img class="carrousel-img img-fluid mt-3"
                    src="http://static.xo-vin.fr/media/catalog/product/i/m/img_2d_0002_large_493.png">
                <h6 class="text-light text-center mt-3">Bon vin sa mere</h6>
                <p class="text-center">16 euros</p>
            </div>
            <div class="carousel-cell">
                <img class="carrousel-img img-fluid mt-3"
                    src="http://static.xo-vin.fr/media/catalog/product/i/m/img_2d_0002_large_493.png">
                <h6 class="text-light text-center mt-3">Bon vin sa mere</h6>
                <p class="text-center">16 euros</p>
            </div>
            <div class="carousel-cell">
                <img class="carrousel-img img-fluid mt-3"
                    src="http://static.xo-vin.fr/media/catalog/product/i/m/img_2d_0002_large_493.png">
                <h6 class="text-light text-center mt-3">Bon vin sa mere</h6>
                <p class="text-center">16 euros</p>
            </div>
            <div class="carousel-cell">
                <img class="carrousel-img img-fluid mt-3"
                    src="http://static.xo-vin.fr/media/catalog/product/i/m/img_2d_0002_large_493.png">
                <h6 class="text-light text-center mt-3">Bon vin sa mere</h6>
                <p class="text-center">16 euros</p>
            </div>
            <div class="carousel-cell">
                <img class="carrousel-img img-fluid mt-3"
                    src="http://static.xo-vin.fr/media/catalog/product/i/m/img_2d_0002_large_493.png">
                <h6 class="text-light text-center mt-3">Bon vin sa mere</h6>
                <p class="text-center">16 euros</p>
            </div>
            <div class="carousel-cell">
                <img class="carrousel-img img-fluid mt-3"
                    src="http://static.xo-vin.fr/media/catalog/product/i/m/img_2d_0002_large_493.png">
                <h6 class="text-light text-center mt-3">Bon vin sa mere</h6>
                <p class="text-center">16 euros</p>
            </div>

        </div>
        </div>
    </section>
   
    <section id="about" class="py-5">
    <div class="container-fluid">
            <div class="d-flex flex-row align-items-center justify-content-center">
            <div class="hr col-1 mr-3 bg-light"></div>
                <h2 class="text-center text-light">A propos</h2>
            <div class="hr col-1 ml-3 bg-light"></div>
            </div>
            <div class="hr col-2 mx-auto mt-3 bg-light"></div>
        </div>
        <div class="container d-flex flex-row flex-wrap-reverse mt-5">
        <img class="img-fluid mb-3 col-lg-5 offset-lg-1 col-md-5 col-sm-6 offset-sm-3 h-50 rounded-circle" id="img-about"
                src="https://scontent-cdt1-1.xx.fbcdn.net/v/t1.0-9/53218897_840153649665672_4262537810424102912_n.jpg?_nc_cat=107&_nc_ht=scontent-cdt1-1.xx&oh=a0b79ac95e0134072591fbbfd465cead&oe=5D8E3D6E">
            <div class=" shadow-lg col-lg-6 col-md-6 col-sm-12 txt ">
                <h4 class="text-light navbar-brand  mb-4 mt-5">L'oenoteck c'est :</h4>
                <p class=" text-light  ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                    interdum arcu et ipsum placerat fringilla. Pellentesque ut magna vulputate, euismod erat in, laoreet
                    ante. Integer massa odio, pulvinar nec elementum at,
                    convallis eget libero. Suspendisse eu tincidunt odio. Phasellus sodales non nunc vitae aliquet.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam interdum arcu et ipsum placerat
                    fringilla. Pellentesque ut magna vulputate, euismod erat in, laoreet ante. Integer massa odio,
                    pulvinar nec elementum at,
                    convallis eget libero. Suspendisse eu tincidunt odio. Phasellus sodales non nunc vitae aliquet.</p>
            </div>
            
        </div>
    </section>

    <?php include 'vue/footer.php' ?>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="app.js"></script>
</body>

</html>
