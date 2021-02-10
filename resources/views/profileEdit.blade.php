@extends('layouts.user')


@section('content')

    <div class="container bg-info p-3">
        <div class="text-center lead">
            <h1 class="">Edit profile</h1>
        </div>

        <form action="{{ route('profile-update') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-6 py-1">
                    <div class="row">
                        <div class="col-5"><label class="input-label" for="">Your Name</label></div>
                        <div class="col-7"> <input class="form-control" type="text" value="{{ $user['name'] }}"
                                name="name" /></div>
                    </div>
                </div>

                <div class="col-12 col-md-6 py-1">
                    <div class="row">
                        <div class="col-5"><label class="input-label" for="">Father's Name</label></div>
                        <div class="col-7"> <input class="form-control" type="text" value="{{ $user['father'] }}"
                                name="father" /></div>
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
                        <div class="col-7"> <input class="form-control" type="text"
                                value="{{ $user['parmanent_address'] }}" name="parmanent_address" />
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 py-1">
                    <div class="row">
                        <div class="col-5"><label class="input-label" for="">Facebook ID (If available)</label></div>
                        <div class="col-7"> <input class="form-control" type="text" value="{{ $user['fb_id'] }}"
                                name="fb_id" /></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 py-1">
                    <div class="row">
                        <div class="col-5"><label class="input-label" for="">Religion</label></div>
                        <div class="col-7">
                            <select class="form-control" name="religion">
                                <option value="">Select</option>
                                <option value="islam" {{ $user['religion'] == 'islam' ? 'selected' : '' }}>Islam</option>
                                <option value="hindusm" {{ $user['religion'] == 'hindusm' ? 'selected' : '' }}>Hindusm
                                </option>
                                <option value="christian" {{ $user['religion'] == 'christian' ? 'selected' : '' }}>
                                    Christian</option>
                                <option value="budhist" {{ $user['religion'] == 'budhist' ? 'selected' : '' }}>Budhist
                                </option>
                                <option value="others" {{ $user['religion'] == 'others' ? 'selected' : '' }}>Others
                                </option>
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
                                <option value="a+" {{ $user['blood_group'] == 'a+' ? 'selected' : '' }}>A+(Positive)
                                </option>
                                <option value="a-" {{ $user['blood_group'] == 'a-' ? 'selected' : '' }}>A-(Negative)
                                </option>
                                <option value="ab+" {{ $user['blood_group'] == 'ab+' ? 'selected' : '' }}>AB+(Positive)
                                </option>
                                <option value="ab-" {{ $user['blood_group'] == 'ab-' ? 'selected' : '' }}>AB-(Negative)
                                </option>
                                <option value="b+" {{ $user['blood_group'] == 'b+' ? 'selected' : '' }}>B+(Positive)
                                </option>
                                <option value="b-" {{ $user['blood_group'] == 'b-' ? 'selected' : '' }}>B-(Negative)
                                </option>
                                <option value="o+" {{ $user['blood_group'] == 'o+' ? 'selected' : '' }}>O+(Positive)
                                </option>
                                <option value="o-" {{ $user['blood_group'] == 'o-' ? 'selected' : '' }}>O-(Negative)
                                </option>
                            </select>
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
                                name="phone" /></div>
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
                        <div class="col-7"> <input class="form-control" type="text"
                                value="{{ $user['father_profession'] }}" name="father_profession" />
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
                        <div class="col-7"> <input class="form-control" type="text"
                                value="{{ $user['mother_profession'] }}" name="mother_profession" />
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
                            <select class="form-control" name="gender">
                                <option value="">Select</option>
                                <option value="male" {{ $user['gender'] == 'male' ? 'selected' : '' }}>Male</option>
                                <option value="female" {{ $user['gender'] == 'female' ? 'selected' : '' }}>Female
                                </option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 py-1">
                    <div class="row">
                        <div class="col-5"><label class="input-label" for="">Date of Birth</label></div>
                        <div class="col-7"> <input class="form-control" type="date" value="{{ $user['dob'] }}"
                                name="dob" /></div>
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
            <div id="premarried-data" class="row premarried-data {{ $user['premarried'] == 0 ? 'd-none' : '' }} ">
                <div class="col-12 col-md-6 py-1">
                    <div class="row">
                        <div class="col-5"><label class="input-label" for="">Past spouse name</label></div>
                        <div class="col-7"> <input class="form-control" type="text"
                                value="{{ $user['pre_spouse_name'] }}" name="pre_spouse_name" /></div>
                    </div>
                </div>

                <div class="col-12 col-md-6 py-1">
                    <div class="row">
                        <div class="col-5"><label class="input-label" for="">Past spouse father's name</label></div>
                        <div class="col-7"> <input class="form-control" type="text"
                                value="{{ $user['pre_spouse_father'] }}" name="pre_spouse_father" />
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 py-1">
                    <div class="row">
                        <div class="col-5"><label class="input-label" for="">Why you are separated</label></div>
                        <div class="col-7"> <input class="form-control" type="text"
                                value="{{ $user['divorce_details'] }}" name="divorce_details" /></div>
                    </div>
                </div>

                <div class="col-12 col-md-6 py-1">
                    <div class="row">
                        <div class="col-5"><label class="input-label" for="">Past married address</label></div>
                        <div class="col-7"> <input class="form-control" type="text"
                                value="{{ $user['pre_spouse_address'] }}" name="pre_spouse_address" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 py-1">
                    <div class="row">
                        <div class="col-md-5"><label class="input-label" for="">Profile photo</label></div>
                        <div class="col-md-7 text-center text-white ">

                            <input id="profile-photo" class="" type="file" name="profile_photo" accept="image/*" hidden />
                            <input id="delete-profile-photo" class="" type="checkbox" name="delete_profile_photo" hidden />

                            <img class="w-100" id="profile-pic" width="200" src="{{ $user['profile_photo'] }}" />
                            <div
                                class="profile-photo form-control pointer  picNotSelected {{ $user['profile_photo'] == null ? '' : 'd-none' }}">
                                Select photo
                            </div>
                            <div class="row my-3 picSelected {{ $user['profile_photo'] == null ? 'd-none' : '' }}">
                                <div class="col-6">
                                    <input id="change-profilePic" class="btn btn-warning w-100" type="button"
                                        value="Change" />
                                </div>
                                <div class="col-6">
                                    <input id="remove-profilePic" class="btn btn-danger w-100" type="button"
                                        value="Remove" />
                                </div>
                            </div>
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
                $("#premarried").click(function() {
                    if ($("#premarried").checked) {
                        $(".premarried-data").toggleClass('d-none');
                    } else {
                        $(".premarried-data").toggleClass('d-none');
                    }
                });

                $(".profile-photo").click(function() {
                    $("#profile-photo").click();
                });

                $("#change-profilePic").click(function() {
                    $("#profile-photo").click();
                });

                $("#remove-profilePic").click(function() {
                    $("#profile-pic").attr('src', '');
                    $(".picSelected").addClass('d-none');
                    $(".picNotSelected").removeClass('d-none');
                    $("#delete-profile-photo").prop("checked", true);
                });

                $("#profile-photo").change(function(event) {
                    if (URL.createObjectURL(event.target.files[0])) {
                        $(".picSelected").removeClass('d-none');
                        $(".picNotSelected").addClass('d-none');
                        $("#profile-pic").attr('src', URL.createObjectURL(event.target.files[0]));
                        $("#delete-profile-photo").prop("checked", false);
                    }
                });
            });

        </script>
    @endpush

@endsection
