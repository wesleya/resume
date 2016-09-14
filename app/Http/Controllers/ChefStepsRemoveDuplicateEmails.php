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
     * @const int
     */
    const DEFAULT_CHANCE = 50;

    /**
     * @const int
     */
    const DEFAULT_COUNT = 100;

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
        $count = self::DEFAULT_COUNT;
        $chance = self::DEFAULT_CHANCE;

        return view('chefsteps.index', compact('count', 'chance'));
    }

    /**
     * store
     *
     * @param Requests\ChefStepsRemoveDuplicateEmails $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store(Requests\ChefStepsRemoveDuplicateEmails $request)
    {
        $count = $request->input("count", self::DEFAULT_COUNT);
        $chance = $request->input("chance", self::DEFAULT_CHANCE);

        $inputEmails = $this->helper->getTestEmails($count, $chance);
        $filteredEmails = $this->emailList->removeDuplicates($inputEmails);

        return view('chefsteps.store', compact('count', 'chance', 'inputEmails', 'filteredEmails'));
    }
}
