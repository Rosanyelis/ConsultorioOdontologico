@extends('layouts.app')

@section('content')
                        <!-- start page title -->
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Historia Dental de: {{ $data->firstname }} {{ $data->lastname }}</h3>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <ul class="nk-block-tools g-3">
                                                <li class="nk-block-tools-opt">
                                                    <a href="{{ route('patient.index') }}" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-arrow-left"></em></a>
                                                    <a href="{{ route('patient.index') }}" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Regresar</span></a>
                                                </li>
                                            </ul>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="card card-bordered">
                                        <div class="card-inner-group">
                                            <form id="form" action="{{ route('patient.store-history-dental', $data->id) }}" method="POST">
                                                @csrf
                                                <input id="teethData" type="hidden" name="teethData" value="">
                                                <div class="card-inner">
                                                    <div class="nk-block">
                                                        <div class="row gy-4 pb-4">
                                                            <div class="col-xxl-4 col-xl-4 col-md-4">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="reason_consultation">Motivo de tratamiento</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" name="reason_consultation" class="form-control"
                                                                            id="reason_consultation" >
                                                                        @if ($errors->has('reason_consultation'))
                                                                            <span class="invalid text-danger">
                                                                                {{ $errors->first('reason_consultation') }}
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-inner">
                                                    <div class="nk-block">
                                                        <div class="row gy-4">
                                                            <div class="col-xxl-12 col-md-12">
                                                                @if ($errors->has('teethData'))
                                                                    <span class="invalid text-danger">
                                                                        {{ $errors->first('teethData') }}
                                                                    </span>
                                                                @endif
                                                                <div class="table-responsive">
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
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(18, 'teeth18')">
                                                                                    <img id="teeth18" width="40" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(17, 'teeth17')">
                                                                                    <img id="teeth17" width="40" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(16, 'teeth16')">
                                                                                    <img id="teeth16" width="40" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(15, 'teeth15')">
                                                                                    <img id="teeth15" width="40" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(14, 'teeth14')">
                                                                                    <img id="teeth14" width="40" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(13, 'teeth13')">
                                                                                    <img id="teeth13" width="40" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(12, 'teeth12')">
                                                                                    <img id="teeth12" width="40" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(11, 'teeth11')">
                                                                                    <img id="teeth11" width="40" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(21, 'teeth21')">
                                                                                    <img id="teeth21" width="40" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(22, 'teeth22')">
                                                                                    <img id="teeth22" width="40" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(23, 'teeth23')">
                                                                                    <img id="teeth23" width="40" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(24, 'teeth24')">
                                                                                    <img id="teeth24" width="40" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(25, 'teeth25')">
                                                                                    <img id="teeth25" width="40" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(26, 'teeth26')">
                                                                                    <img id="teeth26" width="40" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(27, 'teeth27')">
                                                                                    <img id="teeth27" width="40" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(28, 'teeth28')">
                                                                                    <img id="teeth28" width="40" src="">
                                                                                </button>
                                                                            </td>
                                                                        </tr>


                                                                        <tr>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(48, 'teeth48')">
                                                                                    <img id="teeth48" width="40" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(47, 'teeth47')">
                                                                                    <img id="teeth47" width="40" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(46, 'teeth46')">
                                                                                    <img id="teeth46" width="40" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(45, 'teeth45')">
                                                                                    <img id="teeth45" width="40" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(44, 'teeth44')">
                                                                                    <img id="teeth44" width="40" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(43, 'teeth43')">
                                                                                    <img id="teeth43" width="40" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(42, 'teeth42')">
                                                                                    <img id="teeth42" width="40" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(41, 'teeth41')">
                                                                                    <img id="teeth41" width="40" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(31, 'teeth31')">
                                                                                    <img id="teeth31" width="40" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(32, 'teeth32')">
                                                                                    <img id="teeth32" width="40" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(33, 'teeth33')">
                                                                                    <img id="teeth33" width="40" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(34, 'teeth34')">
                                                                                    <img id="teeth34" width="40" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(35, 'teeth35')">
                                                                                    <img id="teeth35" width="40" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(36, 'teeth36')">
                                                                                    <img id="teeth36" width="40" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(37, 'teeth37')">
                                                                                    <img id="teeth37" width="40" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(38, 'teeth38')">
                                                                                    <img id="teeth38" width="40" src="">
                                                                                </button>
                                                                            </td>
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
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(55, 'teeth55')">
                                                                                    <img id="teeth55" width="40" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(54, 'teeth54')">
                                                                                    <img id="teeth54" width="40" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(53, 'teeth53')">
                                                                                    <img id="teeth53" width="40" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(52, 'teeth52')">
                                                                                    <img id="teeth52" width="40" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(51, 'teeth51')">
                                                                                    <img id="teeth51" width="40" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(61, 'teeth61')">
                                                                                    <img id="teeth61" width="40" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(62, 'teeth62')">
                                                                                    <img id="teeth62" width="40" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(63, 'teeth63')">
                                                                                    <img id="teeth63" width="40" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(64, 'teeth64')">
                                                                                    <img id="teeth64" width="40" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(65, 'teeth65')">
                                                                                    <img id="teeth65" width="40" src="">
                                                                                </button>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(85, 'teeth85')">
                                                                                    <img id="teeth85" width="40" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(84, 'teeth84')">
                                                                                    <img id="teeth84" width="40" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(83, 'teeth83')">
                                                                                    <img id="teeth83" width="40" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(82, 'teeth82')">
                                                                                    <img id="teeth82" width="40" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(81, 'teeth81')">
                                                                                    <img id="teeth81" width="40" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(71, 'teeth71')">
                                                                                    <img id="teeth71" width="40" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(72, 'teeth72')">
                                                                                    <img id="teeth72" width="40" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(73, 'teeth73')">
                                                                                    <img id="teeth73" width="40" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(74, 'teeth74')">
                                                                                    <img id="teeth74" width="40" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(75, 'teeth75')">
                                                                                    <img id="teeth75" width="40" src="">
                                                                                </button>
                                                                            </td>
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

                                                            <div class="col-xxl-12 col-xl-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="observations">Observaciones</label>
                                                                    <div class="form-control-wrap">
                                                                        <textarea name="observations" class="form-control"
                                                                            id="" cols="30" rows="3"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 mt-3 mb-3 text-right">
                                                    <div class="form-group">
                                                        <button id="guardar" type="button" class="btn btn-primary">Guardar Historia</button>
                                                    </div>
                                                </div>
                                                <!--col-->
                                            </form>
                                        </div>
                                    </div><!-- .card -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                        <div class="modal fade" tabindex="-1" id="modalTeeth">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <a href="#"  class="close" data-dismiss="modal" aria-label="Close">
                                        <em class="icon ni ni-cross"></em>
                                    </a>
                                    <div class="modal-header">
                                        <h5 class="modal-title">Indique Tratatamiento para el diente N°. <strong id="teeth"></strong></h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="d-flex align-items-center">
                                            <div class="form-group">
                                                <div id="SelectOptions" class="form-control-wrap ">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio1" name="typeTreat"
                                                            class="custom-control-input" value="Obturación">
                                                        <label class="custom-control-label" for="customRadio1">
                                                            Obturación (<em class="icon ni ni-bullet-fill"></em>)
                                                        </label>
                                                    </div>
                                                    <br>
                                                    <div class="custom-control custom-radio mt-1">
                                                        <input type="radio" id="customRadio2" name="typeTreat"
                                                            class="custom-control-input" value="Exodoncia">
                                                        <label class="custom-control-label" for="customRadio2">
                                                            Exodoncia (<em class="icon ni ni-cross"></em>)
                                                        </label>
                                                    </div>
                                                    <br>
                                                    <div class="custom-control custom-radio mt-1">
                                                        <input type="radio" id="customRadio3" name="typeTreat"
                                                            class="custom-control-input" value="Endodoncia">
                                                        <label class="custom-control-label" for="customRadio3">
                                                            Endodoncia (E)
                                                        </label>
                                                    </div>
                                                    <br>
                                                    <div class="custom-control custom-radio mt-1">
                                                        <input type="radio" id="customRadio4" name="typeTreat"
                                                            class="custom-control-input" value="Protesis/Corona">
                                                        <label class="custom-control-label" for="customRadio4">
                                                            Protesis/Corona (<em class="icon ni ni-square text-blue"></em>)
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer bg-light p-1">
                                        <button id="closeTeeth" class="btn btn-danger">
                                            Cancelar
                                        </button>
                                        <button id="saveTeeth" class="btn btn-primary">
                                            <em class="icon ni ni-save-fill"></em>
                                            Guardar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
@endsection
@section('scripts')
    <script>
        // obtenemos la url base de la imagen para cada diente
        var url_base = "{{ asset('') }}";
        var url_teeth = url_base + 'images/diente/diente.png';
        const url_obturacion = url_base + 'images/diente/obturacion.png';
        const url_endodoncia = url_base + 'images/diente/endodoncia.png';
        const url_exodoncia = url_base + 'images/diente/exodoncia.png';
        const url_protesis_corona = url_base + 'images/diente/protesis_corona.png';
        var btnTeeth, inputTeeth, IDteeth;
        var data = [];

        // dientes de adultos
        $('#teeth18').prop('src', url_teeth);
        $('#teeth17').prop('src', url_teeth);
        $('#teeth16').prop('src', url_teeth);
        $('#teeth15').prop('src', url_teeth);
        $('#teeth14').prop('src', url_teeth);
        $('#teeth13').prop('src', url_teeth);
        $('#teeth12').prop('src', url_teeth);
        $('#teeth11').prop('src', url_teeth);
        $('#teeth21').prop('src', url_teeth);
        $('#teeth22').prop('src', url_teeth);
        $('#teeth23').prop('src', url_teeth);
        $('#teeth24').prop('src', url_teeth);
        $('#teeth25').prop('src', url_teeth);
        $('#teeth26').prop('src', url_teeth);
        $('#teeth27').prop('src', url_teeth);
        $('#teeth28').prop('src', url_teeth);

        $('#teeth48').prop('src', url_teeth);
        $('#teeth47').prop('src', url_teeth);
        $('#teeth46').prop('src', url_teeth);
        $('#teeth45').prop('src', url_teeth);
        $('#teeth44').prop('src', url_teeth);
        $('#teeth43').prop('src', url_teeth);
        $('#teeth42').prop('src', url_teeth);
        $('#teeth41').prop('src', url_teeth);
        $('#teeth31').prop('src', url_teeth);
        $('#teeth32').prop('src', url_teeth);
        $('#teeth33').prop('src', url_teeth);
        $('#teeth34').prop('src', url_teeth);
        $('#teeth35').prop('src', url_teeth);
        $('#teeth36').prop('src', url_teeth);
        $('#teeth37').prop('src', url_teeth);
        $('#teeth38').prop('src', url_teeth);

        // DIentes de niños
        $('#teeth55').prop('src', url_teeth);
        $('#teeth54').prop('src', url_teeth);
        $('#teeth53').prop('src', url_teeth);
        $('#teeth52').prop('src', url_teeth);
        $('#teeth51').prop('src', url_teeth);
        $('#teeth61').prop('src', url_teeth);
        $('#teeth62').prop('src', url_teeth);
        $('#teeth63').prop('src', url_teeth);
        $('#teeth64').prop('src', url_teeth);
        $('#teeth65').prop('src', url_teeth);

        $('#teeth85').prop('src', url_teeth);
        $('#teeth84').prop('src', url_teeth);
        $('#teeth83').prop('src', url_teeth);
        $('#teeth82').prop('src', url_teeth);
        $('#teeth81').prop('src', url_teeth);
        $('#teeth71').prop('src', url_teeth);
        $('#teeth72').prop('src', url_teeth);
        $('#teeth73').prop('src', url_teeth);
        $('#teeth74').prop('src', url_teeth);
        $('#teeth75').prop('src', url_teeth);

        function treatmentTeeth(teeth, teethId)
        {
            $('#teeth').html(teeth);
            $('#modalTeeth').modal('show');
            btnTeeth = teeth;
            IDteeth = teethId;
        }

        $('#saveTeeth').on('click', function(){
            let type = $('input[name="typeTreat"]:checked').val();
            let datosFila = {};
            datosFila.code_teeth = btnTeeth;
            datosFila.typeTreat = type;
            data.push(datosFila);
            let IDelement = '#'+IDteeth;
            console.log(IDelement);
            let url_img;
            if (type == 'Obturación'){
                url_img = url_obturacion;
            }
            if (type == 'Exodoncia'){
                url_img = url_exodoncia;
            }
            if (type == 'Endodoncia'){
                url_img = url_endodoncia;
            }
            if (type == 'Protesis/Corona'){
                url_img = url_protesis_corona;
            }
            $(IDelement).prop('src', url_img);

            $('input[type="radio"][name="typeTreat"]').prop('checked', false);
            $('#teeth').html('');
            $('#modalTeeth').modal('hide');
        });

        $('#closeTeeth').on('click', function(){
            $('input[type="radio"][name="typeTreat"]').prop('checked', false);
            $('#teeth').html('');
            $('#modalTeeth').modal('hide');
            let IDelement = '#'+IDteeth;
            $(IDelement).prop('src', url_teeth);
        });
        $('.close').on('click', function(){
            $('input[type="radio"][name="typeTreat"]').prop('checked', false);
            $('#teeth').html('');
            $('#modalTeeth').modal('hide');
        });

        $('#guardar').click(function() {
            $('#teethData').val(JSON.stringify(data));
            $('#form').submit();
            $('#guardar').attr('disabled', true);
            $('#guardar').html(
                '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span> Por favor, espere... </span>'
                );
        });
    </script>
@endsection
