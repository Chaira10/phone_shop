<?php

namespace App\Classe;

use Mailjet\Client;
use Mailjet\Resources;

class Mail
{
private $api_key = 'c5839839b15921fef873b533dde62982';
private $api_key_secret = 'bd89357192d8ea9a6e3aeffd83d06115';

public function send($to_email, $to_name, $subject, $content)
{
$mj = new Client($this->api_key, $this->api_key_secret,true,['version' => 'v3.1']);
// $mj = new \Mailjet\Client(getenv('MJ_APIKEY_PUBLIC'), getenv('MJ_APIKEY_PRIVATE'),true,['version' => 'v3.1']);
$body = [
    'Messages' => [
        [
            'From' => [
                'Email' => "chaira10@hotmail.fr",
                'Name' => "La boutique"
            ],
            'To' => [
                [
                    'Email' => $to_email,
                    'Name' => $to_name
                ]
            ],
            'TemplateID' => 4207975,
            'TemplateLanguage' => true,
            'Subject' => $subject,
            'variables' => [
				"content"=> $content,
				
            ]
        ]
    ]
];
$response = $mj->post(Resources::$Email, ['body' => $body]);
$response->success();
}
}
