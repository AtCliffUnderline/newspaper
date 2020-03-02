<?php

namespace App\Repositories\Interfaces;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface NewsRepositoryInterface
{
	/**
	 * Getting from database sorted and paginated news
	 *
	 * @return LengthAwarePaginator
	 */
	public function getPaginatedNews(): LengthAwarePaginator;
}
