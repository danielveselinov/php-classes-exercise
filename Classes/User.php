<?php 

require_once __DIR__ . "/../constants.php";
require_once __DIR__ . "/../Interfaces/UserInfo.php";

abstract class User implements UserInfo {
    protected $firstName;
    protected $lastName;
    protected $username;
    protected $password;
    protected $role;

    public function __construct($firstName, $lastName, $username, $password, $role)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
        $this->setUsername($username);
        $this->setPassword($password);
        $this->setRole($role);
    }

    /**
     * Get the value of firstName
     */ 
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */ 
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of lastName
     */ 
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */ 
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get the value of username
     */ 
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @return  self
     */ 
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of role
     */ 
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set the value of role
     *
     * @return  self
     */ 
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Return user data in given format
     */
    public function userPrint() {
        return "first name: {$this->getFirstName()}, last name {$this->getLastName()}, username {$this->getUsername()}, role {$this->getRole()}";
    }

    public function login() 
    {

    }

    public function logout()
    {
        
    }
}