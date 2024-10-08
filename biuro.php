<?php
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poznaj Europę</title>
    <link rel="stylesheet" href="styl9.css">
</head>
<body>
    <header>
        <h1>BIURO PODRÓŻY</h1>
    </header>
    <div class="site">
        <aside class="left">
            <h2>Promocje</h2>
            </table>
        </aside>
        <main>
            <h2>W tym roku jedziemy do...</h2>
            <?php foreach($obrazy as $obraz): ?>
            <?php endforeach; ?>
        </main>
        <aside class="right">
        </aside>
    </div>
    <section class="data">
        <h3>W poprzednich latach byliśmy...</h3>
        <ol>
            <?php foreach($wycieczki as $wycieczka): ?>
            <?php endforeach ?>
        </ol>
    </section>
    <footer>
        <p>Stronę wykonał: Wiszniewski Michał</p>
    </footer>
</body>
</html>