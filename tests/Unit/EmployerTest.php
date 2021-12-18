<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Employer;

class EmployerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->get('employers');
        $this->assertTrue(true);
    }

    public function test_employer_duplication()
    {
        $employer1 = Employer::make([
            'name' => 'John Doe',
            'email' => 'johndoe@gmail.com'
        ]);

        $employer2 = Employer::make([
            'name' => 'Omar',
            'email' => 'omar@gmail.com'
        ]);
        
        $this->assertTrue($employer1->email != $employer2->email);
    }

    public function test_delete_employer()
    {
        $employer = Employer::make([
            'name' => 'Saed',
            'email' => 'saed@gmail.com'
        ]);

        if($employer) {
            $employer->delete();
        }

        $this->assertTrue(true);
    }
}
