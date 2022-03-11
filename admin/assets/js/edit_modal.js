function checkFormEditMembre(event) {

    event.preventDefault()

    // Définition de nos constantes
    const div_result = document.getElementById('div-result7');

    if (clickededit == true) {
        jQuery.ajax({
            url: "https://gaetan-seigneur.store/admin/assets/config/edit_membre.php",
            data: {
                email: $("#emailEdit").val(),
                nom: $("#nomB").val(),
                prenom: $('#prenomB').val(),
                sexe: $('#sexeB').val(),
                age: $('#ageB').val(),
                pseudo: $('#pseudoB').val(),
                verif: $('#verifB').val(),
                premium: $('#premiumB').val(),
                adresse: $('#adresseB').val(),
                adresse2: $('#adresse2B').val(),
                ville: $('#villeB').val(),
                postalCode: $('#postalCodeB').val(),
                pays: $('#paysB').val()
            },
            type: "POST",
            success: function(data) {

                if (data != 0) {

                    div_result.style.display = 'block';
                    div_result.style.opacity = "1";
                    div_result.style.color = 'rgb(30 169 64)';
                    div_result.innerHTML = "<i class='fas fa-check'></i>Le membre est maintenant modifier !";

                    setTimeout(function() {
                        div_result.style.transition = "opacity 500ms";
                        div_result.style.opacity = "0";
                    }, 1500);
                    setTimeout(function() {
                        div_result.style.display = "none";
                    }, 2000);

                    setTimeout(function() {
                        document.location.reload();
                    }, 1000);

                } else {
                    div_result.style.display = 'block';
                    div_result.style.opacity = "1";
                    div_result.style.color = 'rgb(121 12 12)';
                    div_result.innerHTML = '<i class="fas fa-times"></i>Désolé, une erreur est survenue !';
                    setTimeout(function() {
                        div_result.style.transition = "opacity 500ms";
                        div_result.style.opacity = "0";
                    }, 1500);
                    setTimeout(function() {
                        div_result.style.display = "none";
                    }, 2000);
                }

            },
            error: function() {
                event.preventDefault();
            }
        });
        return false;
    }

};