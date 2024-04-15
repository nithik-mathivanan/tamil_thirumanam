<!doctype html>
<html lang="en">

<head>
	<title>Matrimony | Registration</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link
		href='https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap'
		rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css"
		integrity="sha512-rd0qOHVMOcez6pLWPVFIv7EfSdGKLt+eafXh4RO/12Fgr41hDQxfGvoi1Vy55QIVcQEujUE1LQrATCLl2Fs+ag=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
		integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="style.css" rel="stylesheet">
	<!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/css/bootstrap-datepicker.min.css" />
</head>

<body>
	<div class="page registration">
		<header>
			<nav class="navbar navbar-expand-lg navbar-light p-0">
				<div class="container-fluid px-lg-5">
					<div class="nav-brand-main">
						<a class="navbar-brand" href="#">
							<img src="images/logo.png" alt="techsep-logo" /><span class="ms-2">Happylife.com</span>
						</a>
					</div>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
						data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav me-auto mx-lg-auto mb-2 mb-lg-0">
							<li class="nav-item">
								<a class="nav-link" aria-current="page" href="index.html">HOME</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="index.html">COMMUNITY</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="index.html">
									CATEGORIES
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="contact-us.html">
									CONTACT US
								</a>
							</li>
						</ul>
					</div>
					<div class="login-button-container">
						<a type="button" class="btn btn-primary">Login</a>
					</div>
				</div>
			</nav>
		</header>
		<section class="contact-form-section" id="contact-section-1">
			<div class="container">
				<div class="row d-flex align-items-center">
					<div class="register-container col-md-12 d-md-flex">
						<div class="col-sm-12 col-md-4 px-0">
							<div class="left-container d-flex flex-column align-items-center justify-content-center">
								<div class="left-image-container">
									<img src="images/form-img-3.png" class="img-fluid" alt="register-logo">
									<p>Your search for a caring companion for your <span class="change-text">son</span>
										begins here</p>
								</div>
								<div class="left-preferences-container" style="display: none;">
									<h3 class="sub-form-title text-white">Partner Preferences</h3>
									<ul>
										<li>
											<a class="partner-link active" data-target="form-12">
												Basic
											</a>
										</li>
										<li>
											<a class="partner-link" data-target="form-13">
												Religious
											</a>
										</li>
										<li>
											<a class="partner-link" data-target="form-14">
												Professional
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-8 px-0">
							<!-- <h1 class="mb-5 contact-us-title fw-bolder" data-aos="fade-right" data-aos-duration="500"
								data-aos-delay="200">Contact Us</h1> -->
							<form id="registration-form" class="form-1" style="display: none;">

								<div class="form-titles">
									<h2 class="mb-5 register-form-title">Register With Happylife</h2>
									<!-- <div class="form-logo">
										<img src="images/logo.png" width="164" height="50" alt="contact-form-logo">
									</div> -->
								</div>
								<div class="row">
									<div class="mb-3 col-md-12">
										<div class="label-container dob d-flex flex-row justify-content-between">
											<label for="dob" class="form-label">Date Of Birth</label>
											<input type="text" class="form-control" name="dob" id="dob"
												data-provide="datepicker" required>
											<span>Your <span class="change-text ms-0">son</span>'s date of birth helps
												us find the perfect match</span>
										</div>
									</div>
									<div class="mb-3 col-md-12">
										<div class="label-container religion d-flex flex-row justify-content-between">
											<label for="religion" class="form-label">Religion</label>
											<select type="text" class="form-control" name="religion" id="religion"
												required>
												<option value="">Select</option>
												<option value="1">Hindu</option>
												<option value="10">Muslim - Shia</option>
												<option value="11">Muslim - Sunni</option>
												<option value="2">Muslim - Others</option>
												<option value="3">Christian</option>
												<option value="4">Sikh</option>
												<option value="15">Jain - Digambar</option>
												<option value="16">Jain - Shwetambar</option>
												<option value="5">Jain - Others</option>
												<option value="6">Parsi</option>
												<option value="7">Buddhist</option>
												<option value="8">Inter-Religion</option>
											</select>
											<span></span>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="mb-3 col-md-12">
										<div
											class="label-container mother-tongue d-flex flex-row justify-content-between">
											<label for="mother-tongue" class="form-label">Mother Tongue</label>
											<select type="text" class="form-control" name="mother_tongue"
												id="mother-tongue" required>
												<option value="">Select</option>
												<option value="4">Bengali</option>
												<option value="14">Gujarati</option>
												<option value="17">Hindi</option>
												<option value="19">Kannada</option>
												<option value="31">Malayalam</option>
												<option value="33">Marathi</option>
												<option value="34">Marwari</option>
												<option value="40">Oriya</option>
												<option value="41">Punjabi</option>
												<option value="45">Sindhi</option>
												<option value="47">Tamil</option>
												<option value="48">Telugu</option>
												<option value="51">Urdu</option>
												<option value="1">Arunachali</option>
												<option value="2">Assamese</option>
												<option value="3">Awadhi</option>
												<option value="5">Bhojpuri</option>
												<option value="6">Brij</option>
												<option value="7">Bihari</option>
												<option value="53">Badaga</option>
												<option value="8">Chatisgarhi</option>
												<option value="9">Dogri</option>
												<option value="10">English</option>
												<option value="11">French</option>
												<option value="12">Garhwali</option>
												<option value="13">Garo</option>
												<option value="15">Haryanvi</option>
												<option value="16">Himachali/Pahari</option>
												<option value="18">Kanauji</option>
												<option value="20">Kashmiri</option>
												<option value="21">Khandesi</option>
												<option value="22">Khasi</option>
												<option value="23">Konkani</option>
												<option value="24">Koshali</option>
												<option value="25">Kumaoni</option>
												<option value="26">Kutchi</option>
												<option value="27">Lepcha</option>
												<option value="28">Ladacki</option>
												<option value="29">Magahi</option>
												<option value="30">Maithili</option>
												<option value="32">Manipuri</option>
												<option value="35">Miji</option>
												<option value="36">Mizo</option>
												<option value="37">Monpa</option>
												<option value="38">Nicobarese</option>
												<option value="39">Nepali</option>
												<option value="42">Rajasthani</option>
												<option value="43">Sanskrit</option>
												<option value="44">Santhali</option>
												<option value="46">Sourashtra</option>
												<option value="49">Tripuri</option>
												<option value="50">Tulu</option>
												<option value="54">Angika</option>
												<option value="55">Bagri Rajasthani</option>
												<option value="56">Dhundhari/Jaipuri</option>
												<option value="57">Gujari/Gojari</option>
												<option value="58">Harauti</option>
												<option value="59">Lambadi</option>
												<option value="60">Malvi</option>
												<option value="61">Mewari</option>
												<option value="62">Mewati/Ahirwati</option>
												<option value="63">Nimadi</option>
												<option value="64">Shekhawati</option>
												<option value="65">Wagdi</option>
											</select>
											<span></span>
										</div>
									</div>
									<div class="mb-3 col-md-12">
										<div class="label-container d-flex flex-row justify-content-between">
											<label for="email" class="form-label">Email</label>
											<input type="text" class="form-control" name="email" id="email" required>
											<span></span>
										</div>
									</div>
									<div class="mb-3 col-md-12">
										<div class="label-container d-flex flex-row justify-content-between">
											<label for="password" class="form-label">Password</label>
											<input id="password" type="text" name="password" class="form-control"
												required>
											<span></span>
										</div>
									</div>
									<div class="text-start">
										<button type="submit" class="btn btn-primary submit">Continue</button>
									</div>
								</div>
							</form>
							<form id="registration-form" class="form-2" style="display: none;">

								<div class="form-titles">
									<h2 class="mb-5 register-form-title">Register With Happylife</h2>
									<!-- <div class="form-logo">
										<img src="images/logo.png" width="164" height="50" alt="contact-form-logo">
									</div> -->
								</div>
								<div class="row">
									<div class="mb-3 col-md-12">
										<div class="label-container caste d-flex flex-row justify-content-between">
											<label for="caste" class="form-label">Caste</label>
											<select type="text" class="form-control" name="caste" id="caste" required>
												<option value="">Select</option>
												<option value="00">- Select -</option>
												<option value="766">24 Manai Telugu Chettiar</option>
												<option value="797">96 Kuli Maratha</option>
												<option value="963">Aaru Nattu Vellala</option>
												<option value="890">Achirapakkam Chettiar</option>
												<option value="1">Ad Dharmi</option>
												<option value="692">Adi Andhra</option>
												<option value="2">Adi Dravidar</option>
												<option value="693">Adi Karnataka</option>
												<option value="935">Agamudayar / Arcot / Thuluva Vellala</option>
												<option value="891">Agaram Vellan Chettiar</option>
												<option value="3">Agarwal</option>
												<option value="4">Agnikula Kshatriya</option>
												<option value="862">Agrahari</option>
												<option value="5">Agri</option>
												<option value="1025">Aguri / Ugra Kshatriya</option>
												<option value="1034">Aheriya</option>
												<option value="741">Ahir Shimpi</option>
												<option value="977">Ahirwar</option>
												<option value="6">Ahom</option>
												<option value="7">Ambalavasi</option>
												<option value="181">Amil Sindhi </option>
												<option value="1038">Amma Kodava</option>
												<option value="260">Anavil Brahmin </option>
												<option value="839">Anjana (Chowdary) Patel</option>
												<option value="1010">Arakh / Arakvanshiya</option>
												<option value="800">Aramari / Gabit</option>
												<option value="294">Arekatica</option>
												<option value="281">Arora</option>
												<option value="8">Arunthathiyar</option>
												<option value="9">Arya Vysya</option>
												<option value="863">Asathi</option>
												<option value="261">Audichya Brahmin </option>
												<option value="892">Ayira Vysya</option>
												<option value="923">Ayodhyavasi</option>
												<option value="685">Ayyaraka</option>
												<option value="673">Badaga</option>
												<option value="698">Bagdi</option>
												<option value="182">Baibhand Sindhi</option>
												<option value="10">Baidya</option>
												<option value="2313">Bairagi</option>
												<option value="978">Bairwa</option>
												<option value="11">Baishnab</option>
												<option value="12">Baishya</option>
												<option value="699">Bajantri</option>
												<option value="979">Balai</option>
												<option value="13">Balija</option>
												<option value="742">Balija Naidu</option>
												<option value="755">Balija Reddy</option>
												<option value="700">Banayat Oriya</option>
												<option value="14">Banik</option>
												<option value="15">Baniya</option>
												<option value="701">Baniya - Bania</option>
												<option value="702">Baniya - Kumuti</option>
												<option value="295">Banjara</option>
												<option value="2314">Baori</option>
												<option value="296">Barai</option>
												<option value="254">Barendra Brahmin </option>
												<option value="2315">Bargi</option>
												<option value="297">Bari</option>
												<option value="703">Baria</option>
												<option value="864">Barnwal</option>
												<option value="16">Barujibi</option>
												<option value="2316">Bavaria</option>
												<option value="2317">Bazigar</option>
												<option value="2318">Beldar</option>
												<option value="893">Beri Chettiar</option>
												<option value="17">Besta</option>
												<option value="2319">Bhand</option>
												<option value="18">Bhandari</option>
												<option value="183">Bhanusali Sindhi </option>
												<option value="2344">Bhar</option>
												<option value="2345">Bharbhunja</option>
												<option value="19">Bhatia</option>
												<option value="184">Bhatia Sindhi </option>
												<option value="298">Bhatraju</option>
												<option value="267">Bhatt Brahmin </option>
												<option value="20">Bhavasar Kshatriya</option>
												<option value="1031">Bhil</option>
												<option value="704">Bhoi</option>
												<option value="21">Bhovi</option>
												<option value="737">Bhoyar</option>
												<option value="1014">Bhulia / Meher</option>
												<option value="240">Bhumihar Brahmin </option>
												<option value="22">Billava</option>
												<option value="2346">Bind</option>
												<option value="690">Bishnoi/Vishnoi</option>
												<option value="705">Bondili</option>
												<option value="23">Boyar</option>
												<option value="1028">Brahmakshtriya</option>
												<option value="24">Brahmbatt</option>
												<option value="260">Brahmin - Anavil</option>
												<option value="823">Brahmin - Anaviln Desai</option>
												<option value="261">Brahmin - Audichya</option>
												<option value="2320">Brahmin - Bagra</option>
												<option value="834">Brahmin - Baidhiki/Vaidhiki</option>
												<option value="2321">Brahmin - Baragaon</option>
												<option value="943">Brahmin - Bardai</option>
												<option value="254">Brahmin - Barendra</option>
												<option value="944">Brahmin - Bhargav</option>
												<option value="267">Brahmin - Bhatt</option>
												<option value="2322">Brahmin - Bhojak</option>
												<option value="240">Brahmin - Bhumihar</option>
												<option value="2323">Brahmin - Chaubisa</option>
												<option value="762">Brahmin - Dadhich</option>
												<option value="269">Brahmin - Daivadnya</option>
												<option value="2324">Brahmin - Dakaut</option>
												<option value="286">Brahmin - Danua</option>
												<option value="270">Brahmin - Deshastha</option>
												<option value="290">Brahmin - Dhiman</option>
												<option value="291">Brahmin - Dravida</option>
												<option value="734">Brahmin - Embrandiri</option>
												<option value="245">Brahmin - Garhwali</option>
												<option value="242">Brahmin - Gaur</option>
												<option value="262">Brahmin - Goswami/Gosavi</option>
												<option value="680">Brahmin - Gujar Gaur</option>
												<option value="26">Brahmin - Gurukkal</option>
												<option value="287">Brahmin - Halua</option>
												<option value="271">Brahmin - Havyaka</option>
												<option value="272">Brahmin - Hoysala</option>
												<option value="27">Brahmin - Iyengar</option>
												<option value="28">Brahmin - Iyer</option>
												<option value="299">Brahmin - Jangid</option>
												<option value="288">Brahmin - Jhadua</option>
												<option value="707">Brahmin - Jyotish</option>
												<option value="241">Brahmin - Kanyakubj</option>
												<option value="273">Brahmin - Karhade</option>
												<option value="945">Brahmin - Khadayata</option>
												<option value="706">Brahmin - Khandelwal</option>
												<option value="835">Brahmin - Khedaval</option>
												<option value="283">Brahmin - Kokanastha</option>
												<option value="274">Brahmin - Kota</option>
												<option value="763">Brahmin - Koteshwara / Kota (Madhwa )</option>
												<option value="255">Brahmin - Kulin</option>
												<option value="248">Brahmin - Kumaoni</option>
												<option value="275">Brahmin - Madhwa</option>
												<option value="243">Brahmin - Maithil</option>
												<option value="946">Brahmin - Mevada</option>
												<option value="263">Brahmin - Modh</option>
												<option value="282">Brahmin - Mohyal</option>
												<option value="264">Brahmin - Nagar</option>
												<option value="258">Brahmin - Namboodiri</option>
												<option value="332">Brahmin - Narmadiya </option>
												<option value="292">Brahmin - Niyogi</option>
												<option value="25">Brahmin - Others</option>
												<option value="694">Brahmin - Paliwal</option>
												<option value="289">Brahmin - Panda</option>
												<option value="246">Brahmin - Pandit</option>
												<option value="962">Brahmin - Panicker</option>
												<option value="708">Brahmin - Pareek</option>
												<option value="337">Brahmin - Pushkarna</option>
												<option value="947">Brahmin - Rajgor</option>
												<option value="256">Brahmin - Rarhi</option>
												<option value="832">Brahmin - Rarhi/Radhi</option>
												<option value="284">Brahmin - Rigvedi</option>
												<option value="257">Brahmin - Rudraj</option>
												<option value="268">Brahmin - Sakaldwipi</option>
												<option value="247">Brahmin - Sanadya</option>
												<option value="276">Brahmin - Sanketi</option>
												<option value="259">Brahmin - Saraswat</option>
												<option value="948">Brahmin - Sarua</option>
												<option value="244">Brahmin - Saryuparin</option>
												<option value="764">Brahmin - Shivalli (Madhva)</option>
												<option value="277">Brahmin - Shivhalli</option>
												<option value="827">Brahmin - Shri Gaud</option>
												<option value="942">Brahmin - Shri Mali</option>
												<option value="265">Brahmin - Shrimali</option>
												<option value="765">Brahmin - Shukla Yajurvedi</option>
												<option value="681">Brahmin - Sikhwal</option>
												<option value="278">Brahmin - Smartha</option>
												<option value="279">Brahmin - Sri Vaishnava</option>
												<option value="280">Brahmin - Stanika</option>
												<option value="949">Brahmin - Tapodhan</option>
												<option value="249">Brahmin - Tyagi</option>
												<option value="285">Brahmin - Vaidiki</option>
												<option value="687">Brahmin - Vaikhanasa</option>
												<option value="950">Brahmin - Valam</option>
												<option value="354">Brahmin - Velanadu</option>
												<option value="266">Brahmin - Vyas</option>
												<option value="951">Brahmin - Zalora</option>
												<option value="731">Brahmin Jijhotia </option>
												<option value="733">Brahmin Malviya </option>
												<option value="709">Brajastha Maithil</option>
												<option value="178">Bunt (Shetty)</option>
												<option value="37">CKP</option>
												<option value="1042">Chakkala Nair</option>
												<option value="738">Chalawadi and Holeya</option>
												<option value="30">Chambhar</option>
												<option value="31">Chandravanshi Kahar</option>
												<option value="1026">Charan</option>
												<option value="32">Chasa</option>
												<option value="339">Chattada Sri Vaishnava </option>
												<option value="924">Chaturth</option>
												<option value="33">Chaudary</option>
												<option value="34">Chaurasia</option>
												<option value="711">Chennadasar</option>
												<option value="965">Cherakula Vellalar</option>
												<option value="2347">Chero</option>
												<option value="35">Chettiar</option>
												<option value="185">Chhapru Sindhi </option>
												<option value="36">Chhetri</option>
												<option value="301">Chippolu (Mera)</option>
												<option value="880">Choudhary</option>
												<option value="38">Coorgi</option>
												<option value="186">Dadu Sindhi </option>
												<option value="269">Daivadnya Brahmin </option>
												<option value="286">Danua Brahmin </option>
												<option value="129">Darji </option>
												<option value="1062">Dasapalanjika / Kannada Saineegar</option>
												<option value="270">Deshastha Brahmin </option>
												<option value="801">Deshmukh</option>
												<option value="840">Desikar</option>
												<option value="844">Desikar Thanjavur</option>
												<option value="39">Devadiga</option>
												<option value="40">Devandra Kula Vellalar</option>
												<option value="41">Devang Koshthi</option>
												<option value="42">Devanga</option>
												<option value="886">Devanga Chettiar</option>
												<option value="135">Devar/Thevar/Mukkulathor</option>
												<option value="740">Devrukhe Brahmin</option>
												<option value="2325">Dhakad</option>
												<option value="980">Dhanak</option>
												<option value="43">Dhangar</option>
												<option value="2326">Dhanka</option>
												<option value="2312">Dhanuk</option>
												<option value="44">Dheevara</option>
												<option value="45">Dhiman</option>
												<option value="290">Dhiman Brahmin </option>
												<option value="46">Dhoba</option>
												<option value="732">Dhor / Kakkayya</option>
												<option value="712">Dommala</option>
												<option value="865">Dosar / Dusra</option>
												<option value="291">Dravida Brahmin </option>
												<option value="302">Dumal</option>
												<option value="303">Dusadh (Paswan)</option>
												<option value="48">Ediga</option>
												<option value="743">Ediga /Goud (Balija)</option>
												<option value="894">Elur Chetty</option>
												<option value="734">Embrandiri Brahmin </option>
												<option value="49">Ezhava</option>
												<option value="775">Ezhava Panicker</option>
												<option value="776">Ezhava Thandan</option>
												<option value="50">Ezhuthachan</option>
												<option value="51">Gabit</option>
												<option value="866">Gahoi</option>
												<option value="744">Gajula / Kavarai</option>
												<option value="684">Ganda</option>
												<option value="881">Gandha Vanika</option>
												<option value="2348">Gandharb</option>
												<option value="52">Gandla</option>
												<option value="768">Gandla / Ganiga</option>
												<option value="53">Ganiga</option>
												<option value="54">Garhwali</option>
												<option value="245">Garhwali Brahmin </option>
												<option value="2327">Garo / Garoda</option>
												<option value="713">Gatti</option>
												<option value="242">Gaur Brahmin </option>
												<option value="1013">Gavandi</option>
												<option value="55">Gavara</option>
												<option value="2328">Gavaria</option>
												<option value="304">Gawali</option>
												<option value="305">Ghisadi</option>
												<option value="56">Ghumar</option>
												<option value="57">Goala</option>
												<option value="58">Goan</option>
												<option value="306">Gomantak</option>
												<option value="1024">Gond</option>
												<option value="307">Gondhali</option>
												<option value="1055">Gopal / Gopala</option>
												<option value="262">Goswami/Gosavi Brahmin </option>
												<option value="250">Goud</option>
												<option value="59">Gounder</option>
												<option value="777">Gounder - Kongu Vellala Gounder</option>
												<option value="778">Gounder - Nattu Gounder</option>
												<option value="904">Gounder - Others</option>
												<option value="779">Gounder - Urali Gounder</option>
												<option value="780">Gounder - Vanniya Kula Kshatriyar</option>
												<option value="781">Gounder - Vettuva Gounder</option>
												<option value="60">Gowda</option>
												<option value="782">Gowda - Kuruba Gowda</option>
												<option value="308">Gramani</option>
												<option value="61">Gudia</option>
												<option value="680">Gujar Gaur Brahmin </option>
												<option value="310">Gujjar</option>
												<option value="925">Gulahre</option>
												<option value="62">Gupta</option>
												<option value="311">Guptan</option>
												<option value="309">Gurav</option>
												<option value="312">Gurjar</option>
												<option value="26">Gurukkal Brahmin </option>
												<option value="792">Haihaivanshi</option>
												<option value="714">Halba Koshti</option>
												<option value="287">Halua Brahmin </option>
												<option value="271">Havyaka Brahmin </option>
												<option value="1040">Heggade</option>
												<option value="715">Helava</option>
												<option value="1048">Holar</option>
												<option value="272">Hoysala Brahmin </option>
												<option value="313">Hugar (Jeer)</option>
												<option value="187">Hyderabadi Sindhi </option>
												<option value="966">Illaththu Pillai</option>
												<option value="63">Intercaste</option>
												<option value="64">Irani</option>
												<option value="936">Isai Vellalar</option>
												<option value="27">Iyengar Brahmin </option>
												<option value="28">Iyer Brahmin </option>
												<option value="314">Jaalari</option>
												<option value="65">Jaiswal</option>
												<option value="315">Jandra</option>
												<option value="66">Jangam</option>
												<option value="299">Jangid Brahmin </option>
												<option value="316">Jangra - Brahmin</option>
												<option value="67">Jat</option>
												<option value="29">Jatav</option>
												<option value="313">Jeer </option>
												<option value="716">Jetty/Malla</option>
												<option value="802">Jhadav</option>
												<option value="288">Jhadua Brahmin </option>
												<option value="731">Jijhotia Brahmin</option>
												<option value="2329">Jingar</option>
												<option value="317">Jogi (Nath)</option>
												<option value="981">Julaha</option>
												<option value="318">Kachara</option>
												<option value="251">Kadava Patel</option>
												<option value="1030">Kadia</option>
												<option value="691">Kahar</option>
												<option value="68">Kaibarta</option>
												<option value="955">Kaikaala</option>
												<option value="695">Kalal</option>
												<option value="739">Kalanji</option>
												<option value="69">Kalar</option>
												<option value="2330">Kalbelia</option>
												<option value="70">Kalinga</option>
												<option value="319">Kalinga Vysya</option>
												<option value="71">Kalita</option>
												<option value="72">Kalwar</option>
												<option value="73">Kamboj</option>
												<option value="74">Kamma</option>
												<option value="816">Kamma Naidu</option>
												<option value="982">Kanakkan Padanna</option>
												<option value="983">Kandara</option>
												<option value="2331">Kandera</option>
												<option value="2332">Kanjar</option>
												<option value="75">Kansari</option>
												<option value="1035">Kansyakaar</option>
												<option value="241">Kanyakubj Brahmin </option>
												<option value="783">Kanykubj Bania</option>
												<option value="76">Kapu</option>
												<option value="785">Kapu Naidu</option>
												<option value="928">Kapu Reddy</option>
												<option value="956">Karakala Bhakthula</option>
												<option value="77">Karana</option>
												<option value="273">Karhade Brahmin </option>
												<option value="841">Karkathar</option>
												<option value="78">Karmakar</option>
												<option value="957">Karni Bhakthula</option>
												<option value="79">Karuneegar</option>
												<option value="80">Kasar</option>
												<option value="867">Kasaundhan</option>
												<option value="2376">Kasera</option>
												<option value="81">Kashyap</option>
												<option value="895">Kasukara</option>
												<option value="320">Katiya</option>
												<option value="750">Kavara</option>
												<option value="717">Kavuthiyya/Ezhavathy</option>
												<option value="82">Kayastha</option>
												<option value="787">Kayastha (Bengali)</option>
												<option value="938">Kerala Mudali</option>
												<option value="868">Keshri (Kesarwani)</option>
												<option value="83">Khandayat</option>
												<option value="84">Khandelwal</option>
												<option value="718">Kharwa</option>
												<option value="321">Kharwar</option>
												<option value="984">Khatik</option>
												<option value="85">Khatri</option>
												<option value="719">Kirar</option>
												<option value="1041">Kodava</option>
												<option value="968">Kodikal Pillai</option>
												<option value="326">Koiri </option>
												<option value="283">Kokanastha Brahmin </option>
												<option value="322">Kokanastha Maratha</option>
												<option value="2333">Kokna</option>
												<option value="86">Koli</option>
												<option value="689">Koli Mahadev</option>
												<option value="720">Koli Patel</option>
												<option value="757">Komti /Arya Vaishya</option>
												<option value="896">Kongu Chettiar</option>
												<option value="813">Kongu Nadar</option>
												<option value="87">Kongu Vellala Gounder</option>
												<option value="88">Konkani</option>
												<option value="721">Korama</option>
												<option value="89">Kori</option>
												<option value="849">Kori/Koli</option>
												<option value="722">Kosthi</option>
												<option value="274">Kota Brahmin </option>
												<option value="723">Krishnavaka</option>
												<option value="90">Kshatriya</option>
												<option value="793">Kshatriya Kurmi</option>
												<option value="929">Kshatriya Raju</option>
												<option value="91">Kudumbi</option>
												<option value="92">Kulal</option>
												<option value="93">Kulalar</option>
												<option value="255">Kulin Brahmin </option>
												<option value="94">Kulita</option>
												<option value="248">Kumaoni Brahmin </option>
												<option value="974">Kumaoni Rajput</option>
												<option value="323">Kumawat</option>
												<option value="95">Kumbhakar</option>
												<option value="96">Kumbhar</option>
												<option value="97">Kumhar</option>
												<option value="98">Kummari</option>
												<option value="99">Kunbi</option>
												<option value="804">Kunbi Lonari</option>
												<option value="805">Kunbi Maratha</option>
												<option value="806">Kunbi Tirale</option>
												<option value="324">Kuravan</option>
												<option value="325">Kurmi</option>
												<option value="100">Kurmi/Kurmi Kshatriya</option>
												<option value="958">Kurni</option>
												<option value="101">Kuruba</option>
												<option value="102">Kuruhina Shetty</option>
												<option value="887">Kuruhini Chetty</option>
												<option value="103">Kurumbar</option>
												<option value="850">Kuruva</option>
												<option value="326">Kushwaha (Koiri)</option>
												<option value="104">Kutchi</option>
												<option value="882">Lad</option>
												<option value="2377">Lakhara / Lakhera / Laxkar</option>
												<option value="105">Lambadi</option>
												<option value="188">Larai Sindhi </option>
												<option value="189">Larkana Sindhi </option>
												<option value="1056">Laxminarayan gola</option>
												<option value="252">Leva patel</option>
												<option value="253">Leva patil</option>
												<option value="751">Linga Balija</option>
												<option value="106">Lingayath</option>
												<option value="327">Lodhi Rajput</option>
												<option value="107">Lohana</option>
												<option value="190">Lohana Sindhi </option>
												<option value="677">Lohar</option>
												<option value="724">Loniya</option>
												<option value="108">Lubana</option>
												<option value="759">Madhesiya/Kanu/Halwai</option>
												<option value="275">Madhwa Brahmin </option>
												<option value="109">Madiga</option>
												<option value="47">Madivala / Dhobi</option>
												<option value="110">Mahajan</option>
												<option value="111">Mahar</option>
												<option value="112">Mahendra</option>
												<option value="113">Maheshwari</option>
												<option value="869">Maheshwari / Meshri</option>
												<option value="114">Mahishya</option>
												<option value="926">Mahor</option>
												<option value="870">Mahuri</option>
												<option value="975">Mair Rajput Swarnkar</option>
												<option value="243">Maithil Brahmin </option>
												<option value="115">Majabi</option>
												<option value="116">Mala</option>
												<option value="117">Mali</option>
												<option value="118">Mallah</option>
												<option value="733">Malviya Brahmin</option>
												<option value="807">Malwani</option>
												<option value="119">Mangalorean</option>
												<option value="120">Manipuri</option>
												<option value="897">Manjapudur Chettiar</option>
												<option value="1045">Mannadiyar</option>
												<option value="985">Mannan / Velan / Vannan</option>
												<option value="122">Mapila</option>
												<option value="123">Maratha</option>
												<option value="803">Maratha Kshatriya</option>
												<option value="124">Maruthuvar</option>
												<option value="125">Matang</option>
												<option value="328">Mathur</option>
												<option value="927">Mathur Vaishya</option>
												<option value="1029">Matia Patel</option>
												<option value="735">Maurya / Shakya</option>
												<option value="126">Meena</option>
												<option value="127">Meenavar</option>
												<option value="986">Meghwal</option>
												<option value="2334">Mehar</option>
												<option value="128">Mehra</option>
												<option value="301">Mera </option>
												<option value="129">Meru Darji</option>
												<option value="130">Mochi</option>
												<option value="131">Modak</option>
												<option value="263">Modh Brahmin </option>
												<option value="1016">Modh Ghanchi</option>
												<option value="883">Modi</option>
												<option value="767">Modikarlu</option>
												<option value="132">Mogaveera</option>
												<option value="282">Mohyal Brahmin </option>
												<option value="133">Mudaliyar</option>
												<option value="134">Mudiraj</option>
												<option value="135">Mukkulathor </option>
												<option value="121">Munnuru Kapu</option>
												<option value="2349">Musahar</option>
												<option value="752">Musukama</option>
												<option value="136">Muthuraja / Mutharaiyar</option>
												<option value="329">Naagavamsam</option>
												<option value="761">Nabit</option>
												<option value="137">Nadar</option>
												<option value="264">Nagar Brahmin </option>
												<option value="330">Nagaralu</option>
												<option value="138">Nai / Nayi Brahmin</option>
												<option value="139">Naicker</option>
												<option value="939">Naicker - Others</option>
												<option value="814">Naicker - Vanniya Kula Kshatriyar</option>
												<option value="140">Naidu</option>
												<option value="141">Naik</option>
												<option value="343">Naika </option>
												<option value="142">Nair</option>
												<option value="143">Namasudra / Namassej</option>
												<option value="331">Nambiar</option>
												<option value="258">Namboodiri Brahmin </option>
												<option value="753">Namdarlu</option>
												<option value="969">Nanjil Mudali</option>
												<option value="1007">Nanjil Nattu Vellalar</option>
												<option value="1008">Nanjil Vellalar</option>
												<option value="973">Nanjil pillai</option>
												<option value="970">Nankudi Vellalar</option>
												<option value="144">Napit</option>
												<option value="332">Narmadiya Brahmin </option>
												<option value="2335">Nat</option>
												<option value="317">Nath </option>
												<option value="788">Nattu Gounder</option>
												<option value="898">Nattukottai Chettiar</option>
												<option value="145">Nayaka</option>
												<option value="333">Neeli</option>
												<option value="959">Neeli Saali</option>
												<option value="871">Nema</option>
												<option value="146">Nepali</option>
												<option value="960">Nessi</option>
												<option value="147">Nhavi</option>
												<option value="1053">Niari</option>
												<option value="292">Niyogi Brahmin </option>
												<option value="1046">Odan</option>
												<option value="786">Ontari</option>
												<option value="1009">Oraon</option>
												<option value="148">Oswal</option>
												<option value="334">Otari</option>
												<option value="842">Othuvaar</option>
												<option value="149">Padmasali</option>
												<option value="888">Padmashali</option>
												<option value="884">Padmavati Porwal</option>
												<option value="754">Pagadala</option>
												<option value="150">Pal</option>
												<option value="845">Pallan / Devandra Kula Vellalan</option>
												<option value="987">Panan</option>
												<option value="151">Panchal</option>
												<option value="289">Panda Brahmin </option>
												<option value="688">Pandaram</option>
												<option value="246">Pandit Brahmin </option>
												<option value="971">Pandiya Vellalar</option>
												<option value="152">Panicker</option>
												<option value="899">Pannirandam Chettiar</option>
												<option value="988">Paravan / Bharatar</option>
												<option value="933">Parit</option>
												<option value="153">Parkavakulam / Udayar</option>
												<option value="154">Parsi</option>
												<option value="335">Partraj</option>
												<option value="769">Parvatha Rajakulam</option>
												<option value="155">Pasi</option>
												<option value="303">Paswan </option>
												<option value="976">Paswan / Dusadh</option>
												<option value="156">Patel</option>
												<option value="676">Pathare Prabhu</option>
												<option value="808">Patil</option>
												<option value="157">Patnaick/Sistakaranam</option>
												<option value="158">Patra</option>
												<option value="770">Pattinavar</option>
												<option value="889">Pattusali</option>
												<option value="872">Patwa</option>
												<option value="336">Perika</option>
												<option value="790">Perika/Puragiri Kshatriya</option>
												<option value="159">Pillai</option>
												<option value="1011">Poddar</option>
												<option value="683">Poosala</option>
												<option value="160">Porwal</option>
												<option value="873">Porwal / Porwar</option>
												<option value="989">Poundra</option>
												<option value="161">Prajapati</option>
												<option value="990">Pulaya / Cheruman</option>
												<option value="337">Pushkarna Brahmin </option>
												<option value="2336">Rabari</option>
												<option value="1057">Radhi / Niari</option>
												<option value="358">Raigar</option>
												<option value="162">Rajaka / Vannar</option>
												<option value="163">Rajastani</option>
												<option value="686">Rajbhar</option>
												<option value="164">Rajbonshi</option>
												<option value="725">Rajpurohit</option>
												<option value="165">Rajput</option>
												<option value="1054">Raju / Kshatriya Raju</option>
												<option value="726">Ramanandi</option>
												<option value="166">Ramdasia</option>
												<option value="167">Ramgariah</option>
												<option value="727">Ramoshi</option>
												<option value="256">Rarhi Brahmin </option>
												<option value="874">Rastogi</option>
												<option value="885">Rathi</option>
												<option value="875">Rauniar</option>
												<option value="2337">Ravana Rajput</option>
												<option value="168">Ravidasia</option>
												<option value="169">Rawat</option>
												<option value="170">Reddy</option>
												<option value="338">Relli</option>
												<option value="284">Rigvedi Brahmin </option>
												<option value="191">Rohiri Sindhi </option>
												<option value="851">Rohit / Chamar</option>
												<option value="728">Ror</option>
												<option value="257">Rudraj Brahmin </option>
												<option value="176">SC</option>
												<option value="197">SKP</option>
												<option value="214">ST</option>
												<option value="171">Sadgope</option>
												<option value="771">Sadhu Chetty</option>
												<option value="215">Sagara (Uppara)</option>
												<option value="172">Saha</option>
												<option value="2338">Sahariya</option>
												<option value="192">Sahiti Sindhi </option>
												<option value="173">Sahu</option>
												<option value="174">Saini</option>
												<option value="843">Saiva Pillai Thanjavur</option>
												<option value="810">Saiva Pillai Tirunelveli</option>
												<option value="1012">Saiva Vellan chettiar</option>
												<option value="268">Sakaldwipi Brahmin </option>
												<option value="193">Sakkhar Sindhi </option>
												<option value="175">Saliya</option>
												<option value="1061">Saliyar</option>
												<option value="2339">Salvi</option>
												<option value="991">Samagar</option>
												<option value="852">Sambava</option>
												<option value="247">Sanadya Brahmin </option>
												<option value="276">Sanketi Brahmin </option>
												<option value="2340">Sansi</option>
												<option value="259">Saraswat Brahmin </option>
												<option value="2341">Sargara</option>
												<option value="244">Saryuparin Brahmin </option>
												<option value="736">Sathwara</option>
												<option value="992">Satnami</option>
												<option value="340">Savji</option>
												<option value="194">Sehwani Sindhi </option>
												<option value="177">Senai Thalaivar</option>
												<option value="341">Senguntha Mudaliyar</option>
												<option value="811">Sengunthar/Kaikolar</option>
												<option value="293">Settibalija</option>
												<option value="748">Setty Balija</option>
												<option value="1027">Shah</option>
												<option value="760">Shaw / Sahu/Teli</option>
												<option value="961">Shettigar</option>
												<option value="178">Shetty </option>
												<option value="195">Shikarpuri Sindhi </option>
												<option value="993">Shilpkar</option>
												<option value="179">Shimpi/Namdev</option>
												<option value="277">Shivhalli Brahmin </option>
												<option value="265">Shrimali Brahmin </option>
												<option value="681">Sikhwal Brahmin </option>
												<option value="180">Sindhi</option>
												<option value="181">Sindhi-Amil</option>
												<option value="182">Sindhi-Baibhand</option>
												<option value="183">Sindhi-Bhanusali</option>
												<option value="184">Sindhi-Bhatia</option>
												<option value="185">Sindhi-Chhapru</option>
												<option value="186">Sindhi-Dadu</option>
												<option value="187">Sindhi-Hyderabadi</option>
												<option value="188">Sindhi-Larai</option>
												<option value="189">Sindhi-Larkana</option>
												<option value="190">Sindhi-Lohana</option>
												<option value="191">Sindhi-Rohiri</option>
												<option value="192">Sindhi-Sahiti</option>
												<option value="193">Sindhi-Sakkhar</option>
												<option value="194">Sindhi-Sehwani</option>
												<option value="195">Sindhi-Shikarpuri</option>
												<option value="196">Sindhi-Thatai</option>
												<option value="2342">Sirvi / Janwa</option>
												<option value="278">Smartha Brahmin </option>
												<option value="198">Sonar</option>
												<option value="2343">Sondhia</option>
												<option value="199">Soni</option>
												<option value="994">Sonkar</option>
												<option value="200">Sourashtra</option>
												<option value="900">Sozhia Chetty</option>
												<option value="342">Sozhiya Vellalar</option>
												<option value="279">Sri Vaishnava Brahmin </option>
												<option value="682">Srisayana</option>
												<option value="280">Stanika Brahmin </option>
												<option value="343">Sugali (Naika)</option>
												<option value="344">Sunari</option>
												<option value="201">Sundhi</option>
												<option value="729">Surya Balija</option>
												<option value="202">Suthar</option>
												<option value="954">Swakula Saali</option>
												<option value="203">Swakula Sali</option>
												<option value="1023">Swarnakar</option>
												<option value="204">Tamboli</option>
												<option value="1063">Tammali</option>
												<option value="205">Tanti</option>
												<option value="206">Tantubai</option>
												<option value="207">Telaga</option>
												<option value="208">Teli</option>
												<option value="772">Telugupatti</option>
												<option value="209">Thakkar</option>
												<option value="675">Thakore</option>
												<option value="210">Thakur</option>
												<option value="995">Thandan</option>
												<option value="1044">Tharakan</option>
												<option value="196">Thatai Sindhi </option>
												<option value="211">Thigala</option>
												<option value="212">Thiyya</option>
												<option value="758">Thiyya Thandan</option>
												<option value="791">Thogata Veera Kshatriya</option>
												<option value="836">Thogata Veerakshathriya</option>
												<option value="812">Thondai Mandala Vellalar</option>
												<option value="756">Thota</option>
												<option value="213">Tili</option>
												<option value="2350">Tiyar/Tiar</option>
												<option value="346">Togata</option>
												<option value="347">Tonk Kshatriya</option>
												<option value="348">Turupu Kapu</option>
												<option value="249">Tyagi Brahmin </option>
												<option value="876">Ummar / Umre / Bagaria</option>
												<option value="696">Urali Gounder</option>
												<option value="349">Urs</option>
												<option value="356">Vada Balija</option>
												<option value="901">Vadambar</option>
												<option value="1050">Vadar</option>
												<option value="216">Vaddera</option>
												<option value="818">Vadugan</option>
												<option value="285">Vaidiki Brahmin </option>
												<option value="687">Vaikhanasa Brahmin </option>
												<option value="217">Vaish</option>
												<option value="218">Vaishnav</option>
												<option value="853">Vaishnav Dishaval</option>
												<option value="854">Vaishnav Kapol</option>
												<option value="855">Vaishnav Khadyata</option>
												<option value="856">Vaishnav Lad</option>
												<option value="857">Vaishnav Modh</option>
												<option value="858">Vaishnav Porvad</option>
												<option value="859">Vaishnav Shrimali</option>
												<option value="860">Vaishnav Sorathaiya</option>
												<option value="861">Vaishnav Vania</option>
												<option value="219">Vaishnava</option>
												<option value="220">Vaishya</option>
												<option value="221">Vaishya Vani</option>
												<option value="1047">Valar</option>
												<option value="350">Valluvan</option>
												<option value="222">Valmiki</option>
												<option value="1015">Valsad</option>
												<option value="934">Vani</option>
												<option value="877">Vani / Vaishya</option>
												<option value="223">Vania</option>
												<option value="730">Vanika Vyshya</option>
												<option value="224">Vaniya</option>
												<option value="902">Vaniya Chettiar</option>
												<option value="225">Vanjara</option>
												<option value="226">Vanjari</option>
												<option value="227">Vankar</option>
												<option value="228">Vannar</option>
												<option value="229">Vannia Kula Kshatriyar</option>
												<option value="1064">Vanyakulakshatriya</option>
												<option value="351">Variar</option>
												<option value="352">Varshney</option>
												<option value="878">Varshney (Barahseni)</option>
												<option value="230">Veera Saivam</option>
												<option value="937">Veerakodi Vellala</option>
												<option value="353">Velaan</option>
												<option value="231">Velama</option>
												<option value="354">Velanadu Brahmin </option>
												<option value="1043">Vellala Pillai</option>
												<option value="232">Vellalar</option>
												<option value="903">Vellan Chettiars</option>
												<option value="233">Veluthedathu Nair</option>
												<option value="355">Vettuva Gounder</option>
												<option value="996">Vettuvan</option>
												<option value="879">Vijayvargia</option>
												<option value="821">Vilakithala Nair</option>
												<option value="234">Vilakkithala Nair</option>
												<option value="236">Vishwakarma</option>
												<option value="235">Viswabrahmin</option>
												<option value="237">Vokkaliga</option>
												<option value="266">Vyas Brahmin </option>
												<option value="238">Vysya</option>
												<option value="239">Yadav</option>
												<option value="819">Yadava Naidu</option>
												<option value="357">Yellapu</option>
												<option value="999">Others</option>
												<option value="0">Don't wish to specify</option>
											</select>
											<span></span>
										</div>
									</div>
									<div class="mb-3 col-md-12">
										<div class="label-container sub-caste d-flex flex-row justify-content-between">
											<label for="sub-caste" class="form-label">Subcaste</label>
											<select type="text" class="form-control" name="sub_caste" id="sub-caste">
												<option value="">Select</option>
												<option>Sub Caste 1</option>
												<option>Sub Caste 2</option>
												<option>Sub Caste 3</option>
											</select>
											<span>(Optional)</span>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="mb-3 col-md-12">
										<div class="label-container gothram d-flex flex-row justify-content-between">
											<label for="gothram" class="form-label">Gothram</label>
											<select type="text" class="form-control" name="gothram" id="gothram">
												<option value="">Select</option>
												<option>Gowthram 1</option>
												<option>Gowthram 2</option>
												<option>Gowthram 3</option>
											</select>
											<span>(Optional)</span>
										</div>
									</div>
									<div class="mb-3 col-md-12">
										<div class="label-container dosham d-flex flex-row justify-content-between">
											<label class="form-label">Dosham</label>
											<ul class="dosham-radio-list">
												<li>
													<input type="radio" id="dosham1" name="dosham" value="no" />
													<label for="dosham1">No</label>
												</li>
												<li>
													<input type="radio" id="dosham2" name="dosham" value="yes" />
													<label for="dosham2">Yes</label>
												</li>
												<li class="dosham3-list">
													<input type="radio" id="dosham3" name="dosham" value="dont_know" />
													<label for="dosham3">Don't Know</label>
												</li>
											</ul>
											<span>(Optional)</span>
										</div>
									</div>
									<div class="text-start">
										<button type="submit" class="btn btn-primary submit">Continue</button>
									</div>
								</div>
							</form>
							<form id="registration-form" class="form-3" style="display: none;">

								<div class="form-titles">
									<h2 class="mb-5 register-form-title">Register With Happylife</h2>
									<!-- <div class="form-logo">
										<img src="images/logo.png" width="164" height="50" alt="contact-form-logo">
									</div> -->
								</div>
								<div class="row">
									<div class="mb-3 col-md-12">
										<div class="label-container marital-status">
											<label for="marital-status" class="form-label">Marital Status</label>
											<ul class="register-radio-list">
												<li>
													<input type="radio" id="marital_status1" name="marital_status"
														value="never_married" required />
													<label for="marital_status1">Never Married</label>
												</li>
												<li>
													<input type="radio" id="marital_status2" name="marital_status"
														value="widowed" required />
													<label for="marital_status2">Widowed</label>
												</li>
												<li>
													<input type="radio" id="marital_status3" name="marital_status"
														value="divorced" required />
													<label for="marital_status3">Divorced</label>
												</li>
												<li>
													<input type="radio" id="marital_status4" name="marital_status"
														value="awaiting_divorce" required />
													<label for="marital_status4">Awating Divorce</label>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="mb-3 col-md-12">
										<div class="label-container family-status">
											<label class="form-label">Family Status</label>
											<ul class="register-radio-list">
												<li>
													<input type="radio" id="family_status1" name="family_status"
														value="middle_class" required />
													<label for="family_status1">Middle class</label>
												</li>
												<li>
													<input type="radio" id="family_status2" name="family_status"
														value="upper_middle_class" required />
													<label for="family_status2">Upper middle class</label>
												</li>
												<li>
													<input type="radio" id="family_status3" name="family_status"
														value="high-class" required />
													<label for="family_status3">High class</label>
												</li>
												<li>
													<input type="radio" id="family_status4" name="family_status"
														value="rich_affluent" required />
													<label for="family_status4">Rich/Affluent</label>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="mb-3 col-md-12">
										<div class="label-container family-type">
											<label class="form-label">Family Type</label>
											<ul class="register-radio-list">
												<li>
													<input type="radio" id="family_type1" name="family_type"
														value="joint" required />
													<label for="family_type1">Joint</label>
												</li>
												<li>
													<input type="radio" id="family_type2" name="family_type"
														value="nuclear" required />
													<label for="family_type2">Nuclear</label>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="mb-3 col-md-12">
										<div class="label-container family-values">
											<label for="family-values" class="form-label">Family Values</label>
											<ul class="register-radio-list">
												<li>
													<input type="radio" id="family_values1" name="family_values"
														value="orthodox" required />
													<label for="family_values1">Orthodox</label>
												</li>
												<li>
													<input type="radio" id="family_values2" name="family_values"
														value="traditional" required />
													<label for="family_values2">Traditional</label>
												</li>
												<li>
													<input type="radio" id="family_values3" name="family_values"
														value="moderate" required />
													<label for="family_values3">Moderate</label>
												</li>
												<li>
													<input type="radio" id="family_values4" name="family_values"
														value="liberal" required />
													<label for="family_values4">Liberal</label>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="mb-3 col-md-12">
										<div class="label-container disability">
											<label for="disability" class="form-label">Any Disability</label>
											<ul class="register-radio-list">
												<li>
													<input type="radio" id="disability1" name="disability" value="none"
														required />
													<label for="disability1">None</label>
												</li>
												<li>
													<input type="radio" id="disability2" name="disability"
														value="physically_challenged" required />
													<label for="disability2">Physically Challenged</label>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="mb-3 col-md-12">
									<div class="label-container height d-flex flex-row justify-content-between">
										<label for="height" class="form-label w-25 me-5">Height</label>
										<select type="text" id="height" class="form-control" name="height" id="height"
											required>
											<option value="">Feet / Inches</option>
											<option value="4-6">4ft 6in / 137 cms</option>
											<option value="4-7">4ft 7in / 139 cms</option>
											<option value="4-8">4ft 8in / 142 cms</option>
											<option value="4-9">4ft 9in / 144 cms</option>
											<option value="4-10">4ft 10in / 147 cms</option>
											<option value="4-11">4ft 11in / 149 cms</option>
											<option value="5">5ft / 152 cms</option>
											<option value="5-1">5ft 1in / 154 cms</option>
											<option value="5-2">5ft 2in / 157 cms</option>
											<option value="5-3">5ft 3in / 160 cms</option>
											<option value="5-4">5ft 4in / 162 cms</option>
											<option value="5-5">5ft 5in / 165 cms</option>
											<option value="5-6">5ft 6in / 167 cms</option>
											<option value="5-7">5ft 7in / 170 cms</option>
											<option value="5-8">5ft 8in / 172 cms</option>
											<option value="5-9">5ft 9in / 175 cms</option>
											<option value="5-10">5ft 10in / 177 cms</option>
											<option value="5-11">5ft 11in / 180 cms</option>
											<option value="6">6ft / 182 cms</option>
											<option value="6-1">6ft 1in / 185 cms</option>
											<option value="6-2">6ft 2in / 187 cms</option>
											<option value="6-3">6ft 3in / 190 cms</option>
											<option value="6-4">6ft 4in / 193 cms</option>
											<option value="6-5">6ft 5in / 195 cms</option>
											<option value="6-6">6ft 6in / 198 cms</option>
											<option value="6-7">6ft 7in / 200 cms</option>
											<option value="6-8">6ft 8in / 203 cms</option>
											<option value="6-9">6ft 9in / 205 cms</option>
											<option value="6-10">6ft 10in / 208 cms</option>
											<option value="6-11">6ft 11in / 210 cms</option>
											<option value="7">7ft / 213 cms</option>
										</select>
										<span></span>
									</div>
								</div>
								<div class="text-start">
									<button type="submit" class="btn btn-primary submit">Continue</button>
								</div>
							</form>
							<form id="registration-form" class="form-4" style="display: none;">

								<div class="form-titles">
									<h2 class="mb-5 register-form-title">Register With Happylife</h2>
									<!-- <div class="form-logo">
										<img src="images/logo.png" width="164" height="50" alt="contact-form-logo">
									</div> -->
								</div>
								<div class="row">
									<div class="mb-3 col-md-12">
										<div class="label-container education d-flex flex-row justify-content-between">
											<label for="education" class="form-label">Highest Education</label>
											<select type="text" class="form-control" name="education" id="education"
												required>
												<option value=""> Select </option>
												<optgroup class="a"
													label="&nbsp;&nbsp;&nbsp;&nbsp;-- Any Bachelors in Engineering / Computers --">
													<option value="6">Aeronautical Engineering</option>
													<option value="8">B.Arch</option>
													<option value="5">BCA</option>
													<option value="49">BE</option>
													<option value="9">B.Plan</option>
													<option value="95">B.Sc IT/ Computer Science</option>
													<option value="50">B.Tech.</option>
													<option value="83">Other Bachelor Degree in Engineering / Computers
													</option>
													<option value="102">B.S.(Engineering)</option>
												</optgroup>
												<optgroup class="a"
													label="&nbsp;&nbsp;&nbsp;&nbsp;-- Any Masters in Engineering / Computers --">
													<option value="7">M.Arch.</option>
													<option value="51">MCA</option>
													<option value="53">ME</option>
													<option value="55">M.Sc. IT / Computer Science</option>
													<option value="3">M.S.(Engg.)</option>
													<option value="54">M.Tech.</option>
													<option value="52">PGDCA</option>
													<option value="84">Other Masters Degree in Engineering / Computers
													</option>
												</optgroup>
												<optgroup class="a"
													label="&nbsp;&nbsp;&nbsp;&nbsp;-- Any Bachelors in Arts / Science / Commerce --">
													<option value="43">Aviation Degree</option>
													<option value="18">B.A.</option>
													<option value="16">B.Com.</option>
													<option value="39">B.Ed.</option>
													<option value="56">BFA</option>
													<option value="66">BFT</option>
													<option value="57">BLIS</option>
													<option value="59">B.M.M.</option>
													<option value="17">B.Sc.</option>
													<option value="58">B.S.W</option>
													<option value="15">B.Phil.</option>
													<option value="85">Other Bachelor Degree in Arts / Science /
														Commerce</option>
												</optgroup>
												<optgroup class="a"
													label="&nbsp;&nbsp;&nbsp;&nbsp;-- Any Masters in Arts / Science / Commerce --">
													<option value="13">M.A.</option>
													<option value="11">MCom</option>
													<option value="38">M.Ed.</option>
													<option value="98">MFA</option>
													<option value="60">MLIS</option>
													<option value="12">M.Sc.</option>
													<option value="63">MSW</option>
													<option value="10">M.Phil.</option>
													<option value="86">Other Master Degree in Arts / Science / Commerce
													</option>
												</optgroup>
												<optgroup class="a"
													label="&nbsp;&nbsp;&nbsp;&nbsp;-- Any Bachelors in Management --">
													<option value="35">BBA</option>
													<option value="65">BFM (Financial Management)</option>
													<option value="19">BHM (Hotel Management)</option>
													<option value="87">Other Bachelor Degree in Management</option>
													<option value="103">BHA / BHM (Hospital Administration)</option>
												</optgroup>
												<optgroup class="a"
													label="&nbsp;&nbsp;&nbsp;&nbsp;-- Any Masters in Management --">
													<option value="61">MBA</option>
													<option value="76">MFM (Financial Management)</option>
													<option value="14">MHM (Hotel Management)</option>
													<option value="64">MHRM (Human Resource Management)</option>
													<option value="62">PGDM</option>
													<option value="96">Other Master Degree in Management</option>
													<option value="104">MHA / MHM (Hospital Administration)</option>
												</optgroup>
												<optgroup class="a"
													label="&nbsp;&nbsp;&nbsp;&nbsp;-- Any Bachelors in Medicine in General / Dental / Surgeon --">
													<option value="29">B.A.M.S.</option>
													<option value="25">BDS</option>
													<option value="28">BHMS</option>
													<option value="68">BSMS</option>
													<option value="69">BUMS</option>
													<option value="26">BVSc</option>
													<option value="21">MBBS</option>
												</optgroup>
												<optgroup class="a"
													label="&nbsp;&nbsp;&nbsp;&nbsp;-- Any Masters in Medicine - General / Dental / Surgeon --">
													<option value="22">MDS</option>
													<option value="20">MD / MS (Medical)</option>
													<option value="23">MVSc</option>
													<option value="105">MCh</option>
													<option value="106">DNB</option>
												</optgroup>
												<optgroup class="a"
													label="&nbsp;&nbsp;&nbsp;&nbsp;-- Any Bachelors in Medicine Others --">
													<option value="31">BPharm</option>
													<option value="27">BPT</option>
													<option value="101">B.Sc. Nursing</option>
													<option value="88">Other Bachelor Degree in Medicine</option>
												</optgroup>
												<optgroup class="a"
													label="&nbsp;&nbsp;&nbsp;&nbsp;-- Any Masters in Medicine Others --">
													<option value="30">M.Pharm</option>
													<option value="24">MPT</option>
													<option value="97">Other Master Degree in Medicine</option>
												</optgroup>
												<optgroup class="a"
													label="&nbsp;&nbsp;&nbsp;&nbsp;-- Any Bachelors in Legal --">
													<option value="72">BGL</option>
													<option value="73">B.L.</option>
													<option value="74">LL.B.</option>
													<option value="90">Other Bachelor Degree in Legal</option>
												</optgroup>
												<optgroup class="a"
													label="&nbsp;&nbsp;&nbsp;&nbsp;-- Any Masters in Legal --">
													<option value="71">LL.M.</option>
													<option value="70">M.L.</option>
													<option value="89">Other Master Degree in Legal</option>
												</optgroup>
												<optgroup class="a"
													label="&nbsp;&nbsp;&nbsp;&nbsp;-- Any Financial Qualification - ICWAI / CA / CS/ CFA --">
													<option value="36">CA</option>
													<option value="75">CFA (Chartered Financial Analyst)</option>
													<option value="48">CS</option>
													<option value="37">ICWA</option>
													<option value="91">Other Degree in Finance</option>
												</optgroup>
												<optgroup class="a"
													label="&nbsp;&nbsp;&nbsp;&nbsp;-- Service - IAS / IPS / IRS / IES / IFS  --">
													<option value="77">IAS</option>
													<option value="80">IES</option>
													<option value="81">IFS</option>
													<option value="79">IRS</option>
													<option value="78">IPS</option>
													<option value="92">Other Degree in Service</option>
												</optgroup>
												<optgroup class="a" label="&nbsp;&nbsp;&nbsp;&nbsp;-- Doctorates --">
													<option value="33">Ph.D.</option>
													<option value="107">DM</option>
													<option value="108">Postdoctoral fellow</option>
													<option value="109">Fellow of National Board (FNB)</option>
												</optgroup>
												<optgroup class="a" label="&nbsp;&nbsp;&nbsp;&nbsp;-- Any Diploma --">
													<option value="46">Diploma</option>
													<option value="82">Polytechnic</option>
													<option value="45">Trade School</option>
													<option value="94">Others in Diploma</option>
												</optgroup>
												<optgroup class="a"
													label="&nbsp;&nbsp;&nbsp;&nbsp;-- Higher Secondary / Secondary --">
													<option value="47">Higher Secondary School / High School</option>
												</optgroup>
											</select>
											<span></span>
										</div>
									</div>
									<div class="mb-3 col-md-12">
										<div class="label-container employed-in">
											<label class="form-label me-3">Government/PSU</label>
											<ul class="register-radio-list">
												<li>
													<input type="radio" id="employed_in1" name="employed_in"
														value="government" required />
													<label for="employed_in1">Government/PSU</label>
												</li>
												<li>
													<input type="radio" id="employed_in2" name="employed_in"
														value="private" required />
													<label for="employed_in2">Private</label>
												</li>
												<li>
													<input type="radio" id="employed_in3" name="employed_in"
														value="business" required />
													<label for="employed_in3">Business</label>
												</li>
												<li>
													<input type="radio" id="employed_in4" name="employed_in"
														value="defence" required />
													<label for="employed_in4">Defence</label>
												</li>
												<li>
													<input type="radio" id="employed_in5" name="employed_in"
														value="self_employed" required />
													<label for="employed_in5">Self Employed</label>
												</li>
												<li>
													<input type="radio" id="employed_in6" name="employed_in"
														value="not_working" required />
													<label for="employed_in6">Notworking</label>
												</li>
											</ul>
										</div>
									</div>
									<div class="mb-3 col-md-12">
										<div class="label-container occupation d-flex flex-row justify-content-between">
											<label for="occupation" class="form-label">Occupation</label>
											<select type="text" class="form-control" name="occupation" id="occupation"
												required>
												<option value="">Select</option>
												<option value="0"> - Select Occupation - </option>
												<option class="freclas occusele" disabled="">FREQUENTLY USED</option>
												<option class="freclas" value="1">Software Professional</option>
												<option class="freclas" value="4">Teaching / Academician</option>
												<option class="freclas" value="50">Executive</option>
												<option class="freclas" value="12">Doctor</option>
												<option class="freclas" value="49">Manager</option>
												<option class="freclas" value="5">Professor / Lecturer</option>
												<option class="freclas" value="47">Officer</option>
												<option class="freclas" value="63">Human Resources Professional</option>
												<option class="occusele" disabled="">MORE</option>
												<optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- ADMINISTRATION --"
													class="a">
													<option value="49">Manager</option>
													<option value="48">Supervisor</option>
													<option value="47">Officer</option>
													<option value="39">Administrative Professional</option>
													<option value="50">Executive</option>
													<option value="46">Clerk</option>
													<option value="63">Human Resources Professional</option>
													<option value="78">Secretary / Front Office</option>
												</optgroup>
												<optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- AGRICULTURE --"
													class="a">
													<option value="37">Agriculture &amp; Farming Professional</option>
													<option value="81">Horticulturist</option>
												</optgroup>
												<optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- AIRLINE --" class="a">
													<option value="30">Pilot</option>
													<option value="28">Air Hostess / Flight Attendant</option>
													<option value="29">Airline Professional</option>
												</optgroup>
												<optgroup
													label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- ARCHITECTURE &amp; DESIGN --"
													class="a">
													<option value="19">Architect</option>
													<option value="20">Interior Designer</option>
												</optgroup>
												<optgroup
													label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- BANKING &amp; FINANCE --"
													class="a">
													<option value="7">Chartered Accountant</option>
													<option value="10">Company Secretary</option>
													<option value="8">Accounts / Finance Professional</option>
													<option value="16">Banking Professional</option>
													<option value="9">Auditor</option>
													<option value="69">Financial Accountant</option>
													<option value="64">Financial Analyst / Planning</option>
													<option value="87">Investment Professional</option>
												</optgroup>
												<optgroup
													label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- BEAUTY &amp; FASHION --"
													class="a">
													<option value="25">Fashion Designer</option>
													<option value="33">Beautician</option>
													<option value="82">Hair Stylist</option>
													<option value="83">Jewellery Designer</option>
													<option value="84">Designer (Others)</option>
													<option value="85">Makeup Artist</option>
												</optgroup>
												<optgroup
													label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- BPO &amp; CUSTOMER SERVICE --"
													class="a">
													<option value="86">BPO / KPO / ITES Professional</option>
													<option value="40">Customer Service Professional</option>
												</optgroup>
												<optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- CIVIL SERVICES --"
													class="a">
													<option value="52">Civil Services (IAS / IPS / IRS / IES / IFS)
													</option>
												</optgroup>
												<optgroup
													label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- CORPORATE PROFESSIONALS --"
													class="a">
													<option value="70">Analyst</option>
													<option value="45">Consultant</option>
													<option value="88">Corporate Communication</option>
													<option value="89">Corporate Planning</option>
													<option value="42">Marketing Professional</option>
													<option value="90">Operations Management</option>
													<option value="43">Sales Professional</option>
													<option value="91">Senior Manager / Manager</option>
													<option value="92">Subject Matter Expert</option>
													<option value="93">Business Development Professional</option>
													<option value="94">Content Writer</option>
												</optgroup>
												<optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- DEFENCE --" class="a">
													<option value="53">Army</option>
													<option value="54">Navy</option>
													<option value="96">Defence Services (Others)</option>
													<option value="55">Air Force</option>
													<option value="97">Paramilitary</option>
												</optgroup>
												<optgroup
													label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- EDUCATION &amp; TRAINING --"
													class="a">
													<option value="5">Professor / Lecturer</option>
													<option value="4">Teaching / Academician</option>
													<option value="6">Education Professional</option>
													<option value="111">Training Professional</option>
													<option value="112">Research Assistant</option>
													<option value="113">Research Scholar</option>
												</optgroup>
												<optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- ENGINEERING --"
													class="a">
													<option value="114">Civil Engineer</option>
													<option value="115">Electronics / Telecom Engineer</option>
													<option value="116">Mechanical / Production Engineer</option>
													<option value="117">Quality Assurance Engineer - Non IT</option>
													<option value="3">Engineer - Non IT</option>
													<option value="65">Designer</option>
													<option value="118">Product Manager - Non IT</option>
													<option value="77">Project Manager - Non IT</option>
												</optgroup>
												<optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- HOSPITALITY --"
													class="a">
													<option value="34">Hotel / Hospitality Professional</option>
													<option value="129">Restaurant / Catering Professional</option>
													<option value="130">Chef / Cook</option>
												</optgroup>
												<optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- IT &amp; SOFTWARE --"
													class="a">
													<option value="1">Software Professional</option>
													<option value="2">Hardware Professional</option>
													<option value="74">Product Manager</option>
													<option value="76">Project Manager</option>
													<option value="75">Program Manager</option>
													<option value="119">Animator</option>
													<option value="120">Cyber / Network Security</option>
													<option value="121">UI / UX Designer</option>
													<option value="122">Web / Graphic Designer</option>
													<option value="123">Software Consultant</option>
													<option value="124">Data Analyst</option>
													<option value="125">Data Scientist</option>
													<option value="126">Network Engineer</option>
													<option value="128">Quality Assurance Engineer</option>
												</optgroup>
												<optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- LEGAL --" class="a">
													<option value="17">Lawyer &amp; Legal Professional</option>
													<option value="131">Legal Assistant</option>
												</optgroup>
												<optgroup
													label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- POLICE / LAW ENFORCEMENT --"
													class="a">
													<option value="18">Law Enforcement Officer</option>
													<option value="95">Police</option>
												</optgroup>
												<optgroup
													label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- MEDICAL &amp; HEALTHCARE-OTHERS --"
													class="a">
													<option value="14">Healthcare Professional</option>
													<option value="15">Paramedical Professional</option>
													<option value="13">Nurse</option>
													<option value="98">Pharmacist</option>
													<option value="100">Physiotherapist</option>
													<option value="103">Psychologist</option>
													<option value="107">Therapist</option>
													<option value="108">Medical Transcriptionist</option>
													<option value="109">Dietician / Nutritionist</option>
													<option value="110">Lab Technician</option>
													<option value="150">Medical Representative</option>
												</optgroup>
												<optgroup
													label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- MEDIA &amp; ENTERTAINMENT --"
													class="a">
													<option value="27">Journalist</option>
													<option value="22">Media Professional</option>
													<option value="24">Entertainment Professional</option>
													<option value="26">Event Management Professional</option>
													<option value="21">Advertising / PR Professional</option>
													<option value="66">Designer</option>
													<option value="79">Actor / Model</option>
													<option value="80">Artist</option>
												</optgroup>
												<optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- MERCHANT NAVY --"
													class="a">
													<option value="32">Mariner / Merchant Navy</option>
													<option value="133">Sailor</option>
												</optgroup>
												<optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- SCIENTIST --"
													class="a">
													<option value="35">Scientist / Researcher</option>
												</optgroup>
												<optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- SENIOR MANAGEMENT --"
													class="a">
													<option value="41">CXO / President, Director, Chairman</option>
													<option value="134">VP / AVP / GM / DGM / AGM</option>
												</optgroup>
												<optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- OTHERS --" class="a">
													<option value="44">Technician</option>
													<option value="38">Arts &amp; Craftsman</option>
													<option value="67">Student</option>
													<option value="68">Librarian</option>
													<option value="71">Business Owner / Entrepreneur</option>
													<option value="72">Retired</option>
													<option value="73">Transportation / Logistics Professional</option>
													<option value="135">Agent / Broker / Trader</option>
													<option value="136">Contractor</option>
													<option value="137">Fitness Professional</option>
													<option value="138">Security Professional</option>
													<option value="36">Social Worker / Volunteer / NGO</option>
													<option value="51">Sportsperson</option>
													<option value="139">Travel Professional</option>
													<option value="140">Singer</option>
													<option value="141">Writer</option>
													<option value="158">Politician</option>
													<option value="142">Associate</option>
													<option value="143">Builder</option>
													<option value="144">Chemist</option>
													<option value="145">CNC Operator</option>
													<option value="146">Distributor</option>
													<option value="147">Driver</option>
													<option value="148">Freelancer</option>
													<option value="149">Mechanic</option>
													<option value="151">Musician</option>
													<option value="152">Photo / Videographer</option>
													<option value="153">Surveyor</option>
													<option value="154">Tailor</option>
													<option value="99">Others</option>
												</optgroup>
												<optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- DOCTOR --" class="a">
													<option value="12">Doctor</option>
													<option value="105">Dentist</option>
													<option value="106">Surgeon</option>
													<option value="104">Veterinary Doctor</option>
												</optgroup>
											</select>
											<span></span>
										</div>
									</div>
									<div class="mb-3 col-md-12">
										<div class="label-container income d-flex flex-row justify-content-between">
											<label for="income" class="form-label">Annual Income</label>
											<select type="text" class="form-control" name="income" id="income" required>
												<option value=""> Select Currency </option>
												<option value="1" style="color: rgb(0, 79, 0);">AFA</option>
												<option value="2" style="color: rgb(0, 79, 0);">ALL</option>
												<option value="3" style="color: rgb(0, 79, 0);">DZD</option>
												<option value="4" style="color: rgb(0, 79, 0);">USD</option>
												<option value="5" style="color: rgb(0, 79, 0);">EUR</option>
												<option value="6" style="color: rgb(0, 79, 0);">AON</option>
												<option value="7" style="color: rgb(0, 79, 0);">XCD</option>
												<option value="8" style="color: rgb(0, 79, 0);">XCD</option>
												<option value="9" style="color: rgb(0, 79, 0);">XCD</option>
												<option value="10" style="color: rgb(0, 79, 0);">ARS</option>
												<option value="11" style="color: rgb(0, 79, 0);">AMD</option>
												<option value="12" style="color: rgb(0, 79, 0);">AWG</option>
												<option value="13" style="color: rgb(0, 79, 0);">AUD</option>
												<option value="14" style="color: rgb(0, 79, 0);">EUR</option>
												<option value="15" style="color: rgb(0, 79, 0);">AZM</option>
												<option value="16" style="color: rgb(0, 79, 0);">BSD</option>
												<option value="17" style="color: rgb(0, 79, 0);">BHD</option>
												<option value="18" style="color: rgb(0, 79, 0);">BDT</option>
												<option value="19" style="color: rgb(0, 79, 0);">BBD</option>
												<option value="20" style="color: rgb(0, 79, 0);">BYB</option>
												<option value="21" style="color: rgb(0, 79, 0);">EUR</option>
												<option value="22" style="color: rgb(0, 79, 0);">BZD</option>
												<option value="23" style="color: rgb(0, 79, 0);">XOF</option>
												<option value="24" style="color: rgb(0, 79, 0);">BMD</option>
												<option value="25" style="color: rgb(0, 79, 0);">BTN</option>
												<option value="26" style="color: rgb(0, 79, 0);">BOB</option>
												<option value="27" style="color: rgb(0, 79, 0);">BAM</option>
												<option value="28" style="color: rgb(0, 79, 0);">BWP</option>
												<option value="29" style="color: rgb(0, 79, 0);">NOK</option>
												<option value="30" style="color: rgb(0, 79, 0);">BRL</option>
												<option value="31" style="color: rgb(0, 79, 0);">USD</option>
												<option value="32" style="color: rgb(0, 79, 0);">USD</option>
												<option value="33" style="color: rgb(0, 79, 0);">BND</option>
												<option value="34" style="color: rgb(0, 79, 0);">BGL</option>
												<option value="35" style="color: rgb(0, 79, 0);">XOF</option>
												<option value="36" style="color: rgb(0, 79, 0);">BIF</option>
												<option value="37" style="color: rgb(0, 79, 0);">KHR</option>
												<option value="38" style="color: rgb(0, 79, 0);">XAF</option>
												<option value="39" style="color: rgb(0, 79, 0);">CAD</option>
												<option value="40" style="color: rgb(0, 79, 0);">CVE</option>
												<option value="41" style="color: rgb(0, 79, 0);">KYD</option>
												<option value="42" style="color: rgb(0, 79, 0);">XAF</option>
												<option value="43" style="color: rgb(0, 79, 0);">XAF</option>
												<option value="44" style="color: rgb(0, 79, 0);">CLP</option>
												<option value="45" style="color: rgb(0, 79, 0);">CNY</option>
												<option value="46" style="color: rgb(0, 79, 0);">AUD</option>
												<option value="47" style="color: rgb(0, 79, 0);">AUD</option>
												<option value="48" style="color: rgb(0, 79, 0);">COP</option>
												<option value="49" style="color: rgb(0, 79, 0);">KMF</option>
												<option value="50" style="color: rgb(0, 79, 0);">XAF</option>
												<option value="51" style="color: rgb(0, 79, 0);">NZD</option>
												<option value="52" style="color: rgb(0, 79, 0);">CRC</option>
												<option value="53" style="color: rgb(0, 79, 0);">HRK</option>
												<option value="54" style="color: rgb(0, 79, 0);">CUP</option>
												<option value="55" style="color: rgb(0, 79, 0);">CYP</option>
												<option value="56" style="color: rgb(0, 79, 0);">CZK</option>
												<option value="57" style="color: rgb(0, 79, 0);">DKK</option>
												<option value="58" style="color: rgb(0, 79, 0);">DJF</option>
												<option value="59" style="color: rgb(0, 79, 0);">XCD</option>
												<option value="60" style="color: rgb(0, 79, 0);">DOP</option>
												<option value="61" style="color: rgb(0, 79, 0);">TPE</option>
												<option value="62" style="color: rgb(0, 79, 0);">ECS</option>
												<option value="63" style="color: rgb(0, 79, 0);">EGP</option>
												<option value="64" style="color: rgb(0, 79, 0);">SVC</option>
												<option value="65" style="color: rgb(0, 79, 0);">XAF</option>
												<option value="66" style="color: rgb(0, 79, 0);">ERN</option>
												<option value="67" style="color: rgb(0, 79, 0);">EEK</option>
												<option value="68" style="color: rgb(0, 79, 0);">ETB</option>
												<option value="69" style="color: rgb(0, 79, 0);">FKP</option>
												<option value="70" style="color: rgb(0, 79, 0);">DKK</option>
												<option value="71" style="color: rgb(0, 79, 0);">FJD</option>
												<option value="72" style="color: rgb(0, 79, 0);">EUR</option>
												<option value="73" style="color: rgb(0, 79, 0);">EUR</option>
												<option value="74" style="color: rgb(0, 79, 0);">EUR</option>
												<option value="75" style="color: rgb(0, 79, 0);">XPF</option>
												<option value="76" style="color: rgb(0, 79, 0);">EUR</option>
												<option value="77" style="color: rgb(0, 79, 0);">XAF</option>
												<option value="78" style="color: rgb(0, 79, 0);">GMD</option>
												<option value="79" style="color: rgb(0, 79, 0);">GEL</option>
												<option value="80" style="color: rgb(0, 79, 0);">EUR</option>
												<option value="81" style="color: rgb(0, 79, 0);">GHC</option>
												<option value="82" style="color: rgb(0, 79, 0);">GIP</option>
												<option value="83" style="color: rgb(0, 79, 0);">EUR</option>
												<option value="84" style="color: rgb(0, 79, 0);">DKK</option>
												<option value="85" style="color: rgb(0, 79, 0);">XCD</option>
												<option value="86" style="color: rgb(0, 79, 0);">EUR</option>
												<option value="87" style="color: rgb(0, 79, 0);">USD</option>
												<option value="88" style="color: rgb(0, 79, 0);">QTQ</option>
												<option value="89" style="color: rgb(0, 79, 0);">GNF</option>
												<option value="90" style="color: rgb(0, 79, 0);">GWP</option>
												<option value="91" style="color: rgb(0, 79, 0);">GYD</option>
												<option value="92" style="color: rgb(0, 79, 0);">HTG</option>
												<option value="93" style="color: rgb(0, 79, 0);">AUD</option>
												<option value="94" style="color: rgb(0, 79, 0);">HNL</option>
												<option value="95" style="color: rgb(0, 79, 0);">HKD</option>
												<option value="96" style="color: rgb(0, 79, 0);">HUF</option>
												<option value="97" style="color: rgb(0, 79, 0);">ISK</option>
												<option value="98" style="color: rgb(0, 79, 0);" selected="">Rs.
												</option>
												<option value="99" style="color: rgb(0, 79, 0);">IDR</option>
												<option value="100" style="color: rgb(0, 79, 0);">IRR</option>
												<option value="101" style="color: rgb(0, 79, 0);">IQD</option>
												<option value="102" style="color: rgb(0, 79, 0);">EUR</option>
												<option value="103" style="color: rgb(0, 79, 0);">ILS</option>
												<option value="104" style="color: rgb(0, 79, 0);">EUR</option>
												<option value="105" style="color: rgb(0, 79, 0);">XOF</option>
												<option value="106" style="color: rgb(0, 79, 0);">JMD</option>
												<option value="107" style="color: rgb(0, 79, 0);">JPY</option>
												<option value="108" style="color: rgb(0, 79, 0);">JOD</option>
												<option value="109" style="color: rgb(0, 79, 0);">KZT</option>
												<option value="110" style="color: rgb(0, 79, 0);">KES</option>
												<option value="111" style="color: rgb(0, 79, 0);">AUD</option>
												<option value="112" style="color: rgb(0, 79, 0);">KPW</option>
												<option value="113" style="color: rgb(0, 79, 0);">KRW</option>
												<option value="114" style="color: rgb(0, 79, 0);">KWD</option>
												<option value="115" style="color: rgb(0, 79, 0);">KGS</option>
												<option value="116" style="color: rgb(0, 79, 0);">LAK</option>
												<option value="117" style="color: rgb(0, 79, 0);">LVL</option>
												<option value="118" style="color: rgb(0, 79, 0);">LBP</option>
												<option value="119" style="color: rgb(0, 79, 0);">LSL</option>
												<option value="120" style="color: rgb(0, 79, 0);">LRD</option>
												<option value="121" style="color: rgb(0, 79, 0);">LYD</option>
												<option value="122" style="color: rgb(0, 79, 0);">CHF</option>
												<option value="123" style="color: rgb(0, 79, 0);">LTL</option>
												<option value="124" style="color: rgb(0, 79, 0);">EUR</option>
												<option value="125" style="color: rgb(0, 79, 0);">MOP</option>
												<option value="126" style="color: rgb(0, 79, 0);">MKD</option>
												<option value="127" style="color: rgb(0, 79, 0);">MGF</option>
												<option value="128" style="color: rgb(0, 79, 0);">MWK</option>
												<option value="129" style="color: rgb(0, 79, 0);">MYR</option>
												<option value="130" style="color: rgb(0, 79, 0);">MVR</option>
												<option value="131" style="color: rgb(0, 79, 0);">XOF</option>
												<option value="132" style="color: rgb(0, 79, 0);">MTL</option>
												<option value="133" style="color: rgb(0, 79, 0);">USD</option>
												<option value="134" style="color: rgb(0, 79, 0);">EUR</option>
												<option value="135" style="color: rgb(0, 79, 0);">MRO</option>
												<option value="136" style="color: rgb(0, 79, 0);">MUR</option>
												<option value="137" style="color: rgb(0, 79, 0);">EUR</option>
												<option value="138" style="color: rgb(0, 79, 0);">MXN</option>
												<option value="139" style="color: rgb(0, 79, 0);">USD</option>
												<option value="140" style="color: rgb(0, 79, 0);">MDL</option>
												<option value="141" style="color: rgb(0, 79, 0);">EUR</option>
												<option value="142" style="color: rgb(0, 79, 0);">MNT</option>
												<option value="143" style="color: rgb(0, 79, 0);">XCD</option>
												<option value="144" style="color: rgb(0, 79, 0);">MAD</option>
												<option value="145" style="color: rgb(0, 79, 0);">MZM</option>
												<option value="146" style="color: rgb(0, 79, 0);">MMK</option>
												<option value="147" style="color: rgb(0, 79, 0);">NAD</option>
												<option value="148" style="color: rgb(0, 79, 0);">AUD</option>
												<option value="149" style="color: rgb(0, 79, 0);">NPR</option>
												<option value="150" style="color: rgb(0, 79, 0);">EUR</option>
												<option value="151" style="color: rgb(0, 79, 0);">ANG</option>
												<option value="152" style="color: rgb(0, 79, 0);">XPF</option>
												<option value="153" style="color: rgb(0, 79, 0);">NZD</option>
												<option value="154" style="color: rgb(0, 79, 0);">NIC</option>
												<option value="155" style="color: rgb(0, 79, 0);">XOF</option>
												<option value="156" style="color: rgb(0, 79, 0);">NGN</option>
												<option value="157" style="color: rgb(0, 79, 0);">NZD</option>
												<option value="158" style="color: rgb(0, 79, 0);">AUD</option>
												<option value="159" style="color: rgb(0, 79, 0);">USD</option>
												<option value="160" style="color: rgb(0, 79, 0);">NOK</option>
												<option value="161" style="color: rgb(0, 79, 0);">OMR</option>
												<option value="162" style="color: rgb(0, 79, 0);">PKR</option>
												<option value="163" style="color: rgb(0, 79, 0);">USD</option>
												<option value="164" style="color: rgb(0, 79, 0);">PAB</option>
												<option value="165" style="color: rgb(0, 79, 0);">PGK</option>
												<option value="166" style="color: rgb(0, 79, 0);">PYG</option>
												<option value="167" style="color: rgb(0, 79, 0);">PEN</option>
												<option value="168" style="color: rgb(0, 79, 0);">PHP</option>
												<option value="169" style="color: rgb(0, 79, 0);">NZD</option>
												<option value="170" style="color: rgb(0, 79, 0);">PLZ</option>
												<option value="171" style="color: rgb(0, 79, 0);">EUR</option>
												<option value="172" style="color: rgb(0, 79, 0);">USD</option>
												<option value="173" style="color: rgb(0, 79, 0);">QAR</option>
												<option value="174" style="color: rgb(0, 79, 0);">EUR</option>
												<option value="175" style="color: rgb(0, 79, 0);">ROL</option>
												<option value="176" style="color: rgb(0, 79, 0);">RUR</option>
												<option value="177" style="color: rgb(0, 79, 0);">RWF</option>
												<option value="178" style="color: rgb(0, 79, 0);">GBP</option>
												<option value="179" style="color: rgb(0, 79, 0);">XCD</option>
												<option value="180" style="color: rgb(0, 79, 0);">XCD</option>
												<option value="181" style="color: rgb(0, 79, 0);">XCD</option>
												<option value="182" style="color: rgb(0, 79, 0);">WST</option>
												<option value="183" style="color: rgb(0, 79, 0);">ITL</option>
												<option value="184" style="color: rgb(0, 79, 0);">STD</option>
												<option value="185" style="color: rgb(0, 79, 0);">SAR</option>
												<option value="186" style="color: rgb(0, 79, 0);">XOF</option>
												<option value="187" style="color: rgb(0, 79, 0);">SCR</option>
												<option value="188" style="color: rgb(0, 79, 0);">SLL</option>
												<option value="189" style="color: rgb(0, 79, 0);">SGD</option>
												<option value="190" style="color: rgb(0, 79, 0);">SKK</option>
												<option value="191" style="color: rgb(0, 79, 0);">SIT</option>
												<option value="192" style="color: rgb(0, 79, 0);">SOD</option>
												<option value="193" style="color: rgb(0, 79, 0);">ZAR</option>
												<option value="194" style="color: rgb(0, 79, 0);">EUR</option>
												<option value="195" style="color: rgb(0, 79, 0);">LKR</option>
												<option value="196" style="color: rgb(0, 79, 0);">SHP</option>
												<option value="197" style="color: rgb(0, 79, 0);">EUR</option>
												<option value="198" style="color: rgb(0, 79, 0);">SDD</option>
												<option value="199" style="color: rgb(0, 79, 0);">SRG</option>
												<option value="200" style="color: rgb(0, 79, 0);">NOK</option>
												<option value="201" style="color: rgb(0, 79, 0);">SZL</option>
												<option value="202" style="color: rgb(0, 79, 0);">SEK</option>
												<option value="203" style="color: rgb(0, 79, 0);">CHF</option>
												<option value="204" style="color: rgb(0, 79, 0);">SYP</option>
												<option value="205" style="color: rgb(0, 79, 0);">TWD</option>
												<option value="206" style="color: rgb(0, 79, 0);">TJR</option>
												<option value="207" style="color: rgb(0, 79, 0);">TZS</option>
												<option value="208" style="color: rgb(0, 79, 0);">THB</option>
												<option value="209" style="color: rgb(0, 79, 0);">XOF</option>
												<option value="210" style="color: rgb(0, 79, 0);">NZD</option>
												<option value="211" style="color: rgb(0, 79, 0);">TOP</option>
												<option value="212" style="color: rgb(0, 79, 0);">TTD</option>
												<option value="213" style="color: rgb(0, 79, 0);">TND</option>
												<option value="214" style="color: rgb(0, 79, 0);">TRL</option>
												<option value="215" style="color: rgb(0, 79, 0);">TMM</option>
												<option value="216" style="color: rgb(0, 79, 0);">USD</option>
												<option value="217" style="color: rgb(0, 79, 0);">AUD</option>
												<option value="218" style="color: rgb(0, 79, 0);">UGS</option>
												<option value="219" style="color: rgb(0, 79, 0);">UAG</option>
												<option value="220" style="color: rgb(0, 79, 0);">AED</option>
												<option value="221" style="color: rgb(0, 79, 0);">GBP</option>
												<option value="222" style="color: rgb(0, 79, 0);">USD</option>
												<option value="223" style="color: rgb(0, 79, 0);">UYP</option>
												<option value="224" style="color: rgb(0, 79, 0);">UZS</option>
												<option value="225" style="color: rgb(0, 79, 0);">VUV</option>
												<option value="226" style="color: rgb(0, 79, 0);">EUR</option>
												<option value="227" style="color: rgb(0, 79, 0);">VUB</option>
												<option value="228" style="color: rgb(0, 79, 0);">VND</option>
												<option value="229" style="color: rgb(0, 79, 0);">USD</option>
												<option value="230" style="color: rgb(0, 79, 0);">XPF</option>
												<option value="231" style="color: rgb(0, 79, 0);">MAD</option>
												<option value="232" style="color: rgb(0, 79, 0);">YER</option>
												<option value="233" style="color: rgb(0, 79, 0);">YUN</option>
												<option value="234" style="color: rgb(0, 79, 0);">CDF</option>
												<option value="235" style="color: rgb(0, 79, 0);">ZMK</option>
												<option value="236" style="color: rgb(0, 79, 0);">ZWD</option>
												<option value="237" style="color: rgb(0, 79, 0);">XAF</option>
											</select>
											<input type="text" placeholder="Enter Income" name="salary" id="salary"
												class="form-control" required>
										</div>
									</div>
								</div>
								<div class="text-start">
									<button type="submit" class="btn btn-primary submit">Continue</button>
								</div>
							</form>
							<form id="registration-form" class="form-5" style="display: none;">

								<div class="form-titles">
									<h2 class="mb-5 register-form-title">Register With Happylife</h2>
									<!-- <div class="form-logo">
										<img src="images/logo.png" width="164" height="50" alt="contact-form-logo">
									</div> -->
								</div>
								<div class="row">
									<div class="mb-3 col-sm-12 col-md-3 px-0">
										<label class="form-label">About Your son</label>
									</div>
									<div class="mb-3 col-sm-12 col-md-6">
										<div class="textbox-container position-relative">
											<textarea type="text" rows="8" name="help_me" class="form-control"
												required></textarea>
											<span class="position-absolute text-count"><b>No</b> Characters Typed</span>
											<a class="position-absolute help-me-text">Help me to write</a>
										</div>
									</div>
									<div class="mb-3 col-sm-12 col-md-3 px-0">
										<span>Write few words to get to know him/her better</span>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6 offset-md-3">
										<div class="text-start">
											<button type="submit" class="btn btn-primary submit">Complete</button>
										</div>
									</div>
								</div>
							</form>
							<form id="registration-form" class="form-inner-1" style="display: none;">

								<div class="form-titles">
									<h2 class="mb-5 register-form-title">Register With Happylife</h2>
									<!-- <div class="form-logo">
										<img src="images/logo.png" width="164" height="50" alt="contact-form-logo">
									</div> -->
								</div>
								<div class="row">
									<div class="mb-3 col-sm-12 col-md-12">
										<div class="text-message-container text-center">
											<p>You have successfully registered with TAMIL THIRUMANAM</p>
											<p>Your TAMIL THIRUMANAM ID is <span class="reg-id"></span></p>
											<div class="checkbox-container">
												<div class="form-check position-relative">
													<input class="form-check-input" type="checkbox" value="yes"
														name="keep_logged_in" id="flexCheckDefault">
													<label class="form-check-label" for="flexCheckDefault">
														Keep me logged in(recommended). Stay logged in always with
														<a>Tamilthirumanam.com</a>
													</label>
												</div>
											</div>
											<h2>Verify your mobile number</h2>
											<p>You will receive a 6-digit confirmation code via SMS to <span class="get-phone"></span>(<a class="edit_phone">Edit</a>)</p>
											<div class="col-md-6 offset-md-3 d-md-flex mb-2">
												<input type="text" class="form-control" name="otp" id="otp">
												<button type="submit" class="btn btn-primary otp-btn">Verify
													OTP</button>
											</div>
											<p>Didn’t receive code yet? <a>Resend code</a></p>
										</div>
									</div>
								</div>
							</form>
							<form id="registration-form" class="form-inner-2" style="display: none;">

								<div class="form-titles">
									<h2 class="mb-5 register-form-title">Register With Happylife</h2>
									<!-- <div class="form-logo">
										<img src="images/logo.png" width="164" height="50" alt="contact-form-logo">
									</div> -->
								</div>
								<div class="row">
									<div class="mb-3 col-sm-12 col-md-12">
										<div class="pay-now-container active" id="list-tab-1">
											<h3>Pay now to contact matches</h3>
											<p>Send unlimited messages and chat , view 15 verified mobile numbers</p>
											<p>Check compatibility with matches by viewing unlimited horoscopes</p>
											<p><s>View and contact ID verified 30 matches with photos from exclusive
													prime section</s></p>
											<p><s>Priority customers service helpline</s>Priority customers service
												helpline</p>
											<p><s>Get better visibility and responses from matches with one month
													profile highlighter</s></p>
										</div>
										<div class="pay-now-container" id="list-tab-2">
											<h3>Pay now to contact matches</h3>
											<p>Send unlimited messages and chat , view 15 verified mobile numbers</p>
											<p>Check compatibility with matches by viewing unlimited horoscopes</p>
											<p>View and contact ID verified 30 matches with photos from exclusive prime
												section
											<p>Priority customers service helpline</p>
											<p><s>Get better visibility and responses from matches with one month
													profile highlighter</s></p>
										</div>
										<div class="pay-now-container" id="list-tab-3">
											<h3>Pay now to contact matches</h3>
											<p>Send unlimited messages and chat , view 15 verified mobile numbers</p>
											<p>Check compatibility with matches by viewing unlimited horoscopes</p>
											<p>View and contact ID verified 30 matches with photos from exclusive prime
												section
											<p>Priority customers service helpline</p>
											<p>Get better visibility and responses from matches with one month profile
												highlighter</p>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-12 col-lg-4">
										<a class="categories-link active" data-target="list-tab-1">
											<div class="categories-inner-section">
												<p>Smart 6</p>
												<p>50 Contacts</p>
												<p>₹ 1,000/-</p>
												<p><s>₹ 3000/-</s></p>
												<p>Payable amount:₹ 1000/-</p>
												<p>(Inclusive of GST)</p>
												<p>Valid for 6 Months.</p>
											</div>
										</a>
									</div>
									<div class="col-sm-12 col-md-12 col-lg-4">
										<a class="categories-link" data-target="list-tab-2">
											<div class="categories-inner-section">
												<p>Smart 9</p>
												<p>100 Contacts</p>
												<p>₹ 3,000/-</p>
												<p><s>₹ 6000/-</s></p>
												<p>Payable amount:₹ 3000/-</p>
												<p>(Inclusive of GST)</p>
												<p>Valid for 9 Months.</p>
											</div>
										</a>
									</div>
									<div class="col-sm-12 col-md-12 col-lg-4">
										<a class="categories-link" data-target="list-tab-3">
											<div class="categories-inner-section">
												<p>Personalized Scheme</p>
												<p style="font-size: 0;">&nbsp;</p>
												<p>₹ 10,000/-</p>
												<p><s>₹ 20000/-</s></p>
												<p>Payable amount:₹ 10000/-</p>
												<p>(Inclusive of GST)</p>
												<p>Valid for 6 Months.</p>
											</div>
										</a>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6 offset-md-3">
										<div class="text-start">
											<button type="submit" class="btn btn-primary submit">Pay Now</button>
										</div>
									</div>
								</div>
							</form>
							<form id="registration-form" class="form-inner-3 active" style="display: none;" action="upload.php" method="post" enctype="multipart/form-data">

								<div class="form-titles">
									<h2 class="mb-5 register-form-title">Register With Happylife</h2>
									<!-- <div class="form-logo">
										<img src="images/logo.png" width="164" height="50" alt="contact-form-logo">
									</div> -->
								</div>
								<div class="row">
									<h3 class="sub-form-title">Add a minimum of 3 photos to ensure your profile gets
										featured on top of the search results.</h3>
									<div class="col-sm-12 col-md-6">
										<div class="img-container">
											<img src="images/upload-photo.png" class="img-fluid w-75">
										</div>
									</div>
									<div class="col-sm-12 col-md-6">
										<div class="btn-container">
											<div class="input-group custom-file-button">
												<label class="input-group-text" for="fileToUpload">Your Custom Text</label>
												<input type="file" name="fileToUpload[]" id="fileToUpload" multiple>
											</div>
											<p>image size 15MB, jpeg/gif/png/bmp</p>
										</div>
										<div class="social-container position-relative">
											<ul>
												<li>
													<a><span>WhatsApp your photos to and we will upload them
															instantly</span></a>
												</li>
												<li>
													<a><span>Select photos</span> from your Facebook account
														(We'll never post anything on your wall)</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-9 offset-md-3">
										<div class="text-start">
											<button type="submit" name="file_upload" class="btn btn-primary submit" name="Upload">Continue</button>
											<button type="button" class="btn btn-primary later">I'll do this
												later</button>
										</div>
									</div>
								</div>
							</form>
							<form id="registration-form" class="form-inner-4" style="display: none;">

								<div class="form-titles">
									<h2 class="mb-5 register-form-title">Register With Happylife</h2>
									<!-- <div class="form-logo">
										<img src="images/logo.png" width="164" height="50" alt="contact-form-logo">
									</div> -->
								</div>
								<div class="row">
									<h3 class="sub-form-title">Are you sure?</h3>
									<div class="col-sm-12 col-md-12">
										<div class="model-container">
											<p>If you don't upload your photo now, potential matches may not contact
												you.</p>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-9 offset-md-3">
										<div class="text-start">
											<button type="submit" class="btn btn-primary less-response">I am Fine With
												Less Responses</button>
											<button type="button" class="btn btn-primary add-photo">Let Me Add My
												Photo</button>
										</div>
									</div>
								</div>
							</form>
							<form id="registration-form" class="form-6" style="display: none;">

								<div class="form-titles">
									<h2 class="mb-5 register-form-title">Register With Happylife</h2>
									<!-- <div class="form-logo">
										<img src="images/logo.png" width="164" height="50" alt="contact-form-logo">
									</div> -->
									<h3 class="sub-form-title mb-5">Basic Information</h3>
								</div>
								<div class="row">
									<div class="mb-3 col-sm-12 col-md-3 px-0">
										<label class="form-label text-end d-block">Body Type</label>
									</div>
									<div class="mb-3 col-sm-12 col-md-6">
										<div class="radio-section">
											<ul class="register-radio-list">
												<li>
													<input type="radio" id="body_type1" name="body_type" value="slim"
														required />
													<label>Slim</label>
												</li>
												<li>
													<input type="radio" id="body_type2" name="body_type" value="average"
														required />
													<label>Average</label>
												</li>
												<li>
													<input type="radio" id="body_type3" name="body_type"
														value="athletic" required />
													<label>Athletic</label>
												</li>
												<li>
													<input type="radio" id="body_type4" name="body_type" value="heavy"
														required />
													<label>Heavy</label>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-3 px-0">
										<label class="form-label text-end d-block">Weight</label>
									</div>
									<div class="col-sm-12 col-md-6">
										<div class="label-outer position-relative">
											<select type="text" class="form-control" name="weight" id="weight" required>
												<option value="">Select</option>
												<option>50kg</option>
												<option>55kg</option>
												<option>60kg</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-3 px-0">
										<label class="form-label text-end d-block">College / Institution</label>
									</div>
									<div class="col-sm-12 col-md-6">
										<input type="text" class="form-control" name="college" id="college" required>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-3 px-0">
										<label class="form-label text-end d-block">Organisation</label>
									</div>
									<div class="col-sm-12 col-md-6">
										<input type="text" class="form-control" name="organisation" id="organisation"
											required>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6 offset-md-3">
										<div class="text-start">
											<button type="submit" class="btn btn-primary submit">Continue</button>
										</div>
									</div>
								</div>
							</form>
							<form id="registration-form" class="form-7" style="display: none;">

								<div class="form-titles">
									<h2 class="mb-5 register-form-title">Register With Happylife</h2>
									<!-- <div class="form-logo">
										<img src="images/logo.png" width="164" height="50" alt="contact-form-logo">
									</div> -->
									<h3 class="sub-form-title mb-5">LifeStyle Info</h3>
								</div>
								<div class="row">
									<div class="mb-3 col-sm-12 col-md-3 px-0">
										<label class="form-label text-end d-block">Eating Habit</label>
									</div>
									<div class="mb-3 col-sm-12 col-md-9">
										<div class="radio-section">
											<ul class="register-radio-list">
												<li>
													<input type="radio" id="eating_habit1" name="eating_habit"
														value="vegetarian" required />
													<label>Vegetarian</label>
												</li>
												<li>
													<input type="radio" id="eating_habit2" name="eating_habit"
														value="non_vegetarian" required />
													<label>Non-Vegetarian</label>
												</li>
												<li>
													<input type="radio" id="eating_habit3" name="eating_habit"
														value="eggetarian" required />
													<label>Eggetarian</label>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="mb-3 col-sm-12 col-md-3 px-0">
										<label class="form-label text-end d-block">Drinking Habit</label>
									</div>
									<div class="mb-3 col-sm-12 col-md-9">
										<div class="radio-section">
											<ul class="register-radio-list">
												<li>
													<input type="radio" id="drinking_habit1" name="drinking_habit"
														value="no" required />
													<label>No</label>
												</li>
												<li>
													<input type="radio" id="drinking_habit2" name="drinking_habit"
														value="drinks_socially" required />
													<label>Drinks Socially</label>
												</li>
												<li>
													<input type="radio" id="drinking_habit3" name="drinking_habit"
														value="yes" required />
													<label>Yes</label>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="mb-3 col-sm-12 col-md-3 px-0">
										<label class="form-label text-end d-block">Smoking Habit</label>
									</div>
									<div class="mb-3 col-sm-12 col-md-9">
										<div class="radio-section">
											<ul class="register-radio-list">
												<li>
													<input type="radio" id="smoking_habit1" name="smoking_habit"
														value="no" required />
													<label>No</label>
												</li>
												<li>
													<input type="radio" id="smoking_habit2" name="smoking_habit"
														value="occasionally" required />
													<label>Occasionally</label>
												</li>
												<li>
													<input type="radio" id="smoking_habit3" name="smoking_habit"
														value="yes" required />
													<label>Yes</label>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="form-titles">
									<h3 class="sub-form-title mb-5">Religion Information</h3>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-3 px-0">
										<label class="form-label text-end d-block">Star</label>
									</div>
									<div class="col-sm-12 col-md-9">
										<div class="label-outer position-relative">
											<select type="text" class="form-control" name="star" id="star" required>
												<option value="">Select</option>
												<option>Kettai</option>
												<option>Rohini</option>
												<option>Uthrattadhi</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-3 px-0">
										<label class="form-label text-end d-block">Raasi</label>
									</div>
									<div class="col-sm-12 col-md-9">
										<div class="label-outer position-relative">
											<select type="text" class="form-control" name="raasi" id="raasi" required>
												<option value="">Select</option>
												<option>Scorpio</option>
												<option>Leo</option>
												<option>Libra</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6 offset-md-3">
										<div class="text-start">
											<button type="submit" class="btn btn-primary submit">Continue</button>
										</div>
									</div>
								</div>
							</form>
							<form id="registration-form" class="form-8" style="display: none;">

								<div class="form-titles">
									<h2 class="mb-5 register-form-title">Register With Happylife</h2>
									<!-- <div class="form-logo">
										<img src="images/logo.png" width="164" height="50" alt="contact-form-logo">
									</div> -->
									<h3 class="sub-form-title mb-5">Horoscope Details<span
											class="fs-6 text-grey">(Strongly recommended for better responses)</span>
									</h3>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-3 px-0">
										<label class="form-label text-end d-block">Place of Birth</label>
									</div>
									<div class="col-sm-12 col-md-9">
										<div class="label-outer position-relative mb-2">
											<select type="text" class="form-control" name="born_country"
												id="born_country" required>
												<option value="">Select</option>
												<option>Singapore</option>
												<option>India</option>
												<option>USA</option>
											</select>
										</div>
										<div class="label-outer position-relative mb-2">
											<select type="text" class="form-control" name="born_state" id="born_state"
												required>
												<option value="">Select</option>
												<option>State 1</option>
												<option>State 2</option>
												<option>State 3</option>
											</select>
										</div>
										<div class="label-outer position-relative mb-2">
											<select type="text" class="form-control" name="born_city" id="born_city"
												required>
												<option value="">Select</option>
												<option>City 1</option>
												<option>City 2</option>
												<option>City 3</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-3 px-0">
										<label class="form-label text-end d-block">Time Correction</label>
									</div>
									<div class="col-sm-12 col-md-9">
										<div class="label-outer position-relative">
											<select type="text" class="form-control" name="std_time" id="std_time"
												required>
												<option value="">Select</option>
												<option>SGT</option>
												<option>IST</option>
												<option>EST</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6 offset-md-3">
										<div class="text-start">
											<button type="submit" class="btn btn-primary submit">Continue</button>
										</div>
									</div>
								</div>
							</form>
							<form id="registration-form" class="form-9" style="display: none;">

								<div class="form-titles">
									<h2 class="mb-5 register-form-title">Register With Happylife</h2>
									<!-- <div class="form-logo">
										<img src="images/logo.png" width="164" height="50" alt="contact-form-logo">
									</div> -->
									<h3 class="sub-form-title mb-5">Family Information</h3>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-3 px-0">
										<label class="form-label text-end d-block">Father's Status</label>
									</div>
									<div class="col-sm-12 col-md-9">
										<div class="label-outer position-relative mb-2">
											<select type="text" class="form-control" name="father_status"
												id="father_status" required>
												<option value="">Select</option>
												<option>Status 1</option>
												<option>Status 2</option>
												<option>Status 3</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-3 px-0">
										<label class="form-label text-end d-block">Mother's Status</label>
									</div>
									<div class="col-sm-12 col-md-9">
										<div class="label-outer position-relative mb-2">
											<select type="text" class="form-control" name="mothers_status"
												id="mothers_status" required>
												<option value="">Select</option>
												<option>Status 1</option>
												<option>Status 2</option>
												<option>Status 3</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-3 px-0">
										<label class="form-label text-end d-block">Brothers</label>
									</div>
									<div class="col-sm-12 col-md-5">
										<div class="label-outer position-relative mb-2">
											<select type="text" class="form-control" name="no_of_brothers"
												id="no_of_brothers" required>
												<option value="">No of Brothers</option>
												<option>1</option>
												<option>2</option>
												<option>3</option>
											</select>
										</div>
									</div>
									<div class="col-sm-12 col-md-4">
										<div class="label-outer position-relative mb-2">
											<select type="text" class="form-control" name="brothers_married"
												id="brothers_married" required>
												<option value="">Brothers Married</option>
												<option>1</option>
												<option>2</option>
												<option>3</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-3 px-0">
										<label class="form-label text-end d-block">Sisters</label>
									</div>
									<div class="col-sm-12 col-md-5">
										<div class="label-outer position-relative mb-2">
											<select type="text" class="form-control" name="no_of_sisters"
												id="no_of_sisters" required>
												<option value="">No of Sisters</option>
												<option>1</option>
												<option>2</option>
												<option>3</option>
											</select>
										</div>
									</div>
									<div class="col-sm-12 col-md-4">
										<div class="label-outer position-relative mb-2">
											<select type="text" class="form-control" name="sisters_married"
												id="sisters_married" required>
												<option value="">Sisters Married</option>
												<option>1</option>
												<option>2</option>
												<option>3</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="mb-3 col-sm-12 col-md-3 px-0">
										<label class="form-label text-end d-block">Family Location</label>
									</div>
									<div class="mb-3 col-sm-12 col-md-9">
										<div class="radio-section">
											<ul class="register-radio-list">
												<li>
													<input type="radio" id="same_as_my_location1" name="family_location"
														value="same_as_my_location" required />
													<label>Same as my Location</label>
												</li>
												<li>
													<input type="radio" id="same_as_my_location2" name="family_location"
														value="different_location" required />
													<label>Different Location</label>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-3 px-0">
										<label class="form-label text-end d-block">Parent's Contact No.</label>
									</div>
									<div class="col-sm-12 col-md-5">
										<div class="label-outer position-relative mb-2">
											<select type="text" class="form-control" name="parent_country"
												id="parent_country" required>
												<option value="">country</option>
												<option>India</option>
												<option>USA</option>
												<option>Singapore</option>
											</select>
										</div>
									</div>
									<div class="col-sm-12 col-md-4">
										<input type="text" class="form-control" name="parent_mobile" id="parent_mobile">
									</div>
								</div>
								<div class="row">
									<div class="col-md-6 offset-md-3">
										<div class="text-start">
											<button type="submit" class="btn btn-primary submit">Continue</button>
										</div>
									</div>
								</div>
							</form>
							<form id="registration-form" class="form-10 position-relative" style="display: none;">

								<div class="form-titles">
									<h2 class="mb-5 register-form-title">Register With Happylife</h2>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-3">
										<label>Ancestral Origin</label>
									</div>
									<div class="col-sm-12 col-md-9">
										<input type="text" class="form-control" name="anches_origin" id="anches_origin">
									</div>
								</div>
								<div class="row">
									<div class="col-md-6 offset-md-3">
										<div class="text-start">
											<button type="submit" class="btn btn-primary submit">Complete
												Profile</button>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6 offset-md-3">
										<div class="text-start">
											<button type="button"
												class="btn btn-primary position-absolute later-button">I'll do this
												later</button>
										</div>
									</div>
								</div>
							</form>
							<form id="registration-form" class="form-11 position-relative" style="display: none;">

								<div class="form-titles">
									<h2 class="mb-5 register-form-title">Register With Happylife</h2>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-12">
										<div class="hobbies-list-container">
											<ul class="hobbies-list">
												<li>
													<a>Hobbies & Interests</a>
												</li>
												<li>
													<a>Music</a>
												</li>
												<li>
													<a>Reading</a>
												</li>
												<li>
													<a>Movie and TV shows</a>
												</li>
												<li>
													<a>Sports and Fitness</a>
												</li>
												<li>
													<a>Food</a>
												</li>
												<li>
													<a>Spoken Languages</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="row">

									<div class="mb-3 col-sm-12 col-md-12 px-0">
										<h3 class="sub-form-title my-5 px-2">Choose your hobbies & interests</label>
									</div>
									<div class="mb-3 col-sm-12 col-md-4">
										<div class="radio-section">
											<ul class="register-radio-list">
												<li>
													<input type="radio" name="hobbies" value="acting" required />
													<label>Acting</label>
												</li>
												<li>
													<input type="radio" name="hobbies" value="art_handicraft"
														required />
													<label>Art / Handicraft</label>
												</li>
												<li>
													<input type="radio" name="hobbies" value="bike_car_enthusiast"
														required />
													<label>Bike / car Enthusiast</label>
												</li>
												<li>
													<input type="radio" name="hobbies" value="heavy" required />
													<label>Heavy</label>
												</li>
											</ul>
										</div>
									</div>
									<div class="mb-3 col-sm-12 col-md-4">
										<div class="radio-section">
											<ul class="register-radio-list">
												<li>
													<input type="radio" name="hobbies" value="adventure_sports"
														required />
													<label>Adventure Sports</label>
												</li>
												<li>
													<input type="radio" name="hobbies" value="astrology" required />
													<label>Astrology</label>
												</li>
												<li>
													<input type="radio" name="hobbies" value="bird_watching" required />
													<label>Bird watching</label>
												</li>
												<li>
													<input type="radio" name="hobbies" value="book-clubs" required />
													<label>Book Clubs</label>
												</li>
											</ul>
										</div>
									</div>
									<div class="mb-3 col-sm-12 col-md-4">
										<div class="radio-section">
											<ul class="register-radio-list">
												<li>
													<input type="radio" name="hobbies" value="alternative_healing"
														required />
													<label>Alternative healing</label>
												</li>
												<li>
													<input type="radio" name="hobbies" value="baking" required />
													<label>Baking</label>
												</li>
												<li>
													<input type="radio" id="body_type3" name="hobbies"
														value="video_blogging" required />
													<label>Video blogging</label>
												</li>
												<li>
													<input type="radio" id="body_type4" name="hobbies"
														value="calligraphy" required />
													<label>Calligraphy</label>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6 offset-md-3">
										<div class="text-start">
											<button type="submit" class="btn btn-primary submit">continue</button>
										</div>
									</div>
								</div>
							</form>
							<form id="registration-form" class="form-12" style="display: none;">

								<div class="form-titles">
									<h2 class="mb-5 register-form-title">Register With Happylife</h2>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-12">
										<h3 class="sub-form-title mb-3">Basic Preferences</h3>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-3">
										<label>Bride's Age</label>
									</div>
									<div class="col-sm-12 col-md-9">
										<div class="label-outer position-relative mb-2">
											<select type="text" class="form-control" name="match_age" id="match_age"
												required>
												<option value="">Select</option>
												<option>18 - 24 years</option>
												<option>25 - 29 years</option>
												<option>29 - 35 years</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-3">
										<label>Height</label>
									</div>
									<div class="col-sm-12 col-md-9">
										<div class="label-outer position-relative mb-2">
											<select type="text" class="form-control" name="match_height"
												id="match_height" required>
												<option value="">Select</option>
												<option>4ft - 4.5ft</option>
												<option>4.6ft - 5ft</option>
												<option>5ft - 6ft</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-3">
										<label>Marital Status</label>
									</div>
									<div class="col-sm-12 col-md-9">
										<div class="label-outer position-relative mb-2">
											<select type="text" class="form-control" name="match_marital"
												id="match_marital" required>
												<option value="">Select</option>
												<option>Married</option>
												<option>Never Married</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-3">
										<label>Mother Tongue</label>
									</div>
									<div class="col-sm-12 col-md-9">
										<div class="label-outer position-relative mb-2">
											<select type="text" class="form-control" name="match_language"
												id="match_language" required>
												<option value="">Select</option>
												<option>Any</option>
												<option>Tamil</option>
												<option>Telugu</option>
												<option>Malayalam</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-3">
										<label>Physical Status</label>
									</div>
									<div class="col-sm-12 col-md-9">
										<div class="label-outer position-relative mb-2">
											<select type="text" class="form-control" name="match_physical_status"
												id="match_physical_status" required>
												<option value="">Select</option>
												<option>Normal</option>
												<option>Physically challenge</option>
												<option>Doesn't Matter</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-3">
										<label>Eating Habits</label>
									</div>
									<div class="col-sm-12 col-md-9">
										<div class="label-outer position-relative mb-2">
											<select type="text" class="form-control" name="match_eating_habits"
												id="match_eating_habits" required>
												<option value="">Select</option>
												<option>Vegetarian</option>
												<option>Non-Vegeterian</option>
												<option>Eggetarian</option>
												<option>Doesn't Matter</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-3">
										<label>Drinking Habits</label>
									</div>
									<div class="col-sm-12 col-md-9">
										<div class="label-outer position-relative mb-2">
											<select type="text" class="form-control" name="match_drinking_habits"
												id="match_drinking_habits" required>
												<option value="">Select</option>
												<option>Social</option>
												<option>Occational</option>
												<option>Doesn't Matter</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-3">
										<label>Smoking Habits</label>
									</div>
									<div class="col-sm-12 col-md-9">
										<div class="label-outer position-relative mb-2">
											<select type="text" class="form-control" name="match_smoking_habits"
												id="match_smoking_habits" required>
												<option value="">Select</option>
												<option>Occational</option>
												<option>Doesn't Matter</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6 offset-md-3">
										<div class="text-start">
											<button type="submit" class="btn btn-primary submit">continue</button>
										</div>
									</div>
								</div>
							</form>
							<form id="registration-form" class="form-13" style="display: none;">

								<div class="form-titles">
									<h2 class="mb-5 register-form-title">Register With Happylife</h2>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-12">
										<h3 class="sub-form-title mb-3">Religious Preferences</h3>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-3">
										<label>Bride's Age</label>
									</div>
									<div class="col-sm-12 col-md-9">
										<div class="label-outer position-relative mb-2">
											<select type="text" class="form-control" name="match_religion"
												id="match_religion" required>
												<option value="">Select</option>
												<option>Hindu</option>
												<option>Muslim</option>
												<option>Christian</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-3">
										<label>Height</label>
									</div>
									<div class="col-sm-12 col-md-9">
										<div class="label-outer position-relative mb-2">
											<select type="text" class="form-control" name="match_caste" id="match_caste"
												required>
												<option value="">Select</option>
												<option>Doestn't matter</option>
												<option>Pillai</option>
												<option>Naidu</option>
												<option>Mudaliyar</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-3">
										<label>Marital Status</label>
									</div>
									<div class="col-sm-12 col-md-9">
										<div class="label-outer position-relative mb-2">
											<select type="text" class="form-control" name="match_dosham"
												id="match_dosham" required>
												<option value="">Select</option>
												<option>Doesn't matter</option>
												<option>Dosham 1</option>
												<option>Dosham 2</option>
												<option>Dosham 3</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-3">
										<label>Mother Tongue</label>
									</div>
									<div class="col-sm-12 col-md-9">
										<div class="label-outer position-relative mb-2">
											<select type="text" class="form-control" name="match_star" id="match_star"
												required>
												<option value="">Select</option>
												<option>Any</option>
												<option>Kettai</option>
												<option>Rohini</option>
												<option>Uthratadhi</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6 offset-md-3">
										<div class="text-start">
											<button type="submit" class="btn btn-primary submit">continue</button>
										</div>
									</div>
								</div>
							</form>
							<form id="registration-form" class="form-14" style="display: none;">

								<div class="form-titles">
									<h2 class="mb-5 register-form-title">Register With Happylife</h2>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-12">
										<h3 class="sub-form-title mb-4">Professional Preferences</h3>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-3">
										<label>Education</label>
									</div>
									<div class="col-sm-12 col-md-9">
										<div class="label-outer position-relative mb-2">
											<select type="text" class="form-control" name="match_education"
												id="match_education" required>
												<option value="">Select</option>
												<option>Any</option>
												<option>MCA</option>
												<option>BE</option>
												<option>MBA</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-3">
										<label>Employed In</label>
									</div>
									<div class="col-sm-12 col-md-9">
										<div class="label-outer position-relative mb-2">
											<select type="text" class="form-control" name="match_employed_in"
												id="match_employed_in" required>
												<option value="">Select</option>
												<option>Any</option>
												<option>Government</option>
												<option>Private</option>
												<option>IT</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-3">
										<label>Occupation</label>
									</div>
									<div class="col-sm-12 col-md-9">
										<div class="label-outer position-relative mb-2">
											<select type="text" class="form-control" name="match_occupation"
												id="match_occupation" required>
												<option value="">Select</option>
												<option>Any</option>
												<option>Manager</option>
												<option>Trainee</option>
												<option>Senior Developer</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-3">
										<label>Annual Income</label>
									</div>
									<div class="col-sm-12 col-md-9">
										<div class="label-outer position-relative mb-2">
											<select type="text" class="form-control" name="annual_income"
												id="annual_income" required>
												<option value="">Select</option>
												<option>Any</option>
												<option>50000k - 100000k / month</option>
												<option>100000k - 150000k / month</option>
												<option>150000k - 200000k / month</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-12">
										<h3 class="sub-form-title my-4">Location Preferences</h3>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-3">
										<label>Country</label>
									</div>
									<div class="col-sm-12 col-md-9">
										<div class="label-outer position-relative mb-2">
											<select type="text" class="form-control" name="match_country"
												id="match_country" required>
												<option value="">Select</option>
												<option>Any</option>
												<option>Singapore</option>
												<option>USA</option>
												<option>India</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6 offset-md-3">
										<div class="text-start">
											<button type="submit" class="btn btn-primary submit">continue</button>
										</div>
									</div>
								</div>
							</form>
							<form id="registration-form" class="form-15" style="display: none;">

								<div class="form-titles">
									<h2 class="mb-5 register-form-title">Register With Happylife</h2>
									<!-- <div class="form-logo">
										<img src="images/logo.png" width="164" height="50" alt="contact-form-logo">
									</div> -->
								</div>
								<div class="row">
									<h3 class="sub-form-title">Are you sure?</h3>
									<div class="col-sm-12 col-md-12">
										<div class="model-container">
											<p>Specifying partner preferences will help you receive suitable matches.
											</p>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-9 offset-md-3">
										<div class="text-start">
											<button type="submit" class="btn btn-primary less-response">No
												Thanks</button>
											<button type="button" class="btn btn-primary add-preferences">Let Me Add
												Partner Preferences</button>
										</div>
									</div>
								</div>
							</form>
							<form id="registration-form" class="form-16" style="display: none;">

								<div class="form-titles">
									<h2 class="mb-5 register-form-title">Register With Happylife</h2>
									<!-- <div class="form-logo">
										<img src="images/logo.png" width="164" height="50" alt="contact-form-logo">
									</div> -->
								</div>
								<div class="row">
									<div class="mb-3 col-sm-12 col-md-12">
										<div class="text-message-container text-center">
											<h2>Verify your mobile number</h2>
											<p>You will receive a 6-digit confirmation code via SMS to 91695870(Edit)
											</p>
											<div class="col-md-6 offset-md-3 d-md-flex mb-2">
												<input type="text" class="form-control" name="otp" id="otp">
												<button type="submit" class="btn btn-primary otp-btn">Verify
													OTP</button>
											</div>
											<p>Didn’t receive code yet? <a>Resend code</a></p>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="footer">
			<div id="snackbar" style="display:block">Registration Successful!</div>
			<div class="container-fluid">
				<div class="row address-row py-4">
					<div class="col-sm-12 col-md-6 col-lg-3">
						<h3>Help & Support</h3>
						<div class="address pt-2">
							<div class="address-text">
								<a>My Happylife</a>
								<a href="schemes.html" class="custom-link">Categories</a>
								<a>Media</a>
								<a>Sitemap</a>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-3">
						<h3>Services</h3>
						<div class="address pt-2">
							<div class="address-text">
								<a>Happylife Profile</a>
								<a>Exclusive Happylife</a>
								<a>Mega Matrimony Magazine</a>
								<a>Wedding & Beyond</a>
								<a>Magazine</a>
								<a>Wedding Planners</a>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-3">
						<h3>Information</h3>
						<div class="address pt-2">
							<div class="address-text">
								<a>Wedding Fixed Today</a>
								<a>Success Stories</a>
								<a>Terms and conditions</a>
								<a>Privacy Policy</a>
								<a>Contact Us</a>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-3">
						<h3>Others</h3>
						<div class="address pt-2">
							<div class="address-text">
								<a>Thirumana Thiruthalangal</a>
								<a>Suggestion</a>
								<a>Report Abuse</a>
								<a>Advertise with us</a>
								<a>Events</a>
								<a>FAQ</a>
							</div>
						</div>
					</div>
				</div>
				<section>
        <div class="cr">
            <div class="container">
                <div class="row">
                    <p>Copyright © <span> 2024,All Rights Reserved.Powered by</span> <a href="http://purplesofts.com" class="purple-text">PURPLESOFTS Singapore</a></p>

                </div>
            </div>
        </div>
    </section>
			</div>
		</section>
	</div>
	<script src="https://code.jquery.com/jquery-3.7.1.min.js"
		integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"
		integrity="sha512-Ysw1DcK1P+uYLqprEAzNQJP+J4hTx4t/3X2nbVwszao8wD+9afLjBQYjz7Uk4ADP+Er++mJoScI42ueGtQOzEA=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"
		integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script src="script.js"></script>
	<script>
		$(document).ready(function () {
			if (localStorage.getItem('relation') == 'Profile Created By') {
				$('.change-text').text('Relative');
			}
			else if (localStorage.getItem('relation') == 'Parent') {
				$('.change-text').text('Child');
			}
			else if (localStorage.getItem('relation') == 'Others') {
				$('.change-text').text('Relative');
			}
			else if (localStorage.getItem('relation') == 'Self') {
				$('.change-text').text('');
			}
			else if (localStorage.getItem('gender') == 'Male') {
				if (localStorage.getItem('relation') == 'Brother') {
					$('.change-text').text('Brother');
				}
				if (localStorage.getItem('relation') == 'Sister') {
					$('.change-text').text('Brother');
				}
				if (localStorage.getItem('relation') == 'Friend') {
					$('.change-text').text('Friend');
				}
			}
			else if (localStorage.getItem('gender') == 'Female') {
				if (localStorage.getItem('relation') == 'Brother') {
					$('.change-text').text('Sister');
				}
				if (localStorage.getItem('relation') == 'Sister') {
					$('.change-text').text('Sister');
				}
				if (localStorage.getItem('relation') == 'Friend') {
					$('.change-text').text('Friend');
				}
			}
			else {
				$('.change-text').text(localStorage.getItem('relation'));
			}
			$('#dial_code').val(localStorage.getItem('dial-code'));
		});
	</script>
	<script
		src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js"></script>
	<div class="modal" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-black">Message</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<p class="text-black">Mail has been sent successfully</p>
				</div>
			</div>
		</div>
	</div>
</body>

</html>