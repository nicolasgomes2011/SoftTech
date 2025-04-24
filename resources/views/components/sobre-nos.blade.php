<!-- filepath: c:\projeto_laravel\meu-projeto\resources\views\components\sobre-nos.blade.php -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Sobre Nós</h2>
            <p class="text-muted">
                A <strong>SoftTech</strong> é uma startup em crescimento, localizada na charmosa cidade de <strong>Gramado, no Rio Grande do Sul</strong>. 
                Desde a nossa fundação, temos como objetivo transformar o setor de turismo por meio de soluções tecnológicas inovadoras e acessíveis.
            </p>
        </div>
        
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="{{ asset('images/about/Gramado.png') }}" alt="Sobre Nós" class="img-fluid rounded">
            </div>
            <div class="col-md-6">
                <h3 class="fw-bold text-primary">Nossa Missão</h3>
                <p class="text-muted">Oferecer pacotes de viagem personalizados, com tecnologia de ponta e atenção aos detalhes, garantindo conforto, segurança e momentos inesquecíveis para nossos clientes.</p>
                <ul class="list-unstyled">
                    <li class="mb-3">
                        <i class="bi bi-check-circle-fill text-success me-2"></i>
                        Mais de 10 anos de experiência no mercado.
                    </li>
                    <li class="mb-3">
                        <i class="bi bi-check-circle-fill text-success me-2"></i>
                        Atendimento personalizado e roteiros sob medida.
                    </li>
                    <li class="mb-3">
                        <i class="bi bi-check-circle-fill text-success me-2"></i>
                        Parcerias com os melhores destinos e serviços.
                    </li>
                </ul>
                <a href="#contato" class="btn btn-primary mt-3">Entre em Contato</a>
            </div>
        </div>
    </div>
</section>