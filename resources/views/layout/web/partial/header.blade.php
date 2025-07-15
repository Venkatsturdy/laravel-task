<header class="main-header u-flex">
    <div class="start u-flex">
        <a class="logo">f</a>
        <div class="search-box-wrapper">
            <form action="{{ route('posts.index') }}" method="GET">
                <input type="search" name="search" class="search-box" placeholder="Search Facebook"
                    value="{{ request('search') }}">
                <button type="submit" class="icon-search" aria-label="Search">🔎</button>
            </form>
        </div>
    </div>

    <nav class="main-nav">
        <ul class="main-nav-list u-flex">
            <li class="main-nav-item u-only-wide">
                <a href="{{ route('posts.index') }}" aria-label="Homepage"
                    class="main-nav-button alt-text {{ request()->routeIs('posts.index') ? 'is-selected' : '' }}">
                    <span class="icon" aria-hidden="true">🏠</span>
                </a>
            </li>

            <li class="main-nav-item u-only-wide">
                <a href="" aria-label="Pages" class="main-nav-button alt-text">
                    <span class="icon" aria-hidden="true">🏁</span>
                </a>
            </li>

            <li class="main-nav-item u-only-wide">
                <a href="" aria-label="Watch" class="main-nav-button alt-text">
                    <span class="icon" aria-hidden="true">📺</span>
                </a>
            </li>

            <li class="main-nav-item u-only-wide">
                <a href="" aria-label="Marketplace" class="main-nav-button alt-text">
                    <span class="icon" aria-hidden="true">🏪</span>
                </a>
            </li>

            <li class="main-nav-item u-only-wide">
                <a href="" aria-label="Groups" class="main-nav-button alt-text">
                    <span class="icon" aria-hidden="true">👨‍👦‍👦</span>
                </a>
            </li>

            <li class="main-nav-item u-only-small">
                <button aria-label="Menu" class="main-nav-button u-animation-click" id="menuButton">
                    <span class="icon icon-hamburger" aria-hidden="true"></span>
                </button>
            </li>
        </ul>
    </nav>

    <div class="end"></div>
</header>
