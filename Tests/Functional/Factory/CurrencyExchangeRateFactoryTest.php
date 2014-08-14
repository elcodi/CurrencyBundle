<?php

/**
 * This file is part of the Elcodi package.
 *
 * Copyright (c) 2014 Elcodi.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 * @author Aldo Chiecchia <zimage@tiscali.it>
 */

namespace Elcodi\CurrencyBundle\Tests\Functional\Factory;

use Elcodi\TestCommonBundle\Functional\WebTestCase;

/**
 * Class CurrencyExchangeRateFactoryTest
 */
class CurrencyExchangeRateFactoryTest extends WebTestCase
{
    /**
     * Returns the callable name of the service
     *
     * @return string service name
     */
    public function getServiceCallableName()
    {
        return [
            'elcodi.core.currency.factory.currency_exchange_rate',
            'elcodi.factory.currency_exchange_rate',
        ];
    }

    /**
     * Test currency_exchange_rate factory provider
     */
    public function testFactoryProvider()
    {
        $this->assertInstanceOf(
            $this->getParameter('elcodi.core.currency.entity.currency_exchange_rate.class'),
            $this->get('elcodi.core.currency.entity.currency_exchange_rate.instance')
        );
    }

    /**
     * Test currency_exchange_rate factory provider alias
     */
    public function testFactoryProviderAlias()
    {
        $this->assertInstanceOf(
            $this->getParameter('elcodi.core.currency.entity.currency_exchange_rate.class'),
            $this->get('elcodi.entity.currency_exchange_rate.instance')
        );
    }
}
