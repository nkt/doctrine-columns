<?php

namespace Nkt\Column;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description column
 * @author Gusakov Nikita <dev@nkt.me>
 */
trait Description
{
    /**
     * @var string
     * @ORM\Column(type="text", nullable=true)
     */
    protected $description;

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return static
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}
