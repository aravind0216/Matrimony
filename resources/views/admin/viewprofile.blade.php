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
            <form method="POST" action="/adminfilter" class="form form--flex form--search js-search-form form--wide form--wide-default">
            {{csrf_field()}}
              <div class="row">
                <div class="form-group">
                  <label class="control-label">I'm looking for a</label>
                  <select name="searchgender" id="searchgender" data-placeholder="-SELECT-" class="form-control">
                  @if (old('searchgender') != "")
                    <option value="<?php echo old('searchgender'); ?>"><?php echo old('searchgender'); ?></option>
                  @else
                    <option value="">-Select-</option>
                  @endif
                    <option>Male</option>
                    <option>Female</option>
                  </select>
                </div>

                <!-- <div class="form-group">
                  <label class="control-label">Age From</label>
                  <input value="<?php //echo old('searchagefrom'); ?>" name="searchagefrom" id="searchagefrom" type="text" placeholder="Age From" class="form-control"> 
                </div>

                <div class="form-group">
                  <label class="control-label">Age To</label>
                  <input value="<?php //echo old('searchageto'); ?>" name="searchageto" id="searchageto" type="text" placeholder="Age To" class="form-control"> 
                </div> -->

                <div style="width: 10% !important;" class="form-group">
                  <label class="control-label">Age From</label>
                  <select name="searchagefrom" id="searchagefrom" data-placeholder="Age From" class="form-control">
                    <option label=" "></option>
                    <?php for($x = 20; $x <= 50; $x++) { ?>
                      <option><?php echo $x; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div style="width: 10% !important;" class="form-group">
                  <label class="control-label">Age To</label>
                  <select name="searchageto" id="searchageto" data-placeholder="Age To" class="form-control">
                    <option label=""></option>
                    <?php for($x = 20; $x <= 50; $x++) { ?>
                      <option><?php echo $x; ?></option>
                    <?php } ?>
                  </select>
                </div>
                
                <div class="form-group">
                  <label class="control-label">Caste</label>
                  <select name="searchcaste" id="searchcaste" data-placeholder="-SELECT-" class="form-control">
@if (old('searchcaste') != "")
<option value="<?php echo old('searchcaste'); ?>"><?php echo old('searchcaste'); ?></option>
@else
      <option value="">-Select-</option>
@endif
                <option>Karuneegar Pillai</option>
                <option>Thirunelveli Saiva Pillai</option>
                <option>Thuluva Vellalar</option>
                <option>Chozia Vellalar</option>
                <option>Kodikal Vellalar</option>
                <option>Pandiya Vellalar</option>
                <option>Saiva Vellalar</option>
                <option>Muadaliar</option>
                <option>Thondaimandala Mudaliar</option>
                <option>Agamudaiyar</option>
                <option>Arcot Mudalia</option>
                <option>Udayar Villupuram Dist</option>
                <option>Karkatta</option>
                <option>Nangudi Vellalar</option>
                <option>All Vellala Pillai Mudaliar</option>
                  </select>
                </div>

                <div class="form-group">
                  <label class="control-label">Education</label>
                  <select name="searchedu" id="searchedu" data-placeholder="-SELECT-" class="form-control">
@if (old('searchedu') != "")
<option value="<?php echo old('searchedu'); ?>"><?php echo old('searchedu'); ?></option>
@else
      <option value="">-Select-</option>
@endif
                    <?php  foreach ($education as $educations) { ?>
                        <option><?php echo $educations->education; ?></option>
                    <?php } ?>
                  </select>
                </div>

                <div class="form-group ">
                  <label class="control-label">Star</label>
                  <select name="searchstar" id="searchstar" data-placeholder="-SELECT-" class="form-control">
@if (old('searchstar') != "")
<option value="<?php echo old('searchstar'); ?>"><?php echo old('searchstar'); ?></option>
@else
      <option value="">-Select-</option>
@endif
                    <?php  foreach ($star as $stars) { ?>
                    	<option value="<?php echo $stars->id; ?>"><?php echo $stars->star; ?></option>
                    <?php } ?>
                  </select>
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
            <th>User ID</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Sub Caste</th>
            <th>District</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($profile as $key => $row) { ?>
        <tr>
            <td><?php echo $row->userid; ?></td>
            <td><?php echo $row->name; ?></td>
            <td><?php echo $row->gender; ?></td>
            <td><?php echo $row->age; ?></td>
            <td><?php echo $row->subcaste; ?></td>
            <td><?php echo $row->district; ?></td>
            <td><a href="/admineditprofile/<?php echo $row->id; ?>" >
                            View</a></td>
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
</script>	
@else
  <?php
  Session::flash ( 'message', "Your Session has Expired! , Please Login Again." );
        echo redirect('login'); ?>
@endif