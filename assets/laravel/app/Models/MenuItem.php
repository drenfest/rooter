<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 04 Mar 2019 05:45:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MenuItem
 * 
 * @property int $menu_item_id
 * @property string $menu_item_name
 * @property string $menu_item_desc
 * @property string $menu_item_price
 * @property string $menu_item_image
 * @property int $menu_item_price_type
 *
 * @package App\Models
 */
class MenuItem extends Eloquent
{
	protected $primaryKey = 'menu_item_id';
	public $timestamps = false;

	protected $casts = [
		'menu_item_price_type' => 'int'
	];

	protected $fillable = [
		'menu_item_name',
		'menu_item_desc',
		'menu_item_price',
		'menu_item_image',
		'menu_item_price_type'
	];
}
