@auth('admin')
    @include('layouts.navs.navbar.auth')
@endauth

@guest
    @include('layouts.navs.navbar.guest')
@endguest
