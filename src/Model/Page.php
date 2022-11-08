<?php

namespace Navvygator\ManychatSDK\Model;

use Exception;

class Page implements ModelInterface
{
    /** @var int */
    private $id;
    /** @var string */
    private $name;
    /** @var string */
    private $category;
    /** @var string */
    private $avatarLink;
    /** @var string */
    private $username;
    /** @var string */
    private $about;
    /** @var string */
    private $description;
    /** @var bool */
    private $isPro;
    /** @var string */
    private $timezone;

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $category
     */
    public function setCategory(string $category)
    {
        $this->category = $category;
    }

    /**
     * @return string
     */
    public function getCategory(): ?string
    {
        return $this->category;
    }

    /**
     * @param string $avatarLink
     */
    public function setAvatarLink(string $avatarLink)
    {
        $this->avatarLink = $avatarLink;
    }

    /**
     * @return string
     */
    public function getAvatarLink(): ?string
    {
        return $this->avatarLink;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * @param string $about
     */
    public function setAbout(string $about)
    {
        $this->about = $about;
    }

    /**
     * @return string
     */
    public function getAbout(): ?string
    {
        return $this->about;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @return bool
     */
    public function isPro(): ?bool
    {
        return $this->isPro;
    }

    /**
     * @param bool $isPro
     */
    public function setIsPro(bool $isPro)
    {
        $this->isPro = $isPro;
    }

    /**
     * @return string
     */
    public function getTimezone(): ?string
    {
        return $this->timezone;
    }

    /**
     * @param string $timezone
     */
    public function setTimezone(string $timezone)
    {
        $this->timezone = $timezone;
    }


    public function fillFromData(array $data)
    {
        $this->id = $data['id'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->category = $data['category'] ?? null;
        $this->avatarLink = $data['avatar_link'] ?? null;
        $this->username = $data['username'] ?? null;
        $this->about = $data['description'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->isPro = $data['is_pro'] ?? null;
        $this->timezone = $data['timezone'] ?? null;
    }

}