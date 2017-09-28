<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class School extends Model
{
    use softDeletes;

    /**
     * Relationship Methods
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function students() {
        # School has many Students
        # Define a one-to-many relationship.
        return $this->hasMany('App\Student');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'city',
    ];

    /**
     * Create dropdown list of schools
     *
     * @return array
     */
    public static function getSchoolDropdown() {
        $schools = School::orderBy('name', 'ASC')->get();

        $schools_for_dropdown = [];
        foreach($schools as $school) {
            $schools_for_dropdown[$school->id] = $school->school.' ('.$school->city.')';
        }

        return $schools_for_dropdown;
    }
}
