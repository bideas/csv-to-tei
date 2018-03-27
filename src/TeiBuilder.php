<?php
/**
 * @author Andrea Maccis <andrea.maccis@gmail.com>
 */

namespace Bideas\CsvToTei;

use Bideas\CsvToTei\Model\Availability;
use Bideas\CsvToTei\Model\Change;
use Bideas\CsvToTei\Model\EditionStmt;
use Bideas\CsvToTei\Model\EncodingDesc;
use Bideas\CsvToTei\Model\FileDesc;
use Bideas\CsvToTei\Model\ListOfItems;
use Bideas\CsvToTei\Model\Note;
use Bideas\CsvToTei\Model\NotesStmt;
use Bideas\CsvToTei\Model\ProjectDesc;
use Bideas\CsvToTei\Model\PublicationStmt;
use Bideas\CsvToTei\Model\PubPlace;
use Bideas\CsvToTei\Model\Ref;
use Bideas\CsvToTei\Model\RespStmt;
use Bideas\CsvToTei\Model\RevisionDesc;
use Bideas\CsvToTei\Model\SourceDesc;
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
        $teiHeader->setRevisionDesc($this->fillInRevisionDesc());
        return $teiHeader;

    }

    private function fillInFileDesc()
    {

        $fileDesc = new FileDesc();
        $fileDesc->setTitleStmt($this->fillInTitleStmt());
        $fileDesc->setEditionStmt($this->fillInEditionSmtm());
        $fileDesc->setExtent('4519 headwords');
        $fileDesc->setPublicationStmt($this->fillInPublicationStmt());
        $fileDesc->setNotesStmt($this->fillInNotesStmt());
        $fileDesc->setSourceDesc($this->fillInSourceDesc());
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
        $titleStmt->setRespStmt($this->fillInRespStmt());
        $titleStmt->setTitle('Sardinian-Italian FreeDict Dictionary');
        return $titleStmt;

    }

    private function fillInRespStmt()
    {
        $respStmt = new RespStmt();
        $respStmt->setResp('Mantainer');
        $respStmt->setName('Andrea Maccis');
        return $respStmt;

    }

    private function fillInProjectDesc()
    {

        $p = [
            'This dictionary comes to you through nice people making it available for free and for good. It is part of the FreeDict project, http://www.freedict.org. This project aims to make many translating dictionaries available for free. Your contributions are welcome!'
        ];
        $projectDesc = new ProjectDesc();
        $projectDesc->setP($p);
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
        $publicationStmt->setAvailability($this->fillInAvailability());
        $publicationStmt->setPubPlace($this->fillInPubPlace());
        return $publicationStmt;

    }

    private function fillInAvailability()
    {

        $p = [
            'Copyright (C) 1999-2017 by various authors listed below.',
//            'Available under the terms of the <ref target="https://www.gnu.org/licenses/gpl-2.0.html">GNU General Public License ver. 2.0 and any later version</ref>.',
            'This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version.',
            'This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.'
        ];
        $availability = new Availability();
        $availability->setStatus('free');
        $availability->setP($p);
        return $availability;


    }

    private function fillInPubPlace()
    {

        $pubPlace = new PubPlace();
        $pubPlace->setRef($this->fillInRef());
        return $pubPlace;

    }

    private function fillInRef()
    {

        $ref = new Ref();
        $ref->setTarget('http://freedict.org/');
        $ref->setValue('http://freedict.org/');
        return $ref;

    }

    private function fillInNotesStmt()
    {

        $notesStmt = new NotesStmt();
        $notesStmt->setNote($this->fillInNote());
        return $notesStmt;

    }

    private function fillInNote()
    {

        $note = new Note();
        $note->setType('status');
        $note->setValue('too small');
        return $note;

    }

    private function fillInSourceDesc()
    {

        $p = [
//            'Home: <ptr target="http://www.bideas.org/" ',
            'This Database was generated from...'
        ];
        $sourceDesc = new SourceDesc();
        $sourceDesc->setP($p);
        return $sourceDesc;

    }

    private function fillInRevisionDesc()
    {

        $change = [
            $this->fillInChange('2018-03-25', 'Andrea Maccis', [
                'item1',
                'item2'
            ]),
            $this->fillInChange('2018-03-22', 'Andrea Maccis', [
                'asd1',
                'asd2'
            ])
        ];
        $revisionDesc = new RevisionDesc();
        $revisionDesc->setChange($change);
        return $revisionDesc;

    }

    private function fillInChange($date, $name, $list)
    {

        $change = new Change();
        $change->setWhen($date);
        $change->setDate($date);
        $change->setName($name);
        $change->setList($this->fillInList($list));
        return $change;

    }

    private function fillInList($list)
    {

        $item = [];
        foreach ($list as $it) {
            $item[] = $it;
        }
        $list = new ListOfItems();
        $list->setItem($item);
        return $list;

    }

}