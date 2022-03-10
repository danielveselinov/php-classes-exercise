<?php 

require_once __DIR__ . "/../Interfaces/TopicInfo.php";
require_once __DIR__ . "/Member.php";

class Topic implements TopicInfo {
    private $title;
    private $author; //object from member class
    private $category;
    private $createdTime;
    private $posts = [];

    public function __construct($title, $author, $category)
    {
        if (!$author->isLoggedIn() || $author->getRole() !== "admin") {
            echo "User: " . $author->identity() . ", is not able to create topic with title: <b>{$this->getTitle()}</b>";
        } else {
            $this->setTitle($title);
            $this->setAuthor($author);
            $this->setCategory($category);
            $this->createdTime = date("Y-m-d H:i:s");

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
        return "Topic: <b>{$this->getTitle()}</b>, created by: {$this->getAuthor()->identity()}, creation date: {$this->getCreatedTime()}<br/>";
    }

    public function printPosts() {
        $result = "";
        foreach ($this->posts as $post) {
            $result = "Post: <b>{$post["posts"]->getTitle()}</b>, created by: {$post["author"]->identity()}, date: {$this->getCreatedTime()} <br/>";
        }
        return $result;
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

    //Methods
    public function addPost(Member $author, object $post) {
        if (!$author->isLoggedIn() || $author->getRole() !== "member" || $this->getCategory() !== $post->getCategory()) {
            echo "User: " . $author->identity() . ", is not able to add post with title: <b>{$this->getTitle()}</b>";
        } else {
            array_push($this->posts, ["author" => $author, "posts" => $post]);
            echo $this->printPosts();
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
        $this->createdTime = $createdTime;

        return $this;
    }
}