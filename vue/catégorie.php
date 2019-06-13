<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="iedge">
    <title>L'Oeno'tech - Catégories</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://kit.fontawesome.com/00085c2723.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/categorie.css">
    <script src="../public/js/categorie.js"></script>
</head>

<body>
    <?php include 'navbar.php' ?>
    <div class="container-fluid py-5">
        <div class="d-flex flex-row align-items-center justify-content-center">
            <div class="hr col-1 mr-3"></div>
            <h2 class="text-center ">Catégories</h2>
            <div class="hr col-1 ml-3 "></div>
        </div>
        <div class="hr col-2 mx-auto mt-3"></div>
    </div>
    </div>
    <div class="row">
        <div id="vins" class="col-lg-4 col-sm-12 col-12 cate ">
            <div class="filter">
                <a class="cat_link h-100 w-100 d-flex align-items-center justify-content-center" href="#"><span class="cat_text">Nos vins</span></a>
            </div>
        </div>
        <div id="champ" class="col-lg-4 col-sm-12 col-12 cate">
            <div class="filter">
                <a class="cat_link h-100 w-100 d-flex align-items-center justify-content-center" href="#"><span class="cat_text">Nos
                    champagne</span></a>
            </div>
        </div>
            <div id="fort" class="col-lg-4 col-sm-12 col-12 cate">
                <div class="filter">
                    <a class="cat_link h-100 w-100 d-flex align-items-center justify-content-center" href="#"><span class="cat_text">Nos
                        spiritueux</span></a>
                </div>
            </div>
        </div> 
    </div>
    <div class="container-fluid py-5">
        <div class="d-flex flex-row align-items-center justify-content-center">
            <div class="hr col-1 mr-3"></div>
            <h2 class="text-center ">Par région</h2>
            <div class="hr col-1 ml-3 "></div>
        </div>
        <div class="hr col-2 mx-auto mt-3"></div>
    </div>
    <div class="d-flex flex-wrap flex-row">
        <div class="col-lg-3 col-sm-6 col-6 cate">

        </div>
    </div>
</body>

</html>
