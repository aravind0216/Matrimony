@if (session()->get('name'))


@extends('includes.layout1')

@section('body')		
<!-- BEGIN BREADCRUMBS-->
        <nav class="breadcrumbs">
          <div class="container">
            <ul>
              <li class="breadcrumbs__item"><a href="" class="breadcrumbs__link">Home</a></li>
              <li class="breadcrumbs__item"><a href="" class="breadcrumbs__link">Profile</a></li>
            </ul>
          </div>
        </nav>
<!-- BEGIN CENTER SECTION-->
        <div class="center">
          <div class="container">
            <div class="row">
              <header class="site__header">
                <h1 class="site__title site__title--center">Update Your Profile</h1>
              </header>
<!-- BEGIN LISTING-->
              

<div class="site site--main">
<!-- @if (count($errors) > 0)
  <div class="alert alert-danger">
     Image Validation Error<br><br>
     <ul>
      @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
      @endforeach
     </ul>
  </div>
@endif   -->              

<div class="site__main">
<?php foreach ($profile as $row) { ?>
<form  class="form form--flex form--property-add js-form js-form-property" method="post" id="registerform" action="/adminprofileUpdate" enctype="multipart/form-data">
  {{csrf_field()}}
  <input value="<?php echo $row->id; ?>" type="hidden" name="id" id="id">
    <div class="widget js-widget widget--main widget--no-margin widget--no-border widget--collapse">
        <div class="widget__header">
          <h2 class="widget__title">Basic information</h2>
          <h5 class="widget__headline">You should fill all this fields.</h5>
        </div>
        <div class="widget__content">
          <div class="row">
            <div class="form-group">
              <label class="control-label">User Id</label>
              <input readonly value="<?php echo $row->userid; ?>" id="userid" name="userid" type="text" placeholder="" class="form-control">
            </div>
            <div class="form-group">
              <label class="control-label">Profile For</label>
              <select id="profilefor" name="profilefor" data-placeholder="-Select-" class="form-control js-in-select">
                <option selected="" value="<?php echo $row->profilefor; ?>"><?php echo $row->profilefor; ?></option>
                <option value="Myself">Myself</option>
                <option value="Son">Son</option>
                <option value="Daughter">Daughter</option>
                <option value="Brother">Brother</option>
                <option value="Sister">Sister</option>
                <option value="Relative">Relative</option>
                <option value="Friend">Friend</option>
               </select>
            </div>
            <div class="form-group">
              <label class="control-label">Name</label>
              <input value="<?php echo $row->name; ?>" id="name" name="name" type="text" placeholder="" class="form-control">
            </div>

            <!-- <div class="form-group">
              <label class="control-label">Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" onchange="document.getElementById('password').type = this.checked ? 'text' : 'password'"> Show password</label> 
              <input readonly value="<?php //decrypt($row->password); ?>" id="password" name="password" type="password" placeholder="" class="form-control">
            </div> -->

            <div class="form-group">
              <label class="control-label">Gender</label>
              <select id="gender" name="gender" data-placeholder="-Select-" class="form-control js-in-select">
                <option value="<?php echo $row->gender; ?>"><?php echo $row->gender; ?></option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
            <div class="form-group">
              <label class="control-label">Age</label>
              <input value="<?php echo $row->age; ?>" id="age" name="age" type="text" placeholder="" class="form-control">
            </div>
            <div class="form-group">
              <label class="control-label">Religion</label>
              <select id="religion" name="religion" data-placeholder="-Select-" class="form-control js-in-select">
                <option value="">-Select-</option>
                <option <?php if ($row->religion == "Hindu") { echo ' selected="selected"'; } ?> value="Hindu">Hindu</option>
                <!-- <option <?php //if ($row->religion == "Christian") { echo ' selected="selected"'; } ?> value="Christian">Christian</option>
                <option <?php //if ($row->religion == "Muslim") { echo ' selected="selected"'; } ?> value="Muslim">Muslim</option> -->
              </select>
            </div>
            <div class="form-group">
              <label class="control-label">Caste</label>
              <select id="caste" name="caste" data-placeholder="-Select-" class="form-control js-in-select">
                <option value="<?php echo $row->caste; ?>"><?php echo $row->caste; ?></option>
                <option>Vellalar Pillai</option>
              </select>
            </div>
            <div class="form-group">
              <label class="control-label">Sub Caste</label>
              <select id="subcaste" name="subcaste" data-placeholder="-Select-" class="form-control js-in-select">
                <option value="<?php echo $row->subcaste; ?>"><?php echo $row->subcaste; ?></option>
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
                            <select id="education" name="education" data-placeholder="-Select-" class="form-control js-in-select">
                              <option value="">-Select-</option>
                              <?php  foreach ($education as $educations) { ?>
                               <option <?php if ($row->education == $educations->education) { echo ' selected="selected"'; } ?>><?php echo $educations->education; ?></option>
                              <?php } ?>
                            </select>
                          </div>

                          <div class="form-group form-group--col-3">
                            <label class="control-label">Educational Description</label>
                            <textarea style="height: 80px;" rows="2" id="educationdes" name="educationdes" data-parsley-trigger="keyup" data-parsley-minlength="100" data-parsley-validation-threshold="1" data-parsley-minlength-message="You need to enter at least a 100 caracters long comment.." class="form-control"><?php echo $row->educationdes; ?></textarea>
                          </div>

                          <div class="form-group">
                            <label class="control-label">Empolyed In</label>
                            <select id="empolyedin" name="empolyedin" data-placeholder="-Select-" class="form-control js-in-select">
                              <option value="">-Select-</option>
                              <option <?php if ($row->empolyedin == 'Government') { echo ' selected="selected"'; } ?>>Government</option>
                              <option <?php if ($row->empolyedin == 'Private') { echo ' selected="selected"'; } ?>>Private</option>
                              <option <?php if ($row->empolyedin == 'Busisness') { echo ' selected="selected"'; } ?>>Busisness</option>
                              <option <?php if ($row->empolyedin == 'Not Working') { echo ' selected="selected"'; } ?>>Not Working</option>
                            </select>
                          </div>

                          <div class="form-group">
                            <label class="control-label">Job Description</label>
                            <textarea style="height: 80px;" rows="2" id="jobdes" name="jobdes" data-parsley-trigger="keyup" data-parsley-minlength="50" data-parsley-validation-threshold="1" data-parsley-minlength-message="You need to enter at least a 50 caracters long comment.." class="form-control"><?php echo $row->jobdes; ?></textarea>
                          </div>
                          <div class="form-group">
                            <label class="control-label">Company Name</label>
                            <input value="<?php echo $row->companyname; ?>" type="text" name="compayname" id="compayname" class="form-control">
                          </div>
                          <div class="form-group">
                            <label class="control-label">Company Address</label>
                            <textarea style="height: 80px;" rows="2" id="company_address" name="company_address" class="form-control"><?php echo $row->company_address; ?></textarea>
                          </div>
                          <div class="form-group">
                            <label class="control-label">Annual Income</label>
                            <input value="<?php echo $row->income; ?>" type="text" name="income" id="income" class="form-control">
                          </div>
                          <div class="form-group">
                            <label class="control-label">Blood Group</label>
                            <select id="blood" name="blood" data-placeholder="-Select-" class="form-control js-in-select">
                              <option value="<?php echo $row->blood; ?>"><?php echo $row->blood; ?></option>
                              <option value="A+">A+</option>
                              <option value="O+">O+</option>
                              <option value="B+">B+</option>
                              <option value="AB+">AB+</option>
                              <option value="A-">A-</option>
                              <option value="O-">O-</option>
                              <option value="B-">B-</option>
                              <option value="AB-">AB-</option>
                              <option value="A1+">A1+</option>
                              <option value="A1B+">A1B+</option>
                              <option value="A2+">A2+</option>
                              <option value="A2B+">A2B+</option>
                              <option value="A1-">A1-</option>
                              <option value="A1B-">A1B-</option>
                              <option value="A2-">A2-</option>
                              <option value="A2B-">A2B-</option>
                              <option value="B1+">B1+</option>
                              <option value="donotknow">- Don't Know -</option>
                            </select>
                          </div>

                          <div class="form-group">
                            <label class="control-label">Martial Status</label>
                            <select id="martialstatus" name="martialstatus" data-placeholder="-Select-" class="form-control js-in-select">
                              <option value="<?php echo $row->martialstatus; ?>"><?php echo $row->martialstatus; ?></option>
                              <option>Un Married</option>
                              <option>Widow / Widower</option>
                              <option>Divorced</option>
                            </select>
                          </div>

                          <div class="form-group ">
                            <label class="control-label">Height</label>
                            <input value="<?php echo $row->height; ?>" type="text" name="height" id="height" class="form-control">
                          </div>

                          <div class="form-group ">
                            <label class="control-label">Weight</label>
                            <input <?php echo $row->weight; ?> type="text" name="weight" id="weight" class="form-control">
                          </div>
                          <div class="form-group">
                            <label class="control-label">Colour</label>
                            <select id="colour" name="colour" data-placeholder="-Select-" class="form-control js-in-select">
                              <option value="<?php echo $row->colour; ?>"><?php echo $row->colour; ?></option>
                              <option>Very Fair</option>
                              <option>Fair</option>
                              <option>Wheatish</option>
                              <option>Wheatish Brown</option>
                              <option>Dark</option>
                            </select>
                          </div>

                          <div class="form-group ">
                            <label class="control-label">Languages known</label>
                            <input <?php echo $row->language; ?> type="text" name="language" id="language" class="form-control">
                          </div>

                          <div class="form-group">
                            <label class="control-label">Physical Status</label>
                            <select id="physicalstatus" name="physicalstatus" data-placeholder="-Select-" class="form-control js-in-select">
                              <option value="<?php echo $row->physicalstatus; ?>"><?php echo $row->physicalstatus; ?></option>
                              <option>Normal</option>
                              <option>Physically Challenged</option>
                            </select>
                          </div>

                        </div>
                      </div>
                    </div>
                    
                    <div class="widget js-widget widget--main widget--no-margin widget--no-border widget--collapse">
                      <div class="widget__header">
                        <h2 class="widget__title">Address For Communication</h2>
                      </div>
                      <div class="widget__content">
                        <div class="row">
                          <div class="form-group">
                            <label class="control-label">Email ID</label>
                            <input value="<?php echo $row->email; ?>" type="email" name="email" id="email" class="form-control">
                          </div>

                          <div class="form-group">
                            <label class="control-label">Mobile Number</label>
                            <input readonly value="<?php echo $row->mobile; ?>" type="text" name="mobile" id="mobile" class="form-control">
                          </div>

                          <div class="form-group">
                            <label class="control-label">Alternate Mobile Number</label>
                            <input type="text" value="<?php echo $row->altmobile; ?>" name="altmobile" id="altmobile" class="form-control">
                          </div>
                          <div class="form-group form-group--col-12">
                            <label class="control-label">Address</label>
                            <textarea style="height: 80px;" rows="2" id="address" name="address" class="form-control"><?php echo $row->address; ?></textarea>
                          </div>
                          <div class="form-group ">
                            <label class="control-label">PinCode</label>
                            <input value="<?php echo $row->pincode; ?>" type="text" name="pincode" id="pincode" class="form-control">
                          </div>
                          <div class="form-group ">
                            <label class="control-label">District</label>
                            <input value="<?php echo $row->district; ?>" type="text" name="district" id="district" class="form-control">
                          </div>
                          <div class="form-group ">
                            <label class="control-label">State</label>
                            <input value="<?php echo $row->state; ?>" type="text" name="state" id="state" class="form-control">
                          </div>
                        </div>
                      </div>
                    </div>


                    <div class="widget js-widget widget--main widget--no-margin widget--no-border widget--collapse">
                      <div class="widget__header">
                        <h2 class="widget__title">Family Information</h2>
                      </div>
                      <div class="widget__content">
                        <div class="row">
                          <div class="form-group ">
                            <label class="control-label">Father's Name</label>
                            <input value="<?php echo $row->fathername; ?>" type="text" name="fathername" id="fathername" class="form-control">
                          </div>
                          <div class="form-group ">
                            <label class="control-label">Father's Occupation</label>
                            <input value="<?php echo $row->fatherwork; ?>" type="text" name="fatherwork" id="fatherwork" class="form-control">
                          </div>
                          <div class="form-group ">
                            <label class="control-label">Mother's Name</label>
                            <input value="<?php echo $row->mothername; ?>" type="text" name="mothername" id="mothername" class="form-control">
                          </div>
                          <div class="form-group ">
                            <label class="control-label">Mother's Occupation</label>
                            <input value="<?php echo $row->motherwork; ?>" type="text" name="motherwork" id="motherwork" class="form-control">
                          </div>
                          <div class="form-group ">
                            <label class="control-label">Native Place</label>
                            <input value="<?php echo $row->nativeplace; ?>" type="text" name="nativeplace" id="nativeplace" class="form-control">
                          </div>
                          <div class="form-group ">
                            <label class="control-label">Native District</label>
                            <input value="<?php echo $row->nativedistrict; ?>" type="text" name="nativedistrict" id="nativedistrict" class="form-control">
                          </div>

                          <div class="form-group form-group--col-3">
                            <label class="control-label">No Of Brother's</label>
                            <select id="noofbrothers" name="noofbrothers" data-placeholder="-Select-" class="form-control js-in-select">
                              <option value="">-Select-</option>
                              <?php for ($i=1; $i <= 10; $i++) {  ?>
                               <option <?php if ($row->noofbrothers == $i) { echo ' selected="selected"'; } ?>><?php echo $i; ?></option>
                              <?php } ?>
                            </select>
                          </div>

                          <div class="form-group form-group--col-3">
                            <label class="control-label">No Of Brother's Married</label>
                            <select id="noofbrothersmarried" name="noofbrothersmarried" data-placeholder="-Select-" class="form-control js-in-select">
                              <option value="">-Select-</option>
                              <?php for ($i=1; $i <= 10; $i++) {  ?>
                               <option <?php if ($row->noofbrothersmarried == $i) { echo ' selected="selected"'; } ?>><?php echo $i; ?></option>
                              <?php } ?>
                            </select>
                          </div>

                          <div class="form-group form-group--col-3">
                            <label class="control-label">No Of Sister's</label>
                            <select id="noofsisters" name="noofsisters" data-placeholder="-Select-" class="form-control js-in-select">
                              <option value="">-Select-</option>
                              <?php for ($i=1; $i <= 10; $i++) {  ?>
                               <option <?php if ($row->noofsisters == $i) { echo ' selected="selected"'; } ?>><?php echo $i; ?></option>
                              <?php } ?>
                            </select>
                          </div>

                          <div class="form-group form-group--col-3">
                            <label class="control-label">No Of Sister's Married</label>
                            <select id="noofsistersmarried" name="noofsistersmarried" data-placeholder="-Select-" class="form-control js-in-select">
                              <option value="">-Select-</option>
                              <?php for ($i=1; $i <= 10; $i++) {  ?>
                               <option <?php if ($row->noofsistersmarried == $i) { echo ' selected="selected"'; } ?>><?php echo $i; ?></option>
                              <?php } ?>
                            </select>
                          </div>

                          <div class="form-group ">
                            <label class="control-label">Family Status</label>
                            <input value="<?php echo $row->familystatus; ?>" type="text" name="familystatus" id="familystatus" class="form-control">
                          </div>

                        </div>
                      </div>
                    </div>

                    <div class="widget js-widget widget--main widget--no-margin widget--no-border widget--collapse">
                      <div class="widget__header">
                        <h2 class="widget__title">Astrological Information</h2>
                      </div>
                      <div class="widget__content">
                      <div class="row">
                        <div class="form-group form-group--col-3">
                            <label class="control-label">Star</label>
                            <select id="star" name="star" data-placeholder="-Select-" class="form-control js-in-select">
                              <option value="">-Select-</option>
                              <?php  foreach ($star as $stars) { ?>
                               <option <?php if ($row->star == $stars->id) { echo ' selected="selected"'; } ?> value="<?php echo $stars->id; ?>"><?php echo $stars->star; ?></option>
                              <?php } ?>
                            </select>
                        </div>
                        <div class="form-group form-group--col-3">
                            <label class="control-label">Rasi</label>
                            <select id="rasi" name="rasi" data-placeholder="-Select-" class="form-control js-in-select">
                              <option value="">-Select-</option>
                              <?php  foreach ($rasi as $rasis) { ?>
                               <option <?php if ($row->rasi == $rasis->id) { echo ' selected="selected"'; } ?> value="<?php echo $rasis->id; ?>"><?php echo $rasis->rasi; ?></option>
                              <?php } ?>
                            </select>
                        </div>
                        <div class="form-group form-group--col-3">
                            <label class="control-label">Laknam</label>
                            <select id="laknam" name="laknam" data-placeholder="-Select-" class="form-control js-in-select">
                              <option value="">-Select-</option>
                              <?php  foreach ($rasi as $rasis) { ?>
                               <option <?php if ($row->laknam == $rasis->id) { echo ' selected="selected"'; } ?> value="<?php echo $rasis->id; ?>"><?php echo $rasis->rasi; ?></option>
                              <?php } ?>
                            </select>
                        </div>
                        <div class="form-group--col-3">
                            <label class="control-label">Thisai Iruppu</label>
                            <select id="thisaiirupu" name="thisaiirupu" data-placeholder="-Select-" class="form-control js-in-select">
                              <option value="">-Select-</option>
                              <?php  foreach ($thisaiirupu as $thisaiirupus) { ?>
                               <option <?php if ($row->thisaiirupu == $thisaiirupus->id) { echo ' selected="selected"'; } ?> value="<?php echo $thisaiirupus->id; ?>"><?php echo $thisaiirupus->thisaiirupu; ?></option>
                              <?php } ?>
                            </select>
                        </div>
                        <div class="form-group--col-3 ">
                          <label class="control-label">Year</label>
                          <input value="<?php echo $row->year; ?>" type="text" name="year" id="year" class="form-control">
                        </div>
                        <div class="form-group--col-3 ">
                          <label class="control-label">Month</label>
                          <input value="<?php echo $row->month; ?>" type="text" name="month" id="month" class="form-control">
                        </div>
                        <div class="form-group--col-3 ">
                          <label class="control-label">Day</label>
                          <input value="<?php echo $row->day; ?>" type="text" name="day" id="day" class="form-control">
                        </div>
                      </div>  
<div class="row">
    <div style="text-align: center;" class="col-md-12"><br>ஜாதக கட்டம் : ஜாதக கட்டத்தை நிரப்ப கீழே உள்ள வார்த்தைகளை பயன்படுத்தவும்.</div>
</div>
<div class="row" style="margin-top: 1em;text-align:center;">
  <div class="col-xs-0 col-md-1 divborder1"></div>
  <div class="col-xs-6 col-md-2 divborder1" style="text-align:center;"><span class="col1">புதன் : </span><span class="col2">pu</span></div>
  <div class="col-xs-6 col-md-2 divborder1" style="text-align:center;"><span class="col1">சூரியன் : </span><span class="col2">sun</span></div>
  <div class="col-xs-6 col-md-2 divborder1" style="text-align:center;"><span class="col1">ராகு : </span><span class="col2">ragu</span></div>
  <div class="col-xs-6 col-md-2 divborder1" style="text-align:center;"><span class="col1">வியாழன் : </span><span class="col2">vij</span></div>
  <div class="col-xs-6 col-md-2 divborder1" style="text-align:center;"><span class="col1">சுக்கிரன் : </span><span class="col2">chk</span></div>
  <div class="col-xs-0 col-md-1 divborder1"></div>
</div>
<div class="row" style="margin-top: 1em;text-align:center;">
  <div class="col-xs-0 col-md-1 divborder1"></div>
  <div class="col-xs-6 col-md-2 divborder1" style="text-align:center;"><span class="col1">சனி : </span><span class="col2">sat</span></div>
  <div class="col-xs-6 col-md-2 divborder1" style="text-align:center;"><span class="col1">சந்திரன் : </span><span class="col2">chan</span></div>
  <div class="col-xs-6 col-md-2 divborder1" style="text-align:center;"><span class="col1">கேது : </span><span class="col2">kee</span></div>
  <div class="col-xs-6 col-md-2 divborder1" style="text-align:center;"><span class="col1">செவ்வாய் : </span><span class="col2">sev</span></div>
  <div class="col-xs-6 col-md-2 divborder1" style="text-align:center;"><span class="col1">லக்கனம் : </span><span class="col2">lac</span></div>
  <div class="col-xs-0 col-md-1 divborder1"></div>
</div>
          <div class="row">
            <div class="col-md-2 divborder1"></div>
            <div class=" col-xs-6 col-sm-6 col-md-4 divborder1 text-center">
                        <table border="0" cellpadding="5" style="border-collapse: collapse" height="200">
                          <tr>
                            <td height="50" width="50"><textarea style="overflow: hidden;" rows="3" cols="5" name="rasi1" id="rasi1"><?php echo $row->rasi1; ?></textarea></td>
                            <td height="50" width="50"><textarea style="overflow: hidden;" rows="3" cols="5" name="rasi2" id="rasi2"><?php echo $row->rasi2; ?></textarea></td>
                            <td height="50" width="50"><textarea style="overflow: hidden;" rows="3" cols="5"  name="rasi3" id="rasi3"><?php echo $row->rasi3; ?></textarea></td>
                            <td height="50" width="50"><textarea style="overflow: hidden;" rows="3" cols="5"  name="rasi4" id="rasi4"><?php echo $row->rasi4; ?></textarea></td>
                          </tr>
                          <tr>
                            <td height="50" width="50"><textarea style="overflow: hidden;" rows="3" cols="5"  name="rasi5" id="rasi5"><?php echo $row->rasi5; ?></textarea></td>
                            <td height="100" colspan="2" rowspan="2" align="center">ராசி</td>
                            <td height="50" width="50"><textarea style="overflow: hidden;" rows="3" cols="5" name="rasi6" id="rasi6"><?php echo $row->rasi6; ?></textarea></td>
                          </tr>
                          <tr>
                            <td height="50" width="50"><textarea style="overflow: hidden;" rows="3" cols="5" name="rasi7" id="rasi7"><?php echo $row->rasi7; ?></textarea></td>
                            <td height="50" width="50"><textarea style="overflow: hidden;" rows="3" cols="5" name="rasi8" id="rasi8"><?php echo $row->rasi8; ?></textarea></td>
                          </tr>
                          <tr>
                            <td height="50" width="50"><textarea style="overflow: hidden;" rows="3" cols="5" name="rasi9" id="rasi9"><?php echo $row->rasi9; ?></textarea></td>
                            <td height="50" width="50"><textarea style="overflow: hidden;" rows="3" cols="5" name="rasi10" id="rasi10"><?php echo $row->rasi10; ?></textarea></td>
                            <td height="50" width="50"><textarea style="overflow: hidden;" rows="3" cols="5" name="rasi11" id="rasi11"><?php echo $row->rasi11; ?></textarea></td>
                            <td height="50" width="50"><textarea style="overflow: hidden;" rows="3" cols="5" name="rasi12" id="rasi12"><?php echo $row->rasi12; ?></textarea></td>
                          </tr>
                        </table>
            </div>
            <div class=" col-xs-12 col-sm-6 col-md-4 divborder1 text-center">
                      <table border="0" cellpadding="5" style="border-collapse: collapse" height="200">
                          <tr>
                            <td><textarea style="overflow: hidden;" rows="3" cols="5" name="am1" id="am1"><?php echo $row->am1; ?></textarea></td>
                            <td><textarea style="overflow: hidden;" rows="3" cols="5" name="am2" id="am2"><?php echo $row->am2; ?></textarea></td>
                            <td><textarea style="overflow: hidden;" rows="3" cols="5"  name="am3" id="am3"><?php echo $row->am3; ?></textarea></td>
                            <td><textarea style="overflow: hidden;" rows="3" cols="5"  name="am4" id="am4"><?php echo $row->am4; ?></textarea></td>
                          </tr>
                          <tr>
                            <td><textarea style="overflow: hidden;" rows="3" cols="5"  name="am5" id="am5"><?php echo $row->am5; ?></textarea></td>
                            <td height="100" colspan="2" rowspan="2" align="center">அம்சம்</td>
                            <td><textarea style="overflow: hidden;" rows="3" cols="5" name="am6" id="am6"><?php echo $row->am6; ?></textarea></td>
                          </tr>
                          <tr>
                            <td><textarea style="overflow: hidden;" rows="3" cols="5" name="am7" id="am7"><?php echo $row->am7; ?></textarea></td>
                            <td><textarea style="overflow: hidden;" rows="3" cols="5" name="am8" id="am8"><?php echo $row->am8; ?></textarea></td>
                          </tr>
                          <tr>
                            <td><textarea style="overflow: hidden;" rows="3" cols="5" name="am9" id="am9"><?php echo $row->am9; ?></textarea></td>
                            <td><textarea style="overflow: hidden;" rows="3" cols="5" name="am10" id="am10"><?php echo $row->am10; ?></textarea></td>
                            <td><textarea style="overflow: hidden;" rows="3" cols="5" name="am11" id="am11"><?php echo $row->am11; ?></textarea></td>
                            <td><textarea style="overflow: hidden;" rows="3" cols="5" name="am12" id="am12"><?php echo $row->am12; ?></textarea></td>
                          </tr>
                        </table>
                  </div>
                <div class="col-md-2 divborder1"></div>
              </div>

<br>

                        <div class="row">

                          <div class="form-group ">
                            <label class="control-label">Date of Birth</label>
                            <input value="<?php echo $row->dateofbirth; ?>" type="text" name="dateofbirth" id="dateofbirth" class="form-control">
                          </div>
                          <div class="form-group ">
                            <label class="control-label">Place of Birth</label>
                            <input value="<?php echo $row->placeofbirth; ?>" type="text" name="placeofbirth" id="placeofbirth" class="form-control">
                          </div>
                          <div class="form-group ">
                            <label class="control-label">Time of Birth</label>
                            <input value="<?php echo $row->timeofbirth; ?>" type="text" name="timeofbirth" id="timeofbirth" class="form-control">
                          </div>

                        </div>
                      </div>
                    </div>
                    

                    <div class="widget js-widget widget--main widget--no-margin widget--no-border widget--collapse">

                        <div class="form-group form-group--col-12">
                            <?php if($row->url != ""){ ?>
                            <div class="properties__thumb">
                              <a href="{{asset('uploads/').'/'.$row->url}}" data-size="1168x550" class="js-gallery-item item-photo item-photo--static">
                              <img style="width: 500px;" src="{{asset('uploads/').'/'.$row->url}}" alt=""></a>
                            </div>
                            <?php } else{ ?>
                              <svg>
                                <use xlink:href="#icon-avatar"></use>
                              </svg>
                            <?php } ?>

                            <input value="<?php echo $row->url; ?>" type="hidden" name="url1" id="url1">
                        </div>


                      <div class="widget__header">
                        <h2 class="widget__title">Photos</h2>
                        <h5 class="widget__headline">Images should have maximum size 1Mb</h5>
                      </div>
                      <div class="widget__content">
                        <div class="form-property__upload"><span class="form-property__upload-title">Upload Profile photo:</span>
                          <div class="form-property__upload-border">
                            <input type="file" name="url" id="url" class="form-property__upload-btn-choose">
                          </div>
                        </div>
                        
                      </div>
                    </div>
  <h5 class="form-property__condition">If you have filled in all the fields and are confident of the correctness of all information, click on the button below to save data</h5>
  <div class="row">
    <button type="submit" class="form__submit">Update</button>
  </div>
</form>
<?php } ?>
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

@else
  <?php
  Session::flash ( 'message', "Your Session has Expired! , Please Login Again." );
        echo redirect('login'); ?>
@endif