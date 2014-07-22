<?php
/*

      ___  _            _____           __ _     
     / _ \| | Group-XP |____ |         / _| |    
    / /_\ \ |_ __ ___      / /_ __ ___| |_| |__  
    |  _  | | '_ ` _ \     \ \ '__/ _ \  _| '_ \ 
    | | | | | | | | | |.___/ / | |  __/ | | | | |
    \_| |_/_|_| |_| |_|\____/|_|  \___|_| |_| |_|.com
    
    WP Attacker v.2 Copyright (C) 2014
    
    Coder : Hannibal Ksa (@r00t3rz)
    Forum : alm3refh.com
    
    What's WP Attacker:
    - Scan the server's websites, and filter the ones that are using WorePress (Using Bing search engin [API]).
    - Get All the possible plugins and themese, which are vulnerable (Using a list). *NEW*
    - Get All the possible plugins and themese, which are vulnerable (Using security websites). *UNDERGROUND*
    - BruteForce (Using a correct username and a passwords list). *UNDERGROUND*
    - Exploit 'em (With the vulnerable that has been found). *UNDERGROUND*
    
    Why WP Attacker?
    - Using Bing API, Which leads to faster&guaranteed responde.
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
    
    Although, Happy Eid to all my Muslim (Sunni) brothers.
    Stay tuned for our next projects!
    Ali (aka Hannibal Ksa).
    
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
    ########################################################
    ##    BANNER/COPYRIGHT  R00T3RZ.COM & ALM3REFH.COM    ##
    ##  REMOVING THIS WILL ONLY MAKES YOU A "DOUCHEBAG!"  ##
    ########################################################
    print "\n\t _      _   _____     ___  _______  ___   _____  _    _ _____  ______";
    print "\n\t| |    | | |  __ \   /   \|__   __|/   \ |  ___|| | / /|  ___||  __  \\";
    print "\n\t| | __ | | |  ___/  |  -  |  | |  |  -  || |    | |/ / |  ___||  __  /";
    print "\n\t| \/  \/ | | |      |  _  |  | |  |  _  || |___ |  _ \ | |___ | |  \ \\";
    print "\n\t|___/\___| |_|      |_| |_|  |_|  |_| |_||_____||_| \_\|_____||_|   \_\\\n\r\n";
    print "\t\t   	  WP Attacker v.2 - By Hannibal Ksa        \n\n";
}
function noblackhat(){
    ##################
    ##  DISCLAIMER  ##
    ##################
    print "\n\tTHIS TOOL WAS WRITTEN FOR EDUCATIONAL PURPOSES \" ONLY! \"";
    print "\n\tAGREE? [Y/n] : ";
    $whiteorblack = strtolower(trim(fgets(STDIN)));
    $yes = array('y','yes');
    if(!in_array($whiteorblack, $yes)){
        #########################
        ##  SORRY NO BLACKHAT  ##
        #########################
        die("\n\n\t\tSorry, educational purposes Only!\n\t\tPS: Thank you for being honest =)\n\n\n");
    }
    print "\n\n";
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
        $ch = curl_init($site);
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
    ##   MAKE'EM CRYSTLE CLEAR   ##
    ###############################
    $file = file_get_contents($list);
    $get = explode("\n", $file);
    foreach($get as $wpsite){
        $ch = curl_init($wpsite);
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
        $ch = curl_init($target.'/'.$x[1]);
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
            #############
            ## SAVE IT ##
            #############
            /*
            $data = $target." -> ".$x[0]."\n";
            $filename = 'vuln.txt';
            $fp = fopen($filename, "a+");
            $write = fputs($fp, $data);
            fclose($fp);
            */
        } #else { print "\n\t[-] NOT FOUND $x[0] -> $target"; }
    }
}
function bye(){
    ########################
    ##  DONE/SAY GOODBYE  ##
    ########################
    print "\n\n[+] Bye.\n\n";
    ######################
    ## DELETE LOG FILES ##
    ###################################################################
    ## NOTE: YOU CAN REMOVE THIS TO HAVE MORE INFO ABOUT THE TARGET! ##
    ###################################################################
    unlink('sites.txt');
    unlink('wp-sites.txt');
    unlink('wp.txt');
    unlink('vuln.txt');
    exit(2);
}
############################
##  COMMAND LINE'S  SHIT  ##
############################
clear();
banner();
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
#############################
##   CREAT THE LOG FILES   ##
#############################
$log1 = fopen("sites.txt","w");fclose($log1);
$log2 = fopen("wp-sites.txt","w");fclose($log2);
$log3 = fopen("wp.txt","w");fclose($log3);
$log4 = fopen("vuln.txt","w");fclose($log4);
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
print "\n[-] Got'em";sleep(1);
print "\n[+] Separating the sites";
wp('sites.txt');
print "\n[-] We got the sites, which are using WordPress";sleep(1);
wp_em('wp-sites.txt');
#################
##   Results   ##
#################
print "\n[+] Finished, these are the website that I found:\n";
$wplist = file_get_contents('wp.txt');
$get = explode("\n", $wplist);
#print "[ ".count($get)." Website ]\n"; // empty lines will be counted
foreach($get as $hk){
    if(!$hk==""){
        print "\n\t[!] $hk";
    }
}
print "\n\n\nWOULD YOU LIKE LOOK FOR VULNERABLE THEMESE AND/OR PLUGINS? [Y/n] : ";
$scanner =  strtolower(trim(fgets(STDIN)));
$yes = array('y','yes');
if(in_array($scanner, $yes)){
    print "\nNP, WHERE IS YOUR LIST FOR PLUGINS/THEMES? [ex: hk.txt] : ";
    $list = trim(fgets(STDIN));
    if(!is_file($list)) {
        #######################
        ##  CAN'T LOAD LIST  ##
        ##       EXIT!       ##
        #######################
        print "\nERROR! WHILE LOADING THE LIST FILE\n\n";
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
    #################
    ##   Results   ##
    #################
    /*
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
} else {
    ######################
    ##  OOH KILL'EM =P  ##
    ######################
    bye(); 
}
####################################
##  © R00T3RZ.COM 2014 - CHEERS!  ##
#################################S###
?>
