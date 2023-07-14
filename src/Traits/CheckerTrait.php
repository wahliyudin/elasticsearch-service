<?php

namespace Wahliyudin\ElasticsearchService\Traits;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Wahliyudin\ElasticsearchService\Contracts\ModelElasticsearchInterface;

trait CheckerTrait
{
    public function checkModelMustImplementInterface(Model $model)
    {
        if (!$model instanceof ModelElasticsearchInterface) {
            throw new Exception("The model must implement " . ModelElasticsearchInterface::class);
        }
    }
}