<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-none">
    <div class="container">
        <a class="navbar-brand" href="<?php echo BASE_URL; ?>">Defesa Prévia</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu Consulta</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo BASE_URL; ?>processosOrdem"><i class="fas fa-list-ol"></i> Listar Todos Processos Por Ordem</a>
                    <a class="dropdown-item" href="<?php echo BASE_URL; ?>buscarNome"><i class="fas fa-address-card"></i> Buscar Por Nome</a>
                    <a class="dropdown-item" href="<?php echo BASE_URL; ?>buscarProcesso"><i class="fas fa-folder-plus"></i> Buscar Por Processo</a>
                    <a class="dropdown-item" href="<?php echo BASE_URL; ?>mensagem"><i class="fas fa-folder-plus"></i> Mensagem</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL; ?>">Voltar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL; ?>sair/deslogar">Sair</a>
                </li>
            </ul>
            <p class="nav justify-content-end"><span class="badge badge-secondary" id="timer"></span></p>
        </div>
    </div>
</nav>