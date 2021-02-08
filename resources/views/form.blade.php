@extends('layouts.user')


@section('content')

    <div class="container bg-info p-3">
        <div class="text-center lead">
            <h1 class="">Candidate details</h1>
        </div>
        <form action="{{ route('profile-update') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-12 col-md-6 py-1">
                    <div class="row">
                        <div class="col-5"><label class="input-label" for="">Your Name</label></div>
                        <div class="col-7"> <input class="form-control" type="text" value="" name="name" /></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 py-1">
                    <div class="row">
                        <div class="col-5"><label class="input-label" for="">Father's Name</label></div>
                        <div class="col-7"> <input class="form-control" type="text" value="" name="father" /></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 py-1">
                    <div class="row">
                        <div class="col-5"><label class="input-label" for="">Present Address</label></div>
                        <div class="col-7"> <input class="form-control" type="text" value="" name="present_address" /></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 py-1">
                    <div class="row">
                        <div class="col-5"><label class="input-label" for="">Parmanent Address</label></div>
                        <div class="col-7"> <input class="form-control" type="text" value="" name="parmanent_address" />
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 py-1">
                    <div class="row">
                        <div class="col-5"><label class="input-label" for="">Facebook ID (If available)</label></div>
                        <div class="col-7"> <input class="form-control" type="text" value="" name="fb_id" /></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 py-1">
                    <div class="row">
                        <div class="col-5"><label class="input-label" for="">Religion</label></div>
                        <div class="col-7">
                            <select class="form-control" name="religion">
                                <option value="">Select</option>
                                <option value="i">Islam</option>
                                <option value="h">Hindusm</option>
                                <option value="c">Christian</option>
                                <option value="b">Budhist</option>
                                <option value="o">Others</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 py-1">
                    <div class="row">
                        <div class="col-5"><label class="input-label" for="">Blood Group</label></div>
                        <div class="col-7">
                            <select class="form-control" name="blood_group">
                                <option value="">Select</option>
                                <option value="a+">A+(Positive)</option>
                                <option value="a-">A-(Negative)</option>
                                <option value="ab+">AB+(Positive)</option>
                                <option value="ab-">AB-(Negative)</option>
                                <option value="b+">B+(Positive)</option>
                                <option value="b-">B-(Negative)</option>
                                <option value="o+">O+(Positive)</option>
                                <option value="o-">O-(Negative)</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 py-1">
                    <div class="row">
                        <div class="col-5"><label class="input-label" for="">Height (Inch)</label></div>
                        <div class="col-7"> <input class="form-control" type="text" value="" name="height" /></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 py-1">
                    <div class="row">
                        <div class="col-5"><label class="input-label" for="">Weight (KG)</label></div>
                        <div class="col-7"> <input class="form-control" type="text" value="" name="weight" /></div>
                    </div>
                </div>

                <div class="col-12 col-md-6 py-1">
                    <div class="row">
                        <div class="col-5"><label class="input-label" for="">Color</label></div>
                        <div class="col-7"> <input class="form-control" type="text" value="" name="body_color" /></div>
                    </div>
                </div>

                <div class="col-12 col-md-6 py-1">
                    <div class="row">
                        <div class="col-5"><label class="input-label" for="">Phone No.</label></div>
                        <div class="col-7"> <input class="form-control" type="text" value="" name="phone" /></div>
                    </div>
                </div>

                <div class="col-12 col-md-6 py-1">
                    <div class="row">
                        <div class="col-5"><label class="input-label" for="">Profession</label></div>
                        <div class="col-7"> <input class="form-control" type="text" value="" name="profession" /></div>
                    </div>
                </div>

                <div class="col-12 py-1">
                    <div class="row">
                        <div class="col-12"><label class="input-label" for="">Education Qualifications: </label></div>
                        <div class="col-12">

                            <table class="education-table mb-3">
                                <thead>
                                    <tr>
                                        <th scope="col">Exam</th>
                                        <th scope="col">Section</th>
                                        <th scope="col">Year</th>
                                        <th scope="col">Result</th>
                                        <th scope="col">Board</th>
                                        <th scope="col">Institute Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row"><input class="form-control" type="text" name="exam[0][]" value="" />
                                        </td>
                                        <td scope="row"><input class="form-control" type="text" name="exam[0][]" value="" />
                                        </td>
                                        <td scope="row"><input class="form-control" type="text" name="exam[0][]" value="" />
                                        </td>
                                        <td scope="row"><input class="form-control" type="text" name="exam[0][]" value="" />
                                        </td>
                                        <td scope="row"><input class="form-control" type="text" name="exam[0][]" value="" />
                                        </td>
                                        <td scope="row"><input class="form-control" type="text" name="exam[0][]" value=""
                                                size="50" />
                                        </td>

                                    </tr>
                                    <tr>
                                        <td scope="row"><input class="form-control" type="text" name="exam[1][]" value="" />
                                        </td>
                                        <td scope="row"><input class="form-control" type="text" name="exam[1][]" value="" />
                                        </td>
                                        <td scope="row"><input class="form-control" type="text" name="exam[1][]" value="" />
                                        </td>
                                        <td scope="row"><input class="form-control" type="text" name="exam[1][]" value="" />
                                        </td>
                                        <td scope="row"><input class="form-control" type="text" name="exam[1][]" value="" />
                                        </td>
                                        <td scope="row"><input class="form-control" type="text" name="exam[1][]" value=""
                                                size="50" />
                                        </td>

                                    </tr>
                                    <tr>
                                        <td scope="row"><input class="form-control" type="text" name="exam[2][]" value="" />
                                        </td>
                                        <td scope="row"><input class="form-control" type="text" name="exam[2][]" value="" />
                                        </td>
                                        <td scope="row"><input class="form-control" type="text" name="exam[2][]" value="" />
                                        </td>
                                        <td scope="row"><input class="form-control" type="text" name="exam[2][]" value="" />
                                        </td>
                                        <td scope="row"><input class="form-control" type="text" name="exam[2][]" value="" />
                                        </td>
                                        <td scope="row"><input class="form-control" type="text" name="exam[2][]" value=""
                                                size="50" />
                                        </td>

                                    </tr>
                                    <tr>
                                        <td scope="row"><input class="form-control" type="text" name="exam[3][]" value="" />
                                        </td>
                                        <td scope="row"><input class="form-control" type="text" name="exam[3][]" value="" />
                                        </td>
                                        <td scope="row"><input class="form-control" type="text" name="exam[3][]" value="" />
                                        </td>
                                        <td scope="row"><input class="form-control" type="text" name="exam[3][]" value="" />
                                        </td>
                                        <td scope="row"><input class="form-control" type="text" name="exam[3][]" value="" />
                                        </td>
                                        <td scope="row"><input class="form-control" type="text" name="exam[3][]" value=""
                                                size="50" />
                                        </td>

                                    </tr>
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>

                <div class="col-12 col-md-6 py-1">
                    <div class="row">
                        <div class="col-5"><label class="input-label" for="">Father's Profession (If alive)</label></div>
                        <div class="col-7"> <input class="form-control" type="text" value="" name="father_profession" />
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 py-1">
                    <div class="row">
                        <div class="col-5"><label class="input-label" for="">Father's Phone No.</label></div>
                        <div class="col-7"> <input class="form-control" type="text" value="" name="father_phone" /></div>
                    </div>
                </div>

                <div class="col-12 col-md-6 py-1">
                    <div class="row">
                        <div class="col-5"><label class="input-label" for="">Mother's Profession (If alive)</label></div>
                        <div class="col-7"> <input class="form-control" type="text" value="" name="mother_profession" />
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 py-1">
                    <div class="row">
                        <div class="col-5"><label class="input-label" for="">Mother's Phone No.</label></div>
                        <div class="col-7"> <input class="form-control" type="text" value="" name="mother_phone" /></div>
                    </div>
                </div>

                <div class="col-12 col-md-6 py-1">
                    <div class="row">
                        <div class="col-5"><label class="input-label" for="">No of Brother and Sister</label></div>
                        <div class="col-7"> <input class="form-control" type="text" value="" name="siblings" /></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 py-1">
                    <div class="row">
                        <div class="col-5"><label class="input-label" for="">Extra Qualifications</label></div>
                        <div class="col-7"> <input class="form-control" type="text" value="" name="extra_virtue" /></div>
                    </div>
                </div>

                <div class="col-12 col-md-6 py-1">
                    <div class="row">
                        <div class="col-5"><label class="input-label" for="">Gender</label></div>
                        <div class="col-7">
                            <select class="form-control" name="religion">
                                <option value="">Select</option>
                                <option value="m">Male</option>
                                <option value="f">Female</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 py-1">
                    <div class="row">
                        <div class="col-5"><label class="input-label" for="">Date of Birth</label></div>
                        <div class="col-7"> <input class="form-control" type="date" value="" name="dob" /></div>
                    </div>
                </div>


                <div class="col-12 col-md-6 py-1">
                    <div class="row">
                        <div class="col-5"><label class="input-label" for="">Are You Married Before</label></div>
                        <div class="col-7"> <input id="premarried" class="premarried" type="checkbox" value="premarried"
                                name="premarried" />
                        </div>
                    </div>
                </div>

            </div>
            <div id="premarried-data" class="row premarried-data d-none">
                <div class="col-12 col-md-6 py-1">
                    <div class="row">
                        <div class="col-5"><label class="input-label" for="">Past spouse name</label></div>
                        <div class="col-7"> <input class="form-control" type="text" value="" name="pre_spouse_name" /></div>
                    </div>
                </div>

                <div class="col-12 col-md-6 py-1">
                    <div class="row">
                        <div class="col-5"><label class="input-label" for="">Past spouse father's name</label></div>
                        <div class="col-7"> <input class="form-control" type="text" value="" name="pre_spouse_father" />
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 py-1">
                    <div class="row">
                        <div class="col-5"><label class="input-label" for="">Why you are separated</label></div>
                        <div class="col-7"> <input class="form-control" type="text" value="" name="divorce_details" /></div>
                    </div>
                </div>

                <div class="col-12 col-md-6 py-1">
                    <div class="row">
                        <div class="col-5"><label class="input-label" for="">Past married address</label></div>
                        <div class="col-7"> <input class="form-control" type="text" value="" name="pre_spouse_address" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 text-right pt-2"><input class="btn btn-warning" type="submit" value="Update" /></div>
            </div>
        </form>

    </div>

    @push('styles')
        <style type="text/css">
            .lead {
                border-bottom: 1px solid white;
                margin-bottom: 30px;
                padding: 20px;
                color: #bd2130;
            }

            .input-label {
                font-size: 15px;
                font-weight: bold;
                color: white;
                margin-top: 8px;
            }

            .premarried {
                width: 20px;
                height: 20px;
                margin-top: 12px;
            }

            .education-table {}

            .education-table thead {
                font-size: 15px;
                text-align: center;
                color: white;
            }

            .education-table .tr {}

        </style>
    @endpush

    @push('scripts')
        <script type="text/javascript">
            $(document).ready(function() {
                $("#premarried").click(function() {
                    if ($("#premarried").checked) {
                        $(".premarried-data").toggleClass('d-none');
                    } else {
                        $(".premarried-data").toggleClass('d-none');
                    }
                });

            });

        </script>
    @endpush

@endsection
