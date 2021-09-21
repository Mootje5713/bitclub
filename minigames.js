document.getElementById("character").style.display = "none";
document.getElementById("bubble").style.display = "none";
document.getElementById("arrow2").style.display = "none";
document.getElementById("arrow3").style.display = "none";
document.getElementById("arrow4").style.display = "none";
document.getElementById("arrow5").style.display = "none";
document.getElementById("p1bubble").style.top = "3%";
document.getElementById("p1bubble").style.left = "0%";
document.getElementById("arrowleft").style.display = "none";
document.getElementById("arrowleft2").style.display = "none";
document.getElementById("arrowleft3").style.display = "none"; 

function nextBubble() {
    document.getElementById("p1bubble").innerHTML = "Hier kan je drie verschillende spellen spelen, scramble, galgje en een quiz.";
    document.getElementById("arrow1").style.display = "none";
    document.getElementById("arrow2").style.display = "block";
    document.getElementById("p1bubble").style.top = "-2%";
    document.getElementById("p1bubble").style.left = "0%";
}

function nextBubble2() {
    document.getElementById("p1bubble").innerHTML = "Klik op één van de pijltjes om naar de minigame te gaan";
    document.getElementById("arrow2").style.display = "none";
    document.getElementById("arrow3").style.display = "block";
}

function nextBubble3() {
    document.getElementById("p1bubble").innerHTML = "Neem vooral even een kijkje! :)";
    document.getElementById("p1bubble").style.fontSize = "16px";
    document.getElementById("arrow3").style.display = "none";
    document.getElementById("arrow4").style.display = "block";
    document.getElementById("p1bubble").style.top = "0%";
    document.getElementById("p1bubble").style.left = "0%"
}

function nextBubble4() {
    document.getElementById("bubble").style.display = "none";
    document.getElementById("character").style.display = "none";
    document.getElementById("p1bubble").innerHTML = "Hallo daar, op deze pagina kan je alle locaties vinden van de Bit Academy.";
}

function skipAll() {
    document.getElementById("bubble").style.display = "none";
    document.getElementById("character").style.display = "none";
    document.getElementById("p1bubble").innerHTML = "Hallo daar, op deze pagina kan je alle locaties vinden van de Bit Academy.";
}

function showBubble() {
    document.getElementById("character").style.display = "block";
    document.getElementById("bubble").style.display = "block";
    document.getElementById("arrow1").style.display = "block";
    document.getElementById("arrow2").style.display = "none";
    document.getElementById("arrow3").style.display = "none";
    document.getElementById("arrow4").style.display = "none";
    document.getElementById("arrow5").style.display = "none";
    document.getElementById("p1bubble").innerHTML = "Hallo daar, op deze pagina kan je alle locaties vinden van de Bit Academy.";
}