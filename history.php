<?php $MenuTitle = "History"; ?>
<?php include 'inc/header.php'; ?>
 <div class="col-md-1"></div>
 <div class="col-md-10">
 		<?php include 'pages/daterange.php'; ?>
 		<table class="table table-bordered table-striped table-condensed">
                                        <thead>
                                          <tr>
                                            <th>Date</th>
                                            <th>Service</th>
                                            <th>Service Type</th>
                                            <th>Activity</th>
											<th>Incident #</th>
											<th>Total Hours</th>
											<th>Actions</th>											
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
										  	<td class="center">2012/01/01</td>
                                            <td>Queue Management</td>
                                            <td>Request Owner</td>
                                            <td class="center">Service Request Documentation</td>
											<td>INC1234</td>
											<td class="right">2</td>
											<td class="center ">
												<a class="btn btn-success" href="history.html#">
													<i class="fa fa-search-plus "></i>                                            
												</a>
												<a class="btn btn-info" href="history.html#">
													<i class="fa fa-edit "></i>                                            
												</a>
												<a class="btn btn-danger" href="history.html#">
													<i class="fa fa-trash-o "></i> 
												</a>
											</td>
                                            
                                          </tr>
                                          <tr>
                                            <td class="center">2012/03/21</td>
                                            <td>Queue Management</td>
                                            <td>Email Communication</td>
                                            <td class="center">Service Request Documentation</td>
											<td>INC2345</td>
											<td class="right">4</td>
                                            <td class="center"><label class="checkbox inline"><input type="checkbox" id="inlineCheckbox1" value="option1"></label></td>
                                          </tr>
                                          <tr>
                                            <td class="center">2012/04/08</td>
                                            <td>Queue Management</td>
                                            <td>Request Document</td>
                                            <td class="center">Service Request Documentation</td>
											<td>INC2315</td>
											<td class="right">3</td>
                                            <td class="center"><label class="checkbox inline"><input type="checkbox" id="inlineCheckbox1" value="option1"></label></td>
                                          </tr>
                                          <tr>
                                            <td class="center">2012/04/21</td>
                                            <td>Incident Management</td>
                                            <td>Reporting</td>
                                            <td class="center">Take a count of incident resolved for the last 24 hrs</td>
											<td>INC4345</td>
											<td class="right">5</td>
                                            <td class="center"><label class="checkbox inline"><input type="checkbox" id="inlineCheckbox1" value="option1"></label></td>
                                          </tr>
                                          <tr>
                                            <td class="center">2012/04/25</td>
                                            <td>Schedule Event Management</td>
                                            <td>Schedule Events</td>
                                            <td class="center">24x7 monitoring of the BMC Impact Explorer</td>
											<td>INC2673</td>
											<td class="right">3</td>
                                            <td class="center"><label class="checkbox inline"><input type="checkbox" id="inlineCheckbox1" value="option1"></label></td>
                                          </tr>
                                        </tbody>
                                      </table>
        </div>
  <div class="col-md-1"></div>

<?php include 'inc/footer.php'; ?> 