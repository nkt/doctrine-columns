<?php

namespace Nkt\Column;

use Doctrine\ORM\Mapping as ORM;

/**
 * Price column
 * @author Gusakov Nikita <dev@nkt.me>
 */
trait Price
{
    /**
     * @var float
     * @ORM\Column(type="float")
     */
    protected $price;

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     *
     * @return static
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }
}
