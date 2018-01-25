<?php
/**
 * @author Andrea Maccis <andrea.maccis@gmail.com>
 */

namespace Bideas\CsvToTei\Model;


class Tei
{

    private $teiHeader;

    private $text;

    /**
     * @return TeiHeader
     */
    public function getTeiHeader()
    {
        return $this->teiHeader;
    }

    /**
     * @param TeiHeader $teiHeader
     * @return Tei
     */
    public function setTeiHeader($teiHeader)
    {
        $this->teiHeader = $teiHeader;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     * @return Tei
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }



}