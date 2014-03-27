<?php
class ActivityClass {
            // Creating some properties (variables tied to an object)
            public $Activity;
            echo " in class";
            // Assigning the values
            public function __construct($Activity) {
              $this->Activity = $Activity;
            }
            
            // Creating a method (function tied to an object)
            public function A_Function() {
              echo " in function ";
              return "<div class=\"checkbox clearfix\">
								              <div style=\"width: 275px;\">
									               <label class=\"pull-left\">
			    						               <input type=\"checkbox\">" . $this->Activity . 
                                "</label>
			 					              </div>
								              <div style=\"margin-top:-40px\">
			 						                <form class=\"form-horizontal pull-right\" role=\"form\" style=\"width:100px;\">
			   							               <div class=\"form-group\">
			    							                <div class=\"col-sm-10\">
			      								               <input type=\"text\" class=\"form-control\" id=\"inputTime\" placeholder=\"hh:mm\">
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