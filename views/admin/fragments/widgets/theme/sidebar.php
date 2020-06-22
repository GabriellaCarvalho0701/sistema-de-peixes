<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mx-3">Laboratório de <sup>Biologia</sup></div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item <?php if ($page == "dashboard") : echo "active";
                        endif; ?>">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Projeto
    </div>

    <li class="nav-item <?= ($page == "species") ? "active" : ""; ?>">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-fish"></i>
            <span>Espécies</span>
        </a>
    </li>

    <li class="nav-item <?= ($page == "mails") ? "active" : ""; ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-envelope"></i>
            <span>Mensagens</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Categoria:</h6>
                <a class="collapse-item" href="utilities-border.html">Não visualizadas</a>
                <a class="collapse-item" href="utilities-color.html">Visualizadas</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Suporte
    </div>

    <li class="nav-item <?= ($page == "myUser") ? "active" : ""; ?>">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-user"></i>
            <span>Meu usuário</span>
        </a>
    </li>

    <?php if (1 == 0) : ?>
        <li class="nav-item <?= ($page == "users") ? "active" : ""; ?>">
            <a class="nav-link" href="index.html">
                <i class="fas fa-fw fa-users"></i>
                <span>Usuários</span>
            </a>
        </li>
    <?php endif; ?>

    <hr class="sidebar-divider d-none d-md-block">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>