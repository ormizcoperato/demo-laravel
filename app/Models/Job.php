<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Job extends Model
{
    use HasFactory;

    protected $table = 'job_listings';

    protected $fillable = ['title', 'salary'];

    // creating relation between different models
    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, foreignPivotKey: 'job_listing_id');
    }
}

/* the methods below exists in the "Eloquent" Model by default */

//class Job
//{
//    public static function all(): array
//    {
//        return [
//            [
//                'id' => 1,
//                'title' => 'Director',
//                'salary' => '$50,000',
//            ],
//            [
//                'id' => 2,
//                'title' => 'Programmer',
//                'salary' => '$10,000',
//            ],
//            [
//                'id' => 3,
//                'title' => 'Teacher',
//                'salary' => '$40,000',
//            ],
//        ];
//    }
//
//
//    public static function find(int $id): array
//    {
//        $job = Arr::first(static::all(), fn($job) => $job['id'] === $id);
//
//        if (!$job) abort(404);
//
//        return $job;
//    }
//}
