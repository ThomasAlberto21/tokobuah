<!-- Sidebar -->
<ul class="sidebar navbar-nav">

    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'products' ? 'active' : '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Products</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">

            <a class="dropdown-item" href="<?php echo site_url('admin/products') ?>">List Product</a>
        </div>
    </li>

    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'users' ? 'active' : '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-user"></i>
            <span>Users</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">

            <a class="dropdown-item" href="<?php echo site_url('admin/users') ?>">List Users</a>
        </div>
    </li>



</ul>