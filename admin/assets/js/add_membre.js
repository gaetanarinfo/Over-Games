function checkFormMembres(event) {

    event.preventDefault()

    // Définition de nos constantes
    const pass = document.getElementById('passwordA').value;
    const div_result = document.getElementById('div-result');
    const regex = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,}$/;

    if (!pass.match(regex)) {
        div_result.style.display = 'block';
        div_result.style.opacity = "1";
        div_result.style.color = 'rgb(121 12 12)';
        div_result.innerHTML = '<i class="fas fa-times"></i>Le mot de passe ne respect pas nos conditions !';
        setTimeout(function() {
            div_result.style.transition = "opacity 500ms";
            div_result.style.opacity = "0";
        }, 1500);
        setTimeout(function() {
            div_result.style.display = "none";
        }, 2000);

    } else {
        jQuery.ajax({
            url: "https://gaetan-seigneur.store/admin/assets/config/add_membre.php",
            data: { nom: $("#nomA").val(), prenom: $("#prenomA").val(), email: $("#emailA").val(), pseudo: $("#pseudoA").val(), password: $("#passwordA").val(), sexe: $("#sexeA").val(), age: $("#ageA").val(), verif: $("#verifA").val(), premium: $("#premiumA").val() },
            type: "POST",
            success: function(data) {

                if (data != 0) {

                    div_result.style.display = 'block';
                    div_result.style.opacity = "1";
                    div_result.style.color = 'rgb(30 169 64)';
                    div_result.innerHTML = '<i class="fas fa-check"></i>Membre inscit sur le site internet';

                    setTimeout(function() {
                        div_result.style.transition = "opacity 500ms";
                        div_result.style.opacity = "0";
                    }, 1500);
                    setTimeout(function() {
                        div_result.style.display = "none";
                    }, 2000);

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

}

//