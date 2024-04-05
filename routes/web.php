<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AppointmentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return redirect()->route('login');
});

Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    # Citas
    Route::get('/citasAjax', [AppointmentController::class, 'appointmentJson'])->name('appointment.appointmentJson');
    Route::get('/citas', [AppointmentController::class, 'index'])->name('appointment.index');
    Route::post('/citas/agendar-cita', [AppointmentController::class, 'storeAjax'])->name('appointment.store');
    Route::post('/citas/{id}/eliminar-cita', [AppointmentController::class, 'destroy'])->name('appointment.destroy');

    # Cotizaciones y Presupuesto
    Route::get('/cotizaciones-y-presupuesto', [QuoteController::class, 'index'])->name('quote.index');
    Route::post('/generar-presupuesto', [QuoteController::class, 'pdf'])->name('quote.pdf');

    # Pacientes
    Route::get('/pacientes', [PatientController::class, 'index'])->name('patient.index');
    Route::get('/pacientes/agregar-paciente', [PatientController::class, 'create'])->name('patient.create');
    Route::post('/pacientes/guardar-paciente', [PatientController::class, 'store'])->name('patient.store');
    Route::get('/pacientes/{id}/ver-paciente', [PatientController::class, 'show'])->name('patient.show');
    Route::get('/pacientes/{id}/examen-intraoral-ajax', [PatientController::class, 'showteethIntraoralAjax'])->name('patient.showteethIntraoralAjax');
    Route::get('/pacientes/{id}/plan-de-tratamiento-ajax', [PatientController::class, 'showTreatmentPlanAjax'])->name('patient.showTreatmentPlanAjax');
    Route::get('/pacientes/{id}/editar-paciente', [PatientController::class, 'edit'])->name('patient.edit');
    Route::put('/pacientes/{id}/actualizar-paciente', [PatientController::class, 'update'])->name('patient.update');
    Route::post('/pacientes/importar-datos-de-pacientes', [PatientController::class, 'import'])->name('patient.import');
    # Pacientes - Examen Intraoral
    Route::get('/pacientes/{id}/examen-intraoral', [PatientController::class, 'create_examen_intraoral'])->name('patient.examen-intraoral');
    Route::post('/pacientes/{id}/guardar-examen-intraoral', [PatientController::class, 'store_examen_intraoral'])->name('patient.store-examen-intraoral');
    # Pacientes - Plan de Tratamiento
    Route::get('/pacientes/{id}/plan-de-tratamiento', [PatientController::class, 'create_treatment_plan'])->name('patient.treatment-plan');
    Route::post('/pacientes/{id}/guardar-plan-de-tratamiento', [PatientController::class, 'store_history_dental'])->name('patient.store-treatment-plan');
    # Pacientes - Historia Dental
    Route::get('/pacientes/{id}/crear-historia-dental', [PatientController::class, 'create_history_dental'])->name('patient.history-dental');
    Route::post('/pacientes/{id}/guardar-historia-dental', [PatientController::class, 'store_history_dental'])->name('patient.store-history-dental');
    # Pacientes - Recetas o Recipes Medicos
    Route::get('/pacientes/{id}/crear-receta', [PatientController::class, 'create_recipe'])->name('patient.recipe');
    Route::post('/pacientes/{id}/guardar-receta', [PatientController::class, 'store_recipe'])->name('patient.store-recipe');
    # Pacientes - Pagos
    Route::get('/pacientes/{id}/crear-pago', [PatientController::class, 'create_pay'])->name('patient.pay');
    Route::post('/pacientes/{id}/guardar-pago', [PatientController::class, 'store_pay'])->name('patient.store-pay');
    # Pacientes - Firma
    Route::get('/pacientes/{id}/crear-firma', [PatientController::class, 'create_signature'])->name('patient.signature');
    Route::post('/pacientes/{id}/guardar-firma', [PatientController::class, 'store_signature'])->name('patient.store-signature');
    # Pacientes -  Notas
    Route::post('/pacientes/{id}/guardar-nota', [PatientController::class, 'store_note'])->name('patient.store-note');
    # Finanzas o Pagos
    Route::get('/finanzas', [BillingController::class, 'index'])->name('billing.index');

    # Usuarios
    Route::get('/usuarios', [UserController::class, 'index'])->name('user.index');
    Route::get('/usuarios/{id}/ver-usuario', [UserController::class, 'show'])->name('user.show');
    Route::get('/usuarios/agregar-usuario', [UserController::class, 'create'])->name('user.create');
    Route::post('/usuarios/guardar-usuario', [UserController::class, 'store'])->name('user.store');
    Route::get('/usuarios/{id}/editar-usuario', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/usuarios/{id}/actualizar-usuario', [UserController::class, 'update'])->name('user.update');
    Route::post('/usuarios/{id}/cambiar-estado-de-usuario', [UserController::class, 'destroy'])->name('user.destroy');
});

require __DIR__.'/auth.php';
