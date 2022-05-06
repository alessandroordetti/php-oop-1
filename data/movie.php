<?php
    class Movie{
        public $title;
        public $author;
        public $language;
        public $mainActor;
        public $releaseDate;
    
    
        function __construct($_title, $_author, $_mainActor, $_language, $_releaseDate){
        $this->title = $_title;
        $this->author = $_author;
        $this->mainActor = $_mainActor;
        $this->language = $_language;
        $this->releaseDate = $_releaseDate;
    }


    public function getTitle(){
        return $this ->title;
    }
    public function getAuthor(){
        return $this ->author;
    }

    public function getMainActor(){
        return $this ->mainActor;
    }

    public function getLanguage(){
        return $this ->language;
    }

    public function getReleaseDate(){
        return $this ->releaseDate;
    }
}
?>








