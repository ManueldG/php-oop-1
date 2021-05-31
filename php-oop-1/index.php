<?php
/*
 * 
 * */
include_once 'Movie.class.php';

 $film1 = new Movie('MIB');
 
 $film2 = new Movie('Star Wars');
 
 
 $film1->setActor('Will Smith');
 $film1->setGenre('Science fiction');
 $film2->setActor('Harrison Ford');
 $film2->setGenre('Science fiction');
 
 var_dump($film1);
 var_dump($film2);
 
 echo ("\n<br>".$film1->getTitle());
 echo ("\n<br>".$film1->getActor());
 echo ("\n<br>".$film1->getGenre());
 echo ("\n<br>");
 echo ("\n<br>".$film2->getTitle());
 echo ("\n<br>".$film2->getActor());
 echo ("\n<br>".$film2->getGenre());