<?php

namespace Nkt\Column;

use Doctrine\ORM\Mapping as ORM;

/**
 * Name column
 * @author Gusakov Nikita <dev@nkt.me>
 */
trait Name
{
    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return static
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @see getName
     * @return string
     */
    public function __toString()
    {
        return (string)$this->getName();
    }
}
