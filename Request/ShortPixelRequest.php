<?php

namespace Scraper\ScraperShortPixel\Request;

use Scraper\Scraper\Annotation\UrlAnnotation;
use Scraper\Scraper\Request\Request;

/**
 * Class ShortPixelRequest
 * @package Scraper\ScraperShortPixel\Request
 *
 * @UrlAnnotation(baseUrl="https://shortpixel.com/")
 */
abstract class ShortPixelRequest extends Request
{
	/**
	 * @var string
	 */
	protected $userAgent;

	public function getParameters()
	{
		return [];
	}

	public function getBody()
	{
		return [];
	}

	public function getHeaders()
	{
		return [
			'User-Agent' => $this->userAgent
		];
	}

	/**
	 * @return string
	 */
	public function getUserAgent(): ?string
	{
		return $this->userAgent;
	}

	/**
	 * @param string $userAgent
	 *
	 * @return $this
	 */
	public function setUserAgent(?string $userAgent)
	{
		$this->userAgent = $userAgent;
		return $this;
	}
}
