<?php


namespace App\Repositories;


use App\Models\News;
use App\Repositories\Interfaces\NewsRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class NewsRepository implements NewsRepositoryInterface
{
	/**
	 * Getting from database sorted and paginated news
	 *
	 * @return LengthAwarePaginator
	 */
	public function getPaginatedNews(): LengthAwarePaginator
	{
		return News::orderBy('created_at')->paginate(15);
	}
}
