<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Job;

class JobTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->get('jobs');
        $this->assertTrue(true);
    }

    public function test_job_creation()
    {
        $job = Job::make([
            'title' => 'Designer',
            'location' => 'Beirut, Lebanon',
            'skills' => 'Figma, Photoshop',
            'type' => 'project_basis'
        ]);

        if($job) {
            $job->save();
        }

        $this->assertTrue(true);
    }

    public function test_delete_job()
    {
        $job = Job::make([
            'title' => 'Designer',
            'location' => 'Beirut, Lebanon',
            'skills' => 'Figma, Photoshop',
            'type' => 'project_basis'
        ]);

        if($job) {
            $job->delete();
        }

        $this->assertTrue(true);
    }
}
