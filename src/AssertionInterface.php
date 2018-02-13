<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2018 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\Permissions\Rbac;

interface AssertionInterface
{
    /**
     * Assertion method - must return a boolean.
     *
     * @param  Rbac $rbac
     * @param  string $permission
     * @param  RoleInterface $role
     * @return bool
     */
    public function assert(Rbac $rbac, string $permission = null, RoleInterface $role = null);
}
