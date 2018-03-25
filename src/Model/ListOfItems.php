<?php
/**
 * @author Andrea Maccis <andrea.maccis@gmail.com>
 */

namespace Bideas\CsvToTei\Model;


class ListOfItems
{

    private $item;

    /**
     * @return mixed
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param mixed $item
     * @return ListOfItems
     */
    public function setItem($item)
    {
        $this->item = $item;
        return $this;
    }

}