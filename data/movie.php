
<?php 
    
    class Movie{
        public $title;
        public $author;
        public $yearOfRelease;
    
    
    function __construct($_title, $_author, $_yearOfRelease){
        $this->title = $_title;
        $this->author = $_author;
        $this->yearOfRelease = $_yearOfRelease;
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
    
}
?>
