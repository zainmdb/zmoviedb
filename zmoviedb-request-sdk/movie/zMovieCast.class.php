<?php
/* 
 * Movie Cast request call is exntended version on zmdb base class
 * is designed to make api request for movie's cast information by given movie id
 */

class zMovieCast extends zmdbBase {
  public function __construct() {
    parent::__construct();
    $this->setMethod(self::GET_REQUEST);
  }

  /**
   *execute movie cast reuqest with movie id as parameter
   * it will return the movie cast information in json format
   * @param <type> $movie_id
   */
  public function doRequest($movie_id) {
    // set method attribute movie id
    $this->method_attribute['movie'] = $movie_id;
    // set movie cast attribute
    $this->method_attribute['casts'] = '';
    // execute the call
    $this->call();
  }
}