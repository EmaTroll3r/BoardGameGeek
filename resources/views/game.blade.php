<!DOCTYPE html>

<html>
    <head>
        <script>
            BASE_URL = "{{ url('/') }}/";
        </script>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ url('styles/style.css') }}">
        <link rel="stylesheet" href="{{ url('styles/nav-style.css') }}">
        <link rel="stylesheet" href="{{ url('styles/quickbar-style.css') }}">
        <link rel="stylesheet" href="{{ url('styles/game-style.css') }}">
        <link rel="stylesheet" href="{{ url('styles/footer-style.css') }}">
        <script src="{{ url('scripts/common.js') }}" defer></script>
        <script src="{{ url('scripts/nav-script.js') }}" defer></script>
        <script src="{{ url('scripts/quickbar-script.js') }}" defer></script>
        <script src="{{ url('scripts/game-script.js') }}" defer></script>
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

        <div id="main" data-id="{{ $gameId }}">
            <div id="quickbar-wrapper">
                <div id="quickbar">
                    <div id="quickbar-title">The Hotness</div>
                    <div id="quickbar-content">
                        
                    </div>
                </div>
            </div>

            <article id="game-article">
                <section id="game-infoPanel-container">
                    <img id="game-infoPanel-mainImage" src="" alt="main image">
                    <div id="game-infoPanel-content">
                        <div id="game-infoPanel-rank">
                            <i class="fa-solid fa-crown"></i>
                            BGG ELO:
                            <div class="game-infoPanel-rank-item">
                                OVERALL<a href="#" id="game-infoPanel-rank-overall-value" class="dotted-underlined-link" data-rank="37"></a>
                            </div>
                            <div class="game-infoPanel-rank-item">
                                THEMATIC<a href="#" id="game-infoPanel-rank-thematic-value" class="dotted-underlined-link"></a>
                            </div>
                            <div class="game-infoPanel-rank-item">
                                FAMILY<a href="#" id="game-infoPanel-rank-family-value" class="dotted-underlined-link"></a>
                            </div>
                        </div>
                        <div id="game-infoPanel-info-container">
                            <div id="game-infoPanel-info-rating-wrapper">
                                <img id="game-infoPanel-info-rating-hexagon" src="{{ url('images/rating_hexagon.svg') }}" alt="Rating Hexagon">
                                <div id="game-infoPanel-info-rating-value"></div>
                            </div>
                            <div id="game-infoPanel-info-content">
                                <div id="game-infoPanel-info-titleAndYear-wrapper">
                                    <a href="#" id="game-infoPanel-info-title"></a>
                                    <div id="game-infoPanel-info-year"></div>
                                </div>
                                <div id="game-infoPanel-info-description">
                                    
                                </div>
                                <div id="game-infoPanel-info-AnalysisCounts-wrapper">
                                    <a href="#" class="dotted-underlined-link"><div id="game-infoPanel-info-AnalysisCounts-ratingsCounts-value" class="game-infoPanel-info-Analysis-item"></div>&nbsp;Ratings</a>
                                    &
                                    <a href="#" class="dotted-underlined-link"><div id="game-infoPanel-info-AnalysisCounts-commentsCounts-value" class="game-infoPanel-info-Analysis-item"></div>&nbsp;Comments</a>
                                    •
                                    <a href="#" class="dotted-underlined-link">GeekBuddy Analysis</a>
                                
                                </div>
                            </div>
                        </div>
                        <div id="game-infoPanel-gameplay-container">
                            <div class="game-infoPanel-gameplay-item">
                                <div class="game-infoPanel-gameplay-big">
                                    <div id="game-infoPanel-gameplay-players-value"></div>
                                    <div>&nbsp;Players</div>
                                </div>
                                <div class="game-infoPanel-gameplay-small dotted-underlined-link">
                                    Commity:&nbsp;
                                    <div id="game-infoPanel-gameplay-playersCommunity-value"></div>
                                    &nbsp;- Best:&nbsp;
                                    <div id="game-infoPanel-gameplay-playersBest-value"></div>
                                </div>
                            </div>
                            <div class="game-infoPanel-gameplay-item">
                                <div class="game-infoPanel-gameplay-big">
                                    <div id="game-infoPanel-gameplay-time-value"></div>
                                    <div>&nbsp;Min</div>
                                </div>
                                <div class="game-infoPanel-gameplay-small">
                                    Playing Time
                                </div>
                            </div>
                            <div class="game-infoPanel-gameplay-item">
                                <div class="game-infoPanel-gameplay-big">
                                    <div>Age:&nbsp;</div>
                                    <div id="game-infoPanel-gameplay-age-value"></div>
                                </div>
                                <div class="game-infoPanel-gameplay-small dotted-underlined-link">
                                    Commity:&nbsp;
                                    <div id="game-infoPanel-gameplay-ageCommunity-value"></div>
                                </div>
                            </div>
                            <div class="game-infoPanel-gameplay-item last-game-infoPanel-gameplay-item">
                                <div class="game-infoPanel-gameplay-big">
                                    <div>Weight:&nbsp;</div>
                                    <div id="game-infoPanel-gameplay-weight-value"></div>
                                    <div>&nbsp;/ 5</div>
                                </div>
                                <div class="game-infoPanel-gameplay-small">
                                    <div class="dotted-underlined-link">'Complexity' Rating</div>
                                    <i id="game-infoPanel-gameplay-weight-questionMark" class="fa-solid fa-circle-question"></i>
                                </div>
                            </div>
                        </div>
                        <div id="game-infoPanel-credits-container">
                            <div class="game-infoPanel-credits-item">
                                <div class="game-infoPanel-credits-item-title">Alternative Names:&nbsp;</div>
                                <div id="game-infoPanel-credits-item-alternativeNames" class="game-infoPanel-credits-item-names">

                                </div>
                            </div>
                            <div class="game-infoPanel-credits-item">
                                <div class="game-infoPanel-credits-item-title">Designer:&nbsp;</div>
                                <div id="game-infoPanel-credits-item-designers" class="game-infoPanel-credits-item-names">
                                    
                                </div>
                            </div>
                            <div class="game-infoPanel-credits-item">
                                <div class="game-infoPanel-credits-item-title">Artist:&nbsp;</div>
                                <div  id="game-infoPanel-credits-item-artists"class="game-infoPanel-credits-item-names">

                                </div>
                            </div>
                            <div class="game-infoPanel-credits-item">
                                <div class="game-infoPanel-credits-item-title">Publisher:&nbsp;</div>
                                <div  id="game-infoPanel-credits-item-publishers"class="game-infoPanel-credits-item-names">

                                </div>
                            </div>
                            <a id="game-infoPanel-credits-fullCreditsLink" class="dotted-underlined-link">See full Credits</a>
                        </div>
                        <div id="game-infoPanel-rating-container">
                            <div id="game-infoPanel-rating-title">My Rating</div>
                            <div id="game-infoPanel-rating-starsContainer">
                                <div data-game-infoPanel-rating-star="1" class="game-infoPanel-rating-star"><i class="fa-solid fa-star"></i></div>
                                <div data-game-infoPanel-rating-star="2" class="game-infoPanel-rating-star"><i class="fa-solid fa-star"></i></div>
                                <div data-game-infoPanel-rating-star="3" class="game-infoPanel-rating-star"><i class="fa-solid fa-star"></i></div>
                                <div data-game-infoPanel-rating-star="4" class="game-infoPanel-rating-star"><i class="fa-solid fa-star"></i></div>
                                <div data-game-infoPanel-rating-star="5" class="game-infoPanel-rating-star"><i class="fa-solid fa-star"></i></div>
                                <div data-game-infoPanel-rating-star="6" class="game-infoPanel-rating-star"><i class="fa-solid fa-star"></i></div>
                                <div data-game-infoPanel-rating-star="7" class="game-infoPanel-rating-star"><i class="fa-solid fa-star"></i></div>
                                <div data-game-infoPanel-rating-star="8" class="game-infoPanel-rating-star"><i class="fa-solid fa-star"></i></div>
                                <div data-game-infoPanel-rating-star="9" class="game-infoPanel-rating-star"><i class="fa-solid fa-star"></i></div>
                                <div data-game-infoPanel-rating-star="10" class="game-infoPanel-rating-star"><i class="fa-solid fa-star"></i></div>
                                
                            </div>
                        </div>
                        <div id="game-infoPanel-buttons-container">
                            <a id="game-infoPanel-button-BuyACopy" class="game-infoPanel-button" href="#">
                                <i class="fa-solid fa-cart-shopping game-infoPanel-button-img"></i>
                                <div class="game-infoPanel-button-text">Buy a Copy</div>
                            </a>
                            <a class="game-infoPanel-button game-infoPanel-button-SleeveIt" href="#">
                                <img class="game-infoPanel-button-img" src="{{ url('images/game-infoPanel-button-sleeveIt.svg') }}" alt="Sleeve It">
                                <div class="game-infoPanel-button-text">Sleeve It</div>
                            </a>
                            <a id="game-infoPanel-button-AddToCollection" class="game-infoPanel-button"  href="#">
                                <i class="fa-solid fa-list game-infoPanel-button-img"></i>
                                <div class="game-infoPanel-button-text">Add To Collection</div>
                            </a>
                            <a id="game-infoPanel-button-LogPlay" class="game-infoPanel-button"  href="#">
                                <div class="game-infoPanel-button-text">Log Play</div>
                            </a>
                            <div id="game-infoPanel-button-likes-heart" class="game-infoPanel-button">
                                <i id="game-infoPanel-button-likes-img" class="fa-solid fa-heart game-infoPanel-button-img"></i>
                            </div>
                            <hr id="game-infoPanel-button-likes-hr">
                            <div id="game-infoPanel-button-likes-count" class="game-infoPanel-button">
                                <div id="game-infoPanel-button-likes-value" class="game-infoPanel-button-text"></div>
                            </div>
                            <a id="game-infoPanel-button-subscribe" class="game-infoPanel-button"  href="#">
                                <div class="game-infoPanel-button-text">Subscribe</div>
                            </a>
                        </div>
                    </div>
                </section>
                <div id="game-sections-container">
                    <div id="game-sections-content">
                        <div data-current-game-section-tab="1" class="game-section-item"><a class="underlined-link" href="#">Overview</a></div>
                        <div data-current-game-section-tab="0" class="game-section-item"><a class="underlined-link" href="#">Rating</a></div>
                        <div data-current-game-section-tab="0" class="game-section-item"><a class="underlined-link" href="#">Forums</a></div>
                        <div data-current-game-section-tab="0" class="game-section-item"><a class="underlined-link" href="#">Images</a></div>
                        <div data-current-game-section-tab="0" class="game-section-item"><a class="underlined-link" href="#">Videos</a></div>
                        <div data-current-game-section-tab="0" class="game-section-item"><a class="underlined-link" href="#">Files</a></div>
                        <div data-current-game-section-tab="0" class="game-section-item"><a class="underlined-link" href="#">Stats</a></div>
                        <div data-current-game-section-tab="0" class="game-section-item"><a class="underlined-link" href="#">Versions</a></div>
                        <div data-current-game-section-tab="0" class="game-section-item"><a class="underlined-link" href="#">Expansions</a></div>
                        <div data-current-game-section-tab="0" class="game-section-item"><a class="underlined-link" href="#">My Games</a></div>
                        <div data-current-game-section-tab="0" class="game-section-item"><a class="underlined-link" href="#">Shopping</a></div>
                        <div data-current-game-section-tab="0" class="game-section-item"><a class="underlined-link" href="#">More</a></div>
                    </div>
                    <hr>
                </div>

                <div id="game-overview-section">

                    <section id="game-banner-playthroughVideo">
                        <a id="game-banner-playthroughVideo-container" href="#">
                            <img id="game-banner-playthroughVideo-img" src="{{ url('images\game-banner-playthroughVideo.png') }}" alt="playThough Video">
                            <i id="game-banner-playthroughVideo-playbutton" class="fa-regular fa-circle-play"></i>
                        </a>
                    </section>

                    <section id="game-media-container">
                        
                        <a id="game-media-seeAll" class="hidden" href="#" data-total-images="268"></a>
                    </section>

                    <section id="game-description-container" class="game-container">
                        <div id="game-description-title" class="game-section-title">Description</div>
                        <hr class="game-container-title-hr">
                        <div id="game-description-wrapper">
                            <div id="game-description-content">
                                <div id="game-description-main-wrapper">
                                    <div id="game-description-main-content">

                                    </div>
                                </div>

                                <div id="game-description-honors-container" class="game-description-container">
                                    <div id="game-description-honors-title"  class="game-smallTitle">AWARD & HONORS</div>
                                    <div id="game-description-honors-content" class="game-description-content">
                                 
                                    </div>
                                </div>

                                <div id="game-description-officialLinks-container" class="game-description-container">
                                    <div id="game-description-officialLinks-title"  class="game-smallTitle">OFFICIAL LINKS</div>
                                    <div id="game-description-officialLinks-content"  class="game-description-content">
                                        <div class="game-description-officialLinks-item">
                                            <i class="fa-solid fa-link game-description-officialLinks-item-imgLink"></i>
                                            <div class="game-description-officialLinks-item-content">

                                                <a href="link-esterno" id="game-description-officialLinks-primaryLink"></a>
                                                <a href="link-esterno" id="game-description-officialLinks-secondaryLink"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="game-description-SuggestionsStats-wrapper" class="game-description-container">
                                    <div id="game-description-suggestions-container">
                                        <div id="game-description-suggestions-title"  class="game-smallTitle">ADDITIONAL SUGGESTIONS</div>
                                        <div id="game-description-suggestions-content"  class="game-description-content">
                                            <div class="game-description-suggestions-item">
                                                <div class="game-description-suggestions-item-title">
                                                    <div class="game-description-suggestions-item-title-text">Language Dependence</div>
                                                    <i class="fa-solid fa-circle-question game-description-suggestions-item-title-questionMark"></i>
                                                </div>
                                                <div class="game-description-suggestions-item-text">Some necessary text - easily memorized or small crib sheet</div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="game-vertical-hr">
                                    <div id="game-description-stats-container">
                                        <div id="game-description-stats-title"  class="game-smallTitle">COMMUNITY STATS</div>
                                        <div id="game-description-stats-content" class="game-description-content">
                                            <div class="game-description-stats-column">
                                                <div class="game-description-stats-item">
                                                    <div class="game-description-stats-item-title">Own:</div>
                                                    <a href="#" id="game-description-stats-owners" class="game-description-stats-item-value underlined-link"></a>
                                                </div>
                                                <div class="game-description-stats-item">
                                                    <div class="game-description-stats-item-title">Wishlist:</div>
                                                    <a href="#" class="game-description-stats-item-value underlined-link">8.9K</a>
                                                </div>
                                                <div class="game-description-stats-item">
                                                    <div class="game-description-stats-item-title">For Trade:</div>
                                                    <a href="#" class="game-description-stats-item-value underlined-link">134</a>
                                                </div>
                                            </div>
                                            <div class="game-description-stats-column">
                                                <div class="game-description-stats-item">
                                                    <div class="game-description-stats-item-title">Want In Trade:</div>
                                                    <a href="#" class="game-description-stats-item-value underlined-link">749</a>
                                                </div>
                                                <div class="game-description-stats-item">
                                                    <div class="game-description-stats-item-title">Has Parts:</div>
                                                    <a href="#" class="game-description-stats-item-value underlined-link">9</a>
                                                </div>
                                                <div class="game-description-stats-item">
                                                    <div class="game-description-stats-item-title">Wants Parts:</div>
                                                    <a href="#" class="game-description-stats-item-value underlined-link">9</a>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" id="game-description-stats-seeAll" class="dotted-underlined-link">See All Stats</a>
                                        <div id="game-description-stats-bggItemId">BGG Item ID: 
                                            <span id="game-description-stats-bggItemId-value"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="game-description-tags-container">
                                <div class="game-smallTitle">CLASSIFICATION</div>
                                <div id="game-description-tags-type" class="game-description-tags-title">Type</div>
                                <div class="game-description-tags-wrapper">
                                    
                                </div>
                                <div id="game-description-tags-category" class="game-description-tags-title">Category</div>
                                <div class="game-description-tags-wrapper">
                                    
                                </div>
                                <div id="game-description-tags-mechanism" class="game-description-tags-title">Mechanism</div>
                                <div class="game-description-tags-wrapper">
                                    
                                </div>
                                <div id="game-description-tags-family" class="game-description-tags-title">Family</div>
                                <div class="game-description-tags-wrapper">
                                    
                                </div>
                            </div>
                        </div>
                    </section>

                    
                    <section id="game-buy-container" class="game-container">
                        <div id="game-buy-title" class="game-section-title">Buy a Copy</div>
                        <hr class="game-container-title-hr">
                        <div id="game-buy-content">
                            <div id="game-buy-stores" class="game-buy-column">
                                <div class="game-buy-column-wrapper">
                                    <div id="game-buy-stores-title" class="game-smallTitle">STORES</div>
                                    <div id="game-buy-stores-content" class="game-buy-content">
                                        
                                    </div>
                                    <div id="game-buy-stores-disclaimer">We may earn a commission when you buy through these links.</div>
                                </div>
                            </div>
                            <div id="game-geekMarket-stores" class="game-buy-column">
                                <div class="game-buy-column-wrapper">
                                    <div id="game-buy-geekMarket-title" class="game-smallTitle">GEEKMARKET</div>
                                    <div id="game-buy-geekMarket-content" class="game-buy-content">
                                        <a href="#" class="game-buy-item">
                                            <div class="game-buy-geekMarket-item-image-container">
                                                <div class="game-buy-geekMarket-item-image-conditions">N</div>
                                                <div class="game-buy-geekMarket-item-image-county">
                                                     <img src="https://cf.geekdo-static.com/images/flags/16x16/shadow/flag_germany.png" alt="flag_germany">   
                                                </div>
                                            </div>         
                                            <div class="game-buy-item-content">
                                                <div class="game-buy-item-text">Sky Team (German edition) (2024)</div>
                                                <div class="game-buy-item-price">€ 20.00</div>
                                            </div>
                                        </a>  
                                        <hr>
                                        <a href="#" class="game-buy-item">
                                            <div class="game-buy-geekMarket-item-image-container">
                                                <div class="game-buy-geekMarket-item-image-conditions">N</div>
                                                <div class="game-buy-geekMarket-item-image-county">
                                                     <img src="https://cf.geekdo-static.com/images/flags/16x16/shadow/flag_usa.png" alt="flag_usa">   
                                                </div>
                                            </div>         
                                            <div class="game-buy-item-content">
                                                <div class="game-buy-item-text">Sky Team (English edition, eighth printing) (2024)</div>
                                                <div class="game-buy-item-price">€ 35.00</div>
                                            </div>
                                        </a>  
                                        <hr>
                                        <a href="#" class="game-buy-item">
                                            <div class="game-buy-geekMarket-item-image-container">
                                                <div class="game-buy-geekMarket-item-image-conditions">N</div>
                                                <div class="game-buy-geekMarket-item-image-county">
                                                     <img src="https://cf.geekdo-static.com/images/flags/16x16/shadow/flag_england.png" alt="flag_england">   
                                                </div>
                                            </div>         
                                            <div class="game-buy-item-content">
                                                <div class="game-buy-item-text">Sky Team (English edition) (2021)</div>
                                                <div class="game-buy-item-price">€ 18.00</div>
                                            </div>
                                        </a>  
                                    </div>
                                    <div id="game-buy-geekMarket-buttons-container">
                                        <a id="game-buy-geekMarket-buttons-seeAll" class="game-buttons-seeAll game-buy-geekMarket-button" data-game-total="18" href="#">See All&nbsp;</a>
                                        <a id="game-buy-geekMarket-buttons-sell" class="dotted-underlined-link game-buy-geekMarket-button" href="#">Sell a Copy</a>
                                        <a id="game-buy-geekMarket-buttons-priceHistory" class="dotted-underlined-link game-buy-geekMarket-button" href="#">Price History</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>


                    <section id="game-banner-sleeveCards">
                        <div id="game-banner-sleeveCards-container">
                            <div id="game-banner-sleeveCards-wrapper">
                                <div id="game-banner-sleeveCards-title">Looking for Card Sleeves?</div>
                                <div id="game-banner-sleeveCards-text">We have the sizes you need across the various brands gamers prefer.</div>
                            </div>
                            
                            <a id="game-banner-button-SleeveIt" class="game-infoPanel-button game-infoPanel-button-SleeveIt" href="#">
                                <img class="game-infoPanel-button-img" src="{{ url('images/game-infoPanel-button-sleeveIt.svg') }}" alt="Sleeve It">
                                <div class="game-infoPanel-button-text">Find Sleeve</div>
                            </a>
                        </div>
                    </section>

                    <section id="game-videos-container" class="game-container">
                        <div id="game-videos-title" class="game-section-title">Videos</div>
                        <hr class="game-container-title-hr">
                        <div id="game-videos-content">
                            <div id="game-videos-columun-review" class="game-videos-column">
                                <div class="game-videos-title game-smallTitle">HOT REVIEWS</div>
                                
                            </div>
                            <div id="game-videos-columun-istructions" class="game-videos-column">
                                <div class="game-videos-title game-smallTitle">HOT "HOW TO PLAY"</div>
                                
                            </div>
                            <div id="game-videos-columun-last" class="game-videos-column">
                                <div class="game-videos-title game-smallTitle">LASTEST VIDEO</div>
                                
                            </div>
                        </div>
                        <a id="game-videos-buttons-seeAll" class="game-buttons-seeAll" href="#">See All&nbsp;</a>
                    </section>

                    <section id="game-reviews-container" class="game-container">
                        <div id="game-reviews-title" class="game-section-title">In-Deep Reviews</div>
                        <hr class="game-container-title-hr">
                        <div id="game-reviews-content">
                            <div class="game-list-section">
                                <div class="game-list-section-title game-smallTitle">HOT REVIEWS</div>
                                <div id="game-list-section-hotReviews" class="game-list-section-content">

                                    

                                </div>
                            </div>      
                            <div class="game-list-section">
                                <div class="game-list-section-title game-smallTitle">RECENT REVIEWS</div>
                                <div id="game-list-section-recentReviews" class="game-list-section-content">
                                    
                                </div>
                            </div>                                          
                        </div>
                        <div class="game-reviews-buttons-wrapper">
                            <a id="game-reviews-buttons-SeeAllTextReview" class="game-reviews-buttons-seeAll game-buttons-seeAll" href="#">All Text Reviews&nbsp;</a>
                            <a id="game-reviews-buttons-SeeAllVideoReview" class="game-reviews-buttons-seeAll game-buttons-seeAll" href="#">All Video Reviews&nbsp;</a>
                        </div>
                    </section>

                    <section id="game-suggestions-container" class="game-container">
                        <div id="game-suggestions-title" class="game-section-title">Fans Also Like</div>
                        <hr class="game-container-title-hr">
                        <div id="game-suggestions-content">
                            
                        </div>
                        <a id="game-suggestions-buttons-seeAll" class="game-buttons-seeAll" data-game-total="28" href="#">See All&nbsp;</a>
                    </section>

                    <section id="game-forums-container" class="game-container">
                        <div id="game-forums-title" class="game-section-title">Forums</div>
                        <hr class="game-container-title-hr">
                        <div id="game-forums-content">   
                            <div class="game-list-section">
                                <div class="game-list-section-title game-smallTitle">HOT THREADS</div>
                                <div id="game-forums-hot" class="game-list-section-content">
                                    
                                </div>
                            </div>
                            <div class="game-list-section">
                                <div class="game-list-section-title game-smallTitle">RECENT THREADS</div>
                                <div id="game-forums-recents" class="game-list-section-content">
                                    
                                </div>
                            </div> 
                        </div>
                        <a id="game-forums-buttons-seeAll" class="game-buttons-seeAll" data-game-total="391" href="#">See All&nbsp;</a>
                    </section>

                    <section id="game-files-container" class="game-container">
                        <div id="game-files-title" class="game-section-title">Files</div>
                        <hr class="game-container-title-hr">
                        <div id="game-files-content">   
                            <div class="game-list-section">
                                <div class="game-list-section-title game-smallTitle">TOP FILES</div>
                                <div id="game-files-topFiles" class="game-list-section-content">
                                    
                                </div>
                            </div>
                            <div class="game-list-section">
                                <div class="game-list-section-title game-smallTitle">RECENT FILES</div>
                                <div id="game-files-recents"class="game-list-section-content">
                                    
                                </div>
                            </div>
                        </div><a id="game-files-buttons-seeAll" class="game-buttons-seeAll" data-game-total="58" href="#">See All&nbsp;</a>
                    </section>

                    <section id="game-expansionsAndlinks-container">
                        <div id="game-expansions-container" class="game-container">
                            <div id="game-expansions-title" class="game-section-title">More of This Game</div>
                            <hr class="game-container-title-hr">
                            <div class="game-expansions-content">   
                                <a id="game-expansions-item-expansions" class="game-expansions-item" href="#">
                                    <div class="game-expansions-item-title">Expansions</div>
                                    <div id="game-expansions-item-number" class="game-expansions-item-number"></div>
                                </a>
                                <hr class="game-expansions-item-hr">   
                                <a id="game-expansions-item-versions" class="game-expansions-item" href="#">
                                    <div class="game-expansions-item-title">Versions</div>
                                    <div id="game-versions-item-number" class="game-expansions-item-number"></div>
                                </a>                          
                                <hr class="game-expansions-item-hr">   
                                <a id="game-expansions-item-accessories" class="game-expansions-item" href="#">
                                    <div class="game-expansions-item-title">Accessories</div>
                                    <div id="game-accessories-item-number" class="game-expansions-item-number">0</div>
                                </a>                          
                                <hr class="game-expansions-item-hr">   
                                <a id="game-expansions-item-contains" class="game-expansions-item" href="#">
                                    <div class="game-expansions-item-title">Contains</div>
                                    <div id="game-contains-item-number" class="game-expansions-item-number">0</div>
                                </a>                          
                                <hr class="game-expansions-item-hr">   
                                <a id="game-expansions-item-contained" class="game-expansions-item" href="#">
                                    <div class="game-expansions-item-title">Contained in</div>
                                    <div id="game-contained-item-number" class="game-expansions-item-number">0</div>
                                </a>                          
                                <hr class="game-expansions-item-hr">   
                                <a id="game-expansions-item-reimplementedBy" class="game-expansions-item" href="#">
                                    <div class="game-expansions-item-title">Reimplemented By</div>
                                    <div id="game-reimplementatedBy-item-number" class="game-expansions-item-number">0</div>
                                </a>                          
                                <hr class="game-expansions-item-hr">   
                                <a id="game-expansions-item-reimplements" class="game-expansions-item" href="#">
                                    <div class="game-expansions-item-title">Reimplements</div>
                                    <div id="game-reimplements-item-number" class="game-expansions-item-number">0</div>
                                </a>                          
                                <hr class="game-expansions-item-hr">   
                                <a id="game-expansions-item-videoGame" class="game-expansions-item" href="#">
                                    <div class="game-expansions-item-title">Video Game Adaptations</div>
                                    <div id="game-videoGame-item-number" class="game-expansions-item-number">0</div>
                                </a>                          
                                <hr class="game-expansions-item-hr">   
                                <a id="game-expansions-item-integrates" class="game-expansions-item" href="#">
                                    <div class="game-expansions-item-title">Integrates With</div>
                                    <div id="game-integrates-item-number" class="game-expansions-item-number">0</div>
                                </a>                          
                            </div>
                        </div>
                        <div id="game-newsAndLinks-container" class="game-container">
                            <div id="game-newsAndLinks-title" class="game-section-title">News & Links</div>
                            <hr class="game-container-title-hr">
                            <div class="game-expansions-content">   
                                <a id="game-expansions-item-webLinks" class="game-expansions-item" href="#">
                                    <div class="game-expansions-item-title">Web Links</div>
                                    <div id="game-webLinks-item-number" class="game-expansions-item-number">1</div>
                                </a>
                                <hr class="game-expansions-item-hr">
                                <a id="game-expansions-item-news" class="game-expansions-item" href="#">
                                    <div class="game-expansions-item-title">BGG News</div>
                                    <div id="game-bggNews-item-number" class="game-expansions-item-number"></div>
                                </a>
                                <hr class="game-expansions-item-hr">
                                <a id="game-expansions-item-blog" class="game-expansions-item" href="#">
                                    <div class="game-expansions-item-title">BGG Blog Posts</div>
                                    <div id="game-bggBlog-item-number" class="game-expansions-item-number">0</div>
                                </a>
                                <hr class="game-expansions-item-hr">
                                <a id="game-expansions-item-podcasts" class="game-expansions-item" href="#">
                                    <div class="game-expansions-item-title">Podcasts</div>
                                    <div id="game-podcasts-item-number" class="game-expansions-item-number">0</div>
                                </a>
                            </div>
                        </div>
                    </section>
                </div>
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