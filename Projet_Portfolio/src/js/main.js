$(document).ready(function() {
    /*execute JQUERY à partir du doc*/
    /* Quand on clique sur bouton propriété'open-modal', on va déclencher une fonction*/
    $("#open_modal").click(function() {
        /* La Fonction va prendre 'modal_to_open' et modifier la propriété css */
        $("#modal_to_open").css({
            'display': 'block'
        })

    });

    /* Fermer modal */
    $('#close_modal').click(function() {
        $('#modal_to_open').css({
            'display': 'none'

        })
    });

    /* Envoyer email avec AJAX*/

    $('#send_email').click(function(e) {
        e.preventDefault(); /* pour éviter que la page recharge*/
        var data = { /* on créé une variable qui sera un objet en prenant chq. id*/
            email: $('#email').val(),
            name: $('#name').val(),
            firstname: $('#firstname').val(),
            message: $('#message').val()
        };
        /* AJAX*/
        /*permet de créer une méthode en POST */
        $.ajax({
            url: "mail.php",
            /*données envoyées dans le fichier php qui va traiter le formulaire*/
            type: 'POST',
            /* envoi des données en méthode DATA*/
            data: data,
            success: function(data) { // call-back//
                $('#js_alert_success').css({ 'display': 'block' });
                setTimeout(function() {
                    $('#js_alert_success').css({ 'display': 'none' });
                    $('#email').val("");
                    $('#name').val("");
                    $('#firstname').val("");
                    $('#message').val("")
                }, 3000);
            },
            error: function(data) { //call-back//
                $('#js_alert_danger').css({ 'display': 'block' }); //permet d'afficher le message caché//
                setTimeout(function() { //fonction remet le message en envisible apès 3secondes//
                    $('#js_alert_danger').css({ 'display': 'none' }); //re-vide les champs ensuite//
                    $('#email').val("");
                    $('#name').val("");
                    $('#firstname').val("");
                    $('#message').val("")
                }, 3000);
            }
        });
    });
});