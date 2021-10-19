@extends('english.layout.inside')

@section('content')
<!-- ============================================================= Content Appointments ============================================================= -->
   <div class="sub_header_in">
        <div class="container">
            <h1>Appointments</h1>
        </div>
        <!-- /container -->
    </div>
    <!-- /sub_header -->
    <main>
        <div class="container margin_60_35">
            <div class="box_booking">
                <!-- =========================== User Appointments ============================== -->
                @foreach($Appointments as $Appointment)
                <div class="strip_booking">
                    <div class="row">
                        <div class="col-lg-2 col-md-2">
                            <!-- =========================== User Appointments ============================== -->
                            <img src="{!! asset(Voyager::image($Appointment->user->avatar)) !!}" class="img-fluid" alt="image">
                        </div>
                        <div class="col-lg-6 col-md-5">
                            <!-- =========================== User Appointments ============================== -->
                            <h6>{{ $Appointment->user->name }}</h6>
                            <!-- =========================== User Appointments ============================== -->
                            <p>{{ $Appointment->Problem }}</p>
                        </div>
                        <div class="col-lg-2 col-md-3">
                            <ul class="info_booking">
                                <!-- =========================== User Appointments ============================== -->
                                <li><strong>Patient ID</strong> {{  $Appointment->Patient_ID }}</li>
                                <!-- =========================== User Appointments ============================== -->
                                <li><strong>Serial ID</strong> {{  $Appointment->Serial }}</li>
                                <!-- =========================== User Appointments ============================== -->
                                <li><strong>Appointment Date</strong> {{ $Appointment->Appointment_Date }}</li>
                                <!-- =========================== User Appointments ============================== -->
                                <li><strong>Booked At</strong> {{ date('M j, Y', strtotime($Appointment->created_at)) }}</li>
                                
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-2">
                            <div class="booking_buttons">
                            <!-- =========================== User Appointments ============================== -->
                            <a href="{{ url('Patients') }}/{{ $Appointment->user->name }}" class="btn_2">See Patient</a>
                            <!--  ==============================================   Appointments destroy FORM ============== -->
                            {{ Form::open(['method' => 'DELETE','style' => 'display: inline-block,width: 100%','route' => ['Appointment.destroy', $Appointment->id]]) }} 
                            {{ csrf_field() }} 
                                <button type="submit" class="btn_3" style="width: 100%;">Remove <i class="icon-cancel"></i></button>
                            {{ Form::close() }}
                            <!--  ==============================================   Appointments destroy FORM =============== -->    
                            </div>
                        </div>
                    </div>
                    <!-- /row -->
                </div>
                <!-- /strip booking -->
                @endforeach
                <!-- =========================== User Appointments ============================== -->
            </div>
            <!-- /box_booking -->
            
        </div>
        <!-- /container -->
    </main>
    <!--/main-->
<!-- ============================================================= Content end   ============================================================= -->
@endsection