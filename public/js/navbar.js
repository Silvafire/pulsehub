const toogle_btn = document.querySelector('.toggle_btn');
    const close_btn = document.querySelector('.close_btn');
    const dropDownMenu = document.querySelector('.dropdown_menu');

    toogle_btn.onclick = function () {
      dropDownMenu.classList.remove('open');
    }
    close_btn.onclick = function () {
      dropDownMenu.classList.toggle('open');
    }