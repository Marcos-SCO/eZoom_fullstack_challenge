function headerMenuMobile() {

    const navMenuContainer = document.querySelector('[data-js="nav-menu-container"]');

    if (!navMenuContainer) return;

    const hamburgerMenu = navMenuContainer.querySelector('[data-js="menu-hamburger"]');
    
    const menuItens = navMenuContainer.querySelector('[data-js="menu-itens"]');
    
    const overlay = navMenuContainer.querySelector('[data-js="overlay"]');

    if (!hamburgerMenu || !menuItens || !overlay) return;
    
    // Toggle menu
    hamburgerMenu.addEventListener('click', function () {
        this.classList.toggle('active');
        menuItens.classList.toggle('open');
        overlay.classList.toggle('active');
    });

    // Close menu on overlay click
    overlay.addEventListener('click', function () {

        hamburgerMenu.classList.remove('active');
        menuItens.classList.remove('open');
        this.classList.remove('active');
    });

    // Close menu on 'Esc' key press
    document.addEventListener('keydown', function (e) {
        if (!(e.key === 'Escape')) return;

        hamburgerMenu.classList.remove('active');
        menuItens.classList.remove('open');
        overlay.classList.remove('active');
    });

}

document.addEventListener('DOMContentLoaded', headerMenuMobile);

