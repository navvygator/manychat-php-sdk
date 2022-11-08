<?php

namespace Navvygator\ManychatSDK\Model\Subscriber;

use Navvygator\ManychatSDK\Model\ModelInterface;

class UserRef implements ModelInterface
{
    /** @var int */
    private $userRef;
    /** @var string */
    private $optedIn;

    public function fillFromData(array $data)
    {
        $this->userRef = $data['user_ref'] ?? null;
        $this->optedIn = $data['opted_in'] ?? null;
    }

    /**
     * @return int
     */
    public function getUserRef(): ?int
    {
        return $this->userRef;
    }

    /**
     * @param int $userRef
     */
    public function setUserRef(int $userRef): void
    {
        $this->userRef = $userRef;
    }

    /**
     * @return string
     */
    public function getOptedIn(): ?string
    {
        return $this->optedIn;
    }

    /**
     * @param string $optedIn
     */
    public function setOptedIn(string $optedIn): void
    {
        $this->optedIn = $optedIn;
    }
}