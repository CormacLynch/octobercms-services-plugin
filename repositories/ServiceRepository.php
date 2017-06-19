<?php

namespace GetRight\Services\Repositories;

use GetRight\Services\Models\Service;

/**
 * Class ServiceRepository
 * @package GetRight\Services\Repositories
 * @author getRight
 */
class ServiceRepository{

    /**
     * @var $model
     */
    protected $model;

    /**
     * ServiceRepository constructor.
     */
    public function __construct(Service $model) {
        $this->model = $model;
    }

    /**
     * Create model.
     *
     * @param array $data
     * @return \GetRight\Services\Models\Service
     */
    public function create(array $data)
    {
        return $this->model->create($data);
    }

    /**
     * Get a specified number of services.
     *
     * @param int $number
     */
    public function take($number = 3)
    {
        return Service::take($number)->get();
    }
}
