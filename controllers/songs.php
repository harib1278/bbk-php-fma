<?php

//Artist page queries
$database->query('
    SELECT
        name AS ArtistName,
        title AS Title,
        SEC_TO_TIME(duration) AS Duration
    FROM
        tshadd01db.song
    INNER JOIN
        tshadd01db.artist ON tshadd01db.song.artist_id = tshadd01db.artist.id
    ORDER BY ArtistName ASC, Title ASC
    ;
');
$songsDuration = $database->resultset();

?>

