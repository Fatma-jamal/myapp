<?php

namespace Tamm\Core;

class HttpResponse {

    //
    private $statusCode;
    //
    private $headers;
    //
    private $body;

    public function __construct() {}

    public function getStatusCode() {
        return $this->statusCode;
    }

    public function setStatusCode($statusCode) {
        $this->statusCode = $statusCode;
    }


    public function getHeaders()
    {
        return $this->headers;
    }

    public function setHeader($name, $value) {
        return $this->headers[$name] = $value;
    }

    public function getBody() {
        return $this->body;
    }

    public function setBody($body) {
        $this->body = $body;
    }

    public function send()
    {
        // Set the status code
        http_response_code($this->statusCode);

        if(!empty($this->headers)){
            // Set the headers
            foreach ($this->headers as $name => $value) {
                header("$name: $value");
            }
        }

        // Send the response body
        echo $this->body;
    }
}