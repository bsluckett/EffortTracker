<?php
class ServiceTypeClass {
            // Creating some properties (variables tied to an object)
           
            public $ServiceTypeName;
            
            // Assigning the values
            public function __construct($ServiceTypeName) {
              $this->ServiceTypeName = $ServiceTypeName;
            }
            
            // Creating a method (function tied to an object)
            public function ST_Function() {
              return "<div class=\"panel panel-primary\">
                        <div class=\"panel-heading\">
                          <h3 class=\"panel-title\">" . $this->ServiceTypeName . "</h3>
                        </div>
                        <div style=\"margin:10px\">";
            }
          }
//remove last 2 divs
?>

<h1>testing</h1>
