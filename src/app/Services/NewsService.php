<?php


namespace App\Services;


use App\Repositories\Interfaces\NewsRepositoryInterface;

class NewsService
{
	/**
	 * @var NewsRepositoryInterface
	 */
	private $newsRepository;

	public function __construct(NewsRepositoryInterface $newsRepository)
	{
		$this->newsRepository = $newsRepository;
	}

	/**
	 * Get news ordered by time with pages.
	 */
	public function getPaginatedNews()
	{
		return $this->newsRepository->getPaginatedNews();
	}
}
