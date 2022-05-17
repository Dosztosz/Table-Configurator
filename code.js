var kebsik = 0;

function legs(noga) {
    if (noga == 1) {
        document.getElementById('nogi').style.backgroundImage = "url('makieta/lotus/lotus-czarny.png')";
    } else
    if (noga == 2) {
        document.getElementById('nogi').style.backgroundImage = "url('makieta/lotus/lotus-bialy.png')";
    } else
    if (noga == 3) {
        document.getElementById('nogi').style.backgroundImage = "url('makieta/lotus/lotus-szary.png')";
    } else
    if (noga == 4) {
        document.getElementById('nogi').style.backgroundImage = "url('makieta/lotus/lotus-zloty.png')";
    }
    if (noga == 5) {
        document.getElementById('nogi').style.backgroundImage = "url('makieta/pajak/pajak_czarny.png')";
    }
    if (noga == 6) {
        document.getElementById('nogi').style.backgroundImage = "url('makieta/pajak/pajak_bialy.png')";
    }
    if (noga == 7) {
        document.getElementById('nogi').style.backgroundImage = "url('makieta/pajak/pajak_szary.png')";
    }
    if (noga == 8) {
        document.getElementById('nogi').style.backgroundImage = "url('makieta/pajak/pajak_zloty.png')";
    }
    if (noga == 9) {
        document.getElementById('nogi').style.backgroundImage = "url('makieta/x/x-8x4-czarny.png')";
    }
    if (noga == 10) {
        document.getElementById('nogi').style.backgroundImage = "url('makieta/x/x-8x4-bialy.png')";
    }
    if (noga == 11) {
        document.getElementById('nogi').style.backgroundImage = "url('makieta/x/x-8x4-szary.png')";
    }
    if (noga == 12) {
        document.getElementById('nogi').style.backgroundImage = "url('makieta/x/x-8x4-zloty.png')";
    }
    if (noga == 13) {
        document.getElementById('nogi').style.backgroundImage = "url('makieta/x/x-spaw-czarny.png')";
    }
    if (noga == 14) {
        document.getElementById('nogi').style.backgroundImage = "url('makieta/x/x-spaw-bialy.png')";
    }
    if (noga == 15) {
        document.getElementById('nogi').style.backgroundImage = "url('makieta/x/x-spaw-szary.png')";
    }
    if (noga == 16) {
        document.getElementById('nogi').style.backgroundImage = "url('makieta/x/x-spaw-zloty.png')";
    }
    if (noga == 17) {
        document.getElementById('nogi').style.backgroundImage = "url('makieta/atal/atal-czarny.png')";
    }
    if (noga == 18) {
        document.getElementById('nogi').style.backgroundImage = "url('makieta/atal/atal-bialy.png')";
    }
    if (noga == 19) {
        document.getElementById('nogi').style.backgroundImage = "url('makieta/atal/atal-szary.png')";
    }
    if (noga == 20) {
        document.getElementById('nogi').style.backgroundImage = "url('makieta/atal/atal-zloty.png')";
    }
    if (noga == 21) {
        document.getElementById('nogi').style.backgroundImage = "url('makieta/trapez/atal-czarny.png')";
    }
    if (noga == 22) {
        document.getElementById('nogi').style.backgroundImage = "url('makieta/trapez/atal-bialy.png')";
    }
    if (noga == 23) {
        document.getElementById('nogi').style.backgroundImage = "url('makieta/trapez/atal-szary.png')";
    }
    if (noga == 24) {
        document.getElementById('nogi').style.backgroundImage = "url('makieta/trapez/atal-zloty.png')";
    }
    if (noga == 25) {
        document.getElementById('nogi').style.backgroundImage = "url('makieta/trapez/rama-czarny.png')";
    }
    if (noga == 26) {
        document.getElementById('nogi').style.backgroundImage = "url('makieta/trapez/rama-bialy.png')";
    }
    if (noga == 27) {
        document.getElementById('nogi').style.backgroundImage = "url('makieta/trapez/rama-szary.png')";
    }
    if (noga == 28) {
        document.getElementById('nogi').style.backgroundImage = "url('makieta/trapez/rama-zloty.png')";
    }
    if (noga == 29) {
        document.getElementById('nogi').style.backgroundImage = "url('makieta/trapez/ofix-czarny.png')";
    }
    if (noga == 30) {
        document.getElementById('nogi').style.backgroundImage = "url('makieta/trapez/ofix-bialy.png')";
    }
    if (noga == 31) {
        document.getElementById('nogi').style.backgroundImage = "url('makieta/trapez/ofix-szary.png')";
    }
    if (noga == 32) {
        document.getElementById('nogi').style.backgroundImage = "url('makieta/trapez/ofix-zloty.png')";
    }

}

function tabletop(kolor) {
    if (kolor == 1) {
        document.getElementById('tabletop').style.backgroundImage = "url('makieta/blat_oak.png')";
    } else
    if (kolor == 2) {
        document.getElementById('tabletop').style.backgroundImage = "url('makieta/blat_marmur.png')";
    } else
    if (kolor == 3) {
        document.getElementById('tabletop').style.backgroundImage = "url('makieta/blat_dab.png')";
    }
}

function background() {
    if (kebsik == 0) {
        document.getElementById('background').style.backgroundImage = "url('makieta/bez_tlo.png')";
        kebsik = 1;
    } else {
        document.getElementById('background').style.backgroundImage = "url('makieta/tlo.png')";
        kebsik = 0;
    }
}