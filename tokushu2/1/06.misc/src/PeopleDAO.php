<?php
class PeopleDAO
{
    /** @var mixed データベースの実体は未定 */
    protected $db;

    /**
     * @return Person[]
     */
    public function getAll()
    {
        return [new Person("a")]; // 未実装
    }
}

