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
    );
}
