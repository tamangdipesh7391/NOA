<?php

namespace App\Models\Conference;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Conference extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'status',
        'date',
        'end_date',
        'meta_title',
        'meta_description',
        'intro_text',
        'description',
        'image',

    ];

    public function getLimitDescription()
    {
        return Str::limit($this->intro_text, 100);
    }

    public function totalConference()
    {
        return $this->hasMany(ConferenceForm::class, 'conference_id', 'id')->count();
    }

    public function getConferenceForm()
    {
        return $this->hasMany(ConferenceForm::class, 'conference_id', 'id');
    }
}
