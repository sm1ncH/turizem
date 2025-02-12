
<form id="contactForm" action="{{ route('submit-contact-form') }}" method="POST">
@csrf
<!-- Name input-->
<div class="">
    <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" name="name" />
    <label for="name">Ime in priimek</label>
</div>
<!-- Email address input-->
<div class="">
    <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" name="email" />
    <label for="email">Email naslov</label>
</div>

    <div class="">
        <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." data-sb-validations="required" name="body"></textarea>
        <label for="message">Sporočilo</label>
    </div>
    
    <input type="hidden" name="botsi">
    <div class="d-grid"><button class="btn btn-primary btn-lg" id="submitButton" type="submit">Pošlji</button></div>
</form>