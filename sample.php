<?php
include 'omdb.class.php';

try {
    //Init OMDb and include data from Rotten Tomatoes
    $omdb = new OMDb( ['tomatoes' => TRUE, 'apikey' => '635e3ea3'] );

    //Get by title
    $movie = $omdb->get_by_title('red');

  

    //Get multiple titles, limited info see the README
    $movie = $omdb->search('red');

    //Get multiple titles with pagination
    $movie = $omdb->search('James Bond', 2);

}catch(Exception $e) {
    echo $e->getMessage();
}
?>