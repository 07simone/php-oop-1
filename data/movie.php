
<?php 
    
    class Movie{
        public $title;
        public $author;
        public $yearOfRelease;
        public $takings;
    
    
    function __construct($_title, $_author, $_yearOfRelease, $_takings){
        $this->title = $_title;
        $this->author = $_author;
        $this->yearOfRelease = $_yearOfRelease;
        $this->takings = $_takings;
    }

    public function getTitle(){
        return $this ->title;
    }

    public function getAuthor(){
        return $this ->author;
    }
    public function getyearOfRelease(){
        return $this ->yearOfRelease;
    }
    public function getTakings(){
        return $this ->takings;
    }
    
}
?>
