<?php 

require_once __DIR__ . "/User.php";

class Member extends User {
    protected $posts;
    private $authenticated;

    public function __construct($fistName, $lastName, $username, $password, $role)
    {
        $this->posts = [];
        $this->authenticated = false;

        parent::__construct($fistName, $lastName, $username, $password, $role);
    }

    //Methods
    public function login() {
        $members = trim(file_get_contents(DATABASE));
        $members = explode(PHP_EOL, $members);

        foreach ($members as $member) {
            if ($member == "{$this->getUsername()}:{$this->getPassword()}") {
                $this->authenticated = true;
                break;
            } 
        }
    }

    public function logout() {
        $this->authenticated = false;
    }

    public function isLoggedIn() {
        return $this->authenticated;
    }

    public function getRole() {
        return $this->role;
    }

    /**
     * Return user formated identity
     */
    public function identity() {
        return parent::userPrint() . ", authenticated: {$this->isLoggedIn()}";
    }
}