
# CORS misconfiguration vulnerable Lab
This Repository contains CORS misconfiguration related vulnerable codes. One can configure the vulnerable code on local machine to perform practical exploitation of CORS related misconfiguration issues.

I would like to say Thank You to @albinowax (For his work in CORS exploitation), AKReddy and Vivek Sir (For being great personalities who always supported me) and Andrew Sir - @vanderaj (for his encouraging words)

![](https://raw.githubusercontent.com/incredibleindishell/CORS-vulnerable-Lab/master/images/lab_login.png)

# Setup the lab on Machine
Following are the pre-requities to configure the vulnerable code on local/remote machine

  1. Apache web server
  2. PHP 5/7
  3. MySQL Database

<b>Steps to Configure:</b>

1. Download and extract the codes in "htdocs" or webroot  directory of the web server.
2. Open PHPMyAdmin and create new database with name "ica_lab".
3. If you want to use MySQL "root" user account, skip below mentioned step and jump to step no. 5.
4. create a new user having name "billu" by executing below mentioned SQL command: (skip step no. 5)

         grant all on ica_lab.* to billu@localhost IDENTIFIED BY 'b0x_billu';
5. Open "c0nnection.php" in text editor and make below mentioned changes in the PHP:

          change 
          $conn = mysqli_connect("127.0.0.1","billu","b0x_billu","ica_lab");
          to
          $conn = mysqli_connect("127.0.0.1","root","","ica_lab");
6. In PHPMyAdmin, select "database" and then click database name "ica_lab".
7. Click "Import" button and browse the locate the SQL dump file "ica_lab.sql" on your local machine. This file is present in directory "database" of the repository.
8. After browsing the SQL database file, click "Go" button. Now. database is ready.
9. Access the "CORS Vulnerable Lab" application.
10. Login credentials are already specified in input fileds, just click "Let Me In" button and you are ready to play with the lab. 


# Challenges available in this lab
There are 3 misconfiguration which are simulated in this Lab. 

![](https://raw.githubusercontent.com/incredibleindishell/CORS-vulnerable-Lab/master/images/lab.png)

<b>Application Trust Arbitrary Origin</b>

Application accept CORS request from any Origin. The code put the "Origin" value in HTTP response header "Access-Control-Allow-Origin". Now, this configuration will allow any script from any "Origin" to make CORS request to application. Web browser will perform standard CORS request checks and Script from malicious domain will be able to steal the data. 

<b>Application has bad "regex" Implementation to check Trusted Origin</b>

Application has CORS policy implemented and perform "Regex" check for whitelisted Domain/Sub-domains. In this scenario, application has weak regex implementation in code which just check for presence of domain name "b0x.com" anywhere in HTTP request "Origin" header. If HTTP header "Origin" has value "inb0x.com" or b0x.comlab.com, regex will mark it pass. This misconfiguration will lead to sharing of data over cross origin. 

<b>Application Trust "null" Origin</b>

In this scenario, application HTTP response header "Access-Control-Allow-Origin" is always set to "null". When user specify any value other than null, application does not process it and keep reflecting "null" in HTTP response. There are few tricks which allow an attacker to perform exploitation and can ex-filtrate data of victim using CORS request. 

<b>Examples:</b>

<b>Application Trust Arbitrary Origin</b>

Application accept any value specified in "Origin" header.
![](https://raw.githubusercontent.com/incredibleindishell/CORS-vulnerable-Lab/master/images/arbitrary_origin.png)

Exploitation Demo

![](https://github.com/incredibleindishell/CORS-vulnerable-Lab/blob/master/POCs/CORS_policy_arbitrary_origin_exploit.gif)

<b>Application has bad "regex" Implementation to check Trusted Origin</b>

Application is trusting whitelisted Origin.
![](https://raw.githubusercontent.com/incredibleindishell/CORS-vulnerable-Lab/master/images/bad_regex%201.png)

Application is not allowing any arbitrary Origin.
![](https://raw.githubusercontent.com/incredibleindishell/CORS-vulnerable-Lab/master/images/bad_regex%202.png)

Application weak regex allowing an Origin which has whitelisted domain string in starting of the domain name.
![](https://raw.githubusercontent.com/incredibleindishell/CORS-vulnerable-Lab/master/images/bad_regex%203.png)

Application weak regex allowing an Origin which has whitelisted domain string in the end of the domain name.
![](https://raw.githubusercontent.com/incredibleindishell/CORS-vulnerable-Lab/master/images/bad_regex%204.png)

<b>Application Trust "null" Origin</b>

Application accept "null" value specified in "Origin" header.
![](https://raw.githubusercontent.com/incredibleindishell/CORS-vulnerable-Lab/master/images/null_origin%202.png)

Application is not accepting any value other then "null" "Origin".
![](https://raw.githubusercontent.com/incredibleindishell/CORS-vulnerable-Lab/master/images/null_origin%202.png)

Exploitation Demo

![](https://github.com/incredibleindishell/CORS-vulnerable-Lab/blob/master/POCs/CORS_policy_null_origin_exploit_chrome.gif)

<b> Ex-filtrating data to attacker controlled server

![](https://github.com/incredibleindishell/CORS-vulnerable-Lab/blob/master/POCs/Data%20ex-filtration.gif)

Ofcourse, 
<br><b>--==[[ With Love From IndiShell ]]==--</b> <img src="https://web.archive.org/web/20140704135452/freesmileys.org/smileys/smiley-flag010.gif">



--==[[ Greetz To ]]==--

	Guru ji zero, Code breaker ICA, root_devil, google_warrior, INX_r0ot, Darkwolf indishell, Baba,
	Silent poison India, Magnum sniper, ethicalnoob Indishell, Reborn India, L0rd Crus4d3r, cool toad,
	Hackuin, Alicks, mike waals, cyber gladiator, Cyber Ace, Golden boy INDIA, d3, rafay baloch, nag256
	Ketan Singh, AR AR, saad abbasi, Minhal Mehdi, Raj bhai ji, Hacking queen, lovetherisk, D2, Bikash Dash and rest of the Team INDISHELL

--==[[Love to]]==--

	My Father, my Ex Teacher, cold fire hacker, Mannu, ViKi, Ashu bhai ji, Soldier Of God, Bhuppi, Gujjar PCP
	Mohit, Ffe, Shardhanand, Budhaoo, Jagriti, Hacker fantastic, Jennifer Arcuri, Thecolonial and Don(Deepika kaushik)

