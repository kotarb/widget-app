<?php

namespace DreamCommerce\Resource;

use DreamCommerce\Resource;
use DreamCommerce\Exception;

/**
 * Resource Tax
 *
 * @package DreamCommerce\Resource
 * @link https://developers.shoper.pl/developers/api/resources/taxes
 */
class Tax extends Resource
{
    protected $name = 'taxes';

    /**
     * {@inheritdoc}
     */
    public function post($data)
    {
        throw new Exception('Specified method is not supported');
    }

    /**
     * {@inheritdoc}
     */
    public function put($id = null, $data = array())
    {
        throw new Exception('Specified method is not supported');
    }

    /**
     * {@inheritdoc}
     */
    public function delete($id = null)
    {
        throw new Exception('Specified method is not supported');
    }
}