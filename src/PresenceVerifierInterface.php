<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

namespace Hyperf\Validation;

interface PresenceVerifierInterface
{
    /**
     * Count the number of objects in a collection having the given value.
     *
     * @param string $collection
     * @param string $column
     * @param string $value
     * @param null|int $excludeId
     * @param null|string $idColumn
     * @param array $extra
     * @return int
     */
    public function getCount(string $collection, string $column, string $value, $excludeId = null, $idColumn = null, array $extra = []): int;

    /**
     * Count the number of objects in a collection with the given values.
     *
     * @param string $collection
     * @param string $column
     * @param array $values
     * @param array $extra
     * @return int
     */
    public function getMultiCount(string $collection, string $column, array $values, array $extra = []): int;
}