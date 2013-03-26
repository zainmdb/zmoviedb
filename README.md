ZMOVIEDB PHP SDK 1.0.1  (SYMFONY)
========

[ZMOVIEDB](http://www.zmoviedb.com/) is collection of movies, actors, production companies and other movies related information.

This repository contains the open source PHP SDK that allows you to
access themoviedb content from your PHP app. 

Requirement 
-----------

To use this sdk you need to create themoviedb application key.
Registering for an themoviedb API key is free for anyone to do. 
You need to sign up for an account in themoviedb and then go to your account settings. 
Then go to your “API Details” page. You will see a link to generate a new API key

Usage
-----

Following is sample example for movie information request

    // create movie info request object
    $movie_info_request = new zMovieInfo();
    // execute request
    $movie_info_request->doRequest($movie_id);
    // get response
    $movie_record = $movie_info_request->getResponse();
    
Similarly the request for person information is

    // create person info request object
    $person_info_request = new zPersonInfo();
    // execute the request
    $person_info_request->doRequest($person_id);
    // gether response
    $person_info_record = $person_info_request->getResponse();
    
ZMOVIEDB SDK contains various request methods to fetch movie and person information
