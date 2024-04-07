<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AnnouncementRepository")
 *
 * @UniqueEntity("title")
 */
class Announcement
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     *
     * @Assert\NotBlank()
     *
     * @Assert\Type("string")
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     *
     * @Assert\NotBlank()
     *
     *
     * @Assert\Length(
     *      min = 10,
     *      max = 2000,
     *      minMessage = "Your description must be at least 10 characters long",
     *      maxMessage = "Your description cannot be longer than 2000 characters"
     * )
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     *
     * @Assert\Type("integer")
     *
     * @Assert\NotBlank()
     */
    private $price;

    /**
     * @ORM\Column(type="date")
     *
     * @Assert\NotBlank()
     *
     * @Assert\Date()
     *
     */
    private $start_date;

    /**
     * @ORM\Column(type="date")
     *
     * @Assert\NotBlank()
     *
     * @Assert\Date()
     *
     * @Assert\GreaterThan("today")
     */
    private $expiry_date;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Category")
     * @ORM\JoinColumn(nullable=false)
     *
     * @Assert\NotBlank()
     */
    private $category;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     *
     * @Assert\NotBlank()
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Comment", mappedBy="announcement")
     */
    private $comments;

    /**
     * @ORM\Column(type="string")
     * @Assert\File(mimeTypes={ "image/jpeg" })
     *
     * @Assert\NotBlank(message="Please upload a valid image for your ad")
     */
    private $image;

    public function getId()
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->start_date;
    }

    public function setStartDate(\DateTimeInterface $start_date): self
    {
        $this->start_date = $start_date;

        return $this;
    }

    public function getExpiryDate(): ?\DateTimeInterface
    {
        return $this->expiry_date;
    }

    public function setExpiryDate(\DateTimeInterface $expiry_date): self
    {
        $this->expiry_date = $expiry_date;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getComments()
    {
        return $this->comments;
    }

    public function setComments($comments): void
    {
        $this->comments = $comments;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }
}
