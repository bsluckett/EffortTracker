<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/moment.js"></script>
<script type="text/javascript" src="js/daterangepicker.js"></script>
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
      <div class="btn-group" style="padding:10px">
        <button type="button" class="btn btn-default">Me</button>
        <button type="button" class="btn btn-default">All</button>
      </div>
      <div class="btn-group" style="padding:10px">
        <button type="button" class="btn btn-default">RTP</button>
        <button type="button" class="btn btn-default">SJ</button>
        <button type="button" class="btn btn-default">BGL</button>
      </div>
      <button type="button" class="btn btn-success" style="position: absolute; right:60px; top: 25px; width: 75px; height: 75px;">Export!</button>
</div>
