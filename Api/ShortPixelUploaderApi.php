<?php

namespace Scraper\ScraperShortPixel\Api;

use JMS\Serializer\SerializerBuilder;
use Scraper\Scraper\Serializer\Construction\ObjectConstructor;
use Scraper\ScraperShortPixel\Entity\Upload;

class ShortPixelUploaderApi extends ShortPixelApi
{
	public function execute()
	{
		$data = json_encode($this->data[0]);
		$serializer = SerializerBuilder::create()
			->setObjectConstructor(new ObjectConstructor())
			->build()
		;
		$this->object = $serializer->deserialize($data, Upload::class, 'json');

		return $this->object;
	}
}
