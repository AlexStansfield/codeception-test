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
        $I->wantTo('test doctrine #1');
        $I->sendPOST('app/example', ['id' => $this->entityId]);
        $I->seeResponseCodeIs(200);
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(['name' => 'Codeception Test']);
    }

    // tests
    public function trySecondTimeToTest(ApiTester $I)
    {
        $I->wantTo('test doctrine #2');
        $I->sendPOST('app/example', ['id' => $this->entityId]);
        $I->seeResponseCodeIs(200);
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(['name' => 'Codeception Test']);
    }

    // tests
    public function tryThirdTimeToTest(ApiTester $I)
    {
        $I->wantTo('test doctrine #3');
        $I->sendPOST('app/example', ['id' => $this->entityId]);
        $I->seeResponseCodeIs(200);
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(['name' => 'Codeception Test']);
    }

    // tests
    public function tryFourthTimeToTest(ApiTester $I)
    {
        $I->wantTo('test doctrine #4');
        $I->sendPOST('app/example', ['id' => $this->entityId]);
        $I->seeResponseCodeIs(200);
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(['name' => 'Codeception Test']);
    }

    // tests
    public function tryFifthTimeToTest(ApiTester $I)
    {
        $I->wantTo('test doctrine #5');
        $I->sendPOST('app/example', ['id' => $this->entityId]);
        $I->seeResponseCodeIs(200);
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(['name' => 'Codeception Test']);
    }
}