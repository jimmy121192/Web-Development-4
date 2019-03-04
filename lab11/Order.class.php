<?php
/*
   Represents a Order (for the book case)
 */
class Order
{  

    private $id;
    private $customerId;    
    SOME_MORE_PROPERTY_DECLARATIONS

    // constructor is
    function __construct($delimiter,$line) {
        $splitcontents = explode($delimiter, $line);
          
        $this->id = $splitcontents[0];
        $this->customerId = $splitcontents[1];
        SOME_MORE_PROPERTY_SETTINGS        
    }
    
    public function getId() { return $this->id; } 
    public function setId($id) { $this->id = $id; }
    SOME_MORE_GETTERS
}

?>