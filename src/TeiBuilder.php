<?php
/**
 * @author Andrea Maccis <andrea.maccis@gmail.com>
 */

namespace Bideas\CsvToTei;

use Bideas\CsvToTei\Model\FileDesc;
use Bideas\CsvToTei\Model\RespStmt;
use Bideas\CsvToTei\Model\Tei;
use Bideas\CsvToTei\Model\TeiHeader;
use Bideas\CsvToTei\Model\TitleStmt;

class TeiBuilder
{

    private $data;

    public function __construct()
    {

        $tei = new Tei();
        $tei->setTeiHeader($this->fillInTeiHeader());

        $this->data = $tei;

    }

    public function getData()
    {

        return $this->data;

    }

    private function fillInTeiHeader()
    {

        $teiHeader = new TeiHeader();
        $teiHeader->setFileDesc($this->fillInFileDesc());
        $teiHeader->setEncodingDesc($this->fillInEncodingDesc());
        return $teiHeader;

    }

    private function fillInFileDesc()
    {

        $fileDesc = new FileDesc();
        $fileDesc->setTitleStmt($this->fillInTitleStmt());
        return $fileDesc;

    }

    private function fillInEncodingDesc()
    {

    }

    private function fillInTitleStmt()
    {

        $titleStmt = new TitleStmt();
        $titleStmt->setTitle('Title');
        $titleStmt->setRespStmt($this->fillInRespStmt());
        return $titleStmt;

    }

    private function fillInRespStmt()
    {
        $respStmt = new RespStmt();
        $respStmt->setResp('RESP');
        $respStmt->setName('NAME');
        return $respStmt;

    }


}