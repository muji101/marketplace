<!-- BEGIN: Side Menu -->
<nav class="side-nav">
    <a href="" class="intro-x flex items-center pl-5 pt-4">
        <img alt="Rubick Tailwind HTML Admin Template" class="w-6" src="/source/dist/images/logo.svg">
        <span class="hidden xl:block text-white text-lg ml-3"> My<span class="font-medium">store</span> </span>
    </a>
    <div class="side-nav__devider my-6"></div>
    <ul>
        <li>
            <a href="/admin" class="side-menu  side-menu--active">
                <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                <div class="side-menu__title"> Home </div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="shopping-bag"></i> </div>
                <div class="side-menu__title">
                    Produk 
                    <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="/admin/products" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="list"></i> </div>
                        <div class="side-menu__title"> Daftar Produk </div>
                    </a>
                </li>
                <li>
                    <a href="/admin/product-create" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="file-plus"></i> </div>
                        <div class="side-menu__title"> Tambah Produk </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;.html" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="grid"></i> </div>
                <div class="side-menu__title">
                    Kategori 
                    <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="/admin/categories" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="list"></i> </div>
                        <div class="side-menu__title"> Daftar Kategori</div>
                    </a>
                </li>
                <li>
                    <a href="/admin/category-create" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="file-plus"></i> </div>
                        <div class="side-menu__title"> Tambah Kategori </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;.html" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="image"></i> </div>
                <div class="side-menu__title">
                    Galeri 
                    <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="/admin/galleries" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="list"></i> </div>
                        <div class="side-menu__title"> Daftar Galeri</div>
                    </a>
                </li>
                <li>
                    <a href="/admin/gallery-create" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="file-plus"></i> </div>
                        <div class="side-menu__title"> Tambah Galeri </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;.html" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                <div class="side-menu__title">
                    Pengguna 
                    <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="{{ route('user.index') }}" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="list"></i> </div>
                        <div class="side-menu__title"> Daftar Pengguna</div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('user.create') }}" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="file-plus"></i> </div>
                        <div class="side-menu__title"> Tambah Pengguna </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;.html" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="briefcase"></i> </div>
                <div class="side-menu__title">
                    Toko 
                    <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="/admin/stores" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="list"></i> </div>
                        <div class="side-menu__title"> Daftar Toko</div>
                    </a>
                </li>
                <li>
                    <a href="/admin/store-create" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="file-plus"></i> </div>
                        <div class="side-menu__title"> Tambah Toko </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;.html" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="tv"></i> </div>
                <div class="side-menu__title">
                    Promosi 
                    <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="/admin/promotions" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="list"></i> </div>
                        <div class="side-menu__title"> Daftar Promosi</div>
                    </a>
                </li>
                <li>
                    <a href="/admin/promotion-create" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="file-plus"></i> </div>
                        <div class="side-menu__title"> Tambah Promosi </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="/admin/transactions" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="truck"></i> </div>
                <div class="side-menu__title"> Transaksi </div>
            </a>
        </li>
        <li>
            <a href="/admin/logouts" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="log-out"></i> </div>
                <div class="side-menu__title"> Keluar </div>
            </a>
        </li>
    </ul>
</nav>
<!-- END: Side Menu -->