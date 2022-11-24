@extends('layouts.admin')

@section('title', 'Add Patients')

@section('content')
    <div class="container-fluid px-4">
        <div class="row">
            <p></p>
            <div class="text-center">
                <h3 class="text-primary">REGISTER PATIENT</h3>
            </div>
            <div class="col-3">
                <p></p>
                <div class="p-2">
                    <img src="https://source.unsplash.com/collection/190727/1000x900" class="d-block img-fluid" alt="image">
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" style="text-align: center;">
                    </div>
                </div>
            </div>

            <div class="col-3">
                <p></p>
                <div class="p-2">
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-primary"><i class="bi bi-person-plus-fill text-white"></i></span>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Select Specialist</option>
                            <option value="1">CHRISTIAN DAVE (PEDIARICIAN)</option>
                            <option value="2">CHRISTIAN DAVE (PEDIARICIAN)</option>
                            <option value="3">CHRISTIAN DAVE (PEDIARICIAN)</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="First name">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Middle Name">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Last Name">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Address">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Contact Number">
                    </div>
                </div>
            </div>

            <div class="col-6">
                <p></p>
                <div class="p-2">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Email">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Gender">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Age">
                    </div>
                    <div class="input-group mb-3">
                        <label style="color: blue;" class="form-control" for="meeting-time">Schedule Availability Date &
                            Time:</label>
                        &nbsp&nbsp
                        <input class="form-control" type="datetime-local" id="meeting-time" name="meeting-time"
                            value="2018-06-12T19:30" min="2018-06-07T00:00" max="2018-06-14T00:00">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-primary">
                            <i class="bi bi-unlock-fill text-white"></i>
                        </span>
                        {{-- <input type="textarea" class="form-control" placeholder="Specialist Field" rows="4"> --}}
                        <textarea class="form-control" id="textarea" rows="3" placeholder="REASON FOR FILLING ( ILLNESS )"></textarea>
                    </div>
                </div>
            </div>
            <div class="d-grid col-3 mx-auto">
                <button class="btn btn-primary" type="button"><span></span> Register to database</button>
            </div>
        </div>
    </div>
@endsection
