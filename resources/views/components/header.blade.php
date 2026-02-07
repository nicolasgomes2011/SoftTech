 <!-- Navbar com logo -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-white">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="./">
            <img  src="{{ asset('images/Soft_Tech_Sem_Fundo.png') }}" alt="Logo SoftTech" class="logo me-2">
            <span>SoftTech Turismo</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-dark active" href="home">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="empresa">Empresa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="pacotes">Pacotes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="servicos">Fornecedores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ route('contato.index') }}">Contato</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ route('login.index') }}">Area <br> Administrativa</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
