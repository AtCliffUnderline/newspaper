<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * @package App\Models
 * @property int id
 * @property Collection news
 * @property string name
 */
class Category extends Model
{
    protected $table = 'categories';
	public $timestamps = false;

	public function news()
	{
		return $this->hasMany(News::class, 'category_id', 'id');
    }
}
