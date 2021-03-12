//Je valide le formulaire avec des évènements//
document.forms["inscription"].addEventListener("submit", function(e) {
    //écouter l'évènement submit sur le formulaire//
    //correspond au this//

    var erreur;
    var inputs = this; //contient tous les inputs//


    //Je calcule la date et je vérifie l'âge //
    var bD = inputs[name = "DateN"].value;

    var td = new Date();
    var year = bD.substr(0, 4);
    var month = bD.substr(5, 2) - 1;
    var day = bD.substr(8, 2);

    var age = td.getFullYear() - year;
    var ageMonth = td.getMonth() - month;
    var ageDay = td.getDate() - day;

    if ((ageMonth < 0) || ((ageMonth == 0) && (ageDay < 0))) {
        age--;
    }

    // Traitement cas par cas (input unique)
    if (inputs[name = "email"].value == "root@paca.happy-dev.fr" || inputs[name = "email"].value == "admin@paca.happy-dev.fr" || inputs[name = "email"].value == "dieu@paca.happy-dev.fr") {
        erreur = "Adresse email déjà utilisée";
    }

    if (inputs[name = "pseudo"].value == "root" || inputs[name = "pseudo"].value == "admin" || inputs[name = "pseudo"].value == "dieu") {
        erreur = "Pseudo déjà utilisé";
    }

    if (inputs[name = "sexe"].value == "") {
        erreur = "Choisissez votre sexe";
    }

    if (age < 18) {
        erreur = "Vous n'avez pas 18 ans!";
    }


    // Traitement générique
    //tableau qui contient toutes les entrées du formulaire//
    // 1 seul traitement avec 1 seule boucle et autant d'inputs
    for (var i = 0; i < inputs.length; i++) {
        // console.log(inputs[i]);
        if (!inputs[i].value) { // if différent de i
            erreur = "Veuillez renseigner tous les champs";
            break; // termine la boucle en cours d'instruction
        }
    }
    if (erreur) {
        e.preventDefault(); // empèche de recharger la page et l'envoi du formulaire//
        document.getElementById("erreur").innerHTML = erreur; //définit la syntaxe HTML décrivant les descendants de l'élément//
        return false;
    } else {
        alert('Formulaire envoyé !');
    }
});