<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


/**
 * Class PointsInteret
 * 
 * @property int $id
 * @property string $Type
 * @property string $Nom
 * @property int $Id_lieu
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class PointsInteret extends Model
{
	use HasFactory;
	protected $table = 'points_interets';

	protected $casts = [
		'Id_lieu' => 'int'
	];

	protected $fillable = [
		'Type',
		'Nom',
		'Id_lieu'
	];
}
