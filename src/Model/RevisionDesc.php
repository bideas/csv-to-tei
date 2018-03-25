<?php
/**
 * @author Andrea Maccis <andrea.maccis@gmail.com>
 */

namespace Bideas\CsvToTei\Model;


class RevisionDesc
{

    private $list;

    private $change;

    private $listChange;

    /**
     * @return mixed
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * @param mixed $list
     * @return RevisionDesc
     */
    public function setList($list)
    {
        $this->list = $list;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * @param mixed $change
     * @return RevisionDesc
     */
    public function setChange($change)
    {
        $this->change = $change;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getListChange()
    {
        return $this->listChange;
    }

    /**
     * @param mixed $listChange
     * @return RevisionDesc
     */
    public function setListChange($listChange)
    {
        $this->listChange = $listChange;
        return $this;
    }

}