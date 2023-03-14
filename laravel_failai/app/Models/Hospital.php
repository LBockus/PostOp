<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Hospital
 * @package App\Models
 *
 * @property int $id
 * @property string $Name
 * @property Carbon $deleted_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */

class Hospital extends Model
{
    use HasFactory;
}
