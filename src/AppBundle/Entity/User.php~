<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=true)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255, nullable=true, unique=true)
     */
    private $mail;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="loginCode", type="datetimetz", nullable=true)
     */
    private $loginCode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="loginCodeCreated", type="datetimetz", nullable=true)
     */
    private $loginCodeCreated;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=true)
     */
    private $password;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return User
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set loginCode
     *
     * @param \DateTime $loginCode
     *
     * @return User
     */
    public function setLoginCode($loginCode)
    {
        $this->loginCode = $loginCode;

        return $this;
    }

    /**
     * Get loginCode
     *
     * @return \DateTime
     */
    public function getLoginCode()
    {
        return $this->loginCode;
    }

    /**
     * Set loginCodeCreated
     *
     * @param \DateTime $loginCodeCreated
     *
     * @return User
     */
    public function setLoginCodeCreated($loginCodeCreated)
    {
        $this->loginCodeCreated = $loginCodeCreated;

        return $this;
    }

    /**
     * Get loginCodeCreated
     *
     * @return \DateTime
     */
    public function getLoginCodeCreated()
    {
        return $this->loginCodeCreated;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }
}
