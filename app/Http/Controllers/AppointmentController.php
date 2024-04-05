<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function appointmentJson()
    {
        $data = appointment::with(['patient', 'doctor'])->get();
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
        $doctors = Doctor::all();
        return view('appointment.index', compact('patients', 'doctors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeAjax(Request $request)
    {
        $patient = Patient::find($request->patient_id);
        $doctor = Doctor::find($request->doctor_id);
        $description = '<strong>Paciente:</strong> '.$patient->firstname. ' ' .$patient->second_name.
        ' '.$patient->lastname.' '.$patient->second_surname. '<br> <strong>Doctor:</strong>
        '.$doctor->firstname.' '.$doctor->lastname. ' <br>';
        $eventColor = $this->typeEvent($request->title);


        $event = Appointment::create([
            'patient_id' => $request->patient_id,
            'doctor_id' => $request->doctor_id,
            'start' => $request->start,
            'end' => $request->end,
            'title' => $request->title,
            'event_color' => $eventColor,
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
