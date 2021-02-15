<?php
namespace DjackNet\FBApi;
class FacebookSender
{
    private $accessToken;
    private $recipient;
    protected $data = array();

    public $url = "https://graph.facebook.com/v2.6/me/messages";
    private $status = null;
    protected $answer = array();
    public function __construct($accessToken)
    {
        $this->accessToken = $accessToken;
    }

    public function setRecipient($recipient)
    {
        $this->data["recipient"] = array();
        $this->data["recipient"]["id"] = $recipient;
        $this->recipient = $recipient;
    }
    public function getRecipient()
    {
        return $this->recipient;
    }

    public function isSuccess()
    {
        return $status;
    }

    public function addData($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function clearData()
    {
        $this->data = array();
        $this->setRecipient($this->recipient);
    }

    public function execute()
    {
        $this->rawExecute(json_encode($this->data));
    }

    public function addMetaData($metadata)
    {
        $this->data["message"]["metadata"] = $metadata;
    }


    public function rawExecute($json)
    {
        $ch = curl_init($this->url . "?access_token=" . $this->accessToken);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        $this->answer = curl_exec($ch);
    }

    public function getAnswer()
    {
        return $this->answer;
    }


    public function getData()
    {
        return $this->data;
    }

}