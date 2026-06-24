<?php
/**
 * Central data source for all area-wise / location landing pages.
 *
 * Each area is keyed by its URL slug (the file name without ".php").
 * The same data feeds the per-area pages, the areas hub (index.php),
 * the sitemap and the llms.txt files, so this is the single place to
 * add or edit a service location.
 *
 * Fields:
 *   name      - Human readable locality name
 *   pincode   - Postal PIN code
 *   district  - Parent district / city
 *   lat,lng   - Approximate coordinates (used for LocalBusiness geo schema)
 *   landmarks - Short list of well known landmarks in the locality
 *   nearby    - Slugs of nearby areas for internal linking
 */

function emp_areas() {
    return array(
        'kurmannapalem-gajuwaka' => array(
            'name' => 'Kurmannapalem (Gajuwaka)', 'pincode' => '530026', 'district' => 'Visakhapatnam',
            'lat' => '17.6900', 'lng' => '83.2100',
            'landmarks' => 'Gajuwaka Junction, NAD Kotha Road, Auto Nagar',
            'nearby' => array('kurmannapalem', 'malkapuram', 'steel-plant', 'gopalapatnam'),
        ),
        'maddilapalem' => array(
            'name' => 'Maddilapalem', 'pincode' => '530013', 'district' => 'Visakhapatnam',
            'lat' => '17.7390', 'lng' => '83.3260',
            'landmarks' => 'Maddilapalem Junction, Gurudwara, NH-16',
            'nearby' => array('mvp-colony', 'akkayyapalem', 'seethammadhara', 'murali-nagar'),
        ),
        'murali-nagar' => array(
            'name' => 'Murali Nagar', 'pincode' => '530007', 'district' => 'Visakhapatnam',
            'lat' => '17.7330', 'lng' => '83.3130',
            'landmarks' => 'Murali Nagar Bus Stop, Railway New Colony',
            'nearby' => array('akkayyapalem', 'maddilapalem', 'dabagardens', 'seethammadhara'),
        ),
        'mvp-colony' => array(
            'name' => 'MVP Colony', 'pincode' => '530017', 'district' => 'Visakhapatnam',
            'lat' => '17.7400', 'lng' => '83.3300',
            'landmarks' => 'MVP Double Road, Rama Talkies, Sector 4',
            'nearby' => array('seethammadhara', 'maddilapalem', 'hanumanthawaka', 'akkayyapalem'),
        ),
        'akkayyapalem' => array(
            'name' => 'Akkayyapalem', 'pincode' => '530016', 'district' => 'Visakhapatnam',
            'lat' => '17.7280', 'lng' => '83.3030',
            'landmarks' => 'Akkayyapalem Main Road, Kakani Nagar',
            'nearby' => array('dabagardens', 'murali-nagar', 'maddilapalem', 'seethammadhara'),
        ),
        'seethammadhara' => array(
            'name' => 'Seethammadhara', 'pincode' => '530013', 'district' => 'Visakhapatnam',
            'lat' => '17.7350', 'lng' => '83.3200',
            'landmarks' => 'NGGO Colony, Seethammadhara North Extension',
            'nearby' => array('mvp-colony', 'maddilapalem', 'hanumanthawaka', 'akkayyapalem'),
        ),
        'hanumanthawaka' => array(
            'name' => 'Hanumanthawaka', 'pincode' => '530040', 'district' => 'Visakhapatnam',
            'lat' => '17.7650', 'lng' => '83.3500',
            'landmarks' => 'Hanumanthawaka Junction, PM Palem Road',
            'nearby' => array('mvp-colony', 'yendada', 'madhurawada', 'seethammadhara'),
        ),
        'yendada' => array(
            'name' => 'Yendada', 'pincode' => '530045', 'district' => 'Visakhapatnam',
            'lat' => '17.7900', 'lng' => '83.3700',
            'landmarks' => 'Yendada Hills, Sai Nagar, Rushikonda Road',
            'nearby' => array('madhurawada', 'kommadi', 'hanumanthawaka', 'anandapuram'),
        ),
        'madhurawada' => array(
            'name' => 'Madhurawada', 'pincode' => '530048', 'district' => 'Visakhapatnam',
            'lat' => '17.8200', 'lng' => '83.3600',
            'landmarks' => 'IT SEZ, Gitam University, PM Palem',
            'nearby' => array('kommadi', 'yendada', 'anandapuram', 'hanumanthawaka'),
        ),
        'anandapuram' => array(
            'name' => 'Anandapuram', 'pincode' => '530052', 'district' => 'Visakhapatnam',
            'lat' => '17.8500', 'lng' => '83.4100',
            'landmarks' => 'Anandapuram Junction, NH-16, Bheemili Road',
            'nearby' => array('madhurawada', 'kommadi', 'yendada', 'pendurthi'),
        ),
        'gopalapatnam' => array(
            'name' => 'Gopalapatnam', 'pincode' => '530027', 'district' => 'Visakhapatnam',
            'lat' => '17.7600', 'lng' => '83.2200',
            'landmarks' => 'Gopalapatnam Bridge, NH-16, Prahladapuram',
            'nearby' => array('pendurthi', 'kurmannapalem-gajuwaka', 'malkapuram', 'steel-plant'),
        ),
        'pendurthi' => array(
            'name' => 'Pendurthi', 'pincode' => '530051', 'district' => 'Visakhapatnam',
            'lat' => '17.8200', 'lng' => '83.2100',
            'landmarks' => 'Pendurthi Junction, Kotha Road, Sabbavaram Road',
            'nearby' => array('gopalapatnam', 'anandapuram', 'anakapalle', 'madhurawada'),
        ),
        'anakapalle' => array(
            'name' => 'Anakapalle', 'pincode' => '531001', 'district' => 'Anakapalli',
            'lat' => '17.6913', 'lng' => '83.0042',
            'landmarks' => 'Anakapalle Bus Stand, Sarada River, Jaggery Market',
            'nearby' => array('pendurthi', 'gopalapatnam', 'steel-plant', 'kurmannapalem'),
        ),
        'jagadamba-junction' => array(
            'name' => 'Jagadamba Junction', 'pincode' => '530002', 'district' => 'Visakhapatnam',
            'lat' => '17.7060', 'lng' => '83.2980',
            'landmarks' => 'Jagadamba Centre, Poorna Market, Kotha Road',
            'nearby' => array('dabagardens', 'akkayyapalem', 'murali-nagar', 'malkapuram'),
        ),
        'dabagardens' => array(
            'name' => 'Dabagardens', 'pincode' => '530020', 'district' => 'Visakhapatnam',
            'lat' => '17.7100', 'lng' => '83.2980',
            'landmarks' => 'Dabagardens Main Road, Diamond Park, RTC Complex',
            'nearby' => array('jagadamba-junction', 'akkayyapalem', 'murali-nagar', 'maddilapalem'),
        ),
        'malkapuram' => array(
            'name' => 'Malkapuram', 'pincode' => '530011', 'district' => 'Visakhapatnam',
            'lat' => '17.6800', 'lng' => '83.2400',
            'landmarks' => 'Malkapuram Market, Port Area, Scindia',
            'nearby' => array('steel-plant', 'kurmannapalem-gajuwaka', 'gopalapatnam', 'sariharipuram'),
        ),
        'kurmannapalem' => array(
            'name' => 'Kurmannapalem', 'pincode' => '530046', 'district' => 'Visakhapatnam',
            'lat' => '17.6800', 'lng' => '83.1900',
            'landmarks' => 'Kurmannapalem Junction, Aganampudi, NH-16',
            'nearby' => array('kurmannapalem-gajuwaka', 'steel-plant', 'malkapuram', 'anakapalle'),
        ),
        'steel-plant' => array(
            'name' => 'Steel Plant (Ukkunagaram)', 'pincode' => '530031', 'district' => 'Visakhapatnam',
            'lat' => '17.6300', 'lng' => '83.1600',
            'landmarks' => 'Ukkunagaram Township, RINL, Sector areas',
            'nearby' => array('kurmannapalem', 'kurmannapalem-gajuwaka', 'malkapuram', 'anakapalle'),
        ),
        'vizianagaram' => array(
            'name' => 'Vizianagaram', 'pincode' => '535001', 'district' => 'Vizianagaram',
            'lat' => '18.1167', 'lng' => '83.4115',
            'landmarks' => 'Vizianagaram Fort, Clock Tower, Railway Station',
            'nearby' => array('srikakulam', 'anandapuram', 'pendurthi', 'madhurawada'),
        ),
        'srikakulam' => array(
            'name' => 'Srikakulam', 'pincode' => '532001', 'district' => 'Srikakulam',
            'lat' => '18.2949', 'lng' => '83.8938',
            'landmarks' => 'Srikakulam Town, Nagavali River, Arasavalli',
            'nearby' => array('vizianagaram', 'anandapuram', 'madhurawada', 'pendurthi'),
        ),
        'kommadi' => array(
            'name' => 'Kommadi', 'pincode' => '530048', 'district' => 'Visakhapatnam',
            'lat' => '17.8100', 'lng' => '83.3700',
            'landmarks' => 'Kommadi Junction, PM Palem, Madhurawada Road',
            'nearby' => array('madhurawada', 'yendada', 'anandapuram', 'hanumanthawaka'),
        ),
        'sariharipuram' => array(
            'name' => 'Sariharipuram', 'pincode' => '530011', 'district' => 'Visakhapatnam',
            'lat' => '17.6850', 'lng' => '83.2300',
            'landmarks' => 'Sariharipuram, Malkapuram Road, Port Stadium',
            'nearby' => array('malkapuram', 'steel-plant', 'kurmannapalem-gajuwaka', 'jagadamba-junction'),
        ),
        'gajuwaka' => array(
            'name' => 'Gajuwaka', 'pincode' => '530026', 'district' => 'Visakhapatnam',
            'lat' => '17.6868', 'lng' => '83.2185',
            'landmarks' => 'Gajuwaka Junction, BHPV, Auto Nagar',
            'nearby' => array('kurmannapalem-gajuwaka', 'malkapuram', 'steel-plant', 'gopalapatnam'),
        ),
        'asilmetta' => array(
            'name' => 'Asilmetta', 'pincode' => '530003', 'district' => 'Visakhapatnam',
            'lat' => '17.7180', 'lng' => '83.3120',
            'landmarks' => 'Asilmetta Junction, Siripuram, VUDA Complex',
            'nearby' => array('siripuram', 'dabagardens', 'jagadamba-junction', 'akkayyapalem'),
        ),
        'siripuram' => array(
            'name' => 'Siripuram', 'pincode' => '530003', 'district' => 'Visakhapatnam',
            'lat' => '17.7220', 'lng' => '83.3180',
            'landmarks' => 'Siripuram Junction, VUDA Park, Beach Road',
            'nearby' => array('asilmetta', 'lawsons-bay-colony', 'maharanipeta', 'dabagardens'),
        ),
        'lawsons-bay-colony' => array(
            'name' => 'Lawsons Bay Colony', 'pincode' => '530017', 'district' => 'Visakhapatnam',
            'lat' => '17.7280', 'lng' => '83.3340',
            'landmarks' => 'Lawsons Bay Beach, Pandurangapuram, Beach Road',
            'nearby' => array('pedawaltair', 'mvp-colony', 'siripuram', 'asilmetta'),
        ),
        'pedawaltair' => array(
            'name' => 'Pedawaltair', 'pincode' => '530017', 'district' => 'Visakhapatnam',
            'lat' => '17.7330', 'lng' => '83.3290',
            'landmarks' => 'Pedawaltair, Beach Road, Kailasagiri Approach',
            'nearby' => array('lawsons-bay-colony', 'mvp-colony', 'siripuram', 'seethammadhara'),
        ),
        'maharanipeta' => array(
            'name' => 'Maharanipeta', 'pincode' => '530002', 'district' => 'Visakhapatnam',
            'lat' => '17.7050', 'lng' => '83.3020',
            'landmarks' => 'Maharanipeta, Jagadamba Centre, Collector Office',
            'nearby' => array('jagadamba-junction', 'asilmetta', 'dabagardens', 'siripuram'),
        ),
        'kancharapalem' => array(
            'name' => 'Kancharapalem', 'pincode' => '530008', 'district' => 'Visakhapatnam',
            'lat' => '17.7320', 'lng' => '83.2860',
            'landmarks' => 'Kancharapalem Main Road, Gnanapuram, Railway Station',
            'nearby' => array('gnanapuram', 'marripalem', 'nad-junction', 'dabagardens'),
        ),
        'marripalem' => array(
            'name' => 'Marripalem', 'pincode' => '530009', 'district' => 'Visakhapatnam',
            'lat' => '17.7430', 'lng' => '83.2700',
            'landmarks' => 'Marripalem VUDA Layout, NAD Road, BSNL Office',
            'nearby' => array('nad-junction', 'kancharapalem', 'gopalapatnam', 'akkayyapalem'),
        ),
        'nad-junction' => array(
            'name' => 'NAD Junction', 'pincode' => '530009', 'district' => 'Visakhapatnam',
            'lat' => '17.7390', 'lng' => '83.2400',
            'landmarks' => 'NAD Kotha Road, Naval Armament Depot, Vepagunta Road',
            'nearby' => array('marripalem', 'kancharapalem', 'gopalapatnam', 'malkapuram'),
        ),
        'simhachalam' => array(
            'name' => 'Simhachalam', 'pincode' => '530028', 'district' => 'Visakhapatnam',
            'lat' => '17.7660', 'lng' => '83.2510',
            'landmarks' => 'Simhachalam Temple, Adavivaram, Hill Top',
            'nearby' => array('adavivaram', 'gopalapatnam', 'hanumanthawaka', 'pendurthi'),
        ),
        'adavivaram' => array(
            'name' => 'Adavivaram', 'pincode' => '530040', 'district' => 'Visakhapatnam',
            'lat' => '17.7620', 'lng' => '83.2900',
            'landmarks' => 'Adavivaram, Simhachalam Road, Hanumanthawaka',
            'nearby' => array('simhachalam', 'arilova', 'hanumanthawaka', 'gopalapatnam'),
        ),
        'arilova' => array(
            'name' => 'Arilova', 'pincode' => '530040', 'district' => 'Visakhapatnam',
            'lat' => '17.7560', 'lng' => '83.3100',
            'landmarks' => 'Arilova Colony, Chinna Waltair, Sector areas',
            'nearby' => array('adavivaram', 'hanumanthawaka', 'simhachalam', 'seethammadhara'),
        ),
        'pm-palem' => array(
            'name' => 'PM Palem', 'pincode' => '530041', 'district' => 'Visakhapatnam',
            'lat' => '17.7960', 'lng' => '83.3580',
            'landmarks' => 'PM Palem Junction, Madhurawada Road, Kommadi',
            'nearby' => array('madhurawada', 'kommadi', 'hanumanthawaka', 'yendada'),
        ),
        'isukathota' => array(
            'name' => 'Isukathota', 'pincode' => '530022', 'district' => 'Visakhapatnam',
            'lat' => '17.7560', 'lng' => '83.3590',
            'landmarks' => 'Isukathota Junction, Rushikonda Road, Sujatha Nagar',
            'nearby' => array('mvp-colony', 'pedawaltair', 'rushikonda', 'yendada'),
        ),
        'rushikonda' => array(
            'name' => 'Rushikonda', 'pincode' => '530045', 'district' => 'Visakhapatnam',
            'lat' => '17.7820', 'lng' => '83.3870',
            'landmarks' => 'Rushikonda Beach, IT Park, Gitam University',
            'nearby' => array('yendada', 'madhurawada', 'isukathota', 'kommadi'),
        ),
        'bheemili' => array(
            'name' => 'Bheemili (Bheemunipatnam)', 'pincode' => '531163', 'district' => 'Visakhapatnam',
            'lat' => '17.8910', 'lng' => '83.4540',
            'landmarks' => 'Bheemili Beach, Old Lighthouse, Bheemili Road',
            'nearby' => array('anandapuram', 'madhurawada', 'yendada', 'kommadi'),
        ),
        'sabbavaram' => array(
            'name' => 'Sabbavaram', 'pincode' => '531035', 'district' => 'Visakhapatnam',
            'lat' => '17.8050', 'lng' => '83.1450',
            'landmarks' => 'Sabbavaram Junction, NH-16, Pendurthi Road',
            'nearby' => array('pendurthi', 'gopalapatnam', 'anakapalle', 'anandapuram'),
        ),
        'duvvada' => array(
            'name' => 'Duvvada', 'pincode' => '530046', 'district' => 'Visakhapatnam',
            'lat' => '17.6720', 'lng' => '83.1850',
            'landmarks' => 'Duvvada Railway Station, Aganampudi, NH-16',
            'nearby' => array('kurmannapalem', 'kurmannapalem-gajuwaka', 'steel-plant', 'gopalapatnam'),
        ),
        'aganampudi' => array(
            'name' => 'Aganampudi', 'pincode' => '530046', 'district' => 'Visakhapatnam',
            'lat' => '17.6700', 'lng' => '83.1750',
            'landmarks' => 'Aganampudi, Duvvada, Auto Nagar Extension',
            'nearby' => array('kurmannapalem', 'duvvada', 'steel-plant', 'malkapuram'),
        ),
        'gnanapuram' => array(
            'name' => 'Gnanapuram', 'pincode' => '530004', 'district' => 'Visakhapatnam',
            'lat' => '17.7150', 'lng' => '83.2870',
            'landmarks' => 'Gnanapuram, Kancharapalem, One Town',
            'nearby' => array('kancharapalem', 'one-town', 'dabagardens', 'jagadamba-junction'),
        ),
        'one-town' => array(
            'name' => 'One Town', 'pincode' => '530001', 'district' => 'Visakhapatnam',
            'lat' => '17.7000', 'lng' => '83.2900',
            'landmarks' => 'One Town, Poorna Market, Fishing Harbour Road',
            'nearby' => array('gnanapuram', 'jagadamba-junction', 'maharanipeta', 'dabagardens'),
        ),
        'allipuram' => array(
            'name' => 'Allipuram', 'pincode' => '530004', 'district' => 'Visakhapatnam',
            'lat' => '17.7090', 'lng' => '83.2940',
            'landmarks' => 'Allipuram, Old Town, Gnanapuram Road',
            'nearby' => array('one-town', 'gnanapuram', 'jagadamba-junction', 'dabagardens'),
        ),
    );
}

/** Business-wide constants reused across schema markup. */
function emp_business() {
    return array(
        'name'      => 'Excellent Movers and Packers',
        'phone'     => '+918295588602',
        'phoneDisp' => '+91 82955 88602',
        'email'     => 'excellentmoversandpackers68@gmail.com',
        'url'       => 'https://excellentmoversandpackers.com',
        'logo'      => 'https://excellentmoversandpackers.com/excellent_movers_packers.png',
        'image'     => 'https://excellentmoversandpackers.com/best-packers-and-movers-in-visakhapatnam.jpeg',
        'street'    => 'S/O Tallewar Dammayya, D NO 3-19/5, Saniwada, Aganampudi',
        'locality'  => 'Visakhapatnam',
        'region'    => 'Andhra Pradesh',
        'postal'    => '530046',
        'country'   => 'IN',
        'lat'       => '17.6760',
        'lng'       => '83.1900',
        // Public profiles used for schema sameAs + footer social icons.
        // Fill each URL once you create/claim the profile (leave '' to hide).
        // These off-site listings are exactly the "citations" that boost local ranking.
        'socials'   => array(
            'google'    => '', // Google Business Profile share link (https://g.page/...)
            'facebook'  => '',
            'instagram' => '',
            'justdial'  => '',
            'sulekha'   => '',
            'youtube'   => '',
            'linkedin'  => '',
        ),
    );
}

/** Non-empty social/citation profile URLs (for schema sameAs and footer links). */
function emp_social_links() {
    $biz = emp_business();
    $socials = isset($biz['socials']) ? $biz['socials'] : array();
    return array_filter($socials, function ($u) { return !empty($u); });
}

/**
 * State / Union-Territory landing pages for inter-state relocation
 * (moving FROM Visakhapatnam TO any state across India).
 *
 * Keyed by URL slug. Fields:
 *   name    - State / UT name
 *   capital - Capital city
 *   type    - 'State' or 'Union Territory'
 *   cities  - Major destination cities we move to
 *   zone    - Geographic zone (for grouping)
 */
function emp_states() {
    return array(
        'andhra-pradesh'   => array('name' => 'Andhra Pradesh', 'capital' => 'Amaravati', 'type' => 'State', 'zone' => 'South', 'cities' => array('Vijayawada', 'Guntur', 'Tirupati', 'Nellore', 'Kakinada', 'Rajahmundry')),
        'arunachal-pradesh'=> array('name' => 'Arunachal Pradesh', 'capital' => 'Itanagar', 'type' => 'State', 'zone' => 'North East', 'cities' => array('Itanagar', 'Naharlagun', 'Pasighat', 'Tawang')),
        'assam'            => array('name' => 'Assam', 'capital' => 'Dispur', 'type' => 'State', 'zone' => 'North East', 'cities' => array('Guwahati', 'Silchar', 'Dibrugarh', 'Jorhat', 'Tezpur')),
        'bihar'            => array('name' => 'Bihar', 'capital' => 'Patna', 'type' => 'State', 'zone' => 'East', 'cities' => array('Patna', 'Gaya', 'Bhagalpur', 'Muzaffarpur', 'Darbhanga')),
        'chhattisgarh'     => array('name' => 'Chhattisgarh', 'capital' => 'Raipur', 'type' => 'State', 'zone' => 'Central', 'cities' => array('Raipur', 'Bhilai', 'Bilaspur', 'Korba', 'Durg')),
        'goa'              => array('name' => 'Goa', 'capital' => 'Panaji', 'type' => 'State', 'zone' => 'West', 'cities' => array('Panaji', 'Margao', 'Vasco da Gama', 'Mapusa')),
        'gujarat'          => array('name' => 'Gujarat', 'capital' => 'Gandhinagar', 'type' => 'State', 'zone' => 'West', 'cities' => array('Ahmedabad', 'Surat', 'Vadodara', 'Rajkot', 'Gandhinagar')),
        'haryana'          => array('name' => 'Haryana', 'capital' => 'Chandigarh', 'type' => 'State', 'zone' => 'North', 'cities' => array('Gurugram', 'Faridabad', 'Panipat', 'Ambala', 'Hisar')),
        'himachal-pradesh' => array('name' => 'Himachal Pradesh', 'capital' => 'Shimla', 'type' => 'State', 'zone' => 'North', 'cities' => array('Shimla', 'Solan', 'Dharamshala', 'Mandi', 'Manali')),
        'jharkhand'        => array('name' => 'Jharkhand', 'capital' => 'Ranchi', 'type' => 'State', 'zone' => 'East', 'cities' => array('Ranchi', 'Jamshedpur', 'Dhanbad', 'Bokaro')),
        'karnataka'        => array('name' => 'Karnataka', 'capital' => 'Bengaluru', 'type' => 'State', 'zone' => 'South', 'cities' => array('Bengaluru', 'Mysuru', 'Mangaluru', 'Hubli', 'Belagavi')),
        'kerala'           => array('name' => 'Kerala', 'capital' => 'Thiruvananthapuram', 'type' => 'State', 'zone' => 'South', 'cities' => array('Kochi', 'Thiruvananthapuram', 'Kozhikode', 'Thrissur', 'Kollam')),
        'madhya-pradesh'   => array('name' => 'Madhya Pradesh', 'capital' => 'Bhopal', 'type' => 'State', 'zone' => 'Central', 'cities' => array('Bhopal', 'Indore', 'Jabalpur', 'Gwalior', 'Ujjain')),
        'maharashtra'      => array('name' => 'Maharashtra', 'capital' => 'Mumbai', 'type' => 'State', 'zone' => 'West', 'cities' => array('Mumbai', 'Pune', 'Nagpur', 'Nashik', 'Thane', 'Aurangabad')),
        'manipur'          => array('name' => 'Manipur', 'capital' => 'Imphal', 'type' => 'State', 'zone' => 'North East', 'cities' => array('Imphal', 'Thoubal', 'Bishnupur')),
        'meghalaya'        => array('name' => 'Meghalaya', 'capital' => 'Shillong', 'type' => 'State', 'zone' => 'North East', 'cities' => array('Shillong', 'Tura', 'Jowai')),
        'mizoram'          => array('name' => 'Mizoram', 'capital' => 'Aizawl', 'type' => 'State', 'zone' => 'North East', 'cities' => array('Aizawl', 'Lunglei', 'Champhai')),
        'nagaland'         => array('name' => 'Nagaland', 'capital' => 'Kohima', 'type' => 'State', 'zone' => 'North East', 'cities' => array('Kohima', 'Dimapur', 'Mokokchung')),
        'odisha'           => array('name' => 'Odisha', 'capital' => 'Bhubaneswar', 'type' => 'State', 'zone' => 'East', 'cities' => array('Bhubaneswar', 'Cuttack', 'Rourkela', 'Berhampur', 'Sambalpur')),
        'punjab'           => array('name' => 'Punjab', 'capital' => 'Chandigarh', 'type' => 'State', 'zone' => 'North', 'cities' => array('Ludhiana', 'Amritsar', 'Jalandhar', 'Patiala', 'Mohali')),
        'rajasthan'        => array('name' => 'Rajasthan', 'capital' => 'Jaipur', 'type' => 'State', 'zone' => 'North', 'cities' => array('Jaipur', 'Jodhpur', 'Udaipur', 'Kota', 'Ajmer', 'Bikaner')),
        'sikkim'           => array('name' => 'Sikkim', 'capital' => 'Gangtok', 'type' => 'State', 'zone' => 'North East', 'cities' => array('Gangtok', 'Namchi', 'Gyalshing')),
        'tamil-nadu'       => array('name' => 'Tamil Nadu', 'capital' => 'Chennai', 'type' => 'State', 'zone' => 'South', 'cities' => array('Chennai', 'Coimbatore', 'Madurai', 'Tiruchirappalli', 'Salem')),
        'telangana'        => array('name' => 'Telangana', 'capital' => 'Hyderabad', 'type' => 'State', 'zone' => 'South', 'cities' => array('Hyderabad', 'Warangal', 'Nizamabad', 'Karimnagar', 'Khammam')),
        'tripura'          => array('name' => 'Tripura', 'capital' => 'Agartala', 'type' => 'State', 'zone' => 'North East', 'cities' => array('Agartala', 'Udaipur', 'Dharmanagar')),
        'uttar-pradesh'    => array('name' => 'Uttar Pradesh', 'capital' => 'Lucknow', 'type' => 'State', 'zone' => 'North', 'cities' => array('Lucknow', 'Kanpur', 'Noida', 'Ghaziabad', 'Agra', 'Varanasi')),
        'uttarakhand'      => array('name' => 'Uttarakhand', 'capital' => 'Dehradun', 'type' => 'State', 'zone' => 'North', 'cities' => array('Dehradun', 'Haridwar', 'Roorkee', 'Haldwani', 'Rishikesh')),
        'west-bengal'      => array('name' => 'West Bengal', 'capital' => 'Kolkata', 'type' => 'State', 'zone' => 'East', 'cities' => array('Kolkata', 'Howrah', 'Durgapur', 'Siliguri', 'Asansol')),
        'delhi'            => array('name' => 'Delhi (NCR)', 'capital' => 'New Delhi', 'type' => 'Union Territory', 'zone' => 'North', 'cities' => array('New Delhi', 'Dwarka', 'Rohini', 'Saket', 'Noida', 'Gurugram')),
        'jammu-and-kashmir'=> array('name' => 'Jammu and Kashmir', 'capital' => 'Srinagar', 'type' => 'Union Territory', 'zone' => 'North', 'cities' => array('Srinagar', 'Jammu', 'Anantnag', 'Baramulla')),
        'ladakh'           => array('name' => 'Ladakh', 'capital' => 'Leh', 'type' => 'Union Territory', 'zone' => 'North', 'cities' => array('Leh', 'Kargil')),
        'chandigarh'       => array('name' => 'Chandigarh', 'capital' => 'Chandigarh', 'type' => 'Union Territory', 'zone' => 'North', 'cities' => array('Chandigarh', 'Mohali', 'Panchkula')),
        'puducherry'       => array('name' => 'Puducherry', 'capital' => 'Puducherry', 'type' => 'Union Territory', 'zone' => 'South', 'cities' => array('Puducherry', 'Karaikal', 'Yanam')),
        'goa-daman'        => array('name' => 'Dadra & Nagar Haveli and Daman & Diu', 'capital' => 'Daman', 'type' => 'Union Territory', 'zone' => 'West', 'cities' => array('Daman', 'Diu', 'Silvassa')),
        'andaman-nicobar'  => array('name' => 'Andaman and Nicobar Islands', 'capital' => 'Port Blair', 'type' => 'Union Territory', 'zone' => 'South', 'cities' => array('Port Blair', 'Havelock', 'Diglipur')),
        'lakshadweep'      => array('name' => 'Lakshadweep', 'capital' => 'Kavaratti', 'type' => 'Union Territory', 'zone' => 'South', 'cities' => array('Kavaratti', 'Agatti', 'Minicoy')),
    );
}
