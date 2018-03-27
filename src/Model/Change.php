<?php
/**
 * @author Andrea Maccis <andrea.maccis@gmail.com>
 */

namespace Bideas\CsvToTei\Model;


class Change
{

    private $when;

    private $date;

    private $name;

    private $list;

    /**
     * @return mixed
     */
    public function getWhen()
    {
        return $this->when;
    }

    /**
     * @param mixed $when
     * @return Change
     */
    public function setWhen($when)
    {
        $this->when = $when;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     * @return Change
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Change
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * @param mixed $list
     * @return Change
     */
    public function setList($list)
    {
        $this->list = $list;
        return $this;
    }

}