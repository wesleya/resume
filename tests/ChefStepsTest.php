<?php

class ChefStepsTest extends TestCase
{
    /**
     * @var App\ChefSteps\EmailList
     */
    protected $emailList;

    /**
     * @var \app\ChefSteps\Helper
     */
    protected $helper;

    /**
     * setup function
     */
    public function setup()
    {
        $this->emailList = new App\ChefSteps\EmailList();
        $this->helper = App\ChefSteps\Helper::create();
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
        $data = $this->helper->getTestEmails(100000);

        $start = microtime(true);
        $result = $this->emailList->removeDuplicates($data);
        $end = microtime(true);

        $this->assertLessThan(1, $end - $start);
    }


}
