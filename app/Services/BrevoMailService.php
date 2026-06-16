<?php

namespace App\Services;

use SendinBlue\Client\Configuration;
use SendinBlue\Client\Api\TransactionalEmailsApi;
use GuzzleHttp\Client;


class BrevoMailService
{
    protected $apiInstance;

    public function __construct()
    {
        $config = Configuration::getDefaultConfiguration()
            ->setApiKey('api-key', env('BREVO_API_KEY'));

        $this->apiInstance = new TransactionalEmailsApi(
            new Client(),
            $config
        );
    }

    public function send($to, $subject, $htmlContent)
    {
        $email = new \SendinBlue\Client\Model\SendSmtpEmail([
           'to' => $to,
            'sender' => [
                'email' => env('MAIL_FROM_ADDRESS'),
                'name' => env('MAIL_FROM_NAME')
            ],
            'subject' => $subject,
            'htmlContent' => $htmlContent
        ]);

        return $this->apiInstance->sendTransacEmail($email);
    }
}