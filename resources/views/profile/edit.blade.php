@extends('layouts.dashMaster')

@section('content')


    <div class="row mt-5 p-3">
        <div class="col-md-12">
            
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg rounded">
                    @include('profile.partials.update-profile-information-form')
                </div>
            

         
        </div>
    </div>

    <div class="row mt-5 p-3">
        <div class="col-md-12">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg rounded">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

        
        </div>
    </div>

    <!-- <div class="row mt-5 p-3">
        <div class="col-md-12">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg rounded">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div> -->

  


@endsection