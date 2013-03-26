<?php
/*
 * this class is designed to retrive person's images information
 * it is extended from zmdbBase class
 * it has one custructor and one method
 */

class zPersonImages extends zmdbBase {

  public function __construct() {
    parent::__construct();
    $this->setMethod(self::GET_REQUEST);
  }

  /**
   * execute preson images request for given person id
   * it will retrive person's images information in json object format
   * @param <type> $person_id
   */
  public function doRequest($person_id) {
    // set person attribute
    $this->method_attribute['person'] = $person_id;
    // set credits attribute
    $this->method_attribute['images'] = self::NONE_PARAM;
    // execute request
    $this->call();
  }
}
