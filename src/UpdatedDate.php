<?php

namespace Nkt\Column;

use Doctrine\ORM\Mapping as ORM;

/**
 * UpdatedDate column
 * @author Gusakov Nikita <dev@nkt.me>
 */
trait UpdatedDate
{
    /**
     * @var \DateTime
     * @ORM\Column(name="updated_date", type="datetime")
     */
    protected $updatedDate;

    /**
     * @param \DateTime $updatedDate
     *
     * @return static
     */
    public function setUpdatedDate(\DateTime $updatedDate)
    {
        $this->updatedDate = $updatedDate;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedDate()
    {
        return $this->updatedDate;
    }
}
