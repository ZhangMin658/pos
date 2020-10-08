@extends('layouts/contentLayoutMaster')

@section('title', 'Checkout')

@section('vendor-style')
        <!-- Vendor css files -->
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/spinner/jquery.bootstrap-touchspin.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/toastr.css')) }}">
@endsection

@section('page-style')
        <!-- Page css files -->
        <link rel="stylesheet" href="{{ asset(mix('css/pages/app-ecommerce-shop.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('css/plugins/forms/wizard.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('css/plugins/extensions/toastr.css')) }}">
@endsection
@section('content')
<!-- Team -->
<section id="team" class="pb-5">
    <div class="container">
        <h5 class="section-title h1">E-commerce Plugins</h5>
        <div class="row">
           <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="{{ asset('images/plugins/wordpress-logo.jpg') }}" alt="wordpress Plugin"></p>
                                    <h4 class="card-title">WordPress</h4>
                                    <p class="card-text">Version: 1.000 | Last updated: 00/00/2020 | WordPress Version: 4.8 or higher </p>
                                    <a href="#" class="btn btn-primary "><i class="fa fa-floppy-o"></i>  Download </a>
                                </div>
                            </div>
                        </div>
                     
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="{{ asset('images/plugins/opencart-logo.jpg') }}" alt="Opencart Plugin"></p>
                                    <h4 class="card-title">OpenCart</h4>
                                    <p class="card-text">Version: 1.000 | Last updated: 00/00/2020 | OpenCart Version: 0.0 or higher </p>
                                    <a href="#" class="btn btn-primary "><i class="fa fa-floppy-o"></i>  Download </a>
                                </div>
                            </div>
                        </div>
                     
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="{{ asset('images/plugins/woocommerce-logo.jpg') }}" alt="WooCommerce Plugin"></p>
                                    <h4 class="card-title">WooCommerce</h4>
                                    <p class="card-text">Version: 1.000 | Last updated: 00/00/2020 | WooCommerce Version: 0.0 or higher </p>
                                    <a href="#" class="btn btn-primary "><i class="fa fa-floppy-o"></i>  Download </a>
                                </div>
                            </div>
                        </div>
                     
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                               <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="{{ asset('images/plugins/magento-logo.jpg') }}" alt="Magento Plugin"></p>
                                    <h4 class="card-title">Magento</h4>
                                    <p class="card-text">Version: 1.000 | Last updated: 00/00/2020 | Magento Version: 0.0 or higher </p>
                                    <a href="#" class="btn btn-primary "><i class="fa fa-floppy-o"></i>  Download </a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="{{ asset('images/plugins/cs-cart-logo.jpg') }}" alt="CS-cart Plugin"></p>
                                    <h4 class="card-title">CS-Cart</h4>
                                    <p class="card-text">Version: 1.000 | Last updated: 00/00/2020 | CS-Cart Version: 0.0 or higher </p>
                                    <a href="#" class="btn btn-primary "><i class="fa fa-floppy-o"></i>  Download </a>
                                </div>
                            </div>
                        </div>
                 
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                               <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="{{ asset('images/plugins/prestashop-logo.jpg') }}" alt="Prestashop Plugin"></p>
                                    <h4 class="card-title">Prestashop</h4>
                                    <p class="card-text">Version: 1.000 | Last updated: 00/00/2020 | Prestashop Version: 0.0 or higher </p>
                                    <a href="#" class="btn btn-primary "><i class="fa fa-floppy-o"></i>  Download </a>
                                </div>
                            </div>
                        </div>
                     
                    </div>
                </div>
            </div>
            <!-- ./Team member -->

             <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                               <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="{{ asset('images/plugins/shopify-logo.jpg') }}" alt="Shopify Plugin"></p>
                                    <h4 class="card-title">Shopify</h4>
                                    <p class="card-text">Version: 1.000 | Last updated: 00/00/2020 | Shopify Version: 0.0 or higher </p>
                                    <a href="#" class="btn btn-primary "><i class="fa fa-floppy-o"></i>  Download </a>
                                </div>
                            </div>
                        </div>
                     
                    </div>
                </div>
            </div>
            <!-- ./Team member -->

             <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                               <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="{{ asset('images/plugins/drupal-logo.jpg') }}" alt="Drupal Plugin"></p>
                                    <h4 class="card-title">Drupal</h4>
                                    <p class="card-text">Version: 1.000 | Last updated: 00/00/2020 | Drupal Version: 0.0 or higher </p>
                                    <a href="#" class="btn btn-primary "><i class="fa fa-floppy-o"></i>  Download </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->

             <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                               <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="{{ asset('images/plugins/joomla-logo.jpg') }}" alt="Joomla Plugin"></p>
                                    <h4 class="card-title">Joomla</h4>
                                    <p class="card-text">Version: 1.000 | Last updated: 00/00/2020 | Joomla Version: 0.0 or higher </p>
                                    <a href="#" class="btn btn-primary "><i class="fa fa-floppy-o"></i>  Download </a>
                                </div>
                            </div>
                        </div>
                     
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
             <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                               <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="{{ asset('images/plugins/odoo-logo.jpg') }}" alt="odoo Plugin"></p>
                                    <h4 class="card-title">odoo</h4>
                                    <p class="card-text">Version: 1.000 | Last updated: 00/00/2020 | odoo Version: 0.0 or higher </p>
                                    <a href="#" class="btn btn-primary "><i class="fa fa-floppy-o"></i>  Download </a>
                                </div>
                            </div>
                        </div>
                     
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
              <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                               <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="{{ asset('images/plugins/whmcs-logo.jpg') }}" alt="WHMCS Plugin"></p>
                                    <h4 class="card-title">WHMCS</h4>
                                    <p class="card-text">Version: 1.000 | Last updated: 00/00/2020 | WHMCS Version: 0.0 or higher </p>
                                    <a href="#" class="btn btn-primary "><i class="fa fa-floppy-o"></i>  Download </a>
                                </div>
                            </div>
                        </div>
                     
                    </div>
                </div>
            </div>
            <!-- ./Team member -->

               <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                               <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="{{ asset('images/plugins/wix-logo.jpg') }}" alt="WIX Plugin"></p>
                                    <h4 class="card-title">WIX</h4>
                                    <p class="card-text">Version: 1.000 | Last updated: 00/00/2020 | WIX Version: 0.0 or higher </p>
                                    <a href="#" class="btn btn-primary "><i class="fa fa-floppy-o"></i>  Download </a>
                                </div>
                            </div>
                        </div>
                     
                    </div>
                </div>
            </div>
            <!-- ./Team member -->

            
               <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                               <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="{{ asset('images/plugins/big_comm-logo.jpg') }}" alt="BigCommerce Plugin"></p>
                                    <h4 class="card-title">BigCommerce</h4>
                                    <p class="card-text">Version: 1.000 | Last updated: 00/00/2020 | BigCommerce Version: 0.0 or higher </p>
                                    <a href="#" class="btn btn-primary "><i class="fa fa-floppy-o"></i>  Download </a>
                                </div>
                            </div>
                        </div>
                     
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
              <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                               <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="{{ asset('images/plugins/xcart-logo.jpg') }}" alt="XCart Plugin"></p>
                                    <h4 class="card-title">XCart</h4>
                                    <p class="card-text">Version: 1.000 | Last updated: 00/00/2020 | XCart Version: 0.0 or higher </p>
                                    <a href="#" class="btn btn-primary "><i class="fa fa-floppy-o"></i>  Download </a>
                                </div>
                            </div>
                        </div>
                     
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
               <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                               <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="{{ asset('images/plugins/zoho-logo.jpg') }}" alt="Zoho Plugin"></p>
                                    <h4 class="card-title">Zoho</h4>
                                    <p class="card-text">Version: 1.000 | Last updated: 00/00/2020 | Zoho Version: 0.0 or higher </p>
                                    <a href="#" class="btn btn-primary "><i class="fa fa-floppy-o"></i>  Download </a>
                                </div>
                            </div>
                        </div>
                     
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
               <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                               <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="{{ asset('images/plugins/saleforce-logo.jpg') }}" alt="salesforce Plugin"></p>
                                    <h4 class="card-title">salesforce</h4>
                                    <p class="card-text">Version: 1.000 | Last updated: 00/00/2020 | salesforce Version: 0.0 or higher </p>
                                    <a href="#" class="btn btn-primary "><i class="fa fa-floppy-o"></i>  Download </a>
                                </div>
                            </div>
                        </div>
                     
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
                           <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                               <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="{{ asset('images/plugins/quickbooks-logo.jpg') }}" alt="QuickBooks Plugin"></p>
                                    <h4 class="card-title">QuickBooks</h4>
                                    <p class="card-text">Version: 1.000 | Last updated: 00/00/2020 | QuickBooks Version: 0.0 or higher </p>
                                    <a href="#" class="btn btn-primary "><i class="fa fa-floppy-o"></i>  Download </a>
                                </div>
                            </div>
                        </div>
                     
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            
                            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                               <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="{{ asset('images/plugins/freshbooks-logo.jpg') }}" alt="Freshbooks Plugin"></p>
                                    <h4 class="card-title">Freshbooks</h4>
                                    <p class="card-text">Version: 1.000 | Last updated: 00/00/2020 | Freshbooks Version: 0.0 or higher </p>
                                    <a href="#" class="btn btn-primary "><i class="fa fa-floppy-o"></i>  Download </a>
                                </div>
                            </div>
                        </div>
                     
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
                            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                               <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="{{ asset('images/plugins/sage-logo.jpg') }}" alt="SAGE Plugin"></p>
                                    <h4 class="card-title">SAGE</h4>
                                    <p class="card-text">Version: 1.000 | Last updated: 00/00/2020 | SAGE Version: 0.0 or higher </p>
                                    <a href="#" class="btn btn-primary "><i class="fa fa-floppy-o"></i>  Download </a>
                                </div>
                            </div>
                        </div>
                     
                    </div>
                </div>
            </div>
            <!-- ./Team member -->

        </div>
    </div>
</section>
@endsection

@section('vendor-script')
        <!-- Vendor js files -->
        <script src="{{ asset(mix('vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/extensions/jquery.steps.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/extensions/toastr.min.js')) }}"></script>
@endsection

@section('page-script')
    <!-- Page js files -->
    <script src="{{ asset(mix('js/scripts/pages/app-ecommerce-shop.js')) }}"></script>
@endsection
