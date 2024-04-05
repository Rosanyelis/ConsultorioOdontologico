                                                            <div class="nk-block nk-block-between">
                                                                <div class="nk-block-head">
                                                                    <h6 class="title"></h6>
                                                                </div><!-- .nk-block-head -->
                                                                <div class="nk-block">
                                                                    <a href="#" class="btn btn-white btn-icon btn-outline-light" data-toggle="modal"
                                                                        data-target="#editPersonal">
                                                                        <em class="icon ni ni-edit"></em>
                                                                    </a>
                                                                </div>
                                                            </div><!-- .nk-block-between  -->
                                                            <div class="nk-block">
                                                                <div class="profile-ud-list">
                                                                    <div class="profile-ud-item">
                                                                        <div class="profile-ud wider">
                                                                            <span class="profile-ud-label">Primer Nombre</span>
                                                                            <span class="profile-ud-value">{{ $data->firstname }}</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="profile-ud-item">
                                                                        <div class="profile-ud wider">
                                                                            <span class="profile-ud-label">Segundo Nombre</span>
                                                                            <span class="profile-ud-value">{{ $data->second_name }}</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="profile-ud-item">
                                                                        <div class="profile-ud wider">
                                                                            <span class="profile-ud-label">Primer Apellido</span>
                                                                            <span class="profile-ud-value">{{ $data->lastname }}</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="profile-ud-item">
                                                                        <div class="profile-ud wider">
                                                                            <span class="profile-ud-label">Segundo Apellido</span>
                                                                            <span class="profile-ud-value">{{ $data->second_surname }}</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="profile-ud-item">
                                                                        <div class="profile-ud wider">
                                                                            <span class="profile-ud-label">Sexo</span>
                                                                            <span class="profile-ud-value">
                                                                                @switch($data->sex)
                                                                                    @case($data->sex == 'F')
                                                                                        Femenino
                                                                                        @break
                                                                                    @case($data->sex == 'M')
                                                                                        Masculino
                                                                                        @break
                                                                                    @case($data->sex == 'O')
                                                                                        Otro
                                                                                        @break
                                                                                @endswitch
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="profile-ud-item">
                                                                        <div class="profile-ud wider">
                                                                            <span class="profile-ud-label">Edad</span>
                                                                            <span class="profile-ud-value">{{ $data->age }}</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="profile-ud-item">
                                                                        <div class="profile-ud wider">
                                                                            <span class="profile-ud-label">Teléfono</span>
                                                                            <span class="profile-ud-value">{{ $data->phone }}</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="profile-ud-item">
                                                                        <div class="profile-ud wider">
                                                                            <span class="profile-ud-label">Fecha Nac.</span>
                                                                            <span class="profile-ud-value">{{ $data->birthdate }}</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="profile-ud-item">
                                                                        <div class="profile-ud wider">
                                                                            <span class="profile-ud-label">Whatsapp</span>
                                                                            <span class="profile-ud-value">+{{ $data->whatsapp }}</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="profile-ud-item">
                                                                        <div class="profile-ud wider">
                                                                            <span class="profile-ud-label">Estado Civil</span>
                                                                            <span class="profile-ud-value">{{ $data->civil_status }}</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="profile-ud-item">
                                                                        <div class="profile-ud wider">
                                                                            <span class="profile-ud-label">Ocupación</span>
                                                                            <span class="profile-ud-value">{{ $data->occupation }}</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="profile-ud-item">
                                                                        <div class="profile-ud wider">
                                                                            <span class="profile-ud-label">Firma </span>
                                                                            <span class="profile-ud-value"><img width="70%" src="{{ asset('signatures/'.$data->url_signature. '') }}"></span>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- .profile-ud-list -->
                                                            </div><!-- .nk-block -->
                                                            <div class="nk-divider divider md"></div>
                                                            <div id="accordion-1" class="accordion accordion-s2">
                                                                <div class="accordion-item">
                                                                    <a href="#" class="accordion-head" data-toggle="collapse" data-target="#accordion-item-1-1">
                                                                        <h5 class="title nk-block-title">Salud Actual del Paciente</h5>
                                                                        <span class="accordion-icon"></span>
                                                                    </a>
                                                                    <div class="accordion-body collapse " id="accordion-item-1-1" data-parent="#accordion-1">
                                                                        <div class="accordion-inner">
                                                                            <div class="nk-block">
                                                                                <div class="row gy-4">
                                                                                    <div class="col-xxl-12 col-md-12 table-responsive">
                                                                                        <table class="table">
                                                                                            <tr>
                                                                                                <td>¿Posee alguna enfermedad?</td>
                                                                                                <td>{{ $data->patient_health->has_disease }}</td>
                                                                                            </tr>

                                                                                            <tr>
                                                                                                <td colspan="2">{{ $data->patient_health->disease }}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>¿Está bajo tratamiento médico?</td>
                                                                                                <td>{{ $data->patient_health->medical_treatment }}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td colspan="2">{{ $data->patient_health->treatment_text }}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>¿Posee alérgias?</td>
                                                                                                <td>{{ $data->patient_health->allergies }}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>¿Tiene epilepsia?</td>
                                                                                                <td>{{ $data->patient_health->epilepsy }}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>¿Tiene anemia?</td>
                                                                                                <td>{{ $data->patient_health->anemia }}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>¿Tiene hepatitis?</td>
                                                                                                <td>{{ $data->patient_health->hepatitis }}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>¿Tiene hipertension?</td>
                                                                                                <td>{{ $data->patient_health->hypertension }}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>¿Tiene VIH?</td>
                                                                                                <td>{{ $data->patient_health->vih }}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>¿Tiene hipotension?</td>
                                                                                                <td>{{ $data->patient_health->hypotension }}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>¿Tiene tuberculósis?</td>
                                                                                                <td>{{ $data->patient_health->tuberculosis }}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>¿Tiene cardiopatías?</td>
                                                                                                <td>{{ $data->patient_health->heart_disease }}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>¿Tiene diabetes?</td>
                                                                                                <td>{{ $data->patient_health->have_diabetes }}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td colspan="2">{{ $data->patient_health->type_diabete }}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>¿Está embarazada?</td>
                                                                                                <td>{{ $data->patient_health->pregnant }}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>¿Consume drogas?</td>
                                                                                                <td>{{ $data->patient_health->drugs }}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>¿Consume alcohol?</td>
                                                                                                <td>{{ $data->patient_health->alcohol }}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>¿Consume tabaco?</td>
                                                                                                <td>{{ $data->patient_health->tobacco }}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>¿Tiene asma?</td>
                                                                                                <td>{{ $data->patient_health->asthma }}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td colspan="2">
                                                                                                    <label class="form-label">Última crísis de asma</label>
                                                                                                    <div class="form-control-wrap">
                                                                                                        {{ $data->patient_health->asthma_text }}
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>¿Tiene ETS?</td>
                                                                                                <td>{{ $data->patient_health->ets }}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td colspan="2">{{ $data->patient_health->ets_text }}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td colspan="2">{{ $data->patient_health->harmful_habits }}</td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="nk-divider divider md"></div>
                                                                    <a href="#" class="accordion-head" data-toggle="collapse" data-target="#accordion-item-2-2">
                                                                        <h5 class="title nk-block-title">Examen Intraoral del Paciente</h5>
                                                                        <span class="accordion-icon"></span>
                                                                    </a>
                                                                    <div class="accordion-body collapse " id="accordion-item-2-2" data-parent="#accordion-1">
                                                                        <div class="accordion-inner">
                                                                            <div class="nk-block">
                                                                                <div class="table-responsive">
                                                                                    <table class="table">
                                                                                        <tr>
                                                                                            <th>Carrillos:</th><td>@if($data->intraoral_exam) {{ $data->intraoral_exam->cheeks }}@endif</td>
                                                                                            <th>Mucosa:</th><td>@if($data->intraoral_exam) {{ $data->intraoral_exam->mucous_membranes }}@endif</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th>Encía:</th><td>@if($data->intraoral_exam){{ $data->intraoral_exam->gums }}@endif</td>
                                                                                            <th>Lengua:</th><td>@if($data->intraoral_exam){{ $data->intraoral_exam->language }}@endif</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th>Paladar:</th><td>@if($data->intraoral_exam){{ $data->intraoral_exam->palate }}@endif</td>
                                                                                            <th>Torus:</th><td>@if($data->intraoral_exam){{ $data->intraoral_exam->torus }}@endif</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th>Aftas:</th><td>@if($data->intraoral_exam){{ $data->intraoral_exam->aftas }}@endif</td>
                                                                                            <th>Sarro Supragingival:</th><td>@if($data->intraoral_exam){{ $data->intraoral_exam->supragingival_tartar }}@endif</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th>Subgingival:</th><td>@if($data->intraoral_exam){{ $data->intraoral_exam->subgingival }}@endif</td>
                                                                                            <th>Placa:</th><td>@if($data->intraoral_exam){{ $data->intraoral_exam->plate }}@endif</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th>Apiñamiento:</th><td>@if($data->intraoral_exam){{ $data->intraoral_exam->crowding }}@endif</td>
                                                                                            <th></th><td></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th>Observaciones:</th><td colspan="3">@if($data->intraoral_exam){{ $data->intraoral_exam->observations }}@endif</td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </div>
                                                                                <div class="table-responsive mt-3">
                                                                                    <table class="table">
                                                                                        <tr>
                                                                                            <td colspan="4" class="text-center">Leyenda</td>
                                                                                        </tr>
                                                                                        <tr class="text-center">
                                                                                            <th><img width="40" src="{{ asset('images/diente/obturacion.png') }}" alt="obturacion"><br> Diente con Obturación</th>
                                                                                            <th><img width="40" src="{{ asset('images/diente/endodoncia.png') }}" alt="endodoncia"><br> Diente con Endodoncia</th>
                                                                                            <th><img width="40" src="{{ asset('images/diente/exodoncia.png') }}" alt="exodoncia"><br> Diente con Exodoncia</th>
                                                                                            <th><img width="40" src="{{ asset('images/diente/protesis_corona.png') }}" alt="protesis/corona"><br> Diente con Protesis/Corona</th>
                                                                                        </tr>
                                                                                    </table>
                                                                                </div>
                                                                                <div class="table-responsive mt-3">
                                                                                    <table class="text-center mx-auto">
                                                                                        <tr>
                                                                                            <td>18</td>
                                                                                            <td>17</td>
                                                                                            <td>16</td>
                                                                                            <td>15</td>
                                                                                            <td>14</td>
                                                                                            <td>13</td>
                                                                                            <td>12</td>
                                                                                            <td>11</td>
                                                                                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                                                            <td>21</td>
                                                                                            <td>22</td>
                                                                                            <td>23</td>
                                                                                            <td>24</td>
                                                                                            <td>25</td>
                                                                                            <td>26</td>
                                                                                            <td>27</td>
                                                                                            <td>28</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td><img id="teeth18" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                            <td><img id="teeth17" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                            <td><img id="teeth16" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                            <td><img id="teeth15" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                            <td><img id="teeth14" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                            <td><img id="teeth13" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                            <td><img id="teeth12" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                            <td><img id="teeth11" width="40" src="{{ asset('images/diente/diente.png') }}"></td>

                                                                                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

                                                                                            <td><img id="teeth21" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                            <td><img id="teeth22" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                            <td><img id="teeth23" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                            <td><img id="teeth24" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                            <td><img id="teeth25" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                            <td><img id="teeth26" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                            <td><img id="teeth27" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                            <td><img id="teeth28" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                        </tr>


                                                                                        <tr>
                                                                                            <td><img id="teeth48" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                            <td><img id="teeth47" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                            <td><img id="teeth46" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                            <td><img id="teeth45" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                            <td><img id="teeth44" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                            <td><img id="teeth43" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                            <td><img id="teeth42" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                            <td><img id="teeth41" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                                                            <td><img id="teeth31" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                            <td><img id="teeth32" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                            <td><img id="teeth33" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                            <td><img id="teeth34" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                            <td><img id="teeth35" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                            <td><img id="teeth36" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                            <td><img id="teeth37" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                            <td><img id="teeth38" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>48</td>
                                                                                            <td>47</td>
                                                                                            <td>46</td>
                                                                                            <td>45</td>
                                                                                            <td>44</td>
                                                                                            <td>43</td>
                                                                                            <td>42</td>
                                                                                            <td>41</td>
                                                                                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                                                            <td>31</td>
                                                                                            <td>32</td>
                                                                                            <td>33</td>
                                                                                            <td>34</td>
                                                                                            <td>35</td>
                                                                                            <td>36</td>
                                                                                            <td>37</td>
                                                                                            <td>38</td>
                                                                                        </tr>
                                                                                    </table>
                                                                                    <table class="text-center mx-auto mt-3">
                                                                                        <tr>
                                                                                            <td>55</td>
                                                                                            <td>54</td>
                                                                                            <td>53</td>
                                                                                            <td>52</td>
                                                                                            <td>51</td>
                                                                                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                                                            <td>61</td>
                                                                                            <td>62</td>
                                                                                            <td>63</td>
                                                                                            <td>64</td>
                                                                                            <td>65</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td><img id="teeth55" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                            <td><img id="teeth54" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                            <td><img id="teeth53" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                            <td><img id="teeth52" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                            <td><img id="teeth51" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                                                            <td><img id="teeth61" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                            <td><img id="teeth62" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                            <td><img id="teeth63" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                            <td><img id="teeth64" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                            <td><img id="teeth65" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td><img id="teeth85" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                            <td><img id="teeth84" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                            <td><img id="teeth83" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                            <td><img id="teeth82" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                            <td><img id="teeth81" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                                                            <td><img id="teeth71" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                            <td><img id="teeth72" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                            <td><img id="teeth73" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                            <td><img id="teeth74" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                            <td><img id="teeth75" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>85</td>
                                                                                            <td>84</td>
                                                                                            <td>83</td>
                                                                                            <td>82</td>
                                                                                            <td>81</td>
                                                                                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                                                            <td>71</td>
                                                                                            <td>72</td>
                                                                                            <td>73</td>
                                                                                            <td>74</td>
                                                                                            <td>75</td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="nk-divider divider md"></div>
                                                                    <a href="#" class="accordion-head" data-toggle="collapse" data-target="#accordion-item-3-3">
                                                                        <h5 class="title nk-block-title">Plan de Tratamiento del Paciente</h5>
                                                                        <span class="accordion-icon"></span>
                                                                    </a>
                                                                    <div class="accordion-body collapse " id="accordion-item-3-3" data-parent="#accordion-1">
                                                                        <div class="accordion-inner">
                                                                            <div class="table-responsive mt-3">
                                                                                <table class="table">
                                                                                    <tr>
                                                                                        <td colspan="4" class="text-center">Leyenda</td>
                                                                                    </tr>
                                                                                    <tr class="text-center">
                                                                                        <th><img width="40" src="{{ asset('images/diente/obturacion.png') }}" alt="obturacion"><br> Diente con Obturación</th>
                                                                                        <th><img width="40" src="{{ asset('images/diente/endodoncia.png') }}" alt="endodoncia"><br> Diente con Endodoncia</th>
                                                                                        <th><img width="40" src="{{ asset('images/diente/exodoncia.png') }}" alt="exodoncia"><br> Diente con Exodoncia</th>
                                                                                        <th><img width="40" src="{{ asset('images/diente/protesis_corona.png') }}" alt="protesis/corona"><br> Diente con Protesis/Corona</th>
                                                                                    </tr>
                                                                                </table>
                                                                            </div>
                                                                            <div class="table-responsive mt-3">
                                                                                <table class="text-center mx-auto">
                                                                                    <tr>
                                                                                        <td>18</td>
                                                                                        <td>17</td>
                                                                                        <td>16</td>
                                                                                        <td>15</td>
                                                                                        <td>14</td>
                                                                                        <td>13</td>
                                                                                        <td>12</td>
                                                                                        <td>11</td>
                                                                                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                                                        <td>21</td>
                                                                                        <td>22</td>
                                                                                        <td>23</td>
                                                                                        <td>24</td>
                                                                                        <td>25</td>
                                                                                        <td>26</td>
                                                                                        <td>27</td>
                                                                                        <td>28</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><img id="teeth_18" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                        <td><img id="teeth_17" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                        <td><img id="teeth_16" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                        <td><img id="teeth_15" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                        <td><img id="teeth_14" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                        <td><img id="teeth_13" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                        <td><img id="teeth_12" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                        <td><img id="teeth_11" width="40" src="{{ asset('images/diente/diente.png') }}"></td>

                                                                                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

                                                                                        <td><img id="teeth_21" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                        <td><img id="teeth_22" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                        <td><img id="teeth_23" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                        <td><img id="teeth_24" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                        <td><img id="teeth_25" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                        <td><img id="teeth_26" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                        <td><img id="teeth_27" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                        <td><img id="teeth_28" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                    </tr>


                                                                                    <tr>
                                                                                        <td><img id="teeth_48" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                        <td><img id="teeth_47" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                        <td><img id="teeth_46" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                        <td><img id="teeth_45" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                        <td><img id="teeth_44" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                        <td><img id="teeth_43" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                        <td><img id="teeth_42" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                        <td><img id="teeth_41" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                                                        <td><img id="teeth_31" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                        <td><img id="teeth_32" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                        <td><img id="teeth_33" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                        <td><img id="teeth_34" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                        <td><img id="teeth_35" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                        <td><img id="teeth_36" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                        <td><img id="teeth_37" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                        <td><img id="teeth_38" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>48</td>
                                                                                        <td>47</td>
                                                                                        <td>46</td>
                                                                                        <td>45</td>
                                                                                        <td>44</td>
                                                                                        <td>43</td>
                                                                                        <td>42</td>
                                                                                        <td>41</td>
                                                                                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                                                        <td>31</td>
                                                                                        <td>32</td>
                                                                                        <td>33</td>
                                                                                        <td>34</td>
                                                                                        <td>35</td>
                                                                                        <td>36</td>
                                                                                        <td>37</td>
                                                                                        <td>38</td>
                                                                                    </tr>
                                                                                </table>
                                                                                <table class="text-center mx-auto mt-3">
                                                                                    <tr>
                                                                                        <td>55</td>
                                                                                        <td>54</td>
                                                                                        <td>53</td>
                                                                                        <td>52</td>
                                                                                        <td>51</td>
                                                                                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                                                        <td>61</td>
                                                                                        <td>62</td>
                                                                                        <td>63</td>
                                                                                        <td>64</td>
                                                                                        <td>65</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><img id="teeth55" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                        <td><img id="teeth54" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                        <td><img id="teeth53" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                        <td><img id="teeth52" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                        <td><img id="teeth51" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                                                        <td><img id="teeth61" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                        <td><img id="teeth62" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                        <td><img id="teeth63" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                        <td><img id="teeth64" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                        <td><img id="teeth65" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><img id="teeth85" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                        <td><img id="teeth84" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                        <td><img id="teeth83" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                        <td><img id="teeth82" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                        <td><img id="teeth81" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                                                        <td><img id="teeth71" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                        <td><img id="teeth72" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                        <td><img id="teeth73" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                        <td><img id="teeth74" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                        <td><img id="teeth75" width="40" src="{{ asset('images/diente/diente.png') }}"></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>85</td>
                                                                                        <td>84</td>
                                                                                        <td>83</td>
                                                                                        <td>82</td>
                                                                                        <td>81</td>
                                                                                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                                                        <td>71</td>
                                                                                        <td>72</td>
                                                                                        <td>73</td>
                                                                                        <td>74</td>
                                                                                        <td>75</td>
                                                                                    </tr>
                                                                                </table>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label class="form-label" for="file">Detalles de otros planes de tratamiento</label>
                                                                                        <p>@if($data->treatment_plan) {{ $data->treatment_plan->other_treatments }}@endif</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="nk-divider divider md"></div>
                                                            <div class="nk-block">
                                                                <div class="nk-block-head nk-block-head-sm nk-block-between">
                                                                    <h5 class="title">Notas del Doctor</h5>
                                                                    <a href="#" data-toggle="modal" data-target="#modalNote" class="link link-sm">+ Agregar Nota</a>
                                                                </div><!-- .nk-block-head -->
                                                                <div class="bq-note">
                                                                    @foreach ($data->notes as $item)
                                                                    <div class="bq-note-item">
                                                                        <div class="bq-note-text">
                                                                            <p>{{ $item->grades }}</p>
                                                                        </div>
                                                                        <div class="bq-note-meta">
                                                                            <span class="bq-note-added">Agregada  <span class="date">November 18, 2019</span> at <span class="time">5:34 PM</span></span>
                                                                            <span class="bq-note-sep sep">|</span>
                                                                            <span class="bq-note-by">Por <span>Desarrolladora</span></span>
                                                                            <a href="#" class="link link-sm link-danger">Borrar Nota</a>
                                                                        </div>
                                                                    </div><!-- .bq-note-item -->
                                                                    @endforeach
                                                                </div><!-- .bq-note -->
                                                            </div><!-- .nk-block -->
