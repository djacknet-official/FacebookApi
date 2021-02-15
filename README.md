# FacebookApi
Facebook Api for facebook bot

<b>FacebookSender</b>
use DjackNet\FBApi\FacebookSender;

This class send raw data to fb server
$fs=new FacebookSender($fbAccessToken);
$fs->setRecpitient($recipient);
$fs->addData($name,$valie);

$fs->execute(); //Send to fb server1
//or
$fs->rawExecute($jsonStrign);


<b>FacebookMessage</b>
use DjackNet\FBApi\FacebookMessage;
use DjackNet\FBApi\FacebookMessageTypes;

//This class Extends FacebookSender

$fm=new FacebookMessage($fbAccessToken);
$fm-setRecpitient($recipient);

//type data to send
$fm->sendMessage($message,FacebookMessageTypes::UPDATE) // OR FacebookMessageTypes::RESPONSE

$fm->sendImage($img_url,bool $is_reusable);

$fm->readMessage();

For full documentation soon in site in distributor djacknet
