<div class="navbar-bg"></div>
<!-- Navbar Start -->
@include('admin.layouts.navbar')
<!-- Navbar End -->

<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        {{-- <div class="sidebar-brand">
            <figure class="mb-0 mx-auto">
                <a href="https://ic-syekhburhanuddin.com">
                    <img src="https://ic-syekhburhanuddin.com/uploads/uLvyvgE4jJFrK6efQWKZBh20IHaZqa.webp"
                        class="img-fluid logo" aria-label="Go to ic-syekhburhanuddin" alt="ic-syekhburhanuddin Logo"
                        style="width: 120px;">
                </a>
            </figure>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <figure class="mb-0 mx-auto">
                <a href="https://ic-syekhburhanuddin.com">
                    <img src="https://ic-syekhburhanuddin.com/uploads/uLvyvgE4jJFrK6efQWKZBh20IHaZqa.webp"
                        class="img-fluid logo" aria-label="Go to ic-syekhburhanuddin" alt="ic-syekhburhanuddin Logo"
                        style="width: 120px;">
                </a>
            </figure>
        </div> --}}

        <div class="sidebar-brand">
            <a href="#">IC-Syekhburhanuddin</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="#">IS</a>
        </div>


        <ul class="sidebar-menu">
            <!-- Dashboard -->
            <li class="menu-header">{{ __('admin.Dashboard') }}</li>
            <li class="active">
                <a href="{{ route('admin.dashboard') }}" class="nav-link">
                    <i class="fas fa-fire"></i><span>{{ __('admin.Dashboard') }}</span>
                </a>
            </li>

            <!-- Artikel -->
            @if (canAccess(['category index', 'category create', 'category udpate', 'category delete']))
                <li class="menu-header">{{ __('admin.Artikel') }}</li>
                <li class="{{ setSidebarActive(['admin.category.*']) }}">
                    <a class="nav-link" href="{{ route('admin.category.index') }}">
                        <i class="fas fa-tags"></i>
                        <span>{{ __('admin.Category') }}</span>
                    </a>
                </li>
            @endif

            @if (canAccess(['news index', 'image index']))
                <li class="dropdown {{ setSidebarActive(['admin.news.*', 'admin.pending.news', 'admin.images.*']) }}">
                    <a href="#" class="nav-link has-dropdown">
                        <i class="fas fa-file-alt"></i>
                        <span>{{ __('admin.Artikel') }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="{{ setSidebarActive(['admin.news.index']) }}">
                            <a class="nav-link"
                                href="{{ route('admin.news.index') }}">{{ __('admin.All Artikel') }}</a>
                        </li>
                        <li class="{{ setSidebarActive(['admin.news.create']) }}">
                            <a class="nav-link"
                                href="{{ route('admin.news.create') }}">{{ __('admin.Create Artikel') }}</a>
                        </li>
                    </ul>
                </li>
            @endif





            <!-- Download -->
            @if (canAccess(['download index']))
                <li class="menu-header">{{ __('admin.Download') }}</li>
                <li class="{{ setSidebarActive(['admin.download_cat.*']) }}">
                    <a class="nav-link" href="{{ route('admin.download_cat.index') }}">
                        <i class="fas fa-tags"></i>
                        <span>{{ __('admin.Category') }}</span>
                    </a>
                </li>
            @endif

            @if (canAccess(['download index']))
                <li class="dropdown {{ setSidebarActive(['admin.download.*']) }}">
                    <a href="#" class="nav-link has-dropdown">
                        <i class="fas fa-file-alt"></i>
                        <span>{{ __('admin.Download') }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="{{ setSidebarActive(['admin.download.index']) }}">
                            <a class="nav-link"
                                href="{{ route('admin.download.index') }}">{{ __('admin.All Download') }}</a>
                        </li>
                    </ul>
                </li>
            @endif


            <!-- E-Koran -->
            @if (canAccess(['ekoran index']))
                <li class="menu-header">{{ __('admin.E-Koran') }}</li>
                <li class="{{ setSidebarActive(['admin.ekoran.*']) }}">
                    <a class="nav-link" href="{{ route('admin.ekoran.index') }}">
                        <i class="fas fa-newspaper"></i>
                        <span>{{ __('admin.E-Koran') }}</span>
                    </a>
                </li>
            @endif

            <!-- Pendidikan -->
            @if (canAccess(['pendidikan index']))
                <li class="menu-header">{{ __('admin.Pendidikan') }}</li>
                <li class="{{ setSidebarActive(['admin.pendidikan.*']) }}">
                    <a class="nav-link" href="{{ route('admin.pendidikan.index') }}">
                        <i class="fas fa-graduation-cap"></i>
                        <span>{{ __('admin.Pendidikan') }}</span>
                    </a>
                </li>
            @endif

            <!-- Pengurus -->
            @if (canAccess(['pengurus index']))
                <li class="menu-header">{{ __('admin.Pengurus') }}</li>
                <li class="{{ setSidebarActive(['admin.pengurus.*']) }}">
                    <a class="nav-link" href="{{ route('admin.pengurus.index') }}">
                        <i class="fas fa-users-cog"></i>
                        <span>{{ __('admin.Struktur Organisasi') }}</span>
                    </a>
                </li>
            @endif


            <!-- Podcast -->
            @if (canAccess(['podcast playlist index']) || canAccess(['podcast index']))
                <li class="menu-header">{{ __('admin.Podcast') }}</li>
            @endif

            @if (canAccess(['podcast playlist index']))
                <li class="{{ setSidebarActive(['admin.podcast-playlist.*']) }}">
                    <a class="nav-link" href="{{ route('admin.podcast-playlist.index') }}">
                        <i class="fas fa-headphones"></i>
                        <span>{{ __('admin.Playlist Podcast') }}</span>
                    </a>
                </li>
            @endif

            @if (canAccess(['podcast index']))
                <li class="dropdown {{ setSidebarActive(['admin.podcast.*']) }}">
                    <a href="#" class="nav-link has-dropdown">
                        <i class="fas fa-podcast"></i>
                        <span>{{ __('admin.Podcast') }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="{{ setSidebarActive(['admin.podcast.index']) }}">
                            <a class="nav-link"
                                href="{{ route('admin.podcast.index') }}">{{ __('admin.All Podcast') }}</a>
                        </li>
                        @if (canAccess(['podcast create']))
                            <li class="{{ setSidebarActive(['admin.podcast.create']) }}">
                                <a class="nav-link"
                                    href="{{ route('admin.podcast.create') }}">{{ __('admin.Create Podcast') }}</a>
                            </li>
                        @endif
                    </ul>
                </li>
            @endif

            <!-- Streaming -->
            @if (canAccess(['streaming index']))
                <li class="menu-header">{{ __('admin.Streaming') }}</li>
                <li class="{{ setSidebarActive(['admin.streaming.*']) }}">
                    <a class="nav-link" href="{{ route('admin.streaming.index') }}">
                        <i class="fas fa-stream"></i>
                        <span>{{ __('admin.Streaming') }}</span>
                    </a>
                </li>
            @endif



            <!-- Vidio -->
            @if (canAccess(['playlist index']) || canAccess(['video index']))
                <li class="menu-header">{{ __('admin.Vidio') }}</li>
            @endif

            @if (canAccess(['playlist index']))
                <li class="{{ setSidebarActive(['admin.playlist.*']) }}">
                    <a class="nav-link" href="{{ route('admin.playlist.index') }}">
                        <i class="fas fa-list-ol"></i>
                        <span>{{ __('admin.Playlist Vidio') }}</span>
                    </a>
                </li>
            @endif

            @if (canAccess(['video index']))
                <li class="dropdown {{ setSidebarActive(['admin.video.*']) }}">
                    <a href="#" class="nav-link has-dropdown">
                        <i class="fas fa-video"></i>
                        <span>{{ __('admin.Vidio') }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="{{ setSidebarActive(['admin.video.index']) }}">
                            <a class="nav-link"
                                href="{{ route('admin.video.index') }}">{{ __('admin.All Vidio') }}</a>
                        </li>
                        @if (canAccess(['video create']))
                            <li class="{{ setSidebarActive(['admin.video.create']) }}">
                                <a class="nav-link"
                                    href="{{ route('admin.video.create') }}">{{ __('admin.Create Vidio') }}</a>
                            </li>
                        @endif
                    </ul>
                </li>
            @endif

            <!-- Zakat & Wakaf -->

            <!-- Donasi -->
            @if (canAccess(['donasi index','zakat index']))
                <li class="menu-header">{{ __('admin.Donasi & Zakat') }}</li>
                <li class="{{ setSidebarActive(['admin.donasi.*']) }}">
                    <a class="nav-link" href="{{ route('admin.donasi.index') }}">
                        <i class="fas fa-hand-holding-heart"></i>
                        <span>{{ __('admin.Donasi') }}</span>
                    </a>
                </li>
                <li class="{{ setSidebarActive(['admin.zakat.*']) }}">
                    <a class="nav-link" href="{{ route('admin.zakat.index') }}">
                        <i class="fas fa-hand-holding-heart"></i>
                        <span>{{ __('admin.Zakat & Wakaf') }}</span>
                    </a>
                </li>
            @endif







            <!-- Settings -->
            <li class="menu-header">{{ __('admin.Setting') }}</li>

            @if (canAccess(['about index', 'contact index', 'kebijakan index']))
                <li class="dropdown {{ setSidebarActive(['admin.about.*', 'admin.contact.*']) }}">
                    <a href="#" class="nav-link has-dropdown">
                        <i class="fas fa-file-invoice"></i>
                        <span>{{ __('admin.Pages') }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        @if (canAccess(['about index']))
                            <li class="{{ setSidebarActive(['admin.about.*']) }}">
                                <a class="nav-link"
                                    href="{{ route('admin.about.index') }}">{{ __('admin.About Page') }}</a>
                            </li>
                        @endif
                        @if (canAccess(['kebijakan index']))
                            <li class="{{ setSidebarActive(['admin.kebijakan.*']) }}">
                                <a class="nav-link" href="{{ route('admin.kebijakan.index') }}">Kebijakan</a>
                            </li>
                        @endif
                        @if (canAccess(['conatact index']))
                            <li class="{{ setSidebarActive(['admin.contact.*']) }}">
                                <a class="nav-link"
                                    href="{{ route('admin.contact.index') }}">{{ __('admin.Contact Page') }}</a>
                            </li>
                        @endif
                    </ul>
                </li>
            @endif

            @if (canAccess(['contact message index']))
                <li class="{{ setSidebarActive(['admin.contact-message.*']) }}">
                    <a class="nav-link" href="{{ route('admin.contact-message.index') }}">
                        <i class="fas fa-envelope"></i>
                        <span>{{ __('admin.Contact Messages') }}</span>
                        @if ($unReadMessages > 0)
                            <i class="badge bg-danger" style="color: #fff">{{ $unReadMessages }}</i>
                        @endif
                    </a>
                </li>
            @endif

            @if (canAccess(['advertisement index']))
                <li class="{{ setSidebarActive(['admin.ad.*']) }}">
                    <a class="nav-link" href="{{ route('admin.ad.index') }}">
                        <i class="fas fa-ad"></i>
                        <span>{{ __('admin.Advertisement') }}</span>
                    </a>
                </li>
            @endif

            @if (canAccess(['subscribers index']))
                <li class="{{ setSidebarActive(['admin.subscribers.*']) }}">
                    <a class="nav-link" href="{{ route('admin.subscribers.index') }}">
                        <i class="fas fa-users"></i>
                        <span>{{ __('admin.Subscribers') }}</span>
                    </a>
                </li>
            @endif

            @if (canAccess(['footer index']))
                <li
                    class="dropdown {{ setSidebarActive([
                        'admin.social-link.*',
                        'admin.footer-info.*',
                        'admin.footer-grid-one.*',
                        'admin.footer-grid-three.*',
                        'admin.footer-grid-two.*',
                    ]) }}">
                    <a href="#" class="nav-link has-dropdown">
                        <i class="fas fa-shoe-prints"></i>
                        <span>{{ __('admin.Footer') }} {{ __('admin.Setting') }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="{{ setSidebarActive(['admin.social-link.*']) }}">
                            <a class="nav-link"
                                href="{{ route('admin.social-link.index') }}">{{ __('admin.Social Links') }}</a>
                        </li>
                        <li class="{{ setSidebarActive(['admin.footer-info.*']) }}">
                            <a class="nav-link"
                                href="{{ route('admin.footer-info.index') }}">{{ __('admin.Footer Info') }}</a>
                        </li>
                        <li class="{{ setSidebarActive(['admin.footer-grid-one.*']) }}">
                            <a class="nav-link"
                                href="{{ route('admin.footer-grid-one.index') }}">{{ __('admin.Footer Grid One') }}</a>
                        </li>
                        <li class="{{ setSidebarActive(['admin.footer-grid-two.*']) }}">
                            <a class="nav-link"
                                href="{{ route('admin.footer-grid-two.index') }}">{{ __('admin.Footer Grid Two') }}</a>
                        </li>
                        <li class="{{ setSidebarActive(['admin.footer-grid-three.*']) }}">
                            <a class="nav-link"
                                href="{{ route('admin.footer-grid-three.index') }}">{{ __('admin.Footer Grid Three') }}</a>
                        </li>
                    </ul>
                </li>
            @endif

            @if (canAccess(['access management index']))
                <li class="dropdown {{ setSidebarActive(['admin.role.*', 'admin.role-users.*']) }}">
                    <a href="#" class="nav-link has-dropdown">
                        <i class="fas fa-user-shield"></i>
                        <span>{{ __('admin.Access Management') }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="{{ setSidebarActive(['admin.role-users.*']) }}">
                            <a class="nav-link"
                                href="{{ route('admin.role-users.index') }}">{{ __('admin.Role Users') }}</a>
                        </li>
                        <li class="{{ setSidebarActive(['admin.role.*']) }}">
                            <a class="nav-link"
                                href="{{ route('admin.role.index') }}">{{ __('admin.Roles and Permissions') }}</a>
                        </li>
                    </ul>
                </li>
            @endif

            @if (canAccess(['setting index']))
                <li class="{{ setSidebarActive(['admin.setting.*']) }}">
                    <a class="nav-link" href="{{ route('admin.setting.index') }}">
                        <i class="fas fa-cog"></i>
                        <span>{{ __('admin.Settings') }}</span>
                    </a>
                </li>
            @endif

            @if (canAccess(['languages index']))
                <li
                    class="dropdown {{ setSidebarActive([
                        'admin.frontend-localization.index',
                        'admin.admin-localization.index',
                        'admin.language.*',
                    ]) }}">
                    <a href="#" class="nav-link has-dropdown">
                        <i class="fas fa-language"></i>
                        <span>{{ __('admin.Localization') }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="{{ setSidebarActive(['admin.language.*']) }}">
                            <a class="nav-link" href="{{ route('admin.language.index') }}">
                                <span>{{ __('admin.Languages') }}</span>
                            </a>
                        </li>
                        <li class="{{ setSidebarActive(['admin.frontend-localization.index']) }}">
                            <a class="nav-link" href="{{ route('admin.frontend-localization.index') }}">
                                <span>{{ __('admin.Frontend Lang') }}</span>
                            </a>
                        </li>
                        <li class="{{ setSidebarActive(['admin.admin-localization.index']) }}">
                            <a class="nav-link" href="{{ route('admin.admin-localization.index') }}">
                                <span>{{ __('admin.Admin Lang') }}</span>
                            </a>
                        </li>
                    </ul>
                </li>
            @endif
        </ul>
    </aside>
</div>
