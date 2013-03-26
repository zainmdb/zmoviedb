<?php
/*
 * Movie Images request class is exntended version on zmdb base class
 * is designed to make api request for movie's release information by given movie id
 */

class zMovieRelease extends zmdbBase {
  public function __construct() {
    parent::__construct();
    $this->setMethod(self::GET_REQUEST);
  }

  /**
   * execute movie release information reuqest with movie id as parameter
   * it will return the movie images information in json format
   * @param <type> $movie_id
   */
  public function doRequest($movie_id) {
    // set method attribute movie id
    $this->method_attribute['movie'] = $movie_id;
    // set movie releases attribute
    $this->method_attribute['releases'] = '';
    // execute the call
    $this->call();
  }
}