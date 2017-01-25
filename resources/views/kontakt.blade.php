@extends('layouts.base-layout')

@section('content')

    <div class="global indent">
        <div class="container">
            <div class="map">
                <iframe width="600" height="450" frameborder="0" style="border:0"
                        src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJyW-RXOJcFkcR0XOavrwG1Js&key=AIzaSyANOlgA2_niuLlh-9SvtWkOXoBtDLQWAvs" allowfullscreen></iframe>        </div>
        </div>
        <div class="formBox">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <h2 class="center indent">Dane kontaktowe</h2>
                        <div class="info">
                            <h4>Adres:</h4>
                            <p>ul. Ketlinga 1, 30-389 Kraków</p>
                            <p>+ 48 535 001 087</p>

                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <h2 class="center indent">Formularz kontaktowy</h2>
                        <form id="contact-form">
                            <div class="contact-form-loader"></div>
                            <fieldset>
                                <label class="name form-div-1">
                                    <input type="text" name="name" placeholder="Imię:" value="" data-constraints="@Required @JustLetters"  />
                                    <span class="empty-message">*To pole jest wymagane.</span>
                                    <span class="error-message">*Wpisz swoje imię/nazwisko.</span>
                                </label>
                                <label class="email form-div-2">
                                    <input type="text" name="email" placeholder="E-mail:" value="" data-constraints="@Required @Email" />
                                    <span class="empty-message">*To pole jest wymagane..</span>
                                    <span class="error-message">*To nie jest prawidłowy adres e-mail.</span>
                                </label>
                                <label class="phone form-div-3">
                                    <input type="text" name="phone" placeholder="Telefon:" value="" data-constraints="@JustNumbers" />
                                    <span class="empty-message">*To pole jest wymagane.</span>
                                    <span class="error-message">*To nie jest prawidłowy numer telefonu.</span>
                                </label>
                                <label class="message form-div-4">
                                    <textarea name="message" placeholder="Wiadomość:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
                                    <span class="empty-message">*To pole jest wymagane.</span>
                                    <span class="error-message">*Wiadomość jest zbyt krótka.</span>
                                </label>
                                <!-- <label class="recaptcha"><span class="empty-message">*This field is required.</span></label> -->
                                <div>
                                    <a href="#" data-type="submit" class="btn-default btn1">wyślij</a>
                                </div>
                            </fieldset>
                            <div class="modal fade response-message">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title">Modal title</h4>
                                        </div>
                                        <div class="modal-body">
                                            Wiadomość została wysłana! Wkrótce na nią odpowiem.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection