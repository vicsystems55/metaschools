
@extends('layouts.app')

@section('content')

<section class="bg-home bg-dark " id="">
    <section class="sign-in section" style="background: url({{config('app.url')}}images/log-in/signin.png) center;">
        <div class="container">
            <div class="py-5 log-content ">
                <div class="row ">
                    
                    <div class="col-lg-6 offset-lg-1">
                        <div class=" p-5">
                            <h3 class=" mb-0 fw-bold text-white">Let's get your started with <span class="text-success">{{ucfirst($package)}} Package</span></h3>
                     
    
                            <form  method="POST" action="{{ route('pay') }}" class="login-form mt-4">

                                @csrf
                                <div class="col-md-12">
                                    <div class="position-relative">
                                    
                                        <input type="text" class="form-control rounded-pil" id="validationCustom001" placeholder='School Name' name="name" value="" required>
                                        <div class="login-icon position-absolute top-50 translate-middle-y">
                                            <i class="mdi mdi-account ps-3 f-20"></i>
                                        </div>
                                        <div class="valid-feedback text-white">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
    
                                <div class="col-md-12 mt-4">
                                    <div class="position-relative">
                                        <input type="email" name="email" class="form-control rounded-pil" id="validationEmail" placeholder='Email' value="" required>
                                        <div class="login-icon position-absolute top-50 translate-middle-y">
                                            <i class="mdi mdi-email ps-3 f-20"></i>
                                        </div>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 mt-4">
                                    <div class="position-relative">
                                        <input type="text" class="form-control rounded-pil" id="validationEmail" placeholder='Address' name="address" value="" required>
                                        <div class="login-icon position-absolute top-50 translate-middle-y">
                                            <i class="mdi mdi-map-marker ps-3 f-20"></i>
                                        </div>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
    
              
                                <div class="col-md-12 mt-4">
                                    <label for="rememberMe" class="text-white f-14">School Logo</label>
                                    <div class="">
                                        <div class="text-white ">
                                            <input type="file" name="school_logo" class="form-control-file"> 
                                          
                                        </div>
    
                                      
                                    </div>
                                </div>
                                <div class="col-md-12 mt-4">
                                    <div class="d-flex justify-content-between">
                                        <div class="text-start">
                                            <input type="checkbox" value="lsRememberMe" id="rememberMe"> <label for="rememberMe" class="text-muted f-14">Agree to terms of use</label>
                                            <div class="invalid-feedback">
                                                accept condition!
                                            </div>
                                        </div>
    
                                      
                                    </div>
                                   
                                </div>


                                <input type="hidden" name="package" value="{{ucfirst($package)}} Package">

           
                                <input type="hidden" name="orderID" value="345">

                                @if ($package == 'basic')
                                <input type="hidden" name="amount" value="0">
                               
                                @elseif($package == 'starter')
                                <input type="hidden" name="amount" value="1000000">
                               
                                @elseif($package == 'standard')
                                <input type="hidden" name="amount" value="1999999">
                                
                                @elseif($package == 'advanced')
                                <input type="hidden" name="amount" value="5000000">
                                
                                @endif
                     {{-- required in kobo --}}
                               
                                <input type="hidden" name="currency" value="NGN">
                                <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                                <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                                
                                <input type="hidden" name="callback_url" value="{{config('app.url')}}success">
                        
                    
                                <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}
                               

                                    @if ($package == 'basic')
                                    <button type="submit" class="btn btn-primary w-100 mt-4 shadow">Proceed 
                                        </button>
                                   
                                    @elseif($package == 'starter')
                                    <button type="submit" class="btn btn-primary w-100 mt-4 shadow">Proceed to pay 
                                         ₦ 10,000.00
                                        <i class="mdi mdi-cash ms-2"></i></button>
                                   
                                    @elseif($package == 'standard')
                                    <button type="submit" class="btn btn-primary w-100 mt-4 shadow">Proceed to pay 
                                        ₦ 19,999.99
                                        <i class="mdi mdi-cash ms-2"></i></button>
                                    
                                    @elseif($package == 'advanced')
                                    <button type="submit" class="btn btn-primary w-100 mt-4 shadow">Proceed to pay 
                                        ₦ 50,000.00
                                        <i class="mdi mdi-cash ms-2"></i></button>
                                    
                                    @endif

                            </form>


                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</section>
    
@endsection

