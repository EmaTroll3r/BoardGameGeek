
<!-- Emanuele Costanzo 1000046881 -->
<!-- Original website https://boardgamegeek.com -->


<!--
Aggiungi l'Alias
nel file httpd.conf
Trova la sezione <IfModule alias_module> (intorno alla riga 350).
Aggiungi questa riga alla fine della sezione:

Alias /bgg "C:/Cartella/roba-di-ema/scuola/programmazione/Linguaggi/HTML/Bgg-Copy/full_site"

poi intorno alla riga 280, dopo <Directory "C:/xampp/htdocs"> .... </Directory>  aggiungi

<Directory "C:/Cartella/roba-di-ema/scuola/programmazione/Linguaggi/HTML/Bgg-Copy/full_site">
    Options Indexes FollowSymLinks Includes ExecCGI
    AllowOverride All
    Require all granted
</Directory>




Per creare il database:

Apri phpMyAdmin (di solito su http://localhost/phpmyadmin).
Crea un nuovo database chiamato bgg.
Importa le tabelle e i dati:
Vai su "Importa" nel database bgg.
Seleziona il file database_tables.sql e importa.
Se hai anche un file insert.sql, importalo dopo per aggiungere i dati.
-->

<!DOCTYPE html>
<html>
    <head>
        <script>
            BASE_URL = "{{ url('/') }}/";
        </script>
        <title>BoadGameGeek</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ url('styles/style.css') }}">
        <link rel="stylesheet" href="{{ url('styles/nav-style.css') }}">
        <link rel="stylesheet" href="{{ url('styles/home-style.css') }}">
        <link rel="stylesheet" href="{{ url('styles/footer-style.css') }}">
        <link rel="stylesheet" href="{{ url('styles/quickbar-style.css') }}">

        <script src="{{ url('scripts/common.js') }}" defer></script>
        <script src="{{ url('scripts/nav-script.js') }}" defer></script>
        <script src="{{ url('scripts/home-script.js') }}" defer></script>
        <script src="{{ url('scripts/quickbar-script.js') }}" defer></script>
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

        <div id="main">
            <div id="quickbar-wrapper" class="quickbar-hide">
                <div id="quickbar">
                    <div id="quickbar-title">The Hotness</div>
                    <div id="quickbar-content">
                        
                    </div>
                </div>
            </div>
            <article>
                <section id="home-explore-section">
                    <div id="home-explore-title-container">
                        <div id="home-explore-title">Explore</div>
                        <hr id="home-explore-hr">
                    </div>

                    <div  id="home-explore-section-content">
                        <div id="home-explore-main-container">
                            
                        </div>

                        <hr id="home-explore-sperator-hr">

                        <div id="home-explore-articles-container">

                        </div>
                    </div>
                </section>

                <hr class="home-section-hr">

                <section class="home-section" id="hot-section">
                    <div class="home-section-header">
                        <div class="home-section-title item-title">THE HOTNESS</div>
                        <div class="home-section-description item-description">Top 50 trending games today</div>
                    </div>

                    <div class="home-section-content">
                        
                    </div>
                </section>            

                <hr class="home-section-hr">

                <section class="home-section" id="crowdfunding-section">
                    <div class="home-section-header">
                        <div class="home-section-title item-title">CROWDFUNDING COUNTDOWN</div>
                        <div class="home-section-description item-description">Projects ending soon</div>
                    </div>

                    <div class="home-section-content">

                    </div>
                </section>            

                <hr class="home-section-hr">

                <section class="home-section" id="videos-section">
                    <div class="home-section-header">
                        <div class="home-section-title item-title">HOT VIDEOS</div>
                    </div>

                    <div class="home-section-content">

                    </div>
                </section>

                <hr class="home-section-hr">

                <section class="home-section" id="bestseller-section">
                    <div class="home-section-header">
                        <div class="home-section-title item-title">BESTSELLER</div>
                        <div class="home-section-description item-description">Of this week</div>
                    </div>

                    <div class="home-section-content">
                    </div>
                </section>
                
                <hr class="home-section-hr">
                
                <section class="home-split-screen">
                    <div id="home-news-split" class="home-split-container">
                        <div class="home-split-title item-title">BOARD GAMING NEWS</div>
                        
                        <div class="home-split-content">

                        </div>
                    </div>

                    <hr class="home-split-vertical-hr">
                    
                    
                    <div id="home-discussion-split" class="home-split-container">
                        <div class="home-split-title item-title">HOT DISCUSSION</div>

                        <div class="home-split-content">
                            
                        </div>
                    </div>

                </section>
                
                <hr class="home-section-hr">

                <section class="home-section" id="giveway-section">
                    <div class="home-section-header">
                        <div class="home-section-title item-title">GIVEWAY CONTEST</div>
                        <div class="home-section-description item-description">Answer questions for a chance to win - Sponsored</div>
                    </div>

                    <div class="home-section-content">

                    </div>

                </section>
                
                <hr class="home-section-hr">

                <section class="home-section" id="mostPlayed-section">
                    <div class="home-section-header">
                        <div class="home-section-title item-title">MOST PLAYED GAMES</div>
                        <div class="home-section-description item-description">Of this Month</div>
                    </div>

                    <div class="home-section-content">

                    </div>

                </section>
                
                <hr class="home-section-hr">

                <section class="home-section" id="geeklist-section">
                    <div class="home-section-header">
                        <div class="home-section-title item-title">HOT GEEKLIST</div>
                    </div>

                    <div class="home-section-content">

                    </div>

                </section>
                
                <hr class="home-section-hr">
                
                <section class="home-split-screen">
                    <div id="home-blogs-split" class="home-split-container">
                        <div class="home-split-title item-title">BLOGS</div>
                        
                        <div class="home-split-content">                       

                        </div>
                    </div>

                    <hr class="home-split-vertical-hr">
                    
                    <div id="home-forums-split" class="home-split-container">
                        <div class="home-split-title item-title">GAME FORUMS</div>

                        <div class="home-split-content">
                            
                        </div>
                    </div>

                </section>
                
                <hr class="home-section-hr">

                <section class="home-section" id="hotBooks-section">
                    <div class="home-section-header">
                        <div class="home-section-title item-title">HOT BOARDGAME BOOKS</div>
                    </div>

                    <div class="home-section-content">


                    </div>

                </section>

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
</html>
