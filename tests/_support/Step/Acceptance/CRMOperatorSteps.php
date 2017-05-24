<?php
namespace Step\Acceptance;

class CRMOperatorSteps extends \AcceptanceTester
{
    public function amInAddCustomerUi()
    {
        $I = $this;
        $I->amOnPage('/customers/add');
    }

    public function imagineCustomer()
    {
        $faker = \Faker\Factory::create();
        return [
            'CostumerRecord[name]' => $faker->name,
            'CostumerRecord[birth_date]' => $faker->date('Y-m-d'),
            'CostumerRecord[notes]' => $faker->sentence(8),
            'PhoneRecord[number]' => $faker->phoneNumber
        ];
    }

    function fillCostumerDataForm($fieldsData)
    {
        $I = $this;
        foreach ($fieldsData as $key => $value) {
            $I->fillField($key, $value);
        }
    }

    function submitCustomerDataForm()
    {
        $I = $this;
        $I->click('Submit');
    }

    function seeIAmInListCustomersUi()
    {
        $I = $this;
        $I->seeCurrentUrlMatches('/customers/');
    }

    function amInListCustomersUi()
    {
        $I = $this;
        $I->amOnPage('/customers');
    }
}