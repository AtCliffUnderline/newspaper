<?php

namespace App\Http\Controllers;

use Achillesp\CrudForms\CrudForms;
use App\Models\News;
use Illuminate\Http\Request;

class NewsAdminController extends Controller
{
	use CrudForms;

    public function __construct(News $news)
	{
		$this->model = $news;
		$this->indexFields = ['heading', 'text', 'category'];
		$this->formFields = [
			['name' => 'heading', 'label' => 'Heading', 'type' => 'text'],
			['name' => 'text', 'label' => 'News text', 'type' => 'textarea'],
			['name'         => 'category',
				'label'        => 'Category',
				'type'         => 'select',
				'relFieldName' => 'name',
				'relationship' => 'category'
			],
		];
	}
}
