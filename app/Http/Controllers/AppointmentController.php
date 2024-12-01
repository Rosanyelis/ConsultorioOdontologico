<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\ReasonTreatment;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function appointmentJson()
    {

        $data = appointment::with(['patient'])->get();

        $events = [];
        if ($data == null) {
            $events[] = [];
        }else{
            foreach ($data as $appointment) {
                $events[] = [
                    'id' => $appointment->id,
                    'title' => $appointment->title,
                    'start' => $appointment->start,
                    'end' => $appointment->end,
                    'className' => 'fc-'.$appointment->event_color,
                    'description' => $appointment->description,
                    'patient_id' => $appointment->patient->id
                ];
            }
        }
        return $events;

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = Patient::all();
        $reason = ReasonTreatment::all();
        return view('appointment.index', compact('patients', 'reason'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeAjax(Request $request)
    {
        $patient = Patient::find($request->patient_id);
        $reason = ReasonTreatment::find($request->reason_treatment_id);
        $description = '<strong>Paciente:</strong> '.$patient->firstname. ' '.$patient->lastname.' '.$patient->second_surname. '<br>';

        $event = Appointment::create([
            'patient_id' => $request->patient_id,
            'start' => $request->start,
            'end' => $request->end,
            'title' => $reason->name,
            'event_color' => $reason->event_theme,
            'description' => $description,
        ]);

        return response()->json($event);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Appointment::find($id);
        $data->delete();

        return response()->json($data);
    }

    public function typeEvent($event)
    {
        switch ($event) {
            case 'Consulta':
                $color = 'event-primary';
                break;
            case 'Limpieza':
                $color = 'event-success';
                break;
            case 'Empaste':
                $color = 'event-info';
                break;
            case 'Extracción':
                $color = 'event-warning';
                break;
            case 'Endodoncia':
                $color = 'event-danger';
                break;
            case 'Corona':
                $color = 'event-pink';
                break;
            case 'Otro':
                $color = 'event-primary-dim';
                break;
            default:
                $color = 'event-primary';
                break;
        }
        return $color;
    }
}
