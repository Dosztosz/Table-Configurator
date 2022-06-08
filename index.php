<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css?ver=1">
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

<?php
    $lang = $_GET["lang"];
    if ($lang == "pl")
    {
    $background= "Bez Tła";
    $tabletop= "Kolor Blatu";
    $leg = "Wygląd Nóg";
    $legtype = "Noga typu pająk";
    $spider = "Pająk";
    $lotus = "Lotus";
    $beech = "Buk";
    $marble = "Marmur";
    $oak = "Dąb";
    $black = "Czarny";
    $white = "Biały";
    $grey = "Szary";
    $golden = "Złoty";
    $specification = "Specyfikacja";
    $spec_fold = "Wymiar Rozłożony";
    $spec_unfold = "Wymiar Złożony";
    $spec_tabletop_color = "Kolory Blatu";
    $spec_material = "Buk, Dąb, Marmur";
    $spec_material_whole = "Stal - MDF";
    $spec_visual = "Wizualna grubość blatu";
    $spec_leg = "Kolor Nóg";
    $spec_leg_color = "Czarny, Biały, Antracyt, Złoty";
    }
    elseif ($lang == "de")
    {
    $background= "Keine Hintergründe";
    $tabletop= "Farbe der Tischplatte";
    $leg = "Aussehen der Beine";
    $legtype = "Spider-leg";
    $spider = "Spider";
    $lotus = "Lotus";
    $beech = "Buche";
    $marble = "Marmor";
    $oak = "Eiche";
    $black = "Schwarz";
    $white = "Weiß";
    $grey = "Anthrazit";
    $golden = "Golden";
    $specification = "Informationen";
    $spec_fold = "Abmessungen (gefaltet):";
    $spec_unfold = "Abmessungen (ungefaltet):";
    $spec_tabletop_color = "Farbe der Tischplatte:";
    $spec_material = "Buche, Eiche, Marmor";
    $spec_material_whole = "Stahl - MDF";
    $spec_visual = "Sichtbare Höhe der Tischplatte";
    $spec_leg = "Farbe der Beine";
    $spec_leg_color = "Schwarz, Weiß, Athrazit, Golden";
    }
    elseif ($lang == "en")
    {
    $background= "No Background";
    $tabletop= "Color of Tabletop";
    $leg = "Type of Legs";
    $legtype = "Spider-leg";
    $spider = "Spider";
    $lotus = "Lotus";
    $beech = "Beech";
    $marble = "Marble";
    $oak = "Oak";
    $black = "Black";
    $white = "White";
    $grey = "Anthracite";
    $golden = "Golden";
    $specification = "Informations";
    $spec_fold = "Dimensions(fold):";
    $spec_unfold = "Dimensions(unFold):";
    $spec_tabletop_color = "Tabletop colour:";
    $spec_material = "Beech, Oak, Marble";
    $spec_material_whole = "Steel - MDF";
    $spec_visual = "Visual height of tabletop";
    $spec_leg = "Leg color";
    $spec_leg_color = "Black, White, Athracite, Golden";
    }
?>
<title>Table Configurator</title>

<body>
<div class="kontener">
    <nav class="adnotations-container">
        <ul class="adnotations">
            <a href="?lang=pl"><li><img src="svg/pl.svg"></li></a>
            <li>|</li>
            <a href="?lang=de"><li><img src="svg/de.svg"></li></a>
            <li>|</li>
            <a href="?lang=en"><li><img src="svg/fr.svg"></li></a>
        </ul>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://www.magneticmobel.pl/">Magnetic Mobel</a>
        </div>
    </nav>
    <div class="row background">
        <div class="col-8">
            <div class="bg" id="background"> </div>
            <div class="ttops" id="tabletop"> </div>
            <div class="tbases" id="nogi"> </div>
        </div>
        <div class="col-4">
            <div class="odstep"></div>
            <div class="etykieta" onclick="zmiana_ustawienia('white')"><?php echo $background; ?></div>
            <div class="etykieta" onclick="zmiana_ustawienia('mockup')">MOCKUP</div><br>
            <!--Makieta-->
            <div id="makieta">
                <h3 class="tytul">Color of Tabletop</h3>
                <div class="space">
                    <div class="etykieta" onclick="tabletop(1)"><img class="drewno" src="min/drewno/drewno.jpg">
                        <p>Beech</p>
                    </div>
                    <div class="etykieta" onclick="tabletop(2)"><img class="drewno" src="min/drewno/marmur.jpg">
                        <p>Marble</p>
                    </div>
                    <div class="etykieta" onclick="tabletop(3)"><img class="drewno" src="min/drewno/dab.jpg">
                        <p>Oak</p>
                    </div>
                </div>
                <br>
                <h3 class="tytul">Leg design</h3>
                <button class="accordion">Spider type legs</button>
                <div class="panel">
                    <div class="row">
                        <h4>Lotus</h4>
                        <div onclick="legs(1)" class="col miniatura blok czarny">
                            <img src="min/lotus/lotus_8x4_czarny.jpg">
                            <div class="overlay">
                                <div class="text">Black</div>
                            </div>
                        </div>
                        <div onclick="legs(2)" class="col blok miniatura">
                            <img src="min/lotus/lotus_8x4_bialy.jpg">
                            <div class="overlay">
                                <div class="text">White</div>
                            </div>
                        </div>
                        <div onclick="legs(3)" class="col blok miniatura">
                            <img src="min/lotus/lotus_8x4_szary.jpg">
                            <div class="overlay">
                                <div class="text">Grey</div>
                            </div>
                        </div>
                        <div onclick="legs(4)" class="col blok miniatura">
                            <img src="min/lotus/lotus_8x4_zloty.jpg">
                            <div class="overlay">
                                <div class="text">Golden</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <h4>Pająk</h4>
                        <div onclick="legs(5)" class="col blok miniatura">
                            <img src="min/pajak/pajak_czarny.jpg">
                            <div class="overlay">
                                <div class="text">Black</div>
                            </div>
                        </div>
                        <div onclick="legs(6)" class="col blok miniatura">
                            <img src="min/pajak/pajak_bialy.jpg">
                            <div class="overlay">
                                <div class="text">White</div>
                            </div>
                        </div>
                        <div onclick="legs(7)" class="col blok miniatura">
                            <img src="min/pajak/pajak_szary.jpg">
                            <div class="overlay">
                                <div class="text">Grey</div>
                            </div>
                        </div>
                        <div onclick="legs(8)" class="col blok miniatura">
                            <img src="min/pajak/pajak_zloty.jpg">
                            <div class="overlay">
                                <div class="text">Golden</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <h4>Atal</h4>
                        <div onclick="legs(17)" class="col blok miniatura">
                            <img src="min/atal/atal_czarny.jpg">
                            <div class="overlay">
                                <div class="text">Black</div>
                            </div>
                        </div>
                        <div onclick="legs(18)" class="col blok miniatura">
                            <img src="min/atal/atal_bialy.jpg">
                            <div class="overlay">
                                <div class="text">Grey</div>
                            </div>
                        </div>
                        <div onclick="legs(19)" class="col blok miniatura">
                            <img src="min/atal/atal_szary.jpg">
                            <div class="overlay">
                                <div class="text">Szary</div>
                            </div>
                        </div>
                        <div onclick="legs(20)" class="col blok miniatura">
                            <img src="min/atal/atal_zloty.jpg">
                            <div class="overlay">
                                <div class="text">Golden</div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="accordion">X shaped legs</button>
                <div class="panel">
                    <div class="row">
                        <h4>Nogi 8x4</h4>
                        <div onclick="legs(9)" class="col blok miniatura">
                            <img src="min/x/8x4/x_czarny.jpg">
                            <div class="overlay">
                                <div class="text">Black</div>
                            </div>
                        </div>
                        <div onclick="legs(10)" class="col blok miniatura">
                            <img src="min/x/8x4/x_bialy.jpg">
                            <div class="overlay">
                                <div class="text">Grey</div>
                            </div>
                        </div>
                        <div onclick="legs(11)" class="col blok miniatura">
                            <img src="min/x/8x4/x_szary.jpg">
                            <div class="overlay">
                                <div class="text">Szary</div>
                            </div>
                        </div>
                        <div onclick="legs(12)" class="col blok miniatura">
                            <img src="min/x/8x4/x_zloty.jpg">
                            <div class="overlay">
                                <div class="text">Golden</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <h4>Nogi z widocznym spawem</h4>
                        <div onclick="legs(13)" class="col blok miniatura">
                            <img src="min/x/bez spaw/bez_spaw_czarny.jpg">
                            <div class="overlay">
                                <div class="text">Black</div>
                            </div>
                        </div>
                        <div onclick="legs(14)" class="col blok miniatura">
                            <img src="min/x/bez spaw/bez_spaw_bialy.jpg">
                            <div class="overlay">
                                <div class="text">White</div>
                            </div>
                        </div>
                        <div onclick="legs(15)" class="col blok miniatura">
                            <img src="min/x/bez spaw/bez_spaw_szary.jpg">
                            <div class="overlay">
                                <div class="text">Grey</div>
                            </div>
                        </div>
                        <div onclick="legs(16)" class="col blok miniatura">
                            <img src="min/x/bez spaw/bez_spaw_zloty.jpg">
                            <div class="overlay">
                                <div class="text">Golden</div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="accordion">Square type legs</button>
                <div class="panel">
                    <div class="row">
                        <h4>Trapez 8x2</h4>
                        <div onclick="legs(21)" class="col blok miniatura">
                            <img src="min/trapez/8x2/trapez_8x2_czarny.jpg">
                            <div class="overlay">
                                <div class="text">Black</div>
                            </div>
                        </div>
                        <div onclick="legs(22)" class="col blok miniatura">
                            <img src="min/trapez/8x2/trapez_8x2_bialy.jpg">
                            <div class="overlay">
                                <div class="text">White</div>
                            </div>
                        </div>
                        <div onclick="legs(23)" class="col blok miniatura">
                            <img src="min/trapez/8x2/trapez_8x2_szary.jpg">
                            <div class="overlay">
                                <div class="text">Grey</div>
                            </div>
                        </div>
                        <div onclick="legs(24)" class="col blok miniatura">
                            <img src="min/trapez/8x2/trapez_8x2_zloty.jpg">
                            <div class="overlay">
                                <div class="text">Golden</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <h4>Ramy 8x2</h4>
                        <div onclick="legs(25)" class="col blok miniatura">
                            <img src="min/trapez/ramy/ramy_czarny.jpg">
                            <div class="overlay">
                                <div class="text">Black</div>
                            </div>
                        </div>
                        <div onclick="legs(26)" class="col blok miniatura">
                            <img src="min/trapez/ramy/ramy_bialy.jpg">
                            <div class="overlay">
                                <div class="text">White</div>
                            </div>
                        </div>
                        <div onclick="legs(27)" class="col blok miniatura">
                            <img src="min/trapez/ramy/ramy_szary.jpg">
                            <div class="overlay">
                                <div class="text">Grey</div>
                            </div>
                        </div>
                        <div onclick="legs(28)" class="col blok miniatura">
                            <img src="min/trapez/ramy/ramy_zloty.jpg">
                            <div class="overlay">
                                <div class="text">Golden</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <h4>Trapez Ofix</h4>
                        <div onclick="legs(29)" class="col blok miniatura">
                            <img src="min/trapez/ofix/ofix_czarny.jpg">
                            <div class="overlay">
                                <div class="text">Black</div>
                            </div>
                        </div>
                        <div onclick="legs(30)" class="col blok miniatura">
                            <img src="min/trapez/ofix/ofix_bialy.jpg">
                            <div class="overlay">
                                <div class="text">White</div>
                            </div>
                        </div>
                        <div onclick="legs(31)" class="col blok miniatura">
                            <img src="min/trapez/ofix/ofix_szary.jpg">
                            <div class="overlay">
                                <div class="text">Grey</div>
                            </div>
                        </div>
                        <div onclick="legs(32)" class="col blok miniatura">
                            <img src="min/trapez/ofix/ofix_zloty.jpg">
                            <div class="overlay">
                                <div class="text">Golden</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Without Background-->
            <div id="white">
                <h3 class="tytul"><?php echo $tabletop; ?></h3>
                <div class="space">
                    <div class="etykieta" onclick="tabletop('beech')"><img class="drewno" src="min/drewno/drewno.jpg">
                        <p><?php echo $beech; ?></p>
                    </div>
                    <div class="etykieta" onclick="tabletop('marble')"><img class="drewno" src="min/drewno/marmur.jpg">
                        <p><?php echo $marble; ?></p>
                    </div>
                    <div class="etykieta" onclick="tabletop('oak')"><img class="drewno" src="min/drewno/dab.jpg">
                        <p><?php echo $oak; ?></p>
                    </div>
                </div>
                <br>
                <h3 class="tytul"><?php echo $leg; ?></h3>
                <button class="accordion"><?php echo $legtype; ?></button>
                <div class="panel">
                    <div class="row">
                        <h4><?php echo $spider; ?></h4>
                        <div onclick="legs('pajak_czarny')" class="col blok miniatura">
                            <img src="min/pajak/pajak_czarny.jpg">
                            <div class="overlay">
                                <div class="text"><?php echo $black; ?></div>
                            </div>
                        </div>
                        <div onclick="legs('pajak_bialy')" class="col blok miniatura">
                            <img src="min/pajak/pajak_bialy.jpg">
                            <div class="overlay">
                                <div class="text"><?php echo $white; ?></div>
                            </div>
                        </div>
                        <div onclick="legs('pajak_szary')" class="col blok miniatura">
                            <img src="min/pajak/pajak_szary.jpg">
                            <div class="overlay">
                                <div class="text"><?php echo $grey; ?></div>
                            </div>
                        </div>
                        <div onclick="legs('pajak_zloty')" class="col blok miniatura">
                            <img src="min/pajak/pajak_zloty.jpg">
                            <div class="overlay">
                                <div class="text"><?php echo $golden; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <h4><?php echo $lotus; ?></h4>
                        <div onclick="legs('lotus_czarny')" class="col miniatura blok czarny">
                            <img src="min/lotus/lotus_8x4_czarny.jpg">
                            <div class="overlay">
                                <div class="text"><?php echo $black; ?></div>
                            </div>
                        </div>
                        <div onclick="legs('lotus_bialy')" class="col blok miniatura">
                            <img src="min/lotus/lotus_8x4_bialy.jpg">
                            <div class="overlay">
                                <div class="text"><?php echo $white; ?></div>
                            </div>
                        </div>
                        <div onclick="legs('lotus_szary')" class="col blok miniatura">
                            <img src="min/lotus/lotus_8x4_szary.jpg">
                            <div class="overlay">
                                <div class="text"><?php echo $grey; ?></div>
                            </div>
                        </div>
                        <div onclick="legs('lotus_zloty')" class="col blok miniatura">
                            <img src="min/lotus/lotus_8x4_zloty.jpg">
                            <div class="overlay">
                                <div class="text"><?php echo $golden; ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tables desktop">
        <h4><?php echo $specification ?></h4>
        <div class="t-section">
            <div class="t-row">
                <div class="column">
                    <span><?php echo $spec_fold ?></span>
                </div>
                <div class="column">
                    <span>140x90x79 cm</span>
                </div>
            </div>
            <div class="t-row">
                <div class="column">
                    <span><?php echo $spec_material_whole ?></span>
                </div>
                <div class="column">
                    <span>Steel - MDF</span>
                </div>
            </div>
        </div>
        <div class="t-section">
            <div class="t-row">
                <div class="column">
                    <span><?php echo $spec_unfold; ?></span>
                </div>
                <div class="column">
                    <span>210x90x79 cm </span>
                </div>
            </div>
            <div class="t-row">
                <div class="column">
                    <span><?php echo $spec_visual; ?></span>
                </div>
                <div class="column">
                    <span>8 cm</span>
                </div>
            </div>
        </div>
        <div class="t-section">
            <div class="t-row">
                <div class="column">
                    <span><?php echo $spec_tabletop_color ?></span>
                </div>
                <div class="column">
                    <span><?php echo $spec_material ?></span>
                </div>
            </div>
            <div class="t-row">
                <div class="column">
                    <span><?php echo $spec_leg ?></span>
                </div>
                <div class="column">
                    <span><?php echo $spec_leg_color; ?></span>
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