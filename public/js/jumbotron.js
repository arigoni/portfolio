// Phrase d'accroche
$(function() {
    var words = [
        '- Développeur full stack -',
        '- Intégrateur web -',
        '- Webmaster -',
        '- Technico-commercial -',
    ],
    i = 0;
  
    // On gère l'affichage aléatoire des phrases d'accroche du header (toutes les 3 secondes)
    setInterval(function() {
        $("#word").fadeOut(function() {
            $(this).html(words[i = (i + 1) % words.length]).fadeIn();
        });
    }, 3000);  
});