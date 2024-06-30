const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

allSideMenu.forEach(item => {
    const li = item.parentElement;

    item.addEventListener('click', function () {
        allSideMenu.forEach(i => {
            i.parentElement.classList.remove('active');
        })
        li.classList.add('active');
    })
});

// TOGGLE SIDEBAR
const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function () {
    sidebar.classList.toggle('hide');
})

const searchButton = document.querySelector('#content nav form .form-input button');
const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
const searchForm = document.querySelector('#content nav form');

searchButton.addEventListener('click', function (e) {
    if (window.innerWidth < 576) {
        e.preventDefault();
        searchForm.classList.toggle('show');
        if (searchForm.classList.contains('show')) {
            searchButtonIcon.classList.replace('bx-search', 'bx-x');
        } else {
            searchButtonIcon.classList.replace('bx-x', 'bx-search');
        }
    }
})

if (window.innerWidth < 768) {
    sidebar.classList.add('hide');
} else if (window.innerWidth > 576) {
    searchButtonIcon.classList.replace('bx-x', 'bx-search');
    searchForm.classList.remove('show');
}

window.addEventListener('resize', function () {
    if (this.innerWidth > 576) {
        searchButtonIcon.classList.replace('bx-x', 'bx-search');
        searchForm.classList.remove('show');
    }
})

const switchMode = document.getElementById('switch-mode');
const themeImage = document.getElementById('theme-image');

// Verificar o tema salvo no localStorage e aplicar
if (localStorage.getItem('darkMode') === 'enabled') {
    document.body.classList.add('dark');
    switchMode.checked = true;
    themeImage.src = localStorage.getItem('logoSrc') || '../img/LogotipoFundoBranco.png'; // Verificar a logo salva ou usar padrão
} else {
    document.body.classList.remove('dark');
    switchMode.checked = false;
    themeImage.src = localStorage.getItem('logoSrc') || '../img/LogoFundoTransparente.png'; // Verificar a logo salva ou usar padrão
}

// Salvar tema e logo no localStorage ao alterar
switchMode.addEventListener('change', function () {
    if (this.checked) {
        document.body.classList.add('dark');
        themeImage.src = '../img/LogotipoFundoBranco.png'; // Alterando a imagem para o tema dark
        localStorage.setItem('darkMode', 'enabled');
        localStorage.setItem('logoSrc', '../img/LogotipoFundoBranco.png'); // Salvar logo correspondente ao tema dark
    } else {
        document.body.classList.remove('dark');
        themeImage.src = '../img/LogoFundoTransparente.png'; // Alterando a imagem para o tema light
        localStorage.setItem('darkMode', 'disabled');
        localStorage.setItem('logoSrc', '../img/LogoFundoTransparente.png'); // Salvar logo correspondente ao tema light
    }
});

// Atualizar logo no localStorage ao carregar a página
window.addEventListener('load', function () {
    if (localStorage.getItem('logoSrc')) {
        themeImage.src = localStorage.getItem('logoSrc');
    }
});

