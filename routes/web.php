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
use App\Http\Controllers\DataTableAjaxCRUDController;
use App\Http\Controllers\VegetableAjaxCRUDController; 
use App\Http\Controllers\RootcropAjaxCRUDController;
use App\Http\Controllers\CacaoAjaxCRUDController;
use App\Http\Controllers\CoffeeAjaxCRUDController; 
use App\Http\Controllers\FruitsAjaxCRUDController; 
use App\Http\Controllers\BambooAjaxCRUDController;
use App\Http\Controllers\LivestockPopulationAjaxCRUDController;
use App\Http\Controllers\ROMSAjaxCRUDController; 
use App\Http\Controllers\VaccinationAjaxCRUDController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registry-printable', function () {
    return view('admin.registry.registry-printable');
});

Auth::routes();

Route::group(['middleware' => ['auth', 'checkRole:superad']], function () {
    // user management
    Route::get('user-management', [UserController::class, 'index']);
    Route::post('store-user', [UserController::class, 'store']);
    Route::post('edit-user', [UserController::class, 'edit']);
    Route::post('delete-user', [UserController::class, 'destroy']);
    Route::get('get-user-details/{id}', [UserController::class, 'getUserDetails'])->name('user.details');
    Route::get('/register', function () {
        return view('dashboard');
    });

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth'])->group(function () {

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

// Rice Hybrid
Route::get('ricehybrid-crud-datatable', [RiceHybridAjaxCrudContoller::class, 'index']);
Route::post('store-ricehybrid', [RiceHybridAjaxCrudContoller::class, 'store']);
Route::post('edit-ricehybrid', [RiceHybridAjaxCrudContoller::class, 'edit']);
Route::post('delete-ricehybrid', [RiceHybridAjaxCrudContoller::class, 'destroy']);
Route::get('/print-Allrice', [RiceHybridAjaxCrudContoller::class, 'fetchData']);
Route::get('get-farmer-details/{id}', [RiceHybridAjaxCrudContoller::class, 'getFarmerDetails'])->name('farmer.details');

// Registry
Route::get('registry-crud-datatable', [RegistryAjaxCrudController::class, 'index']);
Route::post('store-registry', [RegistryAjaxCrudController::class, 'store']);
Route::post('edit-registry', [RegistryAjaxCrudController::class, 'edit']);
Route::post('delete-registry', [RegistryAjaxCrudController::class, 'destroy']);
Route::get('get-registry-details/{id}', [RegistryAjaxCrudController::class, 'getRegistryDetails'])->name('farmer.details');

// Fishery
Route::get('fishery-crud-datatable', [DataTableAjaxCRUDController::class, 'index']);
Route::post('store-fishery', [DataTableAjaxCRUDController::class, 'store']);
Route::post('edit-fishery', [DataTableAjaxCRUDController::class, 'edit']);
Route::post('delete-fishery', [DataTableAjaxCRUDController::class, 'destroy']);

// vegetable
Route::get('veg-crud-datatable', [VegetableAjaxCRUDController::class, 'index']);
Route::post('store-veg', [VegetableAjaxCRUDController::class, 'store']);
Route::post('edit-veg', [VegetableAjaxCRUDController::class, 'edit']);
Route::post('delete-veg', [VegetableAjaxCRUDController::class, 'destroy']);

//Rootcrops
Route::get('root-crud-datatable', [RootcropAjaxCRUDController::class, 'index']);
Route::post('store-root', [RootcropAjaxCRUDController::class, 'store']);
Route::post('edit-root', [RootcropAjaxCRUDController::class, 'edit']);
Route::post('delete-root', [RootcropAjaxCRUDController::class, 'destroy']);

// Cacao
Route::get('cacao-crud-datatable', [CacaoAjaxCRUDController::class, 'index']);
Route::post('store-cacao', [CacaoAjaxCRUDController::class, 'store']);
Route::post('edit-cacao', [CacaoAjaxCRUDController::class, 'edit']);
Route::post('delete-cacao', [CacaoAjaxCRUDController::class, 'destroy']);

// coffee
Route::get('coffee-crud-datatable', [CoffeeAjaxCRUDController::class, 'index']);
Route::post('store-coffee', [CoffeeAjaxCRUDController::class, 'store']);
Route::post('edit-coffee', [CoffeeAjaxCRUDController::class, 'edit']);
Route::post('delete-coffee', [CoffeeAjaxCRUDController::class, 'destroy']);

// fruits
Route::get('fruits-crud-datatable', [FruitsAjaxCRUDController::class, 'index']);
Route::post('store-fruits', [FruitsAjaxCRUDController::class, 'store']);
Route::post('edit-fruits', [FruitsAjaxCRUDController::class, 'edit']);
Route::post('delete-fruits', [FruitsAjaxCRUDController::class, 'destroy']);

// bamboo
Route::get('bamboo-crud-datatable', [BambooAjaxCRUDController::class, 'index']);
Route::post('store-bamboo', [BambooAjaxCRUDController::class, 'store']);
Route::post('edit-bamboo', [BambooAjaxCRUDController::class, 'edit']);
Route::post('delete-bamboo', [BambooAjaxCRUDController::class, 'destroy']);

// Livestockpopu
Route::get('popu-crud-datatable', [LivestockPopulationAjaxCRUDController::class, 'index']);
Route::post('store-popu', [LivestockPopulationAjaxCRUDController::class, 'store']);
Route::post('edit-popu', [LivestockPopulationAjaxCRUDController::class, 'edit']);
Route::post('delete-popu', [LivestockPopulationAjaxCRUDController::class, 'destroy']);

// ROMS
Route::get('roms-crud-datatable', [ROMSAjaxCRUDController::class, 'index']);
Route::post('store-roms', [ROMSAjaxCRUDController::class, 'store']);
Route::post('edit-roms', [ROMSAjaxCRUDController::class, 'edit']);
Route::post('delete-roms', [ROMSAjaxCRUDController::class, 'destroy']);

// vaccination
Route::get('vacc-crud-datatable', [VaccinationAjaxCRUDController::class, 'index']);
Route::post('store-vacc', [VaccinationAjaxCRUDController::class, 'store']);
Route::post('edit-vacc', [VaccinationAjaxCRUDController::class, 'edit']);
Route::post('delete-vacc', [VaccinationAjaxCRUDController::class, 'destroy']);


});