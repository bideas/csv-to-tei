<?php
/**
 * @author Andrea Maccis <andrea.maccis@gmail.com>
 */

namespace Bideas\CsvToTei;

use Bideas\CsvToTei\Model\EditionStmt;
use Bideas\CsvToTei\Model\EncodingDesc;
use Bideas\CsvToTei\Model\FileDesc;
use Bideas\CsvToTei\Model\ProjectDesc;
use Bideas\CsvToTei\Model\PublicationStmt;
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
        $fileDesc->setEditionStmt($this->fillInEditionSmtm());
        $fileDesc->setExtent('4519 headwords');
        $fileDesc->setPublicationStmt($this->fillInPublicationStmt());
        return $fileDesc;

    }

    private function fillInEncodingDesc()
    {

        $encodingDesc = new EncodingDesc();
        $encodingDesc->setProjectDesc($this->fillInProjectDesc());
        return $encodingDesc;

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

    private function fillInProjectDesc()
    {

        $projectDesc = new ProjectDesc();
        $projectDesc->setP('This dictionary comes to you through nice people making it available for free and for good. It is part of the FreeDict project, http://www.freedict.org. This project aims to make many translating dictionaries available for free. Your contributions are welcome!');
        return $projectDesc;

    }

    private function fillInEditionSmtm()
    {

        $editionStmt = new EditionStmt();
        $editionStmt->setEdition('0.1.0');
        return $editionStmt;

    }

    private function fillInPublicationStmt()
    {

        $publicationStmt = new PublicationStmt();
        $publicationStmt->setPublisher('FreeDict');
        return $publicationStmt;

    }

}