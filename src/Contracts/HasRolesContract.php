<?php

namespace TempestTools\Moat\Contracts;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @link    https://github.com/tempestwf
 * @author  William Tempest Wright Ferrer <https://github.com/tempestwf>
 */
interface HasRolesContract
{
    /**
     * @return ArrayCollection|RoleContract[]
     */
    public function getRoles();
}
