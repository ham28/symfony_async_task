<?php


namespace App\Message;


class MailNotification
{
    private $description;
    private $id;
    private $form;

    public function __construct(string $description, int $id, string $form)
    {
        $this->description = $description;
        $this->id = $id;
        $this->form = $form;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getForm(): string
    {
        return $this->form;
    }


}