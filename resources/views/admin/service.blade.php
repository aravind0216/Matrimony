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



		
        
              <!-- BEGIN LISTING-->
              <div class="site site--main">
                <header class="site__header">
                
                </header>
                
                
                <div class="site__main">
                  <button style="margin-bottom: -50px;" type="button" class="btn btn-info" id="addService">Add Service</button>
                  <div class="widget js-widget widget--main">
                    <div class="widget__content zero-configuration">
                      <div class="listing listing--grid ">
<?php if ( !empty ( $service ) ) { 
  foreach ($service as $row) { ?>
    <div class="listing__item">
      <div class="properties properties--grid">
        <div class="properties__header"><span class="properties__state properties__state--hidden"></span>
          <div class="properties__right">
            <button onclick="Edit({{$row->id}})" class="properties__link">Edit</button>
            <button onclick="Delete({{$row->id}})" class="properties__link">Delete</button>
          </div>
        </div>

<div class="properties__thumb">
  <!-- <a href="viewprofile\<?php //echo $row->id; ?>" class="item-photo item-photo--static"> -->

<?php if($row->url != ""){ ?>
    <img style="width: 277px;height: 180px;" src="{{asset('upload_service/').'/'.$row->url}}" alt="">
<?php } else{ ?>
  <svg>
    <use xlink:href="#icon-avatar"></use>
  </svg>
<?php } ?>
                                
    <figure class="item-photo__hover">
      <span class="item-photo__more">View Details</span>
    </figure>
  <!-- </a> -->
</div>

<div class="properties__info">
    <a href="#" class="properties__address properties__address--simple">
    <span class="properties__address-street"><?php echo $row->title; ?></span>
    <span class="properties__address-city"><?php echo $row->description; ?></span>
    </a>
</div>
                          
    </div>
  </div>
<?php } } else { ?>
  <h2 class="site__headline">No Results</h2>
<?php } ?>
                                                
        </div>

<center>{{ $service->links() }}</center>

      </div>
    </div>
  </div>
</div>  
<!-- END LISTING-->

@include('admin.adminsidebar')

      <div class="clearfix"></div>
    </div>
  </div>
</div>



<!-- line modal -->
<div class="modal fade" id="open_model" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
      <h3 class="modal-title" id="myModalLabel8">My Modal</h3>
    </div>
    <div class="modal-body">
      <form id="form" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="id" id="id">
        <div class="form-group">
          <label>Title</label>
          <input type="text" class="form-control" id="title" name="title" placeholder="Title">
        </div>
        <div class="form-group">
          <label>Description</label>
          <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <div class="form-group">
          <label>Image</label>
          <input type="hidden" id="image1" name="image1">
          <input type="file" id="image" name="image">
        </div>
      </form>

    </div>
    <div class="modal-footer">
      <div class="btn-group btn-group-justified" role="group" aria-label="group button">
        <div class="btn-group" role="group">
          <button type="button" class="btn btn-default" data-dismiss="modal"  role="button">Close</button>
        </div>
        <div class="btn-group btn-delete hidden" role="group">
          <button type="button" class="btn btn-default btn-hover-red" data-dismiss="modal"  role="button">Delete</button>
        </div>
        <div class="btn-group" role="group">
          <button type="button" id="saveButton" onclick="Save()" class="btn btn-default btn-hover-green" data-action="save" role="button">Save</button>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css"/>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script>
  var action_type;
  $('#addService').click(function(){
    $('#open_model').modal('show');
    action_type = 1;
    $('#saveButton').text('Save');
    $('#myModalLabel8').text('Add Service');
  })
    function Save(){
      var formData = new FormData($('#form')[0]);
      if(action_type == 1){

        $.ajax({
                url : '/admin/addService',
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                dataType: "JSON",
                success: function(data)
                {                
                    $("#form")[0].reset();
                    $('#open_model').modal('hide');
                    $('.zero-configuration').load(location.href+' .zero-configuration');
                    toastr.success('Service Store Successfully', 'Successfully Save');
                },
          error: function (data, errorThrown) {
            var errorData = data.responseJSON.errors;
            $.each(errorData, function(i, obj) {
              toastr.error(obj[0]);
            });
         } 
            });
      }else{
        $.ajax({
          url : '/admin/updateService',
          type: "POST",
          data: formData,
          contentType: false,
          processData: false,
          dataType: "JSON",
          success: function(data)
          {
            console.log(data);
              $("#form")[0].reset();
              $('#open_model').modal('hide');
              $('.zero-configuration').load(location.href+' .zero-configuration');
              toastr.success('Service Update Successfully', 'Successfully Update');
          },error: function (data, errorThrown) {
            var errorData = data.responseJSON.errors;
            $.each(errorData, function(i, obj) {
              toastr.error(obj[0]);
            });
          }
      });
      }
      
    }

    function Edit(id){
      
      $.ajax({
        url : '/admin/editService/'+id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
          $('#myModalLabel8').text('Update Service');
          $('#saveButton').text('Save Change');
          $('input[name=title]').val(data.title);
          $('input[name=image1]').val(data.url);
          $('input[name=id]').val(id);
          $('textarea[name=description]').val(data.description);
          $('#open_model').modal('show');
          action_type = 2;
        }
      });
    }
     function Delete(id){
      var r = confirm("Are you sure");
      if (r == true) {
      $.ajax({
        url : '/admin/deleteService/'+id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
          toastr.success('Service Delete Successfully', 'Successfully Delete');
          $('.zero-configuration').load(location.href+' .zero-configuration');
        }
      });
      } 
     }
    
</script>

@endsection


@else
  <?php
  Session::flash ( 'message', "Your Session has Expired! , Please Login Again." );
        echo redirect('login'); ?>
@endif