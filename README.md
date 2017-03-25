# Phishing-on-Facebook
Instructions to set up locally 

For windows users

1.download all the files in the repository and put them in a folder which is created inside www folder in WAMP.

2.turn on apache server

3.access login page using localhost/[filename]/Facebook_Log_In_or_Sign_Up.html


For linux users

1.download all the files in the repository and put them in a folder which is created inside htdocs folder in XAMP

2.Create a text file called "newfile.txt" in the very same location and give it permision by typing
"chmod 777 [path to the file]/newfile.txt" in the terminal.

3.turn on apache server

4.access login page using localhost/[filename]/Facebook_Log_In_or_Sign_Up.html


user credentials will be stored inside a text file called newfile and that text file will be stored inside the same folder.
In sendEmail.php file I have commented out sendmail() option. The reason is for that is when you run sendEmail.php l
ocally (localhost) in order to send an email you have to configure a mail server(Gmail, yahoo, hotmail etc).You can do this 
manually using php_init file.Since it takes little bit more knowledge and some time we go with the easy option which is 
creating a file and wrting credentials to it. But when we are doing the real phishing we use a free hosting site which is 
capable of sending emails.So when hosting the phishing website you can go with any of those methods.