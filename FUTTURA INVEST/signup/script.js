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
});

const switchMode = document.getElementById('switch-mode');
const themeImage = document.getElementById('theme-image');

// Verificar o tema salvo no localStorage e aplicar
function applyTheme() {
    if (localStorage.getItem('darkMode') === 'enabled') {
        document.body.classList.add('dark');
        switchMode.checked = true;
        themeImage.src = localStorage.getItem('logoSrc') || '../img/LogotipoFundoBranco.png'; // Logo para o tema dark
    } else {
        document.body.classList.remove('dark');
        switchMode.checked = false;
        themeImage.src = localStorage.getItem('logoSrc') || '../img/LogotipoFuttura.png'; // Logo para o tema light
    }
}

// Aplicar tema ao carregar a página
applyTheme();

// Salvar tema e logo no localStorage ao alterar
switchMode.addEventListener('change', function () {
    if (this.checked) {
        document.body.classList.add('dark');
        themeImage.src = '../img/LogotipoFundoBranco.png'; // Alterando a imagem para o tema dark
        localStorage.setItem('darkMode', 'enabled');
        localStorage.setItem('logoSrc', '../img/LogotipoFundoBranco.png'); // Salvar logo correspondente ao tema dark
    } else {
        document.body.classList.remove('dark');
        themeImage.src = '../img/LogotipoFuttura.png'; // Alterando a imagem para o tema light
        localStorage.setItem('darkMode', 'disabled');
        localStorage.setItem('logoSrc', '../img/LogotipoFuttura.png'); // Salvar logo correspondente ao tema light
    }
});

// Atualizar logo no localStorage ao carregar a página
window.addEventListener('load', function () {
    applyTheme();
});

