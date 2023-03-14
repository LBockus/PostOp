<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * class Operation
 * @package App\Models
 *
 * @property int $id
 * @property string $Name
 * @property int $Category
 * @property int $Status
 * @property Carbon $deleted_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */

class Operation extends Model
{
    use HasFactory;
}
