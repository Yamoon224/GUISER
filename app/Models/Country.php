<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Country
 * 
 * @property int $id
 * @property int $code
 * @property string $alpha2
 * @property string $alpha3
 * @property string $name
 * @property string $nom
 * 
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class Country extends Model
{
	public $timestamps = false;

	protected $casts = [
		'code' => 'int'
	];

	protected $guarded = [];

	public function users()
	{
		return $this->hasMany(User::class);
	}
}
