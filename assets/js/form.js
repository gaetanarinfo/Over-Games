const form = document.getElementById('form');
const input = form.getElementsByTagName('input');

function recuperationVar() {

    $.get('assets/config/membre?pseudo=pseudo', function(result) {
        $('#pseudoVerif').val(result);
    });

    $.get('assets/config/membre?email=email', function(result2) {
        $('#emailVerif').val(result2);
    });

}

// - de 18 ans c'est pas la peine
function processDate(date) {
    var parts = date.split("-");
    return new Date(parts[0], parts[1] - 1, parts[2]);
}

function calcAge(date) {
    var dBirth = processDate(date);
    var dToday = new Date();
    var diff = dToday.getTime() - dBirth.getTime();
    return Math.floor(diff / (1000 * 60 * 60 * 24 * 365.25));
}

function validateDate(date) {
    var age = calcAge(date);
    if (18 <= age && age <= 80) return true;
    else {
        return false;
    }
}
//

recuperationVar();

function checkForm(event) {

    event.preventDefault()

    // Définition de nos constantes
    const pass = document.getElementById('passwordA').value;
    const passConfirm = document.getElementById('passwordConfirm').value;
    const checkBox = document.getElementById('checkBoxConfirm');
    const div_result = document.querySelector('.div-result');
    const avatar = document.querySelector("#file");
    const age = document.querySelector("#ageA");
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

    } else if (pass !== passConfirm) {
        div_result.style.display = 'block';
        div_result.style.opacity = "1";
        div_result.style.color = 'rgb(121 12 12)';
        div_result.innerHTML = '<i class="fas fa-times"></i>Les mots de passe ne sont pas identique !';
        setTimeout(function() {
            div_result.style.transition = "opacity 500ms";
            div_result.style.opacity = "0";
        }, 1500);
        setTimeout(function() {
            div_result.style.display = "none";
        }, 2000);

    } else if (checkBox.checked == false) {

        div_result.style.display = 'block';
        div_result.style.opacity = "1";
        div_result.style.color = 'rgb(121 12 12)';
        div_result.innerHTML = '<i class="fas fa-times"></i>Vous devez accepter les conditions générales !';
        setTimeout(function() {
            div_result.style.transition = "opacity 500ms";
            div_result.style.opacity = "0";
        }, 1500);
        setTimeout(function() {
            div_result.style.display = "none";
        }, 2000);

    } else if (avatar.value === "") {

        div_result.style.display = 'block';
        div_result.style.opacity = "1";
        div_result.style.color = 'rgb(121 12 12)';
        div_result.innerHTML = '<i class="fas fa-times"></i>Vous devez uploader un avatar !';
        setTimeout(function() {
            div_result.style.transition = "opacity 500ms";
            div_result.style.opacity = "0";
        }, 1500);
        setTimeout(function() {
            div_result.style.display = "none";
        }, 2000);

    } else if (validateDate(age.value) === false) {

        div_result.style.display = 'block';
        div_result.style.opacity = "1";
        div_result.style.color = 'rgb(121 12 12)';
        div_result.innerHTML = '<i class="fas fa-times"></i>Vous devez avoir 18 ans !';
        setTimeout(function() {
            div_result.style.transition = "opacity 500ms";
            div_result.style.opacity = "0";
        }, 1500);
        setTimeout(function() {
            div_result.style.display = "none";
        }, 2000);

    } else if (pass.match(regex) && pass === passConfirm) {

        const pseudo = document.getElementById('pseudoA').value;
        const pseudo2 = document.getElementById('pseudoVerif').value;
        const email = document.getElementById('emailA').value;
        const email2 = document.getElementById('emailVerif').value;

        if (pseudo === pseudo2) {

            div_result.style.display = 'block';
            div_result.style.opacity = "1";
            div_result.style.color = 'rgb(121 12 12)';
            div_result.innerHTML = '<i class="fas fa-times"></i>' + pseudo2 + ' existe déjà dans notre base !';
            setTimeout(function() {
                div_result.style.transition = "opacity 500ms";
                div_result.style.opacity = "0";
            }, 1500);
            setTimeout(function() {
                div_result.style.display = "none";
            }, 2000);

        } else if (email === email2) {

            div_result.style.display = 'block';
            div_result.style.opacity = "1";
            div_result.style.color = 'rgb(121 12 12)';
            div_result.innerHTML = '<i class="fas fa-times"></i>' + email2 + ' existe déjà dans notre base !';
            setTimeout(function() {
                div_result.style.transition = "opacity 500ms";
                div_result.style.opacity = "0";
            }, 1500);
            setTimeout(function() {
                div_result.style.display = "none";
            }, 2000);

        } else {
            jQuery.ajax({
                url: "assets/config/sign_in.php",
                data: { nom: $("#nomA").val(), prenom: $("#prenomA").val(), email: $("#emailA").val(), pseudo: $("#pseudoA").val(), password: $("#passwordA").val(), adresse: $("#adresseA").val(), adresse2: $("#adresse2A").val(), ville: $("#villeA").val(), pays: $("#paysA").val(), postalCode: $("#postalCodeA").val(), sexe: $("#sexeA").val(), age: $("#ageA").val(), day: $("#dayA").val(), month: $("#monthA").val() },
                type: "POST",
                success: function(data) {

                    $.get('assets/config/membre?pseudo=pseudo', function(result) {
                        document.getElementById('pseudoVerif').value = result;
                    });

                    $.get('assets/config/membre?cle=cle', function(result3) {
                        document.getElementById('clee').textContent = result3;
                    });

                    var fd = new FormData();
                    var files = $('#file')[0].files[0];
                    var emails = $('#emailA').val();
                    fd.append('file', files);
                    fd.append('email', emails);
                    $.ajax({
                        url: 'assets/config/upload.php',
                        type: 'post',
                        data: fd,
                        contentType: false,
                        processData: false,
                        success: function(response) {
                            if (response != 0) {
                                document.getElementById("img_avat").setAttribute("src", response);
                                document.getElementById("preview_img").style.display = 'block'; // Display image element
                            } else {
                                div_result.style.display = 'block';
                                div_result.style.opacity = "1";
                                div_result.style.color = 'rgb(121 12 12)';
                                div_result.innerHTML = "<i class='fas fa-times'></i>Désoler, votre avatar n'a pas été uploader ! ";
                                setTimeout(function() {
                                    div_result.style.transition = "opacity 500ms";
                                    div_result.style.opacity = "0";
                                }, 1500);
                                setTimeout(function() {
                                    div_result.style.display = "none";
                                }, 2000);
                            }
                        },
                    });

                    div_result.style.display = 'block';
                    div_result.style.opacity = "1";
                    div_result.style.color = '#045518';
                    div_result.innerHTML = '<i class="fas fa-check"></i>Pour valider votre inscription merci de cliquer sur le lien';

                    setTimeout(function() {
                        div_result.style.transition = "opacity 500ms";
                        div_result.style.opacity = "0";
                    }, 1500);
                    setTimeout(function() {
                        div_result.style.display = "none";
                    }, 2000);

                    document.getElementById('signin-btn').disabled = true;

                    jQuery.noConflict();
                    jQuery('#registerModal').modal('show');

                },
                error: function() {
                    event.preventDefault();
                }
            });
            return false;
        }

    }
    return false;

}

//

// Button Afficher/Masquer Mot de passe

$('.input-group-addon').click(function() {
    if ($(this).prev('input').prop('type') == 'password') {
        //Si c'est un input type password
        $(this).prev('input').prop('type', 'text');
        $(this).attr('title', 'Masquer le mot de passe');
    } else {
        //Sinon
        $(this).prev('input').prop('type', 'password');
        $(this).attr('title', 'Afficher le mot de passe');
    }
});

// ajout de la classe JS à HTML
document.querySelector("html").classList.add('js');

// initialisation des variables
var fileInput = document.querySelector(".input-file"),
    button = document.querySelector(".input-file-trigger"),
    the_return = document.querySelector(".file-return");

// action lorsque la "barre d'espace" ou "Entrée" est pressée
button.addEventListener("keydown", function(event) {
    if (event.keyCode == 13 || event.keyCode == 32) {
        fileInput.focus();
    }
});

// action lorsque le label est cliqué
button.addEventListener("click", function(event) {
    fileInput.focus();

    return false;
});

// affiche un retour visuel dès que input:file change
fileInput.addEventListener("change", function(event) {
    the_return.innerHTML = this.value;
});