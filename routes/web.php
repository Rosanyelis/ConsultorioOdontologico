<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\ArchivoController;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\JuzgadoController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ExpendienteController;
use App\Http\Controllers\CuentaCobrarController;
use App\Http\Controllers\MedioContactoController;

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


    # Usuarios
    Route::get('/usuarios', [UserController::class, 'index'])->name('user.index');
    Route::get('/usuarios/{id}/ver-usuario', [UserController::class, 'show'])->name('user.show');
    Route::get('/usuarios/agregar-usuario', [UserController::class, 'create'])->name('user.create');
    Route::post('/usuarios/guardar-usuario', [UserController::class, 'store'])->name('user.store');
    Route::get('/usuarios/{id}/editar-usuario', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/usuarios/{id}/actualizar-usuario', [UserController::class, 'update'])->name('user.update');
    Route::post('/usuarios/{id}/cambiar-estado-de-usuario', [UserController::class, 'destroy'])->name('user.destroy');

    # Juzgados
    Route::get('/juzgados', [JuzgadoController::class, 'index'])->name('juzgado.index');
    Route::get('/juzgados/agregar-juzgado', [JuzgadoController::class, 'create'])->name('juzgado.create');
    Route::post('/juzgados/guardar-juzgado', [JuzgadoController::class, 'store'])->name('juzgado.store');
    Route::get('/juzgados/{id}/editar-juzgado', [JuzgadoController::class, 'edit'])->name('juzgado.edit');
    Route::put('/juzgados/{id}/actualizar-juzgado', [JuzgadoController::class, 'update'])->name('juzgado.update');
    Route::post('/juzgados/{id}/eliminar-juzgado', [JuzgadoController::class, 'destroy'])->name('juzgado.destroy');

    # Materias
    Route::get('/materias', [MateriaController::class, 'index'])->name('materia.index');
    Route::get('/materias/agregar-materia', [MateriaController::class, 'create'])->name('materia.create');
    Route::post('/materias/guardar-materia', [MateriaController::class, 'store'])->name('materia.store');
    Route::get('/materias/{id}/editar-materia', [MateriaController::class, 'edit'])->name('materia.edit');
    Route::put('/materias/{id}/actualizar-materia', [MateriaController::class, 'update'])->name('materia.update');
    Route::post('/materias/{id}/eliminar-materia', [MateriaController::class, 'destroy'])->name('materia.destroy');

    # Medios de Contactos
    Route::get('/medios-de-contactos', [MedioContactoController::class, 'index'])->name('medio-contacto.index');
    Route::get('/medios-de-contactos/agregar-medio-de-contacto', [MedioContactoController::class, 'create'])->name('medio-contacto.create');
    Route::post('/medios-de-contactos/guardar-medio-de-contacto', [MedioContactoController::class, 'store'])->name('medio-contacto.store');
    Route::get('/medios-de-contactos/{id}/editar-medio-de-contacto', [MedioContactoController::class, 'edit'])->name('medio-contacto.edit');
    Route::put('/medios-de-contactos/{id}/actualizar-medio-de-contacto', [MedioContactoController::class, 'update'])->name('medio-contacto.update');
    Route::post('/medios-de-contactos/{id}/eliminar-medio-de-contacto', [MedioContactoController::class, 'destroy'])->name('medio-contacto.destroy');

    # Clientes
    Route::get('/clientes', [ClienteController::class, 'index'])->name('cliente.index');
    Route::get('/clientes/agregar-cliente', [ClienteController::class, 'create'])->name('cliente.create');
    Route::post('/clientes/guardar-cliente', [ClienteController::class, 'store'])->name('cliente.store');
    Route::get('/clientes/{id}/ver-cliente', [ClienteController::class, 'show'])->name('cliente.show');
    Route::get('/clientes/{id}/editar-cliente', [ClienteController::class, 'edit'])->name('cliente.edit');
    Route::put('/clientes/{id}/actualizar-cliente', [ClienteController::class, 'update'])->name('cliente.update');
    Route::post('/clientes/{id}/eliminar-cliente', [ClienteController::class, 'destroy'])->name('cliente.destroy');

    #cuentas por cobrar
    Route::get('/cuentas-por-cobrar', [CuentaCobrarController::class, 'index'])->name('cuenta-cobrar.index');
    Route::get('/cuentas-por-cobrar/{id}/abonar-cuenta-por-cobrar', [CuentaCobrarController::class, 'abonar'])->name('cuenta-cobrar.abonar');
    Route::post('/cuentas-por-cobrar/{id}/guardar-abono', [CuentaCobrarController::class, 'store'])->name('cuenta-cobrar.store');
    Route::get('/cuentas-por-cobrar/{id}/ver-cuenta-por-cobrar', [CuentaCobrarController::class, 'show'])->name('cuenta-cobrar.show');

    #Expedientes
    Route::get('/expedientes', [ExpendienteController::class, 'index'])->name('expediente.index');
    Route::get('/expedientes/agregar-expediente', [ExpendienteController::class, 'create'])->name('expediente.create');
    Route::post('/expedientes/guardar-expediente', [ExpendienteController::class, 'store'])->name('expediente.store');
    Route::get('/expedientes/{id}/ver-expediente', [ExpendienteController::class, 'show'])->name('expediente.show');
    Route::get('/expedientes/{id}/editar-expediente', [ExpendienteController::class, 'edit'])->name('expediente.edit');
    Route::put('/expedientes/{id}/actualizar-expediente', [ExpendienteController::class, 'update'])->name('expediente.update');
    Route::post('/expedientes/{id}/cambiar-estado-de-expediente', [ExpendienteController::class, 'changeStatus'])->name('expediente.changestatus');

    #Notas
    Route::post('/notas/{id}/guardar-nota', [NotaController::class, 'store'])->name('nota.store');
    Route::post('/notas/{id}/{nota}/eliminar-nota', [NotaController::class, 'destroy'])->name('nota.destroy');

    #Archivos
    Route::post('/archivos/{id}/guardar-archivo', [ArchivoController::class, 'store'])->name('file.store');
    Route::post('/archivos/{id}/{archivo}/eliminar-archivo', [ArchivoController::class, 'destroy'])->name('file.destroy');

    # Roles
    Route::get('/roles', [RoleController::class, 'index'])->name('role.index');
    Route::get('/roles/agregar-rol', [RoleController::class, 'create'])->name('role.create');
    Route::post('/roles/guardar-rol', [RoleController::class, 'store'])->name('role.store');
    Route::get('/roles/{id}/ver-rol', [RoleController::class, 'show'])->name('role.show');
    Route::get('/roles/{id}/editar-rol', [RoleController::class, 'edit'])->name('role.edit');
    Route::put('/roles/{id}/actualizar-rol', [RoleController::class, 'update'])->name('role.update');
    Route::post('/roles/{id}/cambiar-estado-de-rol', [RoleController::class, 'destroy'])->name('role.destroy');
});

require __DIR__.'/auth.php';
