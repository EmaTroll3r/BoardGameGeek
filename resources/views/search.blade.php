<!DOCTYPE html>
<html>
    <head>
        <script>
            BASE_URL = "{{ url('/') }}/";
        </script>
        <title>BoardGameGeek</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ url('styles/style.css') }}">
        <link rel="stylesheet" href="{{ url('styles/nav-style.css') }}">
        <link rel="stylesheet" href="{{ url('styles/quickbar-style.css') }}">
        <link rel="stylesheet" href="{{ url('styles/search-style.css') }}">
        <link rel="stylesheet" href="{{ url('styles/footer-style.css') }}">
        <script src="{{ url('scripts/common.js') }}" defer></script>
        <script src="{{ url('scripts/nav-script.js') }}" defer></script>
        <script src="{{ url('scripts/quickbar-script.js') }}" defer></script>
        <script src="{{ url('scripts/search-script.js') }}" defer></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
        <link rel="icon" href="https://cf.geekdo-static.com/icons/favicon2.ico" type="image/ico">
    </head>
    <body>
        <nav>
            <div class="nav-side-container">
                <div id="nav-menu-container">
                    <div class="nav-item item">
                        <i class="fas fa-bars"></i>
                    </div>
                </div>
                <div id="nav-logo-container">
                    <a class="nav-user-links" href="{{ url('home') }}">
                        <img src="https://cf.geekdo-static.com/images/logos/navbar-logo-bgg-b2.svg" alt="Board Game Geek Logo">
                    </a>    
                </div>
                <div id="nav-links-container">
                    <div class="nav-item nav-links-item">Browse
                        <div class="nav-submenu">
                            <div class="nav-submenu-content">
                                <div class="nav-submenu-column">
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">All BoardGames</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Categories</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Artists</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Publishers</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Honors</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Gone Cardboard</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Recent Additions</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Previews</a></div>
                                </div>
                                <div class="nav-submenu-column">
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Families</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Mechanics</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Designers</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Accessories</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Random Game</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Podcasts</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Wiki</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Hall of Fame</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nav-item nav-links-item">Forums
                        <div class="nav-submenu">
                            <div class="nav-submenu-content">
                                <div class="nav-submenu-column">
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">All BoardGames</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Categories</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Artists</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Publishers</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Honors</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Gone Cardboard</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Recent Additions</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Previews</a></div>
                                </div>
                                <div class="nav-submenu-column">
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Families</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Mechanics</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Designers</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Accessories</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Random Game</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Podcasts</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Wiki</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Hall of Fame</a></div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <div class="nav-item nav-links-item">Geeklists
                        <div class="nav-submenu">
                            <div class="nav-submenu-content">
                                <div class="nav-submenu-column">
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">All BoardGames</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Categories</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Artists</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Publishers</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Honors</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Gone Cardboard</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Recent Additions</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Previews</a></div>
                                </div>
                                <div class="nav-submenu-column">
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Families</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Mechanics</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Designers</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Accessories</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Random Game</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Podcasts</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Wiki</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Hall of Fame</a></div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <div class="nav-item nav-links-item">Shopping
                        <div class="nav-submenu">
                            <div class="nav-submenu-content">
                                <div class="nav-submenu-column">
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">All BoardGames</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Categories</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Artists</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Publishers</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Honors</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Gone Cardboard</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Recent Additions</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Previews</a></div>
                                </div>
                                <div class="nav-submenu-column">
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Families</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Mechanics</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Designers</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Accessories</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Random Game</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Podcasts</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Wiki</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Hall of Fame</a></div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <div class="nav-item nav-links-item">Community
                        <div class="nav-submenu">
                            <div class="nav-submenu-content">
                                <div class="nav-submenu-column">
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">All BoardGames</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Categories</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Artists</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Publishers</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Honors</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Gone Cardboard</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Recent Additions</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Previews</a></div>
                                </div>
                                <div class="nav-submenu-column">
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Families</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Mechanics</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Designers</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Accessories</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Random Game</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Podcasts</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Wiki</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Hall of Fame</a></div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <div class="nav-item nav-links-item">Help
                        <div class="nav-submenu">
                            <div class="nav-submenu-content">
                                <div class="nav-submenu-column">
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">All BoardGames</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Categories</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Artists</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Publishers</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Honors</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Gone Cardboard</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Recent Additions</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Previews</a></div>
                                </div>
                                <div class="nav-submenu-column">
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Families</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Mechanics</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Designers</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Accessories</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Random Game</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Podcasts</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Wiki</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Hall of Fame</a></div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>

            <div class="nav-side-container">
                <div id="nav-user-container">
                    <a class="nav-user-links" href="#"><i class="fa-solid fa-envelope nav-icon"></i></a>
                    <a class="nav-user-links" href="#"><i class="fa-solid fa-bullhorn nav-icon"></i></a>
                    <div id="nav-username-container" class="nav-item nav-links-item" data-user-id="0" data-username="Sign In">
                        <div id="nav-username-content"></div>
                        <div class="nav-submenu">
                            <div class="nav-submenu-content">
                                <div class="nav-submenu-column">
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">All BoardGames</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Categories</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Artists</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Publishers</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Honors</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Gone Cardboard</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Recent Additions</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Previews</a></div>
                                </div>
                                <div class="nav-submenu-column">
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Families</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Mechanics</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Designers</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Accessories</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Random Game</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Podcasts</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Wiki</a></div>
                                    <div class="nav-submenu-item"><a class="nav-submenu-item-link" href="#">Hall of Fame</a></div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>


                <!-- <form method="get" action="{{ url('search') }}"> -->
                    <div id="nav-search-container">
                        <input id="nav-search-input" name="q" type="text" placeholder="Search">
                        <i id="nav-search-button" class="fas fa-search"></i>
                    </div>
                <!-- </form> -->
            </div>
        </nav>
 
        <div id="main" data-q="{{ $q }}" data-orderBy="{{ $orderBy }}" data-orderDir="{{ $orderDir }}">
            <div id="quickbar-wrapper">
                <div id="quickbar">
                    <div id="quickbar-title">The Hotness</div>
                    <div id="quickbar-content">
                        
                    </div>
                </div>
            </div>

            <article id="search-article">
                <table id="search-table">
                    <thead>
                        <tr>
                        <th class="search-oder-button underlined-link" data-order-by="bgg_ELO">BGG ELO</th>
                        <th></th>
                        <th class="search-oder-button underlined-link" data-order-by="name">Title</th>
                        <th>Your Rating</th>
                        <th>Your like</th>
                        <th class="search-oder-button underlined-link" data-order-by="average_rating">Avg Rating</th>
                        <th class="search-oder-button underlined-link" data-order-by="num_ratings">Num Ratings</th>
                        <th class="search-oder-button underlined-link" data-order-by="n_likes">Num Likes</th>
                        <th class="search-oder-button underlined-link" data-order-by="complexity_rating">Complexity Ratings</th>
                        <th class="search-oder-button underlined-link" data-order-by="n_expansions">Num Expansions</th>
                        </tr>
                    </thead>
                </table>
            </article>
        </div> 

        <div id="footer-wrapper">
            <footer id="footer-bigScreen">
                <div id="footer-main">
                    <div id="footer-logo" class="footer-container">
                        <div id="footer-image">
                            <img src="https://cf.geekdo-static.com/images/logos/bgg-primary-logo-reverse.svg" alt="Board Game Geek">
                        </div>
                    </div>
                    <div id="footer-company" class="footer-container">
                        <div class="footer-title">COMPANY</div>
                        <div class="footer-content">
                            <a href="#">About</a>
                            <a href="#">Contact</a>
                            <a href="#">Advertise</a>
                            <a href="#">Support BGG</a>
                        </div>
                    </div>

                    <div id="footer-policies" class="footer-container">
                        <div class="footer-title">POLICIES</div>
                        <div class="footer-content">
                            <a href="#">Community Guidelines</a>
                            <a href="#">Privacy</a>
                            <a href="#">Terms</a>
                            <a href="#">Manage Cookies</a>
                        </div>
                    </div>
                    
                    <div id="footer-connect" class="footer-container">
                        <div class="footer-title">CONNECT</div>
                        <div class="footer-content">
                            <div id="footer-connect-social">
                                <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
                                <a href="#"><i class="fa-brands fa-bluesky"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                <a href="#"><i class="fa-brands fa-twitch"></i></a>
                                <a href="#"><i class="fa-brands fa-discord"></i></a>
                            </div>
                            <div id="footer-connect-downloads">
                                <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Download_on_the_App_Store_Badge.svg/1200px-Download_on_the_App_Store_Badge.svg.png" alt="App Store"></a>
                                <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Google_Play_Store_badge_EN.svg/1280px-Google_Play_Store_badge_EN.svg.png" alt="Google Play"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="footer-legalNotice">
                    Geekdo, BoardGameGeek, the Geekdo logo, and the BoardGameGeek logo are trademarks of BoardGameGeek, LLC.
                </div>
            </footer>

            <footer id="footer-mediumScreen">
                <div id="footer-main">
                    <div class="footer-wrapper" id="footer-wrapper1">
                        <div id="footer-logo" class="footer-container">
                            <div id="footer-image">
                                <img src="https://cf.geekdo-static.com/images/logos/bgg-primary-logo-reverse.svg" alt="Board Game Geek">
                            </div>
                        </div>
                        <div id="footer-company" class="footer-container">
                            <div class="footer-title">COMPANY</div>
                            <div class="footer-content">
                                <a href="#">About</a>
                                <a href="#">Contact</a>
                                <a href="#">Advertise</a>
                                <a href="#">Support BGG</a>
                            </div>
                        </div>

                        <div id="footer-policies" class="footer-container">
                            <div class="footer-title">POLICIES</div>
                            <div class="footer-content">
                                <a href="#">Community Guidelines</a>
                                <a href="#">Privacy</a>
                                <a href="#">Terms</a>
                                <a href="#">Manage Cookies</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="footer-wrapper" id="footer-wrapper2">
                        <div id="footer-connect" class="footer-container">
                            <div class="footer-title">CONNECT</div>
                            <div class="footer-content">
                                <div id="footer-connect-social">
                                    <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
                                    <a href="#"><i class="fa-brands fa-bluesky"></i></a>
                                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitch"></i></a>
                                    <a href="#"><i class="fa-brands fa-discord"></i></a>
                                </div>
                                <div id="footer-connect-downloads">
                                    <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Download_on_the_App_Store_Badge.svg/1200px-Download_on_the_App_Store_Badge.svg.png" alt="App Store"></a>
                                    <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Google_Play_Store_badge_EN.svg/1280px-Google_Play_Store_badge_EN.svg.png" alt="Google Play"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="footer-legalNotice">
                    Geekdo, BoardGameGeek, the Geekdo logo, and the BoardGameGeek logo are trademarks of BoardGameGeek, LLC.
                </div>
            </footer>

            <footer id="footer-smallScreen">
                <div id="footer-main">
                    
                    <div class="footer-wrapper" id="footer-wrapper1">
                        <div id="footer-logo" class="footer-container">
                            <div id="footer-image">
                                <img src="https://cf.geekdo-static.com/images/logos/bgg-primary-logo-reverse.svg" alt="Board Game Geek">
                            </div>
                        </div>
                    </div>
                    
                    <div class="footer-wrapper" id="footer-wrapper2">
                        <div id="footer-company" class="footer-container">
                            <div class="footer-title">COMPANY</div>
                            <div class="footer-content">
                                <a href="#">About</a>
                                <a href="#">Contact</a>
                                <a href="#">Advertise</a>
                                <a href="#">Support BGG</a>
                            </div>
                        </div>

                        <div id="footer-policies" class="footer-container">
                            <div class="footer-title">POLICIES</div>
                            <div class="footer-content">
                                <a href="#">Community Guidelines</a>
                                <a href="#">Privacy</a>
                                <a href="#">Terms</a>
                                <a href="#">Manage Cookies</a>
                            </div>
                        </div>
                    </div>
                    <div class="footer-wrapper" id="footer-wrapper3">
                    
                        <div id="footer-connect" class="footer-container">
                            <div class="footer-title">CONNECT</div>
                            <div class="footer-content">
                                <div id="footer-connect-social">
                                    <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
                                    <a href="#"><i class="fa-brands fa-bluesky"></i></a>
                                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitch"></i></a>
                                    <a href="#"><i class="fa-brands fa-discord"></i></a>
                                </div>
                                <div id="footer-connect-downloads">
                                    <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Download_on_the_App_Store_Badge.svg/1200px-Download_on_the_App_Store_Badge.svg.png" alt="App Store"></a>
                                    <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Google_Play_Store_badge_EN.svg/1280px-Google_Play_Store_badge_EN.svg.png" alt="Google Play"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="footer-legalNotice">
                    Geekdo, BoardGameGeek, the Geekdo logo, and the BoardGameGeek logo are trademarks of BoardGameGeek, LLC.
                </div>
            </footer>
        </div>
    </body>
</html>