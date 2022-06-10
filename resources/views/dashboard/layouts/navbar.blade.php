<div class="container-fluid">
    <button class="navbar-toggler mobile-toggler hidden-lg-up" type="button">&#9776;</button>
    <a class="navbar-brand" href="#"></a>

    <ul class="nav navbar-nav hidden-md-down">
        <li class="nav-item">
            <a class="nav-link navbar-toggler layout-toggler" href="#">&#9776;</a>
        </li>
    </ul>

    <ul class="nav navbar-nav pull-left hidden-md-down">
        {{-- <li class="nav-item">
            <a class="nav-link aside-toggle" href="#"><i class="icon-bell"></i><span class="tag tag-pill tag-danger">5</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#"><i class="icon-list"></i></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#"><i class="icon-location-pin"></i></a>
        </li> --}}

        <li class="nav-item dropdown" style="padding-left: 20px">
            <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <img src="{{ asset('dashboard-assets/img/avatars/6.jpg') }}" class="img-avatar" alt="admin@bootstrapmaster.com">
                <span class="hidden-md-down">مدیر</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" style="margin-left: 20px">
                <div class="dropdown-header text-xs-center">
                    <strong>تنظیمات</strong>
                </div>
                <a class="dropdown-item" href="#"><i class="fa fa-user"></i> پروفایل</a>
                <a class="dropdown-item" href="#"><i class="fa fa-wrench"></i> تنظیمات</a>
                <a class="dropdown-item" href="#"><i class="fa fa-usd"></i> Payments<span class="tag tag-default">42</span></a>
                <div class="divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-lock"></i> خروج</a>
            </div>
        </li>

        {{-- <li class="nav-item">
            <a class="nav-link navbar-toggler aside-toggle" href="#">&#9776;</a>
        </li> --}}
    </ul>
</div>
