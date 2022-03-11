const form3 = document.getElementById('formModif');
const input3 = form3.getElementsByTagName('input');

function checkFormUpdate(event) {

    event.preventDefault()

    const div_result = document.querySelector('.div-result');

    jQuery.ajax({
        url: "assets/config/update-profil.php",
        data: { nom: $("#nomA").val(), prenom: $("#prenomA").val(), adresse: $("#adresseA").val(), adresse2: $("#adresse2A").val(), ville: $("#villeA").val(), pays: $("#paysA").val(), postalCode: $("#postalCodeA").val(), sexe: $("#sexeA").val(), age: $("#ageA").val() },
        type: "POST",
        success: function(data) {

            if (data != 0) {

                div_result.style.display = 'block';
                div_result.style.opacity = "1";
                div_result.style.color = '#045518';
                div_result.innerHTML = '<i class="fas fa-check"></i>Votre profil est bien modifier !';

                btn_anul.style.display = "none";
                btn_modif.style.display = "block";
                btn_modif_valid.style.display = 'none';

                setTimeout(function() {
                    div_result.style.transition = "opacity 500ms";
                    div_result.style.opacity = "0";
                }, 1500);
                setTimeout(function() {
                    div_result.style.display = "none";
                }, 2000);

                document.getElementById('signin-btn').disabled = true;

            } else {
                div_result.style.display = 'block';
                div_result.style.opacity = "1";
                div_result.style.color = 'rgb(121 12 12)';

                div_result.innerHTML = '<i class="fas fa-check"></i> Vos informations ne sont pas correct !';

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

//

function display() {
    const div_result2 = document.querySelector('.div-result2');
    const div_result2_2 = document.getElementById('div-result2');

    div_result2_2.style.margin = '0 auto';
    div_result2.style.margin = '1px auto 17px auto';
    div_result2.style.display = 'block';
    div_result2.style.opacity = "1";
    div_result2.style.color = '#184417';

    div_result2.innerHTML = '<i class="fas fa-check"></i> Votre modification à bien été pris en compte !';

    setTimeout(function() {
        div_result2.style.transition = "opacity 500ms";
        div_result2.style.opacity = "0";
    }, 600);

    setTimeout(function() {
        div_result2.style.display = "none";
    }, 800);
}

const prive_1 = document.getElementById('prive_1');
const prive_2 = document.getElementById('prive_2');
const prive_3 = document.getElementById('prive_3');
const prive_4 = document.getElementById('prive_4');
const prive_5 = document.getElementById('prive_5');
const prive_6 = document.getElementById('prive_6');
const prive_7 = document.getElementById('prive_7');
const prive_8 = document.getElementById('prive_8');
const prive_9 = document.getElementById('prive_9');
const prive_10 = document.getElementById('prive_10');
const prive_11 = document.getElementById('prive_11');

const public_1 = document.getElementById('public_1');
const public_2 = document.getElementById('public_2');
const public_3 = document.getElementById('public_3');
const public_4 = document.getElementById('public_4');
const public_5 = document.getElementById('public_5');
const public_6 = document.getElementById('public_6');
const public_7 = document.getElementById('public_7');
const public_8 = document.getElementById('public_8');
const public_9 = document.getElementById('public_9');
const public_10 = document.getElementById('public_10');
const public_11 = document.getElementById('public_11');

var url = 'https://gaetan-seigneur.store/';

prive_1.addEventListener('click', function(e) {
    e.preventDefault();

    $.get(url + "/assets/config/profil_visible?nom=oui", function(data) {

        public_1.style.display = 'block';
        prive_1.style.display = 'none';

        display();

    });
});

prive_2.addEventListener('click', function(e) {
    e.preventDefault();

    $.get(url + "/assets/config/profil_visible?prenom=oui", function(data) {

        public_2.style.display = 'block';
        prive_2.style.display = 'none';

        display();

    });
});

prive_3.addEventListener('click', function(e) {
    e.preventDefault();

    $.get(url + "/assets/config/profil_visible?email=oui", function(data) {

        public_3.style.display = 'block';
        prive_3.style.display = 'none';

        display();

    });
});

prive_4.addEventListener('click', function(e) {
    e.preventDefault();

    $.get(url + "/assets/config/profil_visible?pseudo=oui", function(data) {

        public_4.style.display = 'block';
        prive_4.style.display = 'none';

        display();

    });
});


prive_5.addEventListener('click', function(e) {
    e.preventDefault();

    $.get(url + "/assets/config/profil_visible?sexe=oui", function(data) {

        public_5.style.display = 'block';
        prive_5.style.display = 'none';

        display();

    });
});


prive_6.addEventListener('click', function(e) {
    e.preventDefault();

    $.get(url + "/assets/config/profil_visible?age=oui", function(data) {

        public_6.style.display = 'block';
        prive_6.style.display = 'none';

        display();

    });
});


prive_7.addEventListener('click', function(e) {
    e.preventDefault();

    $.get(url + "/assets/config/profil_visible?adresse=oui", function(data) {

        public_7.style.display = 'block';
        prive_7.style.display = 'none';

        display();

    });
});


prive_8.addEventListener('click', function(e) {
    e.preventDefault();

    $.get(url + "/assets/config/profil_visible?adresse2=oui", function(data) {

        public_8.style.display = 'block';
        prive_8.style.display = 'none';

        display();

    });
});


prive_9.addEventListener('click', function(e) {
    e.preventDefault();

    $.get(url + "/assets/config/profil_visible?ville=oui", function(data) {

        public_9.style.display = 'block';
        prive_9.style.display = 'none';

        display();

    });
});


prive_10.addEventListener('click', function(e) {
    e.preventDefault();

    $.get(url + "/assets/config/profil_visible?pays=oui", function(data) {

        public_10.style.display = 'block';
        prive_10.style.display = 'none';

        display();

    });
});

prive_11.addEventListener('click', function(e) {
    e.preventDefault();

    $.get(url + "/assets/config/profil_visible?postalCode=oui", function(data) {

        public_11.style.display = 'block';
        prive_11.style.display = 'none';

        display();

    });
});


//---------------------------------------------------------------------------//

public_1.addEventListener('click', function(e) {
    e.preventDefault();

    $.get(url + "/assets/config/profil_visible?nom=oui", function(data) {

        display();

        public_1.style.display = 'none';
        prive_1.style.display = 'block';

    });
});

public_2.addEventListener('click', function(e) {
    e.preventDefault();

    $.get(url + "/assets/config/profil_visible?prenom=oui", function(data) {

        display();

        public_2.style.display = 'none';
        prive_2.style.display = 'block';

    });
});

public_3.addEventListener('click', function(e) {
    e.preventDefault();

    $.get(url + "/assets/config/profil_visible?email=oui", function(data) {

        display();

        public_3.style.display = 'none';
        prive_3.style.display = 'block';

    });
});

public_4.addEventListener('click', function(e) {
    e.preventDefault();

    $.get(url + "/assets/config/profil_visible?pseudo=oui", function(data) {

        display();

        public_4.style.display = 'none';
        prive_4.style.display = 'block';

    });
});

public_5.addEventListener('click', function(e) {
    e.preventDefault();

    $.get(url + "/assets/config/profil_visible?sexe=oui", function(data) {

        display();

        public_5.style.display = 'none';
        prive_5.style.display = 'block';

    });
});

public_6.addEventListener('click', function(e) {
    e.preventDefault();

    $.get(url + "/assets/config/profil_visible?age=oui", function(data) {

        display();

        public_6.style.display = 'none';
        prive_6.style.display = 'block';

    });
});

public_7.addEventListener('click', function(e) {
    e.preventDefault();

    $.get(url + "/assets/config/profil_visible?adresse=oui", function(data) {

        display();

        public_7.style.display = 'none';
        prive_7.style.display = 'block';

    });
});

public_8.addEventListener('click', function(e) {
    e.preventDefault();

    $.get(url + "/assets/config/profil_visible?adresse2=oui", function(data) {

        display();

        public_8.style.display = 'none';
        prive_8.style.display = 'block';

    });
});

public_9.addEventListener('click', function(e) {
    e.preventDefault();

    $.get(url + "/assets/config/profil_visible?ville=oui", function(data) {

        display();

        public_9.style.display = 'none';
        prive_9.style.display = 'block';

    });
});

public_10.addEventListener('click', function(e) {
    e.preventDefault();

    $.get(url + "/assets/config/profil_visible?pays=oui", function(data) {

        display();

        public_10.style.display = 'none';
        prive_10.style.display = 'block';

    });
});

public_11.addEventListener('click', function(e) {
    e.preventDefault();

    $.get(url + "/assets/config/profil_visible?postalCode=oui", function(data) {

        display();

        public_11.style.display = 'none';
        prive_11.style.display = 'block';

    });
});