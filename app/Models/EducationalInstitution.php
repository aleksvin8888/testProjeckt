<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\EducationalInstitution
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $slug
 * @property int|null $profession_id
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\EducationalInstitutionFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationalInstitution newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EducationalInstitution newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EducationalInstitution query()
 * @method static \Illuminate\Database\Eloquent\Builder|EducationalInstitution whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationalInstitution whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationalInstitution whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationalInstitution whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationalInstitution whereProfessionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationalInstitution whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationalInstitution whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationalInstitution whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Profession[] $professions
 * @property-read int|null $professions_count
 */
class EducationalInstitution extends Model
{
    use HasFactory;

    public function professions(){
        return $this->belongsToMany(Profession::class, 'educational_institution_professions',
            'educational_institution_id', 'profession_id');
    }



}
