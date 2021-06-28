(function(){

  const navBtn = document.querySelector('.menu-toggler');

  navBtn.addEventListener('click', function(e){

    const navPanel = document.querySelector('.navigation--main');

    if (navPanel.classList.contains('js-nav-toggled')) {
      this.setAttribute('aria-expanded', 'false');
      navPanel.classList.remove('js-nav-toggled');
    } else {
      navPanel.classList.add('js-nav-toggled'); 
      this.setAttribute('aria-expanded', 'true');
    }

  });

}());