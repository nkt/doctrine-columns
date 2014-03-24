<?php

namespace Nkt\Column;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enabled column
 * @author Gusakov Nikita <dev@nkt.me>
 */
trait Enabled
{
    /**
     * @var boolean
     * @ORM\Column(type="boolean")
     */
    protected $enabled = true;

    /**
     * @param boolean $enabled
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    }

    /**
     * @return bool
     */
    public function isEnabled()
    {
        return $this->enabled;
    }
}
