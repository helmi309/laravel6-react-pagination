@extends('layouts.app')

@section('title','Pagination using Laravel and React Demo -')


@section('content')
<div  class="uk-container uk-margin"> 
    <div class="uk-grid uk-margin-top uk-flex-center"  data-ukgrid> 
        <div class="uk-width-1-1">
            <h3 class="uk-heading-line uk-text-center uk-text-bold uk-margin m-b-50">
                <span>Pagination using Laravel and React - Demo</span>
            </h3>
        </div>
      
        <!-- Inject React Infinite Scroll Component --> 
        <div class="uk-width-3-4" id="react-pagination"></div>

    </div>
</div>
    
@stop