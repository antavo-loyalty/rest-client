<?php
namespace Antavo\RestClient\Exceptions;

/**
 * Abstract exception extended by all exceptions thrown by
 * {@see \Antavo\RestClient\RestClient} when an error occurs during processing
 * REST API response.
 *
 * @abstract
 */
abstract class Exception extends \RuntimeException {}
