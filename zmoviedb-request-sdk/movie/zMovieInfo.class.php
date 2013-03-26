<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class zMovieInfo extends zmdbBase {
  public function __construct() {
    parent::__construct();
    $this->setMethod(self::GET_REQUEST);
  }

  /**
   *execute movie info reuqest with movie id as parameter
   * it will return the movie information in json format
   * @param <type> $movie_id
   */
  public function doRequest($movie_id) {
    // set method attribute movie id
    $this->method_attribute['movie'] = $movie_id;
    // execute the call
    $this->call();
  }
}