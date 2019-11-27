<?php
/**
 * Julien Rajerison <julienrajerison5@gmail.com>.
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait SekolikoEtablissementTrait.
 */
trait SekolikoEtablissementTrait
{
    /**
     * @var string|null
     *
     * @ORM\Column(type="string",nullable=true)
     */
    private $etsName;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string",nullable=true)
     */
    private $etsLogo;

    /**
     * @return string|null
     */
    public function getEtsName(): ?string
    {
        return $this->etsName;
    }

    /**
     * @param string|null $etsName
     *
     * @return self
     */
    public function setEtsName(?string $etsName): self
    {
        $this->etsName = $etsName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEtsLogo(): ?string
    {
        return $this->etsLogo;
    }

    /**
     * @param string|null $etsLogo
     *
     * @return self
     */
    public function setEtsLogo(?string $etsLogo): self
    {
        $this->etsLogo = $etsLogo;

        return $this;
    }
}
