<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/search.css">
    <title>Search a Yacht</title>
</head>

<body>
    <?php include "../partials/header.php" ?>

    <section id="search">

        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d89706.76982394973!2d7.300690123196698!3d43.679771648505245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1618305286232!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

        <div id="bar" class="parent grid gap-xs">

            <div class="col-12 col-6@sm col-3@md col-3@lg"><input type="text" placeholder="&#xf041; Destination" style="font-family:Bad Script, FontAwesome"></div>
            <div class="col-12 col-6@sm col-3@md col-2@lg"><input type="date"></div>
            <div class="col-12 col-6@sm col-3@md col-2@lg"><input type="date"></div>
            <div class="col-12 col-6@sm col-3@md col-2@lg"><select type="text" placeholder="Taille du batoz">
                    <option value="">5 à 10 m</option>
                    <option value="">10 à 20 m</option>
                    <option value="">20 à 100 m</option>
                </select>
            </div>
            <div class="col-12 col-6@sm col-3@md col-3@lg"><button>Search</button></div>

        </div>

        <div id="results">
            <h3>Search Results</h3>
            <p style="text-decoration: underline;margin-bottom:1.5%;">or see every available yachts</p>

            <div id="filter" class="parent grid gap-xs">

                <div class="col-3">
                    <h5 style="color:orange;">Filter la sélection</h5>
                </div>
                <div class="col-2">
                    <p>Taille du bateau</p>
                </div>
                <div class="col-2">
                    <p>Point d'achats</p>
                </div>
                <div class="col-2">
                    <p>Pers. à bord</p>
                </div>
                <div class="col-2">
                    <p>Disponiblité <input type="checkbox"></p>
                </div>

            </div>

            <div id="gallerie">

                <div class="parent grid gap-xs flex">

                    <div class="col-12 col-9@md">
                        <div class="parent grid gap-xs">

                            <?php for ($i = 0; $i < 12; $i++) {

                                echo   '<div id="boat" class="col-12 col-6@sm col-4@md col-3@lg">
                                    <img src="../assets/img/yacht.jpg" alt="">
                                    <div id="desc">
                                        <h5>Le Falluz - 68 mètres</h5>
                                        <h6><span style="color: limegreen;">Disponible ✓</span><span style="float: right;color:black;">Minimum 7 jours</span></h6>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt, voluptas vel? Blanditiis, molestias esse, porro corporis suscipit.</p>
                                        <h6><span style="padding-right: 10%;"><i class="fa fa-users" aria-hidden="true"></i> 12 </span><span><i class="fa fa-anchor" aria-hidden="true"></i> Port d\'attache</span><a href="/YachtShare/page/produit.php"><button>Book now</button></a></h6>
                                    </div>
                                </div>';
                            } ?>


                        </div>
                    </div>

                    <div class="sidebar col-12 col-3@md">

                        <div style="height:101.1%;" class="parent grid gap-xs">
                            <div id="sidebar" class="col-12">
                            </div>

                            <div id="sidebar" class="col-12">
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div id="carrou">

            <div>

                <h3>Les actualités du Yacht <span>Voir toute l'actualité</span></h3>

            </div>

            <div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>

                <div class="gallery-cell">

                    <div id="flemme" class="parent grid gap-xs flex">

                        <?php for ($i = 0; $i < 3; $i++) {

                            echo    '<div id="portos" class="col-12 col-6@sm col-4@md col-4@lg">
                                    <img src="../assets/img/leportsalut.png" alt="">
                                        <div id="desc">
                                            <h3>Blebleble tutututu</h3>
                                            <h5>Le 12/32/3245 par Machin</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla impedit perferendis quis eos dolorem! Voluptate voluptatem, voluptatibus..</p>
                                            <button>Read more</button>
                                        </div>
                                </div>';
                        } ?>

                    </div>

                </div>

                <div class="gallery-cell">

                    <div id="flemme" class="parent grid gap-xs flex">

                        <?php for ($i = 0; $i < 3; $i++) {

                            echo    '<div id="portos" class="col-12 col-6@sm col-4@md col-4@lg">
                                    <img src="../assets/img/leportsalut.png" alt="">
                                        <div id="desc">
                                            <h3>Blebleble tutututu</h3>
                                            <h5>Le 12/32/3245 par Machin</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla impedit perferendis quis eos dolorem! Voluptate voluptatem, voluptatibus..</p>
                                            <button>Read more</button>
                                        </div>
                                </div>';
                        } ?>

                    </div>

                </div>

            </div>     

        </div>

    </section>

    <?php include "../partials/footer.php" ?>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js"></script>

</html>