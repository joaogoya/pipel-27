<section id="contato" class="section-padding py-5 bg-white">
  <div class="container">
    <div class="row g-5 align-items-stretch">

      <!-- LADO ESQUERDO: MAPA + CONTEXTO LOCAL -->
      <div class="col-lg-6 d-flex flex-column justify-content-between">
        <div class="title-elaborado-col mb-4">
          <span class="subtitle-tag">Presença Local</span>
          <h2 class="fw-bold">Sua marca no <span class="text-accent">topo do mapa.</span></h2>
          <p class="text-muted mt-2">Atendemos Porto Alegre e região metropolitana com estratégias focadas em dominância de busca local.</p>
        </div>

        <!-- Container do Mapa -->
        <div class="map-wrapper rounded-5 shadow-sm overflow-hidden position-relative flex-grow-1 min-h-300">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110502.60389332219!2d-51.2468241!3d-30.0403487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951978d0016e2d57%3A0xcc1a182061517409!2sPorto%20Alegre%20-%20RS!52e0!3m2!1spt-BR!2sbr!4v1710000000000!5m2!1spt-BR!2sbr" 
            width="100%" 
            height="100%" 
            style="border:0; min-height: 320px;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
          
          <!-- Badge flutuante sobre o mapa -->
          <div class="map-badge position-absolute bottom-0 start-0 m-3 p-3 rounded-4 bg-white shadow-lg d-flex align-items-center gap-3">
            <div class="icon-circle bg-accent-soft text-accent rounded-circle d-flex align-items-center justify-content-center">
              <i class="fas fa-map-marker-alt"></i>
            </div>
            <div>
              <small class="d-block text-muted fw-bold text-uppercase" style="font-size: 0.7rem; letter-spacing: 0.5px;">Atendimento Presencial & Online</small>
              <strong class="text-dark" style="font-size: 0.9rem;">Porto Alegre, RS e Região</strong>
            </div>
          </div>
        </div>
      </div>

      <!-- LADO DIREITO: CTA PREMIUM COM ESTRUTURA NAP -->
      <div class="col-lg-6">
        <div class="cta-box-premium p-4 p-md-5 rounded-5 shadow-2 h-100 d-flex flex-column justify-content-between">
          <div>
            <span class="badge bg-accent-soft text-accent px-3 py-2 rounded-pill fw-bold mb-3" style="font-size: 0.8rem;">
              <i class="fas fa-bolt me-1"></i> RESPOSTA RÁPIDA
            </span>
            <h3 class="display-6 fw-bold mb-3">Pronto para ser <span class="text-accent">encontrado?</span></h3>
            <p class="mb-4 opacity-75">Não deixe o seu pipeline de oportunidades secar. Vamos colocar o seu negócio no radar de quem realmente quer comprar hoje.</p>

            <!-- BLOCO NAP (Name, Address, Phone) -->
            <div class="nap-container mb-4 p-3 rounded-4 bg-white-10 border border-white-10">
              <!-- Name -->
              <div class="nap-item d-flex align-items-center gap-3 mb-3">
                <div class="nap-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="fas fa-building text-accent"></i>
                </div>
                <div>
                  <small class="d-block opacity-50 text-uppercase" style="font-size: 0.65rem; letter-spacing: 0.5px;">Razão Social / Marca</small>
                  <strong class="fs-6">Pipeline Digital / Pulso Comercial</strong>
                </div>
              </div>

              <!-- Address -->
              <div class="nap-item d-flex align-items-center gap-3 mb-3">
                <div class="nap-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="fas fa-location-dot text-accent"></i>
                </div>
                <div>
                  <small class="d-block opacity-50 text-uppercase" style="font-size: 0.65rem; letter-spacing: 0.5px;">Localização & Cobertura</small>
                  <strong class="fs-6">Porto Alegre - RS (Atendimento em todo o Brasil)</strong>
                </div>
              </div>

              <!-- Phone/WhatsApp -->
              <div class="nap-item d-flex align-items-center gap-3">
                <div class="nap-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="fab fa-whatsapp text-accent fs-5"></i>
                </div>
                <div>
                  <small class="d-block opacity-50 text-uppercase" style="font-size: 0.65rem; letter-spacing: 0.5px;">Atendimento Direto com Especialista</small>
                  <strong class="fs-6">(51) 99999-9999</strong>
                </div>
              </div>
            </div>
          </div>

          <!-- Botão de Ação Principal -->
          <a href="https://wa.me/5551<?php echo get_afc_by_page_slug('whatsapp', 'home_config', 'informacoes-de-contato'); ?>" target="_blank" class="btn-pipeline-main w-100 text-center py-3 rounded-4 fw-bold text-decoration-none d-block mt-2" data-analytics="cta-click-whatsapp">
            SOLICITAR AUDITORIA LOCAL <i class="fab fa-whatsapp ms-2"></i>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>