@extends('../layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Welcome to St. Ursula Academy</h1>
                <h4>Select your school and then click check in next to your name</h4>

                @if(Session::has('flash_message'))
                    <div class= "spacing alert alert-success">{{ Session::get('flash_message') }}</div>
                @endif

                <div class="spacing">
                    <div class="form-group">
                        <select name="school_id" id="schools" class="form-control">
                            <option value="">Select Your School</option>
                            <option value="" disabled="">-------------------</option>
                            @foreach($schools as $school)
                                <option value="{{ $school->id }}">{{ $school->name.' ('.$school->city.')' }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="spacing">
                    <table id="students" class="spacing table table-striped table-hover table-condensed">
                        <thead>
                        <tr>
                            <th></th>
                            <th class="hideColumn">School ID</th>
                            <th class="hideColumn">Student ID</th>
                            <th>Last Name</th>
                            <th>First Name</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($students as $student)
                            <tr class="hideRow">
                                <td>
                                    <a class="btn btn-primary btn-xs" href="/student/{{ $student->id }}/edit">Check In</a>
                                </td>
                                <td class="hideColumn">{{ $student->school_id }}</td>
                                <td class="hideColumn">{{ $student->id }}</td>
                                <td>{{ $student->last_name }}</td>
                                <td>{{ $student->first_name }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="spacing">
                    <a class="button btn btn-lg btn-primary btn-block" href="/student/create">
                        Click here if you don't see your name above</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>

        $(document).ready(function () {
            $('#schools').on('change', function () {
                var selVal = $(this).find(":selected").val();

                $("tr").each(function () {
                    var col_val = $(this).find("td:eq(1)").text();
                    if (col_val != selVal) {
                        $(this).removeClass('showRow');
                        $(this).addClass('hideRow');
                    }
                    else {
                        $(this).removeClass('hideRow');
                        $(this).addClass('showRow');
                    }
                });
            })
        })
        //        document.addEventListener('DOMContentLoaded',function() {
        //            document.querySelector('select[name="school_id"]').onchange=changeEventHandler;
        //        },false);
        //
        //        function changeEventHandler(event) {
        //            var optionValue = event.target.value;
        //            alert('You selected ' + optionValue);
        //        }

        //        $(document).ready(function () {
        //            $("#schools").on("change",
        //                alert('entered first function');
        //
        //            function() {
        //                alert('entered second function');
        //                var a = $(this).find("option:selected").html();
        //                alert('value of a: ' + a);
        //
        //                $(".students tr td").each(
        //                    function () {
        //                        if ($(this).html() != a) {
        //                            $(this).parent().hide();
        //                        }
        //                        else {
        //                            $(this).parent().show();
        //                        }
        //                    });
        //            });
        //        });

        //        $(document).ready(function () {
        //            $('#schools').on('change', function () {
        //                alert($(this).find(":selected").val());
        //            });
        //        });
    </script>
@endsection