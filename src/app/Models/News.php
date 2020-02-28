<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class News
 * @package App\Models
 *
 * @property int id
 * @property string heading
 * @property string text
 * @property Category category
 * @property string created_at
 * @property string updated_at
 */
class News extends Model
{
    protected $table = 'news';

	public function category()
	{
		return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
