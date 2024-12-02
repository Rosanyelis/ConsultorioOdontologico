<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DentalRecordController;
use App\Http\Controllers\HistoryDentalController;
use App\Http\Controllers\ReasonTreatmentController;
use App\Http\Controllers\TypeOfTreatmentsController;
use App\Http\Controllers\ObservationTemplateController;
use App\Http\Controllers\MedicationInstructionController;

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
    Route::get('/cotizaciones-y-presupuesto/agregar-cotizacion', [QuoteController::class, 'create'])->name('quote.create');
    Route::post('/cotizaciones-y-presupuesto/guardar-cotizacion', [QuoteController::class, 'store'])->name('quote.store');
    Route::get('/cotizaciones-y-presupuesto/{id}/ver-cotizacion', [QuoteController::class, 'show'])->name('quote.show');
    Route::get('/cotizaciones-y-presupuesto/{id}/generar-presupuesto', [QuoteController::class, 'pdf'])->name('quote.pdf');

    # Pacientes
    Route::get('/pacientes', [PatientController::class, 'index'])->name('patient.index');
    Route::get('/pacientes/agregar-paciente', [PatientController::class, 'create'])->name('patient.create');
    Route::post('/pacientes/guardar-paciente', [PatientController::class, 'store'])->name('patient.store');
    Route::get('/pacientes/{id}/ver-paciente', [PatientController::class, 'show'])->name('patient.show');
    Route::get('/pacientes/{id}/editar-paciente', [PatientController::class, 'edit'])->name('patient.edit');
    Route::put('/pacientes/{id}/actualizar-paciente', [PatientController::class, 'update'])->name('patient.update');
    Route::post('/pacientes/importar-datos-de-pacientes', [PatientController::class, 'import'])->name('patient.import');


    # Pacientes - Historia Dental
    Route::get('/pacientes/{id}/historia-dental', [HistoryDentalController::class, 'index'])->name('patient.history-dental');
    Route::get('/pacientes/{id}/crear-historia-dental', [HistoryDentalController::class, 'create'])->name('patient.create-history-dental');
    Route::post('/pacientes/{id}/guardar-historia-dental', [HistoryDentalController::class, 'store'])->name('patient.store-history-dental');
    Route::get('/pacientes/{id}/{history_id}/ver-historia-dental', [HistoryDentalController::class, 'show'])->name('patient.show-history-dental');
    Route::get('/pacientes/{id}/imprimir-historial-de-paciente', [HistoryDentalController::class, 'print_history'])->name('patient.print_history');

    # Pacientes - Registros Dentales
    Route::get('/pacientes/{id}/registros-dentales', [DentalRecordController::class, 'index'])->name('patient.index_record_dental');
    Route::get('/pacientes/{id}/crear-registro-dental', [DentalRecordController::class, 'create'])->name('patient.create_record_dental');
    Route::post('/pacientes/{id}/guardar-registro-dental', [DentalRecordController::class, 'store'])->name('patient.store_record_dental');
    Route::get('/pacientes/{id}/{record_id}/ver-registro-dental', [DentalRecordController::class, 'show'])->name('patient.show_record_dental');

    # Pacientes - Recetas o Recipes Medicos
    Route::get('/pacientes/{id}/crear-receta', [RecipeController::class, 'create'])->name('patient.recipe');
    Route::post('/pacientes/{id}/guardar-receta', [RecipeController::class, 'store'])->name('patient.store-recipe');
    Route::get('/pacientes/{id}/{recipe_id}/ver-receta', [RecipeController::class, 'show'])->name('patient.show-recipe');
    Route::get('/pacientes/{id}/{recipe_id}/imprimir-receta', [RecipeController::class, 'print_recipe'])->name('patient.print-recipe');

    # Pacientes - Pagos
    Route::get('/pacientes/{id}/crear-pago', [PatientController::class, 'create_pay'])->name('patient.pay');
    Route::post('/pacientes/{id}/guardar-pago', [PatientController::class, 'store_pay'])->name('patient.store-pay');
    Route::get('/pacientes/{id}/ver-pago', [PatientController::class, 'show_pay'])->name('patient.show-pay');
    Route::get('/pacientes/{id}/{pay_id}/abonar-pago', [PatientController::class, 'pay_invoice'])->name('patient.pay-invoice');
    Route::post('/pacientes/{id}/{pay_id}/guardar-abonar-pago', [PatientController::class, 'store_pay_invoice'])->name('patient.store-pay-invoice');
    Route::get('/pacientes/{id}/{pay_id}/ver-pago', [PatientController::class, 'show_pay_invoice'])->name('patient.show-pay-invoice');

    # Pacientes - Imagenes
    Route::post('/pacientes/{id}/guardar-archivo', [PatientController::class, 'store_file'])->name('patient.store-file');

    # Pacientes -  Notas
    Route::post('/pacientes/{id}/guardar-nota', [NoteController::class, 'store'])->name('patient.store-note');
    Route::post('/pacientes/{id}/{note_id}/eliminar-nota', [NoteController::class, 'destroy'])->name('patient.destroy-note');


    # Finanzas o Pagos
    Route::get('/finanzas', [BillingController::class, 'index'])->name('billing.index');
    Route::post('/finanzas/guardar-factura', [BillingController::class, 'store'])->name('billing.store');
    Route::get('/finanzas/{id}/ver-factura', [BillingController::class, 'show'])->name('billing.show');
    Route::get('finanzas/{id}/abonar-factura', [BillingController::class, 'pay'])->name('billing.pay');
    Route::post('finanzas/{id}/guardar-abonar-factura', [BillingController::class, 'store_pay'])->name('billing.store-pay');
    Route::get('/finanzas/{id}/descargar-factura', [BillingController::class, 'invoice_pdf'])->name('billing.invoice_pdf');

    # Usuarios
    Route::get('/usuarios', [UserController::class, 'index'])->name('user.index');
    Route::get('/usuarios/{id}/ver-usuario', [UserController::class, 'show'])->name('user.show');
    Route::get('/usuarios/agregar-usuario', [UserController::class, 'create'])->name('user.create');
    Route::post('/usuarios/guardar-usuario', [UserController::class, 'store'])->name('user.store');
    Route::get('/usuarios/{id}/editar-usuario', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/usuarios/{id}/actualizar-usuario', [UserController::class, 'update'])->name('user.update');
    Route::post('/usuarios/{id}/cambiar-estado-de-usuario', [UserController::class, 'destroy'])->name('user.destroy');

    # Configuraciones
    Route::get('/configuraciones', [SettingController::class, 'index'])->name('settings.index');
    Route::put('/configuraciones/{id}/actualizar-configuracion', [SettingController::class, 'update'])->name('settings.update');


    # tipo de tratamientos
    Route::get('/tratamientos', [TypeOfTreatmentsController::class, 'index'])->name('treatments.index');
    Route::post('/tratamientos/guardar-tratamiento', [TypeOfTreatmentsController::class, 'store'])->name('treatments.store');
    Route::put('/tratamientos/{id}/actualizar-tratamiento', [TypeOfTreatmentsController::class, 'update'])->name('treatments.update');
    Route::post('/tratamientos/{id}/eliminar-tratamiento', [TypeOfTreatmentsController::class, 'destroy'])->name('treatments.destroy');

    # Medicamentos
    Route::get('/medicamentos', [MedicineController::class, 'index'])->name('medicine.index');
    Route::post('/medicamentos/guardar-medicamento', [MedicineController::class, 'store'])->name('medicine.store');
    Route::put('/medicamentos/{id}/actualizar-medicamento', [MedicineController::class, 'update'])->name('medicine.update');
    Route::post('/medicamentos/{id}/eliminar-medicamento', [MedicineController::class, 'destroy'])->name('medicine.destroy');

    # Motivo de tratamientos
    Route::get('/motivo-de-tratamientos', [ReasonTreatmentController::class, 'index'])->name('reason-treatment.index');
    Route::get('/motivo-de-tratamientos/{id}/ver-motivo', [ReasonTreatmentController::class, 'show'])->name('reason-treatment.show');
    Route::get('/motivo-de-tratamientos/agregar-motivo', [ReasonTreatmentController::class, 'create'])->name('reason-treatment.create');
    Route::post('/motivo-de-tratamientos/guardar-motivo', [ReasonTreatmentController::class, 'store'])->name('reason-treatment.store');
    Route::get('/motivo-de-tratamientos/{id}/editar-motivo', [ReasonTreatmentController::class, 'edit'])->name('reason-treatment.edit');
    Route::put('/motivo-de-tratamientos/{id}/actualizar-motivo', [ReasonTreatmentController::class, 'update'])->name('reason-treatment.update');
    Route::post('/motivo-de-tratamientos/{id}/eliminar-motivo', [ReasonTreatmentController::class, 'destroy'])->name('reason-treatment.destroy');

    # Instrucciones de Toma
    Route::get('/instrucciones-de-medicamento', [MedicationInstructionController::class, 'index'])->name('medication-instruction.index');
    Route::post('/instrucciones-de-medicamento/guardar-instruccion-de-medicamento', [MedicationInstructionController::class, 'store'])->name('medication-instruction.store');
    Route::post('/instrucciones-de-medicamento/{id}/eliminar-instruccion-de-medicamento', [MedicationInstructionController::class, 'destroy'])->name('medication-instruction.destroy');

    # Templates de Observaciones o Recomendaciones
    Route::get('/plantilla-de-observaciones-y-recomedanciones', [ObservationTemplateController::class, 'index'])->name('observation-template.index');
    Route::post('/plantilla-de-observaciones-y-recomedanciones/guardar-plantilla', [ObservationTemplateController::class, 'store'])->name('observation-template.store');
    Route::post('/plantilla-de-observaciones-y-recomedanciones/{id}/eliminar-plantilla', [ObservationTemplateController::class, 'destroy'])->name('observation-template.destroy');


});

Route::get('comandos', function () {
    // Artisan::call('optimize');
    // Artisan::call('view:clear');
    // Artisan::call('cache:clear');
    // Artisan::call('route:clear');
    // Artisan::call('config:clear');
    // Artisan::call('filament:clear-cached-components');
    // Artisan::call('filament:cache-components');
    // Artisan::call('config:cache');
    // Artisan::call('view:cache');
    // Artisan::call('route:cache');
    //Artisan::call('icons:cache');
    Artisan::call('storage:link');

    return 'Comandos ejecutados con éxitos';
});

require __DIR__.'/auth.php';
