<?php

namespace Scraper\ScraperShortPixel\Entity;

use JMS\Serializer\Annotation as Serializer;

class Upload
{
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("Status")
	 */
	protected $status;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("Message")
	 */
	protected $message;
	/**
	 * @var Data
	 * @Serializer\Type("Scraper\ScraperShortPixel\Entity\Data")
	 * @Serializer\SerializedName("Data")
	 */
	protected $data;
}
