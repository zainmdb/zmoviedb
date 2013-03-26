<?php
/*
 * Movie Keywords request class is exntended version on zmdb base class
 * is designed to make api request for movie's keywords information by given movie id
 */

class zMovieKeywords extends zmdbBase {
  public function __construct() {
    parent::__construct();
    $this->setMethod(self::GET_REQUEST);
  }

  /**
   * execute movie keyword reuqest with movie id as parameter
   * it will return the movie images information in json format
   * @param <type> $movie_id
   */
  public function doRequest($movie_id) {
    // set method attribute movie id
    $this->method_attribute['movie'] = $movie_id;
    // set movie keyword attribute
    $this->method_attribute['keywords'] = '';
    // execute the call
    $this->call();
  }
}