<?php

namespace App\Entity;

use App\Repository\CommerceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommerceRepository::class)
 */
class Commerce
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $commercants;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $téléphone;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $siran;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $iban;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $site;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCommercants(): ?string
    {
        return $this->commercants;
    }

    public function setCommercants(string $commercants): self
    {
        $this->commercants = $commercants;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTéléphone(): ?int
    {
        return $this->téléphone;
    }

    public function setTéléphone(?int $téléphone): self
    {
        $this->téléphone = $téléphone;

        return $this;
    }

    public function getSiran(): ?int
    {
        return $this->siran;
    }

    public function setSiran(?int $siran): self
    {
        $this->siran = $siran;

        return $this;
    }

    public function getIban(): ?int
    {
        return $this->iban;
    }

    public function setIban(?int $iban): self
    {
        $this->iban = $iban;

        return $this;
    }

    public function getSite(): ?string
    {
        return $this->site;
    }

    public function setSite(?string $site): self
    {
        $this->site = $site;

        return $this;
    }
}
