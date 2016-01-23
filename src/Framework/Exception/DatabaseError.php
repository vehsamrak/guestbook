<?php
/**
 * Author: Vehsamrak
 * Date Created: 23.01.16 16:45
 */

namespace Framework\Exception;

/**
 * {@inheritDoc}
 */
class DatabaseError extends \Exception
{

    /**
     * {@inheritDoc}
     */
    public function __construct($errorNumber, $errorString)
    {
        parent::__construct(
            sprintf(
                'Ошибка при запросе к БД: (%s) %s',
                $errorNumber,
                $errorString
            )
        );
    }
}
