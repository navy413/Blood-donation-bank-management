@extends('layouts.index')
@section('title','Contact us')
@include('includes.index')
@section('content')

    <SECTION class="contact">
        <h2>Get in touch </h2>
        <div class="content">
            <p>
                We'd love to hear from you whether you have a question or any complaints about the website.
            </p>
        </div>
        <div class="contactContainer">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"> <i class="material-icons"> location_on</i>
                    </div>
                    <div class="txt">
                        <h3>Address</h3>
                        <p>
                            266 Abd El-Salam Aref St. El-Saraya <br> Alexandria <br>
                        </p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"> <i class="material-icons"> phone</i>
                    </div>
                    <div class="txt">
                        <h3>Phone</h3>
                        <p>
                            035869420
                        </p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="material-icons"> email</i>
                    </div>
                    <div class="txt">
                        <h3>Email</h3>
                        <p>
                            EGYbloodBank@temporary-mail.eg
                        </p>
                    </div>
                </div>
            </div>
            <div class="contactForm">
                <form>
                    <h3> Send us a message</h3>
                    <div class="inputBox">
                        <input type="text" name="" required="required">
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <textarea required="required"></textarea>
                        <span>Type your message...</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" name="" value="Send">
                    </div>
                </form>

            </div>

        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <img class="image"src="hands.jpg" alt="Blood">
    </SECTION>
@endsection
