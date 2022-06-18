<li class="nav-item   ">
    <a href="<?= url('/') ?>/home/" class="nav-link  active ">
        <i class="fas fa-tachometer-alt"></i>
        <p>
            Dashboard </p>
    </a>
</li>
<li class="nav-item   ">
    <a href="<?= url('/') ?>/admin/customer/" class="nav-link ">
        <i class="fas fa-address-book "></i>
        <p>
            Customer </p>
    </a>
</li>
<li class="nav-item   ">
    <a href="#" class="nav-link ">
        <i class="fas fa-user-cog "></i>
        <p>
            Managemen User <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview   ">
        <li class="nav-item">
            <a href="<?= url('/') ?>/admin/user" class="nav-link ">
                <i class="fas fa-users"></i>
                <p>User</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?= url('/') ?>/admin/role" class="nav-link ">
                <i class="fas fa-id-card"></i>
                <p>Role</p>
            </a>
        </li>
    </ul>
</li>