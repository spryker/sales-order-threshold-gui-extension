<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\SalesOrderThresholdGuiExtension\Dependency\Plugin;

use Generated\Shared\Transfer\SalesOrderThresholdValueTransfer;
use Symfony\Component\Form\FormBuilderInterface;

interface SalesOrderThresholdFormExpanderPluginInterface
{
    /**
     * Specification:
     *  - Returns the threshold name.
     *
     * @api
     *
     * @return string
     */
    public function getThresholdName(): string;

    /**
     * Specification:
     *  - Returns the threshold key.
     *
     * @api
     *
     * @return string
     */
    public function getThresholdKey(): string;

    /**
     * Specification:
     *  - Returns the threshold group.
     *
     * @api
     *
     * @return string
     */
    public function getThresholdGroup(): string;

    /**
     * Specification:
     *  - Expands the sales order threshold form.
     *
     * @api
     *
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     * @param array $options
     *
     * @return \Symfony\Component\Form\FormBuilderInterface
     */
    public function expand(FormBuilderInterface $builder, array $options): FormBuilderInterface;

    /**
     * Specification:
     *  - Maps the data from SalesOrderThresholdValueTransfer to array form data.
     *
     * @api
     *
     * @param array $data
     * @param \Generated\Shared\Transfer\SalesOrderThresholdValueTransfer $salesOrderThresholdValueTransfer
     *
     * @return array
     */
    public function getData(array $data, SalesOrderThresholdValueTransfer $salesOrderThresholdValueTransfer): array;

    /**
     * Specification:
     *  - Maps the form data to SalesOrderThresholdValueTransfer.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\SalesOrderThresholdValueTransfer $salesOrderThresholdValueTransfer
     * @param array $data
     *
     * @return \Generated\Shared\Transfer\SalesOrderThresholdValueTransfer
     */
    public function mapData(SalesOrderThresholdValueTransfer $salesOrderThresholdValueTransfer, array $data): SalesOrderThresholdValueTransfer;
}
