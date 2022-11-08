<?php

namespace Navvygator\ManychatSDK\Model\Subscriber;

use Navvygator\ManychatSDK\Model\ModelInterface;

class ShopifyField implements ModelInterface
{
    /** @var int */
    private $id;
    /** @var string */
    private $state;
    /** @var string */
    private $currency;
    /** @var string */
    private $totalSpent;
    /** @var int */
    private $ordersCount;
    /** @var bool */
    private $acceptsMarketing;
    /** @var int */
    private $lastOrderId;
    /** @var string */
    private $lastOrderCreatedAt;
    /** @var string[] */
    private $tags;
    /** @var int */
    private $lastCheckoutId;
    /** @var string */
    private $lastCheckoutPrice;
    /** @var string */
    private $lastCheckoutCreatedAt;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState(string $state): void
    {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * @return string
     */
    public function getTotalSpent(): ?string
    {
        return $this->totalSpent;
    }

    /**
     * @param string $totalSpent
     */
    public function setTotalSpent(string $totalSpent): void
    {
        $this->totalSpent = $totalSpent;
    }

    /**
     * @return int
     */
    public function getOrdersCount(): ?int
    {
        return $this->ordersCount;
    }

    /**
     * @param int $ordersCount
     */
    public function setOrdersCount(int $ordersCount): void
    {
        $this->ordersCount = $ordersCount;
    }

    /**
     * @return bool
     */
    public function isAcceptsMarketing(): ?bool
    {
        return $this->acceptsMarketing;
    }

    /**
     * @param bool $acceptsMarketing
     */
    public function setAcceptsMarketing(bool $acceptsMarketing): void
    {
        $this->acceptsMarketing = $acceptsMarketing;
    }

    /**
     * @return int
     */
    public function getLastOrderId(): ?int
    {
        return $this->lastOrderId;
    }

    /**
     * @param int $lastOrderId
     */
    public function setLastOrderId(int $lastOrderId): void
    {
        $this->lastOrderId = $lastOrderId;
    }

    /**
     * @return string
     */
    public function getLastOrderCreatedAt(): ?string
    {
        return $this->lastOrderCreatedAt;
    }

    /**
     * @param string $lastOrderCreatedAt
     */
    public function setLastOrderCreatedAt(string $lastOrderCreatedAt): void
    {
        $this->lastOrderCreatedAt = $lastOrderCreatedAt;
    }

    /**
     * @return string[]
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    /**
     * @param string[] $tags
     */
    public function setTags(array $tags): void
    {
        $this->tags = $tags;
    }

    /**
     * @return int
     */
    public function getLastCheckoutId(): ?int
    {
        return $this->lastCheckoutId;
    }

    /**
     * @param int $lastCheckoutId
     */
    public function setLastCheckoutId(int $lastCheckoutId): void
    {
        $this->lastCheckoutId = $lastCheckoutId;
    }

    /**
     * @return string
     */
    public function getLastCheckoutPrice(): ?string
    {
        return $this->lastCheckoutPrice;
    }

    /**
     * @param string $lastCheckoutPrice
     */
    public function setLastCheckoutPrice(string $lastCheckoutPrice): void
    {
        $this->lastCheckoutPrice = $lastCheckoutPrice;
    }

    /**
     * @return string
     */
    public function getLastCheckoutCreatedAt(): ?string
    {
        return $this->lastCheckoutCreatedAt;
    }

    /**
     * @param string $lastCheckoutCreatedAt
     */
    public function setLastCheckoutCreatedAt(string $lastCheckoutCreatedAt): void
    {
        $this->lastCheckoutCreatedAt = $lastCheckoutCreatedAt;
    }

    public function fillFromData(array $data)
    {
        $this->id = $data['id'] ?? null;
        $this->state = $data['state'] ?? null;
        $this->currency = $data['currency'] ?? null;
        $this->totalSpent = $data['total_spent'] ?? null;
        $this->ordersCount = $data['orders_count'] ?? null;
        $this->acceptsMarketing = $data['accepts_marketing'] ?? null;
        $this->lastOrderId = $data['last_order_id'] ?? null;
        $this->lastOrderCreatedAt = $data['last_order_created_at'] ?? null;
        $this->tags = $data['tags'] ?? null;
        $this->lastCheckoutId = $data['last_checkout_id'] ?? null;
        $this->lastCheckoutPrice = $data['last_checkout_price'] ?? null;
        $this->lastOrderCreatedAt = $data['last_checkout_created_at'] ?? null;
    }
}