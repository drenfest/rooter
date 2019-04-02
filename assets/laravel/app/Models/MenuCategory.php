<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 04 Mar 2019 05:45:18 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MenuCategory
 * 
 * @property int $menu_cat_id
 * @property string $menu_cat_title
 * @property string $menu_cat_desc
 * @property int $menu_cat_rows
 * @property int $menu_cat_disp_desc
 * @property int $menu_cat_size
 * @property string $menu_cat_extra
 * @property string $menu_cat_option
 *
 * @package App\Models
 */
class MenuCategory extends Eloquent
{
	protected $primaryKey = 'menu_cat_id';
	public $timestamps = false;

	protected $casts = [
		'menu_cat_rows' => 'int',
		'menu_cat_disp_desc' => 'int',
		'menu_cat_size' => 'int'
	];

	protected $fillable = [
		'menu_cat_title',
		'menu_cat_desc',
		'menu_cat_rows',
		'menu_cat_disp_desc',
		'menu_cat_size',
		'menu_cat_extra',
		'menu_cat_option'
	];
}
