<?php
/*
   Represents a Customer (for the book case)
 */
class Customer
{  

    private $id;
    private $firstName;    
    SOME_MORE_PROPERTY_DECLARATIONS

    // constructor is
    function __construct($delimiter,$line) {
        $splitcontents = explode($delimiter, $line);
                  
        $this->id = $splitcontents[0];
        $this->firstName = utf8_encode($splitcontents[1]);
        SOME_MORE_PROPERTY_SETTINGS 
    }
    
    public function getId() { return $this->id; } 
    public function getFirstName() { return $this->firstName; }
    SOME_MORE_GETTERS
}

?>