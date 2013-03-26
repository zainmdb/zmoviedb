<?php
/*
 * this class is designed to retrive configuration information
 * it is extended from zmdbBase class
 * it has one custructor and one method
 */

class zConfiguration extends zmdbBase {

  public function __construct() {
    parent::__construct();
    $this->setMethod(self::GET_REQUEST);
  }

  /**
   * execute configuration request
   * it will retrive configuration information in json object format
   */
  public function doRequest($genre_id) {
    //set configuration attribute
    $this->method_attribute['configuration'] = self::NONE_PARAM;
    // execute request
    $this->call();
  }
}
