<?php
/**
 * File containing the ezcLogWriterException class.
 *
 * @package EventLog
 * @version //autogen//
 * @copyright Copyright (C) 2005, 2006 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

/**
 * The ezcLogWriterException will be thrown when an {@class ezcLogWriter} or
 * a subclass encounters an exceptional state.
 *
 * This exception is a container, containing any kind of exception.
 *
 * @package EventLog
 * @version //autogen//
 */
class ezcLogWriterException extends Exception
{
    public $exception; 

    /**
     * Constructs a new ezcLogWriterException with the original exception $e.
     *
     * @param Exception $e;
     */
    public function __construct( Exception $e )
    {
        $this->exception = $e;
    }
}
?>