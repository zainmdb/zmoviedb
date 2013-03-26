<?php
/*
 * Movie Images request class is exntended version on zmdb base class
 * is designed to make api request for movie's images information by given movie id
 */

class zMovieImages extends zmdbBase {
  public function __construct() {
    parent::__construct();
    $this->setMethod(self::GET_REQUEST);
  }

  /**
   * execute movie images reuqest with movie id as parameter
   * it will return the movie images information in json format
   * @param <type> $movie_id
   */
  public function doRequest($movie_id) {
    // set method attribute movie id
    $this->method_attribute['movie'] = $movie_id;
    // set movie images attribute
    $this->method_attribute['images'] = '';
    // execute the call
    $this->call();
  }
}