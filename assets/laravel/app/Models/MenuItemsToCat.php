<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 04 Mar 2019 05:45:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MenuItemsToCat
 * 
 * @property int $id
 * @property int $menu_item_id
 * @property int $menu_cat_id
 * @property int $menu_item_order
 *
 * @package App\Models
 */
class MenuItemsToCat extends Eloquent
{
	protected $table = 'menu_items_to_cat';
	public $timestamps = false;

	protected $casts = [
		'menu_item_id' => 'int',
		'menu_cat_id' => 'int',
		'menu_item_order' => 'int'
	];

	protected $fillable = [
		'menu_item_id',
		'menu_cat_id',
		'menu_item_order'
	];
}
