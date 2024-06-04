@extends('layouts.app')

@section('content')

<!-- start page title -->
<div class="nk-content-inner">
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Paciente - {{ $data->patient->firstname }}
                        {{ $data->patient->lastname }} - Historia - Nº.{{ $data->id }} -
                        {{ \Carbon\Carbon::parse($data->created_at)->format('d/m/Y') }}
                    </h3>
                </div><!-- .nk-block-head-content -->
                <div class="nk-block-head-content">
                    <ul class="nk-block-tools g-3">
                        <li class="nk-block-tools-opt">
                            <a href="{{ route('patient.show', $data->patient->id) }}"
                                class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-arrow-left"></em></a>
                            <a href="{{ route('patient.show', $data->patient->id) }}"
                                class="btn btn-primary d-none d-md-inline-flex"><em
                                    class="icon ni ni-arrow-left"></em><span>Regresar</span></a>
                        </li>
                    </ul>
                </div><!-- .nk-block-head-content -->
            </div><!-- .nk-block-between -->
        </div><!-- .nk-block-head -->
        <div class="nk-block nk-block-lg">
            <div class="card">
                <div class="card-aside-wrap">
                    <div class="card-content">
                        <div class="card-inner">
                            <div class="nk-block">
                                <div class="row gy-1 pb-4">
                                    <div class="col-xxl-12 col-xl-12 col-md-12">
                                        <div class="form-group">
                                            <label class="form-label" for="reason_consultation">Motivo de
                                                tratamiento:</label>
                                            <p class="form-control-wrap">{{ $data->reason_consultation }}</p>
                                        </div>
                                    </div>
                                    <div class="col-xxl-12 col-xl-12 col-md-12">
                                        <div class="form-group">
                                            <label class="form-label" for="observations">Observaciones:</label>
                                            <p class="form-control-wrap">{{ $data->observations }}</p>
                                        </div>
                                    </div>
                                    <div class="col-xxl-12 col-xl-12 col-md-12">
                                        <div class="table-responsive mt-3">
                                            <table class="table">
                                                <tr>
                                                    <td colspan="4" class="text-center">Leyenda</td>
                                                </tr>
                                                <tr class="text-center">
                                                    <th><img width="40"
                                                            src="{{ asset('images/diente/obturacion.png') }}"
                                                            alt="obturacion"><br> Diente con Obturación</th>
                                                    <th><img width="40"
                                                            src="{{ asset('images/diente/endodoncia.png') }}"
                                                            alt="endodoncia"><br> Diente con Endodoncia</th>
                                                    <th><img width="40"
                                                            src="{{ asset('images/diente/exodoncia.png') }}"
                                                            alt="exodoncia"><br> Diente con Exodoncia</th>
                                                    <th><img width="40"
                                                            src="{{ asset('images/diente/protesis_corona.png') }}"
                                                            alt="protesis/corona"><br> Diente con Protesis/Corona</th>
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
                                                    <td><img id="teeth18" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
                                                    </td>
                                                    <td><img id="teeth17" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
                                                    </td>
                                                    <td><img id="teeth16" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
                                                    </td>
                                                    <td><img id="teeth15" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
                                                    </td>
                                                    <td><img id="teeth14" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
                                                    </td>
                                                    <td><img id="teeth13" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
                                                    </td>
                                                    <td><img id="teeth12" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
                                                    </td>
                                                    <td><img id="teeth11" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
                                                    </td>

                                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

                                                    <td><img id="teeth21" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
                                                    </td>
                                                    <td><img id="teeth22" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
                                                    </td>
                                                    <td><img id="teeth23" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
                                                    </td>
                                                    <td><img id="teeth24" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
                                                    </td>
                                                    <td><img id="teeth25" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
                                                    </td>
                                                    <td><img id="teeth26" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
                                                    </td>
                                                    <td><img id="teeth27" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
                                                    </td>
                                                    <td><img id="teeth28" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td><img id="teeth48" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
                                                    </td>
                                                    <td><img id="teeth47" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
                                                    </td>
                                                    <td><img id="teeth46" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
                                                    </td>
                                                    <td><img id="teeth45" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
                                                    </td>
                                                    <td><img id="teeth44" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
                                                    </td>
                                                    <td><img id="teeth43" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
                                                    </td>
                                                    <td><img id="teeth42" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
                                                    </td>
                                                    <td><img id="teeth41" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
                                                    </td>
                                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                    <td><img id="teeth31" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
                                                    </td>
                                                    <td><img id="teeth32" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
                                                    </td>
                                                    <td><img id="teeth33" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
                                                    </td>
                                                    <td><img id="teeth34" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
                                                    </td>
                                                    <td><img id="teeth35" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
                                                    </td>
                                                    <td><img id="teeth36" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
                                                    </td>
                                                    <td><img id="teeth37" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
                                                    </td>
                                                    <td><img id="teeth38" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
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
                                                    <td><img id="teeth55" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
                                                    </td>
                                                    <td><img id="teeth54" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
                                                    </td>
                                                    <td><img id="teeth53" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
                                                    </td>
                                                    <td><img id="teeth52" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
                                                    </td>
                                                    <td><img id="teeth51" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
                                                    </td>
                                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                    <td><img id="teeth61" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
                                                    </td>
                                                    <td><img id="teeth62" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
                                                    </td>
                                                    <td><img id="teeth63" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
                                                    </td>
                                                    <td><img id="teeth64" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
                                                    </td>
                                                    <td><img id="teeth65" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img id="teeth85" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
                                                    </td>
                                                    <td><img id="teeth84" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
                                                    </td>
                                                    <td><img id="teeth83" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
                                                    </td>
                                                    <td><img id="teeth82" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
                                                    </td>
                                                    <td><img id="teeth81" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
                                                    </td>
                                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                    <td><img id="teeth71" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
                                                    </td>
                                                    <td><img id="teeth72" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
                                                    </td>
                                                    <td><img id="teeth73" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
                                                    </td>
                                                    <td><img id="teeth74" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
                                                    </td>
                                                    <td><img id="teeth75" width="40"
                                                            src="{{ asset('images/diente/diente.png') }}">
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
                                </div>
                            </div>
                        </div>
                    </div><!-- .card-content -->
                </div><!-- .card-aside-wrap -->
            </div>
            <!--card-->
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    // obtenemos la url base de la imagen para cada diente
    var url = "{{ route('patient.showteethHistoryDentalAjax', $data->id) }}";
    var url_base = "{{ asset('') }}";
    const url_obturacion = url_base + 'images/diente/obturacion.png';
    const url_endodoncia = url_base + 'images/diente/endodoncia.png';
    const url_exodoncia = url_base + 'images/diente/exodoncia.png';
    const url_protesis_corona = url_base + 'images/diente/protesis_corona.png';

    fetch(url)
        .then(response => response.json())
        .then(data => {
            data.forEach(function(item){
                let IDteeth = '#teeth'+item.teeths_id;
                let url_img;
                if (item.treatment == 'Obturación'){
                    url_img = url_obturacion;
                    $(IDteeth).prop('src', url_img);
                }
                if (item.treatment == 'Exodoncia'){
                    url_img = url_exodoncia;
                    $(IDteeth).prop('src', url_img);
                }
                if (item.treatment == 'Endodoncia'){
                    url_img = url_endodoncia;
                    $(IDteeth).prop('src', url_img);
                }
                if (item.treatment == 'Protesis/Corona'){
                    url_img = url_protesis_corona;
                    $(IDteeth).prop('src', url_img);
                }
            })
        })
        .catch(error => console.error(error));
</script>
@endsection
