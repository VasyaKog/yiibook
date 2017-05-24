<?php
namespace Step\Acceptance;

class CRMUserSteps extends \AcceptanceTester
{
    function seeIAmInListCustomersUi()
    {
        $I = $this;
        $I->seeCurrentUrlMatches('/customers/');
    }

    function amInQueryCostumerUi()
    {
        $I = $this;
        $I->amOnPage('/customer/query');
    }

    function fillInPhoneFieldWithDataFrom($customer_data)
    {
        $I = $this;
        $I->fillField('PhoneRecord[number]',
            $customer_data['PhoneRecord[number']);
    }

    function clickSeacrhButton()
    {
        $I = $this;
        $I->click('Search');
    }

    function seeCustomerInList($customer_data)
    {
        $I = $this;
        $I->see($customer_data['CustomerRecord[name]'], '#search-results');
    }

    function dontSeeCustomerInList($customer_data)
    {
        $I = $this;
        $I->dontSee($customer_data['CustomerRecord[name]'], '#search-results');

    }
}