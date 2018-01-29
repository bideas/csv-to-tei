<?php
/**
 * @author Andrea Maccis <andrea.maccis@gmail.com>
 */

namespace Bideas\CsvToTei\Model;


class ProjectDesc
{

    private $p;

    private $ab;

    /**
     * @return mixed
     */
    public function getP()
    {
        return $this->p;
    }

    /**
     * @param mixed $p
     * @return ProjectDesc
     */
    public function setP($p)
    {
        $this->p = $p;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAb()
    {
        return $this->ab;
    }

    /**
     * @param mixed $ab
     * @return ProjectDesc
     */
    public function setAb($ab)
    {
        $this->ab = $ab;
        return $this;
    }

}