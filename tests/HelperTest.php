<?php

class HelperTest extends TestCase
{
    /**
     * @var \app\ChefSteps\Helper
     */
    protected $helper;

    /**
     * setup function
     */
    public function setup()
    {
        $this->helper = new \App\ChefSteps\Helper();
    }

    /**
     * @test
     */
    public function it_will_generate_correct_number_of_emails()
    {
        $emails = $this->helper->getTestEmails(100000, 0);

        $this->assertEquals(100000, count($emails));
    }

    /**
     * @test
     */
    public function it_will_generate_unique_emails()
    {
        $emails = $this->helper->getTestEmails(10, 0);

        $this->assertEquals($emails, array_values(array_unique($emails)));
    }

    /**
     * @test
     */
    public function it_will_generate_duplicate_emails()
    {
        $emails = $this->helper->getTestEmails(10, 100);

        $this->assertEquals(1, count(array_unique($emails)));
    }

    /**
     * @test
     */
    public function it_will_generate_mix_of_unique_duplicate_emails()
    {
        $emails = $this->helper->getTestEmails(100, 50);

        $this->assertGreaterThan(10, count(array_unique($emails)));
        $this->assertLessThan(90, count(array_unique($emails)));
    }




}
