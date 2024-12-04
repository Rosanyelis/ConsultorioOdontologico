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
                                                        <div class="row gy-4 ">
                                                            <div class="col-xxl-4 col-xl-4 col-md-4">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="reason_consultation">Motivo de tratamiento</label>
                                                                    <select id="event-theme" name="reason_consultation" class="form-control" data-search="on">
                                                                        @foreach ($reason as $item)
                                                                        <option value="{{ $item->name }}">{{ $item->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    <div class="form-control-wrap">
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
                                                            <div class="col-xxl-8 col-md-8">
                                                                @if ($errors->has('teethData'))
                                                                    <span class="invalid text-danger">
                                                                        {{ $errors->first('teethData') }}
                                                                    </span>
                                                                @endif
                                                                <div class="table-responsive">
                                                                    <table class="text-center mx-auto">
                                                                        <tr class="text-center border">
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
                                                                                    <img id="teeth18"  src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(17, 'teeth17')">
                                                                                    <img id="teeth17" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(16, 'teeth16')">
                                                                                    <img id="teeth16" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(15, 'teeth15')">
                                                                                    <img id="teeth15" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(14, 'teeth14')">
                                                                                    <img id="teeth14" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(13, 'teeth13')">
                                                                                    <img id="teeth13" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(12, 'teeth12')">
                                                                                    <img id="teeth12" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(11, 'teeth11')">
                                                                                    <img id="teeth11" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(21, 'teeth21')">
                                                                                    <img id="teeth21" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(22, 'teeth22')">
                                                                                    <img id="teeth22" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(23, 'teeth23')">
                                                                                    <img id="teeth23" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(24, 'teeth24')">
                                                                                    <img id="teeth24" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(25, 'teeth25')">
                                                                                    <img id="teeth25" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(26, 'teeth26')">
                                                                                    <img id="teeth26" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(27, 'teeth27')">
                                                                                    <img id="teeth27" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(28, 'teeth28')">
                                                                                    <img id="teeth28" src="">
                                                                                </button>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(48, 'teeth48')">
                                                                                    <img id="teeth48" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(47, 'teeth47')">
                                                                                    <img id="teeth47" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(46, 'teeth46')">
                                                                                    <img id="teeth46" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(45, 'teeth45')">
                                                                                    <img id="teeth45" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(44, 'teeth44')">
                                                                                    <img id="teeth44" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(43, 'teeth43')">
                                                                                    <img id="teeth43" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(42, 'teeth42')">
                                                                                    <img id="teeth42" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(41, 'teeth41')">
                                                                                    <img id="teeth41" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(31, 'teeth31')">
                                                                                    <img id="teeth31" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(32, 'teeth32')">
                                                                                    <img id="teeth32" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(33, 'teeth33')">
                                                                                    <img id="teeth33" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(34, 'teeth34')">
                                                                                    <img id="teeth34" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(35, 'teeth35')">
                                                                                    <img id="teeth35" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(36, 'teeth36')">
                                                                                    <img id="teeth36" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(37, 'teeth37')">
                                                                                    <img id="teeth37" src="">
                                                                                </button>
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" class="btn p-0" onclick="treatmentTeeth(38, 'teeth38')">
                                                                                    <img id="teeth38" src="">
                                                                                </button>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="text-center border">
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
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-4 col-md-4">
                                                                <h6 class="text-center">Tratamientos Aplicados</h6>
                                                                <div class="table-responsive">
                                                                    <table id="treatments" class="table text-center mx-auto " style="width: 100%">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Diente</th>
                                                                                <th>Tratamiento</th>
                                                                                <th></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody></tbody>
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
                                        <div class="row">
                                            @php $n = 1; @endphp
                                            @foreach ($treatments as $item)
                                            @php $n++; @endphp
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div id="SelectOptions" class="form-control-wrap ">
                                                        <div class="custom-control custom-radio mt-1">
                                                            <input type="radio" id="customRadio{{ $n }}" name="typeTreat"
                                                                class="custom-control-input" value="{{ $item->name }}">
                                                            <label class="custom-control-label" for="customRadio{{ $n }}">
                                                                {{ $item->name }}
                                                            </label>
                                                        </div>
                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
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
    <script src="{{ asset('pagejs/histories.js') }}"></script>
@endsection
