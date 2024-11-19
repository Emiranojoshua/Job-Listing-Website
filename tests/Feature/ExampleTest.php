<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Models\Employers;
use App\Models\Jobs;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;



class ExampleTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_create_user()
    {
        // $square = new Square;
        $user = new User;
        $response = $user::factory()->create();

        $this->assertDatabaseHas($response);
    }

    // public function test_votes() {}

    public function test_create_user_post()
    {
        // $user = new User;
        // $user = User::factory()->create();

        $user = [
            'email' => 'emiranojoshua12@gmail.com',
            'password' => '123',
            'full_name' => 'emanuel',
            'password_confirmation' => '123',
        ];

        // $user = [
        //     'name' => 'emmanuel',
        // ];

        $response = $this->post('/register', $user);
        // $response =  $this->post('register', $user);
        $response->assertStatus(302);
    }

    public function test_post_check()
    {
        $response = $this->get('register');

        $response->assertOk();
    }

    public function test_see_job()
    {
        $package = Jobs::factory()->create();
        $response = $this->get('jobs');
        $response->assertSee($package->title);
    }

    public function test_access_job()
    {
        $job = Jobs::factory()->create();
        $response = $this->get('jobs/' . $job->id);
        $response->assertOk();
    }

    // public function test_access_login()
    // {
    //     $user = User::factory()->create();
    //     $response = $this->actingAs($user);
    //     return $response;
    // }

    public function test_job_belongs_to_employer()
    {
        $employer = Employers::factory()->create();
        $job = Jobs::factory()->create([
            'employers_id' => $employer->id
        ]);

        $this->assertTrue($job->employers()->is($employer));
    }

    public function test_user_has_employer()
    {
        $user = User::factory()->create();
        $employer = Employers::factory()->create([
            'user_id' => $user->id,
        ]);

        $this->assertTrue($user->employer()->is($employer));
    }

    public function test_has_user()
    {
        $user = User::factory()->create();
        $this->assertDatabaseHas(User::class, $user->getAttributes());
    }

    // public function test_authorization(){
    //     $user = User::factory()->create();

    // }

    public function test_jobs()
    {
        $job = Jobs::factory()->create();
        $response = $this->actingAs($job->employers->user)->post('/jobs', $job->getAttributes());
        // $response->assertOk();
    }
}
