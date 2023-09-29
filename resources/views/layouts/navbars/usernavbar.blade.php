@auth()
    @include('layouts.navbars.navs.userauth')
@endauth

@guest()
    @include('layouts.navbars.navs.userguest')
@endguest
