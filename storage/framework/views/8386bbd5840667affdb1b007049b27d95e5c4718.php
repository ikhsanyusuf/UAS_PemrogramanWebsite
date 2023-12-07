<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="<?php echo e(route('home')); ?>" class="app-brand-link">
            <img src="<?php echo e(asset('logo-black.png')); ?>" alt="<?php echo e(config('app.name')); ?>" width="35">
            <span class="app-brand-text demo text-black fw-bolder ms-2"><?php echo e(config('app.name')); ?></span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Home -->
        <li class="menu-item <?php echo e(\Illuminate\Support\Facades\Route::is('home') ? 'active' : ''); ?>">
            <a href="<?php echo e(route('home')); ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="<?php echo e(__('menu.home')); ?>"><?php echo e(__('menu.home')); ?></div>
            </a>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text"><?php echo e(__('menu.header.main_menu')); ?></span>
        </li>
        <li class="menu-item <?php echo e(\Illuminate\Support\Facades\Route::is('transaction.*') ? 'active open' : ''); ?>">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-mail-send"></i>
                <div data-i18n="<?php echo e(__('menu.transaction.menu')); ?>"><?php echo e(__('menu.transaction.menu')); ?></div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item <?php echo e(\Illuminate\Support\Facades\Route::is('transaction.incoming.*') || \Illuminate\Support\Facades\Route::is('transaction.disposition.*') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('transaction.incoming.index')); ?>" class="menu-link">
                        <div
                            data-i18n="<?php echo e(__('menu.transaction.incoming_letter')); ?>"><?php echo e(__('menu.transaction.incoming_letter')); ?></div>
                    </a>
                </li>
                <li class="menu-item <?php echo e(\Illuminate\Support\Facades\Route::is('transaction.outgoing.*') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('transaction.outgoing.index')); ?>" class="menu-link">
                        <div
                            data-i18n="<?php echo e(__('menu.transaction.outgoing_letter')); ?>"><?php echo e(__('menu.transaction.outgoing_letter')); ?></div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item <?php echo e(\Illuminate\Support\Facades\Route::is('agenda.*') ? 'active open' : ''); ?>">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-book"></i>
                <div data-i18n="<?php echo e(__('menu.agenda.menu')); ?>"><?php echo e(__('menu.agenda.menu')); ?></div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item <?php echo e(\Illuminate\Support\Facades\Route::is('agenda.incoming') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('agenda.incoming')); ?>" class="menu-link">
                        <div
                            data-i18n="<?php echo e(__('menu.agenda.incoming_letter')); ?>"><?php echo e(__('menu.agenda.incoming_letter')); ?></div>
                    </a>
                </li>
                <li class="menu-item <?php echo e(\Illuminate\Support\Facades\Route::is('agenda.outgoing') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('agenda.outgoing')); ?>" class="menu-link">
                        <div
                            data-i18n="<?php echo e(__('menu.agenda.outgoing_letter')); ?>"><?php echo e(__('menu.agenda.outgoing_letter')); ?></div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text"><?php echo e(__('menu.header.other_menu')); ?></span>
        </li>
        <li class="menu-item <?php echo e(\Illuminate\Support\Facades\Route::is('gallery.*') ? 'active open' : ''); ?>">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-images"></i>
                <div data-i18n="<?php echo e(__('menu.gallery.menu')); ?>"><?php echo e(__('menu.gallery.menu')); ?></div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item <?php echo e(\Illuminate\Support\Facades\Route::is('gallery.incoming') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('gallery.incoming')); ?>" class="menu-link">
                        <div
                            data-i18n="<?php echo e(__('menu.gallery.incoming_letter')); ?>"><?php echo e(__('menu.gallery.incoming_letter')); ?></div>
                    </a>
                </li>
                <li class="menu-item <?php echo e(\Illuminate\Support\Facades\Route::is('gallery.outgoing') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('gallery.outgoing')); ?>" class="menu-link">
                        <div
                            data-i18n="<?php echo e(__('menu.gallery.outgoing_letter')); ?>"><?php echo e(__('menu.gallery.outgoing_letter')); ?></div>
                    </a>
                </li>
            </ul>
        </li>
        <?php if(auth()->user()->role == 'admin'): ?>
            <li class="menu-item <?php echo e(\Illuminate\Support\Facades\Route::is('reference.*') ? 'active open' : ''); ?>">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-analyse"></i>
                    <div data-i18n="<?php echo e(__('menu.reference.menu')); ?>"><?php echo e(__('menu.reference.menu')); ?></div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item <?php echo e(\Illuminate\Support\Facades\Route::is('reference.classification.*') ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('reference.classification.index')); ?>" class="menu-link">
                            <div
                                data-i18n="<?php echo e(__('menu.reference.classification')); ?>"><?php echo e(__('menu.reference.classification')); ?></div>
                        </a>
                    </li>
                    <li class="menu-item <?php echo e(\Illuminate\Support\Facades\Route::is('reference.status.*') ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('reference.status.index')); ?>" class="menu-link">
                            <div data-i18n="<?php echo e(__('menu.reference.status')); ?>"><?php echo e(__('menu.reference.status')); ?></div>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- User Management -->
            <li class="menu-item <?php echo e(\Illuminate\Support\Facades\Route::is('user.*') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('user.index')); ?>" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-user-pin"></i>
                    <div data-i18n="<?php echo e(__('menu.users')); ?>"><?php echo e(__('menu.users')); ?></div>
                </a>
            </li>
        <?php endif; ?>
    </ul>
</aside>
<?php /**PATH C:\xampp\htdocs\laravel-surat-menyurat-v1-main\resources\views/components/sidebar.blade.php ENDPATH**/ ?>