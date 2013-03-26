<?php
/*
 * Movie similar request class is exntended version on zmdb base class
 * is designed to make api request for similar movie information by given movie id
 */

class zMovieSimilar extends zmdbBase {
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
    // set movie similar movies attribute
    $this->method_attribute['similar_movies'] = '';
    // execute the call
    $this->call();
  }
}