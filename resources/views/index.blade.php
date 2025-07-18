<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Facebook Full Responsive Design - main feed</title>
    <link rel="stylesheet" href="https://public.codepenassets.com/css/reset-2.0.min.css">
    <link rel="stylesheet" href="{{ asset('resource/web/style.css') }}">

</head>

<body>
    <!-- partial:index.partial.html -->
    <button class="icon-button e-dark-mode-button u-animation-click" id="darkMode" aria-label="Dark Mode"><span
            class="icon" aria-hidden="true">🌜</span></button>
    <div class="common-structure">
        <header class="main-header u-flex">
            <div class="start u-flex">
                <a class="logo">f</a>
                <div class="search-box-wrapper">
                    <input type="search" class="search-box" placeholder="Search Facebook">
                    <span class="icon-search" aria-label="hidden">🔎</span>
                </div>
            </div>
            <nav class="main-nav">
                <ul class="main-nav-list u-flex">
                    <li class="main-nav-item u-only-wide"><a aria-label="Homepage"
                            class="main-nav-button alt-text is-selected"><span class="icon"
                                aria-hidden="true">🏠</span></a></li>
                    <li class="main-nav-item u-only-wide"><a aria-label="Pages" class="main-nav-button alt-text"><span
                                class="icon" aria-hidden="true">🏁</span></a></li>
                    <li class="main-nav-item u-only-wide"><a aria-label="Watch" class="main-nav-button alt-text"><span
                                class="icon" aria-hidden="true">📺</span></a></li>
                    <li class="main-nav-item u-only-wide"><a aria-label="Marketplace"
                            class="main-nav-button alt-text"><span class="icon" aria-hidden="true">🏪</span></a></li>
                    <li class="main-nav-item u-only-wide"><a aria-label="Groups" class="main-nav-button alt-text"><span
                                class="icon" aria-hidden="true">👨‍👦‍👦</span></a></li>
                    <li class="main-nav-item u-only-small"><button aria-label="Menu"
                            class="main-nav-button u-animation-click" id="menuButton"><span class="icon icon-hamburger"
                                aria-hidden="true"></span></button></li>
                </ul>
            </nav>
            <div class="end"></div>
        </header>
        <nav class="user-nav">
            <ul class="user-nav-list u-flex">
                <li class="user-nav-item">
                    <a class="user">
                        <img class="user-image" src="https://assets.codepen.io/65740/internal/avatars/users/default.png"
                            height="28" width="28" alt="">
                        <span class="user-name">Elad</span>
                    </a>
                </li>
                <li class="user-nav-item">
                    <button class="icon-button alt-text" aria-label="Create"><span class="icon"
                            aria-hidden="true">➕</span></button>
                </li>
                <li class="user-nav-item">
                    <button class="icon-button alt-text" aria-label="Messenger"><span class="icon"
                            aria-hidden="true">💬</span></button>
                </li>
                <li class="user-nav-item">
                    <button class="icon-button alt-text" aria-label="Notifications"><span class="icon"
                            aria-hidden="true">🔔</span></button>
                </li>
                <li class="user-nav-item">
                    <button class="icon-button alt-text" aria-label="Account"><span class="icon"
                            aria-hidden="true">🔻</span></button>
                </li>
            </ul>
        </nav>
        <aside class="side-a">
            <section class="common-section">
                <h2 class="section-title u-hide">User Navigation</h2>
                <ul class="common-list">
                    <li class="common-list-item">
                        <a href="https://www.facebook.com/eladsc/" target="_blank" class="common-list-button">
                            <span class="icon">
                                <img class="user-image"
                                    src="https://assets.codepen.io/65740/internal/avatars/users/default.png"
                                    height="36" width="36" alt="">
                            </span>
                            <span class="text">Elad Shechter</span>
                        </a>
                    </li>
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
                        <a href="https://www.facebook.com/groups/css.masters.israel" target="_blank"
                            class="common-list-button">
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
        <main class="main-feed">
            <ul class="main-feed-list">
                <li class="main-feed-item">
                    <article class="common-post">
                        <header class="common-post-header u-flex">
                            <img src="https://assets.codepen.io/65740/internal/avatars/users/default.png"
                                class="user-image" width="40" height="40" alt="">
                            <div class="common-post-info">
                                <div class="user-and-group u-flex">
                                    <a href="https://www.facebook.com/eladsc" target="_blank">Elad Shechter</a>
                                </div>
                                <div class="time-and-privacy"><time datetime="">October 14 at 1:51 PM</time><span
                                        class="icon icon-privacy">🌎</span></div>
                            </div>
                            <button class="icon-button-2 u-margin-inline-start" aria-label="more options"><span
                                    class="icon-menu"></span></button>
                        </header>
                        <div class="common-post-content common-content">
                            <p>
                                <b>If you like my stuff you can find me on:</b><br> Twitter: <a
                                    href="https://twitter.com/eladsc" target="_blank">@eladsc</a><br>
                                My website: <a href="https://eladsc.com/" target="_blank">eladsc.com</a><br>
                                CodePen: <a href="https://codepen.io/elad2412"
                                    target="_blank">codepen.io/elad2412</a><br>
                                Medium: <a href="https://medium.com/@elad" target="_blank">medium.com/@elad</a>
                            </p>
                        </div>
                        <div class="summary u-flex">
                            <div class="reactions">❤️</div>
                            <div class="reactions-total">17</div>
                            <div class="total-comments u-margin-inline-start">
                                <a>4 Shares</a>
                            </div>
                        </div>
                        <section class="actions-buttons">
                            <ul class="actions-buttons-list u-flex">
                                <li class="actions-buttons-item"><button class="actions-buttons-button"><span
                                            class="icon">👍</span><span class="text">Like</span></button></li>
                                <li class="actions-buttons-item"><button class="actions-buttons-button"><span
                                            class="icon">💬</span><span class="text">Comment</span></button></li>
                                <li class="actions-buttons-item"><button class="actions-buttons-button"><span
                                            class="icon">💌</span><span class="text">Share</span></button></li>
                            </ul>
                        </section>
                    </article>
                </li>
                <li class="main-feed-item">
                    <article class="common-post">
                        <header class="common-post-header u-flex">
                            <img src="https://assets.codepen.io/65740/internal/avatars/users/default.png"
                                class="user-image" width="40" height="40" alt="">
                            <div class="common-post-info">
                                <div class="user-and-group u-flex">
                                    <a href="https://www.facebook.com/eladsc" target="_blank">Elad Shechter</a>
                                </div>
                                <div class="time-and-privacy"><time datetime="">August 24 at 7:21 PM</time><span
                                        class="icon icon-privacy">🌎</span></div>
                            </div>
                            <button class="icon-button-2 u-margin-inline-start" aria-label="more options"><span
                                    class="icon-menu"></span></button>
                        </header>
                        <div class="common-post-content common-content">
                            <p><b>Why CSS Logical Properties Aren’t Ready for Use!</b></p>
                            <p>The new CSS logical properties module is one of the most important developments to have
                                come to CSS in recent years. This module enables us to support all the directions that
                                human languages are written in with the same CSS definitions.</p>
                            <a class="embed-content"
                                href="https://medium.com/@elad/why-css-logical-properties-arent-ready-for-use-c102925a5cba"
                                target="_blank">
                                <img class="embed-content-image"
                                    src="https://miro.medium.com/max/1400/1*2Vrjo66EEFbysBSE0IwWGA.png"
                                    alt="">
                                <div class="embed-content-text">
                                    <aside class="embed-content-info"><span class="text">medium.com</span></aside>
                                    <h2 class="embed-content-title">TWhy CSS Logical Properties Aren’t Ready for Use!
                                    </h2>
                                    <p class="embed-content-paragraph">The new CSS logical properties module is one of
                                        the most important developments to have come to CSS in recent years..</p>
                                </div>
                            </a>
                        </div>
                        <div class="summary u-flex">
                            <div class="reactions">❤️</div>
                            <div class="reactions-total">28</div>
                            <div class="total-comments u-margin-inline-start">
                                <a>12 Shares</a>
                            </div>
                        </div>
                        <section class="actions-buttons">
                            <ul class="actions-buttons-list u-flex">
                                <li class="actions-buttons-item"><button class="actions-buttons-button"><span
                                            class="icon">👍</span><span class="text">Like</span></button></li>
                                <li class="actions-buttons-item"><button class="actions-buttons-button"><span
                                            class="icon">💬</span><span class="text">Comment</span></button></li>
                                <li class="actions-buttons-item"><button class="actions-buttons-button"><span
                                            class="icon">💌</span><span class="text">Share</span></button></li>
                            </ul>
                        </section>
                    </article>
                </li>
                <li class="main-feed-item">
                    <article class="common-post">
                        <header class="common-post-header u-flex">
                            <img src="https://assets.codepen.io/65740/internal/avatars/users/default.png"
                                class="user-image" width="40" height="40" alt="">
                            <div class="common-post-info">
                                <div class="user-and-group u-flex">
                                    <a href="https://www.facebook.com/eladsc" target="_blank">Elad Shechter</a>
                                </div>
                                <div class="time-and-privacy"><time datetime="">July 29 at 10:21 PM</time><span
                                        class="icon icon-privacy">🌎</span></div>
                            </div>
                            <button class="icon-button-2 u-margin-inline-start" aria-label="more options"><span
                                    class="icon-menu"></span></button>
                        </header>
                        <div class="common-post-content common-content">
                            <p><b>How to Create Pure CSS Games</b></p>
                            <p>In this time of the coronavirus epidemic, a lot of our plans have canceled. From every
                                bad situation, we need to try to see the good thing in it. For my self, I use my free
                                time at home to create a pure CSS game. In my new talk, I will explain to you lots of
                                tips and tricks of how to create pure CSS games, based on the Coronavirus game I’ve
                                made.</p>
                            <a class="embed-content" href="https://www.youtube.com/watch?v=TmfbHPObs-0"
                                target="_blank">
                                <img class="embed-content-image"
                                    src="https://i1.wp.com/eladsc.com/wp-content/uploads/2020/10/PCG.jpg"
                                    alt="">
                                <div class="embed-content-text">
                                    <aside class="embed-content-info"><span class="text">YouTube.com</span></aside>
                                    <h2 class="embed-content-title">How to Create Pure CSS Games - by Elad Shechter
                                    </h2>
                                    <p class="embed-content-paragraph">In this time of the coronavirus epidemic, a lot
                                        of our plans have canceled.</p>
                                </div>
                            </a>
                        </div>
                        <div class="summary u-flex">
                            <div class="reactions">❤️</div>
                            <div class="reactions-total">3</div>
                            <div class="total-comments u-margin-inline-start">
                                <a>5 Shares</a>
                            </div>
                        </div>
                        <section class="actions-buttons">
                            <ul class="actions-buttons-list u-flex">
                                <li class="actions-buttons-item"><button class="actions-buttons-button"><span
                                            class="icon">👍</span><span class="text">Like</span></button></li>
                                <li class="actions-buttons-item"><button class="actions-buttons-button"><span
                                            class="icon">💬</span><span class="text">Comment</span></button></li>
                                <li class="actions-buttons-item"><button class="actions-buttons-button"><span
                                            class="icon">💌</span><span class="text">Share</span></button></li>
                            </ul>
                        </section>
                    </article>
                </li>
                <li class="main-feed-item">
                    <article class="common-post">
                        <header class="common-post-header u-flex">
                            <img src="https://assets.codepen.io/65740/internal/avatars/users/default.png"
                                class="user-image" width="40" height="40" alt="">
                            <div class="common-post-info">
                                <div class="user-and-group u-flex">
                                    <a href="https://www.facebook.com/eladsc" target="_blank">Elad Shechter</a>
                                    <span class="icon icon-arrow-block-end"></span>
                                    <a href="https://bit.ly/3fl9RLV" target="_blank">CSS Class</a>
                                </div>
                                <div class="time-and-privacy"><time datetime="">June 14 at 1:51 PM</time><span
                                        class="icon icon-privacy">🌎</span></div>
                            </div>
                            <button class="icon-button-2 u-margin-inline-start" aria-label="more options"><span
                                    class="icon-menu"></span></button>
                        </header>
                        <div class="common-post-content common-content">
                            <p><b>The Coronavirus Invaders!</b></p>
                            <p>
                                My Pure CSS Game! (No JS).<br>
                                How many Coronavirus are you able to eliminate?😀<br>
                            </p>
                            <a class="embed-content" href="https://bit.ly/2N0jLWY" target="_blank">
                                <img class="embed-content-image"
                                    src="https://cssclasscom.files.wordpress.com/2020/05/corona1-1.gif?w=660"
                                    alt="">
                                <div class="embed-content-text">
                                    <aside class="embed-content-info"><span class="text">codepen.io</span></aside>
                                    <h2 class="embed-content-title">Coronavirus Invaders - CSS Pure Game (No JS!)</h2>
                                </div>
                            </a>
                        </div>
                        <div class="summary u-flex">
                            <div class="reactions">❤️</div>
                            <div class="reactions-total">1</div>
                            <div class="total-comments u-margin-inline-start">
                                <a>1 Shares</a>
                            </div>
                        </div>
                        <section class="actions-buttons">
                            <ul class="actions-buttons-list u-flex">
                                <li class="actions-buttons-item"><button class="actions-buttons-button"><span
                                            class="icon">👍</span><span class="text">Like</span></button></li>
                                <li class="actions-buttons-item"><button class="actions-buttons-button"><span
                                            class="icon">💬</span><span class="text">Comment</span></button></li>
                                <li class="actions-buttons-item"><button class="actions-buttons-button"><span
                                            class="icon">💌</span><span class="text">Share</span></button></li>
                            </ul>
                        </section>
                    </article>
                </li>

                <li class="main-feed-item">
                    <article class="common-post">
                        <header class="common-post-header u-flex">
                            <img src="https://assets.codepen.io/65740/internal/avatars/users/default.png"
                                class="user-image" width="40" height="40" alt="">
                            <div class="common-post-info">
                                <div class="user-and-group u-flex">
                                    <a href="https://www.facebook.com/eladsc/" target="_blank">Elad Shechter</a>
                                    <span class="icon icon-arrow-block-end"></span>
                                    <a href="https://bit.ly/3fl9RLV" target="_blank">CSS Class</a>
                                </div>
                                <div class="time-and-privacy"><time datetime="">June 3 at 12:26 PM</time><span
                                        class="icon icon-privacy">🌎</span></div>
                            </div>
                            <button class="icon-button-2 u-margin-inline-start" aria-label="more options"><span
                                    class="icon-menu"></span></button>
                        </header>
                        <div class="common-post-content common-content">
                            <p><b>The ‘unset’ keywords behave</b> like 'inherit' if the property is a property that has
                                natural inherit by default, and act like 'initial' if it hasn’t.
                            <p>
                            <p>The reason for it to exists is to reset all properties together with the ‘all’ property.
                            </p>
                            <p><b>From my Talk:</b><br>
                                <a href="https://bit.ly/3flTJtr" target="_blank">https://youtu.be/8IaKXJHRSXc</a>
                            </p>
                            <img src="https://scontent.ftlv1-2.fna.fbcdn.net/v/t1.0-9/101673130_10156884723716933_5600395856562880512_o.jpg?_nc_cat=110&_nc_sid=825194&_nc_ohc=KHRwezsav6gAX8h4U7p&_nc_ht=scontent.ftlv1-2.fna&oh=f372d27e69a67f2b38f205dfa74038c7&oe=5F050911"
                                alt="">
                        </div>
                        <div class="summary u-flex">
                            <div class="reactions">❤️</div>
                            <div class="reactions-total">8</div>
                            <div class="total-comments u-margin-inline-start">
                                <a>12 Comments</a>
                                <a>2 Shares</a>
                            </div>
                        </div>
                        <section class="actions-buttons">
                            <ul class="actions-buttons-list u-flex">
                                <li class="actions-buttons-item"><button class="actions-buttons-button"><span
                                            class="icon">👍</span><span class="text">Like</span></button></li>
                                <li class="actions-buttons-item"><button class="actions-buttons-button"><span
                                            class="icon">💬</span><span class="text">Comment</span></button></li>
                                <li class="actions-buttons-item"><button class="actions-buttons-button"><span
                                            class="icon">💌</span><span class="text">Share</span></button></li>
                            </ul>
                        </section>
                    </article>
                </li>
                <li class="main-feed-item">
                    <article class="common-post">
                        <header class="common-post-header u-flex">
                            <img src="https://scontent.ftlv1-1.fna.fbcdn.net/v/t1.0-1/cp0/p40x40/94574850_120774326271393_6089794718378491904_n.png?_nc_cat=111&_nc_sid=dbb9e7&_nc_ohc=40vzgxq-2kYAX8gOAZN&_nc_ht=scontent.ftlv1-1.fna&oh=ece0eaf59732b7da4471b7ee57cab487&oe=5F01FF5D"
                                class="user-image" width="40" height="40" alt="">
                            <div class="common-post-info">
                                <div class="user-and-group u-flex">
                                    <a href="https://bit.ly/2Y2Kito" target="_blank">CSS Class</a>
                                </div>
                                <div class="time-and-privacy"><time datetime="">May 18 at 5:58 PM</time><span
                                        class="icon icon-privacy">🌎</span></div>
                            </div>
                            <button class="icon-button-2 u-margin-inline-start" aria-label="more options"><span
                                    class="icon-menu"></span></button>
                        </header>
                        <div class="common-post-content common-content">
                            <p><b>CSS Basics for Typography</b></p>
                            <p>Many beginner and experienced developers find it challenging to understand the world of
                                CSS, and it is difficult to understand what is really possible in CSS.</p>
                            <p>In Elad Shechter's first article on CSS Basics Things, He let developers know the CSS
                                definitions of text typography, and actually understand what and how to control it.</p>
                            <p>This article has lots of visual examples and live code examples that will allow you to
                                enter the CSS world more pleasantly.</p>
                            <a class="embed-content" href="https://bit.ly/2AoSfA5" target="_blank">
                                <img class="embed-content-image"
                                    src="https://miro.medium.com/max/552/1*8gDOmNQeKOji22wisw96aA.jpeg"
                                    alt="">
                                <div class="embed-content-text">
                                    <aside class="embed-content-info"><span class="text">medium.com</span></aside>
                                    <h2 class="embed-content-title">CSS Basics for Typography</h2>
                                    <p class="embed-content-paragraph">CSS Basics</p>
                                </div>
                            </a>
                        </div>
                        <div class="summary u-flex">
                            <div class="reactions">😲❤️</div>
                            <div class="reactions-total">16</div>
                            <div class="total-comments u-margin-inline-start">
                                <a>5 Shares</a>
                            </div>
                        </div>
                        <section class="actions-buttons">
                            <ul class="actions-buttons-list u-flex">
                                <li class="actions-buttons-item"><button class="actions-buttons-button"><span
                                            class="icon">👍</span><span class="text">Like</span></button></li>
                                <li class="actions-buttons-item"><button class="actions-buttons-button"><span
                                            class="icon">💬</span><span class="text">Comment</span></button></li>
                                <li class="actions-buttons-item"><button class="actions-buttons-button"><span
                                            class="icon">💌</span><span class="text">Share</span></button></li>
                            </ul>
                        </section>
                    </article>
                </li>
                <li class="main-feed-item">
                    <article class="common-post">
                        <header class="common-post-header u-flex">
                            <img src="https://scontent.ftlv1-1.fna.fbcdn.net/v/t1.0-1/cp0/p40x40/37042540_559247564477083_8353849942070001664_n.png?_nc_cat=105&_nc_sid=1eb0c7&_nc_ohc=kjtkpY7LCZQAX8W3v8r&_nc_ht=scontent.ftlv1-1.fna&oh=ca77f68f63e8b9a67be2af87e64570c9&oe=5F01CAD6"
                                class="user-image" width="40" height="40" alt="">
                            <div class="common-post-info">
                                <div class="user-and-group u-flex">
                                    <a href="https://www.facebook.com/frontendfocus" target="_blank">Frontend
                                        Focus</a>
                                </div>
                                <div class="time-and-privacy"><time datetime="">April 1</time><span
                                        class="icon icon-privacy">🌎</span></div>
                            </div>
                            <button class="icon-button-2 u-margin-inline-start" aria-label="more options"><span
                                    class="icon-menu"></span></button>
                        </header>
                        <div class="common-post-content common-content">
                            <a class="embed-content"
                                href="https://blog.animaapp.com/reverse-engineering-whatsapp-webs-css-9239293009f4"
                                target="_blank">
                                <img class="embed-content-image"
                                    src="https://i1.wp.com/eladsc.com/wp-content/uploads/2020/03/1_iNB0Teq9n7bgfjPsvwkOfQ.jpg?fit=660%2C302&ssl=1"
                                    alt="">
                                <div class="embed-content-text">
                                    <aside class="embed-content-info"><span class="text">medium.com</span></aside>
                                    <h2 class="embed-content-title">Reverse Engineering WhatsApp Web’s CSS</h2>
                                    <p class="embed-content-paragraph">If you’re like the majority of readers,
                                        recreating CSS and HTML by reverse engineering might look suspicious to you, and
                                        you might wonder…</p>
                                </div>
                            </a>
                        </div>
                        <div class="summary u-flex">
                            <div class="reactions">😲</div>
                            <div class="reactions-total">5</div>
                            <div class="total-comments u-margin-inline-start">
                                <a>5 Comments</a>
                                <a>1 Shares</a>
                            </div>
                        </div>
                        <section class="actions-buttons">
                            <ul class="actions-buttons-list u-flex">
                                <li class="actions-buttons-item"><button class="actions-buttons-button"><span
                                            class="icon">👍</span><span class="text">Like</span></button></li>
                                <li class="actions-buttons-item"><button class="actions-buttons-button"><span
                                            class="icon">💬</span><span class="text">Comment</span></button></li>
                                <li class="actions-buttons-item"><button class="actions-buttons-button"><span
                                            class="icon">💌</span><span class="text">Share</span></button></li>
                            </ul>
                        </section>
                    </article>
                </li>
                <li class="main-feed-item">
                    <article class="common-post">
                        <header class="common-post-header u-flex">
                            <img src="https://scontent.ftlv1-1.fna.fbcdn.net/v/t1.0-1/cp0/p40x40/10155133_602098699885921_18816108_n.png?_nc_cat=104&_nc_sid=1eb0c7&_nc_ohc=LlEImNjGB-oAX8q8Y-V&_nc_ht=scontent.ftlv1-1.fna&oh=a31a91a5eee7ea43a90a62a8ec3f9fa2&oe=5F04B668"
                                class="user-image" width="40" height="40" alt="">
                            <div class="common-post-info">
                                <div class="user-and-group u-flex">
                                    <a href="https://www.facebook.com/CSSWeekly" target="_blank">CSS Weekly</a>
                                </div>
                                <div class="time-and-privacy"><time datetime="">March 11</time><span
                                        class="icon icon-privacy">🌎</span></div>
                            </div>
                            <button class="icon-button-2 u-margin-inline-start" aria-label="more options"><span
                                    class="icon-menu"></span></button>
                        </header>
                        <div class="common-post-content common-content">
                            <p>Elad Shechter explains why the world needs CSS developers.</p>
                            <a class="embed-content"
                                href="https://medium.com/@elad/why-the-world-needs-css-developers-318025a6f5c1"
                                target="_blank">
                                <img class="embed-content-image"
                                    src="https://miro.medium.com/max/1400/1*65c_DA3NOmVk-NvkKLnSDA.png"
                                    alt="">
                                <div class="embed-content-text">
                                    <aside class="embed-content-info"><span class="text">medium.com</span></aside>
                                    <h2 class="embed-content-title">Why the World Needs CSS Developers</h2>
                                    <p class="embed-content-paragraph">In the last ten years, give or take a few, CSS
                                        has grown extensively with the addition of more and more features, thus
                                        gradually becoming…</p>
                                </div>
                            </a>
                        </div>
                        <div class="summary u-flex">
                            <div class="reactions">👍❤️</div>
                            <div class="reactions-total">7</div>
                            <div class="total-comments u-margin-inline-start">
                                <a>57 Comments</a>
                                <a>8 Shares</a>
                            </div>
                        </div>
                        <section class="actions-buttons">
                            <ul class="actions-buttons-list u-flex">
                                <li class="actions-buttons-item"><button class="actions-buttons-button"><span
                                            class="icon">👍</span><span class="text">Like</span></button></li>
                                <li class="actions-buttons-item"><button class="actions-buttons-button"><span
                                            class="icon">💬</span><span class="text">Comment</span></button></li>
                                <li class="actions-buttons-item"><button class="actions-buttons-button"><span
                                            class="icon">💌</span><span class="text">Share</span></button></li>
                            </ul>
                        </section>
                    </article>
                </li>
            </ul>
        </main>
        <aside class="side-b">
            <section class="common-section">
                <h2 class="section-title">Sponsored</h2>
                <ul class="common-list">
                    <li class="common-list-item">
                        <a href="http://bit.ly/2Nd05lW" target="_blank" class="common-list-button is-ads">
                            <div class="image"><img src="{{ asset('image/html.jpg') }}" width="115" alt="">
                            </div>
                            <div class="text">
                                <h4 class="ads-title">Export Sketch to HTML with a click</h4>
                                <p class="ads-url">animaapp.com</p>
                            </div>
                        </a>
                    </li>
                    <li class="common-list-item">
                        <a href="http://bit.ly/2Nd05lW" target="_blank" class="common-list-button is-ads">
                            <div class="image"><img
                                    src="{{ asset('image/frontend.jfif') }}" width="115"
                                    alt=""></div>
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
    </div>
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src="./script.js"></script>

</body>

</html>
