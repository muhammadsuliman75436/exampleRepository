@extends("layout.app")
@section('content')
<div class="container justify-content-center" style="text-align: center;" align="center'">
    <table class="table table-bordered " id="table1" width='100%'>
        <thead>
            <tr>
                <th scope="col">Date - Day</th>
                <th scope="col"><a href=""><img src="{{asset('storage/newspapers/jung.jpg')}}" alt=""></a></th>
                <th scope="col"><a href=""><img src="{{asset('storage/newspapers/express1.jpg')}}" alt=""></a></th>
                <th scope="col"><a href=""><img src="{{asset('storage/newspapers/dawn1.jpg')}}" alt=""></a></th>
                <th scope="col"><a href=""><img src="{{asset('storage/newspapers/nawai_waqt1.jpg')}}" alt=""></a></th>
                <th scope="col"><a href=""><img src="{{asset('storage/newspapers/theNEWS1.jpg')}}" alt=""></a></th>
                <th scope="col"><a href=""><img src="{{asset('storage/newspapers/the-nation1.jpg')}}" alt=""></a></th>
                <th scope="col"><a href=""><img src="{{asset('storage/newspapers/mashriq.jpg')}}" alt=""></a></th>
                <th scope="col"><a href=""><img src="{{asset('storage/newspapers/kawish1.png')}}" alt=""></a></th>
                <th scope="col"><a href=""><img src="{{asset('storage/newspapers/naibaat.png')}}" alt=""></a></th>
                <th scope="col"><a href=""><img src="{{asset('storage/newspapers/dunya.png')}}" alt=""></a></th>
            </tr>

        </thead>
        <tbody>
            @foreach ($jobs as $job)
            <?php
                $timestamp = strtotime($job->dat);
                $day = date('l', $timestamp);
                if ($day == "Sunday") {
                    continue;
                }
                ?>
            <tr>
                <td valin="top" scope="row" class="small">
                    <?php $date = date_create($job->dat); echo date_format($date, 'd/m/Y') . "<br>" . $day; ?></td>
                <td valin="top"><a class="" href="paperjobs/{{ 'jung' }}/{{ $job->dat }}">Jobs</a>
                </td>
                <td valin="top"><a class="" href="paperjobs/{{ 'express' }}/{{ $job->dat }}">Jobs</a>
                </td>
                <td valin="top"><a class="" href="paperjobs/{{ 'dawn' }}/{{ $job->dat }}">Jobs</a>
                </td>

                <td valin="top"><a class="" href="paperjobs/{{ 'nawaiwaqt' }}/{{ $job->dat }}">Jobs</a></td>
                <td valin="top"><a class="" href="paperjobs/{{ 'news' }}/{{ $job->dat }}">Jobs</a>
                </td>
                <td valin="top"><a class="" href="paperjobs/{{ 'nation' }}/{{ $job->dat }}">Jobs</a>
                </td>

                <td valin="top"><a class="" href="paperjobs/{{ 'mashriq' }}/{{ $job->dat }}">Jobs</a>
                </td>
                <td valin="top"><a class="" href="paperjobs/{{ 'kawish' }}/{{ $job->dat }}">Jobs</a>
                </td>
                <td valin="top"><a class="" href="paperjobs/{{ 'naibaat' }}/{{ $job->dat }}">Jobs</a>
                </td>

                <td valin="top"><a class="" href="paperjobs/{{ 'dunya' }}/{{ $job->dat }}">Jobs</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <div class="row table2" id="table2">
        <div class="col-md-12" style="overflow-x: auto;">
            <table class="table table-bordered " width='100%'>
                <tbody>
                    @foreach ($jobs as $job)
                    <?php
                             $timestamp = strtotime($job->dat);
                            $day = date('l', $timestamp);
                            if ($day == "Sunday") {
                                continue;
                            }
                            ?>
                    <tr>
                        <th scope="col">Date - Day</th>
                        <th scope="col"><a href=""><img src="{{asset('storage/newspapers/jung.jpg')}}" alt=""></a></th>
                        <th scope="col"><a href=""><img src="{{asset('storage/newspapers/express1.jpg')}}" alt=""></a>
                        </th>
                        <th scope="col"><a href=""><img src="{{asset('storage/newspapers/dawn1.jpg')}}" alt=""></a></th>
                    </tr>
                    <tr>
                        <td valin="top" scope="row" class="small">
                            <?php $date = date_create($job->dat); echo date_format($date, 'd/m/Y') . "<br>" . $day; ?>
                        </td>
                        <td valin="top"><a class="" href="paperjobs.php?paper=jung&date={{ $job->dat }}">Jobs</a></td>
                        <td valin="top"><a class="" href="paperjobs.php?paper=express&date={{ $job->dat }}">Jobs</a>
                        </td>
                        <td valin="top"><a class="" href="paperjobs.php?paper=dawn&date={{ $job->dat }}">Jobs</a></td>
                    </tr>
                    <tr>
                        <th scope="col">Date - Day</th>
                        <th scope="col"><a href=""><img src="{{asset('storage/newspapers/nawai_waqt1.jpg')}}"
                                    alt=""></a></th>
                        <th scope="col"><a href=""><img src="{{asset('storage/newspapers/theNEWS1.jpg')}}" alt=""></a>
                        </th>
                        <th scope="col"><a href=""><img src="{{asset('storage/newspapers/the-nation1.jpg')}}"
                                    alt=""></a></th>
                    </tr>
                    <tr>
                        <td valin="top" scope="row" class="small">
                            <?php $date = date_create($job->dat); echo date_format($date, 'd/m/Y') . "<br>" . $day; ?>
                        </td>
                        <td valin="top"><a class="" href="paperjobs.php?paper=nawaiwaqt&date={{ $job->dat }}">Jobs</a>
                        </td>
                        <td valin="top"><a class="" href="paperjobs.php?paper=news&date={{ $job->dat }}">Jobs</a></td>
                        <td valin="top"><a class="" href="paperjobs.php?paper=nation&date={{ $job->dat }}">Jobs</a></td>
                    </tr>

                    <tr>
                        <th scope="col">Date - Day</th>
                        <th scope="col"><a href=""><img src="{{asset('storage/newspapers/mashriq.jpg')}}" alt=""></a>
                        </th>
                        <th scope="col"><a href=""><img src="{{asset('storage/newspapers/kawish1.png')}}" alt=""></a>
                        </th>
                        <th scope="col"><a href=""><img src="{{asset('storage/newspapers/naibaat.png')}}" alt=""></a>
                        </th>
                    </tr>
                    <tr>
                        <td valin="top" scope="row" class="small">
                            <?php $date = date_create($job->dat); echo date_format($date, 'd/m/Y') . "<br>" . $day; ?>
                        </td>
                        <td valin="top"><a class="" href="paperjobs.php?paper=mashriq&date={{ $job->dat }}">Jobs</a>
                        </td>
                        <td valin="top"><a class="" href="paperjobs.php?paper=kawish&date={{ $job->dat }}">Jobs</a></td>
                        <td valin="top"><a class="" href="paperjobs.php?paper=naibaat&date={{ $job->dat }}">Jobs</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>



    <br>

    <div class="row">
        <div class="col-md-8">
            <h3 class="text-left">City Wise Search</h3>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <b>Khyber Pakhtunkhwa</b>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body p-1">
                            <table class="table table-borderless table-sm">
                                <tbody>
                                    <tr>
                                        <td><a href="city.php?city=Kohat">Kohat</a></td>
                                        <td><a href="city.php?city=Peshawar">Peshawar</a></td>
                                        <td><a href="city.php?city=Mardan">Mardan</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="city.php?city=Abbottabad">Abbottabad</a></td>
                                        <td><a href="city.php?city=Charsadda">Charsadda</a></td>
                                        <td><a href="city.php?city=Swat">Swat</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="city.php?city=D.I. Khan">D.I. Khan</a></td>
                                        <td><a href="city.php?city=Bannu">Bannu</a></td>
                                        <td><a href="city.php?city=Nowshera">Nowshera</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="city.php?city=Mansehra">Mansehra</a></td>
                                        <td><a href="city.php?city=Swabi">Swabi</a></td>
                                        <td><a href="city.php?city=Karak">Karak</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="city.php?city=Khwazakhela">Khwazakhela</a></td>
                                        <td><a href="city.php?city=Lakki Marwat">Lakki Marwat</a></td>
                                        <td><a href="city.php?city=Tarbela">Tarbela</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="city.php?city=Chitral">Chitral</a></td>
                                        <td><a href="city.php?city=Lower Dir">Lower Dir</a></td>
                                        <td><a href="city.php?city=Upper Dir">Upper Dir</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="city.php?city=Haripur">Haripur</a></td>
                                        <td><a href="city.php?city=Pabbi">Pabbi</a></td>
                                        <td><a href="city.php?city=Akora Khattak">Akora Khattak</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="city.php?city=Shabqadar">Shabqadar</a></td>
                                        <td><a href="city.php?city=Jamrud">Jamrud</a></td>
                                        <td><a href="city.php?city=Murree">Murree</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="city.php?city=Kalam">Kalam</a></td>
                                        <td><a href="city.php?city=Batkhela">Batkhela</a></td>
                                        <td><a href="city.php?city=Malakand">Malakand</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="city.php?city=Mingora">Mingora</a></td>
                                        <!--<td><a href="city.php?city=Batkhela">Batkhela</a></td>-->
                                        <!--<td><a href="city.php?city=Malakand">Malakand</a></td>-->
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <b>Punjab</b>
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body p-1">
                            <table class="table table-borderless table-sm">
                                <tbody>
                                    <tr>
                                        <td><a href="city.php?city=Lahore">Lahore</a></td>
                                        <td><a href="city.php?city=Multan">Multan</a></td>
                                        <td><a href="city.php?city=Rawalpindi">Rawalpindi</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="city.php?city=Faisalabad">Faisalabad</a></td>
                                        <td><a href="city.php?city=Gujranwala">Gujranwala</a></td>
                                        <td><a href="city.php?city=Sargodha">Sargodha</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="city.php?city=Dera Ghazi Khan">Dera Ghazi Khan</a></td>
                                        <td><a href="city.php?city=Islamabad">Islamabad</a></td>
                                        <td><a href="city.php?city=Okara">Okara</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="city.php?city=Attock">Attock</a></td>
                                        <td><a href="city.php?city=Nankara Sahib">Nankara Sahib</a></td>
                                        <td><a href="city.php?city=Bahawalpur">Bahawalpur</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="city.php?city=Gujrat">Gujrat</a></td>
                                        <td><a href="city.php?city=Sialkot">Sialkot</a></td>
                                        <td><a href="city.php?city=Sheikhupura">Sheikhupura</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="city.php?city=Rahim Yar Khan">Rahim Yar Khan</a></td>
                                        <td><a href="city.php?city=Jhelum">Jhelum</a></td>
                                        <td><a href="city.php?city=Chakwal">Chakwal</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="city.php?city=Khanpur">Khanpur</a></td>
                                        <td><a href="city.php?city=Taxila">Taxila</a></td>
                                        <td><a href="city.php?city=Sahiwal">Sahiwal</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="city.php?city=Chichawatni">Chichawatni</a></td>
                                        <td><a href="city.php?city=Pasrur">Pasrur</a></td>
                                        <td><a href="city.php?city=Jhang">Jhang</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="city.php?city=Bhakkar">Bhakkar</a></td>
                                        <td><a href="city.php?city=Vehari">Vehari</a></td>
                                        <td><a href="city.php?city=Zafarwal">Zafarwal</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="city.php?city=Narowal">Narowal</a></td>
                                        <td><a href="city.php?city=Baddomalhi">Baddomalhi</a></td>
                                        <td><a href="city.php?city=Layyah">Layyah</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <b>Sindh</b>
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body p-1">
                            <table class="table table-borderless table-sm">
                                <tbody>
                                    <tr>
                                        <td><a href="city.php?city=Sukkur">Sukkur</a></td>
                                        <td><a href="city.php?city=Hyderabad">Hyderabad</a></td>
                                        <td><a href="city.php?city=Khairpur">Khairpur</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="city.php?city=Sanghar">Sanghar</a></td>
                                        <td><a href="city.php?city=Karachi">Karachi</a></td>
                                        <td><a href="city.php?city=Pano Aqil">Pano Aqil</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="city.php?city=Mithi">Mithi</a></td>
                                        <td><a href="city.php?city=Larkana">Larkana</a></td>
                                        <td><a href="city.php?city=Shikarpur">Shikarpur</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="city.php?city=Umar Kot">Umar Kot</a></td>
                                        <td><a href="city.php?city=Tando Allah Yar">Tando Allah Yar</a></td>
                                        <td><a href="city.php?city=Kotri">Kotri</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="city.php?city=Daharki">Daharki</a></td>
                                        <td><a href="city.php?city=Tharparkar">Tharparkar</a></td>
                                        <td><a href="city.php?city="></a></td>
                                    </tr>

                                    <tr>
                                        <td><a href="city.php?city=Kamber">Kamber</a></td>
                                        <td><a href="city.php?city=Tando Jam">Tando Jam</a></td>
                                        <!--<td><a href="city.php?city="></a></td>-->
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <b>Balochistan</b>
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body p-1">
                            <table class="table table-borderless table-sm">
                                <tbody>
                                    <tr>
                                        <td><a href="city.php?city=Quetta">Quetta</a></td>
                                        <td><a href="city.php?city=Kharan">Kharan</a></td>
                                        <td><a href="city.php?city=Gwadar">Gwadar</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="city.php?city=Turbat">Turbat</a></td>
                                        <td><a href="city.php?city=Sibi">Sibi</a></td>
                                        <td><a href="city.php?city=Chaman">Chaman</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="city.php?city=Kalat">Kalat</a></td>
                                        <td><a href="city.php?city=Dera Allah Yar">Dera Allah Yar</a></td>
                                        <td><a href="city.php?city=Ziarat">Ziarat</a></td>
                                    </tr>
                                    <tr>

                                        <td><a href="city.php?city="></a></td>
                                        <td><a href="city.php?city="></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            <b>Azad Kashmir</b>
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body p-1">
                            <table class="table table-borderless table-sm">
                                <tbody>
                                    <tr>
                                        <td><a href="city.php?city=Bagh">Bagh</a></td>
                                        <td><a href="city.php?city=Kashmir">Kashmir</a></td>
                                        <td><a href="city.php?city=Neelum Valley">Neelum Valley</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="city.php?city=Bhimber">Bhimber</a></td>
                                        <td><a href="city.php?city=Kotli">Kotli</a></td>
                                        <td><a href="city.php?city=Hajira">Hajira</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="city.php?city=Mangla">Mangla</a></td>
                                        <td><a href="city.php?city=Pallandri">Pallandri</a></td>
                                        <td><a href="city.php?city=Jhal Magsi">Jhal Magsi</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="city.php?city=Mirpur">Mirpur</a></td>
                                        <td><a href="city.php?city=Rawlakot">Rawlakot</a></td>
                                        <td><a href="city.php?city=Kachhi">Kachhi</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="city.php?city=Muzaffarabad">Muzaffarabad</a></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            <b>FATA</b>
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body p-1">
                            <table class="table table-borderless table-sm">
                                <tbody>
                                    <tr>
                                        <td><a href="city.php?city=Bajawar Agency">Bajawar Agency</a></td>
                                        <td><a href="city.php?city=Mohmand Agency">Mohmand Agency</a></td>
                                        <td><a href="city.php?city=Parachinar">Parachinar</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="city.php?city=North Waziristan">North Waziristan</a></td>
                                        <td><a href="city.php?city=Sourth Waziristan">Sourth Waziristan</a></td>
                                        <td><a href="city.php?city=Orakzai Agency">Orakzai Agency</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="city.php?city=Khyber Agency">Khyber Agency</a></td>
                                        <td><a href="city.php?city=Kurram Agency">Kurram Agency</a></td>
                                        <!--<td><a href="city.php?city="></a></td>-->
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            <b>Gilgit Baltistan</b>
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body p-1">
                            <table class="table table-borderless table-sm">
                                <tbody>
                                    <tr>
                                        <td><a href="city.php?city=Baltistan">Baltistan</a></td>
                                        <td><a href="city.php?city=Gilgit">Gilgit</a></td>
                                        <td><a href="city.php?city=Mathelo">Mathelo</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="city.php?city=Bhasha Dam">Bhasha Dam</a></td>
                                        <td><a href="city.php?city=Hunza">Hunza</a></td>
                                        <td><a href="city.php?city=Shigar">Shigar</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="city.php?city=Eidghah">Eidghah</a></td>
                                        <td><a href="city.php?city=Jaglot">Jaglot</a></td>
                                        <td><a href="city.php?city=Skardu">Skardu</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="city.php?city=Gahkuch">Gahkuch</a></td>
                                        <td><a href="city.php?city=Khaplu">Khaplu</a></td>
                                        <!--<td><a href="city.php?city="></a></td>-->
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- <h3 class="text-left">City Wise Search</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th><a href="city.php?city=Lahore">Lahore</a></th>
                        <th><a href="city.php?city=Peshawar">Peshawar</a></th>
                        <th><a href="city.php?city=Islamabad">Islamabad</a></th>
                    </tr>
                    <tr>
                        <th><a href="city.php?city=Karachi">Karachi</a></th>
                        <th><a href="city.php?city=Multan">Multan</a></th>
                        <th><a href="city.php?city=Rawalpindi">Rawalpindi</a></th>
                    </tr>
                    <tr>
                        <th><a href="city.php?city=Quetta">Quetta</a></th>
                        <th><a href="city.php?city=Sargodha">Sargodha</a></th>
                        <th><a href="city.php?city=Faisalabad">Faisalabad</a></th>
                    </tr>
                    <tr>
                        <th><a href="city.php?city=Gujranwala">Gujranwala</a></th>
                        <th><a href="city.php?city=Gujrat">Gujrat</a></th>
                        <th><a href="city.php?city=Hyderabad">Hyderabad</a></th>
                    </tr>
                </thead>
            </table> -->
        </div>
        <div class="col-md-4">
            <h3 class="text-left">Popular Newspaper</h3>
            <table class="table table-bordered">
                <tbody id="belowtable">
                    <tr>
                        <th scope="col"><a href="paperjobss.php?paper=jung"><img src="{{asset('storage/newspapers/jung.jpg')}}" alt=""></a>
                        </th>
                        <th scope="col"><a href="paperjobss.php?paper=express"><img src="{{asset('storage/newspapers/express1.jpg')}}"
                                    alt=""></a></th>
                        <th scope="col"><a href="paperjobss.php?paper=dawn"><img src="{{asset('storage/newspapers/dawn1.jpg')}}" alt=""></a>
                        </th>
                    </tr>
                    <tr>
                        <th scope="col"><a href="paperjobss.php?paper=nawaiwaqt"><img src="{{asset('storage/newspapers/nawai_waqt1.jpg')}}"
                                    alt=""></a></th>
                        <th scope="col"><a href="paperjobss.php?paper=news"><img src="{{asset('storage/newspapers/theNEWS1.jpg')}}"
                                    alt=""></a></th>
                        <th scope="col"><a href="paperjobss.php?paper=nation"><img src="{{asset('storage/newspapers/the-nation1.jpg')}}"
                                    alt=""></a></th>

                    </tr>
                    <tr>
                        <th scope="col"><a href="paperjobss.php?paper=mashriq"><img src="{{asset('storage/newspapers/mashriq.jpg')}}"
                                    alt=""></a></th>
                        <th scope="col"><a href="paperjobss.php?paper=kawish"><img src="{{asset('storage/newspapers/kawish1.png')}}"
                                    alt=""></a></th>
                        <th scope="col"><a href="paperjobss.php?paper=naibaat"><img src="{{asset('storage/newspapers/naibaat.png')}}"
                                    alt=""></a></th>
                    </tr>
                    <tr>
                        <th scope="col"><a href="paperjobss.php?paper=mashriq"><img src="{{asset('storage/newspapers/ajj.jpg')}}" alt=""></a>
                        </th>
                        <th scope="col"><a href="paperjobss.php?paper=kawish"><img src="{{asset('storage/newspapers/khabrain.jpg')}}"
                                    alt=""></a></th>
                        <th scope="col"><a href="paperjobss.php?paper=dunya"><img src="{{asset('storage/newspapers/dunya.png')}}" alt=""></a>
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
    <br>
    <div class="row">
        <img src="images/banner.jpg" class="img-fluid" alt="Naujawan Rozgar Contact Banner">
    </div>
</div>
@endsection
