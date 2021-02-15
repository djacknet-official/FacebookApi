<?php
namespace DjackNet\FBApi;

class FacebookMessageGenericTemplate extends FacebookMessageButtonTemplate
{
    private $count = 0;

    public function __construct($token)
    {
        parent::__construct($token);
        $this->data["message"]["attachment"]["payload"]["template_type"] = "generic";
    }

    public function next()
    {
        $this->count++;
    }

    public function addButton($value)
    {
        $this->buttons[$this->count][] = $value;
    }

    public function addText($text)
    {

    }

    public function addTitle($title)
    {
        $this->elements[$this->count]["title"] = $title;
    }

    public function addImageUrl($img)
    {
        $this->elements[$this->count]["image_url"] = $img;
    }

    public function addSubtitle($subtitle)
    {
        $this->elements[$this->count]["subtitle"] = $subtitle;
    }

    public function addDefaultAction($url)
    {
        $this->elements[$this->count]["default_action"] = array(
            "type" => "web_url",
            "url" => "$url",
            "webview_height_ratio" => "FULL"
        );
        //https://developers.facebook.com/docs/messenger-platform/send-messages/template/generic
    }

    public function send()
    {
        for ($i = 0; $i <= $this->count; $i++) {
            $this->data["message"]["attachment"]["payload"]["elements"][$i] = $this->
                elements[$i];
            $this->data["message"]["attachment"]["payload"]["elements"][$i]["buttons"] = $this->
                buttons[$i];
        }
        $this->execute();

    }


}
