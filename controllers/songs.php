<?php

// Song page queries
/** 
*   The requirement to show the duration as 00:00 (mm:ss) seems a bit odd - What if someone wants to upload a song thats more than an hour? The timestamp will be wrong.
*   If you wanted to upload a song duration thats over an hour then you must remove the substring function to stop the hour value from being truncated.
*/
$database->query('
    SELECT
        name AS ArtistName,
        title AS Title,
        SUBSTRING(SEC_TO_TIME(duration), 4) AS Duration
    FROM
        tshadd01db.song
    INNER JOIN
        tshadd01db.artist ON tshadd01db.song.artist_id = tshadd01db.artist.id
    ORDER BY ArtistName ASC, Title ASC
    ;
');
$songsDuration = $database->resultset();

?>

