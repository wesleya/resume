<?php
namespace App\ChefSteps;

use Faker\Factory;
use Faker\Generator;

class Helper
{
    /**
     * @var Generator
     */
    protected $faker;

    /**
     * Factory
     *
     * @return Helper
     */
    public static function create()
    {
        return new Helper();
    }

    /**
     * Helper constructor.
     */
    public function __construct()
    {
        $this->faker = Factory::create();
    }

    /**
     * get $count number of test emails with 50% duplicates
     *
     * @param $count
     * @return array
     */
    public function getTestEmails($count)
    {
        $data = [];

        for($i = 0; $i < $count; $i++)
        {
            $data[] = $this->getEmail($data);
        }

        shuffle($data);

        return $data;
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