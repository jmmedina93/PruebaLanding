<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ContactRepository")
 */
class Contact
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
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $surname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="boolean")
     */
    private $policy_1;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $policy_2;

    /**
     * @ORM\Column(type="boolean")
     */
    private $policy_3;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(string $surname): self
    {
        $this->surname = $surname;

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

    public function getPolicy1(): ?bool
    {
        return $this->policy_1;
    }

    public function setPolicy1(bool $policy_1): self
    {
        $this->policy_1 = $policy_1;

        return $this;
    }

    public function getPolicy2(): ?bool
    {
        return $this->policy_2;
    }

    public function setPolicy2(?bool $policy_2): self
    {
        $this->policy_2 = $policy_2;

        return $this;
    }

    public function getPolicy3(): ?bool
    {
        return $this->policy_3;
    }

    public function setPolicy3(bool $policy_3): self
    {
        $this->policy_3 = $policy_3;

        return $this;
    }
}
