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