<?php
/**
 * @author Andrea Maccis <andrea.maccis@gmail.com>
 */

namespace Bideas\CsvToTei\Model;


class SourceDesc
{

    private $bibl;

    private $biblStruct;

    private $list;

    private $listBibl;

    private $p;

    private $table;

    private $biblFull;

    private $ab;

    private $msDesc;

    private $listEvent;

    private $listNym;

    private $listOrg;

    private $listPerson;

    private $listPlace;

    private $listRelation;

    private $recordingStmt;

    private $scriptStmt;

    private $listApp;

    private $listWit;

    /**
     * @return mixed
     */
    public function getBibl()
    {
        return $this->bibl;
    }

    /**
     * @param mixed $bibl
     */
    public function setBibl($bibl)
    {
        $this->bibl = $bibl;
    }

    /**
     * @return mixed
     */
    public function getBiblStruct()
    {
        return $this->biblStruct;
    }

    /**
     * @param mixed $biblStruct
     */
    public function setBiblStruct($biblStruct)
    {
        $this->biblStruct = $biblStruct;
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
     */
    public function setList($list)
    {
        $this->list = $list;
    }

    /**
     * @return mixed
     */
    public function getListBibl()
    {
        return $this->listBibl;
    }

    /**
     * @param mixed $listBibl
     */
    public function setListBibl($listBibl)
    {
        $this->listBibl = $listBibl;
    }

    /**
     * @return mixed
     */
    public function getP()
    {
        return $this->p;
    }

    /**
     * @param mixed $p
     */
    public function setP($p)
    {
        $this->p = $p;
    }

    /**
     * @return mixed
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * @param mixed $table
     */
    public function setTable($table)
    {
        $this->table = $table;
    }

    /**
     * @return mixed
     */
    public function getBiblFull()
    {
        return $this->biblFull;
    }

    /**
     * @param mixed $biblFull
     */
    public function setBiblFull($biblFull)
    {
        $this->biblFull = $biblFull;
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
     */
    public function setAb($ab)
    {
        $this->ab = $ab;
    }

    /**
     * @return mixed
     */
    public function getMsDesc()
    {
        return $this->msDesc;
    }

    /**
     * @param mixed $msDesc
     */
    public function setMsDesc($msDesc)
    {
        $this->msDesc = $msDesc;
    }

    /**
     * @return mixed
     */
    public function getListEvent()
    {
        return $this->listEvent;
    }

    /**
     * @param mixed $listEvent
     */
    public function setListEvent($listEvent)
    {
        $this->listEvent = $listEvent;
    }

    /**
     * @return mixed
     */
    public function getListNym()
    {
        return $this->listNym;
    }

    /**
     * @param mixed $listNym
     */
    public function setListNym($listNym)
    {
        $this->listNym = $listNym;
    }

    /**
     * @return mixed
     */
    public function getListOrg()
    {
        return $this->listOrg;
    }

    /**
     * @param mixed $listOrg
     */
    public function setListOrg($listOrg)
    {
        $this->listOrg = $listOrg;
    }

    /**
     * @return mixed
     */
    public function getListPerson()
    {
        return $this->listPerson;
    }

    /**
     * @param mixed $listPerson
     */
    public function setListPerson($listPerson)
    {
        $this->listPerson = $listPerson;
    }

    /**
     * @return mixed
     */
    public function getListPlace()
    {
        return $this->listPlace;
    }

    /**
     * @param mixed $listPlace
     */
    public function setListPlace($listPlace)
    {
        $this->listPlace = $listPlace;
    }

    /**
     * @return mixed
     */
    public function getListRelation()
    {
        return $this->listRelation;
    }

    /**
     * @param mixed $listRelation
     */
    public function setListRelation($listRelation)
    {
        $this->listRelation = $listRelation;
    }

    /**
     * @return mixed
     */
    public function getRecordingStmt()
    {
        return $this->recordingStmt;
    }

    /**
     * @param mixed $recordingStmt
     */
    public function setRecordingStmt($recordingStmt)
    {
        $this->recordingStmt = $recordingStmt;
    }

    /**
     * @return mixed
     */
    public function getScriptStmt()
    {
        return $this->scriptStmt;
    }

    /**
     * @param mixed $scriptStmt
     */
    public function setScriptStmt($scriptStmt)
    {
        $this->scriptStmt = $scriptStmt;
    }

    /**
     * @return mixed
     */
    public function getListApp()
    {
        return $this->listApp;
    }

    /**
     * @param mixed $listApp
     */
    public function setListApp($listApp)
    {
        $this->listApp = $listApp;
    }

    /**
     * @return mixed
     */
    public function getListWit()
    {
        return $this->listWit;
    }

    /**
     * @param mixed $listWit
     */
    public function setListWit($listWit)
    {
        $this->listWit = $listWit;
    }

}