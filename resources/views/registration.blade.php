
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME', 'poygambd.com') }}</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />

    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />

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

</head>

<body>

    <div class="container bg-info p-3">
        <div class="text-center lead">
            <h1 class="text-light">Registration packages-{{$package}} </h1>
        </div>

        <form action="{{ route('registration.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="package" value="{{$package}}"/>
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
                        <div class="col-7"> <input class="form-control" type="text" value="" name="present_address" />
                        </div>
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
                        <div class="col-7"> <input class="form-control" type="url" value="" name="fb_id" /></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 py-1">
                    <div class="row">
                        <div class="col-5"><label class="input-label" for="">Religion</label></div>
                        <div class="col-7">
                            <select class="form-control" name="religion">
                                <option value="">Select</option>
                                <option value="islam">Islam
                                </option>
                                <option value="hindusm">Hindusm
                                </option>
                                <option value="christian">
                                    Christian</option>
                                <option value="budhist">Budhist
                                </option>
                                <option value="others">Others
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
                                <option value="a+">A+(Positive)
                                </option>
                                <option value="a-">A-(Negative)
                                </option>
                                <option value="ab+">
                                    AB+(Positive)
                                </option>
                                <option value="ab-">
                                    AB-(Negative)
                                </option>
                                <option value="b+">B+(Positive)
                                </option>
                                <option value="b-">B-(Negative)
                                </option>
                                <option value="o+">O+(Positive)
                                </option>
                                <option value="o-">O-(Negative)
                                </option>
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
                                        <td scope="row"><input class="form-control" type="text" name="exam[0][]"
                                                value="" />
                                        </td>
                                        <td scope="row"><input class="form-control" type="text" name="exam[0][]"
                                                value="" />
                                        </td>
                                        <td scope="row"><input class="form-control" type="text" name="exam[0][]"
                                                value="" />
                                        </td>
                                        <td scope="row"><input class="form-control" type="text" name="exam[0][]"
                                                value="" />
                                        </td>
                                        <td scope="row"><input class="form-control" type="text" name="exam[0][]"
                                                value="" />
                                        </td>
                                        <td scope="row"><input class="form-control" type="text" name="exam[0][]"
                                                value="" size="50" />
                                        </td>

                                    </tr>
                                    <tr>
                                        <td scope="row"><input class="form-control" type="text" name="exam[1][]"
                                                value="" />
                                        </td>
                                        <td scope="row"><input class="form-control" type="text" name="exam[1][]"
                                                value="" />
                                        </td>
                                        <td scope="row"><input class="form-control" type="text" name="exam[1][]"
                                                value="" />
                                        </td>
                                        <td scope="row"><input class="form-control" type="text" name="exam[1][]"
                                                value="" />
                                        </td>
                                        <td scope="row"><input class="form-control" type="text" name="exam[1][]"
                                                value="" />
                                        </td>
                                        <td scope="row"><input class="form-control" type="text" name="exam[1][]"
                                                value="" size="50" />
                                        </td>

                                    </tr>
                                    <tr>
                                        <td scope="row"><input class="form-control" type="text" name="exam[2][]"
                                                value="" />
                                        </td>
                                        <td scope="row"><input class="form-control" type="text" name="exam[2][]"
                                                value="" />
                                        </td>
                                        <td scope="row"><input class="form-control" type="text" name="exam[2][]"
                                                value="" />
                                        </td>
                                        <td scope="row"><input class="form-control" type="text" name="exam[2][]"
                                                value="" />
                                        </td>
                                        <td scope="row"><input class="form-control" type="text" name="exam[2][]"
                                                value="" />
                                        </td>
                                        <td scope="row"><input class="form-control" type="text" name="exam[2][]"
                                                value="" size="50" />
                                        </td>

                                    </tr>
                                    <tr>
                                        <td scope="row"><input class="form-control" type="text" name="exam[3][]"
                                                value="" />
                                        </td>
                                        <td scope="row"><input class="form-control" type="text" name="exam[3][]"
                                                value="" />
                                        </td>
                                        <td scope="row"><input class="form-control" type="text" name="exam[3][]"
                                                value="" />
                                        </td>
                                        <td scope="row"><input class="form-control" type="text" name="exam[3][]"
                                                value="" />
                                        </td>
                                        <td scope="row"><input class="form-control" type="text" name="exam[3][]"
                                                value="" />
                                        </td>
                                        <td scope="row"><input class="form-control" type="text" name="exam[3][]"
                                                value="" size="50" />
                                        </td>

                                    </tr>
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>

                <div class="col-12 col-md-6 py-1">
                    <div class="row">
                        <div class="col-5"><label class="input-label" for="">Father's Profession (If alive)</label>
                        </div>
                        <div class="col-7"> <input class="form-control" type="text" value="" name="father_profession" />
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 py-1">
                    <div class="row">
                        <div class="col-5"><label class="input-label" for="">Father's Phone No.</label></div>
                        <div class="col-7"> <input class="form-control" type="text" value="" name="father_phone" />
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 py-1">
                    <div class="row">
                        <div class="col-5"><label class="input-label" for="">Mother's Profession (If alive)</label>
                        </div>
                        <div class="col-7"> <input class="form-control" type="text" value="" name="mother_profession" />
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 py-1">
                    <div class="row">
                        <div class="col-5"><label class="input-label" for="">Mother's Phone No.</label></div>
                        <div class="col-7"> <input class="form-control" type="text" value="" name="mother_phone" />
                        </div>
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
                        <div class="col-7"> <input class="form-control" type="text" value="" name="extra_virtue" />
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 py-1">
                    <div class="row">
                        <div class="col-5"><label class="input-label" for="">Gender</label></div>
                        <div class="col-7">
                            <select class="form-control" name="gender">
                                <option value="">Select</option>
                                <option value="male">Male</option>
                                <option value="female">Female
                                </option>
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
                        <div class="col-7"> <input id="premarried" class="premarried" type="checkbox" name="premarried"
                                value="1" />
                        </div>
                    </div>
                </div>

            </div>
            <div id="premarried-data" class="row premarried-data d-none">
                <div class="col-12 col-md-6 py-1">
                    <div class="row">
                        <div class="col-5"><label class="input-label" for="">Past spouse name</label></div>
                        <div class="col-7"> <input class="form-control" type="text" value="" name="pre_spouse_name" />
                        </div>
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
                        <div class="col-7"> <input class="form-control" type="text" value="" name="divorce_details" />
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 py-1">
                    <div class="row">
                        <div class="col-5"><label class="input-label" for="">Past married address</label></div>
                        <div class="col-7"> <input class="form-control" type="text" value=""
                                name="pre_spouse_address" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 py-1">
                    <div class="row">
                        <div class="col-md-5"><label class="input-label" for="">Profile photo</label></div>
                        <div class="col-md-7 text-center text-white ">

                            <input id="profile-photo" class="" type="file" name="profile_photo" accept="image/*"
                                hidden />
                            <input id="delete-profile-photo" class="" type="checkbox" name="delete_profile_photo"
                                hidden />

                            <img class="w-100" id="profile-pic" width="200" src="" />
                            <div class="profile-photo form-control pointer  picNotSelected">
                                Select photo
                            </div>
                            <div class="row my-3 picSelected d-none">
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
                <div class="col-12 text-right pt-2"><input class="btn btn-warning" type="submit" value="Process" /></div>
            </div>
        </form>

    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <!-- Vendor js -->
    <script src="/assets/js/vendor.min.js"></script>

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
</body>

</html>
