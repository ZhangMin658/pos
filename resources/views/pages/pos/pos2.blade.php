
@extends('layouts/contentLayoutMaster')

@section('title', 'Form Layouts')
@section('vendor-style')

        <link rel="shortcut icon" href="https://sma.tecdiary.net/themes/default/admin/assets/images/icon.png"/>
          {{-- <link rel="stylesheet" href="https://sma.tecdiary.net/themes/default/admin/assets/styles/theme.css" type="text/css"/>   --}}
          {{-- <link rel="stylesheet" href="https://sma.tecdiary.net/themes/default/admin/assets/styles/style.css" type="text/css"/>  --}}
          {{-- <link rel="stylesheet" href="https://sma.tecdiary.net/themes/default/admin/assets/pos/css/posajax.css" type="text/css"/> --}}
           <link rel="stylesheet" href="https://sma.tecdiary.net/themes/default/admin/assets/pos/css/print.css" type="text/css" media="print"/>
         

             <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">

<link rel="stylesheet" href="{{ asset('vendors/pos2/icheck/square/blue.css') }}">

<link rel="stylesheet" href="{{ asset('vendors/pos2/ekko-lightbox.css') }}">

<link rel="stylesheet" href="{{ asset('vendors/pos2/jquery-ui.css') }}">
<link rel="stylesheet" href="{{ asset('vendors/pos2/perfect-scrollbar.css') }}">
<link rel="stylesheet" href="{{ asset('vendors/pos2/print.css') }}">
<link rel="stylesheet" href="{{ asset('vendors/pos2/redactor.css') }}">
<link rel="stylesheet" href="{{ asset('vendors/pos2/select2.css') }}">
           <style>
           



.pos-logo-sm {
    display: none;
}


.ui-keyboard {
    padding: 0.3em;
    z-index: 16001;
    background: rgba(255, 255, 255, 0.8);
    right: 0 !important;
    left: 0 !important;
    top: auto !important;
    bottom: 0px !important;
    position: fixed !important;
    width: 100%;
    min-width: 750px;
    height: 230px;
    -webkit-box-shadow: -5px 0px 10px rgba(50, 50, 50, 0.5);
    -moz-box-shadow: -5px 0px 10px rgba(50, 50, 50, 0.5);
    box-shadow: -5px 0px 10px rgba(50, 50, 50, 0.5);
}
.ui-keyboard-has-focus {
    z-index: 16001;
}
.ui-keyboard div {
    font-size: 1.1em;
}
.ui-keyboard-button {
    height: 3em;
    width: 3em;
    margin: 0.1em;
    cursor: pointer;
    overflow: hidden;
}
.ui-keyboard-button span {
    padding: 0;
    margin: 0;
    white-space: nowrap;
}
.ui-keyboard-button-endrow {
    clear: left;
}
.ui-keyboard-widekey {
    width: 4em;
}

.ui-keyboard-preview {
    text-align: left;
    margin: 0 0 3px 0;
    display: inline;
    width: 99%;
}
.ui-keyboard-keyset {
    text-align: center;
}
/*.ui-keyboard-input {
    text-align: left;
}*/
.ui-keyboard-input-placeholder {
    color: #888;
}
.ui-keyboard-nokeyboard {
    color: #888;
    border-color: #888;
}
.ui-keyboard-button.disabled {
    opacity: 0.5;
    filter: alpha(opacity=50);
}
.ui-keyboard-button.ui-keyboard-combo.ui-state-default {
    border-color: #357ebd;
}
.ui-keyboard .ui-state-active {
    border-color: #357ebd;
    color: #357ebd;
}
.ui-keyboard-space {
    width: 18em;
    text-indent: -999em;
}
.ui-keyboard .ui-keyboard-bksp {
    width: 6.2em;
    background-color: #f0ad4e;
    border-color: #eea236;
    color: #fff;
}

.ui-keyboard .ui-keyboard-bksp:hover {
    background-color: #ec971f;
    border-color: #d58512;
}

.ui-keyboard .ui-keyboard-enter {
    background-color: #f0ad4e;
    border-color: #eea236;
    color: #fff;
    width: 9.4em;
}
.ui-keyboard .ui-keyboard-enter:hover {
    background-color: #ec971f;
    border-color: #d58512;
}
.ui-keyboard .ui-keyboard-shift {
    background-color: #428bca;
    border-color: #357ebd;
    color: #fff;
    width: 4.55em;
}
.ui-keyboard .ui-keyboard-shift:hover,
.ui-keyboard .ui-keyboard-shift.ui-state-active {
    background-color: #3071a9;
    border-color: #e285e8e;
}
.ui-keyboard .ui-keyboard-accept {
    width: 11.1em;
    background-color: #5cb85c;
    border-color: #4cae4c;
    padding-left: 2px;
    padding-right: 2px;
    color: #fff;
}
.ui-keyboard .ui-keyboard-accept:hover {
    background-color: #449d44;
    border-color: #398439;
}
.ui-keyboard .ui-keyboard-cancel {
    width: 4.5em;
    background-color: #d9534f;
    border-color: #d43f3a;
    color: #fff;
    padding-left: 2px;
    padding-right: 2px;
}
.ui-keyboard .ui-keyboard-cancel:hover {
    background-color: #c9302c;
    border-color: #ac2925;
}
#ui .tooltip-inner {
    max-width: 500px;
}
#content {
    background: none;
    margin-left: 0;
    padding-top: 10px;
}
.pos-grid-nav {
    z-index: 50;
}
.form-control.input-sm {
    padding: 3px;
    height: auto;
    line-height: 16px;
    font-size: 14px;
}
.pos {
    margin: 0 auto;
}
#pos {
    position: relative;
}
#pos .form-group {
    margin-bottom: 5px;
}
#pos #cpdiv {
    display: inline-block;
}
#pos #pos-sale-form {
    min-width: 400px;
    width: 33%;
    max-width: 500px;
    /*padding: 10px 10px 5px 10px;*/
}
#pos #leftdiv {
    /*min-width: 400px;*/
    width: 100%;
    /*max-width: 500px;*/
    padding: 10px 10px 5px 10px;
    background: #f5f5f5;
    /*float: left;*/
    margin: 0;
}
#pos {
    display: flex;
    padding-right: 0;
}
#pos #cp {
    flex: 1;
}
#pos #cp #cpinner {
    flex: 1;
    min-width: 400px;
    max-width: 100%;
    /*float: left;*/
    margin-left: 2%;
    padding: 10px 10px 5px 10px;
 
}
#pos #cp #cpinner #item-list {
    overflow: scroll;
}
#pos #catContainer {
    display: block;
    width: auto;
    padding: 5px 10px 10px 15px;
    background: #757575;
    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 7px 0 rgba(0, 0, 0, 0.9) inset;
    border-radius: 5px;
    text-align: center;
}
#pos #proContainer {
    display: block;
    padding: 5px;
}
#pos #proContainer {
    display: block;
    padding: 5px;
}

#pos #printhead,
#pos #printfooter {
    display: none;
}

.rotate {
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);

    /* also accepts left, right, top, bottom coordinates; not required, but a good idea for styling */
    -webkit-transform-origin: 50% 50%;
    -moz-transform-origin: 50% 50%;
    -ms-transform-origin: 50% 50%;
    -o-transform-origin: 50% 50%;
    transform-origin: 50% 50%;

    /* Should be unset in IE9+ I think. */
    filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
}
#pos #left-middle {
    position: relative;
}
#pos #product-list {
    position: absolute;
    overflow: hidden;
    width: 100%;
    height: 410px;
    border-bottom: 1px solid #ddd;
}
.btn-tran {
    background: #f5f5f5;
    border: 1px solid #f5f5f5;
    cursor: pointer;
    height: 115px;
    margin: 2px;
    padding: 2px;
    width: 10.5%;
}
.btn-tran:hover {
    background: #f5f5f5;
    border: 1px solid #f5f5f5;
}
.btn-prni {
    border: 1px solid #eee;
    cursor: pointer;
    height: 115px;
    margin: 0 0 3px 2px;
    padding: 2px;
    width: 10.5%;
    min-width: 100px;
    overflow: hidden;
    display: inline-block;
    font-size: 13px;
}
/*.btn-prni:hover {
    background: #eee;
    border: 1px solid #e5e5e5;
}*/
.btn-prni span {
    display: table-cell;
    height: 45px;
    line-height: 15px;
    vertical-align: middle;
    text-transform: uppercase;
    width: 10.5%;
    min-width: 94px;
    overflow: hidden;
}
/*.btn-prni:hover span {
    background: #eee;
}*/
.btn-prni img {
    max-height: 60px !important;
}
.btn-prni.active {
    background: #eee;
    border: 1px solid #e5e5e5;
    cursor: default;
}
#pos #totalTable td {
    padding: 2px;
}
.alert {
    position: absolute;
    top: 50px;
    right: 10px;
    width: 350px;
    z-index: 55555;
    -webkit-box-shadow: 0px 5px 10px 0px rgba(102, 102, 102, 1);
    -moz-box-shadow: 0px 5px 10px 0px rgba(102, 102, 102, 1);
    box-shadow: 0px 5px 10px 0px rgba(102, 102, 102, 1);
    display: block;
}
.alert,
.alert p {
    margin-bottom: 0;
    font-size: 1em;
}
#pos .clearfix {
    float: none;
    clear: both;
}
.bootbox.modal {
    width: 300px;
    margin-left: -150px;
    left: 50%;
}
.bootbox .modal-footer {
    background: none;
    border: 0;
    text-align: center;
}
.bootbox .modal-footer {
    padding-top: 0;
}
/*.bootbox.modal.fade.in { top: 30%; }*/
.btn-cat-con {
    position: fixed;
    display: flex;
    justify-content: center;
    align-items: center;
    right: -236px;
    top: 50%;
    z-index: 6;
    width: 500px;
    height: 40px;
}
#ajaxCall {
    display: none;
    color: #000;
    background: #fff;
    border-radius: 25px;
    top: 2%;
    right: 2%;
    position: fixed;
    width: 51px;
    height: 50px;
    z-index: 55555;
    text-align: center;
}
#ajaxCall i {
    font-size: 50px;
}
#category-slider,
#subcategory-slider,
#brands-slider {
    display: none;
    z-index: 1060;
    height: 610px;
    position: absolute;
    top: 60px;
    right: 0;
    width: 540px;
    border: 1px solid #d8d8d8;
    background: #fff;
    padding: 10px 10px;
}
#category-list,
#subcategory-list,
#brands-list {
    max-height: 585px;
    overflow: hidden;
    position: absolute;
}
.font16 {
    font-size: 16px;
    font-weight: bold;
}
.bg-nums {
    background: #ffff99;
    padding: 5px 10px;
    color: #000;
    margin-left: 15px;
}
#order_tbl,
#bill_tbl {
    display: none;
}
.quick-cash {
    min-width: 100px;
}
.quick-cash .badge {
    position: absolute;
    top: 2px;
    right: 2px;
    font-size: 0.6em;
    padding: 1px 4px;
    border-radius: 0;
}
@media (max-width: 1280px) {
    /*#pos #cp #cpinner {
        max-width: 60%;
    }*/
    #pos .btn-tran,
    #pos .btn-prni,
    #pos .btn-prni span {
        max-width: 16%;
    }
}
@media (max-width: 1152px) {
    /*#pos #cp #cpinner {
        max-width: 55%;
    }*/
    #pos .btn-tran,
    #pos .btn-prni,
    #pos .btn-prni span {
        max-width: 19%;
    }
    a.navbar-brand {
        width: auto;
    }
    .pos-logo-lg {
        display: none;
    }
    .pos-logo-sm {
        display: inline-block;
        width: 50px;
        float: left;
    }
}

@media only screen and (max-width: 1024px) {
    body {
        width: 1024px !important;
        padding: 0;
        margin: 0;
    }
    /*#pos #cp #cpinner {
        max-width: 50%;
    }*/
    #pos .btn-tran,
    #pos .btn-prni,
    #pos .btn-prni span {
        max-width: 23%;
    }
    .modal-dialog {
        width: 600px;
        margin: 30px auto;
    }
    .modal-sm {
        width: 300px;
    }
    .modal-dialog .col-sm-9 {
        float: left;
        width: 75%;
    }
    .modal-dialog .col-sm-3 {
        float: left;
        width: 25%;
    }
    .btn-group .btn {
        width: 100%;
    }
    .container {
        width: 1000px !important;
    }
    .header-nav {
        display: inline-block;
        min-width: 600px;
        float: right;
    }
    a.navbar-brand {
        padding: 9px 0 0px 10px !important;
        height: auto;
    }
    .navbar > .container .navbar-brand,
    .navbar > .container-fluid .navbar-brand {
        margin-left: 0;
    }
    .container .navbar-header,
    .container .navbar-collapse {
        margin-right: 0;
        margin-left: 0;
    }
    .navbar-header {
        float: left;
    }
    .navbar-collapse {
        display: block !important;
        height: auto !important;
        padding-bottom: 0;
        overflow: visible !important;
    }
    .navbar-toggle {
        display: none;
    }
    .navbar-collapse {
        border-top: 0;
    }
    .navbar-nav {
        float: left;
        margin: 0;
    }
    .navbar-nav > li {
        float: left;
    }
    .navbar-nav > li > a {
        padding: 15px;
    }
    .navbar-nav.navbar-right {
        float: right;
    }
    .navbar .navbar-nav .open .dropdown-menu {
        position: absolute;
        float: left;
        background-color: #fff;
        border: 1px solid #ccc;
        border: 1px solid rgba(0, 0, 0, 0.15);
        border-width: 0 1px 1px;
        border-radius: 0 0 4px 4px;
        -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
    }
    .navbar-default .navbar-nav .open .dropdown-menu > li > a {
        color: #333;
    }
    .navbar .navbar-nav .open .dropdown-menu > li > a:hover,
    .navbar .navbar-nav .open .dropdown-menu > li > a:focus,
    .navbar .navbar-nav .open .dropdown-menu > .active > a,
    .navbar .navbar-nav .open .dropdown-menu > .active > a:hover,
    .navbar .navbar-nav .open .dropdown-menu > .active > a:focus {
        color: #fff !important;
        background-color: #428bca !important;
    }
    .navbar .navbar-nav .open .dropdown-menu > .disabled > a,
    .navbar .navbar-nav .open .dropdown-menu > .disabled > a:hover,
    .navbar .navbar-nav .open .dropdown-menu > .disabled > a:focus {
        color: #999 !important;
        background-color: transparent !important;
    }
    .fa-bx {
        font-size: 22px;
    }
    .lb {
        display: block;
        height: 0;
    }
}
@media only screen and (max-width: 1023px) {
    body {
        min-width: 400px !important;
        width: 100% !important;
        padding: 0;
        margin: 0;
    }
    .container {
        width: 100% !important;
    }
    #content {
        padding-top: 5px;
    }
    #pos {
        display: block;
    }
    #pos #cp {
        margin-top: 5px;
        padding-right: 30px;
        min-width: 100% !important;
    }
    #pos #cp #cpinner {
        margin: 0 !important;
        border: 1px solid #ccc;
        min-width: 100% !important;
    }
    #pos #pos-sale-form {
        padding-right: 30px;
        min-width: 100% !important;
    }
    #pos #leftdiv {
        border: 1px solid #ccc;
    }
    .hidden-small {
        display: none !important;
    }
    #header .header-nav {
        min-width: 0 !important;
    }
    .header-nav a.btn.account {
        padding: 2px 5px !important;
    }
    .header-nav a.btn.account .mini_avatar {
        margin: 0 !important;
    }
    .form-control#add_item {
        position: static;
    }
    #category-slider,
    #subcategory-slider,
    #brands-slider {
        width: 90%;
    }
    #item-list {
        height: auto !important;
        min-height: 0 !important;
        padding-bottom: 10px;
    }
}
@media only screen and (max-width: 767px) {
    .hidden-smallest {
        display: none !important;
    }
    .modal-dialog {
        max-width: 94%;
        margin-left: 3%;
        margin-right: 3%;
    }
    .modal-dialog.modal-sm {
        margin-left: auto;
        margin-right: auto;
    }
    .ob li {
        width: 100% !important;
        margin: 0 0 10px 0 !important;
        float: none !important;
    }
    .quick-cash {
        min-width: 0;
        padding: 10px 5px !important;
    }
    #sale_note {
        margin-bottom: 10px;
    }
    .tooltip,
    .ui-keyboard {
        display: none !important;
    }
    .pos-grid-nav {
        display: flex;
    }
    .btn-group-justified > .btn,
    .btn-group-justified > .btn-group {
        width: auto;
    }
    .pos-grid-nav .btn-group:nth-child(2) {
        flex: 1;
    }
}
.no-border { border-width: 0 !important; }
.border-bottom { border-bottom: 1px solid #ddd !important; }
.rowpos{
display: flex;
flex-wrap: wrap;
}
.table2 th, .table2 td { vertical-align: middle !important; }
.table2 > thead:first-child > tr:first-child > th, .table2 > thead:first-child > tr:first-child > td, .table-striped thead tr.primary:nth-child(odd) th {
    background-color: #333;
    color: white;
  
    text-align: center;
    /* width:100%; */
}
.table-hover > tbody > tr:hover > td,
.table-hover > tbody > tr:hover > th {
    background-color:#D9EDF7;
    border-color: #AFD9EE;
}
.table-hover > tbody > tr.warning:hover > td,
.table-hover > tbody > tr.warning:hover > th {
    border-color: #F0E1A0;
}
.table-hover > tbody > tr.danger:hover > td,
.table-hover > tbody > tr.danger:hover > th {
    border-color: #ebbbbb;
}
#pos #cp #cpinner {
    flex: 1;
    min-width: 400px;
    max-width: 100%;
    /*float: left;*/
    margin-left: 2%;
    padding: 10px 10px 5px 10px;
    
}

           </style>

           <script type="text/javascript" src="https://sma.tecdiary.net/themes/default/admin/assets/js/jquery-2.0.3.min.js"></script>
           <script type="text/javascript" src="https://sma.tecdiary.net/themes/default/admin/assets/js/jquery-migrate-1.2.1.min.js"></script>
@endsection
<body class="vertical-layout vertical-menu-modern 2-columns semi-dark-layout navbar-floating footer-static pace-done menu-collapsed" >
@section('content')

<div id="content">
        <div class="c1">
            <div class="pos">
                                                <div id="pos">
                    <form action="https://sma.tecdiary.net/admin/pos" data-toggle="validator" role="form" id="pos-sale-form" method="post" accept-charset="utf-8">
<input type="hidden" name="token" value="f1973fdfec15e6816b5887f4e19c3fcb">                                                                      
                    <div id="leftdiv">

                        <div id="left-top">
                            <div style="position: absolute; left:-9999px;"><input type="text" name="test" value="" id="test" class="kb-pad ui-keyboard-input ui-widget-content ui-corner-all" aria-haspopup="true" role="textbox">
</div>
                            <div class="form-group">
                               
                                <div style="clear:both;"></div>
                            </div>
                            <div class="no-print">
                                                                <div class="form-group" id="ui">
                                                                        <div class="input-group">
                                                                        <input type="text" name="add_item" value="" class="form-control pos-tip ui-autocomplete-input" id="add_item" data-placement="top" data-trigger="focus" placeholder="Scan/Search product by name/code" title="" autocomplete="off" data-original-title="Please start typing code/name for suggestions or just scan barcode">
                                                                           
                                    </div>
                                                                        <div style="clear:both;"></div>
                                </div>
                            </div>
                        </div>
                        <div id="print">
                            <div id="left-middle" style="height: 247px; min-height: 278px;">
                                <div id="product-list" class="ps-container" style="height: 247px; min-height: 278px;">
                                    <table class="table2 items table-striped table-bordered table-condensed table-hover sortable_table" id="posTable" style="margin-bottom: 0px; padding: 0px;">
                                        <thead class="tableFloatingHeaderOriginal">
                                        <tr>
                                            <th width="200px">Product</th>
                                            <th width="100px">Price</th>
                                            <th width="88px">Qty</th>
                                            <th width="110px">Subtotal</th>
                                            <th style="width:30px; text-align: center;">
                                                <i class="fa fa-trash-o" style="opacity:0.5; filter:alpha(opacity=50);"></i>
                                            </th>
                                        </tr>
                                        </thead><thead class="tableFloatingHeader" style="display: none; opacity: 0;">
                                        <tr>
                                            <th width="100px">Product</th>
                                            <th width="100px">Price</th>
                                            <th width="100px">Qty</th>
                                            <th width="100px">Subtotal</th>
                                            <th style=" text-align: center;">
                                                <i class="fa fa-trash-o" style="opacity:0.5; filter:alpha(opacity=50);"></i>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody class="ui-sortable">
                                        </tbody>
                                    </table>
                                    <div style="clear:both;"></div>
                                <div class="ps-scrollbar-x-rail" style="width: 480px; display: none; left: 0px; bottom: 3px;"><div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 552px; display: none; right: 3px;"><div class="ps-scrollbar-y" style="top: 0px; height: 0px;"></div></div></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div id="left-bottom">
                                <table id="totalTable" style="width:100%; float:right; padding:5px; color:#000; background: #FFF;">
                                    <tbody><tr>
                                        <td style="padding: 5px 10px;border-top: 1px solid #DDD;">Items</td>
                                        <td class="text-right" style="padding: 5px 10px;font-size: 14px; font-weight:bold;border-top: 1px solid #DDD;">
                                            <span id="titems">0</span>
                                        </td>
                                        <td style="padding: 5px 10px;border-top: 1px solid #DDD;">Total</td>
                                        <td class="text-right" style="padding: 5px 10px;font-size: 14px; font-weight:bold;border-top: 1px solid #DDD;">
                                            <span id="total">0.00</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 5px 10px;">Order Tax                                            <a href="#" id="pptax2" tabindex="-1">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                        </td>
                                        <td class="text-right" style="padding: 5px 10px;font-size: 14px; font-weight:bold;">
                                            <span id="ttax2">0.00</span>
                                        </td>
                                        <td style="padding: 5px 10px;">Discount                                                                                        <a href="#" id="ppdiscount" tabindex="-1">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                                                                    </td>
                                        <td class="text-right" style="padding: 5px 10px;font-weight:bold;">
                                            <span id="tds">0.00</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 5px 10px; border-top: 1px solid #666; border-bottom: 1px solid #333; font-weight:bold; background:#333; color:#FFF;" colspan="2">
                                            Total Payable                                            <a href="#" id="pshipping" tabindex="-1">
                                                <i class="fa fa-plus-square"></i>
                                            </a>
                                            <span id="tship"></span>
                                        </td>
                                        <td class="text-right" style="padding:5px 10px 5px 10px; font-size: 14px;border-top: 1px solid #666; border-bottom: 1px solid #333; font-weight:bold; background:#333; color:#FFF;" colspan="2">
                                            <span id="gtotal">0.00</span>
                                        </td>
                                    </tr>
                                </tbody></table>

                                <div class="clearfix"></div>
                                {{-- <div id="botbuttons" class="col-xs-12 text-center">
                                    
                                    <div class="row">
                                        <div class="col-xs-4" style="padding: 0;">
                                            <div class="btn-group-vertical btn-block">
                                                <button type="button" class="btn btn-warning btn-block btn-flat" id="suspend" tabindex="-1">Suspend</button>
                                                <button type="button" class="btn btn-danger btn-block btn-flat" id="reset" tabindex="-1">Cancel</button>
                                            </div>

                                        </div>
                                        <div class="col-xs-4" style="padding: 0;">
                                            <div class="btn-group-vertical btn-block">
                                                <button type="button" class="btn btn-info btn-block" id="print_order" tabindex="-1">Order</button>
                                                <button type="button" class="btn btn-primary btn-block" id="print_bill" tabindex="-1">Bill</button>
                                            </div>
                                        </div>
                                        <div class="col-xs-4" style="padding: 0;">
                                            <button type="button" class="btn btn-success btn-block" id="payment" style="height:67px;" tabindex="-1"><i class="fa fa-money" style="margin-right: 5px;"></i>Payment</button>
                                        </div>
                                    </div>
                                </div> --}}
                               <div class="rowpos">
                                     <div class="col-6 col-md-4" style="padding: 0;">
                                     <div class="btn-group-vertical btn-block">
                                     <button type="button" class="btn btn-warning btn-block btn-flat square" tabindex="-1">Suspend</button>
                                    <button type="button" class="btn btn-danger btn-block btn-flat square" tabindex="-1">Cancel</button>
                                      </div>
                                     </div>
                                     <div class="col-6 col-md-4" style="padding: 0;">
                                      <div class="btn-group-vertical btn-block">
                                     <button type="button" class="btn btn-info btn-block square" id="print_order" tabindex="-1">Order</button>
                                                <button type="button" class="btn btn-primary btn-block square" id="print_bill" tabindex="-1">Bill</button>
                                      </div>
                                     </div>
                                     <div class="col-6 col-md-4" style="padding: 0;">
                                     <button type="button" class="btn btn-success btn-block square" id="payment" style="height:79px;" tabindex="-1"><i class="fa fa-money" style="margin-right: 5px;"></i>Payment</button>
                                     </div>
                                </div>



                                {{-- Hello end  --}}
                                <div style="clear:both; height:5px;"></div>
                                <div id="num">
                                    <div id="icon"></div>
                                </div>
                                <span id="hidesuspend"></span>
                                <input type="hidden" name="pos_note" value="" id="pos_note">
                                <input type="hidden" name="staff_note" value="" id="staff_note">

                                <div id="payment-con">
                                                                            <input type="hidden" name="amount[]" id="amount_val_1" value="">
                                        <input type="hidden" name="balance_amount[]" id="balance_amount_1" value="">
                                        <input type="hidden" name="paid_by[]" id="paid_by_val_1" value="cash">
                                        <input type="hidden" name="cc_no[]" id="cc_no_val_1" value="">
                                        <input type="hidden" name="paying_gift_card_no[]" id="paying_gift_card_no_val_1" value="">
                                        <input type="hidden" name="cc_holder[]" id="cc_holder_val_1" value="">
                                        <input type="hidden" name="cheque_no[]" id="cheque_no_val_1" value="">
                                        <input type="hidden" name="cc_month[]" id="cc_month_val_1" value="">
                                        <input type="hidden" name="cc_year[]" id="cc_year_val_1" value="">
                                        <input type="hidden" name="cc_type[]" id="cc_type_val_1" value="">
                                        <input type="hidden" name="cc_cvv2[]" id="cc_cvv2_val_1" value="">
                                        <input type="hidden" name="payment_note[]" id="payment_note_val_1" value="">
                                                                            <input type="hidden" name="amount[]" id="amount_val_2" value="">
                                        <input type="hidden" name="balance_amount[]" id="balance_amount_2" value="">
                                        <input type="hidden" name="paid_by[]" id="paid_by_val_2" value="cash">
                                        <input type="hidden" name="cc_no[]" id="cc_no_val_2" value="">
                                        <input type="hidden" name="paying_gift_card_no[]" id="paying_gift_card_no_val_2" value="">
                                        <input type="hidden" name="cc_holder[]" id="cc_holder_val_2" value="">
                                        <input type="hidden" name="cheque_no[]" id="cheque_no_val_2" value="">
                                        <input type="hidden" name="cc_month[]" id="cc_month_val_2" value="">
                                        <input type="hidden" name="cc_year[]" id="cc_year_val_2" value="">
                                        <input type="hidden" name="cc_type[]" id="cc_type_val_2" value="">
                                        <input type="hidden" name="cc_cvv2[]" id="cc_cvv2_val_2" value="">
                                        <input type="hidden" name="payment_note[]" id="payment_note_val_2" value="">
                                                                            <input type="hidden" name="amount[]" id="amount_val_3" value="">
                                        <input type="hidden" name="balance_amount[]" id="balance_amount_3" value="">
                                        <input type="hidden" name="paid_by[]" id="paid_by_val_3" value="cash">
                                        <input type="hidden" name="cc_no[]" id="cc_no_val_3" value="">
                                        <input type="hidden" name="paying_gift_card_no[]" id="paying_gift_card_no_val_3" value="">
                                        <input type="hidden" name="cc_holder[]" id="cc_holder_val_3" value="">
                                        <input type="hidden" name="cheque_no[]" id="cheque_no_val_3" value="">
                                        <input type="hidden" name="cc_month[]" id="cc_month_val_3" value="">
                                        <input type="hidden" name="cc_year[]" id="cc_year_val_3" value="">
                                        <input type="hidden" name="cc_type[]" id="cc_type_val_3" value="">
                                        <input type="hidden" name="cc_cvv2[]" id="cc_cvv2_val_3" value="">
                                        <input type="hidden" name="payment_note[]" id="payment_note_val_3" value="">
                                                                            <input type="hidden" name="amount[]" id="amount_val_4" value="">
                                        <input type="hidden" name="balance_amount[]" id="balance_amount_4" value="">
                                        <input type="hidden" name="paid_by[]" id="paid_by_val_4" value="cash">
                                        <input type="hidden" name="cc_no[]" id="cc_no_val_4" value="">
                                        <input type="hidden" name="paying_gift_card_no[]" id="paying_gift_card_no_val_4" value="">
                                        <input type="hidden" name="cc_holder[]" id="cc_holder_val_4" value="">
                                        <input type="hidden" name="cheque_no[]" id="cheque_no_val_4" value="">
                                        <input type="hidden" name="cc_month[]" id="cc_month_val_4" value="">
                                        <input type="hidden" name="cc_year[]" id="cc_year_val_4" value="">
                                        <input type="hidden" name="cc_type[]" id="cc_type_val_4" value="">
                                        <input type="hidden" name="cc_cvv2[]" id="cc_cvv2_val_4" value="">
                                        <input type="hidden" name="payment_note[]" id="payment_note_val_4" value="">
                                                                            <input type="hidden" name="amount[]" id="amount_val_5" value="">
                                        <input type="hidden" name="balance_amount[]" id="balance_amount_5" value="">
                                        <input type="hidden" name="paid_by[]" id="paid_by_val_5" value="cash">
                                        <input type="hidden" name="cc_no[]" id="cc_no_val_5" value="">
                                        <input type="hidden" name="paying_gift_card_no[]" id="paying_gift_card_no_val_5" value="">
                                        <input type="hidden" name="cc_holder[]" id="cc_holder_val_5" value="">
                                        <input type="hidden" name="cheque_no[]" id="cheque_no_val_5" value="">
                                        <input type="hidden" name="cc_month[]" id="cc_month_val_5" value="">
                                        <input type="hidden" name="cc_year[]" id="cc_year_val_5" value="">
                                        <input type="hidden" name="cc_type[]" id="cc_type_val_5" value="">
                                        <input type="hidden" name="cc_cvv2[]" id="cc_cvv2_val_5" value="">
                                        <input type="hidden" name="payment_note[]" id="payment_note_val_5" value="">
                                                                    </div>
                                <input name="order_tax" type="hidden" value="1" id="postax2">
                                <input name="discount" type="hidden" value="" id="posdiscount">
                                <input name="shipping" type="hidden" value="0" id="posshipping">
                                <input type="hidden" name="rpaidby" id="rpaidby" value="cash" style="display: none;">
                                <input type="hidden" name="total_items" id="total_items" value="0" style="display: none;">
                                <input type="submit" id="submit_sale" value="Submit Sale" style="display: none;">
                            </div>
                        </div>

                    </div>
                    </form>                    <div id="cp">
                        <div id="cpinner">
                            <div class="quick-menu">
                                <div id="proContainer">
                                    <div id="ajaxproducts">
                                        <div id="item-list" style="overflow: scroll; height: 491px; min-height: 515px;">
                                            <div><button id="product-0108" type="button" value="IT01" title="" class="btn-prni btn-default product pos-tip" data-container="body" data-original-title="Canon 1100d" tabindex="-1"><img src="https://thumbs.dreamstime.com/b/no-image-available-icon-flat-vector-no-image-available-icon-flat-vector-illustration-132482930.jpg" alt="Canon 1100d" class="img-rounded">
                                            <span>Canon 1100d</span></button><button id="product-0109" type="button" value="IT02" title="" class="btn-prni btn-default product pos-tip" data-container="body" data-original-title="Computer Set 1" tabindex="-1"><img src="https://sma.tecdiary.net/assets/uploads/thumbs/85c11f17a9a065ca27388b6c0e437b35.png" alt="Computer Set 1" class="img-rounded"><span>Computer Set 1</span></button><button id="product-0110" type="button" value="IT03" title="" class="btn-prni btn-default product pos-tip" data-container="body" data-original-title="Computer Set 2" tabindex="-1"><img src="https://sma.tecdiary.net/assets/uploads/thumbs/c956a14ddaaa35f68df354c7c6b182dd.png" alt="Computer Set 2" class="img-rounded"><span>Computer Set 2</span></button><button id="product-0111" type="button" value="IT04" title="" class="btn-prni btn-default product pos-tip" data-container="body" data-original-title="Hard Disk" tabindex="-1"><img src="https://sma.tecdiary.net/assets/uploads/thumbs/a8867c6d3770f724b2f95e042d4afaff.png" alt="Hard Disk" class="img-rounded"><span>Hard Disk</span></button><button id="product-0112" type="button" value="IT05" title="" class="btn-prni btn-default product pos-tip" data-container="body" data-original-title="Keyboard" tabindex="-1"><img src="https://sma.tecdiary.net/assets/uploads/thumbs/c58dff3817e2b1a63f94f8d11c13eaf1.png" alt="Keyboard" class="img-rounded"><span>Keyboard</span></button><button id="product-0114" type="button" value="IT07" title="" class="btn-prni btn-default product pos-tip" data-container="body" data-original-title="Laptop" tabindex="-1"><img src="https://sma.tecdiary.net/assets/uploads/thumbs/160f38cbac757e0e8b196d2c9e44781b.png" alt="Laptop" class="img-rounded"><span>Laptop</span></button><button id="product-0113" type="button" value="IT06" title="" class="btn-prni btn-default product pos-tip" data-container="body" data-original-title="Mouse" tabindex="-1"><img src="https://sma.tecdiary.net/assets/uploads/thumbs/b788176a4110f54b772860f833317c5d.png" alt="Mouse" class="img-rounded"><span>Mouse</span></button><button id="product-0115" type="button" value="IT08" title="" class="btn-prni btn-default product pos-tip" data-container="body" data-original-title="RAM" tabindex="-1"><img src="https://sma.tecdiary.net/assets/uploads/thumbs/22cc732278de0559e502af8180bf6502.png" alt="RAM" class="img-rounded"><span>RAM</span></button></div>                                        </div>
                                        
                                    </div>
                                    <div style="clear:both;"></div>
                                </div>
                            </div>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <div style="clear:both;"></div>
            </div>
        </div>
    </div>
@endsection
@section('vendor-script')




@endsection
@section('page-script')
      
