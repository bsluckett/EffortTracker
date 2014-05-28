<link href="css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/moment.js"></script>
<script type="text/javascript" src="js/daterangepicker.js"></script>
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" media="all" href="css/daterangepicker-bs3.css" />
<link href="css/navbar.css" rel="stylesheet" type="text/css">
<div class="well">
  <form class="form-horizontal">
    <fieldset>
    <div class="control-group">
      <div class="controls">
        <div class="input-prepend input-group"> <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
          <input type="text" style="width: 200px" name="reservation" id="reservation" class="form-control" value="03/18/2013 - 03/23/2013" />
        </div>
      </div>
    </div>
    </fieldset>
  </form>
  <script type="text/javascript">
               $(document).ready(function() {
                  $('#reservation').daterangepicker(null, function(start, end, label) {
                    console.log(start.toISOString(), end.toISOString(), label);
                  });
               });
      </script>
</div>
