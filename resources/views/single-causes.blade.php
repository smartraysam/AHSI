@extends('layouts.applanding')

@section('content')

    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>The Cause</h1>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .page-header -->

    <div class="highlighted-cause">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7 order-2 order-lg-1">
                    <div class="section-heading">
                        <h2 class="entry-title">We love to help all the children that have problems in the world. After 15 years we have many goals achieved.</h2>
                    </div><!-- .section-heading -->

                    <div class="entry-content mt-5">
                        <p>Dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris quis aliquam. Lorem ipsum dolor sit amet.</p>
                    </div><!-- .entry-content -->

                    <div class="fund-raised w-100 mt-5">
                        <div class="featured-fund-raised-bar barfiller">
                            <div class="tipWrap">
                                <span class="tip"></span>
                            </div><!-- .tipWrap -->

                            <span class="fill" data-percentage="83"></span>
                        </div><!-- .fund-raised-bar -->

                        <div class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                            <div class="fund-raised-total mt-4">
                                Raised: $56 880
                            </div><!-- .fund-raised-total -->

                            <div class="fund-raised-goal mt-4">
                                Goal: $70 000
                            </div><!-- .fund-raised-goal -->
                        </div><!-- .fund-raised-details -->
                    </div><!-- .fund-raised -->

                    <div class="entry-footer mt-5">
                        <a href="#" class="btn gradient-bg">Donate Now</a>
                    </div><!-- .entry-footer -->
                </div><!-- .col -->

                <div class="col-12 col-lg-5 order-1 order-lg-2">
                    <img src="images/oshomah.jpg" alt="">
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .highlighted-cause -->

    <div class="short-content-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="short-content">
                        <h3 class="entry-title">Description</h3>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris. Lorem ipsum dolor sit amet, consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam. Integer accumsan sodales odio, id tempus velit ullamc.</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="short-content">
                        <h3 class="entry-title">Additional Information</h3>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam. Integer accumsan sodales odio, id tempus velit ullamcorper id. Quisque at erat eu libero consequat tempus. Quisque molestie convallis tempus. Ut semper purus metus.</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="short-content">
                        <h3 class="entry-title">Our Goal</h3>

                        <p>Integer accumsan sodales odio, id tempus velit ullamcorper id. Quisque at erat eu libero consequat tempus. Quisque molestie convallis tempus. Ut semper purus metus, a euismod sapien sodales ac. Duis viverra eleifend fermentum. Donec sagittis lacus sit amet augue sodales, vel cursus enim.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="donation-form-wrap">
                    <h2>Make a donation</h2>

                    <h4 class="mt-5">How much do you want to donate?</h4>

                    <form class="donation-form">
                        <div class="donate-amount-wrap d-flex flex-wrap align-items-center mt-5">
                            <label class="radio-label">
                                <input type="radio" name="donation_amount" value="10" />
                                <span class="donate-amount">$10</span>
                            </label>

                            <label class="radio-label">
                                <input type="radio" name="donation_amount" value="20" />
                                <span class="donate-amount">$20</span>
                            </label>

                            <label class="radio-label">
                                <input type="radio" name="donation_amount" value="25" checked="checked"/>
                                <span class="donate-amount">$25</span>
                            </label>

                            <label class="radio-label">
                                <input type="radio" name="donation_amount" value="50" />
                                <span class="donate-amount">$50</span>
                            </label>

                            <label class="radio-label">
                                <input type="radio" name="donation_amount" value="100" />
                                <span class="donate-amount">$100</span>
                            </label>

                            <label class="radio-label">
                                <input type="radio" name="donation_amount" value="custom" />
                                <span class="donate-amount">Other Amount</span>
                            </label>
                        </div>

                        <div class="payment-type d-flex flex-wrap align-items-center">
                            <h4 class="w-100 mt-5">Payment Type</h4>

                            <label class="d-flex align-items-center mt-4">
                                <input type="radio" name="payment_type" value="One time" />
                                <span class="payment-type-radio"></span>
                                <span class="centered-dot"></span>

                                One time
                            </label>

                            <label class="d-flex align-items-center mt-4">
                                <input type="radio" name="payment_type" value="Recurring" checked="checked" />
                                <span class="payment-type-radio"></span>
                                <span class="centered-dot"></span>

                                Recurring
                            </label>
                        </div>

                        <div class="billing-information  d-flex flex-wrap justify-content-between align-items-center">
                            <h4 class="w-100 mt-5 mb-3">Billing Information</h4>

                            <input type="text" placeholder="Name">
                            <input type="email" placeholder="E-mail">
                            <input type="text" placeholder="Address">
                            <input type="text" placeholder="City">
                            <input type="number" placeholder="Postcode">
                            <input type="text" placeholder="Country">
                        </div>

                        <div class="payment-type d-flex flex-wrap align-items-center">
                            <h4 class="w-100 mt-5">Payment Method</h4>

                            <label class="d-flex align-items-center mt-4">
                                <input type="radio" name="payment_method" value="Credit Card" />
                                <span class="payment-type-radio"></span>
                                <span class="centered-dot"></span>

                                Credit Card
                            </label>

                            <label class="d-flex align-items-center mt-4">
                                <input type="radio" name="payment_method" value="PayPal" checked="checked" />
                                <span class="payment-type-radio"></span>
                                <span class="centered-dot"></span>

                                PayPal
                            </label>
                        </div>

                        <input class="btn gradient-bg mt-5" type="submit" value="Donate Now">
                    </form>
                </div>
            </div>
        </div>
    </div>
 
@endsection
