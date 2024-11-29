<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Blog Voyage' ?></title>
    <link rel="stylesheet" href="../sources/css/stylee.css">
    <link rel="stylesheet" href="/sources/css/style.css">
</head>
<body>
    <header class="main-head">
        <figure class="logo-figure">
            <img src="<?= "/assets/logo/logo_blog.webp" ?>" alt="logo blog voyage" class="logo-img"/>
            <figcaption class="logo-text">
                <h1>Blog Voyage </h1>
            </figcaption>
        </figure>
        <nav class="main-nav">
            <ul class="main-nav-links">
            <li><a href="/slot-machine">Jouer</a></li>
            </ul>
            <div class="burger">
            <span></span>
            <span></span>
            <span></span>
            </div>
        </nav>
    </header>
    <main><?=$mainContent ?? "Erreur 404" ?></main>
    <script src="/sources/js/script.js"></script>
</body>
</html>
