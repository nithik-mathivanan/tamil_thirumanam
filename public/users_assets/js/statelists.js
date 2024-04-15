const data = {
      "Andhra Pradesh": {
    "Anantapur": ["Anantapur", "Hindupur", "Dharmavaram"],
    "Chittoor": ["Tirupati", "Chittoor", "Madanapalle"],
    "East Godavari": ["Rajahmundry", "Kakinada", "Amalapuram"],
    "Guntur": ["Guntur", "Tenali", "Narasaraopet"],
    "Kadapa": ["Kadapa", "Proddatur", "Rayachoti"],
    "Krishna": ["Vijayawada", "Machilipatnam", "Gannavaram"],
    "Kurnool": ["Kurnool", "Nandyal", "Adoni"],
    "Prakasam": ["Ongole", "Chirala", "Kandukur"],
    "Srikakulam": ["Srikakulam", "Tekkali", "Palasa"],
    "Visakhapatnam": ["Visakhapatnam", "Vizianagaram", "Anakapalle"],
    "Vizianagaram": ["Vizianagaram", "Bobilli", "Parvathipuram"],
    "West Godavari": ["Eluru", "Bhimavaram", "Tanuku"],
    "YSR Kadapa": ["Kadapa", "Proddatur", "Rayachoti"]
  },
  "Arunachal Pradesh": {
    "Tawang": ["Tawang Town", "Bomdila", "Dirang"],
    "West Kameng": ["Bhalukpong", "Bomdila", "Dirang"],
    "East Kameng": ["Seppa", "Bameng", "Chayang Tajo"],
    "Papum Pare": ["Itanagar", "Naharlagun", "Sagalee"],
    "Kurung Kumey": ["Koloriang", "Daporijo", "Sangram"],
    "Kra Daadi": ["Pania", "Yangte", "Gumli"],
    "Lower Subansiri": ["Ziro", "Raga", "Yachuli"],
    "Upper Subansiri": ["Daporijo", "Dumporijo", "Nacho"],
    "West Siang": ["Aalo", "Mechuka", "Tato"],
    "East Siang": ["Pasighat", "Ruksin", "Mebo"],
    "Siang": ["Tuting", "Geling", "Jengging"],
    "Upper Siang": ["Yingkiong", "Geku", "Mariyang"],
    "Lower Siang": ["Along", "Mechuka", "Tato"],
    "Lower Dibang Valley": ["Roing", "Anini", "Tezu"],
    "Dibang Valley": ["Anini", "Tezu", "Hayuliang"],
    "Lohit": ["Tezu", "Hayuliang", "Chowkham"],
    "Namsai": ["Namsai", "Chongkham", "Mahadevpur"],
    "Changlang": ["Changlang", "Kharsang", "Miao"],
    "Tirap": ["Khonsa", "Laju", "Deomali"],
    "Longding": ["Longding", "Pongchau", "Kanubari"],
    "Pakke Kessang": ["Seijosa", "Pakke Kessang", "Lumla", "Bhalukpong"],
    "Charaideo": ["Sonari", "Sapekhati", "Charaideo", "Nazira"],
    "Shi-Yomi": ["Tato", "Tirbin", "Mecha", "Geku", "Pidi"]
  },
  "Assam": {
    "Baksa": ["Barama", "Baksa", "Goreswar", "Tamulpur"],
    "Barpeta": ["Barpeta", "Sarthebari", "Bajali", "Barnagar"],
    "Biswanath": ["Biswanath Chariali", "Gohpur", "Behali", "Bihaguri"],
    "Bongaigaon": ["Bongaigaon", "North Bongaigaon", "Srijangram", "Bijni"],
    "Cachar": ["Silchar", "Lakhipur", "Sonai", "Katigorah"],
    "Charaideo": ["Sonari", "Sapekhati", "Charaideo", "Nazira"],
    "Chirang": ["Kokrajhar", "Gossaigaon", "Sapatgram", "Serfanguri"],
    "Darrang": ["Mangaldoi", "Dalgaon", "Kharupatia", "Pathorighat"],
    "Dhemaji": ["Dhemaji", "Silapathar", "Jonai", "Gogamukh"],
    "Dhubri": ["Dhubri", "Gauripur", "Bilasipara", "Golakganj"],
    "Dibrugarh": ["Dibrugarh", "Moranhat", "Lahowal", "Tingkhong"],
    "Dima Hasao": ["Haflong", "Umrangso", "Maibang", "Gunjung"],
    "Goalpara": ["Goalpara", "Dudhnoi", "Lakhipur", "Matia"],
    "Golaghat": ["Golaghat", "Bokakhat", "Sarupathar", "Barpathar"],
    "Hailakandi": ["Hailakandi", "Lala", "Katlicherra", "Algapur"],
    "Hojai": ["Hojai", "Lanka", "Doboka", "Lumding"],
    "Jorhat": ["Jorhat", "Mariani", "Teok", "Titabar"],
    "Kamrup": ["Chamaria", "Rangia", "North Guwahati", "Hajo"],
    "Kamrup Metropolitan": ["North Guwahati", "Dispur", "Bijaynagar", "Nalbari"],
    "Karbi Anglong": ["Diphu", "Bokajan", "Donkamokam", "Dokmoka"],
    "Karimganj": ["Karimganj", "Badarpur", "Patharkandi", "Ramkrishna Nagar"],
    "Kokrajhar": ["Kokrajhar", "Gossaigaon", "Sapatgram", "Serfanguri"],
    "Lakhimpur": ["North Lakhimpur", "Lakhipur", "Naharkatia", "Bihpuria"],
    "Majuli": ["Kamalabari", "Majuli", "Garamur", "Ujani Majuli"],
    "Morigaon": ["Morigaon", "Laharighat", "Bhuragaon", "Mayong"],
    "Nagaon": ["Nagaon", "Kampur", "Raha", "Dhing"],
    "Nalbari": ["Nalbari", "Bajali", "Barbhag", "Tihu"],
    "Sivasagar": ["Sivasagar", "Sonari", "Amguri", "Nazira"],
    "Sonitpur": ["Tezpur", "Biswanath Chariali", "Gohpur", "Dhekiajuli"],
    "South Salmara-Mankachar": ["Mankachar", "Dhubri", "South Salmara", "Dudhnai"],
    "Tinsukia": ["Tinsukia", "Digboi", "Doom Dooma", "Margherita"],
    "Udalguri": ["Tangla", "Udalguri", "Kalaigaon", "Harisinga"]
  },
  "Bihar": {
  "Araria": ["Araria", "Forbesganj", "Jokihat", "Narpatganj", "Sikti"],
  "Arwal": ["Arwal", "Kaler", "Kurtha", "Karpi", "Sonbhadra Banshi Suryapur"],
  "Aurangabad": ["Aurangabad", "Bodh Gaya", "Daudnagar", "Nabinagar", "Obra"],
  "Banka": ["Banka", "Amarpur", "Barahat", "Bausi", "Belhar"],
  "Begusarai": ["Begusarai", "Barauni", "Bachhwara", "Bakhri", "Balia"],
  "Bhagalpur": ["Bhagalpur", "Bihpur", "Colgong", "Gopalpur", "Ismailpur"],
  "Bhojpur": ["Ara", "Behea", "Chhapra", "Garhani", "Jagdishpur"],
  "Buxar": ["Buxar", "Chausa", "Dumraon", "Itarhi", "Kesath"],
  "Darbhanga": ["Darbhanga", "Bahadurpur", "Biraul", "Ghanshyampur", "Hanuman Nagar"],
  "East Champaran": ["Motihari", "Areraj", "Banjariya", "Bara Chakia", "Bankatwa"],
  "Gaya": ["Gaya", "Amas", "Atri", "Banke Bazar", "Belaganj"],
  "Gopalganj": ["Gopalganj", "Baikunthpur", "Bijaipur", "Kataiya", "Kuchai"],
  "Jamui": ["Jamui", "Chakai", "Gidhaur", "Khaira", "Lakshmipur"],
  "Jehanabad": ["Jehanabad", "Arwal", "Ghosi", "Kako", "Karahi"],
  "Kaimur": ["Bhabua", "Adhaura", "Bhabua", "Chainpur", "Chand"],
  "Katihar": ["Katihar", "Azamnagar", "Barari", "Barsoi", "Balrampur"],
  "Khagaria": ["Khagaria", "Bakhri", "Belhagachhia", "Chautham", "Dighi"],
  "Kishanganj": ["Kishanganj", "Bahadurganj", "Beldangi", "Bhargama", "Dighalbank"],
  "Lakhisarai": ["Lakhisarai", "Barahiya", "Halsi", "Kesaria", "Kundwa Chainpur"],
  "Madhepura": ["Madhepura", "Alinagar", "Basopatti", "Bihariganj", "Chausa"],
  "Madhubani": ["Madhubani", "Andhratharhi", "Babubarhi", "Benipatti", "Bisfi"],
  "Munger": ["Munger", "Asarganj", "Bariarpur", "Dharhara", "Jamalpur"],
  "Muzaffarpur": ["Muzaffarpur", "Aurai", "Bandra", "Baruraj", "Bochaha"],
  "Nalanda": ["Bihar Sharif", "Asthawan", "Barh", "Bena", "Bind"],
  "Nawada": ["Nawada", "Akbarpur", "Gobindpur", "Harnaut", "Hisua"],
  "Patna": ["Patna", "Barh", "Bakhtiarpur", "Belchhi", "Bihta"],
  "Purnia": ["Purnia", "Amour", "Baisi", "Banmankhi", "Bhawanipur"],
  "Rohtas": ["Sasaram", "Akorhi Gola", "Chenari", "Dawath", "Dehri"],
  "Saharsa": ["Saharsa", "Banma Itahari", "Feni", "Kahra", "Mahishi"],
  "Samastipur": ["Samastipur", "Bibhutipur", "Bithan", "Dalsinghsarai", "Dighorsara"],
  "Saran": ["Chapra", "Amnour", "Baniapur", "Ekma", "Ishupur"],
  "Sheikhpura": ["Sheikhpura", "Ariari", "Barbigha", "Chewara", "Ghat Kusumbha"],
  "Sheohar": ["Sheohar", "Bairgania", "Belsand", "Dumri Katsari", "Piprarhi"],
  "Sitamarhi": ["Sitamarhi", "Bairgania", "Bathnaha", "Belsand", "Dumra"],
  "Siwan": ["Siwan", "Andar", "Barharia", "Basantpur", "Bhagwanpur Hat"],
  "Supaul": ["Supaul", "Basantpur", "Bhaptiyahi", "Chhatapur", "Kishanpur"],
  "Vaishali": ["Hajipur", "Bidupur", "Bhagwanpur", "Chechari", "Desari"],
  "West Champaran": ["Bettiah", "Bagaha", "Bairia", "Bhitaha", "Bhitiharwa"]
},
"Tamil Nadu": {
  "Ariyalur": ["Ariyalur", "Jayankondam", "Andimadam", "Udayarpalayam", "Sendurai"],
  "Chengalpattu": ["Chengalpattu", "Tambaram", "Sriperumbudur", "Kancheepuram", "Tirukalukundram"],
  "Chennai": ["Chennai", "Ambattur", "Avadi", "Pallavaram", "Tambaram"],
  "Coimbatore": ["Coimbatore", "Pollachi", "Tiruppur", "Metupalayam", "Udhagamandalam"],
  "Cuddalore": ["Cuddalore", "Chidambaram", "Neyveli", "Panruti", "Virudhachalam"],
  "Dharmapuri": ["Dharmapuri", "Hosur", "Harur", "Krishnagiri", "Pennagaram"],
  "Dindigul": ["Dindigul", "Palani", "Oddanchatram", "Natham", "Nilakottai"],
  "Erode": ["Erode", "Gobichettipalayam", "Sathyamangalam", "Perundurai", "Bhavani"],
  "Kallakurichi": ["Kallakurichi", "Sankarapuram", "Chinnasalem", "Rishivandiyam", "Thiyagadurgam"],
  "Kancheepuram": ["Kancheepuram", "Sriperumbudur", "Chengalpattu", "Thiruporur", "Maduranthakam"],
  "Kanniyakumari": ["Nagercoil", "Padmanabhapuram", "Colachel", "Kulasekarapuram", "Thiruvattar"],
  "Karur": ["Karur", "Kulithalai", "Aravakurichi", "Kadavur", "Krishnarayapuram"],
  "Krishnagiri": ["Krishnagiri", "Hosur", "Denkanikottai", "Pochampalli", "Uthangarai"],
  "Madurai": ["Madurai", "Thirumangalam", "Usilampatti", "Vadipatti", "Melur"],
  "Mayiladuthurai": ["Mayiladuthurai", "Thiruvarur", "Sirkazhi", "Kuthalam", "Karaikal"],
  "Nagapattinam": ["Nagapattinam", "Mayiladuthurai", "Porayar", "Sirkazhi", "Thirukkuvalai"],
  "Namakkal": ["Namakkal", "Rasipuram", "Paramathi", "Thiruchengode", "Tiruchengodu"],
  "Nilgiris": ["Udhagamandalam", "Coonoor", "Gudalur", "Kotagiri", "Pandalur"],
  "Perambalur": ["Perambalur", "Alathur", "Veppanthattai", "Kunnam", "Veppur"],
  "Pudukkottai": ["Pudukkottai", "Aranthangi", "Illupur", "Gandarvakottai", "Karambakudi"],
  "Ramanathapuram": ["Ramanathapuram", "Paramakudi", "Kamuthi", "Mudukulathur", "Rameswaram"],
  "Ranipet": ["Ranipet", "Arcot", "Arani", "Tiruvannamalai", "Kanchipuram"],
  "Salem": ["Salem", "Attur", "Edappadi", "Mettur", "Omalur"],
  "Sivaganga": ["Sivaganga", "Karaikudi", "Manamadurai", "Sakkottai", "Devakottai"],
  "Tenkasi": ["Tenkasi", "Shenkottai", "Surandai", "Alangulam", "Puliyangudi"],
  "Thanjavur": ["Thanjavur", "Kumbakonam", "Thiruvaiyaru", "Pattukkottai", "Peravurani"],
  "Theni": ["Theni", "Periyakulam", "Bodinayakanur", "Cumbum", "Uthamapalayam"],
  "Thoothukudi": ["Thoothukudi", "Tiruchendur", "Kovilpatti", "Kayatharu", "Ottapidaram"],
  "Tiruchirappalli": ["Tiruchirappalli", "Lalgudi", "Manapparai", "Musiri", "Srirangam"],
  "Tirunelveli": ["Tirunelveli", "Ambasamudram", "Nanguneri", "Palayamkottai", "Sankarankoil"],
  "Tirupattur": ["Tirupattur", "Ambur", "Jolarpet", "Vaniyambadi", "Natrampalli"],
  "Tiruppur": ["Tiruppur", "Avanashi", "Dharapuram", "Kangeyam", "Palladam"],
  "Tiruvallur": ["Tiruvallur", "Ambattur", "Gummidipoondi", "Pallipattu", "Ponneri"],
  "Tiruvannamalai": ["Tiruvannamalai", "Arani", "Chengam", "Cheyyar", "Polur"],
  "Tiruvarur": ["Tiruvarur", "Koothanallur", "Mannargudi", "Nannilam", "Thiruthuraipoondi"],
  "Vellore": ["Vellore", "Arakkonam", "Arcot", "Gudiyatham", "Tirupathur"],
  "Viluppuram": ["Viluppuram", "Tindivanam", "Kallakkurichi", "Ulundurpet", "Gingee"],
  "Virudhunagar": ["Virudhunagar", "Aruppukkottai", "Rajapalayam", "Sattur", "Sivakasi"]
},
      
    };

    function filterDistricts() {
      const stateSelect = document.getElementById("state");
      const districtSelect = document.getElementById("district");
      const citySelect = document.getElementById("city");
      const pincodeSelect = document.getElementById("pincode");

      // Clear existing options
      districtSelect.innerHTML = "<option value=''>Select District</option>";
      citySelect.innerHTML = "<option value=''>Select City</option>";
      pincodeSelect.innerHTML = "<option value=''>Select Pincode</option>";

      const selectedState = stateSelect.value;
      const districts = data[selectedState];

      // Populate districts for the selected state
      for (const district in districts) {
        const option = document.createElement("option");
        option.text = district;
        option.value = district;
        districtSelect.add(option);
      }
    }

    function filterCities() {
      const stateSelect = document.getElementById("state");
      const districtSelect = document.getElementById("district");
      const citySelect = document.getElementById("city");
      const pincodeSelect = document.getElementById("pincode");

      // Clear existing options
      citySelect.innerHTML = "<option value=''>Select City</option>";
      pincodeSelect.innerHTML = "<option value=''>Select Pincode</option>";

      const selectedState = stateSelect.value;
      const selectedDistrict = districtSelect.value;
      const cities = data[selectedState][selectedDistrict];

      // Populate cities for the selected district
      cities.forEach(city => {
        const option = document.createElement("option");
        option.text = city;
        option.value = city;
        citySelect.add(option);
      });
    }

    function filterPincodes() {
      // You can implement this function similarly to filterCities
    }

