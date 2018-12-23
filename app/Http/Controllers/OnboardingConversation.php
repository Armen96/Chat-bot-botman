<?php

namespace App\Http\Controllers;

use App\Mail\SendMessage;
use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


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

            $this->bot->userStorage()->save([
                'email' => $answer->getText(),
            ]);

            $this->say('Great - that is all we need, '.$this->firstname);
        });
    }

    public function sendMessage()
    {
        Mail::to("test@gmail.com")->send(new SendMessage());
    }

    public function run()
    {
        $this->askFirstname();
    }
}
