<?php 
namespace DjackNet\FBApi;

class FacebookMessageTags{
	/**
	* Send the user reminders or updates for an event they have registered for (e.g., RSVP'ed, purchased tickets). This tag may be used for upcoming events and events in progress.
	*/
	const CONFIRMED_EVENT_UPDATE="CONFIRMED_EVENT_UPDATE";
	/**
	* Notify the user of an update on a recent purchase.
	*/
	const POST_PURCHASE_UPDATE="POST_PURCHASE_UPDATE";
	/**
	*Notify the user of a non-recurring change to their application or account.
	*/
	const ACCOUNT_UPDATE="ACCOUNT_UPDATE";
	/**
	*Allows human agents to respond to user inquiries. Messages can be sent within 7 days after a user message.
	*/
	const HUMAN_AGENT="HUMAN_AGENT";
}