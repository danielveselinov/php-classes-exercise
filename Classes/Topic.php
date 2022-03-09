<?php 

require_once __DIR__ . "/Post.php";
require_once __DIR__ . "/Member.php";

class Topic extends Post implements TopicInfo {
    private $title;
    private $author; //object from member class
    private $category;
    private $createdTime;
    private $posts = [];

    public function __construct($title, $author, $category)
    {
        $this->setTitle($title);
        $this->setAuthor($author);
        $this->setCategory($category);
        $this->createdTime = date("Y-m-d H:i:s");
        
        if (!$author->isLoggedIn() || $author->getRole() !== "admin") {
            return "User: " . $author->identity() . ", is not able to create topic with title: {$this->getTitle()}";
        } else {
            // echo "<br/> Creating...";
            echo $this->printTopic();
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

    public function printTopic() {
        return "Topic: {$this->getTitle()}, created by: {$this->getAuthor()->identity()}, creation date: {$this->getCreatedTime()}";
    }

    public function printPosts() {
        //Need to be done for posts but fetching the array posts = [];
        // return "Post: {$this->getTitle()}, created by: {$this->getAuthor()->identity()}, date: {$this->getCreatedTime()}";
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of category
     */ 
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @return  self
     */ 
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get the value of posts
     */ 
    public function getPosts()
    {
        return $this->posts;
    }

    /**
     * Set the value of posts
     *
     * @return  self
     */ 
    public function setPosts($posts)
    {
        $this->posts = $posts;

        return $this;
    }

    //Methods
    public function addPost(Member $author, $post, $category) {

        if (!$author->isLoggedIn() || $author->getRole() !== "member" || $this->getCategory() !== $category) {
            echo "User: " . $author->identity() . ", is not able to add post with title: {$this->getTitle()}";
        } else {
            echo "<br/> Creating... member";
            // echo $this->printPosts();
        }
    }

    /**
     * Get the value of createdTime
     */ 
    public function getCreatedTime()
    {
        return $this->createdTime;
    }

    /**
     * Set the value of createdTime
     *
     * @return  self
     */ 
    public function setCreatedTime($createdTime)
    {
        $this->createdTime = parent::__construct($createdTime);

        return $this;
    }
}