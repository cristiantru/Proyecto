<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel de Usuario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap y FontAwesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f8fafc;
            margin: 0;
            padding: 0;
        }

        .wrapper {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            background-color: #1f2937;
            color: white;
            width: 250px;
            padding: 20px;
            transition: all 0.3s ease;
        }

        .sidebar.collapsed {
            width: 0;
            padding: 0;
            overflow: hidden;
        }

        .sidebar a {
            color: #cbd5e0;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 5px;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        .sidebar a:hover {
            background-color: #374151;
            color: white;
        }

        .submenu {
            display: none;
            flex-direction: column;
            padding-left: 20px;
        }

        .submenu.show {
            display: flex;
        }

        .arrow {
            transition: transform 0.3s ease;
        }

        .arrow.rotate {
            transform: rotate(90deg);
        }

        .main {
            flex-grow: 1;
            padding: 20px;
            transition: margin-left 0.3s ease;
        }

        .user-info {
            margin-bottom: 20px;
        }

        .menu-toggle {
            position: fixed;
            top: 10px;
            left: 10px;
            background-color: #1f2937;
            color: white;
            border: none;
            padding: 8px 12px;
            z-index: 1000;
            border-radius: 5px;
        }

        .logout {
            color: #f87171 !important;
        }

        @media (max-width: 768px) {
            .sidebar {
                position: fixed;
                z-index: 999;
                height: 100vh;
                top: 0;
                left: 0;
            }

            .main {
                padding-top: 60px;
            }

            .menu-toggle {
                top: 15px;
                left: 15px;
            }
        }
    </style>
</head>
<body>

    <button class="menu-toggle" id="menuToggle">
        <i class="fas fa-bars"></i>
    </button>

    <div class="wrapper">
        <!-- Sidebar -->
        <div class="sidebar" id="sidebar">
            <h5><i class="fas fa-user-shield"></i> Panel</h5>

            <div class="user-info">
                <strong>{{ Auth::user()->name }}</strong>
                <small>Rol: {{ Auth::user()->role }}</small>
            </div>

            @if(Auth::user()->role === 'vendedor')
                <a href="javascript:void(0)" class="toggle-submenu">
                    <span><i class="fas fa-box"></i> Productos</span>
                    <i class="fas fa-chevron-right arrow"></i>
                </a>
                <div class="submenu">
                    <a href="{{ route('productos') }}"><i class="fas fa-eye"></i> Ver Productos</a>
                    <a href="{{ route('notificaciones') }}"><i class="fas fa-bell"></i> Notificaciones</a>
                    <a href="{{ route('ubicaciones') }}"><i class="fas fa-map-marker-alt"></i> Ubicaciones</a>
                </div>
            @elseif(Auth::user()->role === 'cliente')
                <a href="javascript:void(0)" class="toggle-submenu">
                    <span><i class="fas fa-shopping-cart"></i> Comprar</span>
                    <i class="fas fa-chevron-right arrow"></i>
                </a>
                <div class="submenu">
                    <a href="{{ route('proveedor') }}"><i class="fas fa-store"></i> Proveedor</a>
                    <a href="{{ route('notificaciones') }}"><i class="fas fa-bell"></i> Notificaciones</a>
                    <a href="{{ route('ubicaciones') }}"><i class="fas fa-map-marker-alt"></i> Ubicaciones</a>
                </div>
            @endif

            <hr class="text-light">

            <a href="{{ route('logout') }}"
               class="logout"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i> Cerrar sesión
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                @csrf
            </form>
        </div>

        <!-- Contenido Principal -->
        <div class="main">
            <h1>Bienvenido, {{ Auth::user()->name }}</h1>
            <p>Estás dentro del sistema como <strong>{{ Auth::user()->role }}</strong>.</p>
        </div>
    </div>

    <script>
        // Mostrar/Ocultar menú lateral
        const toggleBtn = document.getElementById('menuToggle');
        const sidebar = document.getElementById('sidebar');
        toggleBtn.addEventListener('click', () => {
            sidebar.classList.toggle('collapsed');
        });

        // Mostrar/Ocultar submenús
        const submenuToggles = document.querySelectorAll('.toggle-submenu');
        submenuToggles.forEach(toggle => {
            toggle.addEventListener('click', () => {
                const submenu = toggle.nextElementSibling;
                submenu.classList.toggle('show');
                toggle.querySelector('.arrow').classList.toggle('rotate');
            });
        });
    </script>
</body>
</html>
