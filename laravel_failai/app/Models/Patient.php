<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Patient
 * @package App\Models
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property int $doctor_id
 * @property string $condition
 * @property string $operation
 * @property string $login_code
 * @property Carbon $deleted_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'doctor_id',
        'operation',
        'login_code',
    ];

    protected $guarded = [
        'condition',
    ];

    protected $hidden = [
        'remember_token'
    ];
    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            // Generate unique code
            $model->login_code = substr(md5($model->created_at . $model->first_name), 0, 8);
        });
    }

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        // Set default value
        $this->condition = $this->condition ?? 'Neužpildyta';
    }
}
