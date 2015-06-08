<?php
//use ApiTester;

class EntityCest
{
    private $entityId;

    public function _before(ApiTester $I)
    {
        $this->entityId = $I->haveInRepository('AppBundle\Entity\Codeception', ['name' => 'Codeception Test']);
    }

    public function _after(ApiTester $I)
    {
    }

    // tests
    public function tryToTest(ApiTester $I)
    {
        $I->wantTo('test doctrine');
        $I->sendPOST('app/example', ['id' => $this->entityId]);
        $I->seeResponseCodeIs(200);
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(['name' => 'Codeception Test']);
    }

    // tests
    public function tryAgainToTest(ApiTester $I)
    {
        $I->wantTo('test doctrine again');
        $I->sendPOST('app/example', ['id' => $this->entityId]);
        $I->seeResponseCodeIs(200);
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(['name' => 'Codeception Test']);
    }
}