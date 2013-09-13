<?php
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints;

class Person
{
    const GENDER_MALE = 1;
    const GENDER_FEMALE = 2;

    public $name;
    public $age;
    public $gender;

    /** @var \Symfony\Component\Validator\Validator */
    protected $validator;

    static public function loadValidatorMetadata(ClassMetadata $metadata)
    {
        // 名前は空ではない
        $metadata->addPropertyConstraint('name', new Constraints\NotBlank());
        // 年齢は整数で0～150の間
        $metadata->addPropertyConstraint('age', new Constraints\Type('integer'));
        $metadata->addPropertyConstraint('age', new Constraints\Range([
            'min'=>0, 'max'=>150
        ]));
        // 性別は男か女
        $metadata->addPropertyConstraint('gender', new Constraints\Choice([
            self::GENDER_MALE, self::GENDER_FEMALE
        ]));

    }

    public function setValidator($validator)
    {
        $this->validator = $validator;
    }

    public function isValid()
    {
        $errors = $this->validator->validate($this);
        return count($errors) == 0;
    }
}

