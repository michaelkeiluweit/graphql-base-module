<?php declare(strict_types=1);

/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */

namespace OxidEsales\GraphQl\Exception;

use GraphQL\Error\ClientAware;

class MissingPermissionException extends \Exception implements ClientAware, HttpErrorInterface
{
    public function getHttpStatus()
    {
        return 403;
    }

    public function isClientSafe()
    {
        return true;
    }

    public function getCategory()
    {
        return ErrorCategories::PERMISSIONERRORS;
    }

}
