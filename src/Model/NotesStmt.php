<?php
/**
 * @author Andrea Maccis <andrea.maccis@gmail.com>
 */

namespace Bideas\CsvToTei\Model;


class NotesStmt
{

    private $note;

    private $relatedItem;

    private $witDetail;

    /**
     * @return mixed
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param mixed $note
     * @return NotesStmt
     */
    public function setNote($note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRelatedItem()
    {
        return $this->relatedItem;
    }

    /**
     * @param mixed $relatedItem
     * @return NotesStmt
     */
    public function setRelatedItem($relatedItem)
    {
        $this->relatedItem = $relatedItem;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWitDetail()
    {
        return $this->witDetail;
    }

    /**
     * @param mixed $witDetail
     * @return NotesStmt
     */
    public function setWitDetail($witDetail)
    {
        $this->witDetail = $witDetail;
        return $this;
    }

}