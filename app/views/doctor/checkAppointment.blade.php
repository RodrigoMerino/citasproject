@extends('doctor.layouts.base')
@section('content')



<h2 class="mb-5 p-5 mr-5">Revisión de horarios<i class="fas fa-user-clock  p-2 "></i></h2>


{{-- <div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" 
    id="Check-all" 
    onclick="
    for( item in document.getElementsByName('time[]')) 
    document.getElementsByName('time[]').item(item).checked =this.checked" >

<label class="custom-control-label" for="Check-all">Marcar todo</label>
</div> --}}

<form action="update-appointments" method='POST'>


    <div class="row">


        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header border-0">
                    <h3 class="mb-0">Elegir horario AM</h3>
                </div>

                <div class="table-responsive">

                    <table class="table align-items-center table-flush">

                        <tbody>
                            <input class="form-control" type="hidden" name="id" value="{{$times['appointments']->id}}">

                            <tr>

                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="time[]" value="6am" <?php if (isset($times["times"])) {
                                                        $val=array_column($times["times"], 'time'); foreach ($val as $item) { if
                                                        ($item=='6am' ) { echo 'checked' ; } } } ?> id="Check-item1">
                                        <label class="custom-control-label" for="Check-item1">6am</label>
                                    </div>
                                </td>

                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="time[]" value="6:20am" <?php if (isset($times['times'])) {
                                                         $val=array_column($times["times"], 'time'); foreach ($val as $item) { if
                                                        ($item=='6:20am' ) { echo 'checked' ; } } } ?>
                                            id="Check-item2">
                                        <label class="custom-control-label" for="Check-item2">6:20am</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="time[]" value="6:40am" <?php if (isset($times['times'])) {
                                                         $val=array_column($times["times"], 'time'); foreach ($val as $item) { if
                                                        ($item=='6:40am' ) { echo 'checked' ; } } } ?>
                                            id="Check-item3">
                                        <label class="custom-control-label" for="Check-item3">6:40am</label>
                                    </div>
                                </td>
                            </tr>


                            <tr>

                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="time[]" value="7am"
                                        <?php if (isset($times['times'])) {
                                                         $val=array_column($times["times"], 'time'); foreach ($val as $item) { if
                                                        ($item=='7am' ) { echo 'checked' ; } } } ?>
                                            id="Check-item4">
                                        <label class="custom-control-label" for="Check-item4">7am</label>
                                    </div>
                                </td>

                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="time[]" value="7:20am"

                                        <?php if (isset($times['times'])) {
                                                         $val=array_column($times["times"], 'time'); foreach ($val as $item) { if
                                                        ($item=='7:20am' ) { echo 'checked' ; } } } ?>
                                            id="Check-item5">
                                        <label class="custom-control-label" for="Check-item5">7:20am</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="time[]" value="7:40am"

                                        <?php if (isset($times['times'])) {
                                                         $val=array_column($times["times"], 'time'); foreach ($val as $item) { if
                                                        ($item=='7:40am' ) { echo 'checked' ; } } } ?>
                                            id="Check-item6">
                                        <label class="custom-control-label" for="Check-item6">7:40am</label>
                                    </div>
                                </td>
                            </tr>



                            <tr>

                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="time[]" value="8am"

                                        <?php if (isset($times['times'])) {
                                                         $val=array_column($times["times"], 'time'); foreach ($val as $item) { if
                                                        ($item=='8am' ) { echo 'checked' ; } } } ?>
                                            id="Check-item7">
                                        <label class="custom-control-label" for="Check-item7">8am</label>
                                    </div>
                                </td>

                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="time[]" value="8:20am"

                                        <?php if (isset($times['times'])) {
                                                         $val=array_column($times["times"], 'time'); foreach ($val as $item) { if
                                                        ($item=='8:20am' ) { echo 'checked' ; } } } ?>
                                            id="Check-item8">
                                        <label class="custom-control-label" for="Check-item8">8:20am</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="time[]" value="8:40am"

                                        <?php if (isset($times['times'])) {
                                                         $val=array_column($times["times"], 'time'); foreach ($val as $item) { if
                                                        ($item=='8:40am' ) { echo 'checked' ; } } } ?>
                                            id="Check-item9">
                                        <label class="custom-control-label" for="Check-item9">8:40am</label>
                                    </div>
                                </td>
                            </tr>



                            <tr>

                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="time[]" value="9am"

                                        <?php if (isset($times['times'])) {
                                                         $val=array_column($times["times"], 'time'); foreach ($val as $item) { if
                                                        ($item=='9am' ) { echo 'checked' ; } } } ?>
                                            id="Check-item10">
                                        <label class="custom-control-label" for="Check-item10">9am</label>
                                    </div>
                                </td>

                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="time[]" value="9:20am"

                                        <?php if (isset($times['times'])) {
                                                         $val=array_column($times["times"], 'time'); foreach ($val as $item) { if
                                                        ($item=='9:20am' ) { echo 'checked' ; } } } ?>
                                            id="Check-item11">
                                        <label class="custom-control-label" for="Check-item11">9:20am</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="time[]" value="9:40am"

                                        <?php if (isset($times['times'])) {
                                                         $val=array_column($times["times"], 'time'); foreach ($val as $item) { if
                                                        ($item=='9:40am' ) { echo 'checked' ; } } } ?>
                                            id="Check-item12">
                                        <label class="custom-control-label" for="Check-item12">9:40am</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>

                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="time[]" value="10am"

                                        <?php if (isset($times['times'])) {
                                                         $val=array_column($times["times"], 'time'); foreach ($val as $item) { if
                                                        ($item=='10am' ) { echo 'checked' ; } } } ?>
                                            id="Check-item13">
                                        <label class="custom-control-label" for="Check-item13">10am</label>
                                    </div>
                                </td>

                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="time[]"
                                            value="10:20am" 
                                            <?php if (isset($times['times'])) {
                                                         $val=array_column($times["times"], 'time'); foreach ($val as $item) { if
                                                        ($item=='10:20am' ) { echo 'checked' ; } } } ?>
                                            
                                            id="Check-item14">
                                        <label class="custom-control-label" for="Check-item14">10:20am</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="time[]"
                                            value="10:40am" 
                                            
                                            <?php if (isset($times['times'])) {
                                                         $val=array_column($times["times"], 'time'); foreach ($val as $item) { if
                                                        ($item=='10:40am' ) { echo 'checked' ; } } } ?>
                                            id="Check-item15">
                                        <label class="custom-control-label" for="Check-item15">10:40am</label>
                                    </div>
                                </td>
                            </tr>


                            <tr>

                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="time[]" value="11am"

                                        <?php if (isset($times['times'])) {
                                                         $val=array_column($times["times"], 'time'); foreach ($val as $item) { if
                                                        ($item=='11am' ) { echo 'checked' ; } } } ?>
                                            id="Check-item16">
                                        <label class="custom-control-label" for="Check-item16">11am</label>
                                    </div>
                                </td>

                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="time[]"
                                            value="11:20am"
                                            <?php if (isset($times['times'])) {
                                                         $val=array_column($times["times"], 'time'); foreach ($val as $item) { if
                                                        ($item=='11:20am' ) { echo 'checked' ; } } } ?>
                                            id="Check-item17">
                                        <label class="custom-control-label" for="Check-item17">11:20am</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="time[]"
                                            value="11:40am" 
                                            <?php if (isset($times['times'])) {
                                                         $val=array_column($times["times"], 'time'); foreach ($val as $item) { if
                                                        ($item=='11:40am' ) { echo 'checked' ; } } } ?>
                                            
                                            id="Check-item18">
                                        <label class="custom-control-label" for="Check-item18">11:40am</label>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer py-4">

                </div>
            </div>
        </div>

        {{-- PM --}}
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header border-0">
                    <h3 class="mb-0">Elegir horario PM</h3>
                </div>

                <div class="table-responsive">

                    <table class="table align-items-center table-flush">

                        <tbody>


                            <tr>

                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="time[]" value="12pm"

                                        <?php if (isset($times['times'])) {
                                                         $val=array_column($times["times"], 'time'); foreach ($val as $item) { if
                                                        ($item=='12pm' ) { echo 'checked' ; } } } ?>
                                            id="Check-item01">
                                        <label class="custom-control-label" for="Check-item01">12pm</label>
                                    </div>
                                </td>

                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="time[]"
                                            value="12:20pm" 
                                            
                                            <?php if (isset($times['times'])) {
                                                         $val=array_column($times["times"], 'time'); foreach ($val as $item) { if
                                                        ($item=='12:20pm' ) { echo 'checked' ; } } } ?>
                                            id="Check-item02">
                                        <label class="custom-control-label" for="Check-item02">12:20pm</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="time[]"
                                            value="12:40pm" 
                                            
                                               
                                            <?php if (isset($times['times'])) {
                                                         $val=array_column($times["times"], 'time'); foreach ($val as $item) { if
                                                        ($item=='12:40pm' ) { echo 'checked' ; } } } ?>
                                            id="Check-item30">
                                        <label class="custom-control-label" for="Check-item03">12:40pm</label>
                                    </div>
                                </td>
                            </tr>


                            <tr>

                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="time[]" value="1pm"

                                           
                                            <?php if (isset($times['times'])) {
                                                         $val=array_column($times["times"], 'time'); foreach ($val as $item) { if
                                                        ($item=='1pm' ) { echo 'checked' ; } } } ?>
                                            id="Check-item04">
                                        <label class="custom-control-label" for="Check-item04">1pm</label>
                                    </div>
                                </td>

                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="time[]" value="1:20pm"

                                           
                                            <?php if (isset($times['times'])) {
                                                         $val=array_column($times["times"], 'time'); foreach ($val as $item) { if
                                                        ($item=='1:20pm' ) { echo 'checked' ; } } } ?>
                                            id="Check-item05">
                                        <label class="custom-control-label" for="Check-item05">1:20pm</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="time[]" value="1:40pm"

                                           
                                            <?php if (isset($times['times'])) {
                                                         $val=array_column($times["times"], 'time'); foreach ($val as $item) { if
                                                        ($item=='1:40pm' ) { echo 'checked' ; } } } ?>
                                            id="Check-item06">
                                        <label class="custom-control-label" for="Check-item06">1:40pm</label>
                                    </div>
                                </td>
                            </tr>



                            <tr>

                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="time[]" value="2pm"

                                           
                                            <?php if (isset($times['times'])) {
                                                         $val=array_column($times["times"], 'time'); foreach ($val as $item) { if
                                                        ($item=='2pm' ) { echo 'checked' ; } } } ?>
                                            id="Check-item07">
                                        <label class="custom-control-label" for="Check-item07">2pm</label>
                                    </div>
                                </td>

                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="time[]" value="2:20pm"

                                           
                                            <?php if (isset($times['times'])) {
                                                         $val=array_column($times["times"], 'time'); foreach ($val as $item) { if
                                                        ($item=='2:20pm' ) { echo 'checked' ; } } } ?>
                                            id="Check-item08">
                                        <label class="custom-control-label" for="Check-item08">2:20pm</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="time[]" value="2:40pm"

                                           
                                            <?php if (isset($times['times'])) {
                                                         $val=array_column($times["times"], 'time'); foreach ($val as $item) { if
                                                        ($item=='2:40pm' ) { echo 'checked' ; } } } ?>
                                            id="Check-item09">
                                        <label class="custom-control-label" for="Check-item09">2:40pm</label>
                                    </div>
                                </td>
                            </tr>



                            <tr>

                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="time[]" value="3pm"

                                           
                                            <?php if (isset($times['times'])) {
                                                         $val=array_column($times["times"], 'time'); foreach ($val as $item) { if
                                                        ($item=='3pm' ) { echo 'checked' ; } } } ?>
                                            id="Check-item010">
                                        <label class="custom-control-label" for="Check-item010">3pm</label>
                                    </div>
                                </td>

                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="time[]" value="3:20pm"

                                           
                                            <?php if (isset($times['times'])) {
                                                         $val=array_column($times["times"], 'time'); foreach ($val as $item) { if
                                                        ($item=='3:20pm' ) { echo 'checked' ; } } } ?>
                                            id="Check-item011">
                                        <label class="custom-control-label" for="Check-item011">3:20pm</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="time[]" value="3:40pm"


                                            <?php if (isset($times['times'])) {
                                                         $val=array_column($times["times"], 'time'); foreach ($val as $item) { if
                                                        ($item=='3:40pm' ) { echo 'checked' ; } } } ?>
                                            id="Check-item012">
                                        <label class="custom-control-label" for="Check-item012">3:40pm</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>

                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="time[]" value="4pm"

                                           
                                            <?php if (isset($times['times'])) {
                                                         $val=array_column($times["times"], 'time'); foreach ($val as $item) { if
                                                        ($item=='4pm' ) { echo 'checked' ; } } } ?>
                                            id="Check-item013">
                                        <label class="custom-control-label" for="Check-item013">4pm</label>
                                    </div>
                                </td>

                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="time[]" value="4:20pm"

                                           
                                            <?php if (isset($times['times'])) {
                                                         $val=array_column($times["times"], 'time'); foreach ($val as $item) { if
                                                        ($item=='4:20pm' ) { echo 'checked' ; } } } ?>
                                            id="Check-item014">
                                        <label class="custom-control-label" for="Check-item014">4:20pm</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="time[]" value="4:40pm"

                                           
                                            <?php if (isset($times['times'])) {
                                                         $val=array_column($times["times"], 'time'); foreach ($val as $item) { if
                                                        ($item=='4:40pm' ) { echo 'checked' ; } } } ?>
                                            id="Check-item015">
                                        <label class="custom-control-label" for="Check-item015">4:40pm</label>
                                    </div>
                                </td>
                            </tr>


                            <tr>

                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="time[]" value="5pm"

                                           
                                            <?php if (isset($times['times'])) {
                                                         $val=array_column($times["times"], 'time'); foreach ($val as $item) { if
                                                        ($item=='5pm' ) { echo 'checked' ; } } } ?>
                                            id="Check-item016">
                                        <label class="custom-control-label" for="Check-item016">5pm</label>
                                    </div>
                                </td>

                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="time[]" value="5:20pm"

                                           
                                            <?php if (isset($times['times'])) {
                                                         $val=array_column($times["times"], 'time'); foreach ($val as $item) { if
                                                        ($item=='5:20pm' ) { echo 'checked' ; } } } ?>
                                            id="Check-item017">
                                        <label class="custom-control-label" for="Check-item017">5:20pm</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="time[]" value="5:40pm"

                                           
                                            <?php if (isset($times['times'])) {
                                                         $val=array_column($times["times"], 'time'); foreach ($val as $item) { if
                                                        ($item=='5:40pm' ) { echo 'checked' ; } } } ?>
                                            id="Check-item018">
                                        <label class="custom-control-label" for="Check-item018">5:40pm</label>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer py-4">

                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary border-bottom btn-grad">Actualizar</button>
</form>

</div>


</div>


@endsection