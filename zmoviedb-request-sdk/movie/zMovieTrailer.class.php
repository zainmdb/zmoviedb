<?php
/* 
 * this class is designed to retrive movie's trailers information
 * it is extended from zmdbBase class
 * it has one custructor and one method
 */

class zMovieTrailer extends zmdbBase {

  public function __construct() {
    parent::__construct();
    $this->setMethod(self::GET_REQUEST);
  }

  /**
   * execute movie trailer request for given movie id
   * it will movie trailer information in json object format
   * @param <type> $movie_id
   */
  public function doRequest($movie_id) {
    // set movie attribute
    $this->method_attribute['movie'] = $movie_id;
    // set trailer attribute
    $this->method_attribute['trailers'] = self::NONE_PARAM;
    $this->call();
  }
}
