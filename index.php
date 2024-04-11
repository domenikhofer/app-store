<?php

$apps = [
    [
        'name' => 'Lunchmap',
        'logo' => 'LM',
        'url' => 'https://twofold.academy/lunchmap',
        'author' => 'Max Muster',
        'date' => '15.09.2021',
        'desc' => 'Keine Ideen für den z\'Mittag? Mit der Lunchmap findest du alle Restaurants und Läden in und um Oerlikon, wo man sich einen feinen Lunch organisieren kann. Von Foodtruck, über asiatisch bis Bowls ist alles dabei.'
    ],
    [
        'name' => 'Heartstone Memory',
        'logo' => 'HM',
        'url' => 'https://twofold.academy/lhot/memory/main.html',
        'author' => 'Max Muster',
        'date' => '06.09.2021',
        'desc' => 'Ideal um den Kopf in den Pausen etwas zu lüften: Das Heartstone Memory. Bis zu 6 Spieler können gegeneinander eine Runde Memory spielen.'
    ],
    [
        'name' => 'Adventskalender',
        'logo' => 'AK',
        'url' => 'https://adventskalender.twofold.academy',
        'author' => 'Max Muster',
        'date' => '23.11.2021',
        'desc' => '24 Türchen gestaltet vom ganzen twofold-Team um die Adventszeit etwas zu versüssen.'
    ],
    [
        'name' => 'App Ideas',
        'logo' => 'AI',
        'url' => 'https://appideas.one/',
        'author' => 'Max Muster',
        'date' => '24.08.2021',
        'desc' => 'Keine Idee für das nächste Projekt? Kein Problem! Suche dir aus dieser Liste einfach ein passendes aus. Hast du selber eine Idee? Dann trage sie hier ein und lasse sie von deinen Teamkollegen bewerten.'
    ],
    [
        'name' => 'Inventory App',
        'logo' => 'IA',
        'url' => '',
        'author' => 'Max Musterr',
        'date' => 'coming soon',
        'desc' => 'Hunderte von Bucher gibt es überall bei twofold verteilt. Darunter das richtige zu finden war bisher fast unmöglich. Dank dem Inventory App können wir jetzt endlich Ordnung in das ganze bringen. Einfach Buch suchen und schon weisst du wo es sich aktuell befindet.'
    ],
    [
        'name' => 'Logik Quiz',
        'logo' => 'LQ',
        'url' => '',
        'author' => 'Max Muster',
        'date' => 'coming soon',
        'desc' => 'Wie gut bist du im logischen Denken? Finde es heraus mit dem Logik Quiz'
    ],
    [
        'name' => 'Workshop Organizer',
        'logo' => 'WO',
        'url' => '',
        'author' => 'Max Muster',
        'date' => 'coming soon',
        'desc' => 'Workshops und Teilnehmer erfassen und verwalten geht ganz einfach mit dem Workshop Organizer'
    ],
    [
        'name' => 'Little Helper',
        'logo' => 'LH',
        'url' => '',
        'author' => 'Max Muster',
        'date' => 'coming soon',
        'desc' => 'Alles was man als neurodivergente Person im Alltag so braucht in einer App!'
    ],
    [
        'name' => 'Yu-Gi-Oh! Deckbuilder',
        'logo' => 'YD',
        'url' => '',
        'author' => 'Max Muster',
        'date' => 'coming soon',
        'desc' => 'Yu-Gi-Oh! Fans aufgepasst. Mit dem Deckbuilder kannst du dich ab jetzt noch besser und effizienter auf das nächste Duell vorbereiten.'
    ],
    [
        'name' => 'Day Planner',
        'logo' => 'DP',
        'url' => '',
        'author' => 'Max Muster',
        'date' => 'coming soon',
        'desc' => 'Struktur in den Tagesablauf zu bringen ist nicht immer einfach. Der Day Planner kann dir aber dabei helfen, geordneter in den Tag zu starten.'
    ]
]


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>twofold App-Store</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="favicon.ico" sizes="32x32">
    <link rel="icon" href="favicon.ico" sizes="192x192">
    <link rel="apple-touch-icon" href="favicon.ico">
    <meta name="msapplication-TileImage" content="favicon.ico">
</head>

<body>
    <div class="content">
        <div class="header">
            <img src="logo.svg">
        </div>
        <div class="apps">
            <?php
                foreach ($apps as $key=>$app){
                    echo '
                    <div class="app" data-infobox="'. $key .'">
                        <span class="logo">
                             ' . $app['logo'] .'
                        </span>
                        <span class="title">'.$app['name'] .'</span>
                    </div>
                        ';
                }
            ?>

        </div>

        <?php
                foreach ($apps as $key=>$app){
                    echo '
                    <div class="infoBox" id="ib' . $key . '">
                    <div class="content">
                        <h1>' . $app['name'] . '</h1>
                        <div class="linkWrapper">
                        <a href="'. $app['url'] .'" target="_blank" class="'. ($app['url'] === '' ? 'disabled' : '') .'"><span>'. ($app['date'] === 'coming soon' ? 'coming soon' : 'App öffnen') .'</span></a>
                        </div>
                        <div class="author">'.$app['author'].'</div>
                        <div class="date">'.$app['date'].'</div>
                        <div class="desc">'.$app['desc'].'</div>
                    </div>
                </div>
                        ';
                }
            ?>
       
    
        <div class="cover"></div>
    </div>
    <script src="js/script.js"></script>
</body>

</html>