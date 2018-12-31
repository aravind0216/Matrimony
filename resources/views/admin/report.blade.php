@if (session()->get('name'))
  

@extends('includes.layout1')

@section('body')		
        <nav class="breadcrumbs">
          <div class="container">
            <ul>
              <li class="breadcrumbs__item"><a href="" class="breadcrumbs__link">Home</a></li>
              <li class="breadcrumbs__item"><a href="" class="breadcrumbs__link">Dashboard</a></li>
            </ul>
          </div>
        </nav>

<!-- BEGIN CENTER SECTION-->
        <div class="center">
          <div class="container">
            <div class="row">
              <!-- <header class="site__header">
                <h1 class="site__title site__title--center">View all Profiles</h1>
              </header> -->
              <!-- BEGIN LISTING-->



		    <div class="widget js-widget widget--landing">
          <div class="widget__content">
            <form method="POST" action="/admin/report" class="form form--flex form--search js-search-form form--wide form--wide-default">
            {{csrf_field()}}
              <div class="row">
                <div class="form-group">
                  <label class="control-label">From Date</label>
                  <input autocomplete="off" name="from_date" id="from_date" type="date" placeholder="From Date" class="form-control"> 
                </div>

                <div class="form-group">
                  <label class="control-label">To Date</label>
                  <input autocomplete="off" name="to_date" id="to_date" type="date" placeholder="To Date" class="form-control"> 
                </div>
              </div>
              <div class="form__buttons form__buttons--double">
                <button type="button" class="form__reset js-form-reset">Reset</button>
	             <button type="submit" class="form__submit">Search</button>
              </div>
            </form>
          </div>
        </div>
        
<div class="site site--main">

<div class="table-responsive">
<table id="example" class="table table-striped" style="overflow-x:auto;width: 100% !important;">
    <thead>
        <tr>
            <th>S.No</th>
            <th>Payment ID</th>
            <th>Plan</th>
            <th>Amount</th>
            <th>Name</th>
            <th>Mobile</th>
            <th>Next Due Date</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($payment as $key => $row) { ?>
        <tr>
            <td><?php echo $row->id; ?></td>
            <td><?php echo $row->payment_id; ?></td>
            <td><?php echo $row->plan_name; ?></td>
            <td><?php echo $row->plan_amount; ?></td>
            <td><?php echo $row->profile_name; ?></td>
            <td><?php echo $row->profile_mobile; ?></td>
            <td><?php echo $row->next_due_date; ?></td>
        </tr>
    <?php } ?>
    </tbody>
    <!-- <tfoot>
        <tr>
            <th>User ID</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Sub Caste</th>
            <th>District</th>
            <th>Action</th>
        </tr>
    </tfoot> -->
</table> 
</div>                      
                  
    </div>

<!-- END LISTING-->

<!-- BEGIN SIDEBAR-->
@include('admin.adminsidebar')
<!-- END SIDEBAR-->

      <div class="clearfix"></div>
    </div>
  </div>
</div>


@endsection
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css"/>
 
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#example').DataTable();
});


$('#from_date').datepicker({
    autoclose: true,
    format: "dd-mm-yyyy",
    todayHighlight: true,
    // orientation: "top auto",
    todayBtn: true,
    todayHighlight: true,  
});
$('#to_date').datepicker({
    autoclose: true,
    format: "dd-mm-yyyy",
    todayHighlight: true,
    // orientation: "top auto",
    todayBtn: true,
    todayHighlight: true, 
});
</script>	
@else
  <?php
  Session::flash ( 'message', "Your Session has Expired! , Please Login Again." );
        echo redirect('login'); ?>
@endif