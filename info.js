document.getElementById("arrow1").style.display = "none";
document.getElementById("arrow2").style.display = "none";
document.getElementById("arrow3").style.display = "none";
document.getElementById("arrow4").style.display = "none";
document.getElementById("bubble").style.display = "none";
document.getElementById("character").style.display = "none";

function nextBubble() {
    document.getElementById("p1bubble").innerHTML = "Op deze pagina kan je alle informatie zien over de opleiding Software Developer op de Bit Academy.";
    document.getElementById("arrow1").style.display = "none";
    document.getElementById("arrow2").style.display = "block";
    document.getElementById("p1bubble").style.top = "-5%";
    document.getElementById("p1bubble").style.left = "0%";
}

function nextBubble2() {
    document.getElementById("p1bubble").innerHTML = "Je leest hier wat de Bit Academy is en wat je hier allemaal leert.";
    document.getElementById("arrow2").style.display = "none";
    document.getElementById("arrow3").style.display = "block";
}

function nextBubble3() {
    document.getElementById("p1bubble").innerHTML = "Als je informatie nodig hebt voor de opleiding is dit the place to be! :)";
    document.getElementById("arrow3").style.display = "none";
    document.getElementById("arrow4").style.display = "block";
    document.getElementById("p1bubble").style.top = "2%";
    document.getElementById("p1bubble").style.left = "0%";
}

function nextBubble4() {
    document.getElementById("bubble").style.display = "none";
    document.getElementById("character").style.display = "none";
    document.getElementById("p1bubble").style.innerHTML = "Welkom op de informatie pagina over de Bit Academy!";
}

function skipAll() {
    document.getElementById("bubble").style.display = "none";
    document.getElementById("character").style.display = "none";
    document.getElementById("p1bubble").style.innerHTML = "Welkom op de informatie pagina over de Bit Academy!";
}

function showBubble() {
    document.getElementById("bubble").style.display = "block";
    document.getElementById("character").style.display = "block";
    document.getElementById("arrow1").style.display = "block";
    document.getElementById("arrow2").style.display = "none";
    document.getElementById("arrow3").style.display = "none";
    document.getElementById("arrow4").style.display = "none";
    document.getElementById("p1bubble").innerHTML = "Welkom op de informatie pagina over de Bit Academy!";
}