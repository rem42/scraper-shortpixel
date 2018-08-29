<?php

namespace Scraper\ScraperShortPixel\Entity;

use JMS\Serializer\Annotation as Serializer;

class Status
{
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("Code")
	 */
	protected $code;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("Message")
	 */
	protected $message;
}
