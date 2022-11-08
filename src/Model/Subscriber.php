<?php

namespace Navvygator\ManychatSDK\Model;

use Navvygator\ManychatSDK\Model\Subscriber\ShopifyField;
use Navvygator\ManychatSDK\Model\Subscriber\UserRef;

class Subscriber implements ModelInterface
{
    /** @var int */
    private $id;
    /** @var int */
    private $pageId;
    /** @var UserRef[] */
    private $userRefs;
    /** @var string */
    private $firstName;
    /** @var string */
    private $lastName;
    /** @var string */
    private $name;
    /** @var string */
    private $gender;
    /** @var string */
    private $profilePic;
    /** @var string */
    private $locale;
    /** @var string */
    private $language;
    /** @var string */
    private $timezone;
    /** @var string */
    private $liveChatUrl;
    /** @var string */
    private $lastInputText;
    /** @var bool */
    private $optinPhone;
    /** @var string */
    private $phone;
    /** @var bool */
    private $optinEmail;
    /** @var string */
    private $email;
    /** @var string */
    private $subscribed;
    /** @var string */
    private $lastInteraction;
    /** @var string */
    private $lastSeen;
    /** @var bool */
    private $isFollowupEnabled;
    /** @var string */
    private $igUsername;
    /** @var int */
    private $igId;
    /** @var string */
    private $whatsappPhone;
    /** @var bool */
    private $optinWhatsapp;
    /** @var CustomField[] */
    private $customFields;
    /** @var ShopifyField[] */
    private $shopifyFields;
    /** @var Tag[] */
    private $tags;

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
     * @return int
     */
    public function getPageId(): ?int
    {
        return $this->pageId;
    }

    /**
     * @param int $pageId
     */
    public function setPageId(int $pageId): void
    {
        $this->pageId = $pageId;
    }

    /**
     * @return UserRef[]
     */
    public function getUserRefs(): ?array
    {
        return $this->userRefs;
    }

    /**
     * @param array $userRefs
     */
    public function setUserRefs(array $userRefs): void
    {
        $this->userRefs = $userRefs;
    }

    /**
     * @return string
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
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
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     */
    public function setGender(string $gender): void
    {
        $this->gender = $gender;
    }

    /**
     * @return string
     */
    public function getProfilePic(): ?string
    {
        return $this->profilePic;
    }

    /**
     * @param string $profilePic
     */
    public function setProfilePic(string $profilePic): void
    {
        $this->profilePic = $profilePic;
    }

    /**
     * @return string
     */
    public function getLocale(): ?string
    {
        return $this->locale;
    }

    /**
     * @param string $locale
     */
    public function setLocale(string $locale): void
    {
        $this->locale = $locale;
    }

    /**
     * @return string
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * @param string $language
     */
    public function setLanguage(string $language): void
    {
        $this->language = $language;
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
    public function setTimezone(string $timezone): void
    {
        $this->timezone = $timezone;
    }

    /**
     * @return string
     */
    public function getLiveChatUrl(): ?string
    {
        return $this->liveChatUrl;
    }

    /**
     * @param string $liveChatUrl
     */
    public function setLiveChatUrl(string $liveChatUrl): void
    {
        $this->liveChatUrl = $liveChatUrl;
    }

    /**
     * @return string
     */
    public function getLastInputText(): ?string
    {
        return $this->lastInputText;
    }

    /**
     * @param string $lastInputText
     */
    public function setLastInputText(string $lastInputText): void
    {
        $this->lastInputText = $lastInputText;
    }

    /**
     * @return bool
     */
    public function isOptinPhone(): ?bool
    {
        return $this->optinPhone;
    }

    /**
     * @param bool $optinPhone
     */
    public function setOptinPhone(bool $optinPhone): void
    {
        $this->optinPhone = $optinPhone;
    }

    /**
     * @return string
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return bool
     */
    public function isOptinEmail(): ?bool
    {
        return $this->optinEmail;
    }

    /**
     * @param bool $optinEmail
     */
    public function setOptinEmail(bool $optinEmail): void
    {
        $this->optinEmail = $optinEmail;
    }

    /**
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getSubscribed(): ?string
    {
        return $this->subscribed;
    }

    /**
     * @param string $subscribed
     */
    public function setSubscribed(string $subscribed): void
    {
        $this->subscribed = $subscribed;
    }

    /**
     * @return string
     */
    public function getLastInteraction(): ?string
    {
        return $this->lastInteraction;
    }

    /**
     * @param string $lastInteraction
     */
    public function setLastInteraction(string $lastInteraction): void
    {
        $this->lastInteraction = $lastInteraction;
    }

    /**
     * @return string
     */
    public function getLastSeen(): ?string
    {
        return $this->lastSeen;
    }

    /**
     * @param string $lastSeen
     */
    public function setLastSeen(string $lastSeen): void
    {
        $this->lastSeen = $lastSeen;
    }

    /**
     * @return bool
     */
    public function isFollowupEnabled(): ?bool
    {
        return $this->isFollowupEnabled;
    }

    /**
     * @param bool $isFollowupEnabled
     */
    public function setIsFollowupEnabled(bool $isFollowupEnabled): void
    {
        $this->isFollowupEnabled = $isFollowupEnabled;
    }

    /**
     * @return string
     */
    public function getIgUsername(): ?string
    {
        return $this->igUsername;
    }

    /**
     * @param string $igUsername
     */
    public function setIgUsername(string $igUsername): void
    {
        $this->igUsername = $igUsername;
    }

    /**
     * @return int
     */
    public function getIgId(): ?int
    {
        return $this->igId;
    }

    /**
     * @param int $igId
     */
    public function setIgId(int $igId): void
    {
        $this->igId = $igId;
    }

    /**
     * @return string
     */
    public function getWhatsappPhone(): ?string
    {
        return $this->whatsappPhone;
    }

    /**
     * @param string $whatsappPhone
     */
    public function setWhatsappPhone(string $whatsappPhone): void
    {
        $this->whatsappPhone = $whatsappPhone;
    }

    /**
     * @return bool
     */
    public function isOptinWhatsapp(): ?bool
    {
        return $this->optinWhatsapp;
    }

    /**
     * @param bool $optinWhatsapp
     */
    public function setOptinWhatsapp(bool $optinWhatsapp): void
    {
        $this->optinWhatsapp = $optinWhatsapp;
    }

    /**
     * @return CustomField[]
     */
    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    /**
     * @param CustomField[] $customFields
     */
    public function setCustomFields(array $customFields): void
    {
        $this->customFields = $customFields;
    }

    /**
     * @return ShopifyField[]
     */
    public function getShopifyFields(): ?array
    {
        return $this->shopifyFields;
    }

    /**
     * @param ShopifyField[] $shopifyFields
     */
    public function setShopifyFields(array $shopifyFields): void
    {
        $this->shopifyFields = $shopifyFields;
    }

    /**
     * @return Tag[]
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    /**
     * @param Tag[] $tags
     */
    public function setTags(array $tags): void
    {
        $this->tags = $tags;
    }

    public function fillFromData(array $data)
    {
        $this->id = $data['id'] ?? null;
        $this->pageId = $data['page_id'] ?? null;
        $this->firstName = $data['first_name'] ?? null;
        $this->lastName = $data['last_name'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->gender = $data['gender'] ?? null;
        $this->profilePic = $data['profile_pic'] ?? null;
        $this->locale = $data['locale'] ?? null;
        $this->language = $data['language'] ?? null;
        $this->timezone = $data['timezone'] ?? null;
        $this->liveChatUrl = $data['live_chat_url'] ?? null;
        $this->lastInputText = $data['last_input_text'] ?? null;
        $this->optinPhone = $data['optin_phone'] ?? null;
        $this->phone = $data['phone'] ?? null;
        $this->optinEmail = $data['optin_email'] ?? null;
        $this->email = $data['email'] ?? null;
        $this->subscribed = $data['subscribed'] ?? null;
        $this->lastInteraction = $data['last_interaction'] ?? null;
        $this->lastSeen = $data['last_seen'] ?? null;
        $this->isFollowupEnabled = $data['is_followup_enabled'] ?? null;
        $this->igUsername = $data['ig_username'] ?? null;
        $this->igId = $data['ig_id'] ?? null;
        $this->whatsappPhone = $data['whatsapp_phone'] ?? null;
        $this->optinWhatsapp = $data['optin_whatsapp'] ?? null;
        $this->userRefs = [];
        foreach ($data['user_refs']?? [] as $user_ref) {
            $userRef = new UserRef();
            $userRef->fillFromData($user_ref);
            $this->userRefs[] = $userRef;
        }
        $this->customFields = [];
        foreach ($data['custom_fields']?? [] as $custom_field) {
            $customField = new CustomField();
            $customField->fillFromData($custom_field);
            $this->customFields[] = $customField;
        }
        $this->shopifyFields = [];
        foreach ($data['shopify_fields']?? [] as $shopify_field) {
            $shopifyField = new ShopifyField();
            $shopifyField->fillFromData($shopify_field);
            $this->shopifyFields[] = $shopifyField;
        }
        $this->tags = [];
        foreach ($data['tags']?? [] as $_tag) {
            $tag = new Tag();
            $tag->fillFromData($_tag);
            $this->tags[] = $tag;
        }
    }
}