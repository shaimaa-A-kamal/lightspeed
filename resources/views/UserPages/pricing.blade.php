@extends('layouts.layout')
@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{url('assets/css/pricing.css')}}">
<link rel="stylesheet" href="{{url('assets/css/style.css')}}">
@endsection
@section('header')
<x-layouts.header >
    <x-layouts.nav/>
</x-layouts.header>
@endsection
@section('content')
 <!-- GET A QUOTE
-->
<section class="about py-5">
        <div class="about-content text-center text-white">
            <h3 class="mt-lg-5">GET A QUOTE
            </h3>
        </div>
    </section>
    <!-- Shipping -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6  mx-auto my-5">
                    <div class="form-group">
                        <h3>Ship from: </h3>
                        <label class="fw-bold fs-6 pt-3" for="productName">City:</label>
                        <!-- <input class="my-2 form-control" type="text" id="productName"> -->
                        <!-- <input class="my-2 form-control" type="text" id="productName"> -->
                        <select class="my-2 form-control w-50">
                            <option value="1">ــــــ</option>
                            <option value="2">Abou Rawash</option>
                            <option value="3">Abbassia</option>
                            <option value="4">Agouza</option>
                            <option value="5">Ain Shams</option>
                            <option value="6">Al Ammeria</option>
                            <option value="7">Al Attaba</option>
                            <option value="8">Al Azhar</option>
                            <option value="9">Cairo </option>
                            <option value="10">Cornich Al Nile</option>
                            <option value="11">Al Daher</option>
                            <option value="12">Dar Al Salam</option>
                            <option value="13">Dokki</option>
                            <option value="14">Boulaq Al Dakrour</option>
                            <option value="15">Down Town</option>
                            <option value="16">Boulaq Abou Ella</option>
                            <option value="17">Garden City</option>
                            <option value="18">Giza</option>
                            <option value="19">Ghamra</option>
                            <option value="20">Hadayek Al Qoba</option>
                            <option value="21">Al Haram</option>
                            <option value="22">Heliopolis</option>
                            <option value="23">Imbaba</option>
                            <option value="24">Shoubra </option>
                            <option value="25">Shoubra Al Kheima</option>
                            <option value="26">Kit Kat</option>
                            <option value="27">Al Kalaa</option>
                            <option value="28">Kasr Al Aini</option>
                            <option value="29">Kattamia</option>
                            <option value="30">Maadi</option>
                            <option value="31">15 Of May City</option>
                            <option value="32">Manial Al Rawda</option>
                            <option value="33">Manshyet Nasser</option>
                            <option value="34">Mohandessin</option>
                            <option value="35">Al Moneeb</option>
                            <option value="36">Al Mattaria</option>
                            <option value="37">Al Moussky</option>
                            <option value="38">Mostorod</option>
                            <option value="39">Mokattam</option>
                            <option value="40">Ezbet Al Nakhl</option>
                            <option value="41">New Cairo</option>
                            <option value="42">Nasr City</option>
                            <option value="43">6th October City</option>
                            <option value="44">Omrania</option>
                            <option value="45">Ramsis</option>
                            <option value="46">Saqara</option>
                            <option value="47">Al Sayeda Zainab</option>
                            <option value="48">Al Salam City</option>
                            <option value="49">Al Sawah</option>
                            <option value="50">Al Tebeen</option>
                            <option value="51">Torah</option>
                            <option value="52">Helwan</option>
                            <option value="53">Al Waraq</option>
                            <option value="54">Zamalek</option>
                            <option value="55">Al Zaytoun</option>
                            <option value="56">Faisel</option>
                            <option value="57">El Marg</option>
                            <option value="58">Shikh Zaied</option>
                            <option value="59">Abou Zaabal</option>
                            <option value="60">Badr City</option>
                            <option value="61">Cairo Alex. Desert Road</option>
                            <option value="62">Hikesteb</option>
                            <option value="63">Al Obour City</option>
                            <option value="64">Al Saf</option>
                            <option value="65">Al Khanka</option>
                            <option value="66">ElSherouq</option>
                            <option value="67">Madinety</option>
                            <option value="68">Future City</option>
                            <option value="69">Alexandria City</option>
                            <option value="70">Al Ammria City</option>
                            <option value="71">Khorsheed</option>
                            <option value="72">Borg Al Arab</option>
                            <option value="73">Maraqia</option>
                            <option value="74">Sidi Kreer</option>
                            <option value="75">Behira</option>
                            <option value="76">Damnhour</option>
                            <option value="77">Al Nobarria</option>
                            <option value="78">Tabia Rasheed</option>
                            <option value="79">Wadi Al Natroun</option>
                            <option value="80">Dakahlya City</option>
                            <option value="81">Mansoura City</option>
                            <option value="82">Belqas</option>
                            <option value="83">Meet Ghamr</option>
                            <option value="84">Qalioubya City</option>
                            <option value="85">Banha</option>
                            <option value="86">Qaha</option>
                            <option value="87">Qalioub</option>
                            <option value="88">Al Qanater Al Khairia</option>
                            <option value="89">Dameitta</option>
                            <option value="90">Farskour</option>
                            <option value="91">Kafr Al Sheikh</option>
                            <option value="92">Dessouq</option>
                            <option value="93">El Sharkia</option>
                            <option value="94">Zakazik</option>
                            <option value="95">Belbis</option>
                            <option value="96">Inshas</option>
                            <option value="97">10th Of Ramadan City</option>
                            <option value="98">Menoufeia City</option>
                            <option value="99">Quesna</option>
                            <option value="100">Shebin Al Koom</option>
                            <option value="101">Berket Al Saba</option>
                            <option value="102">Sadat City</option>
                            <option value="103">Gharbya</option>
                            <option value="104">Tanta City</option>
                            <option value="105">Al Mahala Al Koubra</option>
                            <option value="106">Cairo Suez Desert Road</option>
                            <option value="107">Al Ain Al Soukhna</option>
                            <option value="108">Fayed</option>
                            <option value="109">Ismailia</option>
                            <option value="110">Port Said City</option>
                            <option value="111">Qantra Shark</option>
                            <option value="112">New Salhia</option>
                            <option value="113">Suez</option>
                            <option value="114">Marsa Matrouh</option>
                            <option value="115">Saloum</option>
                            <option value="116">Marinah</option>
                            <option value="117">Al Ayat</option>
                            <option value="118">Badrasheen</option>
                            <option value="119">Hawamdeia </option>
                            <option value="120">Bani Sweif</option>
                            <option value="121">Fayoum</option>
                            <option value="122">Menia City</option>
                            <option value="123">Assuit</option>
                            <option value="124">AL WAHAT</option>
                            <option value="125">Souhag </option>
                            <option value="126">Qena City</option>
                            <option value="127">Nagaa Hamadi</option>
                            <option value="128">Luxor</option>
                            <option value="129">Aswan</option>
                            <option value="130">High Dam</option>
                            <option value="131">Abou Sombol</option>
                            <option value="132">Toshka</option>
                            <option value="133">Wadi Al Gadid</option>
                            <option value="134">Sharm Al Sheikh</option>
                            <option value="135">Dahab City</option>
                            <option value="136">Red Sea</option>
                            <option value="137">Hurghada</option>
                            <option value="138">Gouna</option>
                            <option value="139">Marsa Alam</option>
                            <option value="140">Zaafrana</option>
                            <option value="141">Al Qussair</option>
                            <option value="142">Safaga</option>
                            <option value="143">Ras Ghareb</option>
                            <option value="144">Ras Shoqeer</option>
                            <option value="145">Abou Redis</option>
                            <option value="146">Ras Sedr</option>
                            <option value="147">Al Arish</option>
                            <option value="148">Saint Katreen</option>
                            <option value="149">Nuwibaa</option>
                            <option value="150">Rafah</option>
                            <option value="151">Taba City</option>
                            <option value="152">Al Tour City</option>
                        </select>
                        <label class="fw-bold fs-6 pt-3" for="productName">Weight:</label>
                        <input class="my-2 form-control" type="number" id="productName" value="1">

                    </div>


                    <div class="form-group">
                        <h3 class="pt-5">Ship To: </h3>
                        <label class="fw-bold fs-6 pt-3" for="productName">City:</label>
                        <!-- <input class="my-2 form-control" type="text" id="productName"> -->
                        <!-- <input class="my-2 form-control" type="text" id="productName"> -->
                        <select class="my-2 form-control w-70">
                            <option value="1">ــــــ</option>
                            <option value="2">Abou Rawash</option>
                            <option value="3">Abbassia</option>
                            <option value="4">Agouza</option>
                            <option value="5">Ain Shams</option>
                            <option value="6">Al Ammeria</option>
                            <option value="7">Al Attaba</option>
                            <option value="8">Al Azhar</option>
                            <option value="9">Cairo </option>
                            <option value="10">Cornich Al Nile</option>
                            <option value="11">Al Daher</option>
                            <option value="12">Dar Al Salam</option>
                            <option value="13">Dokki</option>
                            <option value="14">Boulaq Al Dakrour</option>
                            <option value="15">Down Town</option>
                            <option value="16">Boulaq Abou Ella</option>
                            <option value="17">Garden City</option>
                            <option value="18">Giza</option>
                            <option value="19">Ghamra</option>
                            <option value="20">Hadayek Al Qoba</option>
                            <option value="21">Al Haram</option>
                            <option value="22">Heliopolis</option>
                            <option value="23">Imbaba</option>
                            <option value="24">Shoubra </option>
                            <option value="25">Shoubra Al Kheima</option>
                            <option value="26">Kit Kat</option>
                            <option value="27">Al Kalaa</option>
                            <option value="28">Kasr Al Aini</option>
                            <option value="29">Kattamia</option>
                            <option value="30">Maadi</option>
                            <option value="31">15 Of May City</option>
                            <option value="32">Manial Al Rawda</option>
                            <option value="33">Manshyet Nasser</option>
                            <option value="34">Mohandessin</option>
                            <option value="35">Al Moneeb</option>
                            <option value="36">Al Mattaria</option>
                            <option value="37">Al Moussky</option>
                            <option value="38">Mostorod</option>
                            <option value="39">Mokattam</option>
                            <option value="40">Ezbet Al Nakhl</option>
                            <option value="41">New Cairo</option>
                            <option value="42">Nasr City</option>
                            <option value="43">6th October City</option>
                            <option value="44">Omrania</option>
                            <option value="45">Ramsis</option>
                            <option value="46">Saqara</option>
                            <option value="47">Al Sayeda Zainab</option>
                            <option value="48">Al Salam City</option>
                            <option value="49">Al Sawah</option>
                            <option value="50">Al Tebeen</option>
                            <option value="51">Torah</option>
                            <option value="52">Helwan</option>
                            <option value="53">Al Waraq</option>
                            <option value="54">Zamalek</option>
                            <option value="55">Al Zaytoun</option>
                            <option value="56">Faisel</option>
                            <option value="57">El Marg</option>
                            <option value="58">Shikh Zaied</option>
                            <option value="59">Abou Zaabal</option>
                            <option value="60">Badr City</option>
                            <option value="61">Cairo Alex. Desert Road</option>
                            <option value="62">Hikesteb</option>
                            <option value="63">Al Obour City</option>
                            <option value="64">Al Saf</option>
                            <option value="65">Al Khanka</option>
                            <option value="66">ElSherouq</option>
                            <option value="67">Madinety</option>
                            <option value="68">Future City</option>
                            <option value="69">Alexandria City</option>
                            <option value="70">Al Ammria City</option>
                            <option value="71">Khorsheed</option>
                            <option value="72">Borg Al Arab</option>
                            <option value="73">Maraqia</option>
                            <option value="74">Sidi Kreer</option>
                            <option value="75">Behira</option>
                            <option value="76">Damnhour</option>
                            <option value="77">Al Nobarria</option>
                            <option value="78">Tabia Rasheed</option>
                            <option value="79">Wadi Al Natroun</option>
                            <option value="80">Dakahlya City</option>
                            <option value="81">Mansoura City</option>
                            <option value="82">Belqas</option>
                            <option value="83">Meet Ghamr</option>
                            <option value="84">Qalioubya City</option>
                            <option value="85">Banha</option>
                            <option value="86">Qaha</option>
                            <option value="87">Qalioub</option>
                            <option value="88">Al Qanater Al Khairia</option>
                            <option value="89">Dameitta</option>
                            <option value="90">Farskour</option>
                            <option value="91">Kafr Al Sheikh</option>
                            <option value="92">Dessouq</option>
                            <option value="93">El Sharkia</option>
                            <option value="94">Zakazik</option>
                            <option value="95">Belbis</option>
                            <option value="96">Inshas</option>
                            <option value="97">10th Of Ramadan City</option>
                            <option value="98">Menoufeia City</option>
                            <option value="99">Quesna</option>
                            <option value="100">Shebin Al Koom</option>
                            <option value="101">Berket Al Saba</option>
                            <option value="102">Sadat City</option>
                            <option value="103">Gharbya</option>
                            <option value="104">Tanta City</option>
                            <option value="105">Al Mahala Al Koubra</option>
                            <option value="106">Cairo Suez Desert Road</option>
                            <option value="107">Al Ain Al Soukhna</option>
                            <option value="108">Fayed</option>
                            <option value="109">Ismailia</option>
                            <option value="110">Port Said City</option>
                            <option value="111">Qantra Shark</option>
                            <option value="112">New Salhia</option>
                            <option value="113">Suez</option>
                            <option value="114">Marsa Matrouh</option>
                            <option value="115">Saloum</option>
                            <option value="116">Marinah</option>
                            <option value="117">Al Ayat</option>
                            <option value="118">Badrasheen</option>
                            <option value="119">Hawamdeia </option>
                            <option value="120">Bani Sweif</option>
                            <option value="121">Fayoum</option>
                            <option value="122">Menia City</option>
                            <option value="123">Assuit</option>
                            <option value="124">AL WAHAT</option>
                            <option value="125">Souhag </option>
                            <option value="126">Qena City</option>
                            <option value="127">Nagaa Hamadi</option>
                            <option value="128">Luxor</option>
                            <option value="129">Aswan</option>
                            <option value="130">High Dam</option>
                            <option value="131">Abou Sombol</option>
                            <option value="132">Toshka</option>
                            <option value="133">Wadi Al Gadid</option>
                            <option value="134">Sharm Al Sheikh</option>
                            <option value="135">Dahab City</option>
                            <option value="136">Red Sea</option>
                            <option value="137">Hurghada</option>
                            <option value="138">Gouna</option>
                            <option value="139">Marsa Alam</option>
                            <option value="140">Zaafrana</option>
                            <option value="141">Al Qussair</option>
                            <option value="142">Safaga</option>
                            <option value="143">Ras Ghareb</option>
                            <option value="144">Ras Shoqeer</option>
                            <option value="145">Abou Redis</option>
                            <option value="146">Ras Sedr</option>
                            <option value="147">Al Arish</option>
                            <option value="148">Saint Katreen</option>
                            <option value="149">Nuwibaa</option>
                            <option value="150">Rafah</option>
                            <option value="151">Taba City</option>
                            <option value="152">Al Tour City</option>
                        </select>
                        <div class="d-grid gap-2 pt-4 ">
                            <button class="btn btn-danger buttonclick" type="button">Get The Qoute</button>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
@section('contact')
<x-layouts.contact class="question py-5"/>
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
crossorigin="anonymous"></script>
@endsection
