<?php

declare(strict_types=1);

namespace Framework\Http;

class Request
{
    /**
     * Represents an HTTP request.
     */
    public function __construct(
        public readonly array $getParams, // An associative array of GET parameters.
        public readonly array $postParams, // An associative array of POST parameters.
        public readonly array $cookies, // An associative array of cookies.
        public readonly array $files, // An associative array of uploaded files.
        public readonly array $server, // An associative array of server variables.
    )
    {
    }

    /**
     * Creates a new Request instance based on the current global variables.
     *
     * @return Request A new Request instance
     */
    public static function createFromGlobals()
    {
        return new static(
            $_GET,
            $_POST,
            $_COOKIE,
            $_FILES,
            $_SERVER
        );
    }
    
    /**
     * Returns the path component of the requested URI.
     *
     * @return string The path component of the requested URI.
     */
    public function getPathInfo(): string
    {
        return strtok($this->server['REQUEST_URI'], '?');
    }

    /**
     * Returns the HTTP request method used for the request.
     *
     * @return string The request method.
     */
    
    public function getMethod(): string
    {
        return $this->server['REQUEST_METHOD'];
    }

}