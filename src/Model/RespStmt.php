<?php
/**
 * @author Andrea Maccis <andrea.maccis@gmail.com>
 */

namespace Bideas\CsvToTei\Model;


class RespStmt
{

    private $resp;

    private $name;

    /**
     * @return mixed
     */
    public function getResp()
    {
        return $this->resp;
    }

    /**
     * @param mixed $resp
     * @return RespStmt
     */
    public function setResp($resp)
    {
        $this->resp = $resp;
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
     * @return RespStmt
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }


}