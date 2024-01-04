@extends('parent.parent-base')
@section('title','Day Care | Parent Dashboard')
@section('content')
<div class="s01" >
    <form>
      <fieldset>
        <legend style="font-size: 50px;text-align:center;">Discover the Amazing Day Care</legend>
      </fieldset>
      <div style="width: 80%; height: 60px; margin:auto;" class="inner-form">
        <div class="input-field first-wrap">
          <input id="search" type="text" placeholder="What are you looking for?" />
        </div>
        <div class="input-field second-wrap">
          <input id="location" type="text" placeholder="location" />
        </div>
        <div class="input-field third-wrap">
          <button class="btn-search" type="button">Search</button>
        </div>
      </div>
    </form>
  </div>

  <br><br>


  <div style="margin-top: 450px;" class="container-xl">
      <div class="row">
          <div class="col-md-12">
              <h2>Featured <b>Day Care</b></h2>

          </div>
      </div>
  </div>
@endsection