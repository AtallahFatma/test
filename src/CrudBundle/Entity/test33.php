<?php

namespace CrudBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * test33
 *
 * @ORM\Table(name="test33")
 * @ORM\Entity(repositoryClass="CrudBundle\Repository\test33Repository")
 */
class test33
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100, nullable=true, unique=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="pr", type="text")
     */
    private $pr;

    /**
     * @var string
     *
     * @ORM\Column(name="fdskfkd", type="text")
     */
    private $fdskfkd;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return test33
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set pr
     *
     * @param string $pr
     *
     * @return test33
     */
    public function setPr($pr)
    {
        $this->pr = $pr;

        return $this;
    }

    /**
     * Get pr
     *
     * @return string
     */
    public function getPr()
    {
        return $this->pr;
    }

    /**
     * Set fdskfkd
     *
     * @param string $fdskfkd
     *
     * @return test33
     */
    public function setFdskfkd($fdskfkd)
    {
        $this->fdskfkd = $fdskfkd;

        return $this;
    }

    /**
     * Get fdskfkd
     *
     * @return string
     */
    public function getFdskfkd()
    {
        return $this->fdskfkd;
    }
}

