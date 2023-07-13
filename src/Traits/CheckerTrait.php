<?php

namespace WahliyudinElasticsearchService\Traits;

use Exception;
use Illuminate\Database\Eloquent\Model;
use WahliyudinElasticsearchService\Contracts\ModelElasticsearchInterface;

trait CheckerTrait
{
    public function checkModelMustImplementInterface(Model $model)
    {
        if (!$model instanceof ModelElasticsearchInterface) {
            throw new Exception("The model must implement " . ModelElasticsearchInterface::class);
        }
    }
}
