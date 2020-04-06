<?php

namespace StompBundle\Message;

/**
 * Class Message
 *
 * @package StompBundle\Message
 */
class Message extends AbstractMessage
{
	/**
	 * Message constructor.
	 *
	 * @param string         $message
	 * @param array          $headers
	 */
	public function __construct(string $message = '', array $headers = []){
		
		$this->setStompMessage($message);
		$this->setStompHeaders($headers);
	}
}