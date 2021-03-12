/*Gérer le formulaire de téléchargement d'image Soumettre à l'aide de jQuery
Traiter le formulaire de téléchargement d'image à l'aide de l'événement de changement jQuery.*/
//-----------------------------------------------------------------------------------------------//
/*Appeler la fonction $ de jQuery, en lui passant l'objet document . 
La fonction $ renvoie une version améliorée de l'objet document . 
Cet objet amélioré possède une fonction ready()  à laquelle est transmis une fonction JavaScript. 
Une fois que le DOM est prêt, la fonction JavaScript est exécutée.*/
$(document).ready(function() {
    $('#image_file').on('change', function() {
        $('#upload_form').ajaxForm({
            target: '#uploaded_images_preview',
            beforeSubmit: function(e) {
                $('.file_uploading').show();
            },
            success: function(e) {
                $('.file_uploading').hide();
            },
            error: function(e) {}
        }).submit();
    });
});