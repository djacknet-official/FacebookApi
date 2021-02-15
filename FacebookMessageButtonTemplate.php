<?php
namespace DjackNet\FBApi;

class FacebookMessageButtonTemplate extends FacebookSender
{
    protected $buttons = array();
    protected $templateType;
    protected $elements = array();

    public function __construct($token)
    {
        parent::__construct($token);
        $this->data["message"]["attachment"]["type"] = "template";
        $this->data["message"]["attachment"]["payload"]["template_type"] = "button";
    }

    public function addButton($value)
    {
        $this->buttons[] = $value;

    }


    public function addUrlButton($name, $url)
    {
        $this->addButton(array("type" => "web_url", "title" => $name, "url" => $url));

    }

    public function addPostbackButton($name, $payload)
    {
        $this->addButton(array("type" => "postback", "title" => $name, "payload" => $payload));
    }

    public function addCallButton($name, $phone)
    {
        $this->addButton(array("type" => "phone_number", "title" => $name, "payload" => $phone));
    }

    public function addLoginButton($name, $url)
    {
        $this->addButton(array("type" => "account_link", "url" => $url));
    }
    public function addText($text)
    {
        $this->data["message"]["attachment"]["payload"]["text"] = $text;
    }


    public function send()
    {
        $this->data["message"]["attachment"]["payload"]["buttons"] = $this->buttons;

        $this->execute();
    }


}
