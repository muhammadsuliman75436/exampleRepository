@extends('layout.app')
@section('content')
<div class="container justify-content-center" style="text-align: center;" align="center'">

    <h1>Edit Job</h1>
    <form action="/jobs/{{ $job->id }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Job's Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $job->title }}" required
                placeholder="e.g Manager">
        </div>
        <div class="mb-3">
            <label for="dept" class="form-label">Department</label>
            <input type="text" class="form-control" id="dept" name="dept" value="{{ $job->dept }}" required
                placeholder="e.g Education">
        </div>
        <div class="mb-3">
            <label for="city" class="form-label">City</label>
            <select class="form-control select2" id="city" name="city" required>
                <option value="">Choose City</option>
                <option value="Kohat">Kohat</option>
                <option value="Peshawar">Peshawar</option>
                <option value="Mardan">Mardan</option>
                <option value="Abbottabad">Abbottabad</option>
                <option value="Charsadda">Charsadda</option>
                <option value="Swat">Swat</option>
                <option value="D.I. Khan">D.I. Khan</option>
                <option value="Bannu">Bannu</option>
                <option value="Nowshera">Nowshera</option>
                <option value="Mansehra">Mansehra</option>
                <option value="Swabi">Swabi</option>
                <option value="Karak">Karak</option>
                <option value="Lakki Marwat">Lakki Marwat</option>
                <option value="Tarbela">Tarbela</option>
                <option value="Lahore">Lahore</option>
                <option value="Multan">Multan</option>
                <option value="Rawalpindi">Rawalpindi</option>
                <option value="Faisalabad">Faisalabad</option>
                <option value="Gujranwala">Gujranwala</option>
                <option value="Sargodha">Sargodha</option>
                <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
                <option value="Islamabad">Islamabad</option>
                <option value="Okara">Okara</option>
                <option value="Attock">Attock</option>
                <option value="Nankara Sahib">Nankara Sahib</option>
                <option value="Bahawalpur">Bahawalpur</option>
                <option value="Gujrat">Gujrat</option>
                <option value="Sukkur">Sukkur</option>
                <option value="Hyderabad">Hyderabad</option>
                <option value="Khairpur">Khairpur</option>
                <option value="Sanghar">Sanghar</option>
                <option value="Karachi">Karachi</option>
                <option value="Quetta">Quetta</option>
                <option value="Pano Aqil">Pano Aqil</option>
                <option value="Chitral">Chitral</option>\
                <option value="Lower Dir">Lower Dir</option>
                <option value="Upper Dir">Upper Dir</option>
                <option value="Haripur">Haripur</option>
                <option value="Pabbi">Pabbi</option>
                <option value="Akora Khattak">Akora Khattak</option>
                <option value="Shabqadar">Shabqadar</option>
                <option value="Jamrud">Jamrud</option>
                <option value="Khwazakhela">Khwazakhela</option>
                <option value="Sialkot">Sialkot</option>
                <option value="Sheikhupura">Sheikhupura</option>
                <option value="Rahim Yar Khan">Rahim Yar Khan</option>
                <option value="Jhelum">Jhelum</option>
                <option value="Chakwal">Chakwal</option>
                <option value="Khanpur">Khanpur</option>
                <option value="Taxila">Taxila</option>
                <option value="Sahiwal">Sahiwal</option>
                <option value="Mithi">Mithi</option>
                <option value="Larkana">Larkana</option>
                <option value="Shikarpur">Shikarpur</option>
                <option value="Umar Kot">Umar Kot</option>
                <option value="Tando Allah Yar">Tando Allah Yar</option>
                <option value="Kotri">Kotri</option>
                <option value="Daharki">Daharki</option>
                <option value="Kharan">Kharan</option>
                <option value="Gwadar">Gwadar</option>
                <option value="Turbat">Turbat</option>
                <option value="Sibi">Sibi</option>
                <option value="Chaman">Chaman</option>
                <option value="Kalat">Kalat</option>
                <option value="Dera Allah Yar">Dera Allah Yar</option>
                <option value="Ziarat">Ziarat</option>
                <option value="Tharparkar">Tharparkar</option>
                <option value="Chichawatni">Chichawatni</option>

                <option value="Bagh">Bagh</option>
                <option value="Kashmir">Kashmir</option>
                <option value="Neelum Valley">Neelum Valley</option>
                <option value="Bhimber">Bhimber</option>
                <option value="Kotli">Kotli</option>
                <option value="Hajira">Hajira</option>
                <option value="Mangla">Mangla</option>
                <option value="Pallandri">Pallandri</option>
                <option value="Jhal Magsi">Jhal Magsi</option>
                <option value="Mirpur">Mirpur</option>
                <option value="Rawlakot">Rawlakot</option>
                <option value="Kachhi">Kachhi</option>
                <option value="Muzaffarabad">Muzaffarabad</option>
                <option value="North Waziristan">North Waziristan</option>
                <option value="Sourth Waziristan">Sourth Waziristan</option>
                <option value="Orakzai Agency">Orakzai Agency</option>
                <option value="Bajawar Agency">Bajawar Agency</option>
                <option value="Mohmand Agency">Mohmand Agency</option>
                <option value="Parachinar">Parachinar</option>
                <option value="Khyber Agency">Khyber Agency</option>
                <option value="Kurram Agency">Kurram Agency</option>
                <option value="Baltistan">Baltistan</option>
                <option value="Gilgit">Gilgit</option>
                <option value="Mathelo">Mathelo</option>
                <option value="Bhasha Dam">hasha Dam</option>
                <option value="Hunza">Hunza</option>
                <option value="Shigar">Shigar</option>
                <option value="Eidghah">Eidghah</option>
                <option value="Jaglot">Jaglot</option>
                <option value="Skardu">Skardu</option>
                <option value="Gahkuch">Gahkuch</option>
                <option value="Khaplu">Khaplu</option>
                <option value="Murree">Murree</option>
                <option value="Kalam">Kalam</option>
                <option value="Kamber">Kamber</option>
                <option value="Pasrur">Pasrur</option>
                <option value="Jhang">Jhang</option>
                <option value="Bhakkar">Bhakkar</option>
                <option value="Vehari">Vehari</option>
                <option value="Zafarwal">Zafarwal</option>
                <option value="Narowal">Narowal</option>
                <option value="Batkhela">Batkhela</option>
                <option value="Malakand">Malakand</option>

                <option value="Baddomalhi">Baddomalhi</option>
                <option value="Layyah">Layyah</option>
                <option value="Tando Jam">Tando Jam</option>
                <option value="Mingora">Mingora</option>
            </select>
        </div>
        <!-- <br> -->
        <div class="row">
            <div class="col">
                <label for="dat" class="form-label">Posting date</label>
                <input type="date" class="form-control" id="dat" value="{{ $job->dat }}" name="dat" required>
            </div>
            <div class="col">
                <label for="expdat" class="form-label">Expiry Date</label>
                <input type="date" class="form-control" id="expdat" value="{{ $job->expdat }}" name="expdat">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <label for="source" class="form-label">Source of Ad</label>
                <select class="form-control" id="source" required name="source">
                    <option value="">Choose source</option>
                    <option value="jung">Jung News</option>
                    <option value="express">Express News</option>
                    <option value="dawn">Dawn News</option>
                    <option value="nawaiwaqt">Nawai Waqt</option>
                    <option value="news">News</option>
                    <option value="nation">The Nation</option>
                    <option value="mashriq">Mashriq</option>
                    <option value="kawish">Kawish Khabre</option>
                    <option value="naibaat">Nai Baat</option>
                    <option value="dunya">Dunya News</option>
                </select>
            </div>
            <div class="col">
                <label for="imgg" class="form-label">Ad image</label>
                <!-- <input type="file" class="form-control" id="adimg" name="adimg"> -->
                <input type="file" accept=".jpg, .png, .jpeg" class="form-control" id="imgg" required name="picture">
            </div>
        </div>
        <div class="row">
            <div class="col">

            </div>
            <div class="col">
                <label for="submit" class="form-label">&nbsp;</label>
                <input type="submit" class="form-control btn btn-primary" id="submit" name="submit" value="Update">
            </div>
        </div>
    </form>
</div>
@endsection