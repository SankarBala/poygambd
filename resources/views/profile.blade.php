@extends('layouts.user')

@section('content')
    <div class="container bg-info px-5 pb-3">
        <div class="text-center lead">
            <h1 class="">My Profile</h1>
        </div>

        <div class="row mb-3">

            <div class="col-6">
                <img class="" id="profile-pic" src="{{ $user['profile_photo'] }}" />
            </div>


            <div class="col-6 text-right">
                <a href="{{ route('profile-edit') }}" class="btn btn-warning">Edit</a>
            </div>

        </div>

        <div class="row">
            <div class="col-12 col-md-6 py-1">
                <div class="row">
                    <div class="col-5"><label class="input-label" for="">Your Name</label></div>
                    <div class="col-7"> <input class="form-control" type="text" value="{{ $user['name'] }}" name="name" />
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 py-1">
                <div class="row">
                    <div class="col-5"><label class="input-label" for="">Father's Name</label></div>
                    <div class="col-7"> <input class="form-control" type="text" value="{{ $user['father'] }}"
                            name="father" />
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 py-1">
                <div class="row">
                    <div class="col-5"><label class="input-label" for="">Present Address</label></div>
                    <div class="col-7"> <input class="form-control" type="text" value="{{ $user['present_address'] }}"
                            name="present_address" /></div>
                </div>
            </div>
            <div class="col-12 col-md-6 py-1">
                <div class="row">
                    <div class="col-5"><label class="input-label" for="">Parmanent Address</label></div>
                    <div class="col-7"> <input class="form-control" type="text" value="{{ $user['parmanent_address'] }}"
                            name="parmanent_address" />
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 py-1">
                <div class="row">
                    <div class="col-5"><label class="input-label" for="">Facebook ID (If available)</label></div>
                    <div class="col-7"> <input class="form-control" type="text" value="{{ $user['fb_id'] }}"
                            name="fb_id" />
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 py-1">
                <div class="row">
                    <div class="col-5"><label class="input-label" for="">Religion</label></div>
                    <div class="col-7">
                        <input class="form-control" type="text" value="{{ $user['religion'] }}" />
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 py-1">
                <div class="row">
                    <div class="col-5"><label class="input-label" for="">Blood Group</label></div>
                    <div class="col-7">

                        <input class="form-control" type="text" value="{{ $user['blood_group'] }}" />
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 py-1">
                <div class="row">
                    <div class="col-5"><label class="input-label" for="">Height (Inch)</label></div>
                    <div class="col-7"> <input class="form-control" type="text" value="{{ $user['height'] }}"
                            name="height" /></div>
                </div>
            </div>
            <div class="col-12 col-md-6 py-1">
                <div class="row">
                    <div class="col-5"><label class="input-label" for="">Weight (KG)</label></div>
                    <div class="col-7"> <input class="form-control" type="text" value="{{ $user['weight'] }}"
                            name="weight" /></div>
                </div>
            </div>

            <div class="col-12 col-md-6 py-1">
                <div class="row">
                    <div class="col-5"><label class="input-label" for="">Color</label></div>
                    <div class="col-7"> <input class="form-control" type="text" value="{{ $user['body_color'] }}"
                            name="body_color" /></div>
                </div>
            </div>

            <div class="col-12 col-md-6 py-1">
                <div class="row">
                    <div class="col-5"><label class="input-label" for="">Phone No.</label></div>
                    <div class="col-7"> <input class="form-control" type="text" value="{{ $user['phone'] }}"
                            name="phone" />
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 py-1">
                <div class="row">
                    <div class="col-5"><label class="input-label" for="">Profession</label></div>
                    <div class="col-7"> <input class="form-control" type="text" value="{{ $user['profession'] }}"
                            name="profession" /></div>
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
                                    <td scope="row"><input class="form-control" type="text" name="exam[0][]"
                                            value="{{ $exam[0][0] ?? '' }}" />
                                    </td>
                                    <td scope="row"><input class="form-control" type="text" name="exam[0][]"
                                            value="{{ $exam[0][1] ?? '' }}" />
                                    </td>
                                    <td scope="row"><input class="form-control" type="text" name="exam[0][]"
                                            value="{{ $exam[0][2] ?? '' }}" />
                                    </td>
                                    <td scope="row"><input class="form-control" type="text" name="exam[0][]"
                                            value="{{ $exam[0][3] ?? '' }}" />
                                    </td>
                                    <td scope="row"><input class="form-control" type="text" name="exam[0][]"
                                            value="{{ $exam[0][4] ?? '' }}" />
                                    </td>
                                    <td scope="row"><input class="form-control" type="text" name="exam[0][]"
                                            value="{{ $exam[0][5] ?? '' }}" size="50" />
                                    </td>

                                </tr>
                                <tr>
                                    <td scope="row"><input class="form-control" type="text" name="exam[1][]"
                                            value="{{ $exam[1][0] ?? '' }}" />
                                    </td>
                                    <td scope="row"><input class="form-control" type="text" name="exam[1][]"
                                            value="{{ $exam[1][1] ?? '' }}" />
                                    </td>
                                    <td scope="row"><input class="form-control" type="text" name="exam[1][]"
                                            value="{{ $exam[1][2] ?? '' }}" />
                                    </td>
                                    <td scope="row"><input class="form-control" type="text" name="exam[1][]"
                                            value="{{ $exam[1][3] ?? '' }}" />
                                    </td>
                                    <td scope="row"><input class="form-control" type="text" name="exam[1][]"
                                            value="{{ $exam[1][4] ?? '' }}" />
                                    </td>
                                    <td scope="row"><input class="form-control" type="text" name="exam[1][]"
                                            value="{{ $exam[1][5] ?? '' }}" size="50" />
                                    </td>

                                </tr>
                                <tr>
                                    <td scope="row"><input class="form-control" type="text" name="exam[2][]"
                                            value="{{ $exam[2][0] ?? '' }}" />
                                    </td>
                                    <td scope="row"><input class="form-control" type="text" name="exam[2][]"
                                            value="{{ $exam[2][1] ?? '' }}" />
                                    </td>
                                    <td scope="row"><input class="form-control" type="text" name="exam[2][]"
                                            value="{{ $exam[2][2] ?? '' }}" />
                                    </td>
                                    <td scope="row"><input class="form-control" type="text" name="exam[2][]"
                                            value="{{ $exam[2][3] ?? '' }}" />
                                    </td>
                                    <td scope="row"><input class="form-control" type="text" name="exam[2][]"
                                            value="{{ $exam[2][4] ?? '' }}" />
                                    </td>
                                    <td scope="row"><input class="form-control" type="text" name="exam[2][]"
                                            value="{{ $exam[2][5] ?? '' }}" size="50" />
                                    </td>

                                </tr>
                                <tr>
                                    <td scope="row"><input class="form-control" type="text" name="exam[3][]"
                                            value="{{ $exam[3][0] ?? '' }}" />
                                    </td>
                                    <td scope="row"><input class="form-control" type="text" name="exam[3][]"
                                            value="{{ $exam[3][1] ?? '' }}" />
                                    </td>
                                    <td scope="row"><input class="form-control" type="text" name="exam[3][]"
                                            value="{{ $exam[3][2] ?? '' }}" />
                                    </td>
                                    <td scope="row"><input class="form-control" type="text" name="exam[3][]"
                                            value="{{ $exam[3][3] ?? '' }}" />
                                    </td>
                                    <td scope="row"><input class="form-control" type="text" name="exam[3][]"
                                            value="{{ $exam[3][4] ?? '' }}" />
                                    </td>
                                    <td scope="row"><input class="form-control" type="text" name="exam[3][]"
                                            value="{{ $exam[3][5] ?? '' }}" size="50" />
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
                    <div class="col-7"> <input class="form-control" type="text" value="{{ $user['father_profession'] }}"
                            name="father_profession" />
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 py-1">
                <div class="row">
                    <div class="col-5"><label class="input-label" for="">Father's Phone No.</label></div>
                    <div class="col-7"> <input class="form-control" type="text" value="{{ $user['father_phone'] }}"
                            name="father_phone" /></div>
                </div>
            </div>

            <div class="col-12 col-md-6 py-1">
                <div class="row">
                    <div class="col-5"><label class="input-label" for="">Mother's Profession (If alive)</label></div>
                    <div class="col-7"> <input class="form-control" type="text" value="{{ $user['mother_profession'] }}"
                            name="mother_profession" />
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 py-1">
                <div class="row">
                    <div class="col-5"><label class="input-label" for="">Mother's Phone No.</label></div>
                    <div class="col-7"> <input class="form-control" type="text" value="{{ $user['mother_phone'] }}"
                            name="mother_phone" /></div>
                </div>
            </div>

            <div class="col-12 col-md-6 py-1">
                <div class="row">
                    <div class="col-5"><label class="input-label" for="">No of Brother and Sister</label></div>
                    <div class="col-7"> <input class="form-control" type="text" value="{{ $user['siblings'] }}"
                            name="siblings" /></div>
                </div>
            </div>
            <div class="col-12 col-md-6 py-1">
                <div class="row">
                    <div class="col-5"><label class="input-label" for="">Extra Qualifications</label></div>
                    <div class="col-7"> <input class="form-control" type="text" value="{{ $user['extra_virtue'] }}"
                            name="extra_virtue" /></div>
                </div>
            </div>

            <div class="col-12 col-md-6 py-1">
                <div class="row">
                    <div class="col-5"><label class="input-label" for="">Gender</label></div>
                    <div class="col-7">
                        <input class="form-control" type="text" value="{{ $user['gender'] }}" name="gender" />
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 py-1">
                <div class="row">
                    <div class="col-5"><label class="input-label" for="">Date of Birth</label></div>
                    <div class="col-7"> <input class="form-control" type="text" value="{{ $user['dob'] }}" name="dob" />
                    </div>
                </div>
            </div>


            <div class="col-12 col-md-6 py-1">
                <div class="row">
                    <div class="col-5"><label class="input-label" for="">Are You Married Before</label></div>
                    <div class="col-7"> <input id="premarried" class="premarried" type="checkbox" name="premarried"
                            value="1" {{ $user['premarried'] == 1 ? 'checked' : '' }} />
                    </div>
                </div>
            </div>

        </div>
        <div id="premarried-data" class="row premarried-data">
            <div class="col-12 col-md-6 py-1">
                <div class="row">
                    <div class="col-5"><label class="input-label" for="">Past spouse name</label></div>
                    <div class="col-7"> <input class="form-control" type="text" value="{{ $user['pre_spouse_name'] }}"
                            name="pre_spouse_name" /></div>
                </div>
            </div>

            <div class="col-12 col-md-6 py-1">
                <div class="row">
                    <div class="col-5"><label class="input-label" for="">Past spouse father's name</label></div>
                    <div class="col-7"> <input class="form-control" type="text" value="{{ $user['pre_spouse_father'] }}"
                            name="pre_spouse_father" />
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 py-1">
                <div class="row">
                    <div class="col-5"><label class="input-label" for="">Why you are separated</label></div>
                    <div class="col-7"> <input class="form-control" type="text" value="{{ $user['divorce_details'] }}"
                            name="divorce_details" /></div>
                </div>
            </div>

            <div class="col-12 col-md-6 py-1">
                <div class="row">
                    <div class="col-5"><label class="input-label" for="">Past married address</label></div>
                    <div class="col-7"> <input class="form-control" type="text" value="{{ $user['pre_spouse_address'] }}"
                            name="pre_spouse_address" />
                    </div>
                </div>
            </div>
        </div>


  

    </div>

    @push('styles')
        <style type="text/css">
            .lead {
                border-bottom: 1px solid white;
                margin-bottom: 30px;
                padding: 20px;
                color: #bd2130;
            }

            #profile-pic {
                width: 40mm;
                height: 50mm;

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

            .education-table thead {
                font-size: 15px;
                text-align: center;
                color: white;
            }

            .pointer {
                cursor: pointer;
            }

        </style>
    @endpush

    @push('scripts')
        <script type="text/javascript">
            $(document).ready(function() {
                $('input').prop("disabled", true);
                $('#logout-form input').prop('disabled', false);
            });

        </script>
    @endpush
@endsection
