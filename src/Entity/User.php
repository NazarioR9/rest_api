<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;

/**
* @ORM\Entity
* @ORM\Table(name="user")
*/
class User implements UserInterface
{
	/**
	* @ORM\Column(type="integer")
	* @ORM\Id
	* @ORM\GeneratedValue(strategy="AUTO")
	*/
	private $id;
	/**
	* @ORM\Column(type="string")
	* @Assert\NotBlank()
	*/
	private $fname;
	/**
	* @ORM\Column(type="string")
	* @Assert\NotBlank()
	*/
	private $lname;
	/**
	* @ORM\Column(type="string", unique=true)
	* @Assert\Email()
	* @Assert\NotBlank()
	*/
	private $email;
	/**
	* @ORM\Column(type="string")
	* @Assert\NotBlank()
	*/
	private $password;
	/**
	* @ORM\Column(type="string")
	* @Assert\NotBlank()
	*/
	private $title;
	/**
	* @ORM\Column(type="json")
	*/
	private $roles = [];

	public function getTitle(): string
	{
		return $this->title;
	}

	public function setTitle(string $title)
    {
		if($this->title == null){
			$this->title = $title;
		}
	}

	public function getId(): int
    {
        return $this->id;
    }

    public function setFirstName(string $fn)
    {
        $this->fname = $fn;
    }

    public function getFirstName(): string
    {
        return $this->fullName;
    }

    public function getLastName(): string
    {
        return $this->lname;
    }

    public function setLastName(string $ln)
    {
        $this->lname = $ln;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    public function getRoles(): array
    {
        $roles = $this->roles;

        if (empty($roles)) {
            $roles[] = 'ROLE_USER';
        }

        return array_unique($roles);
    }

    public function setRoles(array $roles)
    {
        $this->roles = $roles;
    }

    public function getUsername(){
    	return $this->fname.$this->lname;
    }


    public function eraseCredentials()
    {
    }

    public function getSalt(){
    	return null;
    }
}