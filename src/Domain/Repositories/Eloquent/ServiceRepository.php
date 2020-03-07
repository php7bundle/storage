<?php

namespace PhpBundle\Storage\Domain\Repositories\Eloquent;

use PhpLab\Eloquent\Db\Base\BaseEloquentCrudRepository;
use PhpBundle\Storage\Domain\Interfaces\Repositories\ServiceRepositoryInterface;

class ServiceRepository extends BaseEloquentCrudRepository implements ServiceRepositoryInterface
{

    protected $tableName = 'storage_service';

    public function getEntityClass(): string
    {
        return 'PhpLab\\Sandbox\\Storage\\Domain\\Entities\\ServiceEntity';
    }
}

