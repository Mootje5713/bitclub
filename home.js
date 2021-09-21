document.getElementById("character").style.display = "none";
document.getElementById("bubble").style.display = "none";
document.getElementById("arrow2").style.display = "none";
document.getElementById("arrow3").style.display = "none";
document.getElementById("arrow4").style.display = "none";
document.getElementById("arrow5").style.display = "none";
document.getElementById("p1bubble").style.top = "3%";
document.getElementById("p1bubble").style.left = "0%";

function nextBubble() {
    document.getElementById("p1bubble").innerHTML = "Deze website is bedoeld om mensen een idee te geven wat de werkwijze van de Bit Academy is en hoe Jarvis eruitziet.";
    document.getElementById("arrow1").style.display = "none";
    document.getElementById("arrow2").style.display = "block";
    document.getElementById("p1bubble").style.top = "-2%";
    document.getElementById("p1bubble").style.left = "0%";
}

function nextBubble2() {
    document.getElementById("p1bubble").innerHTML = "Je bent momenteel in een replica van het Jarvis Universe, hier kan je in de normale Jarvis alle opdrachten modules zien.";
    document.getElementById("arrow2").style.display = "none";
    document.getElementById("arrow3").style.display = "block";
}

function nextBubble3() {
    document.getElementById("p1bubble").innerHTML = "In dit universe kan je exercises maken, reviews over de Bit Academy zien, informatie over de opleiding lezen, alle locaties van de Bit Academy zien en programmeer gerelateerde minigames spelen!";
    document.getElementById("p1bubble").style.fontSize = "13px";
    document.getElementById("arrow3").style.display = "none";
    document.getElementById("arrow4").style.display = "block";
    document.getElementById("p1bubble").style.top = "0%";
    document.getElementById("p1bubble").style.left = "0%";
}

function nextBubble4() {
    document.getElementById("p1bubble").innerHTML = "Ga naar de <b>intro</b> module om te zien wat elke module in het Universe inhoudt en om te zien wat je kan vinden op deze website.";
    document.getElementById("arrow4").style.display = "none";
    document.getElementById("arrow5").style.display = "block";
    document.getElementById("p1bubble").style.fontSize = "16px";
    document.getElementById("p1bubble").style.top = "0%";
    document.getElementById("p1bubble").style.left = "0%";
}

function nextBubble5() {
    document.getElementById("bubble").style.display = "none";
    document.getElementById("character").style.display = "none";
}

function skipAll() {
    document.getElementById("bubble").style.display = "none";
    document.getElementById("character").style.display = "none";
}

function showBubble() {
    document.getElementById("character").style.display = "block";
    document.getElementById("bubble").style.display = "block";
    document.getElementById("arrow1").style.display = "block";
    document.getElementById("arrow2").style.display = "none";
    document.getElementById("arrow3").style.display = "none";
    document.getElementById("arrow4").style.display = "none";
    document.getElementById("arrow5").style.display = "none";
    document.getElementById("p1bubble").innerHTML = "Hey jij daar, welkom op de introductie website van de Bit Academy, genaamd Bit Club!";
}