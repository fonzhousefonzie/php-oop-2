<?php
class User
{
    protected $name;
    protected $lastName;
    protected $email;
    private $password;
    protected $isLogged;

    function __construct($_name, $_lastName, $_email, $isLogged)
    {
        $this->setName($_name);
        $this->setLastName($_lastName);
        $this->setEmail($_email);
        $this->setIsLogged($isLogged);
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName($name): self
    {
        $this->name = $name;

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
     */
    public function setLastName($lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get full name of user
     */
    public function getFullName()
    {
        return $this->name . " " . $this->lastName;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail($email): self
    {
        $this->email = $email;

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
     */
    public function setPassword($password): self
    {
        $this->password = hash("md5", $password);

        return $this;
    }

    /**
     * Get the value of isLogged
     */
    public function getIsLogged()
    {
        return $this->isLogged;
    }

    /**
     * Set the value of isLogged
     */
    public function setIsLogged($isLogged): self
    {
        $this->isLogged = $isLogged;

        return $this;
    }
}
