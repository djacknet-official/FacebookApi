<?php
namespace DjackNet\FBApi;

class FacebookMessage extends FacebookSender{

		public function sendMessage($message,$type=FacebookMessageTypes::UPDATE){
			$this->data["message_type"]=$type;
			$this->data["message"]["text"]=$message;
            
            file_put_contents('FacebookApi/text2.txt', print_r($this->data, true));
			
			$this->execute();
			$this->clearData();
		}
				
		public function sendImage($img,$is_reusable=false){
			$this->addData("message",array(
				"attachment" => array(
					"type"=>"image",
					"payload"=>array(
						"url"=>$img,
						"is_reusable"=>$is_reusable
					)
				)
			));
			$this->execute();
			$this->clearData();
		}
		
		public function sendAction($action){
			$this->clearData();
			$this->data["sender_action"]=$action;
			$this->execute();
			$this->clearData();
		}
		
		public function sendTyping(){
			$this->sendAction("typing_on");
		}
		
		public function sendTypingOff(){
			$this->sendAction("typing_off");
		}
		
		public function readMessage(){
			$this->sendAction("mark_seen");
		}
		
		/**
		* tag from FacebookMessageTags
		*/
		public function sendTagMessage($message){
			$this->data["message_type"]="MESSAGE_TAG";
			$this->data["message"]["text"]=$message;
			$this->data["tag"]='POST_PURCHASE_UPDATE';
			$this->execute($this->data);
			$this->clearData();
		}
}