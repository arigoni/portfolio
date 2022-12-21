$(function() {
    // On gère le scroll vers les différentes sections du site
    $(".scroll").click(function() {
        var section = $("." + this.id);
        $("html,body").animate({scrollTop: section.offset().top}, 'slow');
    });
});