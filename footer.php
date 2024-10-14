
                </div>
            </div>
        </div>
    </section>

</body>

</html>
</footer>

        <div class="with-border-top">
            <div class="pl-2 w-100 pr-2">
                <div class="d-flex columns">
                    <div class="d-flex column-left">
                        <div class="col-4 col-mb-8 mr-mb-0 mr-4">
                            <a href="/" class="logo" aria-label="Página inicial da escola">
                                <img src="assets/images/images-removebg-preview(1).png" class="lazy img-fluid entered loaded" alt="" width="200" height="65">
                            </a>
                        </div>
                        <div style="display: flex; align-items: center; gap: 2vw; flex-wrap: wrap;">
                            <div class="location">
                                <i class="fa-solid fa-map-marker-alt"></i> 
                                <a href="https://maps.app.goo.gl/osAUciToxE6znLLq5" class="address footer-item footer-link" target="_blank" rel="noopener noreferrer" widht= 1000px;>
                                    <span>Est da Muriçoca, sn - São Marcos, Salvador - BA, 41250-420 <br></span>
                                </a>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <p>Copyright © CEAAT 2024 | Todos os direitos reservados</p>
                </div>
            </div>
        </div>

    </footer>
    <script>
        function toggleMenu() {
            const menu = document.getElementById('hamburger');
            const sideMenu = document.getElementById('sidebarMenu');
            const mainContent = document.getElementById('mainContent');

            // Alternar a classe 'open' no menu hambúrguer e barra lateral
            menu.classList.toggle('open');
            sideMenu.classList.toggle('open');
            mainContent.classList.toggle('menu-open');
        }

        // Fechar o menu lateral ao clicar fora dele
        document.addEventListener('click', function(event) {
            const menu = document.getElementById('hamburger');
            const sideMenu = document.getElementById('sidebarMenu');
            const mainContent = document.getElementById('mainContent');
            const isClickInsideMenu = sideMenu.contains(event.target) || menu.contains(event.target);

            if (!isClickInsideMenu && sideMenu.classList.contains('open')) {
                // Fechar o menu se ele estiver aberto e o clique for fora do menu e do ícone
                sideMenu.classList.remove('open');
                menu.classList.remove('open');
                mainContent.classList.remove('menu-open');
            }
        });
    </script>
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>