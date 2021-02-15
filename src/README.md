# FacebookApi
Facebook Api for facebook bot

<b>FacebookSender</b><br>
use DjackNet\FBApi\FacebookSender;<br><br>

This class send raw data to fb server<br>
$fs=new FacebookSender($fbAccessToken);<br>
$fs->setRecpitient($recipient);<br>
$fs->addData($name,$valie);<br>

$fs->execute(); //Send to fb server1<br>
//or
$fs->rawExecute($jsonStrign);<br>


<b>FacebookMessage</b><br>
use DjackNet\FBApi\FacebookMessage;<br>
use DjackNet\FBApi\FacebookMessageTypes;<br>

//This class Extends FacebookSender<br>

$fm=new FacebookMessage($fbAccessToken);<br>
$fm-setRecpitient($recipient);<br>

//type data to send
$fm->sendMessage($message,FacebookMessageTypes::UPDATE) // OR FacebookMessageTypes::RESPONSE<br>

$fm->sendImage($img_url,bool $is_reusable);<br>

$fm->readMessage();<br>

For full documentation soon in site in distributor djacknet<br>
