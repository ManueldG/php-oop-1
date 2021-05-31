<?php


/**
 * @author ManueldG
 *
 */
class Movie{
    private $actor;
    private $title;
    private $genre;
    
    /**
     */
    public function __construct($title){
        $this->title=$title;
        $this->actor='';
        $this->genre='';
        
    }
    
    /**
     * @return mixed
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * @param mixed $actor
     */
    public function setActor($actor)
    {
        $this->actor = $actor;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @param mixed $genre
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    
}
