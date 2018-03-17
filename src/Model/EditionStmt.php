<?php
/**
 * @author Andrea Maccis <andrea.maccis@gmail.com>
 */

namespace Bideas\CsvToTei\Model;


class EditionStmt
{

    /**
     * @var
     */
    private $author;

    /**
     * @var
     */
    private $editor;

    /**
     * @var
     */
    private $meeting;

    /**
     * @var
     */
    private $p;

    /**
     * @var
     */
    private $respStmt;

    /**
     * @var
     */
    private $edition;

    /**
     * @var
     */
    private $funder;

    /**
     * @var
     */
    private $principal;

    /**
     * @var
     */
    private $sponsor;

    /**
     * @var
     */
    private $ab;


    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     * @return EditionStmt
     */
    public function setAuthor($author)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEditor()
    {
        return $this->editor;
    }

    /**
     * @param mixed $editor
     * @return EditionStmt
     */
    public function setEditor($editor)
    {
        $this->editor = $editor;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMeeting()
    {
        return $this->meeting;
    }

    /**
     * @param mixed $meeting
     * @return EditionStmt
     */
    public function setMeeting($meeting)
    {
        $this->meeting = $meeting;
        return $this;
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
     * @return EditionStmt
     */
    public function setP($p)
    {
        $this->p = $p;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRespStmt()
    {
        return $this->respStmt;
    }

    /**
     * @param mixed $respStmt
     * @return EditionStmt
     */
    public function setRespStmt($respStmt)
    {
        $this->respStmt = $respStmt;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEdition()
    {
        return $this->edition;
    }

    /**
     * @param mixed $edition
     * @return EditionStmt
     */
    public function setEdition($edition)
    {
        $this->edition = $edition;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFunder()
    {
        return $this->funder;
    }

    /**
     * @param mixed $funder
     * @return EditionStmt
     */
    public function setFunder($funder)
    {
        $this->funder = $funder;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrincipal()
    {
        return $this->principal;
    }

    /**
     * @param mixed $principal
     * @return EditionStmt
     */
    public function setPrincipal($principal)
    {
        $this->principal = $principal;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSponsor()
    {
        return $this->sponsor;
    }

    /**
     * @param mixed $sponsor
     * @return EditionStmt
     */
    public function setSponsor($sponsor)
    {
        $this->sponsor = $sponsor;
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
     * @return EditionStmt
     */
    public function setAb($ab)
    {
        $this->ab = $ab;
        return $this;
    }

}