<?php

/**
*   Common data queries that are shared across all pages on this proto application.
*   The song and artist count have been done as two seperate small queries. This is due to un assailable
*   restrictions imposed by Birkbeck on the admin priviladges of the DB server e.g not being able
*   to create/drop temporary tables and feed the data into that OR to write a very simple stored procedure - 
*   these are the ways in which I would have done this inside of a single query - if allowed full db access by bbk
*/

$pdo = new CommonController('
    SELECT      
        tshadd01db.artist.name AS Name,
        tshadd01db.song.title  AS SongTitle
    FROM
        tshadd01db.artist
    INNER JOIN
        tshadd01db.song ON tshadd01db.artist.id = tshadd01db.song.artist_id
    ORDER BY Name ASC, SongTitle ASC
    ;
');

$artistWithSongs = $pdo->runQuery();

$pdo = new CommonController('
    SELECT      
        COUNT(name) AS NameTotal
    FROM
        tshadd01db.artist
    ;
');

$nameTotal = $pdo->runQuery();

$pdo = new CommonController('
    SELECT      
        COUNT(title) AS SongTotal
    FROM
        tshadd01db.song
    ;
');

$songTotal = $pdo->runQuery();



$artistWithSongs['NameTotal'] = $nameTotal;
$artistWithSongs['SongTotal'] = $songTotal;

?>