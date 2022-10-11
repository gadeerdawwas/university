<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar">
        <div class="side-header">
            <a class="header-brand1" href="index.html">
                <img src="{{ asset('asset/site/logo-removebg-preview.png')}}" class="header-brand-img desktop-logo" alt="logo">
                <img src="{{ asset('asset/site/logo-removebg-preview.png')}}" class="header-brand-img toggle-logo" alt="logo">
                <img src="{{ asset('asset/site/logo-removebg-preview.png')}}" class="header-brand-img light-logo" alt="logo">
                <img src="{{ asset('asset/site/logo-removebg-preview.png')}}" class="header-brand-img light-logo1" alt="logo">
            </a>
            <!-- LOGO -->
        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"/></svg></div>
            <ul class="side-menu">
                <li class="sub-category">
                    <h3>Main</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="index.html"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span></a>
                </li>

                @if(auth()->user()->is_student === 1)

                    <li class="slide">
                        <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-shopping-bag"></i>
                            <span class="side-menu__label">Prject</span><i class="angle fe fe-chevron-right"></i></a>
                        <ul class="slide-menu">
                            <li><a href="{{ route('supervisor.projects.index') }}" class="slide-item"> All project</a></li>
                            <li><a href="{{ route('supervisor.projects.create') }}" class="slide-item"> Create project</a></li>

                        </ul>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-shopping-bag"></i>
                            <span class="side-menu__label">Order</span><i class="angle fe fe-chevron-right"></i></a>
                        <ul class="slide-menu">
                            <li><a href="{{ route('supervisor.order') }}" class="slide-item"> All Order</a></li>

                        </ul>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-shopping-bag"></i>
                            <span class="side-menu__label">Group</span><i class="angle fe fe-chevron-right"></i></a>
                        <ul class="slide-menu">
                            <li><a href="{{ route('supervisor.group') }}" class="slide-item"> All Group</a></li>

                        </ul>
                    </li>
                @endif

                @if(auth()->user()->is_student === 0)

                    <li class="slide">
                        <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-shopping-bag"></i>
                            <span class="side-menu__label">Profile</span><i class="angle fe fe-chevron-right"></i></a>
                        <ul class="slide-menu">
                            <li><a href="{{ route('student.index') }}" class="slide-item"> Edit Profile</a></li>

                        </ul>
                    </li>

                    <li class="slide">
                        <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-shopping-bag"></i>
                            <span class="side-menu__label">Prject</span><i class="angle fe fe-chevron-right"></i></a>
                        <ul class="slide-menu">
                            <li><a href="{{ route('student.project') }}" class="slide-item"> All project</a></li>

                        </ul>
                    </li>
                @endif



                {{-- <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-map-pin"></i><span class="side-menu__label">prject</span><i class="angle fe fe-chevron-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Maps</a></li>
                    </ul>
                </li> --}}

            </ul>
        </div>
    </div>
    <!--/APP-SIDEBAR-->
</div>
