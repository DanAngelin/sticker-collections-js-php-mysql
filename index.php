<?php include "includes/header.php"; ?>

        <div class="row">
            <div class="col-md-6 col-sm-12 info d-flex">
                <h2>My Personal Collection</h2>
                <p>Stickers and Cards Collection Album<br>Open to SWAP! <a href="#contact">Contact me</a></p>
                <ul>
                    <li><a href="#chipicao">#Chipicao</a></li>
                    <li><a href="#panini">#Panini</a></li>
                    <li><a href="#topps">#Topps</a></li>
                    <li><a href="#kaufland">#Kaufland</a></li>
                    <li><a href="#carrefour">#Carrefour</a></li>
                    <li><a href="#profi">#Profi</a></li>
                    <li><a href="#pombar">#Pom-Bar</a></li>
                </ul>
            </div>
            <div class="col-md-6 info_image d-flex justify-content-center">
                <img src="img/home.png" alt="">
            </div>
        </div>
    </section>


    <?php

        $query = "SELECT * FROM album ";

        $albums_query = mysqli_query($conn, $query);

        if($albums_query) {
            echo "Connected";
        } else {
            die("QUERY FAILED " . mysqli_error($conn));
        }

    ?>

<!-- Carrefour -->
    <section class="carrefour" id="carrefour">
        <div class="item">
            <div class="album_item">
                <div class="album">
                    <img src="img/angrybirds2.png" alt="">
                    <h3>Angry Birds 2</h3>
                </div>
                <img src="img/carrefour.png" class="logo_colectie">
            </div>
            <div class="progress mt-3">
                <div class="progress-bar bar_angry_birds_2" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="cards">
                <div class="need" id="need_angry_birds_2">
                    <p></p>
                </div>
                <div class="offer" id="offer_angry_birds_2">
                    <p></p> 
                </div>
            </div>
        </div>
    </section>

    <!-- PROFI -->

    <section class="profi" id="profi">
        <div class="item">
            <div class="album_item">
                <div class="album">
                    <img src="img/ProfiWowZoo.jpg" alt="">
                    <h3>PROFI Wow Zoo</h3>
                </div>
                <img src="img/profi.png" class="logo_colectie">
            </div>
            <div class="progress mt-3">
                <div class="progress-bar bar_wow_zoo" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="cards">
                <div class="need" id="need_wow_zoo">
                    <p></p>
                </div>
                <div class="offer" id="offer_wow_zoo">
                    <p></p> 
                </div>
            </div>
        </div>
    </section>


    <!-- Pom-Bar -->

    <section class="pombar" id="pombar">
        <div class="item">
            <div class="album_item">
                <div class="album">
                    <img src="img/pombar_minions.jpg" alt="">
                    <h3>POMBAR “COLECTIONEAZA CELE 5 STICKERE MINIONS!”</h3>
                </div>
                <img src="img/pombar.png" class="logo_colectie">
            </div>
            <div class="progress mt-3">
                <div class="progress-bar bar_pombar_minions" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="cards">
                <div class="need" id="need_pombar_minions">
                    <p></p>
                </div>
                <div class="offer" id="offer_pombar_minions">
                    <p></p> 
                </div>
            </div>
        </div>
    </section>

<?php include "includes/footer.php"; ?>