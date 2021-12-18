<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Jobseeker;

class JobseekerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->get('jobseekers');
        $this->assertTrue(true);
    }

    public function test_jobseeker_duplication()
    {
        $jobseeker1 = Jobseeker::make([
            'name' => 'mohammad',
            'email' => 'mohammad@gmail.com'
        ]);

        $jobseeker2 = Jobseeker::make([
            'name' => 'mahmoud',
            'email' => 'mahmoud@gmail.com'
        ]);

        $this->assertTrue($jobseeker1->email != $jobseeker2->email);
    }

    public function test_delete_jobseeker() 
    {
        $jobseeker = Jobseeker::make([
            'name' => 'rayyan',
            'email' => 'rayyan@gmail.com'
        ]);

        if($jobseeker){
            $jobseeker->delete();
        }

        $this->assertTrue(true);
    }
}
