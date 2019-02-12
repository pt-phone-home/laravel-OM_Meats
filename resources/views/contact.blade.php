@extends('master')

@section('title')
Contact | O'Mahoney Meats Ltd.
@endsection

@section('content')
    <div class="contact-title-container">
        <div class="contact-title">
            <h1 class="contact-title-heading">
                Contact Us
            </h1>
        </div>
    </div>
    <div class="contact-container">
        <div class="contact">

            <div class="contact-phone">
                <p><i class="fas fa-phone-volume"></i> Call us at our office on: 01-8476000</p>
            </div>
            <div class="contact-email contact-email-1">
                <h2 class="contact-email-heading"> General Enquiries</h2>
                <p class="contact-email-info">Email us <i class="fas fa-at"></i> info@ommeats.ie</p>
            </div>
            <div class="contact-email contact-email-2">
                <h2 class="contact-email-heading"> Order Enquiries</h2>
                <p class="contact-email-info">Email us <i class="fas fa-at"></i> orders@ommeats.ie</p>
            </div>

            <div class="contact-team contact-maryse">
                <div class="contact-team-img">
                    <img src="https://via.placeholder.com/100" alt="">
                </div>
                <div class="contact-team-info">
                    <h3 class="contact-team-info-heading">Contact Maryse</h3>
                    <p><i class="fas fa-phone"></i>0872864205</p>
                    <p><i class="fas fa-at"></i>maryse@ommeats.ie</p>
                </div>
            </div>
            <div class="contact-team contact-kieran">
                <div class="contact-team-img">
                    <img src="https://via.placeholder.com/100" alt="">
                </div>
                <div class="contact-team-info">
                    <h3 class="contact-team-info-heading">Contact Kieran</h3>
                    <p><i class="fas fa-phone"></i>0872633614</p>
                    <p><i class="fas fa-at"></i>kieran@ommeats.ie</p>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('scripts')

@endsection