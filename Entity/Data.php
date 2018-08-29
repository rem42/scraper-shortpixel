<?php

namespace Scraper\ScraperShortPixel\Entity;

use JMS\Serializer\Annotation as Serializer;

class Data
{
	/**
	 * @var Status
	 * @Serializer\Type("Scraper\ScraperShortPixel\Entity\Status")
	 * @Serializer\SerializedName("Status")
	 */
	protected $status;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("OriginalURL")
	 */
	protected $originalURL;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("OptimizedFileName")
	 */
	protected $optimizedFileName;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("CompressionType")
	 */
	protected $compressionType;
}
