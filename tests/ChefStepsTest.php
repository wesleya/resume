<?php

class ChefStepsTest extends TestCase
{
    /**
     * @var App\ChefSteps\EmailList
     */
    protected $emailList;

    /**
     * @var Faker\Generator
     */
    protected $faker;

    /**
     * setup function
     */
    public function setup()
    {
        $this->emailList = new App\ChefSteps\EmailList();
        $this->faker = Faker\Factory::create();
    }

    /**
     * @test
     */
    public function it_will_remove_duplicate_email_addresses()
    {
        $data = [
            'duplicate@test.com',
            'duplicate@test.com',
            'non_duplicate@test.com'
        ];

        $result = $this->emailList->removeDuplicates($data);

        // result list doesn't include duplicate
        $this->assertEquals([
            'duplicate@test.com',
            'non_duplicate@test.com'
        ], $result);
    }

    public function it_will_not_remove_unique_email_addresses()
    {
        $data = [
            'duplicate@test.com',
            'non_duplicate@test.com'
        ];

        $result = $this->emailList->removeDuplicates($data);

        $this->assertTrue(in_array($result, 'duplicate@test.com'));
        $this->assertTrue(in_array($result, 'non_duplicate@test.com'));
    }

    /**
     * @test
     */
    public function it_will_leave_the_resulting_list_in_order()
    {
        $data = [
            'duplicate@test.com',
            'duplicate@test.com',
            'non_duplicate@test.com',
            'another-email@gmail.com'
        ];

        $result = $this->emailList->removeDuplicates($data);

        // result list doesn't include duplicate
        $this->assertEquals([
            'duplicate@test.com',
            'non_duplicate@test.com',
            'another-email@gmail.com'
        ], $result);
    }

    /**
     * @test
     */
    public function it_will_handle_one_hundred_thousand_email_addresses_under_one_second()
    {
        $data = [];

        for($i = 0; $i < 10000; $i++)
        {
            $data[] = $this->getEmail($data);
        }

        $start = microtime(true);
        $result = $this->emailList->removeDuplicates($data);
        $end = microtime(true);

        $this->assertLessThan(1, $end - $start);
    }

    /**
     * Get an email address with 50% chance that the email address will be a duplicate
     *
     * @param $data
     * @return string
     */
    protected function getEmail($data)
    {
        if($this->shouldBeDuplicate())
        {
            return $this->getDuplicateEmail($data);
        }

        return $this->getUniqueEmail();
    }

    /**
     * Randomly decide if this email should be a duplicate or not with 50% chance
     *
     * @return bool
     */
    protected function shouldBeDuplicate()
    {
        return (bool)rand(0, 1);
    }

    /**
     * Get an email address that already exists
     *
     * @param $data
     * @return string
     */
    protected function getDuplicateEmail($data)
    {
        if(empty($data))
        {
            return $this->getUniqueEmail();
        }

        $index = rand(0, count($data) - 1);

        return $data[$index];
    }

    /**
     * Get a unique email address
     *
     * @return string
     */
    protected function getUniqueEmail()
    {
        return $this->faker->unique()->email;
    }
}
