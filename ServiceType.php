<?php
class ServiceType {
            // Creating some properties (variables tied to an object)
           
            public $ServiceTypeName;
            public $Activity;
            
            // Assigning the values
            public function __construct($ServiceTypeName, $Activity) {
              $this->ServiceTypeName = $ServiceTypeName;
              $this->Activity = $Activity;
            }
            
            // Creating a method (function tied to an object)
            public function greet() {
              return "<div class=\"panel panel-primary\">
                      	<div class=\"panel-heading\">
                      		<h3 class=\"panel-title\">" . $this->ServiceTypeName . "</h3>
                      	</div>
                      	<div style=\"margin:10px\">
							<div class=\"checkbox clearfix\">
								<div style=\"width: 275px;\">
									<label class=\"pull-left\">
			    						<input type=\"checkbox\">" . $this->Activity . "</label>
			 					</div>
								<div style=\"margin-top:-40px\">
			 						<form class=\"form-horizontal pull-right\"role=\"form\" style=\"width:100px;\">
			   							<div class=\"form-group\">
			    							<div class=\"col-sm-10\">
			      								<input type=\"text\" class=\"form-control\" id=\"inputTime\" placeholder=\"Time\">
			    							</div>
										</div>
			 						</form>
								</div>
							</div>
						</div>
                      </div>";
            }
          }


?>