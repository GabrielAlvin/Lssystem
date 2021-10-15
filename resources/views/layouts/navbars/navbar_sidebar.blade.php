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
            <a href="{{ route('tabela_sistemateste') }}">
                <i class="fas fa-table"></i>
                <span class="links_name">{{ ('Tabela') }}</span>
            </a>
            <span class="tooltip">{{ ('Tabela') }}</span>
        </li>

        <li>
            <a href="{{ route('documentos_sistemateste') }}">
                <i class="fas fa-file-alt"></i>
                <span class="links_name">{{ ('Documentos') }}</span>
            </a>
            <span class="tooltip">{{ ('Documentos') }}</span>
        </li>

        <li>
            <a href="{{ route('perfil_sistemateste') }}">
                <i class="fas fa-user"></i>
                <span class="links_name">{{ ('Perfil') }}</span>
            </a>
            <span class="tooltip">{{ ('Perfil') }}</span>
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
                <div class="name">{{ Auth::user()->name }}</div>
                <div class="job">{{ Auth::user()->funcao }}</div>
            </div>
            </div>
            <i class='bx bx-log-out' id="log_out" ></i>
        </li>
    </ul>
</div>
  