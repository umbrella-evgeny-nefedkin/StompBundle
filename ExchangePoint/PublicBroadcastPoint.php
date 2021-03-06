<?php
/**
 * Created by PhpStorm.
 * User: omni
 * Date: 04.05.16
 * Time: 10:04
 */

namespace Umbrella\StompBundle\ExchangePoint;

use Umbrella\StompBundle\ExchangePointInterface;

/**
 * Class PublicBroadcastPoint
 *
 * @package Umbrella\StompBundle\ExchangePoints
 */
abstract class PublicBroadcastPoint implements ExchangePointInterface
{
	const DESTINATION_TYPE = 'topic';
	const DESTINATION_PATH = 'aimchat.';

	/**
	 * @var string
	 */
	protected $key;

	/**
	 * Return full destination: '/getDestinationType/getDestinationPoint/getDestinationRoute
	 *
	 * example: '/exchange/amq.direct/uniq-key'
	 *
	 * @return string
	 */
	public function __toString() :string {

		return '/'.
			$this->getDestinationType() . '/' .
			$this->getDestinationPath() .
			$this->getDestinationKey()
			;
	}


	/**
	 * Valid destination types are: /temp-queue, /exchange, /topic, /queue, /amq/queue, /reply-queue/
	 *
	 * @return string
	 */
	public function getDestinationType() :string {

		return static::DESTINATION_TYPE;
	}

	/**
	 * @return string
	 */
	public function getDestinationPath() :string {

		return static::DESTINATION_PATH;
	}
}