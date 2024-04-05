<?php

namespace App\Imports;

use Carbon\Carbon;
use App\Models\Patient;
use App\Models\PatientHealth;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PatientsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        $birthdate = Carbon::parse($row['fecha_nacimiento']);
        $dateVisit;
        if ($row['fecha_ultima_consulta'] == '') {
            $dateVisit = null;
        }else{
            $lastvisit = Carbon::parse($row['fecha_ultima_consulta']);
            $dateVisit = $lastvisit->format('Y-m-d');
        }

        $patient = Patient::updateOrCreate([
            'firstname'         => $row['primer_nombre'],
            'second_name'       => $row['segundo_nombre'],
            'lastname'          => $row['primer_apellido'],
            'second_surname'    => $row['segundo_apellido'],
            'phone'             => $row['telefono'],
            'whatsapp'          => $row['whatsapp'],
            'birthdate'         => $birthdate->format('Y-m-d'),
            'age'               => $row['edad'],
            'civil_status'      => $row['estado_civil'],
            'sex'               => $row['sexo'],
            'occupation'        => $row['ocupacion'],
            'last_visit_date'   => $dateVisit,
        ]);
        $patientH = PatientHealth::updateOrCreate([
            'patient_id'            => $patient->id,
            'has_disease'           => $row['posee_alguna_enfermedad'],
            'disease'               => $row['especifique_las_enfermedades_si_posee'],
            'medical_treatment'     => $row['esta_bajo_tratamiento_medico'],
            'treatment_text'        => $row['especifique_el_tratamiento_en_el_que_esta'],
            'allergies'             => $row['posee_alergias'],
            'epilepsy'              => $row['tiene_epilepsia'],
            'anemia'                => $row['tiene_anemia'],
            'hepatitis'             => $row['tiene_hepatitis'],
            'hypertension'          => $row['tiene_hipertension'],
            'vih'                   => $row['tiene_vih'],
            'hypotension'           => $row['tiene_hipotension'],
            'tuberculosis'          => $row['tiene_tuberculosis'],
            'heart_disease'         => $row['tiene_cardiopatias'],
            'have_diabetes'         => $row['tiene_diabetes'],
            'type_diabete'          => $row['indique_el_tipo_de_diabetes'],
            'pregnant'              => $row['esta_embarazada'],
            'drugs'                 => $row['consume_drogas'],
            'alcohol'               => $row['consume_alcohol'],
            'tobacco'               => $row['consume_tabaco'],
            'asthma'                => $row['tiene_asma'],
            'asthma_text'           => $row['ultima_crisis_de_asma'],
            'ets'                   => $row['tiene_ets'],
            'ets_text'              => $row['indique_las_ets_si_posee'],
            'harmful_habits'        => $row['habitos_pernicioso'],
        ]);
    }
}
