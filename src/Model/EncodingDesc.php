<?php
/**
 * @author Andrea Maccis <andrea.maccis@gmail.com>
 */

namespace Bideas\CsvToTei\Model;


class EncodingDesc
{

    private $p;

    private $charDecl;

    private $appInfo;

    private $classDecl;

    private $editorialDecl;

    private $geoDecl;

    private $listPrefixDef;

    private $projectDesc;

    private $refsDecl;

    private $samplingDecl;

    private $schemaRef;

    private $styleDefDecl;

    private $tagsDecl;

    private $fsdDecl;

    private $ab;

    private $transcriptionDesc;

    private $schemaSpec;

    private $variantEncoding;

    private $metDecl;

    /**
     * @return mixed
     */
    public function getP()
    {
        return $this->p;
    }

    /**
     * @param mixed $p
     * @return EncodingDesc
     */
    public function setP($p)
    {
        $this->p = $p;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCharDecl()
    {
        return $this->charDecl;
    }

    /**
     * @param mixed $charDecl
     * @return EncodingDesc
     */
    public function setCharDecl($charDecl)
    {
        $this->charDecl = $charDecl;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAppInfo()
    {
        return $this->appInfo;
    }

    /**
     * @param mixed $appInfo
     * @return EncodingDesc
     */
    public function setAppInfo($appInfo)
    {
        $this->appInfo = $appInfo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getClassDecl()
    {
        return $this->classDecl;
    }

    /**
     * @param mixed $classDecl
     * @return EncodingDesc
     */
    public function setClassDecl($classDecl)
    {
        $this->classDecl = $classDecl;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEditorialDecl()
    {
        return $this->editorialDecl;
    }

    /**
     * @param mixed $editorialDecl
     * @return EncodingDesc
     */
    public function setEditorialDecl($editorialDecl)
    {
        $this->editorialDecl = $editorialDecl;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGeoDecl()
    {
        return $this->geoDecl;
    }

    /**
     * @param mixed $geoDecl
     * @return EncodingDesc
     */
    public function setGeoDecl($geoDecl)
    {
        $this->geoDecl = $geoDecl;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getListPrefixDef()
    {
        return $this->listPrefixDef;
    }

    /**
     * @param mixed $listPrefixDef
     * @return EncodingDesc
     */
    public function setListPrefixDef($listPrefixDef)
    {
        $this->listPrefixDef = $listPrefixDef;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProjectDesc()
    {
        return $this->projectDesc;
    }

    /**
     * @param mixed $projectDesc
     * @return EncodingDesc
     */
    public function setProjectDesc($projectDesc)
    {
        $this->projectDesc = $projectDesc;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRefsDecl()
    {
        return $this->refsDecl;
    }

    /**
     * @param mixed $refsDecl
     * @return EncodingDesc
     */
    public function setRefsDecl($refsDecl)
    {
        $this->refsDecl = $refsDecl;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSamplingDecl()
    {
        return $this->samplingDecl;
    }

    /**
     * @param mixed $samplingDecl
     * @return EncodingDesc
     */
    public function setSamplingDecl($samplingDecl)
    {
        $this->samplingDecl = $samplingDecl;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSchemaRef()
    {
        return $this->schemaRef;
    }

    /**
     * @param mixed $schemaRef
     * @return EncodingDesc
     */
    public function setSchemaRef($schemaRef)
    {
        $this->schemaRef = $schemaRef;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStyleDefDecl()
    {
        return $this->styleDefDecl;
    }

    /**
     * @param mixed $styleDefDecl
     * @return EncodingDesc
     */
    public function setStyleDefDecl($styleDefDecl)
    {
        $this->styleDefDecl = $styleDefDecl;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTagsDecl()
    {
        return $this->tagsDecl;
    }

    /**
     * @param mixed $tagsDecl
     * @return EncodingDesc
     */
    public function setTagsDecl($tagsDecl)
    {
        $this->tagsDecl = $tagsDecl;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFsdDecl()
    {
        return $this->fsdDecl;
    }

    /**
     * @param mixed $fsdDecl
     * @return EncodingDesc
     */
    public function setFsdDecl($fsdDecl)
    {
        $this->fsdDecl = $fsdDecl;
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
     * @return EncodingDesc
     */
    public function setAb($ab)
    {
        $this->ab = $ab;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTranscriptionDesc()
    {
        return $this->transcriptionDesc;
    }

    /**
     * @param mixed $transcriptionDesc
     * @return EncodingDesc
     */
    public function setTranscriptionDesc($transcriptionDesc)
    {
        $this->transcriptionDesc = $transcriptionDesc;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSchemaSpec()
    {
        return $this->schemaSpec;
    }

    /**
     * @param mixed $schemaSpec
     * @return EncodingDesc
     */
    public function setSchemaSpec($schemaSpec)
    {
        $this->schemaSpec = $schemaSpec;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVariantEncoding()
    {
        return $this->variantEncoding;
    }

    /**
     * @param mixed $variantEncoding
     * @return EncodingDesc
     */
    public function setVariantEncoding($variantEncoding)
    {
        $this->variantEncoding = $variantEncoding;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMetDecl()
    {
        return $this->metDecl;
    }

    /**
     * @param mixed $metDecl
     * @return EncodingDesc
     */
    public function setMetDecl($metDecl)
    {
        $this->metDecl = $metDecl;
        return $this;
    }

}