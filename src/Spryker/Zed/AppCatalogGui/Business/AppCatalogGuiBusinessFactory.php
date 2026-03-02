<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\AppCatalogGui\Business;

use Spryker\Zed\AppCatalogGui\AppCatalogGuiDependencyProvider;
use Spryker\Zed\AppCatalogGui\Business\AccessToken\AccessTokenReader;
use Spryker\Zed\AppCatalogGui\Business\AccessToken\AccessTokenReaderInterface;
use Spryker\Zed\AppCatalogGui\Dependency\Facade\AppCatalogGuiToOauthClientFacadeInterface;
use Spryker\Zed\AppCatalogGui\Dependency\Facade\AppCatalogGuiToTranslatorFacadeInterface;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

/**
 * @method \Spryker\Zed\AppCatalogGui\AppCatalogGuiConfig getConfig()
 */
class AppCatalogGuiBusinessFactory extends AbstractBusinessFactory
{
    public function createAccessTokenReader(): AccessTokenReaderInterface
    {
        return new AccessTokenReader(
            $this->getTranslatorFacade(),
            $this->getOauthClientFacade(),
            $this->getConfig(),
        );
    }

    public function getTranslatorFacade(): AppCatalogGuiToTranslatorFacadeInterface
    {
        return $this->getProvidedDependency(AppCatalogGuiDependencyProvider::FACADE_TRANSLATOR);
    }

    public function getOauthClientFacade(): AppCatalogGuiToOauthClientFacadeInterface
    {
        return $this->getProvidedDependency(AppCatalogGuiDependencyProvider::FACADE_OAUTH_CLIENT);
    }
}
