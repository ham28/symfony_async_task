<?php


namespace App\MessageHandler;


use App\Message\MailNotification;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class MailNotificationHandler
{
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function __invoke(MailNotification $message)
    {
        $email= (new Email())
            ->to('niriarijaona28@gmail.com')
            ->subject('New Incident #'.$message->getId().'-'.$message->getUser()->getEmail())
            ->html('<p>'.$message->getDescription().'</p>');

        $this->mailer->send($email);

    }
}