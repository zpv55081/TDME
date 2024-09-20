<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Класс Role представляет роль пользователя в системе.
 * 
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 */
class Role extends Model
{
    use HasFactory;

    /**
     * Указывает на то, что поля должны быть заполнены.
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * Пользователи, соответствующие роли.
     * (Связь "многие ко многим" с моделью User)
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'role_user');
    }
}
