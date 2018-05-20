<?php

namespace CodeBot\Message;

class Text
{

    private $recipientId;

    /**
     * Text constructor.
     */
    public function __construct(string $recipientId)
    {
        $this->recipientId = $recipientId;
    }

    public function message(string $messageText): array
    {
        return [
            'recipient' => [
                'id' => 1
            ],
            'message' => [
                'text' => 'oi',
                'metadata' => 'DEVELOPER_DEFINED_METADATA'
            ]
        ];
    }
}