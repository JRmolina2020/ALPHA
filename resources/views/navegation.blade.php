<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item has-treeview menu-open">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-eye"></i>
        <p>
        Seguridad
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ url('usuarios') }}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Usuarios
              </p>
            </a>
          </li>
      </ul>
      <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ url('roles') }}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Roles
              </p>
            </a>
          </li>
      </ul>
      <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ url('permisos') }}" class="nav-link">
              <i class="nav-icon fas fa-bolt"></i>
              <p>
                Permisos
              </p>
            </a>
          </li>
      </ul>
    </li>
    <li class="nav-item has-treeview menu-open">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-eye"></i>
        <p>
        Insumos
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ url('auth/categoria') }}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Categoria
              </p>
            </a>
          </li>
      </ul>
    </li>
  </ul>
</nav>