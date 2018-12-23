<?php

namespace App\Http\Controllers;

use App\Mail\SendMessage;
use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;
use Validator;
use Mail;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


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
        Mail::to("barsegyan96armen@gmail.com")->send(new SendMessage($name));

        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            //Server settings
            $mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = getenv('MAIL_HOST');  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = getenv('MAIL_USERNAME');                 // SMTP username
            $mail->Password = getenv('MAIL_USERNAME');                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;

            //Recipients
            $mail->setFrom('barsegyan96armen@gmail.com', 'Mailer');
            $mail->addAddress('barsegyan96armen@gmail.com', 'Joe User');     // Add a recipient
            $mail->addAddress('barsegyan96armen@gmail.com');               // Name is optional
            $mail->addReplyTo('barsegyan96armen@gmail.com', 'Information');
            $mail->addCC('barsegyan96armen@gmail.com.com');
            $mail->addBCC('barsegyan96armen@gmail.com');

            //Attachments
//            $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//            $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Here is the subject';
            $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }

    }

    public function run()
    {
        $this->askFirstname();
    }
}
