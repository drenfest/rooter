<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 04 Mar 2019 05:45:18 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Menu
 * 
 * @property int $menu_id
 * @property bool $menu_enabled
 * @property string $menu_title
 * @property string $menu_desc
 * @property string $menu_pdf_location
 * @property string $menu_html_location
 *
 * @package App\Models
 */
class Menu extends Eloquent
{
	protected $table = 'menu';
	protected $primaryKey = 'menu_id';
	public $timestamps = false;

	protected $casts = [
		'menu_enabled' => 'bool'
	];

	protected $fillable = [
		'menu_enabled',
		'menu_title',
		'menu_desc',
		'menu_pdf_location',
		'menu_html_location'
	];
}
