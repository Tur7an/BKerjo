<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'company_id',
        'location_id',
        'job_type_id',
        'category_id',
        'title',
        'slug',
        'description',
        'salary_min',
        'salary_max',
        'status',
        'published_at'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function jobType()
    {
        return $this->belongsTo(JobType::class);
    }

    public function category()
    {
        return $this->belongsTo(JobCategory::class);
    }

    public function educations()
    {
        return $this->belongsToMany(Education::class);
    }
}
