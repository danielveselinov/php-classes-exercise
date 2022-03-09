<?php 

require_once __DIR__ . "/Post.php";
require_once __DIR__ . "/Member.php";

class Topic extends Post {
    private $title;
    private $author; //object from member class
    private $category;
    private $createdTime;
    private $posts = [];

    public function __construct($author)
    {
        $this->setAuthor($author);
        
        if (!$author->isLoggedIn() && $author->getRole() !== "admin") {
            echo "<br/> Not logged in.. or admin";
            // die();
            // echo "User: " . $author->identity() . " is not able to create topic with title: {$this->getTitle()}";
        } else {
            echo "<br/> Kreira..";
        }
    }


    /**
     * Get the value of author
     */ 
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set the value of author
     *
     * @return  self
     */ 
    public function setAuthor(Member $author)
    {
        $this->author = $author;

        return $this;
    }
}