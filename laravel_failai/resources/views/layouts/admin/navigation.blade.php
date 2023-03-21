<nav class="inline">
    <ul style="display:inline-block">
        <li style="display:inline-block">
            <a href="/" class="nav-link"
               x-nav-link
               :href="'/'"
            >
                Home
            </a>
        </li>
        <li style="display:inline-block">
            <a href="statuses" class="nav-link"
               x-nav-link
               :href="'statuses'"
            >
                Statuses
            </a>
        </li>
        <li style="display:inline-block">
            <a href="operations" class="nav-link"
               x-nav-link
               :href="'operations'"
            >
                Operations
            </a>
        </li>
        <li style="display:inline-block">
            <a href="conditions" class="nav-link"
               x-nav-link
               :href="'conditions'"
            >
                Conditions
            </a>
        </li>
        <li style="display:inline-block">
            <a href="hospitals" class="nav-link"
               x-nav-link
               :href="'hospitals'"
            >
                Hospitals
            </a>
        </li>
        <li style="display:inline-block">
            <a href="categories" class="nav-link"
               x-nav-link
               :href="'categories'"
            >
                Categories
            </a>
        </li>
        <li style="display:inline-block">
            <a href="users" class="nav-link"
               x-nav-link
               :href="'users'"
            >
                Users
            </a>
        </li>
        <li style="display:inline-block">
            <a href="{{ route('logout') }}" class="nav-link"
               x-nav-link
            >
                Log out
            </a>
        </li>
    </ul>
</nav>

