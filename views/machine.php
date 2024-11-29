<?php 
ob_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Machine à Sous</title>
</head>
<body>
    <div class="container">
        <h1>🎰 Machine à Sous 🎰</h1>
        <article class="slot-machine">
            <div class="reel" id="reel1">🍒</div>
            <div class="reel" id="reel2">🍒</div>
            <div class="reel" id="reel3">🍒</div>
        </article>
        <button id="spinButton">🎲 Spin!</button> 
        <div id="result"></div>
    </div>

    <script src="/sources/js/script.js"></script>
</body>

</html>
<?php 
$mainContent = ob_get_clean(); 

