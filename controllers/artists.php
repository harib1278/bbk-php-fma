<?php

//Artist page queries below

$database->query('   

    SELECT    
        name AS Name,
        title AS SongTitle,
        COUNT(*) AS Count
    FROM
        tshadd01db.artist
    INNER JOIN
        tshadd01db.song ON tshadd01db.artist.id = tshadd01db.song.artist_id
    GROUP BY tshadd01db.artist.name;
');

$artistSongCount = $database->resultset();



?>