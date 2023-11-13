@extends ('layout')
@section ('content')
<div class="page-wrapper">
    <main class="page-main">
      <div class="section-slideshow">
        <div class="uk-position-relative uk-light" tabindex="-1" data-uk-slideshow="animation: fade; min-height: 400; max-height: 700;">
          <ul class="uk-slideshow-items">
            <li class="slideshow-item"><img src="./assets/img/slideshow-1.jpg" alt data-uk-cover>
              <div class="slideshow-item__content">
                <div class="uk-position-center uk-position-small uk-text-center">
                  <div class="header-icons" data-uk-slideshow-parallax="x: -200,200"><span></span><span></span><span></span></div>
                  <p class="slideshow-item__desc" data-uk-slideshow-parallax="x: 200,-200">One-Stop Source For Creating An Estimate</p>
                  <h2 class="slideshow-item__title" data-uk-slideshow-parallax="x: -300,300">Estimate Excellence, <br> Construction Confidence</h2>
                </div>
              </div>
            </li>
            <li class="slideshow-item"><img src="./assets/img/slideshow-2.jpg" alt data-uk-cover>
              <div class="slideshow-item__content">
                <div class="uk-position-center uk-position-small uk-text-center">
                  <div class="header-icons" data-uk-slideshow-parallax="x: -200,200"><span></span><span></span><span></span></div>
                  <p class="slideshow-item__desc" data-uk-slideshow-parallax="x: 200,-200">One-Stop Source For Creating An Estimate</p>
                  <h2 class="slideshow-item__title" data-uk-slideshow-parallax="x: -300,300">Your Go-To Source For <br> Accurate Construction Quotes</h2>
                </div>
              </div>
            </li>
          </ul>
          <div class="uk-visible@m"><a class="uk-position-center-left uk-position-small" href="#" data-uk-slidenav-previous data-uk-slideshow-item="previous"></a><a class="uk-position-center-right uk-position-small" href="#" data-uk-slidenav-next data-uk-slideshow-item="next"></a></div>
        </div>
      </div>
      <div class="section-find">
        <div class="uk-container">
          <div class="find-box">
            <div class="find-box__title"> <span>Create Your Estimate</span></div>
            <div class="find-box__form">
                <div class="uk-grid uk-grid-medium uk-flex-middle uk-child-width-1-3@m uk-child-width-1-2@s" data-uk-grid>
                  <div>
                    <a href="{{url('create-estimate')}}">
                      <button class="uk-button uk-button-secondary uk-button-large uk-width-1-1"><span>Create My Estimate</span><img src="./assets/img/icons/arrow.svg" alt="arrow" data-uk-svg></button>
                    </a>
                    </div>
                </div>              
            </div>
          </div>
        </div>
      </div>
      <div class="section-category">
        <div class="uk-container">
          <div class="section-title uk-text-center">
            <div class="uk-text-meta">We Promise To Find You The Right Product</div>
            <div class="uk-h2">Browse Product Categories</div>
          </div>
          <div class="section-content">
            <div class="uk-grid uk-grid-medium uk-child-width-1-3@m uk-child-width-1-2@s" data-uk-grid>
              <div>
                <div class="category-item"> <a class="category-item__link uk-inline-clip uk-transition-toggle" href="page-categories-1.html" tabindex="0">
                    <div class="category-item__media"><img src="./assets/img/product/masonry.jpg" alt="Excavators" />
                      <div class="uk-transition-fade">
                        <div class="uk-overlay-primary uk-position-cover"></div>
                        <div class="uk-position-center"><span data-uk-icon="icon: plus; ratio: 2"></span></div>
                      </div>
                    </div>
                    <div class="category-item__title"> <span>Masonry</span></div>
                  </a></div>
              </div>
              <div>
                <div class="category-item"> <a class="category-item__link uk-inline-clip uk-transition-toggle" href="page-categories-1.html" tabindex="0">
                    <div class="category-item__media"><img src="./assets/img/product/wooden-frame.jpg" alt="Scissor Lift" />
                      <div class="uk-transition-fade">
                        <div class="uk-overlay-primary uk-position-cover"></div>
                        <div class="uk-position-center"><span data-uk-icon="icon: plus; ratio: 2"></span></div>
                      </div>
                    </div>
                    <div class="category-item__title"> <span>Wood and Framing</span></div>
                  </a></div>
              </div>
              <div>
                <div class="category-item"> <a class="category-item__link uk-inline-clip uk-transition-toggle" href="page-categories-1.html" tabindex="0">
                    <div class="category-item__media"><img src="./assets/img/product/metals.jpg" alt="forklift / Boomlift" />
                      <div class="uk-transition-fade">
                        <div class="uk-overlay-primary uk-position-cover"></div>
                        <div class="uk-position-center"><span data-uk-icon="icon: plus; ratio: 2"></span></div>
                      </div>
                    </div>
                    <div class="category-item__title"> <span>Metals</span></div>
                  </a></div>
              </div>
              <div>
                <div class="category-item"> <a class="category-item__link uk-inline-clip uk-transition-toggle" href="page-categories-1.html" tabindex="0">
                    <div class="category-item__media"><img src="./assets/img/product/roof.jpg" alt="Compaction Roller" />
                      <div class="uk-transition-fade">
                        <div class="uk-overlay-primary uk-position-cover"></div>
                        <div class="uk-position-center"><span data-uk-icon="icon: plus; ratio: 2"></span></div>
                      </div>
                    </div>
                    <div class="category-item__title"> <span>Roofing</span></div>
                  </a></div>
              </div>
              <div>
                <div class="category-item"> <a class="category-item__link uk-inline-clip uk-transition-toggle" href="page-categories-1.html" tabindex="0">
                    <div class="category-item__media"><img src="./assets/img/product/insulation.jpg" alt="Compaction Roller" />
                      <div class="uk-transition-fade">
                        <div class="uk-overlay-primary uk-position-cover"></div>
                        <div class="uk-position-center"><span data-uk-icon="icon: plus; ratio: 2"></span></div>
                      </div>
                    </div>
                    <div class="category-item__title"> <span>Insulation</span></div>
                  </a></div>
              </div>
              <div>
                <div class="category-item"> <a class="category-item__link uk-inline-clip uk-transition-toggle" href="page-categories-1.html" tabindex="0">
                    <div class="category-item__media"><img src="./assets/img/product/plumbing.jpg" alt="all types containers" />
                      <div class="uk-transition-fade">
                        <div class="uk-overlay-primary uk-position-cover"></div>
                        <div class="uk-position-center"><span data-uk-icon="icon: plus; ratio: 2"></span></div>
                      </div>
                    </div>
                    <div class="category-item__title"> <span>Plumbing</span></div>
                  </a></div>
              </div>
            </div>
            <div class="uk-margin-large-top uk-text-center"><a class="uk-button uk-button-default uk-button-large" href="{{url('products')}}"><span>More categories</span><img src="./assets/img/icons/arrow.svg" alt="arrow" data-uk-svg></a></div>
          </div>
        </div>
      </div>
      <div class="section-stats">
        <div class="uk-container uk-container-xlarge">
          <div class="uk-grid uk-child-width-1-4@l uk-child-width-1-2@s" data-uk-grid>
            <div>
              <div class="stats-item">
                <div class="stats-item__header">
                  <div class="stats-item__numb">3.4k</div>
                  <div class="stats-item__icon"><img src="./assets/img/icons/ico-stats-1.svg" data-uk-svg alt="Helping Projects Done"></div>
                </div>
                <div class="stats-item__title">Helping Projects Done</div>
                <div class="stats-item__desc">We're here to help you achieve your project goals efficiently and effectively.</div>
              </div>
            </div>
            <div>
              <div class="stats-item">
                <div class="stats-item__header">
                  <div class="stats-item__numb">25+</div>
                  <div class="stats-item__icon"><img src="./assets/img/icons/ico-stats-2.svg" data-uk-svg alt="Years In Rent Business"></div>
                </div>
                <div class="stats-item__title">Years In Expirince</div>
                <div class="stats-item__desc">With years of valuable experience in the industry, we bring a wealth of knowledge and expertise to every project.</div>
              </div>
            </div>
            <div>
              <div class="stats-item">
                <div class="stats-item__header">
                  <div class="stats-item__numb">18+</div>
                  <div class="stats-item__icon"><img src="./assets/img/icons/ico-stats-3.svg" data-uk-svg alt="Received Awards So far"></div>
                </div>
                <div class="stats-item__title">Received Awards So far</div>
                <div class="stats-item__desc">"Over the years, our dedication to excellence has been achieved with numerous awards and accolades.</div>
              </div>
            </div>
            <div>
              <div class="stats-item">
                <div class="stats-item__header">
                  <div class="stats-item__numb">5.9%</div>
                  <div class="stats-item__icon"><img src="./assets/img/icons/ico-stats-4.svg" data-uk-svg alt="Earned Revenue This Year"></div>
                </div>
                <div class="stats-item__title">Earned Revenue This Year</div>
                <div class="stats-item__desc">Our success is a testament to our clients' trust and our commitment to delivering exceptional value in every project.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section-about">
        <div class="uk-container">
          <div class="section-content">
            <div class="uk-grid uk-grid-large uk-child-width-1-2@m" data-uk-grid>
              <div><img src="./assets/img/img-about.jpg" alt="img-about"></div>
              <div>
                <div class="section-title">
                  <div class="uk-text-meta">About Construction Estimate System</div>
                  <div class="uk-h2">We Offer Smarter Access To <br> Create Construction Estimate</div>
                </div>
                <p>
                  Your application should be easy to use for both experienced construction professionals and novices. The interface should be clear and intuitive, and users should be able to quickly and easily generate accurate estimates.
                </p>                
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section-steps">
        <div class="uk-container uk-container-large">
          <div class="section-title uk-text-center">
            <div class="uk-text-meta">We Promise To Find You The Right Estimate</div>
            <div class="uk-h2">Get Your Construction Success In Easy Steps</div>
          </div>
          <div class="section-content">
            <div class="steps-list uk-position-relative" tabindex="-1" data-uk-slider="finite: true">
              <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l">
                <li>
                  <div class="steps-item">
                    <div class="steps-item__box">
                      <div class="steps-item__icon"><img src="./assets/img/icons/ico-step-1.png" alt="icon-step"></div>
                      <div class="steps-item__title"><b>1</b><span>Create Your Estimate</span></div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="steps-item">
                    <div class="steps-item__box">
                      <div class="steps-item__icon"><img src="./assets/img/icons/ico-step-2.png" alt="icon-step"></div>
                      <div class="steps-item__title"><b>2</b><span>Select Products</span></div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="steps-item">
                    <div class="steps-item__box">
                      <div class="steps-item__icon"><img src="./assets/img/icons/ico-step-3.png" alt="icon-step"></div>
                      <div class="steps-item__title"><b>3</b><span>Compare Products   </span></div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="steps-item">
                    <div class="steps-item__box">
                      <div class="steps-item__icon"><img src="./assets/img/icons/ico-step-4.png" alt="icon-step"></div>
                      <div class="steps-item__title"><b>4</b><span> Get Start Your Project</span></div>
                    </div>
                  </div>
                </li>
              </ul>
              <div class="uk-hidden@l">
                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium-top"></ul>
              </div>
            </div>
          </div>
        </div>
      </div>      
      <div class="section-why-choose-us">
        <div class="uk-container">
          <div class="uk-grid uk-grid-large uk-child-width-1-2@m uk-flex-middle" data-uk-grid>
            <div>
              <div class="blocks-icon uk-grid uk-grid-medium uk-child-width-1-2@s" data-uk-grid>
                <div>
                  <div class="block-icon">
                      <div class="block-icon__box">
                        <div class="block-icon__ico"><img src="./assets/img/icons/ico-why-choose-1.svg" alt="block-icon"></div>
                        <div class="block-icon__title">Accuracy</div>
                      </div>
                    </div>
                </div>
                <div>
                  <div class="block-icon">
                      <div class="block-icon__box">
                        <div class="block-icon__ico"><img src="./assets/img/icons/ico-why-choose-2.svg" alt="block-icon"></div>
                        <div class="block-icon__title">Efficiently</div>
                      </div>
                    </div>
                </div>
                <div>
                  <div class="block-icon">
                      <div class="block-icon__box">
                        <div class="block-icon__ico"><img src="./assets/img/icons/ico-why-choose-3.svg" alt="block-icon"></div>
                        <div class="block-icon__title">Cost Saving</div>
                      </div>
                    </div>
                </div>
                <div>
                  <div class="block-icon">
                      <div class="block-icon__box">
                        <div class="block-icon__ico"><img src="./assets/img/icons/ico-why-choose-4.svg" alt="block-icon"></div>
                        <div class="block-icon__title">Convenience</div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
            <div>
              <div class="section-title">
                <div class="uk-text-meta">Why Choose CES</div>
                <div class="uk-h2">Over 15,000+ Customers Is The Best Choice</div>
              </div>
              <div class="section-content">
                <p>Customers choose the Construction Estimate System to benefit from its accuracy, efficiency, 
                  cost savings, convenience, and the ability to make well-informed decisions about their construction projects.</p>
                <ul class="list-checked">
                  <li>Provide highly accurate cost estimates, reducing the risk of budget</li>
                  <li>Aving time and effort compared to manual calculations</li>
                  <li>Offering a detailed breakdown of costs and materials</li>
                  <li>Customers can access the system from anywhere with an internet connection</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>      
      <div class="section-reviews">
        <div class="uk-container">
          <div class="section-title uk-text-center">
            <div class="uk-text-meta">We Promise To Create Best Estimate For You</div>
            <div class="uk-h2">Read Customers Review</div>
          </div>
          <div class="section-content">
            <div data-uk-slider="autoplay: true">
              <div class="uk-position-relative" tabindex="-1">
                <ul class="uk-slider-items uk-grid uk-grid-medium uk-child-width-1-2@m">
                  <li>
                    <div class="review-item">
                      <div class="review-item__box">
                        <!-- <div class="review-item__title">Ease of use</div> -->
                        <div class="review-item__text">"I'm a general contractor and I've been using CES for over a year now. It's saved me so much time and money on my estimates. It's easy to use and has all the features I need to create accurate and professional estimates for my clients. I highly recommend it to any contractor." </div>
                        <div class="review-item__user">
                          <div class="review-item__avatar"><img src="./assets/img/review-avatar-1.png" alt="review-avatar"></div>
                          <div class="review-item__info">
                            <div class="review-item__name">Donald H. James</div>
                            <div class="review-item__position">Rental Customer</div>
                          </div>
                          <div class="review-item__stars"> <img src="./assets/img/icons/stars.svg" alt="stars"></div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="review-item">
                      <div class="review-item__box">
                        <!-- <div class="review-item__title">Comprehensive features </div> -->
                        <div class="review-item__text">"I'm a homeowner and I recently used CES to get estimates for a new kitchen renovation. I was so impressed with how easy it was to use and how quickly I got multiple estimates from different contractors. I was able to compare the estimates and choose the best contractor for my needs. I'm so glad I found CES! It was a lifesaver."</div>
                        <div class="review-item__user">
                          <div class="review-item__avatar"><img src="./assets/img/review-avatar-2.png" alt="review-avatar"></div>
                          <div class="review-item__info">
                            <div class="review-item__name">Katherine A. Fogg</div>
                            <div class="review-item__position">Rental Customer</div>
                          </div>
                          <div class="review-item__stars"> <img src="./assets/img/icons/stars.svg" alt="stars"></div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="review-item">
                      <div class="review-item__box">
                        <!-- <div class="review-item__title">Accuracy </div> -->
                        <div class="review-item__text">"I'm a commercial subcontractor and I use CES for all of my estimates. It's the most comprehensive and user-friendly estimating software I've ever used. It has all the features I need to create accurate and detailed estimates for my clients. I highly recommend it to any subcontractor."</div>
                        <div class="review-item__user">
                          <div class="review-item__avatar"><img src="./assets/img/review-avatar-1.png" alt="review-avatar"></div>
                          <div class="review-item__info">
                            <div class="review-item__name">Donald H. James</div>
                            <div class="review-item__position">Rental Customer</div>
                          </div>
                          <div class="review-item__stars"> <img src="./assets/img/icons/stars.svg" alt="stars"></div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-large-top"></ul>
            </div>
          </div>
        </div>
      </div>      
    </main>
  </div>
  @endsection