<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Services\NewsService;
use Illuminate\Http\Request;

class MainController extends Controller
{
	/**
	 * @var NewsService
	 */
	private $newsService;

	public function __construct(NewsService $newsService)
	{
		$this->newsService = $newsService;
	}

	/**
	 * Index page
	 * @param Request $request
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index(Request $request)
	{
		return view('index', [
			'newsList' => $this->newsService->getPaginatedNews()
		]);
    }
}
