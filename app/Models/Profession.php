<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Profession
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $slug
 * @property int|null $skill_id
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\ProfessionFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Profession newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Profession newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Profession query()
 * @method static \Illuminate\Database\Eloquent\Builder|Profession whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profession whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profession whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profession whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profession whereSkillId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profession whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profession whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profession whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Profession extends Model
{
    use HasFactory;


}


