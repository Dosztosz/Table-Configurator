<?php
    header("Content-Type: text/html;charset=UTF-8");
    ?>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css?ver=2">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/style.css?version=1" rel="stylesheet">
    <script src="assets/js/script.js"></script>
    <link rel="shortcut icon" href="favicon.ico">
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<title>Kreator Magnetic Mobel</title>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="https://www.magneticmobel.pl/"><img src="logo.png" height="75px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="https://www.magneticmobel.pl/">Strona Główna</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="https://www.magneticmobel.pl/pl/p/Stol-Rozkladany-Avia-z-podstawa-Pajak/190">Stół Rozkładany Avia</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" href="http://127.0.0.1/kreator/">Kreator Avia</a>
            </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
<!--Wersja Desktop-->
<div class="row background">
    <div class="col-8">
        <div class="content">
            <div class="tlo" id="tlo"> </div>
            <div class="blaty" id="blaty"> </div>
            <div class="nogi" id="nogi"> </div>
        </div>
    </div>
    <div class="col-4 ramka">
        <div class="ramka_gora">
            <h3>Menu</h3>
        </div>
        <div class="etykieta" onclick="tlo()">Tło ON/OFF</div><br>
        <h3 class="tytul">Wybierz Kolor Blatu</h3>
        <div class="space">
            <div class="etykieta" onclick="blat(1)"><img class="drewno" src="miniatury/drewno/drewno.jpg">
                <p>Buk</p>
            </div>
            <div class="etykieta" onclick="blat(2)"><img class="drewno" src="miniatury/drewno/marmur.jpg">
                <p>Marmur</p>
            </div>
            <div class="etykieta" onclick="blat(3)"><img class="drewno" src="miniatury/drewno/dab.jpg">
                <p>Dąb</p>
            </div>
        </div>
        <br>
        <h3 class="tytul">Wybierz Model Nogi</h3>
        <button class="accordion">Nogi Typu Pająk</button>
        <div class="panel">
            <div class="row">
                <h4>Lotus</h4>
                <div onclick="zmiana(1)" class="col miniatura blok czarny">
                    <img src="miniatury/lotus/lotus_8x4_czarny.jpg">
                    <div class="overlay">
                        <div class="text">Czarny</div>
                    </div>
                </div>
                <div onclick="zmiana(2)" class="col blok miniatura">
                    <img src="miniatury/lotus/lotus_8x4_bialy.jpg">
                    <div class="overlay">
                        <div class="text">Biały</div>
                    </div>
                </div>
                <div onclick="zmiana(3)" class="col blok miniatura">
                    <img src="miniatury/lotus/lotus_8x4_szary.jpg">
                    <div class="overlay">
                        <div class="text">Antracyt</div>
                    </div>
                </div>
                <div onclick="zmiana(4)" class="col blok miniatura">
                    <img src="miniatury/lotus/lotus_8x4_zloty.jpg">
                    <div class="overlay">
                        <div class="text">Złoty</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <h4>Pająk</h4>
                <div onclick="zmiana(5)" class="col blok miniatura">
                    <img src="miniatury/pajak/pajak_czarny.jpg">
                    <div class="overlay">
                        <div class="text">Czarny</div>
                    </div>
                </div>
                <div onclick="zmiana(6)" class="col blok miniatura">
                    <img src="miniatury/pajak/pajak_bialy.jpg">
                    <div class="overlay">
                        <div class="text">Biały</div>
                    </div>
                </div>
                <div onclick="zmiana(7)" class="col blok miniatura">
                    <img src="miniatury/pajak/pajak_szary.jpg">
                    <div class="overlay">
                        <div class="text">Szary</div>
                    </div>
                </div>
                <div onclick="zmiana(8)" class="col blok miniatura">
                    <img src="miniatury/pajak/pajak_zloty.jpg">
                    <div class="overlay">
                        <div class="text">Złoty</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <h4>Atal</h4>
                <div onclick="zmiana(17)" class="col blok miniatura">
                    <img src="miniatury/atal/atal_czarny.jpg">
                    <div class="overlay">
                        <div class="text">Czarny</div>
                    </div>
                </div>
                <div onclick="zmiana(18)" class="col blok miniatura">
                    <img src="miniatury/atal/atal_bialy.jpg">
                    <div class="overlay">
                        <div class="text">Biały</div>
                    </div>
                </div>
                <div onclick="zmiana(19)" class="col blok miniatura">
                    <img src="miniatury/atal/atal_szary.jpg">
                    <div class="overlay">
                        <div class="text">Szary</div>
                    </div>
                </div>
                <div onclick="zmiana(20)" class="col blok miniatura">
                    <img src="miniatury/atal/atal_zloty.jpg">
                    <div class="overlay">
                        <div class="text">Złoty</div>
                    </div>
                </div>
            </div>
        </div>
        <button class="accordion">Nogi w Kształcie X</button>
        <div class="panel">
            <div class="row">
                <h4>Nogi 8x4</h4>
                <div onclick="zmiana(9)" class="col blok miniatura">
                    <img src="miniatury/x/8x4/x_czarny.jpg">
                    <div class="overlay">
                        <div class="text">Czarny</div>
                    </div>
                </div>
                <div onclick="zmiana(10)" class="col blok miniatura">
                    <img src="miniatury/x/8x4/x_bialy.jpg">
                    <div class="overlay">
                        <div class="text">Biały</div>
                    </div>
                </div>
                <div onclick="zmiana(11)" class="col blok miniatura">
                    <img src="miniatury/x/8x4/x_szary.jpg">
                    <div class="overlay">
                        <div class="text">Szary</div>
                    </div>
                </div>
                <div onclick="zmiana(12)" class="col blok miniatura">
                    <img src="miniatury/x/8x4/x_zloty.jpg">
                    <div class="overlay">
                        <div class="text">Złoty</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <h4>Nogi z widocznym spawem</h4>
                <div onclick="zmiana(13)" class="col blok miniatura">
                    <img src="miniatury/x/bez spaw/bez_spaw_czarny.jpg">
                    <div class="overlay">
                        <div class="text">Czarny</div>
                    </div>
                </div>
                <div onclick="zmiana(14)" class="col blok miniatura">
                    <img src="miniatury/x/bez spaw/bez_spaw_bialy.jpg">
                    <div class="overlay">
                        <div class="text">Biały</div>
                    </div>
                </div>
                <div onclick="zmiana(15)" class="col blok miniatura">
                    <img src="miniatury/x/bez spaw/bez_spaw_szary.jpg">
                    <div class="overlay">
                        <div class="text">Szary</div>
                    </div>
                </div>
                <div onclick="zmiana(16)" class="col blok miniatura">
                    <img src="miniatury/x/bez spaw/bez_spaw_zloty.jpg">
                    <div class="overlay">
                        <div class="text">Złoty</div>
                    </div>
                </div>
            </div>
        </div>
        <button class="accordion">Nogi Typu Trapez</button>
        <div class="panel">
            <div class="row">
                <h4>Trapez 8x2</h4>
                <div onclick="zmiana(21)" class="col blok miniatura">
                    <img src="miniatury/trapez/8x2/trapez_8x2_czarny.jpg">
                    <div class="overlay">
                        <div class="text">Czarny</div>
                    </div>
                </div>
                <div onclick="zmiana(22)" class="col blok miniatura">
                    <img src="miniatury/trapez/8x2/trapez_8x2_bialy.jpg">
                    <div class="overlay">
                        <div class="text">Biały</div>
                    </div>
                </div>
                <div onclick="zmiana(23)" class="col blok miniatura">
                    <img src="miniatury/trapez/8x2/trapez_8x2_szary.jpg">
                    <div class="overlay">
                        <div class="text">Szary</div>
                    </div>
                </div>
                <div onclick="zmiana(24)" class="col blok miniatura">
                    <img src="miniatury/trapez/8x2/trapez_8x2_zloty.jpg">
                    <div class="overlay">
                        <div class="text">Złoty</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <h4>Ramy 8x2</h4>
                <div onclick="zmiana(25)" class="col blok miniatura">
                    <img src="miniatury/trapez/ramy/ramy_czarny.jpg">
                    <div class="overlay">
                        <div class="text">Czarny</div>
                    </div>
                </div>
                <div onclick="zmiana(26)" class="col blok miniatura">
                    <img src="miniatury/trapez/ramy/ramy_bialy.jpg">
                    <div class="overlay">
                        <div class="text">Biały</div>
                    </div>
                </div>
                <div onclick="zmiana(27)" class="col blok miniatura">
                    <img src="miniatury/trapez/ramy/ramy_szary.jpg">
                    <div class="overlay">
                        <div class="text">Szary</div>
                    </div>
                </div>
                <div onclick="zmiana(28)" class="col blok miniatura">
                    <img src="miniatury/trapez/ramy/ramy_zloty.jpg">
                    <div class="overlay">
                        <div class="text">Złoty</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <h4>Trapez Ofix</h4>
                <div onclick="zmiana(29)" class="col blok miniatura">
                    <img src="miniatury/trapez/ofix/ofix_czarny.jpg">
                    <div class="overlay">
                        <div class="text">Czarny</div>
                    </div>
                </div>
                <div onclick="zmiana(30)" class="col blok miniatura">
                    <img src="miniatury/trapez/ofix/ofix_bialy.jpg">
                    <div class="overlay">
                        <div class="text">Biały</div>
                    </div>
                </div>
                <div onclick="zmiana(31)" class="col blok miniatura">
                    <img src="miniatury/trapez/ofix/ofix_szary.jpg">
                    <div class="overlay">
                        <div class="text">Szary</div>
                    </div>
                </div>
                <div onclick="zmiana(32)" class="col blok miniatura">
                    <img src="miniatury/trapez/ofix/ofix_zloty.jpg">
                    <div class="overlay">
                        <div class="text">Złoty</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        }
    </script>
    <script src="code.js"></script>

</body>

</html>