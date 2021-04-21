<?php

declare(strict_types=1);

namespace AbstractFactory\Repository;

use AbstractFactory\Db\Postgres;

/**
 * @package Repository
 */
abstract class BasePostgresRepository
{
    /**
     * @var Postgres
     */
    private $postgresConnection;

    /**
     * @param Postgres $postgresConnection
     */
    public function __construct(Postgres $postgresConnection)
    {
        $this->postgresConnection = $postgresConnection;
    }

    /**
     * @return Postgres
     */
    public function getPostgresConnection(): Postgres
    {
        return $this->postgresConnection;
    }
}