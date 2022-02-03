

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Reports</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
  
</head>
<body>

<div class="card text-center" style="padding:20px;">
  <h3>REPORTS</h3>
</div><br>

<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="Time"><b>CHOOSE DATE RANGE </b></label>
        <input type="text" name="daterange" class="form-control" placeholder="CHOOSE DATE RANGE" />      
      </div>      
    </div>
    <div class="col-md-12 col-sm-12">
      <table class="table table-striped" id="tableData">
        <thead>
          <tr>
            <th>Speed</th>
            <th>Highway</th>
            <th>NumberPlate</th>
            <th>Time</th>
            <th></th>
          </tr>
        </thead>
        <tbody>

        </tbody>
      </table>
    </div>
  </div>
</div>

<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
</body>
</html>

<script type="text/javascript">
  $(document).ready(function(){

    var fromDate = "";
    var toDate = "";
    
    getDateRangeRecord(fromDate,toDate);

    $('input[name="daterange"]').on('apply.daterangepicker', function(ev, picker) {
      $(this).val(picker.startDate.format('YYYY-MM-DD HH:MI:SS') + ' to ' + picker.endDate.format('YYYY-MM-DD HH:MI:SS'));
    });

    $('input[name="daterange"]').on('cancel.daterangepicker', function(ev, picker) {
      $(this).val('');
    });

    $('input[name="daterange"]').daterangepicker({
      opens: 'center',
      autoUpdateInput: false,
    },

    // From to To date range function
    function(start, end) {
      var fromDate = start.format('YYYY-MM-DD HH:MI:SS');
      var toDate = end.format('YYYY-MM-DD HH:MI:SS');
      if(fromDate !== "" && toDate !== "") {
        getDateRangeRecord(fromDate,toDate);
      }
    });  

    // jQuery AJAX code
    function getDateRangeRecord(fromDate, toDate){
      $.ajax({
        url : "date.php",
        type : "POST",
        cache: false,
        data : {fromDate:fromDate, toDate:toDate},
        success:function(result){
          $("#tableData tbody").html(result);
        } 
      });
    }    
  });
</script>

