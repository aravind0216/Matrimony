@if (session()->get('name'))
@extends('includes.layout1')

@section('body')		
<!-- BEGIN BREADCRUMBS-->
        <nav class="breadcrumbs">
          <div class="container">
            <ul>
              <li class="breadcrumbs__item"><a href="" class="breadcrumbs__link">Home</a></li>
              <li class="breadcrumbs__item"><a href="" class="breadcrumbs__link">Filter</a></li>
            </ul>
          </div>
        </nav>
<!-- BEGIN CENTER SECTION-->
        <div class="center">
          <div class="container">
            <div class="row">

<div class="widget js-widget widget--landing">
          <div class="widget__content">
            <form method="post" action="search" class="form form--flex form--search js-search-form form--wide form--wide-default">
              {{ csrf_field() }}
                <div class="row">
                    <div class="form-group">
                      <?php if(session()->get('gender')=="Male"){?>
                        <input value="Female" type="Hidden" name="gender" id="gender">
                      <?php } else{ ?>
                        <input value="Male" type="Hidden" name="gender" id="gender">
                      <?php } ?>
                        <input value="{{session()->get('star')}}" type="Hidden" name="yourstar" id="yourstar">
                        <label class="control-label">Age From</label>
                        <input value="<?php echo old('agefrom'); ?>" type="text" id="agefrom" name="agefrom" placeholder="Age From" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Age To</label>
                        <input value="<?php echo old('ageto'); ?>" type="text" name="ageto" id="ageto" placeholder="Age To" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Caste</label>
                        <select id="subcaste" name="subcaste" data-placeholder="-SELECT-" class="form-control">
@if (old('subcaste') != "")
<option value="<?php echo old('subcaste'); ?>"><?php echo old('subcaste'); ?></option>
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
                        <select id="education" name="education" data-placeholder="-Select-" class="form-control js-in-select">
@if (old('education') != "")
<option value="<?php echo old('education'); ?>"><?php echo old('education'); ?></option>
@else
      <option value="">-Select-</option>
@endif
                            <?php  foreach ($education as $educations) { ?>
                            <option><?php echo $educations->education; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Star</label>
                        <select id="star" name="star" data-placeholder="-Select-" class="form-control js-in-select">
@if (old('star') != "")
<option value="<?php echo old('star'); ?>"><?php echo old('star'); ?></option>
@else
      <option value="">-Select-</option>
@endif
                            <?php  foreach ($star as $stars) { ?>
                            <option value="<?php echo $stars->id; ?>"><?php echo $stars->star; ?></option>
                           <?php } ?>
                        </select>
                    </div>
                        
                    <div class="form__buttons form__buttons--double">
                        <button type="button" class="form__reset js-form-reset">Reset</button>
                        <button type="submit" class="form__submit">Search</button>
                    </div>
                </div>
            </form>
          </div>
        </div>


              <!-- BEGIN LISTING-->
              <div class="site site--main">
                <header class="site__header">
                  <!-- <h1 class="site__title">FILTER</h1> -->
                </header>
                
                
                <div class="site__main">
                  <div class="widget js-widget widget--main">
                    <div class="widget__content">
                      <div class="listing listing--grid">
<?php if ( !empty ( $profile ) ) { 
  foreach ($profile as $row) { ?>
    <div class="listing__item">
      <div class="properties properties--grid">
        <!-- <div class="properties__header"><span class="properties__state properties__state--hidden">Hidden</span>
          <div class="properties__right">
            <button class="properties__link">Edit</button>
            <button class="properties__link">Delete</button>
          </div>
        </div> -->

<div class="properties__thumb">
  @if(session()->get('plan') =="1")
      @if(session()->get('plan') =="1" && $viewcount <= '20')
      <a href="viewprofile\<?php echo $row->id; ?>" class="item-photo item-photo--static">
      @else
      <a id="expire" href="javascript:void(0)" class="item-photo item-photo--static">
      @endif
  @elseif(session()->get('plan') =="2")
      @if(session()->get('plan') =="2" && $viewcount <= '40')
      <a href="viewprofile\<?php echo $row->id; ?>" class="item-photo item-photo--static">
      @else
      <a id="expire" href="javascript:void(0)" class="item-photo item-photo--static">
      @endif
  @else
  <a id="nodata" href="javascript:void(0)" class="item-photo item-photo--static">
  @endif

<?php if($row->url != ""){ ?>
    <img style="width: 277px;height: 180px;" src="{{asset('uploads/').'/'.$row->url}}" alt="">
<?php } else{ ?>
  <svg>
    <use xlink:href="#icon-avatar"></use>
  </svg>
<?php } ?>
                                
    <figure class="item-photo__hover">
      <span class="item-photo__more">View Details</span>
    </figure>
  </a>
</div>

<div class="properties__info">
    <a href="#" class="properties__address properties__address--simple">
    <span class="properties__address-street"><?php echo $row->name; ?> (<?php echo $row->userid; ?>)</span>
    <span class="properties__address-city"><?php echo $row->age; ?> Yrs</span>
    <span class="properties__address-city"><?php echo $row->subcaste; ?></span>
    <span class="properties__address-city"><?php echo $row->education; ?></span>
    <span class="properties__address-city"><?php echo $row->district; ?></span>
    </a>
</div>
                          
    </div>
  </div>
<?php } } else { ?>
	<h2 class="site__headline">No Results</h2>
<?php } ?>
                                                
        </div>

<center>{{ $profile->links() }}</center>

      </div>
    </div>
  </div>
</div>                

<!-- END LISTING-->

<!-- BEGIN SIDEBAR-->
@include('customer.sidebar')
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