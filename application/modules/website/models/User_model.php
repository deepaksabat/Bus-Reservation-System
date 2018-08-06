<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

 public function user_info($email = null,$password = null){
		   $result=$this->db->select('*')->from('tkt_passenger')->where('email',$email)->where('password',$password)->get()->row();
		   if(!empty($result)){
		   	return true;
		   }else{
		   	return false;
		   }
	}
public function user_details(){
	    $email             = $this->session->userdata('email');
 		$password          = $this->session->userdata('password');
	 return $result=$this->db->select('a.*,b.*')
                     ->from('tkt_passenger a')
                     ->where('a.email',$email)
                     ->where('a.password',$password)
                     ->join('tkt_booking b','a.id_no=b.tkt_passenger_id_no')
                     ->get()
                     ->result();
	}
public function ticket($id_no = null)
	{
		// return booking data
    	return $this->db->select("
                tb.pickup_trip_location,
                tb.drop_trip_location,
                CONCAT_WS(' ', tp.firstname, tp.lastname) AS passenger_name, 
                tb.tkt_passenger_id_no AS tkt_passenger_id_no,
                tb.trip_id_no AS trip_id_no,
                tb.id_no AS booking_id_no,
                DATE_FORMAT(tb.booking_date, '%m/%d/%Y %h:%i %p') as booking_date,
                tr.name AS route_name,
                tb.request_facilities AS request_facilities,
                tb.price AS price,
                tb.total_seat AS quantity,
                tb.discount AS discount,
                tb.seat_numbers AS seat_serial,
                tb.payment_status AS payment_status
            ")
            ->from('tkt_booking AS tb')
            ->join('tkt_passenger AS tp', 'tb.tkt_passenger_id_no = tp.id_no' ,'full')
            ->join('trip_route AS tr', 'tr.id = tb.trip_route_id','full')
            ->where('tb.id_no', $id_no)
            ->get()
            ->row();
	}


	public function website_setting() 
	{
		return $this->db->get('ws_setting')->row();
	}
	
/// booking delete query
	public function delete($id = null)
	{
		$this->db->where('id',$id)
			->delete('tkt_booking');

		if ($this->db->affected_rows()) {
			return true;
		} else {
			return false;
		}
	} 

	// passenger profile update
	public function passenger_update($data = [])
	{
		return $this->db->where('id',$data['id'])
			->update('tkt_passenger',$data); 
	} 
	public function findById($id = null)
	{ 
		return $this->db->select("
				t.*,
				CONCAT_WS(' ', t.firstname, t.middle_name, t.lastname) AS name
			")->from("tkt_passenger AS t")
			->where('id',$id) 
    		->limit($limit, $start)
			->get()
			->row();
	} 
	
		public function findpassinfo($id = null)
	{ 
		return $this->db->select("*")
		    ->from("tkt_passenger")
			->where('id_no',$id)
			->get()
			->row();
	}
//country list
	public function country($id = null) 
	{
		$countries = array(
			""   => "Select Option",
			"AF" => "Afghanistan",
			"AL" => "Albania",
			"DZ" => "Algeria",
			"AS" => "American Samoa",
			"AD" => "Andorra",
			"AO" => "Angola",
			"AI" => "Anguilla",
			"AQ" => "Antarctica",
			"AG" => "Antigua and Barbuda",
			"AR" => "Argentina",
			"AM" => "Armenia",
			"AW" => "Aruba",
			"AU" => "Australia",
			"AT" => "Austria",
			"AZ" => "Azerbaijan",
			"BS" => "Bahamas",
			"BH" => "Bahrain",
			"BD" => "Bangladesh",
			"BB" => "Barbados",
			"BY" => "Belarus",
			"BE" => "Belgium",
			"BZ" => "Belize",
			"BJ" => "Benin",
			"BM" => "Bermuda",
			"BT" => "Bhutan",
			"BO" => "Bolivia",
			"BA" => "Bosnia and Herzegovina",
			"BW" => "Botswana",
			"BV" => "Bouvet Island",
			"BR" => "Brazil",
			"IO" => "British Indian Ocean Territory",
			"BN" => "Brunei Darussalam",
			"BG" => "Bulgaria",
			"BF" => "Burkina Faso",
			"BI" => "Burundi",
			"KH" => "Cambodia",
			"CM" => "Cameroon",
			"CA" => "Canada",
			"CV" => "Cape Verde",
			"KY" => "Cayman Islands",
			"CF" => "Central African Republic",
			"TD" => "Chad",
			"CL" => "Chile",
			"CN" => "China",
			"CX" => "Christmas Island",
			"CC" => "Cocos (Keeling) Islands",
			"CO" => "Colombia",
			"KM" => "Comoros",
			"CG" => "Congo",
			"CD" => "Congo, the Democratic Republic of the",
			"CK" => "Cook Islands",
			"CR" => "Costa Rica",
			"CI" => "Cote D'Ivoire",
			"HR" => "Croatia",
			"CU" => "Cuba",
			"CY" => "Cyprus",
			"CZ" => "Czech Republic",
			"DK" => "Denmark",
			"DJ" => "Djibouti",
			"DM" => "Dominica",
			"DO" => "Dominican Republic",
			"EC" => "Ecuador",
			"EG" => "Egypt",
			"SV" => "El Salvador",
			"GQ" => "Equatorial Guinea",
			"ER" => "Eritrea",
			"EE" => "Estonia",
			"ET" => "Ethiopia",
			"FK" => "Falkland Islands (Malvinas)",
			"FO" => "Faroe Islands",
			"FJ" => "Fiji",
			"FI" => "Finland",
			"FR" => "France",
			"GF" => "French Guiana",
			"PF" => "French Polynesia",
			"TF" => "French Southern Territories",
			"GA" => "Gabon",
			"GM" => "Gambia",
			"GE" => "Georgia",
			"DE" => "Germany",
			"GH" => "Ghana",
			"GI" => "Gibraltar",
			"GR" => "Greece",
			"GL" => "Greenland",
			"GD" => "Grenada",
			"GP" => "Guadeloupe",
			"GU" => "Guam",
			"GT" => "Guatemala",
			"GN" => "Guinea",
			"GW" => "Guinea-Bissau",
			"GY" => "Guyana",
			"HT" => "Haiti",
			"HM" => "Heard Island and Mcdonald Islands",
			"VA" => "Holy See (Vatican City State)",
			"HN" => "Honduras",
			"HK" => "Hong Kong",
			"HU" => "Hungary",
			"IS" => "Iceland",
			"IN" => "India",
			"ID" => "Indonesia",
			"IR" => "Iran, Islamic Republic of",
			"IQ" => "Iraq",
			"IE" => "Ireland",
			"IL" => "Israel",
			"IT" => "Italy",
			"JM" => "Jamaica",
			"JP" => "Japan",
			"JO" => "Jordan",
			"KZ" => "Kazakhstan",
			"KE" => "Kenya",
			"KI" => "Kiribati",
			"KP" => "Korea, Democratic People's Republic of",
			"KR" => "Korea, Republic of",
			"KW" => "Kuwait",
			"KG" => "Kyrgyzstan",
			"LA" => "Lao People's Democratic Republic",
			"LV" => "Latvia",
			"LB" => "Lebanon",
			"LS" => "Lesotho",
			"LR" => "Liberia",
			"LY" => "Libyan Arab Jamahiriya",
			"LI" => "Liechtenstein",
			"LT" => "Lithuania",
			"LU" => "Luxembourg",
			"MO" => "Macao",
			"MK" => "Macedonia, the Former Yugoslav Republic of",
			"MG" => "Madagascar",
			"MW" => "Malawi",
			"MY" => "Malaysia",
			"MV" => "Maldives",
			"ML" => "Mali",
			"MT" => "Malta",
			"MH" => "Marshall Islands",
			"MQ" => "Martinique",
			"MR" => "Mauritania",
			"MU" => "Mauritius",
			"YT" => "Mayotte",
			"MX" => "Mexico",
			"FM" => "Micronesia, Federated States of",
			"MD" => "Moldova, Republic of",
			"MC" => "Monaco",
			"MN" => "Mongolia",
			"MS" => "Montserrat",
			"MA" => "Morocco",
			"MZ" => "Mozambique",
			"MM" => "Myanmar",
			"NA" => "Namibia",
			"NR" => "Nauru",
			"NP" => "Nepal",
			"NL" => "Netherlands",
			"AN" => "Netherlands Antilles",
			"NC" => "New Caledonia",
			"NZ" => "New Zealand",
			"NI" => "Nicaragua",
			"NE" => "Niger",
			"NG" => "Nigeria",
			"NU" => "Niue",
			"NF" => "Norfolk Island",
			"MP" => "Northern Mariana Islands",
			"NO" => "Norway",
			"OM" => "Oman",
			"PK" => "Pakistan",
			"PW" => "Palau",
			"PS" => "Palestinian Territory, Occupied",
			"PA" => "Panama",
			"PG" => "Papua New Guinea",
			"PY" => "Paraguay",
			"PE" => "Peru",
			"PH" => "Philippines",
			"PN" => "Pitcairn",
			"PL" => "Poland",
			"PT" => "Portugal",
			"PR" => "Puerto Rico",
			"QA" => "Qatar",
			"RE" => "Reunion",
			"RO" => "Romania",
			"RU" => "Russian Federation",
			"RW" => "Rwanda",
			"SH" => "Saint Helena",
			"KN" => "Saint Kitts and Nevis",
			"LC" => "Saint Lucia",
			"PM" => "Saint Pierre and Miquelon",
			"VC" => "Saint Vincent and the Grenadines",
			"WS" => "Samoa",
			"SM" => "San Marino",
			"ST" => "Sao Tome and Principe",
			"SA" => "Saudi Arabia",
			"SN" => "Senegal",
			"CS" => "Serbia and Montenegro",
			"SC" => "Seychelles",
			"SL" => "Sierra Leone",
			"SG" => "Singapore",
			"SK" => "Slovakia",
			"SI" => "Slovenia",
			"SB" => "Solomon Islands",
			"SO" => "Somalia",
			"ZA" => "South Africa",
			"GS" => "South Georgia and the South Sandwich Islands",
			"ES" => "Spain",
			"LK" => "Sri Lanka",
			"SD" => "Sudan",
			"SR" => "Suriname",
			"SJ" => "Svalbard and Jan Mayen",
			"SZ" => "Swaziland",
			"SE" => "Sweden",
			"CH" => "Switzerland",
			"SY" => "Syrian Arab Republic",
			"TW" => "Taiwan, Province of China",
			"TJ" => "Tajikistan",
			"TZ" => "Tanzania, United Republic of",
			"TH" => "Thailand",
			"TL" => "Timor-Leste",
			"TG" => "Togo",
			"TK" => "Tokelau",
			"TO" => "Tonga",
			"TT" => "Trinidad and Tobago",
			"TN" => "Tunisia",
			"TR" => "Turkey",
			"TM" => "Turkmenistan",
			"TC" => "Turks and Caicos Islands",
			"TV" => "Tuvalu",
			"UG" => "Uganda",
			"UA" => "Ukraine",
			"AE" => "United Arab Emirates",
			"GB" => "United Kingdom",
			"US" => "United States",
			"UM" => "United States Minor Outlying Islands",
			"UY" => "Uruguay",
			"UZ" => "Uzbekistan",
			"VU" => "Vanuatu",
			"VE" => "Venezuela",
			"VN" => "Viet Nam",
			"VG" => "Virgin Islands, British",
			"VI" => "Virgin Islands, U.s.",
			"WF" => "Wallis and Futuna",
			"EH" => "Western Sahara",
			"YE" => "Yemen",
			"ZM" => "Zambia",
			"ZW" => "Zimbabwe"
		);
	
		if (!empty($id)) {
			return $countries[$id];
		} else {
			return $countries;
		}

	}
//user checking for login
	public function checkUser($data = array())
	{
		return $this->db->select("
				tkt_passenger.id,
				tkt_passenger.id_no,  
				tkt_passenger.firstname,
				tkt_passenger.lastname,
				tkt_passenger.email,
				tkt_passenger.password,
				tkt_passenger.phone, 
				tkt_passenger.address_line_1,
				tkt_passenger.image")
			->from('tkt_passenger')
			->where('email', $data['email'])
			->where('password', md5($data['password']))
			->get();
	}

	public function checkUser2($data = array())
	{
		return $this->db->select("
				tkt_passenger.id,
				tkt_passenger.id_no,  
				tkt_passenger.firstname,
				tkt_passenger.lastname,
				tkt_passenger.email,
				tkt_passenger.phone,
				tkt_passenger.password, 
				tkt_passenger.address_line_1,
				tkt_passenger.image")
			->from('tkt_passenger')
			->where('email', $data['email'])
			->where('password', $data['password'])
			->get();
	}
	public function confirm_ticket($data = array())
    {
        return $this->db->insert('bank_transaction', $data);
    }
    
}