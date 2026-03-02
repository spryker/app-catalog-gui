<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\AppCatalogGui\Communication;

use Spryker\Zed\AppCatalogGui\AppCatalogGuiDependencyProvider;
use Spryker\Zed\AppCatalogGui\Communication\Mapper\OauthClientResponseTransferToResponseDataMapper;
use Spryker\Zed\AppCatalogGui\Communication\Mapper\OauthClientResponseTransferToResponseDataMapperInterface;
use Spryker\Zed\AppCatalogGui\Dependency\Facade\AppCatalogGuiToLocaleFacadeInterface;
use Spryker\Zed\AppCatalogGui\Dependency\Facade\AppCatalogGuiToStoreFacadeInterface;
use Spryker\Zed\Kernel\Communication\AbstractCommunicationFactory;

/**
 * @method \Spryker\Zed\AppCatalogGui\AppCatalogGuiConfig getConfig()
 * @method \Spryker\Zed\AppCatalogGui\Business\AppCatalogGuiFacadeInterface getFacade()
 */
class AppCatalogGuiCommunicationFactory extends AbstractCommunicationFactory
{
    public function getLocaleFacade(): AppCatalogGuiToLocaleFacadeInterface
    {
        return $this->getProvidedDependency(AppCatalogGuiDependencyProvider::FACADE_LOCALE);
    }

    public function getStoreFacade(): AppCatalogGuiToStoreFacadeInterface
    {
        return $this->getProvidedDependency(AppCatalogGuiDependencyProvider::FACADE_STORE);
    }

    public function createOauthClientResponseTransferToResponseDataMapper(): OauthClientResponseTransferToResponseDataMapperInterface
    {
        return new OauthClientResponseTransferToResponseDataMapper();
    }
}
