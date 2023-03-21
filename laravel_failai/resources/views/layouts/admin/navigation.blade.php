<nav class="inline">
    <ul style="display:inline-block">
        <li style="display:inline-block">
            <a href="{{ route('patients.index') }}" class="nav-link">
                Patients
            </a>
        </li>
        <li style="display:inline-block">
            <a href="{{ route('statuses.index') }}" class="nav-link">
                Statuses
            </a>
        </li>
        <li style="display:inline-block">
            <a href="{{ route('operations.index') }}" class="nav-link">
                Operations
            </a>
        </li>
        <li style="display:inline-block">
            <a href="{{ route('conditions.index') }}" class="nav-link">
                Conditions
            </a>
        </li>
        <li style="display:inline-block">
            <a href="{{ route('hospitals.index') }}" class="nav-link">
                Hospitals
            </a>
        </li>
        <li style="display:inline-block">
            <a href="{{ route('categories.index') }}" class="nav-link">
                Categories
            </a>
        </li>
        <li style="display:inline-block">
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <button>Atsijungti</button>
            </form>
        </li>
    </ul>
</nav>

