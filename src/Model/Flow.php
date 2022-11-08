<?php

namespace Navvygator\ManychatSDK\Model;

class Flow implements ModelInterface
{
    /** @var string */
    private $ns;
    /** @var string */
    private $name;
    /** @var int */
    private $folderId;

    public function fillFromData(array $data)
    {
        $this->ns = $data['ns'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->folderId = $data['folder_id'] ?? null;
    }

    /**
     * @return string
     */
    public function getNs(): ?string
    {
        return $this->ns;
    }

    /**
     * @param string $ns
     */
    public function setNs(string $ns)
    {
        $this->ns = $ns;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getFolderId(): ?int
    {
        return $this->folderId;
    }

    /**
     * @param int $folderId
     */
    public function setFolderId(int $folderId)
    {
        $this->folderId = $folderId;
    }

}