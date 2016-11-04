<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invoice
 *
 * @ORM\Table(name="invoice")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\InvoiceRepository")
 */
class Invoice
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Client")
     */
    private $idClient;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lastUpdateMysql", type="datetimetz")
     */
    private $lastUpdateMysql;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idClient
     *
     * @param integer $idClient
     *
     * @return Invoice
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;

        return $this;
    }

    /**
     * Get idClient
     *
     * @return int
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * Set lastUpdateMysql
     *
     * @param \DateTime $lastUpdateMysql
     *
     * @return Invoice
     */
    public function setLastUpdateMysql($lastUpdateMysql)
    {
        $this->lastUpdateMysql = $lastUpdateMysql;

        return $this;
    }

    /**
     * Get lastUpdateMysql
     *
     * @return \DateTime
     */
    public function getLastUpdateMysql()
    {
        return $this->lastUpdateMysql;
    }
}
