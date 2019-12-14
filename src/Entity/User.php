<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @UniqueEntity(fields={"email"}, message="L'email que vous avez indiqué est déja utilisé !")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255,unique=true)
     * @Assert\Email()
     */
    private $email;
    /**
     * @ORM\Column(type="json")
     */
    //private $roles=[];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min="8", minMessage="Votre mot de passe doit faire minimum 8 caractères")
     * @Assert\EqualTo(propertyPath="confirm_password", message="Votre mot de passe n'est pas la meme ")
     */
    private $password;
    /**
     * @Assert\EqualTo(propertyPath="password", message="Votre mot de passe n'est pas la meme ")
     * @Assert\Length(min="8", minMessage="minimum 8 caracteres")
     */
    public $confirm_password;
    

    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     *
     * 
     * @see UserInterface
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }
    
    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }
    /**
     * @see UserInterface
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }
    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        //If you are any tomporary, sensitive data on the user, clear it here
    }
    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        //not needed when using the "bcrypt" algorithm in security.yaml
    }
    
    /**
     * @see UserInterface
     */
    public function getRoles()
    {
        return ['ROLE_USER'];
       /* $roles=$this->roles;
        //guarantee every user at least has ROLES_USER
        $roles[]='ROLE_ADMIN';
        return array_unique($roles);*/
    }/*
    public function setRoles(array $roles):self
    {
        $this->roles = $roles;
        return $this;
    }*/
}