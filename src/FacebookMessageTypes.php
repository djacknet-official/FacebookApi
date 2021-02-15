<?php 
namespace DjackNet\FBApi;

class FacebookMessageTypes{
	/**
	* Send the user reminders or updates for an event they have registered for (e.g., RSVP'ed, purchased tickets). This tag may be used for upcoming events and events in progress.
	*/
	const RESPONSE="RESPONSE";
	/**
	* Notify the user of an update on a recent purchase.
	*/
	const UPDATE="UPDATE";
}