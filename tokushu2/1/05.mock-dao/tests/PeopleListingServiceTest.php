<?php

class PeopleListingServiceTest extends PHPUnit_Framework_TestCase
{
    public function testGenerationList()
    {
        $service = new PeopleListingService();
        $dao = $this->getMock('PeopleDAO');
        // getAllメソッドが少なくとも1回は呼び出される
        $dao->expects($this->atLeastOnce())
            ->method('getAll')
            ->with()
            ->will($this->returnValue([
                new Person("Jack", 30, Person::GENDER_MALE),
                new Person("Hanako", 8, Person::GENDER_FEMALE),
            ]));
        $service->setDao($dao);
        $actual = $service->getGenerationGroupedList();

        // グループに分けられているか
        $this->assertCount(1, $actual['-9']);
        $this->assertCount(0, $actual['10-29']);
        $this->assertCount(1, $actual['30-49']);
        $this->assertCount(0, $actual['50-']);
    }
}

