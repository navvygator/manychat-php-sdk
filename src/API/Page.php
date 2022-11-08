<?php

namespace Navvygator\ManychatSDK\API;

use Navvygator\ManychatSDK\Exception\ManychatResponseInvalidException;
use Navvygator\ManychatSDK\Model\BotField;
use Navvygator\ManychatSDK\Model\CustomField;
use Navvygator\ManychatSDK\Model\Flow;
use Navvygator\ManychatSDK\Model\FlowFolder;
use Navvygator\ManychatSDK\Model\GrowthTool;
use Navvygator\ManychatSDK\Model\OtnTopic;
use Navvygator\ManychatSDK\Model\Tag;

/**
 * ManyChat page-scoped API methods
 */
class Page extends AbstractAPI
{

    /**
     * Get information about page
     * @return \Navvygator\ManychatSDK\Model\Page
     */
    public function getInfo(): \Navvygator\ManychatSDK\Model\Page
    {
        $response = $this->get('/fb/page/getInfo');
        $data = $this->extractResponseData($response);
        $page = new \Navvygator\ManychatSDK\Model\Page();
        $page->fillFromData($data);

        return $page;
    }

    /**
     * Get page's tags list
     * @return Tag[]
     */
    public function getTags(): array
    {
        $result = [];
        $response = $this->get('/fb/page/getTags');
        $data = $this->extractResponseData($response);
        foreach ($data as $item) {
            $tag = new Tag();
            $tag->fillFromData($item);
            $result[] = $tag;
        }

        return $result;
    }

    /**
     * Get page's growth tools list
     * @return GrowthTool[]
     */
    public function getGrowthTools(): array
    {
        $result = [];
        $response = $this->get('/fb/page/getGrowthTools');
        $data = $this->extractResponseData($response);
        foreach ($data as $item) {
            $growthTool = new GrowthTool();
            $growthTool->fillFromData($item);
            $result[] = $growthTool;
        }

        return $result;
    }

    /**
     * Get page's flows list
     * @return Flow[]
     */
    public function getFlows(): array
    {
        $result = [];
        $response = $this->get('/fb/page/getFlows');
        $data = $this->extractResponseData($response);
        foreach ($data['flows'] ?? [] as $item) {
            $flow = new Flow();
            $flow->fillFromData($item);
            $result[] = $flow;
        }

        return $result;
    }

    /**
     * Get page's flow folders list
     * @return array
     */
    public function getFlowFolders(): array
    {
        $result = [];
        $response = $this->get('/fb/page/getFlows');
        $data = $this->extractResponseData($response);
        foreach ($data['folders'] as $item) {
            $flowFolder = new FlowFolder();
            $flowFolder->fillFromData($item);
            $result[] = $flowFolder;
        }

        return $result;
    }

    /**
     * Get page's custom fields list
     * @return CustomField[]
     */
    public function getCustomFields(): array
    {
        $result = [];
        $response = $this->get('/fb/page/getCustomFields');
        $data = $this->extractResponseData($response);
        foreach ($data as $item) {
            $customField = new CustomField();
            $customField->fillFromData($item);
            $result[] = $customField;
        }

        return $result;
    }

    /**
     * Get page's OTN topics list
     * @return OtnTopic[]
     */
    public function getOtnTopics(): array
    {
        $result = [];
        $response = $this->get('/fb/page/getOtnTopics');
        $data = $this->extractResponseData($response);
        foreach ($data as $item) {
            $otnTopic = new OtnTopic();
            $otnTopic->fillFromData($item);
            $result[] = $otnTopic;
        }

        return $result;
    }

    /**
     * Get page's bot fields list
     * @return BotField[]
     */
    public function getBotFields(): array {
        $result = [];
        $response = $this->get('/fb/page/getBotFields');
        $data = $this->extractResponseData($response);
        foreach ($data as $item) {
            $botField = new BotField();
            $botField->fillFromData($item);
            $result[] = $botField;
        }

        return $result;
    }

    /**
     * Create tag entity on the page
     * @param string $name
     * @return Tag
     * @throws ManychatResponseInvalidException
     */
    public function createTag(string $name): Tag
    {
        $response = $this->post('/fb/page/createTag', ['name' => $name]);
        $data = $this->extractResponseData($response);
        if (!isset($data['tag'])) {
            throw new ManychatResponseInvalidException('Invalid ManyChat response from create tag API');
        }
        $tag = new Tag();
        $tag->fillFromData($data['tag']);

        return $tag;
    }

    /**
     * Remove tag entity on the page
     * @param int $tagId
     */
    public function removeTag(int $tagId): void
    {
        $this->post('/fb/page/removeTag', ['tag_id' => $tagId]);
    }

    /**
     * Remove tag entity on the page by tag name
     * @param string $tagName
     */
    public function removeTagByName(string $tagName): void
    {
        $this->post('/fb/page/removeTagByName', ['tag_name' => $tagName]);
    }

    /**
     * Create custom field entity on the page
     * @param string $name
     * @param string $type enum("text", "number", "date", "datetime", "boolean", "array")
     * @param string|null $description
     * @return CustomField
     * @throws ManychatResponseInvalidException
     */
    public function createCustomField(string $name, string $type, ?string $description): CustomField
    {
        $response = $this->post('/fb/page/createCustomField', [
            'caption' => $name,
            'type' => $type,
            'description' => $description
        ]);
        $data = $this->extractResponseData($response);
        if (empty($data['field'])) {
            throw new ManychatResponseInvalidException('Invalid Manychat response from create custom field API');
        }
        $customField = new CustomField();
        $customField->fillFromData($data['field']);

        return $customField;
    }

    /**
     * Create bot field entity on the page
     * @param string $name
     * @param string $type enum("text", "number", "date", "datetime", "boolean")
     * @param string|null $description
     * @param mixed $value
     * For the value format @see setBotField()
     * @return BotField
     * @throws ManychatResponseInvalidException
     */
    public function createBotField(string $name, string $type, ?string $description, $value): BotField
    {
        $response = $this->post('/fb/page/createBotField', [
            'name' => $name,
            'type' => $type,
            'description' => $description,
            'value' => $value
        ]);
        $data = $this->extractResponseData($response);
        if (empty($data['field'])) {
            throw new ManychatResponseInvalidException('Invalid Manychat response from create bot field API');
        }
        $botField = new BotField();
        $botField->fillFromData($data['field']);

        return $botField;
    }

    /**
     * Set value for the bot field
     * @param int $fieldId
     * @param $value
     * For the "text" type - value should be string,
     * for the "number" type - int or float,
     * for the "date" type - string (format "YYYY-MM-DD", example "1999-05-23")
     * for the "datetime" type - string (format "YYYY-MM-DDTHH:MM:SSP", example "1999-05-23T14:12:03+00:00")
     * for the "boolean" type - bool
     */
    public function setBotField(int $fieldId, $value): void
    {
        $this->post('/fb/page/setBotField', [
            'field_id' => $fieldId,
            'field_value' => $value
        ]);
    }

    /**
     * @param string $fieldName
     * @param $value
     * For the value format @see setBotField()
     */
    public function setBotFieldByName(string $fieldName, $value): void
    {
        $this->post('/fb/page/setBotFieldByName', [
            'field_name' => $fieldName,
            'field_value' => $value
        ]);
    }

    /**
     * @param array $fieldsData
     * Fields data format: [
     *  ['field_id' => int, 'field_value' => mixed],
     *  ['field_name' => string, 'field_value' => mixed],
     *  ...
     * ]
     * For the field_value format @see setBotField()
     */
    public function setBotFields(array $fieldsData): void
    {
        $this->post('/fb/page/setBotFields', [
            'fields' => $fieldsData
        ]);
    }
}