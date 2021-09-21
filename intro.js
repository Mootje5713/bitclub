document.getElementById("character").style.display = "none";
document.getElementById("bubble").style.display = "none";
document.getElementById("arrow2").style.display = "none";
document.getElementById("arrow3").style.display = "none";
document.getElementById("arrow4").style.display = "none";
document.getElementById("p1bubble").style.top = "3%";
document.getElementById("p1bubble").style.left = "0%";

function nextBubble() {
    document.getElementById("p1bubble").innerHTML = "Er staat één pagina niet bij, dat is de locaties pagina, maar die spreekt voor zich. Alle locaties van de Bit Academy.";
    document.getElementById("arrow1").style.display = "none";
    document.getElementById("arrow2").style.display = "block";
    document.getElementById("p1bubble").style.top = "-5%";
    document.getElementById("p1bubble").style.left = "0%";
}

function nextBubble2() {
    document.getElementById("p1bubble").innerHTML = "Je kan ervoor kiezen om naar de reviews te kijken en/of reviews te schrijven of om nu de oefen exercises te maken.";
    document.getElementById("arrow2").style.display = "none";
    document.getElementById("arrow3").style.display = "block";
}

function nextBubble3() {
    document.getElementById("p1bubble").innerHTML = "Neem even de tijd om alle stukjes tekst te lezen en ga dan weer verder!";
    document.getElementById("arrow3").style.display = "none";
    document.getElementById("arrow4").style.display = "block";
    document.getElementById("p1bubble").style.top = "2%";
    document.getElementById("p1bubble").style.left = "0%";
}

function nextBubble4() {
    document.getElementById("bubble").style.display = "none";
    document.getElementById("character").style.display = "none";
    document.getElementById("p1bubble").innerHTML = "Welkom op de intro pagina, hier kan je informatie vinden over alle modules!";
    ShowElements();
}

function skipAll() {
    document.getElementById("bubble").style.display = "none";
    document.getElementById("character").style.display = "none";
    ShowElements();
    document.getElementById("p1bubble").innerHTML = "Welkom op de intro pagina, hier kan je informatie vinden over alle modules!";
    document.getElementById("box").style.top = "117%";
    document.getElementById("show").style.top = "118.5%";
}

function HideElements() {
    document.getElementById("blok1").style.display = "none";
    document.getElementById("blok2").style.display = "none";
    document.getElementById("blok3").style.display = "none";
    document.getElementById("blok4").style.display = "none";
    document.getElementById("eerste").style.display = "none";
    document.getElementById("introp1").style.display = "none";
    document.getElementById("knop").style.display = "none";
}

function ShowElements() {
    document.getElementById("blok1").style.display = "block";
    document.getElementById("blok2").style.display = "block";
    document.getElementById("blok3").style.display = "block";
    document.getElementById("blok4").style.display = "block";
    document.getElementById("eerste").style.display = "block";
    document.getElementById("introp1").style.display = "block";
    document.getElementById("knop").style.display = "block";
    document.getElementById("knop").style.top = "117%";
    document.getElementById("body").style.overflow = "scroll";
}

function showBubble() {
    window.scrollTo(0, 0);
    HideElements();
    document.getElementById("character").style.display = "block";
    document.getElementById("bubble").style.display = "block";
    document.getElementById("arrow1").style.display = "block";
    document.getElementById("arrow2").style.display = "none";
    document.getElementById("arrow3").style.display = "none";
    document.getElementById("arrow4").style.display = "none";
    document.getElementById("arrow5").style.display = "none";
    document.getElementById("p1bubble").innerHTML = "Welkom op de intro pagina, hier kan je informatie vinden over alle modules!";
}