<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CornAjaxController;
use App\Http\Controllers\AssociationAjaxCRUDController;
use App\Http\Controllers\RiceSeedsAjaxCRUDController;
use App\Http\Controllers\VegSeedsAjaxCRUDController;
use App\Http\Controllers\CornSeedsAjaxCRUDController;
use App\Http\Controllers\LivestockAjaxCRUDController;
use App\Http\Controllers\FertilizerAjaxCRUDController;
use App\Http\Controllers\RentalAjaxCRUDController;
use App\Http\Controllers\RiceHybridAjaxCrudContoller;
use App\Http\Controllers\RegistryAjaxCrudController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// association
Route::get('assoc-crud-datatable', [AssociationAjaxCRUDController::class, 'index']);
Route::post('store-assoc', [AssociationAjaxCRUDController::class, 'store']);
Route::post('edit-assoc', [AssociationAjaxCRUDController::class, 'edit']);
Route::post('delete-assoc', [AssociationAjaxCRUDController::class, 'destroy']);
Route::get('get-association-details/{id}', [AssociationAjaxCrudController::class, 'getAssociationDetails'])->name('association.details');
// corn
Route::get('corn-crud-datatable', [CornAjaxController::class, 'index']);
Route::post('store-corn', [CornAjaxController::class, 'store']);
Route::post('edit-corn', [CornAjaxController::class, 'edit']);
Route::post('delete-corn', [CornAjaxController::class, 'destroy']);
// rice seeds
Route::get('riceseeds-crud-datatable', [RiceSeedsAjaxCRUDController::class, 'index']);
Route::post('store-riceseeds', [RiceSeedsAjaxCRUDController::class, 'store']);
Route::post('edit-riceseeds', [RiceSeedsAjaxCRUDController::class, 'edit']);
Route::post('delete-riceseeds', [RiceSeedsAjaxCRUDController::class, 'destroy']);
// Vegetable seeds
Route::get('vegseeds-crud-datatable', [VegSeedsAjaxCRUDController::class, 'index']);
Route::post('store-vegseeds', [VegSeedsAjaxCRUDController::class, 'store']);
Route::post('edit-vegseeds', [VegSeedsAjaxCRUDController::class, 'edit']);
Route::post('delete-vegseeds', [VegSeedsAjaxCRUDController::class, 'destroy']);
// corn Seeds
Route::get('cornseeds-crud-datatable', [CornSeedsAjaxCRUDController::class, 'index']);
Route::post('store-cornseeds', [CornSeedsAjaxCRUDController::class, 'store']);
Route::post('edit-cornseeds', [CornSeedsAjaxCRUDController::class, 'edit']);
Route::post('delete-cornseeds', [CornSeedsAjaxCRUDController::class, 'destroy']);
// livestock
Route::get('livestock-crud-datatable', [LivestockAjaxCRUDController::class, 'index']);
Route::post('store-livestock', [LivestockAjaxCRUDController::class, 'store']);
Route::post('edit-livestock', [LivestockAjaxCRUDController::class, 'edit']);
Route::post('delete-livestock', [LivestockAjaxCRUDController::class, 'destroy']);
// Fertilizer
Route::get('fert-crud-datatable', [FertilizerAjaxCRUDController::class, 'index']);
Route::post('store-fert', [FertilizerAjaxCRUDController::class, 'store']);
Route::post('edit-fert', [FertilizerAjaxCRUDController::class, 'edit']);
Route::post('delete-fert', [FertilizerAjaxCRUDController::class, 'destroy']);
// Rental Tractor
Route::get('rental-crud-datatable', [RentalAjaxCRUDController::class, 'index']);
Route::post('store-rental', [RentalAjaxCRUDController::class, 'store']);
Route::post('edit-rental', [RentalAjaxCRUDController::class, 'edit']);
Route::post('delete-rental', [RentalAjaxCRUDController::class, 'destroy']);
Route::get('get-rental-details/{id}', [RentalAjaxCRUDController::class, 'getRentalDetails'])->name('rental.details');
// 
Route::get('ricehybrid-crud-datatable', [RiceHybridAjaxCrudContoller::class, 'index']);
Route::post('store-ricehybrid', [RiceHybridAjaxCrudContoller::class, 'store']);
Route::post('edit-ricehybrid', [RiceHybridAjaxCrudContoller::class, 'edit']);
Route::post('delete-ricehybrid', [RiceHybridAjaxCrudContoller::class, 'destroy']);
Route::get('get-farmer-details/{id}', [RiceHybridAjaxCrudContoller::class, 'getFarmerDetails'])->name('farmer.details');
// Registry
Route::get('registry-crud-datatable', [RegistryAjaxCrudController::class, 'index']);
Route::post('store-registry', [RegistryAjaxCrudController::class, 'store']);
Route::post('edit-registry', [RegistryAjaxCrudController::class, 'edit']);
Route::post('delete-registry', [RegistryAjaxCrudController::class, 'destroy']);
// Route::get('get-registry-details/{id}', [RegistryAjaxCrudController::class, 'getRegistryDetails'])->name('farmer.details');