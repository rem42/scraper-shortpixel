<?php

namespace Scraper\ScraperShortPixel\Request;

use Scraper\Scraper\Annotation\UrlAnnotation;
use Scraper\Scraper\Request\Body\BodyMultipart;
use Scraper\Scraper\Request\Body\Multipart;

/**
 * Class ShortPixelUploaderRequest
 * @package Scraper\ScraperShortPixel\Request
 *
 * @UrlAnnotation(url="file-upload", method="POST", contentType="JSON", protocol="HTTP")
 */
class ShortPixelUploaderRequest extends ShortPixelRequest
{
	/**
	 * @var integer
	 */
	protected $compressionType;
	/**
	 * @var string
	 */
	protected $file;

	public function getBody()
	{
		$bodyMultipart = new BodyMultipart();

		$file = new Multipart();
		$file
			->setName('file')
			->setContents($this->file)
			->setFilename('logo_header.png')
			->setHeaders([
				'Content-Type' => 'image/png'
			])
		;

		$compressionType = new Multipart();
		$compressionType
			->setName('compressionType')
			->setContents($this->compressionType)
		;

		$bodyMultipart->addMultipart($compressionType);
		$bodyMultipart->addMultipart($file);
		return $bodyMultipart;
	}

	/**
	 * @return int
	 */
	public function getCompressionType(): ?int
	{
		return $this->compressionType;
	}

	/**
	 * @param int $compressionType
	 *
	 * @return $this
	 */
	public function setCompressionType(?int $compressionType)
	{
		$this->compressionType = $compressionType;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getFile()
	{
		return $this->file;
	}

	/**
	 * @param string $file
	 *
	 * @return $this
	 */
	public function setFile($file)
	{
		$this->file = $file;
		return $this;
	}
}
