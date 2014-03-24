<?php

namespace Nkt\Column;

use Doctrine\ORM\Mapping as ORM;

/**
 * CreatedDate column
 * @author Gusakov Nikita <dev@nkt.me>
 */
trait CreatedDate
{
    /**
     * @var \DateTime
     * @ORM\Column(name="created_date", type="datetime")
     */
    protected $createdDate;

    /**
     * @param \DateTime $createdDate
     *
     * @return static
     */
    public function setCreatedDate(\DateTime $createdDate)
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }
}
