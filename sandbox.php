# "php sandbox.php | php artisan tinker sandbox.php" to run this code


#factory example

# App\Models\Job::create(['title'=> 'my new test', 'salary'=>'$123,123']);
# App\Models\Job::orderBy('created_at','desc')->first();
# App\Models\Job::factory(50)->create();


# factory example 2

# App\Models\User::factory()->create();
# App\Models\User::factory(45)->create();
# App\Models\User::factory(5)->unverified()->create();


# relation example

# $job = App\Models\Job::first();
# $employer = $job->employer; # this will execute a query (when using lazy loading) to fetch the employer
# $employer->jobs;


# attaching new relation

$tag = App\Models\Tag::find(1);
$tag->jobs()->attach(App\Models\Job::find(7));
