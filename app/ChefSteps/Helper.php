<?php
namespace App\ChefSteps;

use Faker\Factory;
use Faker\Generator;

/**
 * Class Helper
 *
 * Just a class to generate list of email addresses to help test email duplicate remover
 *
 * @package App\ChefSteps
 */
class Helper
{
    /**
     * @var Generator
     */
    protected $faker;

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
     * @param int $count number of emails to generate
     * @param int $chanceOfDuplicate percent chance that generated email is a duplicate
     * @return array
     */
    public function getTestEmails($count, $chanceOfDuplicate)
    {
        $data = [];

        for($i = 0; $i < $count; $i++)
        {
            $data[] = $this->getEmail($data, $chanceOfDuplicate);
        }

        shuffle($data);

        return $data;
    }

    /**
     * Get an email address with 50% chance that the email address will be a duplicate
     *
     * @param array $data
     * @param int $chanceOfDuplicate
     * @return string
     */
    protected function getEmail($data, $chanceOfDuplicate)
    {
        if($this->shouldBeDuplicate($chanceOfDuplicate))
        {
            return $this->getDuplicateEmail($data);
        }

        return $this->getUniqueEmail();
    }

    /**
     * Randomly decide if this email should be a duplicate or not with 50% chance
     *
     * @param int $chanceOfDuplicate percent chance that this should be duplicate
     * @return bool
     */
    protected function shouldBeDuplicate($chanceOfDuplicate)
    {
        $number = rand(0, 100);

        return $number < $chanceOfDuplicate;
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