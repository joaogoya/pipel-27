(function ($) {
  "use strict";

  document.addEventListener('click', function (event) {
  const menuContainer = document.getElementById('navbarNav'); // Insira o ID do seu menu collapse
  const menuBotao = document.querySelector('.navbar-toggler');
  
  // Se o menu estiver aberto e o clique for fora do menu e fora do botão
  if (menuContainer.classList.contains('show') && 
      !menuContainer.contains(event.target) && 
      !menuBotao.contains(event.target)) {
    
    // Usa a API nativa do Bootstrap 5 para fechar
    const bootstrapCollapse = bootstrap.Collapse.getOrCreateInstance(menuContainer);
    bootstrapCollapse.hide();
  }
});


})(jQuery);
