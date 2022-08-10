
@extends('layouts.app')

@section('content')

<section class="bg-home bg-dark " id="">
    <section class="sign-in section" style="background: url({{config('app.url')}}images/log-in/signin.png) center;">
        <div class="container">
            <div class="py-5 log-content ">
                <div class="row ">
                    
                    <div class="col-lg-6 offset-lg-1">
                        <div class=" p-5">
                            <h3 class=" mb-0 text-white"> An email has been sent to you with details to proceed. <span class="text-success"> <br>🎉 <br> Thanks for signing up with <br> Meta Schools.</span></h3>
                     
    
                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</section>
    
@endsection

