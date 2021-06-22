<form action="{{route('front.buscador')}}" method="post" class="buscador">
    @csrf
    <div class="container">
        <div class="d-none d-sm-none d-md-block d-lg-block d-xl-block">
            <div class="row  justify-content-center">
                <div class="form-group">
                    <select name="toperacion" id="select_izq">
                        <option value="">Operacion</option>
                        @foreach($toperacion as $item)
                            <option value="{{$item->id}}">{{$item->tipo_operacion}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <select name="tpropiedad" id="select">
                        <option value="">Propiedad</option>
                        @foreach($tpropiedad as $item)
                            <option value="{{$item->id}}">{{$item->tipo_propiedad}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <select name="pais" id="select">
                        <option value="">Pais</option>
                        @foreach($pais as $item)
                            <option value="{{$item->id}}">{{$item->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <select name="estado" id="select">
                        <option value="">Estado</option>
                        @foreach($estado as $item)
                            <option value="{{$item->id}}">{{$item->estado}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <select name="municipio" id="select">
                        <option value="">Municipio</option>
                        @foreach($municipio as $item)
                            <option value="{{$item->id}}">{{$item->municipio}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <select name="sector" id="select_der">
                        <option value="">Sector</option>
                        @foreach($sector as $item)
                            <option value="{{$item->id}}">{{$item->sector}}-{{$item->localidad}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row justify-content-center" style="margin-top: -18px;">
                <div class="form-group">
                    <input name="codigo" type="text" id="select_izq_neg" placeholder="Codigo">
                </div>
                <div class="form-group">
                    <select name="estado_propiedad" id="select">
                        <option value="">Estado Obra</option>
                        <option value="Obra Gris">Obra Gris</option>
                        <option value="Obra blanca">Obra blanca</option>
                        <option value="Lista para habitar">Lista para habitar</option>
                        <option value="A reformar">A reformar</option>
                    </select>
                </div>
                <div class="form-group">
                    <input id="input_form" name="total_terreno" type="text" placeholder="Terreno">
                </div>
                <div class="form-group">
                    <input id="input_form" name="area_construccion"  type="text"  placeholder="Area Const.">
                </div>
                <div class="form-group">
                    <input id="input_form" name="habitaciones"  type="text" placeholder="N°Hab">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn" id="btn_buscar">Buscar</button>
                </div>
            </div>
        </div>
        <div class="d-block d-sm-block d-md-none d-lg-none d-xl-none">
            <div class="row  justify-content-center">
                <div class="form-group">
                    <select name="toperacion" id="select_izq">
                        <option value="">operacion</option>
                        @foreach($toperacion as $item)
                            <option value="{{$item->id}}">{{$item->tipo_operacion}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <select name="tpropiedad"  id="select_der">
                        <option value="">propiedad</option>
                        @foreach($tpropiedad as $item)
                            <option value="{{$item->id}}">{{$item->tipo_propiedad}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row justify-content-center" style="margin-top: -18px;">
                <div class="form-group">
                    <input id="input_form" name="codigo" id="select_izq" type="text" placeholder="Codigo">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn" id="btn_buscar">Buscar</button>
                </div>
            </div>
        </div>
    </div>
</form>
