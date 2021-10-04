<div class="sidebar bg-primary">
    <div class="logo-details">
        <h1 class="logo_name text-white">{{ 'ST' }}</h1>
        <i class="fas fa-align-justify" id="btn" ></i>
    </div>
    <ul class="nav-list">
        <li>
            <a href="{{ route('index_sistemateste') }}">
                <i class="fas fa-home"></i>
                <span class="links_name">{{ ('Inicio') }}</span>
            </a>
            <span class="tooltip">{{ ('Inicio') }}</span>
        </li>

        <li>
            <a href="{{ route('painel') }}">
                <i class="fas fa-th"></i>
                <span class="links_name">{{ ('Painel de Produtos') }}</span>
            </a>
            <span class="tooltip">{{ ('Painel de Produtos') }}</span>
        </li>

        <li>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="text-center">
                <i class="fas fa-sign-out-alt"></i>
                <span class="links_name">{{ ('Sair') }}</span>
                
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </a>
            <span class="tooltip">{{ ('Sair') }}</span>
        </li>
          
        <li class="profile">
            <div class="profile-details">
                <i class="fas fa-user"></i>
            <div class="name_job">
                <div class="name">Gabriel Souza</div>
                <div class="job">Administrador</div>
            </div>
            </div>
            <i class='bx bx-log-out' id="log_out" ></i>
        </li>
    </ul>
</div>
  