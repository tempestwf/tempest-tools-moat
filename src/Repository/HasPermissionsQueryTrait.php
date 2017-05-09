<?php

namespace TempestTools\AclMiddleware\Repository;

use TempestTools\AclMiddleware\Contracts\HasId;
use TempestTools\AclMiddleware\Helper\HasPermissionsQueryHelper;


trait HasPermissionsQueryTrait
{
    /**
     * A method that checks if the current entity the trait is applied to has permissions that match the names passed
     *
     * @param HasId $entity
     * @param  array $names
     * @param  bool $requireAll
     * @return bool
     * @throws \RuntimeException
     */
    public function hasPermissionTo(HasId $entity, $names, $requireAll = false) : bool
    {
       $hasPermissionsQueryHelp = new HasPermissionsQueryHelper($this);
       return $hasPermissionsQueryHelp->hasPermissionTo($entity, $names, $requireAll);
    }


}
