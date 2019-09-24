<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Challenge
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Challenge newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Challenge newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Challenge query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property int $user_id
 * @property int $category_id
 * @property string $image
 * @property string $flag
 * @property int $points
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Challenge whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Challenge whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Challenge whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Challenge whereFlag($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Challenge whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Challenge whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Challenge whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Challenge wherePoints($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Challenge whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Challenge whereUserId($value)
 */
class Challenge extends Model
{
    protected $fillable = ['name','image','flag','points','category_id','description'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }
}
