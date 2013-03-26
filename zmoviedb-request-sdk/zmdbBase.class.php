<?php

/**
 * zmdbBase class design to make request with tmdb api
 * and retrive the information about movies , celeb , and other things
 * 
 */
class zmdbBase {
  // request url
  const REQUEST_URL = 'http://api.themoviedb.org/3';
  // lagecy request url
  const LAGECY_RQUEST_URL = "http://api.themoviedb.org/2";
  // api key
  const API_KEY = ''; //add your api key here
  // request type get
  const GET_REQUEST = "GET";
  // request type post
  const POST_REQUEST = 'POST';
  // request NONE parameter
  const NONE_PARAM = '';

  
  public function __construct() {
    // set request method type
    $this->method = self::GET_REQUEST;   // set call method
    // set request url
    $this->request_url = self::REQUEST_URL; // set request url
    // create request parameters
    $this->parameter = array();
    // create request attributes
    $this->method_attribute = array();
  }

  // set methods
  /**
   * set request method type
   * @param $method request method type
   */
  public function setMethod($method) {
    $this->method = $method;
  }

  /**
   * set page value
   * @param <string> $page
   */
  public function setPage($page) {
    $this->page = $page;
  }
  /**
   * set post option true
   */
  public function setPostOption() {
    curl_setopt($this->call_resource, CURLOPT_PORT, true);
  }

  //get methods
  public function getResponse() {
    return $this->response;
  }
 /**
   * build request for cUrl call method 
   */
  private function buildRequest() {
    // call resource
    $this->call_resource = curl_init($this->buildRequestUrl());
    curl_setopt($this->call_resource, CURLOPT_RETURNTRANSFER, true);
  }

  

  /**
   * return true if call is post
   * @return boolean
   */
  private function isPost() {
    return $this->method == self::POST_REQUEST ? truen : false;
  }

  /**
   * build the call request
   * it will add parameters to request
   * @return request url
   */
  private function buildRequestUrl() {
    
    // check if it is post call
    if ($this->isPost()) {
      // set post call option
      $this->setPostOption();
      
      // set post fields
      curl_setopt($this->call_resource, CURLOPT_POSTFIELDS, $this->parameter);
    }
    // check if it is get call
    else {
     
      // build call request with method type
      foreach ($this->method_attribute as $key => $value) {
        $this->request_url .= "/" . $key . ($value ?  "/" . $value : '');
      }
      // set api_key for url
      $this->request_url .= "?api_key=" . self::API_KEY;

      // build call request with parameters
      foreach ($this->parameter as $key => $value) {
        $this->request_url .= "&" . $key . "=" . $value;
      }
    }
    
    return $this->request_url;
  }

  /**
   * call the request
   * first build the request then call the request then gather the response
   * prase the response 
   */
  public function call() {
    // build request
    $this->buildRequest();
    // execute request
    $this->response = curl_exec($this->call_resource);
    // close handle
    curl_close($this->call_resource);
    // json decode response
    $this->response = json_decode($this->response);
  }

}

