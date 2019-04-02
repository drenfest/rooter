<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 04 Mar 2019 05:45:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MenuCatsToMenu
 * 
 * @property int $id
 * @property int $menu_cat_id
 * @property int $menu_id
 * @property int $menu_cat_order
 *
 * @package App\Models
 */
class MenuCatsToMenu extends Eloquent
{
	protected $table = 'menu_cats_to_menu';
	public $timestamps = false;

	protected $casts = [
		'menu_cat_id' => 'int',
		'menu_id' => 'int',
		'menu_cat_order' => 'int'
	];

	protected $fillable = [
		'menu_cat_id',
		'menu_id',
		'menu_cat_order'
	];
}
