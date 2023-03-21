<header class="header header-light bg-primary header-sticky mb-4">
    LOGO
    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <button type="submit">Logout</button>
    </form>
    @include('layouts.admin.navigation')
</header>
