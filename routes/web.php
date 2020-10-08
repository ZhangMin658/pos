<?php
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

// Route url SW010
Route::get('/', array('as'=>'login', 'uses'=>'AdminController@viewlogin'));

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');


Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.update');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');



Route::post('submitreg', array('as'=>'submitreg', 'uses'=>'AdminController@add'));
Route::group(['middleware' => ['auth']], function () {
//logout SW011
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Route Dashboards SW012
Route::get('/dashboard', 'DashboardController@dashboard');

// Setting SW013
Route::get('/setting', 'SettingController@setting');

// Branch SW014
Route::get('/branches', 'BranchController@index')->name('branches.index');
Route::get('/branches/new', 'BranchController@create')->name('branches.create');
Route::post('/branches/new', 'BranchController@store')->name('branches.store');
Route::get('/branches/{id}/show', 'BranchController@show')->name('branches.show');
Route::get('/branches/{id}/edit', 'BranchController@edit')->name('branches.edit');
Route::put('/branches/{id}/update', 'BranchController@update')->name('branches.update');
Route::delete('/branches/{id}/delete', 'BranchController@destroy')->name('branches.destroy');
Route::post('/branchcontroller', 'BranchController@save');

// Reports SW015
Route::get('/reports', 'ReportController@view');

// Customer SW016
Route::get('/customers', 'CustomerController@index')->name('customers.index');
Route::get('/customers/new', 'CustomerController@create')->name('customers.create');
Route::get('/customers/{id}/show', 'CustomerController@show')->name('customers.show');
Route::post('/customers/create', 'CustomerController@store')->name('customers.store');
Route::get('/customers/{id}/edit', 'CustomerController@edit')->name('customers.edit');
Route::put('/customers/{id}/update', 'CustomerController@update')->name('customers.update');
Route::delete('/customers/{id}/delete', 'CustomerController@destroy')->name('customers.destroy');


// Customer - Group SW017
Route::get('/customers/groups', 'CustomerGroupController@index')->name('customer.groups.index');
Route::get('/customers/groups/new', 'CustomerGroupController@create')->name('customer.groups.create');
Route::post('/customers/groups/create', 'CustomerGroupController@store')->name('customer.groups.store');
Route::get('/customers/groups/{id}/view', 'CustomerGroupController@show')->name('customer.groups.show');
Route::get('/customers/groups/{id}/edit', 'CustomerGroupController@edit')->name('customer.groups.edit');
Route::put('/customers/groups/{id}/update', 'CustomerGroupController@update')->name('customer.groups.update');
Route::delete('/customers/groups/{id}/destroy', 'CustomerGroupController@destroy')->name('customer.groups.destroy');


Route::post('/customergroupcontroller', 'CustomerGroupController@save');


// Employees SW018
Route::get('/employees', 'EmployeesController@index')->name('employees.index');
Route::get('/employees/new', 'EmployeesController@create')->name('employees.create');
Route::post('/employees/store', 'EmployeesController@store')->name('employees.store');


Route::get('/emp_view', 'EmployeesController@view');
Route::get('/emp_edit', 'EmployeesController@edit');
Route::get('/emp_leave', 'EmployeesController@leave');
Route::get('/emp_leave_new', 'EmployeesController@leave_new');
Route::get('/emp_holidays', 'EmployeesController@holidays');
Route::get('/emp_attends', 'EmployeesController@attends');
Route::get('/emp_latters', 'EmployeesController@latters');
Route::get('/emp_commission', 'EmployeesController@commission');
Route::get('/payroll', 'AccountingController@payroll');
Route::get('/payslip', 'AccountingController@payslip');

Route::post('/employeescontroller', 'EmployeesController@save');


// POS SW018
Route::get('/pos', 'PosController@pos');
Route::get('/pos2', 'PosController@pos2');

Route::get('/pos_payment', 'PosController@payment');

// Sales SW019
Route::get('/sales_dashbaord', 'SalesController@dashbaord');
Route::get('/sale_quotations', 'SalesController@quotations');
Route::get('/sale_quotation_new', 'SalesController@quotation_new');
Route::get('/sales_invoices', 'SalesController@invoices');
Route::get('/sale_invoice_new', 'SalesController@invoice_new');
Route::get('/sales_installments', 'SalesController@installments');
Route::get('/sales_installment_new', 'SalesController@installment_new');
Route::get('/sales_installment_page', 'SalesController@installment_page');
Route::get('/sales_installment_view', 'SalesController@installment_view');
Route::get('/return', 'SalesController@return');
Route::get('/return_view', 'SalesController@return_view');

// Products SW020
Route::get('/products_list', 'ProductsController@list');
Route::get('/products_new', 'ProductsController@new');
Route::get('/products_view', 'ProductsController@view');
Route::get('/damage_list', 'ProductsController@damage');

// Categories SW021
Route::get('/categories_list', 'CategoriesController@list');
Route::get('/categories_new', 'CategoriesController@new');

// Attributes SW022
Route::get('/attributes_list', 'AttributesController@list');
Route::get('/attributes_new', 'AttributesController@new');

// Brands SW023
Route::get('/brands_list', 'BrandsController@list');
Route::get('/brands_new', 'BrandsController@new');

// Offers SW024
Route::get('/offers_list', 'OffersController@list');
Route::get('/offers_new', 'OffersController@new');
Route::get('/offers_new', 'OffersController@view');


// Suppliers SW025
Route::get('/suppliers_list', 'SuppliersController@list');
Route::get('/suppliers_new', 'SuppliersController@new');
Route::get('/suppliers_view', 'SuppliersController@view');

Route::post('/supplierscontroller', 'SuppliersController@save');

// Receiving SW026
Route::get('/receiving', 'ReceivingsController@receiving');

// Deliveries SW027
Route::get('/deliveries', 'DeliveriesController@deliveries');

// Calendar SW028
Route::get('/calendar', 'CalendarController@calendar');


// Accounting SW029
Route::get('/dashbaord', 'AccountingController@dashbaord');
Route::get('/accounts', 'AccountingController@accounts');
Route::get('/accounts_new', 'AccountingController@accounts_new');
Route::get('/transaction', 'AccountingController@transaction');
Route::get('/po', 'AccountingController@po');
Route::get('/bills', 'AccountingController@bills');
Route::get('/bills_new', 'AccountingController@bills_new');
Route::get('/closing', 'AccountingController@closing');
Route::get('/closing_month', 'AccountingController@closing_month');
Route::get('/closing_month_report', 'AccountingController@closing_month_report');
Route::get('/clear_payment', 'AccountingController@clear');


// Users SW030
Route::get('users', 'UsersController@index')->name('user.index');
Route::get('users/new', 'UsersController@create')->name('user.create');
Route::post('users/store', 'UsersController@store')->name('user.store');
Route::get('users/{id}/edit', 'UsersController@edit')->name('user.edit');
Route::put('users/{id}/edit', 'UsersController@update')->name('user.update');
Route::delete('users/{id}/delete', 'UsersController@destroy')->name('user.destroy');


// Merchant SW030
Route::get('/merchant_profile', 'MerchantsController@profile');
Route::put('/merchant/update', 'MerchantsController@update')->name('merchant.update');

Route::get('/merchant_', 'MerchantsController@merchant');
Route::get('/merchant_', 'MerchantsController@merchant');
Route::get('/merchant_', 'MerchantsController@merchant');
Route::get('/merchant_', 'MerchantsController@merchant');


Route::post('/merchantscontroller', 'MerchantsController@save');




///////////////////////// OLD /////////////////////////
Route::post('/bank-account-submit', [
    'uses' => 'BankController@save',
    'as' => 'account.save'
]);

// Service
Route::get('services-ecomm', 'ServicesController@ecomm');
Route::get('services-api', 'ServicesController@api');

// Security
Route::get('security-devices', 'SecurityController@devices');
Route::get('security-key', 'SecurityController@key');

// My Account
Route::get('myacc-personal', 'MyaccountController@personal');
Route::get('myacc-company', 'MyaccountController@company');


// My Account
Route::get('support-seals', 'SupportController@seals');
Route::get('support-ticket', 'SupportController@ticket');
Route::get('support-faq', 'SupportController@faq');

// Client
Route::get('client-list', 'ClientController@list');
Route::get('client-new', 'ClientController@new');

// Gateway
Route::get('gateway-list', 'GatewayController@list');
Route::get('gateway-new', 'GatewayController@new');

// Website
Route::get('website-news', 'WebsiteController@news');
Route::get('website-block', 'WebsiteController@block');

// Report
Route::get('report-transcation', 'ReportController@transcation');
Route::get('report-logs', 'ReportController@logs');
Route::get('report-accountstatement', 'ReportController@accountstatement');

// Team
Route::get('team-users-list', 'TeamController@userslist');
Route::get('team-users-new', 'TeamController@usersnew');
Route::get('team-group-list', 'TeamController@grouplist');
Route::get('team-group-new', 'TeamController@groupnew');
Route::get('team-roles-list', 'TeamController@roleslist');
Route::get('team-roles-new', 'TeamController@rolesnew');










///////////////////// Route Apps /////////////////////
Route::get('/app-email', 'EmailAppController@emailApp');
Route::get('/app-chat', 'ChatAppController@chatApp');
Route::get('/app-todo', 'ToDoAppController@todoApp');
Route::get('/app-calender', 'CalenderAppController@calenderApp');
Route::get('/app-ecommerce-shop', 'EcommerceAppController@ecommerce_shop');
Route::get('/app-ecommerce-details', 'EcommerceAppController@ecommerce_details');
Route::get('/app-ecommerce-wishlist', 'EcommerceAppController@ecommerce_wishlist');
Route::get('/app-ecommerce-checkout', 'EcommerceAppController@ecommerce_checkout');
Route::get('/app-file-manager', 'FileManagerController@file_manager');

// Users Pages
Route::get('/app-user-list', 'UserPagesController@user_list');
Route::get('/app-user-view', 'UserPagesController@user_view');
Route::get('/app-user-edit', 'UserPagesController@user_edit');

// Route Data List
Route::resource('/data-list-view','DataListController');
Route::resource('/data-thumb-view', 'DataThumbController');


// Route Content
Route::get('/content-grid', 'ContentController@grid');
Route::get('/content-typography', 'ContentController@typography');
Route::get('/content-text-utilities', 'ContentController@text_utilities');
Route::get('/content-syntax-highlighter', 'ContentController@syntax_highlighter');
Route::get('/content-helper-classes', 'ContentController@helper_classes');

// Route Color
Route::get('/colors', 'ContentController@colors');

// Route Icons
Route::get('/icons-feather', 'IconsController@icons_feather');
Route::get('/icons-font-awesome', 'IconsController@icons_font_awesome');

// Route Cards
Route::get('/card-basic', 'CardsController@card_basic');
Route::get('/card-advance', 'CardsController@card_advance');
Route::get('/card-statistics', 'CardsController@card_statistics');
Route::get('/card-analytics', 'CardsController@card_analytics');
Route::get('/card-actions', 'CardsController@card_actions');

// Route Components
Route::get('/component-alert', 'ComponentsController@alert');
Route::get('/component-buttons', 'ComponentsController@buttons');
Route::get('/component-breadcrumbs', 'ComponentsController@breadcrumbs');
Route::get('/component-carousel', 'ComponentsController@carousel');
Route::get('/component-collapse', 'ComponentsController@collapse');
Route::get('/component-dropdowns', 'ComponentsController@dropdowns');
Route::get('/component-list-group', 'ComponentsController@list_group');
Route::get('/component-modals', 'ComponentsController@modals');
Route::get('/component-pagination', 'ComponentsController@pagination');
Route::get('/component-navs', 'ComponentsController@navs');
Route::get('/component-navbar', 'ComponentsController@navbar');
Route::get('/component-tabs', 'ComponentsController@tabs');
Route::get('/component-pills', 'ComponentsController@pills');
Route::get('/component-tooltips', 'ComponentsController@tooltips');
Route::get('/component-popovers', 'ComponentsController@popovers');
Route::get('/component-badges', 'ComponentsController@badges');
Route::get('/component-pill-badges', 'ComponentsController@pill_badges');
Route::get('/component-progress', 'ComponentsController@progress');
Route::get('/component-media-objects', 'ComponentsController@media_objects');
Route::get('/component-spinner', 'ComponentsController@spinner');
Route::get('/component-toast', 'ComponentsController@toast');

// Route Extra Components
Route::get('/ex-component-avatar', 'ExtraComponentsController@avatar');
Route::get('/ex-component-chips', 'ExtraComponentsController@chips');
Route::get('/ex-component-divider', 'ExtraComponentsController@divider');

// Route Forms
Route::get('/form-select', 'FormsController@select');
Route::get('/form-switch', 'FormsController@switch');
Route::get('/form-checkbox', 'FormsController@checkbox');
Route::get('/form-radio', 'FormsController@radio');
Route::get('/form-input', 'FormsController@input');
Route::get('/form-input-groups', 'FormsController@input_groups');
Route::get('/form-number-input', 'FormsController@number_input');
Route::get('/form-textarea', 'FormsController@textarea');
Route::get('/form-date-time-picker', 'FormsController@date_time_picker');
Route::get('/form-layout', 'FormsController@layouts');
Route::get('/form-wizard', 'FormsController@wizard');
Route::get('/form-validation', 'FormsController@validation');

// Route Tables
Route::get('/table', 'TableController@table');
Route::get('/table-datatable', 'TableController@datatable');
Route::get('/table-ag-grid', 'TableController@ag_grid');

// Route Pages
Route::get('/page-user-profile', 'PagesController@user_profile');
Route::get('/page-faq', 'PagesController@faq');
Route::get('/page-knowledge-base', 'PagesController@knowledge_base');
Route::get('/page-kb-category', 'PagesController@kb_category');
Route::get('/page-kb-question', 'PagesController@kb_question');
Route::get('/page-search', 'PagesController@search');
Route::get('/page-invoice', 'PagesController@invoice');
Route::get('/page-account-settings', 'PagesController@account_settings');
Route::get('/pricing', 'PagesController@pricing');

// Route Authentication Pages
Route::get('/auth-login', 'AuthenticationController@login');
Route::get('/auth-register', 'AuthenticationController@register');

Route::get('/auth-forgot-password', 'AuthenticationController@forgot_password');
Route::get('/auth-reset-password', 'AuthenticationController@reset_password');
Route::get('/auth-lock-screen', 'AuthenticationController@lock_screen');

// Route Miscellaneous Pages
Route::get('/page-coming-soon', 'MiscellaneousController@coming_soon');
Route::get('/error-404', 'MiscellaneousController@error_404');
Route::get('/error-500', 'MiscellaneousController@error_500');
Route::get('/page-not-authorized', 'MiscellaneousController@not_authorized');
Route::get('/page-maintenance', 'MiscellaneousController@maintenance');

// Route Charts & Google Maps
Route::get('/chart-apex', 'ChartsController@apex');
Route::get('/chart-chartjs', 'ChartsController@chartjs');
Route::get('/chart-echarts', 'ChartsController@echarts');
Route::get('/maps-google', 'ChartsController@maps_google');

// Route Extension Components
Route::get('/ext-component-sweet-alerts', 'ExtensionController@sweet_alert');
Route::get('/ext-component-toastr', 'ExtensionController@toastr');
Route::get('/ext-component-noui-slider', 'ExtensionController@noui_slider');
Route::get('/ext-component-file-uploader', 'ExtensionController@file_uploader');
Route::get('/ext-component-quill-editor', 'ExtensionController@quill_editor');
Route::get('/ext-component-drag-drop', 'ExtensionController@drag_drop');
Route::get('/ext-component-tour', 'ExtensionController@tour');
Route::get('/ext-component-clipboard', 'ExtensionController@clipboard');
Route::get('/ext-component-plyr', 'ExtensionController@plyr');
Route::get('/ext-component-context-menu', 'ExtensionController@context_menu');
Route::get('/ext-component-swiper', 'ExtensionController@swiper');
Route::get('/ext-component-i18n', 'ExtensionController@i18n');

// acess controller
Route::get('/access-control', 'AccessController@index');
Route::get('/access-control/{roles}', 'AccessController@roles');
Route::get('/modern-admin', 'AccessController@home')->middleware('role:Admin');

// Auth::routes();

Route::post('/login/validate', 'Auth\LoginController@validate_api');

// locale Route
Route::get('lang/{locale}',[LanguageController::class,'swap']);
});
