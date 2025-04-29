<div class="bg">
    <p>Selamat datang, {{ $role }}</p>
    <h2>{{ $name }}</h2>

    <img src="{{ asset('storage/' . $photo) }}"/>


    <div class="icons">
        <a href="{{ route('profile.show', ['id' => $id]) }}">
            <img src="{{ asset('profile.svg') }}">
        </a>

        <a href="{{ route('logout') }}" onClick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <img src="{{ asset('logout.svg') }}">
        </a>
    </div>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
        @csrf
    </form>
</div>