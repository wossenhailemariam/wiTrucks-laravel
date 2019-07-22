<!--footer-->

<div class="footer">
    <div class="footer-content">
        <div class="footer-section about">
            <h1 class="logo-text">{{ config('app.name','WiTrucks') }}</h1>
            <p>"We operate out of 300+ locations with 100,000+ trucks on the platform
                to ensure instant availability of trucks and timely placement of your shipment"
            </p>
            <div class="contact">
                <span>Phone:</span><span></i>&nbsp; 491-6288-64258</span><br>
                <span>Website:</span><span>&nbsp; info@witrucks.com</span>
            </div>
            <div class="socials">
                    <a href="https://www.facebook.com/Trucks/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="https://plus.google.com/"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    <a href="https://www.linkedin.com/feed/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/trucks/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </div>
        </div>
        <!-- all information page-->
        <div class="footer-section links">
            <h2>WiTrucks Links</h2>
            <br>
            <ul>
                <a href="#"><li>Events</li></a>
                <a href="#"><li>Team</li></a>
                <a href="#"><li>Mentors</li></a>
                <a href="#"><li>Gallery</li></a>
                <a href="#"><li>Collection</li></a>
                <a href="#"><li>Companies</li></a>
                <a href="#"><li>Terms and Conditions</li></a>

            </ul>
        </div>
        <div class="footer-section contact-message">
            <h2>
                Contacts Messages
            </h2>
            <p>
                Send us, any improvements you want to see.<br>
                Our WiTrucks team always work to improbve.
            </p>
            {!! Form::open(['action'=>'MessagesController@store', 'method'=>'POST']) !!}
            <div class="message-box">
                {{ Form::text('subject','',['class'=>'contact-input-subject','placeholder'=>'...about..']) }}
                {{ Form::textarea('message','',['class'=>'contact-input-message','placeholder'=>'message...']) }}
                {{ Form::submit('Send Message',['class'=>'btn btn-default align-right send']) }}
            </div>
            {!! Form::close() !!}
        </div>


    </div>
    <div class="footer-bottom">
         &copy; witrucks.com | Designed by Wossen Hailemariam | w.hailemariam@jacobs-university.de
    </div>


</div>


