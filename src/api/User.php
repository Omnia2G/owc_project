<?php
class User{

    private int $id;
    private string $firstname;
    private string $lastname;
    private string $username;
    private string $email;
    private string $pw;
    private string $role;
    private string $token;

     /**
     * @return string
     */
    public function getToken(){
        return $this->token;
    }
     /**
     * @param string $role
     */
    public function setToken($token): void
    {
        $this->token = $token;
    }
    /**
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }
    /**
     * @param string $role
     */
    public function setRole($role): void
    {
        $this->role = $role;
    }
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }
    /**
     * @param string $firstname
     */
    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }
    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }
    /**
     * @param string $lastname
     */
    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }
    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }
    /**
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }
    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->pw;
    }
    /**
     * @param string $pw
     */
    public function setPassword(string $password): void
    {
        $this->pw = $password;
    }
    public function expose() {
        return get_object_vars($this);
    }



}