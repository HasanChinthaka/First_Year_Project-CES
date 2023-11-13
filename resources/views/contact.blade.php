@extends ('layout')
@section ('content')
<div class="page-wrapper">    
    <main class="page-main">
      <div class="page-head">
        <div class="page-head__bg" style="background-image: url(./assets/img/bg/bg_contacts.jpg)">
          <div class="page-head__content" data-uk-parallax="y: 0, 100">
            <div class="uk-container">
              <div class="header-icons"><span></span><span></span><span></span></div>
              <div class="page-head__title"> Contact Us</div>
              <div class="page-head__breadcrumb">
                <ul class="uk-breadcrumb">
                  <li><a href="#">Home</a></li>
                  <li><span>Contact Us</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="page-content">
        <div class="uk-section-large uk-container">
          <div class="contacts-block">
            <div class="uk-grid uk-grid-collapse" data-uk-grid>
              <div class="uk-width-1-3@m">
                <div class="sidebar">
                  <div class="widjet widjet-contacts">
                    <h4 class="widjet__title">Contact Details</h4>
                    <ul class="contacts-list">
                      <li class="contacts-list-item">
                        <div class="contacts-list-item__icon"><img src="./assets/img/icons/ico-contact-1.svg" data-uk-svg alt="HeadOffice Address"></div>
                        <div class="contacts-list-item__desc">
                          <div class="contacts-list-item__label">HeadOffice Address</div>
                          <div class="contacts-list-item__content">Mihintale, Anuradhapura</div>
                        </div>
                      </li>
                      <li class="contacts-list-item">
                        <div class="contacts-list-item__icon"><img src="./assets/img/icons/ico-contact-2.svg" data-uk-svg alt="For Rental Support"></div>
                        <div class="contacts-list-item__desc">
                          <div class="contacts-list-item__label">For Custom Support</div>
                          <div class="contacts-list-item__content"><a>+94 xx xxx xxxx</a></div>
                        </div>
                      </li>
                      <li class="contacts-list-item">
                        <div class="contacts-list-item__icon"><img src="./assets/img/icons/ico-contact-3.svg" data-uk-svg alt="The Office Hours"></div>
                        <div class="contacts-list-item__desc">
                          <div class="contacts-list-item__label">The Office Hours</div>
                          <div class="contacts-list-item__content">Mon - Sat 8am to 6pm</div>
                        </div>
                      </li>
                      <li class="contacts-list-item">
                        <div class="contacts-list-item__icon"><img src="./assets/img/icons/ico-contact-4.svg" data-uk-svg alt="Send Us Email"></div>
                        <div class="contacts-list-item__desc">
                          <div class="contacts-list-item__label">Send Us Email</div>
                          <div class="contacts-list-item__content"> <a href="mailto:support@ces.lk">support@ces.lk</a></div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="uk-width-2-3@m">
                <div class="block-form">
                  <div class="section-title">
                    <div class="uk-h2">Send a Message</div>
                  </div>
                  <div class="section-content">
                    <p>Your email address will not be published. Required fields are marked with *</p>
                    <form action="#!">
                      <div class="uk-grid uk-grid-small uk-child-width-1-2@s" data-uk-grid>
                        <div><input class="uk-input uk-form-large" type="text" placeholder="Name *"></div>
                        <div><input class="uk-input uk-form-large" type="text" placeholder="Email *"></div>
                        <div class="uk-width-1-1"><input class="uk-input uk-form-large" type="text" placeholder="Subject"></div>
                        <div class="uk-width-1-1"><textarea class="uk-textarea uk-form-large" placeholder="Your Message"></textarea></div>
                        <div><button class="uk-button uk-button-large" type="submit"> <span>Send message</span><img src="./assets/img/icons/arrow.svg" alt="arrow" data-uk-svg></button></div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="contacts-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3947.4382436184283!2d80.50908987457973!3d8.358476299125181!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afc8a6fe65383cd%3A0xec7700cd1e49c64d!2sMihintale%20Junction!5e0!3m2!1sen!2slk!4v1698526357604!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
        </div>
      </div>      
    </main>
</div>
@endsection