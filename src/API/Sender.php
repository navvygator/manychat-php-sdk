<?php

namespace Navvygator\ManychatSDK\API;

/**
 * ManyChat sending API methods
 */
class Sender extends AbstractAPI
{

    /**
     * Send dynamic content to the subscriber
     * @param int $subscriberId
     * @param array $content @see https://manychat.github.io/dynamic_block_docs/
     * @param string|null $messageTag enum ("ACCOUNT_UPDATE", "CONFIRMED_EVENT_UPDATE", "POST_PURCHASE_UPDATE")
     * @param string|null $otnTopicName
     */
    public function sendContent(int $subscriberId, array $content, ?string $messageTag = null, ?string $otnTopicName = null): void
    {
        $this->post('/fb/sending/sendContent', [
            'subscriber_id' => $subscriberId,
            'data' => $content,
            'message_tag' => $messageTag,
            'otn_topic_name' => $otnTopicName,
        ]);
    }

    /**
     * Send dynamic content to the subscriber by user ref
     * @param int $userRef
     * @param array $content
     */
    public function sendContentByUserRef(int $userRef, array $content): void
    {
        $this->post('/fb/sending/sendContentByUserRef', [
            'user_ref' => $userRef,
            'data' => $content
        ]);
    }

    /**
     * Send flow to the subscriber
     * @param int $subscriberId
     * @param string $flowNs
     */
    public function sendFlow(int $subscriberId, string $flowNs): void
    {
        $this->post('/fb/sending/sendFlow', [
            'subscriber_id' => $subscriberId,
            'flow_ns' => $flowNs
        ]);
    }
}