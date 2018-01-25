<?php
/**
 * @author Andrea Maccis <andrea.maccis@gmail.com>
 */

namespace Bideas\CsvToTei\Model;


class FileDesc
{

    private $editionStmt;

    private $extent;

    private $notesStmt;

    private $publicationStmt;

    private $seriesStmt;

    private $sourceDesc;

    private $titleStmt;

    /**
     * @return mixed
     */
    public function getEditionStmt()
    {
        return $this->editionStmt;
    }

    /**
     * @param mixed $editionStmt
     * @return FileDesc
     */
    public function setEditionStmt($editionStmt)
    {
        $this->editionStmt = $editionStmt;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExtent()
    {
        return $this->extent;
    }

    /**
     * @param mixed $extent
     * @return FileDesc
     */
    public function setExtent($extent)
    {
        $this->extent = $extent;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNotesStmt()
    {
        return $this->notesStmt;
    }

    /**
     * @param mixed $notesStmt
     * @return FileDesc
     */
    public function setNotesStmt($notesStmt)
    {
        $this->notesStmt = $notesStmt;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPublicationStmt()
    {
        return $this->publicationStmt;
    }

    /**
     * @param mixed $publicationStmt
     * @return FileDesc
     */
    public function setPublicationStmt($publicationStmt)
    {
        $this->publicationStmt = $publicationStmt;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSeriesStmt()
    {
        return $this->seriesStmt;
    }

    /**
     * @param mixed $seriesStmt
     * @return FileDesc
     */
    public function setSeriesStmt($seriesStmt)
    {
        $this->seriesStmt = $seriesStmt;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSourceDesc()
    {
        return $this->sourceDesc;
    }

    /**
     * @param mixed $sourceDesc
     * @return FileDesc
     */
    public function setSourceDesc($sourceDesc)
    {
        $this->sourceDesc = $sourceDesc;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitleStmt()
    {
        return $this->titleStmt;
    }

    /**
     * @param mixed $titleStmt
     * @return FileDesc
     */
    public function setTitleStmt($titleStmt)
    {
        $this->titleStmt = $titleStmt;
        return $this;
    }



}