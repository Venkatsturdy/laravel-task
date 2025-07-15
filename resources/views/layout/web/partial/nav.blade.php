{{-- <nav class="main-nav">
    <ul class="main-nav-list u-flex">
        <li class="main-nav-item u-only-wide">
            <a href="{{ route('posts.index') }}" aria-label="Homepage" class="main-nav-button alt-text is-selected">
                <span class="icon" aria-hidden="true">🏠</span>
            </a>
        </li>
        <li class="main-nav-item u-only-wide">
            <a href="#" aria-label="Pages" class="main-nav-button alt-text">
                <span class="icon" aria-hidden="true">🏁</span>
            </a>
        </li>
        <li class="main-nav-item u-only-wide">
            <a href="#" aria-label="Watch" class="main-nav-button alt-text">
                <span class="icon" aria-hidden="true">📺</span>
            </a>
        </li>
        <li class="main-nav-item u-only-wide">
            <a href="#" aria-label="Marketplace" class="main-nav-button alt-text">
                <span class="icon" aria-hidden="true">🏪</span>
            </a>
        </li>
        <li class="main-nav-item u-only-wide">
            <a href="#" aria-label="Groups" class="main-nav-button alt-text">
                <span class="icon" aria-hidden="true">👨‍👦‍👦</span>
            </a>
        </li>
        <li class="main-nav-item u-only-small">
            <button aria-label="Menu" class="main-nav-button u-animation-click" id="menuButton">
                <span class="icon icon-hamburger" aria-hidden="true"></span>
            </button>
        </li>
    </ul>
</nav> --}}

<nav class="user-nav">
    <ul class="user-nav-list u-flex">
        <li class="user-nav-item">
            <a class="user" href="{{ auth()->user()->profile_url ?? '#' }}">
                <img class="user-image"
                    src="{{ auth()->user()->image ? asset('storage/' . auth()->user()->image) : 'https://assets.codepen.io/65740/internal/avatars/users/default.png' }}"
                    height="28" width="28" alt="{{ auth()->user()->name }}">
                <span class="user-name">{{ auth()->user()->name }}</span>
            </a>
        </li>
        <li class="user-nav-item">
            <button class="icon-button alt-text" aria-label="Create">
                <span class="icon" aria-hidden="true">➕</span>
            </button>
        </li>
        <li class="user-nav-item">
            <button class="icon-button alt-text" aria-label="Messenger">
                <span class="icon" aria-hidden="true">💬</span>
            </button>
        </li>
        <li class="user-nav-item">
            <button class="icon-button alt-text" aria-label="Notifications">
                <span class="icon" aria-hidden="true">🔔</span>
            </button>
        </li>
        <li class="user-nav-item position-relative">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="icon-button alt-text" aria-label="Account">
                    <span class="icon" aria-hidden="true">🔓 Logout</span>
                </button>
            </form>
        </li>


    </ul>
</nav>

<aside class="side-a">
    <section class="common-section">
        <h2 class="section-title u-hide">User Navigation</h2>
        <ul class="common-list">
            <li class="common-list-item">
                <a href="{{ auth()->user()->profile_url ?? '#' }}" class="common-list-button">
                    <span class="icon">
                        <img class="user-image"
                            src="{{ auth()->user()->image ? asset('storage/' . auth()->user()->image) : 'https://assets.codepen.io/65740/internal/avatars/users/default.png' }}"
                            height="36" width="36" alt="{{ auth()->user()->name ?? 'User' }}">
                    </span>
                    <span class="text">{{ auth()->user()->name ?? 'User' }}</span>
                </a>
            </li>
        </ul>
    </section>
    <li class="common-list-item">
        <a class="common-list-button">
            <span class="icon" aria-hidden="true">💬</span>
            <span class="text">Messenger</span>
        </a>
    </li>
    <li class="common-list-item">
        <a class="common-list-button">
            <span class="icon">👨&zwj;👦&zwj;👦</span>
            <span class="text">Groups</span>
        </a>
    </li>
    <li class="common-list-item">
        <a class="common-list-button">
            <span class="icon">🏪</span>
            <span class="text">Marketplace</span>
        </a>
    </li>
    <li class="common-list-item">
        <a class="common-list-button">
            <span class="icon">📺</span>
            <span class="text">Videos</span>
        </a>
    </li>
    </ul>
    <button class="common-more">
        <span class="text">See More</span>
        <span class="icon">🔻</span>
    </button>
    </section>
    <section class="common-section">
        <h2 class="section-title">Shortcuts</h2>
        <ul class="common-list">
            <li class="common-list-item">
                <a href="https://www.facebook.com/groups/css.masters.israel" target="_blank" class="common-list-button">
                    <span class="icon">
                        <img src="https://scontent.ftlv1-1.fna.fbcdn.net/v/t1.0-0/cp0/c40.0.50.50a/p50x50/96018871_10156797924731933_8952430699365793792_n.jpg?_nc_cat=105&_nc_sid=ca434c&_nc_ohc=IeqrI6DbUWkAX8FXQs7&_nc_ht=scontent.ftlv1-1.fna&oh=370e999a657281ecbaf5237802520a2a&oe=5F0102F9"
                            alt="">
                    </span>
                    <span class="text">CSS Masters Israel</span>
                </a>
            </li>
            <li class="common-list-item">
                <a href="https://bit.ly/3fl9RLV" target="_blank" class="common-list-button">
                    <span class="icon" aria-hidden="true">
                        <img src="https://scontent.ftlv1-1.fna.fbcdn.net/v/t1.0-0/cp0/c23.0.50.50a/p50x50/94671938_10156774842886933_854458879973523456_o.jpg?_nc_cat=104&_nc_sid=ca434c&_nc_ohc=fgV9zrVZoW0AX8o6u--&_nc_ht=scontent.ftlv1-1.fna&oh=c8a69ca97d2ed0bd8a27b9e4f653dcf9&oe=5F013738"
                            alt="">
                    </span>
                    <span class="text">CSS Class</span>
                </a>
            </li>

        </ul>
        <button class="common-more">
            <span class="text">See More</span>
            <span class="icon">🔻</span>
        </button>
    </section>
</aside>
<aside class="side-b">
        <section class="common-section">
            <h2 class="section-title">Sponsored</h2>
            <ul class="common-list">
                <li class="common-list-item">
                    <a href="http://bit.ly/2Nd05lW" target="_blank" class="common-list-button is-ads">
                        <div class="image"><img src="https://bit.ly/3cY5ncE" width="115" alt=""></div>
                        <div class="text">
                            <h4 class="ads-title">Export Sketch to HTML with a click</h4>
                            <p class="ads-url">animaapp.com</p>
                        </div>
                    </a>
                </li>
                <li class="common-list-item">
                    <a href="http://bit.ly/2Nd05lW" target="_blank" class="common-list-button is-ads">
                        <div class="image"><img src="https://cssclasscom.files.wordpress.com/2020/06/14.png?w=300"
                                width="115" alt=""></div>
                        <div class="text">
                            <h4 class="ads-title">Front-end developers, prepare to be amazed</h4>
                            <p class="ads-url">animaapp.com</p>
                        </div>
                    </a>
                </li>
            </ul>
            <button class="common-more">
                <span class="text">See More</span>
                <span class="icon">🔻</span>
            </button>
        </section>

    </aside>