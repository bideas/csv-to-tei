<?php
/**
 * @author Andrea Maccis <andrea.maccis@gmail.com>
 */
namespace Bideas\CsvToTei\Model;

class TeiHeader
{

    private $fileDesc;

    private $encodingDesc;

    private $profileDesc;

    private $xenoData;

    private $revisionDesc;

    /**
     * @return mixed
     */
    public function getFileDesc()
    {
        return $this->fileDesc;
    }

    /**
     * @param mixed $fileDesc
     * @return TeiHeader
     */
    public function setFileDesc($fileDesc)
    {
        $this->fileDesc = $fileDesc;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEncodingDesc()
    {
        return $this->encodingDesc;
    }

    /**
     * @param mixed $encodingDesc
     * @return TeiHeader
     */
    public function setEncodingDesc($encodingDesc)
    {
        $this->encodingDesc = $encodingDesc;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProfileDesc()
    {
        return $this->profileDesc;
    }

    /**
     * @param mixed $profileDesc
     * @return TeiHeader
     */
    public function setProfileDesc($profileDesc)
    {
        $this->profileDesc = $profileDesc;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getXenoData()
    {
        return $this->xenoData;
    }

    /**
     * @param mixed $xenoData
     * @return TeiHeader
     */
    public function setXenoData($xenoData)
    {
        $this->xenoData = $xenoData;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRevisionDesc()
    {
        return $this->revisionDesc;
    }

    /**
     * @param mixed $revisionDesc
     * @return TeiHeader
     */
    public function setRevisionDesc($revisionDesc)
    {
        $this->revisionDesc = $revisionDesc;
        return $this;
    }




}