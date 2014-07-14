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
