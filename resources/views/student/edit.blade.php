@extends('../layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Student Information</h1>
            <h4>Please enter your information to check in</h4>

            <form class="form-horizontal" role="form" method="POST" action="/student/{{ $student->id }}">
                {{ method_field('PUT') }}
                {{ csrf_field() }}

                <input name='student_id' value='{{$student->id}}' type='hidden'>

                <div class="form-group">
                    <label for="school_id" class="col-md-2 control-label">School</label>
                    <div class="col-md-10">
                        <select name="school_id" id="school_id" class="form-control input-sm">
                            <option value="">Select Your School</option>
                            <option value="" disabled="">-------------------</option>
                            @foreach($schools as $school)
                                <option {{ ($school->id == $student->school_id) ? 'SELECTED' : '' }} value="{{ $student->school_id }}">{{ $school->name.' ('.$school->city.')' }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="first_name" class="col-md-2 control-label">First Name</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control input-sm" id="first_name" name="first_name"
                               value="{{ $student->first_name }}"
                               autofocus>
                    </div>

                    <label for="preferred_name" class="col-md-2 control-label">Preferred Name</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control input-sm" id="preferred_name" name="preferred_name"
                               value="{{ $student->preferred_name }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="last_name" class="col-md-2 control-label">Last Name</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control input-sm" id="last_name" name="last_name"
                               value="{{ $student->last_name }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="street_address" class="col-md-2 control-label">Street Address</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control input-sm" id="street_address" name="street_address"
                               value="{{ $student->street_address }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="city" class="col-md-2 control-label">City</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control input-sm" id="city" name="city"
                               value="{{ $student->city }}">
                    </div>

                    <label for="state" class="col-md-1 control-label">State</label>
                    <div class="col-md-1">
                        <select name="state" id="state" class="form-control input-sm">
                            <option {{ ($student->state == 'OH') ? 'SELECTED' : '' }} value="OH">OH</option>
                            <option {{ ($student->state == 'MI') ? 'SELECTED' : '' }} value="MI">MI</option>
                        </select>
                    </div>

                    <label for="zip_code" class="col-md-1 control-label">Zip Code</label>
                    <div class="col-md-3">
                        <input type="text" class="form-control input-sm" id="zip_code" name="zip_code"
                               value="{{ $student->zip_code }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="telephone_number" class="col-md-2 control-label">Telephone Number</label>
                    <div class="col-md-4">
                        <input type="tel" class="form-control input-sm" id="telephone_number" name="telephone_number"
                               value="{{ $student->telephone_number }}">
                    </div>

                    <label for="phone_type" class="col-md-2 control-label">Phone Type</label>
                    <div class="col-md-4">
                        <select name="phone_type" id="phone_type" class="form-control input-sm">
                            <option value="">Select Phone Type</option>
                            <option value="" disabled>------------------------------</option>
                            <option value="home">Home Phone</option>
                            <option value="student">Student's Cell Phone</option>
                            <option value="mother">Mother's Cell Phone</option>
                            <option value="father">Father's Cell Phone</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="mother_first_name" class="col-md-2 control-label">Mother's First Name</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control input-sm" id="mother_first_name" name="mother_first_name"
                               value="{{ $student->mother_first_name }}">
                    </div>

                    <label for="mother_last_name" class="col-md-2 control-label">Mother's Last Name</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control input-sm" id="mother_last_name" name="mother_last_name"
                               value="{{ $student->mother_last_name }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="father_first_name" class="col-md-2 control-label">Father's First Name</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control input-sm" id="father_first_name" name="father_first_name"
                               value="{{ $student->father_first_name }}">
                    </div>

                    <label for="father_last_name" class="col-md-2 control-label">Father's Last Name</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control input-sm" id="father_last_name" name="father_last_name"
                               value="{{ $student->father_last_name }}">
                    </div>
                </div>

                <div class="pull-right">
                    <button type="reset" class="btn btn-lg btn-danger reset">Reset</button>
                    <button type="submit" class="btn btn-lg btn-primary">Check In</button>
                </div>
            </form>
        </div>
    </div>
@endsection