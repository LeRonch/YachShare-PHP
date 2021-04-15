<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/produit.css">
    <title>Produit</title>
</head>

<body>

    <?php include "../partials/header.php" ?>

    <div id="tof">

        <div class="gallery js-flickity"  data-flickity-options='{ "wrapAround": true }'>

            <div class="gallery-cell"><img src="../assets/img/yacht.jpg" alt=""></div>
            <div class="gallery-cell"><img src="../assets/img/falluz.jpg" alt=""></div>

        </div>

    </div>

    <section id="specs">

        <h2>Le Falluz - 68 mètres</h2>

        <hr>

        <h3 id="h3port">Port Salut <br><span>68° 68' Est 004° 80' Sud</span></h3>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus unde, natus, ipsa perspiciatis totam aut non placeat dolor nisi vel voluptatibus. Pariatur dolor sed fugiat fuga, autem temporibus beatae iure! Lorem ipsum dolor sit, amet consectetur adipisicing elit. A assumenda fugiat nostrum, consectetur fugit iusto ad tempore. Maxime soluta accusantium mollitia, impedit iste molestias dolorem alias autem doloremque veniam? Deserunt! Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut culpa id sed architecto? Quia culpa sunt similique ad amet excepturi error fugit in, aspernatur pariatur, minus corporis cumque at illum. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi adipisci aliquam ut nesciunt, ipsa porro impedit voluptatum magnam vel et dolore quam explicabo repudiandae repellat. Assumenda eum necessitatibus soluta laudantium!</p>

        <div id="tablos" class="parent grid gap-xs flex">

            <div class="col-8">

                <div class="tab">

                    <button class="tablinks active" onclick="openTab(event, 'Options')">Options</button>
                    <button class="tablinks" onclick="openTab(event, 'Disponibilites')">Disponibilités</button>
                    <button class="tablinks" onclick="openTab(event, 'Equipage')">Équipage</button>
                    <button class="tablinks" onclick="openTab(event, 'Galerie')">Galerie Photos</button>

                </div>

                <!-- Tab content -->
                <div id="Options" class="tabcontent tab-content-active">

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, commodi officiis cum est iure et itaque non aliquid dignissimos ullam, repellendus harum sint dolores facilis blanditiis assumenda, officia at quas! Lorem, ipsum dolor sit amet consectetur adipisicing elit. <br><br> Amet suscipit quasi itaque maiores alias, quam nobis veniam. Dolore numquam voluptate accusamus omnis rem repudiandae et quisquam, autem a dolor vel! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim, assumenda non? Sequi debitis asperiores doloribus dolor recusandae nesciunt eveniet quis quod assumenda dolorem unde facere ?</p>

                    <div class="parent grid gap-xs flex">

                        <div id="chiffre" class="col-2"><i class="fa fa-users" aria-hidden="true"></i> 24</div>
                        <div id="chiffre" class="col-2"><i class="fa fa-bed" aria-hidden="true"></i> 6</div>
                        <div id="chiffre" class="col-2"><i class="fa fa-cutlery" aria-hidden="true"></i> 3</div>
                        <div id="chiffre" class="col-2"><i class="fa fa-anchor" aria-hidden="true"></i> 4</div>
                        <div id="chiffre" class="col-2"><i class="fa fa-television" aria-hidden="true"></i> 7</div>
                        <div id="chiffre" class="col-2"><i class="fa fa-life-ring" aria-hidden="true"></i> 12</div>

                    </div>

                    <div class="parent grid gap-xs flex">

                        <div id="bruh" class="col-6">

                            <h3 id="lesplus">Les <span>+</span></h3>

                            <ul>

                                <li>
                                    <p>Lorem ipsum dolor sit.</p>
                                </li>
                                <li>
                                    <p>Lorem ipsum dolor sit.</p>
                                </li>
                                <li>
                                    <p>Lorem ipsum dolor sit.</p>
                                </li>
                                <li>
                                    <p>Lorem ipsum dolor sit.</p>
                                </li>

                            </ul>

                        </div>

                        <div id="frame" class="col-6">

                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6656.660282333746!2d4.402273486826632!3d45.45407140808695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1618401058832!5m2!1sfr!2sfr" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                        </div>

                    </div>

                </div>

                <div id="Disponibilites" class="tabcontent">

                    <div class="parent grid gap-xs flex">

                        <div id="calendar" class="col-12 col-12@sm col-6@md col-6@lg">

                            <iframe src="https://calendar.google.com/calendar/embed?src=patchworkyt%40gmail.com&ctz=Europe%2FParis" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>

                        </div>

                        <div id="calendar" class="col-12 col-12@sm col-4@md col-6@lg">

                            <iframe src="https://calendar.google.com/calendar/embed?src=patchworkyt%40gmail.com&ctz=Europe%2FParis" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>

                        </div>

                    </div>

                    <div id="verif" class="parent grid gap-xs">

                        <div class="col-12 col-6@sm col-4@md col-3@lg">
                            <h3>Vérifier la disponibilité :</h3>
                        </div>
                        <div class="col-12 col-6@sm col-4@md col-3@lg"><input type="date"></div>
                        <div class="col-12 col-6@sm col-4@md col-3@lg"><input type="date"></div>
                        <div class="col-12 col-6@sm col-4@md col-3@lg"><button>Vérifier</button></div>

                    </div>

                </div>

                <div id="Equipage" class="tabcontent">

                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam ea minima excepturi perferendis. Ab ut consequuntur id voluptatibus ipsum voluptatum consectetur dicta illo dolorum cumque eos, ex doloremque adipisci obcaecati. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore voluptatem dolores delectus non veritatis illo, expedita dolore veniam et aperiam repellat.</p>

                    <div class="parent grid gap-xs">

                        <?php for ($i = 0; $i < 4; $i++) {

                            echo  '<div id="crew" class="col-12 col-6@sm col-4@md col-3@lg">

                                    <img src="../assets/img/captain.jpg" alt="">
                                    <h3>Captain Iglo</h3>
                                    <h4>Capitaine, Alcoolique, Environ 143 ans</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae tempore obcaecati aliquam sapiente !</p>

                                    </div>';
                        } ?>

                    </div>

                </div>

                <div id="Galerie" class="tabcontent">

                    <div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>

                        <div class="gallery-cell"><img src="../assets/img/yacht.jpg" alt=""></div>

                        <div class="gallery-cell"><img src="../assets/img/falluz.jpg" alt=""></div>

                    </div>

                </div>
            </div>

            <div id="recap" class="col-4">

                <div>

                    <h2>Récapitulatif de la demande</h2>

                    <h3>Le Falluz</h3>
                    <h4>68 mètres</h4>
                    <h5>Equipage + infos sup.</h5>

                    <select name="arrive" id="">
                        <option value="Arrivé">Arrivée</option>
                    </select><br>
                    <select name="depart" id="">
                        <option value="Départ">Départ</option>
                    </select><br>
                    <select name="perso" id="">
                        <option value="Nbr de personnes">Nbr de personnes</option>
                    </select>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum nemo eum suscipit minus sequi tenetur non enim ex, asperiores dicta omnis possimus deserunt beatae perferendis? Nulla exercitationem nisi tenetur eligendi.</p>

                </div>

                <button>BOOK NOW</button>

            </div>

        </div>

        <div id="carrou">

            <div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>

                <div class="gallery-cell">

                    <div class="parent grid gap-xs">

                        <?php for ($i = 0; $i < 3; $i++) {

                            echo   '<div id="boat" class="col-12 col-6@sm col-4@md col-4@lg">
                                        <img src="../assets/img/yacht.jpg" alt="">
                                        <div id="desc">
                                            <h5>Le Falluz - 68 mètres</h5>
                                            <h6><span style="color: limegreen;">Disponible ✓</span><span style="float: right;color:black;">Minimum 7 jours</span></h6>
                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt, voluptas vel? Blanditiis, molestias esse, porro corporis suscipit.</p>
                                            <h6><span style="padding-right: 3%;"><i class="fa fa-users" aria-hidden="true"></i> 12 </span><span><i class="fa fa-anchor" aria-hidden="true"></i> Port d\'attache</span><a href="/YachtShare/page/produit.php"><button id="button2">Book now</button></a></h6>
                                        </div>
                                    </div>';
                        } ?>

                    </div>

                </div>

                <div class="gallery-cell">

                    <div class="parent grid gap-xs">

                        <?php for ($i = 0; $i < 3; $i++) {

                            echo   '<div id="boat" class="col-12 col-6@sm col-4@md col-4@lg">
                                        <img src="../assets/img/yacht.jpg" alt="">
                                        <div id="desc">
                                            <h5>Le Falluz - 68 mètres</h5>
                                            <h6><span style="color: limegreen;">Disponible ✓</span><span style="float: right;color:black;">Minimum 7 jours</span></h6>
                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt, voluptas vel? Blanditiis, molestias esse, porro corporis suscipit.</p>
                                            <h6><span style="padding-right: 3%;"><i class="fa fa-users" aria-hidden="true"></i> 12 </span><span><i class="fa fa-anchor" aria-hidden="true"></i> Port d\'attache</span><a href="/YachtShare/page/produit.php"><button id="button2">Book now</button></a></h6>
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


<script src="../assets/js/tabs.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js"></script>

</html>