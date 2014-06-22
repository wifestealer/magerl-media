$(document).ready(function() {
    var faehigkeitenTimer = window.setInterval(function() {
        var faehigkeitenAnzahl = 0;
        console.log("faehigkeit");
        $("#faehigkeiten .faehigkeit").each(function() {
            var elementBG = $(this).children(".kugel").children(".hintergrund");
            var elementKugel = $(this).children(".kugel");
            var hoeheProzent = Math.round(elementBG.height() / elementKugel.height() * 100);

            if(hoeheProzent < elementBG.attr("data-height")) {
                hoeheProzent += 1;
                elementBG.height(hoeheProzent + "%");

                console.log(hoeheProzent);
            }
            else
                faehigkeitenAnzahl++;

            if($("#faehigkeiten .faehigkeit").length == faehigkeitenAnzahl) {
                window.clearInterval(faehigkeitenTimer);
            }
        });
    }, 10);
});