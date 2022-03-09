<?php

require_once __DIR__ . "/../Interfaces/TopicInfo.php";

abstract class Post {
    private $createdTime;
    private $category;
    private $title;
    private $text;

    public function __construct()
    {
        $this->setCreatedTime(date("Y-m-d H:i:s"));
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
     * Get the value of text
     */ 
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set the value of text
     *
     * @return  self
     */ 
    public function setText($text)
    {
        $this->text = $text;

        return $this;
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