<?php

namespace Navvygator\ManychatSDK\API;

/**
 * ManyChat subscriber-scoped API methods
 */
class Subscriber extends AbstractAPI
{

    /**
     * Get info about subscriber
     * @param int $subscriberId
     * @return \Navvygator\ManychatSDK\Model\Subscriber
     */
    public function getInfo(int $subscriberId): \Navvygator\ManychatSDK\Model\Subscriber
    {
        $response = $this->get('/fb/subscriber/getInfo', [
            'subscriber_id' => $subscriberId
        ]);
        $data = $this->extractResponseData($response);
        $subscriber = new \Navvygator\ManychatSDK\Model\Subscriber();
        $subscriber->fillFromData($data);

        return $subscriber;
    }

    /**
     * Find subscriber by full name
     * @param string $name
     * @return \Navvygator\ManychatSDK\Model\Subscriber[]
     */
    public function findByName(string $name): array
    {
        $result = [];
        $response = $this->get('/fb/subscriber/findByName', [
            'name' => $name
        ]);
        $data = $this->extractResponseData($response);
        foreach ($data as $item) {
            $subscriber = new \Navvygator\ManychatSDK\Model\Subscriber();
            $subscriber->fillFromData($item);
            $result[] = $subscriber;
        }

        return $result;
    }

    /**
     * Get subscriber's info by user ref parameter
     * @param int $userRef
     * @return \Navvygator\ManychatSDK\Model\Subscriber
     */
    public function getInfoByUserRef(int $userRef): \Navvygator\ManychatSDK\Model\Subscriber
    {
        $response = $this->get('/fb/subscriber/getInfoByUserRef', [
            'user_ref' => $userRef
        ]);
        $data = $this->extractResponseData($response);
        $subscriber = new \Navvygator\ManychatSDK\Model\Subscriber();
        $subscriber->fillFromData($data);

        return $subscriber;
    }

    /**
     * Find subscribers by custom field's value
     * @param int $fieldId
     * @param mixed $value
     * @return \Navvygator\ManychatSDK\Model\Subscriber[]
     */
    public function findByCustomField(int $fieldId, $value): array
    {
        $result = [];
        $response = $this->get('/fb/subscriber/findByCustomField', [
            'field_id' => $fieldId,
            'field_value' => $value
        ]);
        $data = $this->extractResponseData($response);
        foreach ($data as $item) {
            $subscriber = new \Navvygator\ManychatSDK\Model\Subscriber();
            $subscriber->fillFromData($item);;
            $result[] = $subscriber;
        }

        return $result;
    }

    /**
     * Find subscriber by system field's value
     * @param string|null $email
     * @param string|null $phone
     * @return \Navvygator\ManychatSDK\Model\Subscriber
     */
    public function findBySystemField(?string $email, ?string $phone): \Navvygator\ManychatSDK\Model\Subscriber
    {
        $response = $this->get('/fb/subscriber/findBySystemField', [
            'email' => $email,
            'phone' => $phone
        ]);
        $data = $this->extractResponseData($response);
        $subscriber = new \Navvygator\ManychatSDK\Model\Subscriber();
        $subscriber->fillFromData($data);

        return $subscriber;
    }

    /**
     * Apply tag to the subscriber
     * @param int $subscriberId
     * @param int $tagId
     */
    public function addTag(int $subscriberId, int $tagId): void
    {
        $this->post('/fb/subscriber/addTag', [
            'subscriber_id' => $subscriberId,
            'tag_id' => $tagId,
        ]);
    }

    /**
     * Apply tag to the subscriber by tag name
     * @param int $subscriberId
     * @param string $tagName
     */
    public function addTagByName(int $subscriberId, string $tagName): void
    {
        $this->post('/fb/subscriber/addTagByName', [
            'subscriber_id' => $subscriberId,
            'tag_name' => $tagName,
        ]);
    }

    /**
     * Remove tag from the subscriber
     * @param int $subscriberId
     * @param int $tagId
     */
    public function removeTag(int $subscriberId, int $tagId): void
    {
        $this->post('/fb/subscriber/removeTag', [
            'subscriber_id' => $subscriberId,
            'tag_id' => $tagId,
        ]);
    }

    /**
     * Remove tag from the subscriber by tag name
     * @param int $subscriberId
     * @param string $tagName
     */
    public function removeTagByName(int $subscriberId, string $tagName): void
    {
        $this->post('/fb/subscriber/removeTagByName', [
            'subscriber_id' => $subscriberId,
            'tag_name' => $tagName,
        ]);
    }

    /**
     * Set subscriber's custom field value
     * @param int $subscriberId
     * @param int $fieldId
     * @param mixed $value
     * For the "text" type - value should be string,
     * for the "number" type - int or float,
     * for the "date" type - string (format "YYYY-MM-DD", example "1999-05-23")
     * for the "datetime" type - string (format "YYYY-MM-DDTHH:MM:SSP", example "1999-05-23T14:12:03+00:00")
     * for the "boolean" type - bool
     * for the "array" type - array
     */
    public function setCustomField(int $subscriberId, int $fieldId, $value): void
    {
        $this->post('/fb/subscriber/setCustomField', [
            'subscriber_id' => $subscriberId,
            'field_id' => $fieldId,
            'field_value' => $value
        ]);
    }

    /**
     * Set subscriber's multiple custom fields value
     * @param int $subscriberId
     * @param array[] $fieldsData
     * Fields data format: [
     *  ['field_id' => int, 'field_value' => mixed],
     *  ['field_name' => string, 'field_value' => mixed],
     *  ...
     * ]
     * For the field_value format @see setCustomField()
     */
    public function setCustomFields(int $subscriberId, array $fieldsData): void
    {
        $response = $this->post('/fb/subscriber/setCustomFields', [
            'subscriber_id' => $subscriberId,
            'fields' => $fieldsData,
        ]);
    }

    /**
     * @param int $subscriberId
     * @param string $fieldName
     * @param mixed $value
     * For the value format @see setCustomField()
     */
    public function setCustomFieldByName(int $subscriberId, string $fieldName, $value): void
    {
        $this->post('/fb/subscriber/setCustomFieldByName', [
            'subscriber_id' => $subscriberId,
            'field_name' => $fieldName,
            'field_value' => $value,
        ]);
    }

    /**
     * Create sms, email, or whatsapp subscriber
     * @param string|null $firstName
     * @param string|null $lastName
     * @param string|null $phone
     * @param string|null $whatsappPhone
     * @param string|null $email
     * @param string|null $gender
     * @param bool|null $hasOptInSms
     * @param bool|null $hasOptInEmail
     * @param string|null $consentPhrase
     * @return \Navvygator\ManychatSDK\Model\Subscriber
     */
    public function createSubscriber(
        ?string $firstName,
        ?string $lastName,
        ?string $phone,
        ?string $whatsappPhone,
        ?string $email,
        ?string $gender,
        ?bool $hasOptInSms,
        ?bool $hasOptInEmail,
        ?string $consentPhrase
    ): \Navvygator\ManychatSDK\Model\Subscriber
    {
        $response = $this->post('/fb/subscriber/createSubscriber', [
            'first_name' => $firstName,
            'last_name' => $lastName,
            'phone' => $phone,
            'whatsapp_phone' => $whatsappPhone,
            'email' => $email,
            'gender' => $gender,
            'has_opt_in_sms' => $hasOptInSms,
            'has_opt_in_email' => $hasOptInEmail,
            'consent_phrase' => $consentPhrase,
        ]);
        $data = $this->extractResponseData($response);
        $subscriber = new \Navvygator\ManychatSDK\Model\Subscriber();
        $subscriber->fillFromData($data);

        return $subscriber;
    }

    /**
     * Update existing subscriber
     * @param int $subscriberId
     * @param string|null $firstName
     * @param string|null $lastName
     * @param string|null $phone
     * @param string|null $email
     * @param string|null $gender
     * @param bool|null $hasOptInSms
     * @param bool|null $hasOptInEmail
     * @param string|null $consentPhrase
     * @return \Navvygator\ManychatSDK\Model\Subscriber
     */
    public function updateSubscriber(
        int $subscriberId,
        ?string $firstName,
        ?string $lastName,
        ?string $phone,
        ?string $email,
        ?string $gender,
        ?bool $hasOptInSms,
        ?bool $hasOptInEmail,
        ?string $consentPhrase
    ): \Navvygator\ManychatSDK\Model\Subscriber
    {
        $response = $this->post('/fb/subscriber/updateSubscriber', [
            'subscriber_id' => $subscriberId,
            'first_name' => $firstName,
            'last_name' => $lastName,
            'phone' => $phone,
            'email' => $email,
            'gender' => $gender,
            'has_opt_in_sms' => $hasOptInSms,
            'has_opt_in_email' => $hasOptInEmail,
            'consent_phrase' => $consentPhrase,
        ]);
        $data = $this->extractResponseData($response);
        $subscriber = new \Navvygator\ManychatSDK\Model\Subscriber();
        $subscriber->fillFromData($data);

        return $subscriber;
    }

}