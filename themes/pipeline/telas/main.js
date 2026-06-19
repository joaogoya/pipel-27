// Funções Utilitárias para o Pulso Comercial
document.addEventListener("DOMContentLoaded", function() {

    // 1. Scroll Suave para links internos
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                window.scrollTo({
                    top: target.offsetTop - 80, // Compensa a altura da navbar
                    behavior: 'smooth'
                });
            }
        });
    });

    // 2. Feedback visual no Botão flutuante (opcional)
    console.log("Pulso Comercial carregado. Sucesso na vitrine!");
});