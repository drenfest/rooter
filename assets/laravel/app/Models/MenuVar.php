<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 04 Mar 2019 05:45:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MenuVar
 * 
 * @property int $menu_var_id
 * @property string $menu_var_type
 * @property string $menu_var_content
 * @property string $menu_var_notes
 *
 * @package App\Models
 */
class MenuVar extends Eloquent
{
	protected $table = 'menu_var';
	protected $primaryKey = 'menu_var_id';
	public $timestamps = false;

	protected $fillable = [
		'menu_var_type',
		'menu_var_content',
		'menu_var_notes'
	];
}
