<?php
/**
 * Users class
 */

namespace OST;

use OST\Base;

/**
 * Class encapsulating methods to interact with API's for Users module
 */
class Users extends Base
{

    const PREFIX = '/users';
    const SUFFIX = '/activate-user';

    /**
     * Create a User
     *
     * @param array $params params for creating a user
     *
     * @return object
     *
     */
    public function create(array $params = array())
    {
      return $this->requestObj->post($this->getPrefix() . '/', $params);
    }

    /**
     * List Users
     *
     * @param array $params params for fetching users list
     *
     * @return object
     *
     */
    public function getList(array $params = array())
    {
      return $this->requestObj->get($this->getPrefix() . '/', $params);
    }

    /**
     * Get user details
     *
     * @param array $params params for fetching details of a user
     *
     * @throws \Exception
     *
     * @return object
     *
     */
    public function get(array $params = array())
    {
      return $this->requestObj->get($this->getPrefix() . '/' . $this->getId($params) . '/', $params);
    }

    /**
     * Activate user by deploying it's token holder.
     *
     * @param array $params params for creating a token holder
     *
     * @return object
     *
     */
    public function activateUser(array $params = array())
    {
      return $this->requestObj->post($this->getPrefix() . '/' . $this->getUserId($params) . $this->getSuffix() . '/', $params);
    }

}
