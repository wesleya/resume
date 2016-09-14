<?php
namespace App\ChefSteps;

/**
 * Class EmailList
 *
 * class to remove duplicate email address
 *
 * @package App\ChefSteps
 */
class EmailList
{
    /**
     * custom method for removing duplicate email addresses from a list
     *
     * @param array $list
     * @return array
     */
    public function removeDuplicates($list)
    {
        $result = [];
        $uniqueAddresses = [];

        foreach($list as $address)
        {
            if( empty($uniqueAddresses[$address]) )
            {
                $result[] = $address;
            }

            $uniqueAddresses[$address] = true;
        }

        return $result;
    }

    /**
     * trivial method for removing duplicates using built in php functions. for sanity check.
     *
     * @param array $list
     * @return array
     */
    public function trivialRemoveDuplicates($list)
    {
        return array_values(array_unique($list));
    }
}