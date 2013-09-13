<?php

class PeopleListingService
{
    /** @var \PeopleDAO */
    protected $dao;

    /**
     * @param \PeopleDAO $dao
     */
    public function setDao($dao)
    {
        $this->dao = $dao;
    }

    /**
     * @return array 年代別でグループ化された人のリスト
     */
    public function getGenerationGroupedList()
    {
        $group = [
            '-9' => [],
            '10-29' => [],
            '30-49' => [],
            '50-' => [],
        ];

        $all = $this->dao->getAll();

        foreach ($all as $people) {
            if ($people->age < 10) {
                $group['-9'][] = $people;
            }
            elseif ($people->age >= 10 && $people->age < 30) {
                $group['10-29'][] = $people;
            }
            elseif ($people->age >= 30 && $people->age < 50) {
                $group['30-49'][] = $people;
            }
            else {
                $group['50-'][] = $people;
            }
        }

        return $group;
    }
}

