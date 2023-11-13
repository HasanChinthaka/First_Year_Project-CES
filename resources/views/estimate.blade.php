@extends ('layout')
@section ('content')

<div class="page-wrapper">
    <main class="page-main">
        <div class="page-head">
            <div class="page-head__bg" style="background-image: url(./assets/img/bg/bg_categories.jpg)">
            <div class="page-head__content" data-uk-parallax="y: 0, 100">
                <div class="uk-container">
                <div class="header-icons"><span></span><span></span><span></span></div>
                <div class="page-head__title"> Download Estimate</div>
                <div class="page-head__breadcrumb">
                    <ul class="uk-breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><span>Download Estimate</span></li>
                    </ul>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="page-content">
            <div class="uk-section-large uk-container">
                <form>
                    <table border="2px" class="uk-table es-table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Description</th>
                                <th>Height (mm)</th>
                                <th>Width (mm)</th>
                                <th>Count</th>
                                <th>Volume</th>
                                <th>Area</th>
                                <th>Amount</th>
                                <th>Price (LKR)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01.</td>
                                <td>foundation_details</td>
                               
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </main>
</div>
@endsection