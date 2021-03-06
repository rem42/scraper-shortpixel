<?php

namespace Scraper\ScraperShortPixel\Api;

use Scraper\Scraper\Annotation\UrlAnnotation;
use Scraper\Scraper\Api\ApiInterface;
use Scraper\Scraper\Request\Request;

abstract class ShortPixelApi implements ApiInterface
{
	/**
	 * @var Request
	 */
	protected $request;
	/**
	 * @var mixed
	 */
	protected $data;
	/**
	 * @var UrlAnnotation
	 */
	protected $urlAnnotation;
	/**
	 * @var mixed
	 */
	protected $object;

	/**
	 * ShortPixelApi constructor.
	 *
	 * @param Request       $request
	 * @param               $data
	 * @param UrlAnnotation $urlAnnotation
	 */
	public function __construct(Request $request, $data, UrlAnnotation $urlAnnotation)
	{
		$this->request = $request;
		$this->data = $data;
		$this->urlAnnotation = $urlAnnotation;
	}
}
