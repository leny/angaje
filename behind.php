<!DOCTYPE html>
<html lang="fr_BE">
    <head>
        <meta charset="UTF-8" />
        <title>flatland! - hire me : Un couteau suisse (mais Belge), à votre service ! - behind the code</title>

        <link rel="stylesheet" href="styles/behind.css" />
        <link rel="stylesheet" href="styles/prism.css" />

        <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id="holder">
            <div id="top">
                <header>
                    <h1>
                        <span class="one">Un</span>
                        <em class="two">couteau suisse</em>
                        <span class="three">(mais Belge)</span>
                        <em class="four">à votre service !</em>
                    </h1>
                </header>
                <section id="intro">
                    <p>
                        C'est bien beau de se vendre comme développeur, mais l'important, c'est le code, pas les mots.
                    </p>
                    <p>
                        C'est pourquoi, sur cette page, vous pouvez consulter le code de la <a href="/">page précédente</a>.
                    </p>
                    <nav>
                        <span>
                            Navigation rapide:
                        </span>
                        <a href="#page">
                            page (html5)
                        </a>
                        &bull;
                        <a href="#styles">
                            feuille de styles (sass)
                        </a>
                        &bull;
                        <a href="#scripts">
                            script (coffeescript)
                        </a>
                    </nav>
                </section>
            </div>
            <section id="code">
                <div id="page">
                    <div class="content">
                        <div class="intro">

                        </div>
                        <pre data-src="index.html">
                            <span class="loading">chargement des scripts...</span>
                        </pre>
                    </div>
                </div>
                <div id="styles">
                    <div class="content">
                        <div class="intro">

                        </div>
                        <pre data-src="styles/styles.sass">
                            <span class="loading">chargement des scripts...</span>
                        </pre>
                    </div>
                </div>
                <div id="scripts">
                    <div class="content">
                        <div class="intro">

                        </div>
                        <pre data-src="js/script.coffee">
                            <span class="loading">chargement des scripts...</span>
                        </pre>
                    </div>
                </div>
            </section>
        </div>
        <script src="js/behind-min.js"></script>
        <script>
            var _gaq = _gaq || [];
            _gaq.push( [ '_setAccount', 'UA-39717980-2' ] );
            _gaq.push( [ '_trackPageview' ] );

            ( function() {
                var ga = document.createElement( 'script' );
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ( 'https:' == document.location.protocol ? 'https://ssl' : 'http://www' ) + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName( 'script' )[ 0 ]; s.parentNode.insertBefore( ga, s );
            } )();
        </script>
    </body>
</html>
