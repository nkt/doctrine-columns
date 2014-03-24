<?php

namespace Nkt\Column;

use Doctrine\ORM\Mapping as ORM;

/**
 * Date column
 * @author Gusakov Nikita <dev@nkt.me>
 */
trait Date
{
    /**
     * @var \DateTime
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    protected $date;

    /**
     * @param \DateTime $date
     *
     * @return static
     */
    public function setDate(\DateTime $date = null)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }
}
