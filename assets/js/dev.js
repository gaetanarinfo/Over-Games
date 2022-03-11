const dev = document.querySelector(".dev"),
    dev2 = document.querySelector(".dev"),
    dev_btn = document.querySelector(".dev_btn"),
    btn_cv = document.getElementById('dev-cv'),
    dev_bar = document.querySelector(".dev_bar"),
    yt_dev = document.querySelector('.yt-dev'),
    progress_bar = document.querySelector('.progress_bar');

function scrollFunctionDev() {
    if (document.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        dev.style.display = "block";
    } else {
        dev.style.display = "none";
    }
}

function scrollFunctionDev2() {
    if (document.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        dev2.style.display = "block";
    } else {
        dev2.style.display = "none";
    }
}

function scrollFunctionDevBtn() {
    if (document.scrollTop > 400 || document.documentElement.scrollTop > 400) {
        dev_btn.style.display = "block";
    } else {
        dev_btn.style.display = "none";
    }
}

function scrollFunctionDevBar() {
    if (document.scrollTop > 430 || document.documentElement.scrollTop > 430) {
        dev_bar.style.display = "block";
    } else {
        dev_bar.style.display = "none";
    }
}

function scrollFunctionDevYt() {
    if (document.scrollTop > 1540 || document.documentElement.scrollTop > 1540) {
        yt_dev.style.display = "block";
    } else {
        yt_dev.style.display = "none";
    }
}

btn_cv.addEventListener('click', function(e) {

    e.preventDefault();

    progress_bar.style.display = 'block';
    progress_bar.style.margin = '0 auto -14px auto';
    btn_cv.style.display = 'none';

    const progressBar = document.querySelector('progress')
    const done = document.querySelector('#done')
    let p = 0

    function timeout(ms) {
        return new Promise(resolve => setTimeout(resolve, ms))
    }

    async function progress() {

        await timeout(Math.floor(Math.random() * 200) + 200)

        p += Math.ceil(Math.random() * 7) + 5

        if (p < 100) {
            progressBar.value = p
            progress()
            done.innerHTML = `${p}%`
        } else {
            progressBar.value = 100
            done.innerHTML = 'Fichier téléchargé 🎒'
            await timeout(100)
            progressBar.classList.remove('progress-bar')

            windowObjectReference = window.open(
                "https://gaetan-seigneur.store/documents/Seigneur_Gaetan_CV.pdf",
                "CV",
                "resizable,scrollbars,status"
            );
        }

    }

    progress()
})