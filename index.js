function mostrar(tema) {
    let menu = document.getElementById(tema);

    if(menu.classList.contains('hidde'))
        menu.classList.remove('hidde');
    else
        menu.classList.add('hidde');
}