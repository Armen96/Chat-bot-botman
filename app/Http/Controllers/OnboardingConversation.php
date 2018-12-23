<?php

namespace App\Http\Controllers;

use App\Mail\SendMessage;
use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;
use Validator;
use Mail;

class OnboardingConversation extends Conversation
{
    protected $firstname;

    protected $email;

    public function askFirstname()
    {
        $this->ask('Hello! What is your firstname?', function(Answer $answer) {
            $this->firstname = $answer->getText();

            $this->say('Nice to meet you '.$this->firstname);
            $this->askEmail();
        });
    }

    public function askEmail()
    {

        $this->ask('What is your email?', function(Answer $answer) {

            $validator = Validator::make(['email' => $answer->getText()], [
                'email' => 'email',
            ]);

            if ($validator->fails()) {
                return $this->repeat('That doesn\'t look like a valid email. Please enter a valid email.');
            }

            $this->email = $answer->getText();

            $this->bot->userStorage()->save([
                'email' => $answer->getText(),
            ]);

            $this->say('Great - that is all we need, '.$this->firstname);

            $this->sendMessage($this->firstname);
        });
    }

    public function sendMessage($name)
    {

//        Mail::to("barsegyan96armen@gmail.com")->send(new SendMessage($name));

        $email = new \SendGrid\Mail\Mail();
        $email->setFrom("test@example.com", "Example User");
        $email->setSubject("Sending with SendGrid is Fun");
        $email->addTo("test@example.com", "Example User");
        $email->addContent("text/plain", "and easy to do anywhere, even with PHP");
        $email->addContent(
            "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
        );
        $sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));

        $sendgrid->send($email);

    }

    public function run()
    {
        $this->askFirstname();
    }
}
