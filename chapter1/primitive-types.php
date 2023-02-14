<?php
// boolean,
// integer,
// float,
// string,
// object,
// resource,
// array,
// null

require_once 'Song.php';


$song = new Song('Porch', 15);

print $song->name;
