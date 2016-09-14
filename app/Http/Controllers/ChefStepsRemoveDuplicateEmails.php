<?php

namespace App\Http\Controllers;

use App\ChefSteps\EmailList;
use App\ChefSteps\Helper;

use App\Http\Requests;

class ChefStepsRemoveDuplicateEmails extends Controller
{
    /**
     * @var Helper
     */
    protected $helper;

    /**
     * @var EmailList
     */
    protected $emailList;

    /**
     * ChefStepsRemoveDuplicateEmails constructor.
     */
    public function __construct()
    {
        $this->helper = new Helper();
        $this->emailList = new EmailList();
    }

    /**
     * index
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $inputEmails = $this->helper->getTestEmails(100, 50);
        $filteredEmails = $this->emailList->removeDuplicates($inputEmails);

        $templateVars = [
            'inputEmails' => $inputEmails,
            'filteredEmails' => $filteredEmails
        ];

        return view('chefsteps.index', $templateVars);
    }
}
