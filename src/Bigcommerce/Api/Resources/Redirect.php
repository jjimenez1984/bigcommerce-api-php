<?php

namespace Bigcommerce\Api\Resources;

use Bigcommerce\Api\Resource;
use Bigcommerce\Api\Client;

class Redirect extends Resource
{
    protected $ignoreOnCreate = array(
        'id',
        'url',
    );

    protected $ignoreOnUpdate = array(
        'id',
        'url',
    );

    public function create()
    {
        return Client::createRedirect($this->getCreateFields());
    }

    public function update()
    {
        return Client::updateRedirect($this->id, $this->getUpdateFields());
    }
}
