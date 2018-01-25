<?php
/**
 * @author Andrea Maccis <andrea.maccis@gmail.com>
 */

namespace Bideas\CsvToTei\Model;


class TitleStmt
{

    private $author;

    private $editor;

    private $meeting;

    private $respStmt;

    private $title;

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     * @return TitleStmt
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
     * @return TitleStmt
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
     * @return TitleStmt
     */
    public function setMeeting($meeting)
    {
        $this->meeting = $meeting;
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
     * @return TitleStmt
     */
    public function setRespStmt($respStmt)
    {
        $this->respStmt = $respStmt;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     * @return TitleStmt
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }



}