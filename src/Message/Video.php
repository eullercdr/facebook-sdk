<?php
/**
 * Created by PhpStorm.
 * User: Euller Cristian
 * Date: 20/05/2018
 * Time: 16:16
 */

namespace CodeBot\Message;


class Video implements Message
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
                'id' => $this->recipientId
            ],
            'message' => [
                'attachment' => [
                    'type' => 'video',
                    'payload' => [
                        'url' => $messageText
                    ]
                ]
            ]
        ];
    }

}