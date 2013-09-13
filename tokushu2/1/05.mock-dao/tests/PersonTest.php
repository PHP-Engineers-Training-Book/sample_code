<?php

class PersonTest extends PHPUnit_Framework_TestCase
{
    /** @var \Silex\Application */
    protected $app;

    protected function setUp()
    {
        $this->app = require __DIR__ . '/../src/app.php';
    }

    public function testIsValid()
    {
        $person = new Person();
        $person->name = "Jack";
        $person->age = 30;
        $person->gender = Person::GENDER_MALE;
        $person->setValidator($this->app['validator']);
        $this->assertTrue($person->isValid());
    }

    public function testIsInvalidBlankName()
    {
        $person = new Person();
        $person->name = ""; // 名前が空
        $person->age = 20;
        $person->gender = Person::GENDER_MALE;
        $person->setValidator($this->app['validator']);
        $this->assertFalse($person->isValid());
    }

    public function testIsInvalidAge()
    {
        $person = new Person();
        $person->name = "Jack";
        $person->age = "SECRET"; // 年齢がおかしい
        $person->gender = Person::GENDER_MALE;
        $person->setValidator($this->app['validator']);
        $this->assertFalse($person->isValid());
    }

    public function testIsInvalidNegativeAge()
    {
        $person = new Person();
        $person->name = "Jack";
        $person->age = -1; // 年齢がおかしい
        $person->gender = Person::GENDER_MALE;
        $person->setValidator($this->app['validator']);

        $person->age = 2000; // 年齢がおかしい
        $this->assertFalse($person->isValid());
    }

    public function testIsInvalidGender()
    {
        $person = new Person();
        $person->name = "Jack";
        $person->age = 30;
        $person->gender = -1; // 性別がおかしい
        $person->setValidator($this->app['validator']);
        $this->assertFalse($person->isValid());
    }
}

