<?php

namespace App\Service;

use Twilio\Rest\Client;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class TwilioService
{
    private $sid;
    private $authToken;
    private $phoneNumber;
    private $client;

    public function __construct(ParameterBagInterface $params)
    {
        $this->sid = $params->get('TWILIO_SID');
        $this->authToken = $params->get('TWILIO_AUTH_TOKEN');
        $this->phoneNumber = $params->get('TWILIO_PHONE_NUMBER');
        $this->client = new Client($this->sid, $this->authToken);
    }

    public function sendSms($to, $message)
    {
        $this->client->messages->create(
            $to,
            [
                'from' => $this->phoneNumber,
                'body' => $message
            ]
        );
    }
}
