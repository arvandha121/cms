@extends('layouts.masterlayout')

@section('header')
<header class="tm-site-header">
    <h1 class="tm-site-name">Shelf</h1>
    <p class="tm-site-description">Your Online Bookstore</p>
    
    <nav class="navbar navbar-expand-md tm-main-nav-container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#tmMainNav" aria-controls="tmMainNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse tm-main-nav" id="tmMainNav">
            <ul class="nav nav-fill tm-main-nav-ul">
                <li class="nav-item"><a class="nav-link" href="home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="preview">Catalogs</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Awards</a></li>
                <li class="nav-item"><a class="nav-link" href="our-team">Our Team</a></li>
                <li class="nav-item"><a class="nav-link active" href="#" style="pointer-events:none">Contact Us</a></li>
            </ul>
        </div>    
    </nav>
    
</header>
@endsection

@section('content')
<div class="tm-main-content">
    <section class="row tm-margin-b-l">
        <div class="col-12">
            <h2 class="tm-blue-text tm-margin-b-p">Contact Us</h2>
        </div>
        <div class="col-md-6 col-sm-12 mb-md-0 mb-5 tm-overflow-auto">         
            <div class="mr-lg-5">
                <!-- contact form -->
                <form action="#" method="post" class="tm-contact-form">
                    <div class="form-group">
                        <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name"  required/>
                    </div>
                    <div class="form-group">                                                        
                        <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email"  required/>
                    </div>
                    <div class="form-group">
                        <textarea id="contact_message" name="contact_message" class="form-control" rows="8" placeholder="Message" required></textarea>
                    </div>
                    <button type="submit" class="tm-btn tm-btn-blue float-right">Submit</button>
                </form>                          
            </div>                                       
        </div>
        <div class="col-md-6 col-sm-12">
            <p class="tm-margin-b-p">Morbi auctor euismod dictum. Morbi eu nibh in nulla interdum placerat. Donec pellentesque est at sem aliquam hendrerit.</p>
            <address>
                <span class="tm-blue-text">Mailing Address</span><br>
                1126 Aenean ac mauris at ex,<br>
                venenatis lobortis id in 11600 <br><br>
                <div class="tm-blue-text">          
                    Email: <a class="tm-blue-text" href="mailto:info@company.com">info@company.com</a
                    ><br>
                    Tel: <a class="tm-blue-text" href="tel:+66100200120">010-020-0120</a><br>
                    Fax: <a class="tm-blue-text" href="tel:+66900800980">090-080-0980</a><br>    
                </div>                            
            </address>
            
        </div>
    </section>

    <section class="row tm-margin-b-l">
        <div class="col-12">
            <header>
                <h4 class="tm-blue-text tm-margin-b">Our Location</h4>
            </header>
            <div id="google-map"></div>
        </div>
    </section>

    <section class="media tm-highlight tm-highlight-w-icon">

        <div class="tm-highlight-icon">
            <i class="fa tm-fa-6x fa-meetup"></i>    
        </div>                    

        <div class="media-body">
            <header>
                <h2>Need Help?</h2>
            </header>
            <p class="tm-margin-b">Curabitur magna tellus, condimentum vitae consectetur id, elementum sit amet erat. Phasellus arcu leo, sagittis fringilla nisi et, pulvinar vestibulum mi. Maecenas mollis ullamcorper est at dignissim.</p>
            <a href="" class="tm-white-bordered-btn">Live Chat</a>
        </div>                    
    </section>
</div>
@endsection

@section('footer')
<footer>
    Copyright &copy; <span class="tm-current-year">2018</span> Shelf Company 
    
    - Designed by Tooplate
</footer>
@endsection