<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> {{ $user->name }}</title>

    <style type="text/css">
        body {
            background: url('storage/images/background/a4background.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            margin: -45px;
            padding: 45px;
            padding-top: 170px;
        }

        p {
            margin: 5 0 5 0;
        }

        .bg-primary {
            background: blue;
        }

        .bg-secondary {
            background: gray;
        }

        .bg-dark {
            background: black;
        }

        .bg-light {
            background: white;
        }

        .bg-info {
            background: skyblue;
        }

        .bg-danger {
            background: maroon;
        }

        .bg-warning {
            background: yellowgreen;
        }

        .row {
            width: 100%;
        }

        .col-4 {
            float: left;
            width: 33.33333%;
        }

        .col-6 {
            float: left;
            width: 50%;

        }

        .col-8 {
            float: left;
            width: 66.66666%;

        }

        .text-left {
            text-align: left;
        }

        .text-center {
            text-align: center;
        }

        .text-right {
            text-align: right;
        }

        .clearfix::after {
            content: "";
            clear: both;
        }


        .px-0 {
            padding: 0 0;
        }

        .px-1 {
            padding: 0 4;
        }

        .px-2 {
            padding: 0 8;
        }

        .px-3 {
            padding: 0 12;
        }

        .px-4 {
            padding: 0 16;
        }

        .px-5 {
            padding: 0 20;
        }

        .py-0 {
            padding: 0 0;
        }

        .py-1 {
            padding: 4 0;
        }

        .py-2 {
            padding: 8 0;
        }

        .py-3 {
            padding: 12 0;
        }

        .py-4 {
            padding: 16 0;
        }

        .py-5 {
            padding: 20 0;
        }

        .mx-0 {
            margin: 0 0;
        }

        .mx-1 {
            margin: 0 4;
        }

        .mx-2 {
            margin: 0 8;
        }

        .mx-3 {
            margin: 0 12;
        }

        .mx-4 {
            margin: 0 16;
        }

        .mx-5 {
            margin: 0 20;
        }

        .my-0 {
            margin: 0 0;
        }

        .my-1 {
            margin: 4 0;
        }

        .my-2 {
            margin: 8 0;
        }

        .my-3 {
            margin: 12 0;
        }

        .my-4 {
            margin: 16 0;
        }

        .my-5 {
            margin: 20 0;
        }

        .pt-4 {
            padding: 14 0 0 0;
        }

        .form-name {
            font-size: 28px;
            margin-top: -8px;
        }

        .profile-pic {
            width: 150px;
            height: 180px;
            border: 2px solid gray;
            padding: 0px;
            margin: 0px;
        }

        .data-name {
            font-size: 16px;
            width: 40%;
            display: inline-block;
        }

        .data-value {
            border-bottom: 2px dotted black;
            font-size: 16px;
            width: 50%;
            display: inline-block;
            text-transform: uppercase;
        }

        .address-title {
            font-size: 20px;
            padding: 0px;
            margin: 0px;
            margin-bottom: 10px;
        }

        .checkbox {
            font-size: 20px;
            margin: 0px;
            padding: 0px;
            height: 20px;
        }

        .checkbox-title {
            height: 20px;
            font-size: 20px;
            margin: 0px;
            margin-left: 4px;
            padding: 0px;

        }

        .Table {
            display: table;
        }

        .Heading {
            display: table-row;
            font-weight: bold;
            text-align: center;
        }

        .Row {
            display: table-row;
        }

        .Cell {
            display: table-cell;
            border: solid;
            border-width: thin;
            padding-left: 5px;
            padding-right: 5px;
        }

        .cell-data1 {
            width: 100px;
        }

        .cell-data2 {
            width: 100px;
        }

        .cell-data3 {
            width: 60px;
        }

        .cell-data4 {
            width: 80px;
        }

        .cell-data5 {
            width: 80px;
        }

        .cell-data6 {
            width: 200px;
        }

        .border-top {
            border-top: 1px solid black;
            padding: 0px 20px;
            margin: 0px 20px;
        }

        .sign {
            position: fixed;
            bottom: 20px;
        }

        .page_break {
            page-break-before: always;
        }

    </style>
</head>

<body>

    <div class="row clearfix">

        <div class="col-4">
            <p>ID : {{ $user->id }}</p>
        </div>

        <div class="col-4 text-center">
            <p class="form-name">Registration form</p>
        </div>

        <div class="col-4 text-right">
            <p>Reg Date: {{ Str::words($user->created_at, 1, '') }}</p>

        </div>

    </div>
    <br />
    <div class="row clearfix">
        <div class="col-6">
            <img class="profile-pic" src="{{ ltrim($user['profile_photo'] ?? '/placeholder', '/') }}" />

        </div>
        <div class="col-6">
            <p class="address-title">Present address</p>
            <address class="">{{ $user->present_address }}</address>
            <br />
            <p class="address-title">Parmanent address</p>
            <address class="">{{ $user->parmanent_address }}</address>
        </div>
    </div>

    <br />
    <div class="row clearfix">
        <div class="col-6">
            <p class="">
                <span class="data-name">Name :</span>
                <span class="data-value"> {{ $user->name }}</span>
            </p>
        </div>
        <div class="col-6">
            <p class="">
                <span class="data-name">Father's Name :</span>
                <span class="data-value"> {{ $user->name }}</span>
            </p>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-6">
            <p class="">
                <span class="data-name">Date of Birth :</span>
                <span class="data-value"> {{ $user->dob }}</span>
            </p>
        </div>
        <div class="col-6">
            <p class="">
                <span class="data-name">Gender :</span>
                <span class="data-value"> {{ $user->gender }}</span>
            </p>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-6">
            <p class="">
                <span class="data-name">Religion :</span>
                <span class="data-value"> {{ $user->religion }}</span>
            </p>
        </div>
        <div class="col-6">
            <p class="">
                <span class="data-name">Blood Group :</span>
                <span class="data-value"> {{ $user->blood_group }}</span>
            </p>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-6">
            <p class="">
                <span class="data-name">Height :</span>
                <span class="data-value"> {{ $user->height }}</span>
            </p>
        </div>
        <div class="col-6">
            <p class="">
                <span class="data-name">Weight :</span>
                <span class="data-value"> {{ $user->weight }}</span>
            </p>
        </div>
    </div>

    <div class="row clearfix">
        <div class="col-6">
            <p class="">
                <span class="data-name">Color :</span>
                <span class="data-value"> {{ $user->color }}</span>
            </p>
        </div>
        <div class="col-6">
            <p class="">
                <span class="data-name">Profession :</span>
                <span class="data-value"> {{ $user->profession }}</span>
            </p>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-6">
            <p class="">
                <span class="data-name">Father's Profession :</span>
                <span class="data-value"> {{ $user->father_profession }}</span>
            </p>
        </div>
        <div class="col-6">
            <p class="">
                <span class="data-name">Father's Phone :</span>
                <span class="data-value"> {{ $user->father_phone }}</span>
            </p>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-6">
            <p class="">
                <span class="data-name">Mother's Profession :</span>
                <span class="data-value"> {{ $user->mother_profession }}</span>
            </p>
        </div>
        <div class="col-6">
            <p class="">
                <span class="data-name">Mother's Phone :</span>
                <span class="data-value"> {{ $user->mother_phone }}</span>
            </p>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-6">
            <p class="">
                <span class="data-name">Brother And Sister :</span>
                <span class="data-value"> {{ $user->siblings }}</span>
            </p>
        </div>
        <div class="col-6">
            <p class="">
                <span class="data-name">Extra Qualifications :</span>
                <span class="data-value"> {{ $user->extra_virtue }}</span>
            </p>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-6">
            <p class="">
                <span class="data-name">Are you premarried:</span>
                <span class="data">
                    <input class="checkbox" type="checkbox" {{ $user->premarried ? 'checked' : '' }}><span
                        class="checkbox-title">Yes </span>
                    <input class="checkbox" type="checkbox" {{ $user->premarried ? '' : 'checked' }}><span
                        class="checkbox-title">No</span>
                </span>
            </p>
        </div>
        <div class="col-6">
            <p class="">
                <span class="data-name">Pre spouse name :</span>
                <span class="data-value"> {{ $user->pre_spouse_name }}</span>
            </p>
        </div>
    </div>


    <div class="row clearfix">
        <div class="col-6">
            <p class="">
                <span class="data-name">Pre spouse father's name :</span>
                <span class="data-value"> {{ $user->pre_spouse_father }}</span>
            </p>
        </div>
        <div class="col-6">
            <p class="">
                <span class="data-name">Why you are separated :</span>
                <span class="data-value"> {{ $user->divorce_details }}</span>
            </p>
        </div>
    </div>


    <div class="row clearfix">
        <div class="col-12">
            <div class="data-name py-1">Education</div>
            <div class="Table">
                <div class="Heading">
                    <div class="Cell cell-data1">
                        <p>Exam</p>
                    </div>
                    <div class="Cell cell-data2">
                        <p>Section</p>
                    </div>
                    <div class="Cell cell-data3">
                        <p>Year</p>
                    </div>
                    <div class="Cell cell-data4">
                        <p>Result</p>
                    </div>
                    <div class="Cell cell-data5">
                        <p>Board</p>
                    </div>

                    <div class="Cell cell-data6">
                        <p>Institute Name</p>
                    </div>
                </div>

                <div class="Row">
                    <div class="Cell">
                        <p>{{ json_decode($user->education)[0][0] ?? '.' }}</p>
                    </div>

                    <div class="Cell">
                        <p>{{ json_decode($user->education)[0][1] ?? '' }}</p>
                    </div>

                    <div class="Cell">
                        <p>{{ json_decode($user->education)[0][2] ?? '' }}</p>
                    </div>

                    <div class="Cell">
                        <p>{{ json_decode($user->education)[0][3] ?? '' }}</p>
                    </div>

                    <div class="Cell">
                        <p>{{ json_decode($user->education)[0][4] ?? '' }}</p>
                    </div>

                    <div class="Cell">
                        <p>{{ json_decode($user->education)[0][5] ?? '' }}</p>
                    </div>

                </div>
                <div class="Row">
                    <div class="Cell">
                        <p>{{ json_decode($user->education)[1][0] ?? '.' }}</p>
                    </div>

                    <div class="Cell">
                        <p>{{ json_decode($user->education)[1][1] ?? '' }}</p>
                    </div>

                    <div class="Cell">
                        <p>{{ json_decode($user->education)[1][2] ?? '' }}</p>
                    </div>

                    <div class="Cell">
                        <p>{{ json_decode($user->education)[1][3] ?? '' }}</p>
                    </div>

                    <div class="Cell">
                        <p>{{ json_decode($user->education)[1][4] ?? '' }}</p>
                    </div>

                    <div class="Cell">
                        <p>{{ json_decode($user->education)[1][5] ?? '' }}</p>
                    </div>

                </div>
                <div class="Row">
                    <div class="Cell">
                        <p>{{ json_decode($user->education)[2][0] ?? '.' }}</p>
                    </div>

                    <div class="Cell">
                        <p>{{ json_decode($user->education)[2][1] ?? '' }}</p>
                    </div>

                    <div class="Cell">
                        <p>{{ json_decode($user->education)[2][2] ?? '' }}</p>
                    </div>

                    <div class="Cell">
                        <p>{{ json_decode($user->education)[2][3] ?? '' }}</p>
                    </div>

                    <div class="Cell">
                        <p>{{ json_decode($user->education)[2][4] ?? '' }}</p>
                    </div>

                    <div class="Cell">
                        <p>{{ json_decode($user->education)[2][5] ?? '' }}</p>
                    </div>

                </div>
                <div class="Row">
                    <div class="Cell">
                        <p>{{ json_decode($user->education)[3][0] ?? '.' }}</p>
                    </div>

                    <div class="Cell">
                        <p>{{ json_decode($user->education)[3][1] ?? '' }}</p>
                    </div>

                    <div class="Cell">
                        <p>{{ json_decode($user->education)[3][2] ?? '' }}</p>
                    </div>

                    <div class="Cell">
                        <p>{{ json_decode($user->education)[3][3] ?? '' }}</p>
                    </div>

                    <div class="Cell">
                        <p>{{ json_decode($user->education)[3][4] ?? '' }}</p>
                    </div>

                    <div class="Cell">
                        <p>{{ json_decode($user->education)[3][5] ?? '' }}</p>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="row clearfix pt-4 sign">

        <div class="col-4 text-center">
            <p class="border-top">Candidate Sign</p>
        </div>

        <div class="col-4 text-center">
            <p class="border-top">Middleman Sign</p>
        </div>

        <div class="col-4 text-center">
            <p class="border-top">Manager Sign</p>
        </div>

    </div>

    {{-- <div class="page_break"></div> --}}

</body>

</html>
