<?php
//Home page queries
$database->query('
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

$artistWithSongs = $database->resultset();

$database->query('
    SELECT      
        COUNT(name) AS NameTotal
    FROM
        tshadd01db.artist
    ;
    
');

$nameTotal = $database->resultset();

$database->query('
    SELECT      
        COUNT(title) AS SongTotal
    FROM
        tshadd01db.song
    ;
    
');

$songTotal = $database->resultset();

//append the totals to the bottom of the song/artist array for cleanliness

$artistWithSongs['totals']['names'] = $nameTotal;
$artistWithSongs['totals']['songs'] = $songTotal;
?>