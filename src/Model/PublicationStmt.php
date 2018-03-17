<?php
/**
 * @author Andrea Maccis <andrea.maccis@gmail.com>
 */

namespace Bideas\CsvToTei\Model;


class PublicationStmt
{

    private $address;

    private $date;

    private $p;

    private $ptr;

    private $pubPlace;

    private $publisher;

    private $ref;

    private $authority;

    private $availability;

    private $distributor;

    private $idno;

    private $ab;

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     * @return PublicationStmt
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     * @return PublicationStmt
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getP()
    {
        return $this->p;
    }

    /**
     * @param mixed $p
     * @return PublicationStmt
     */
    public function setP($p)
    {
        $this->p = $p;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPtr()
    {
        return $this->ptr;
    }

    /**
     * @param mixed $ptr
     * @return PublicationStmt
     */
    public function setPtr($ptr)
    {
        $this->ptr = $ptr;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPubPlace()
    {
        return $this->pubPlace;
    }

    /**
     * @param mixed $pubPlace
     * @return PublicationStmt
     */
    public function setPubPlace($pubPlace)
    {
        $this->pubPlace = $pubPlace;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * @param mixed $publisher
     * @return PublicationStmt
     */
    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * @param mixed $ref
     * @return PublicationStmt
     */
    public function setRef($ref)
    {
        $this->ref = $ref;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAuthority()
    {
        return $this->authority;
    }

    /**
     * @param mixed $authority
     * @return PublicationStmt
     */
    public function setAuthority($authority)
    {
        $this->authority = $authority;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * @param mixed $availability
     * @return PublicationStmt
     */
    public function setAvailability($availability)
    {
        $this->availability = $availability;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDistributor()
    {
        return $this->distributor;
    }

    /**
     * @param mixed $distributor
     * @return PublicationStmt
     */
    public function setDistributor($distributor)
    {
        $this->distributor = $distributor;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdno()
    {
        return $this->idno;
    }

    /**
     * @param mixed $idno
     * @return PublicationStmt
     */
    public function setIdno($idno)
    {
        $this->idno = $idno;
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
     * @return PublicationStmt
     */
    public function setAb($ab)
    {
        $this->ab = $ab;
        return $this;
    }




}