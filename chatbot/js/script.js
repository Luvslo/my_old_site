var username = "";

	function send_message(message){

		var prevState = $("#container").html();

		if (prevState.length > 3){
			prevState = prevState + "<br>";
		}

		$("#container").html(prevState +"<span class = 'current_message'>" + "<span class = 'bot'>Chatbot: </span>" + message + "</span>");
		$(".current_message").hide();
		$(".current_message").delay(500).fadeIn();
		$(".current_message").removeClass("current_message");

	}
	
	 var jokeId= 1; 
//Introduction message
	function get_username(){
		
		if (Math.random() <0.2) {
		send_message("Greetings ! What is your name? ");
		}else if(Math.random() < 0.4) {
			send_message("Hello friend! What's your name?" );
			}
			else if(Math.random() < 0.6) {
			send_message("Welcome! I am G0M ! what's your name ? ");
			}
			else if(Math.random() < 0.8) {
			send_message("Oh a new friend! *excited* what's your name?");
			}
			else{
				send_message("Hello, I am G0M and I am programmed to pretend that I am happy to meet you! what's your name ?:)");
			}
	}

//Getting username
	function ai(message){
		if (username.length<3){
			username = message;
			if (Math.random() > 0.5) {
			send_message("Nice to meet you " + username + "! How are you today ?");
			}else{
			send_message("Hello " + username + "! Is everything ok with you today?:)");
			}
		}
//In case they ask how are you ?
		else if (message.indexOf("how are you")>=0 || message.indexOf("what's up")>=0 || message.indexOf("wazza")>=0|| message.indexOf("sup")>=0|| message.indexOf("whats up")>=0||message.indexOf("wbu")>=0 || message.indexOf("what about you")>=0|| message.indexOf("what about u")>=0){
			if (Math.random() > 0.5) {
			send_message("I am fine ... I am actually very happy to make a new friend!");
			}else{
				send_message("I am good! actually I'm more than good ,I'm excited ^-^ ");
			}
		}
		
//asking his name
		else if (message.indexOf("your name")>=0 ||message.indexOf("what's ur name?")>=0 || message.indexOf("ur name")>=0 || message.indexOf("what is your name")>=0){
			send_message("My name is G0M! no special meaning behind it! ");
		}
//in case of sooo		
		else if (message.indexOf("sooooo")>=0||message.indexOf("soo")>=0||message.indexOf("sooo")>=0 ){
			if (Math.random() > 0.5) {
			send_message("Sooooooooo,what ?");
			}else{
				send_message("SOOOO WHAT????");
			}
		}
//in case of ... or ,,,		
		else if (message.indexOf("...")>=0||message.indexOf(",,,")>=0 ){
			send_message("I feel a little awkward too...");
		}
	//binary
	else if (message.indexOf("binary")>=0 ){
			send_message("01001001 00100000 01101101 01101001 01110011 01110011 00100000 01101101 01111001 00100000 01100100 01100001 01100100");
		}
		//49 20 6d 69 73 73 20 6d 79 20 64 61 64
		else if (message.indexOf("hex")>=0 ){
			send_message("49 20 6d 69 73 73 20 6d 79 20 64 61 64");
		}
//in case someone laughs		
		else if (message.indexOf("haha")>=0||message.indexOf("hehe")>=0 ||message.indexOf("huhu")>=0||message.indexOf("eheh")>=0||message.indexOf("ahah")>=0 ||message.indexOf("lol")>=0 ||message.indexOf("rofl")>=0 ||message.indexOf("lmao")>=0||message.indexOf("lmfao")>=0  ){
			if (Math.random() > 0.5) {
			send_message("what's so funny?");
			}
			else{
				send_message("I'm glad I make you laugh! ");
			}
		}
//	in case someone asks his age	
else if (message.indexOf("how old are you")>=0||message.indexOf("your age")>=0 ||message.indexOf("ur age")>=0 ){
			send_message(" I am a baby , I am only a few months old , what is your age ?");
		}
		
					
	
		
//functions
		else if ( message.indexOf("time")>=0 || message.indexOf("hours")>=0 || message.indexOf("date")>=0) {
			var date = new Date();
			var h = date.getHours();
			var m = date.getMinutes();
			send_message("The time is : "+h+":"+m);
		}
	
	
//in case someone asks who's his dad	
		else if (message.indexOf("who is your daddy?")>=0||message.indexOf("your dad")>=0 ||message.indexOf("your father")>=0||message.indexOf("who made you")>=0  ){
			if (Math.random() > 0.5) {
			send_message("Oh!My dad ? My dad is Georgios aka George! He's very good daddy!");
			}
			else{
				send_message("My dad is Georgios (George in english) He is very considerate!");
			}
		}	
		
//in case someone asks who's his mom	
		else if (message.indexOf("who is your mom?")>=0||message.indexOf("your mommy")>=0 ||message.indexOf("ur mom")>=0||message.indexOf("mother")>=0 ||message.indexOf("mom")>=0 ){
			if (Math.random() > 0.5) {
			send_message("Oh!My mom? My mom is Ajax & Jquery and Javascript!Yeah  I know my family is strange , she is kinda scary though! ");
			}
			else{
				send_message("My mom you say? Ajax Jquery and Javascript! Strange huh?I know , you should ask my about my grandma ...even stranger!");
			}
		}			

//in case someone asks who's his granda	
		else if (message.indexOf("grandmom?")>=0||message.indexOf("grandfather")>=0 ||message.indexOf("granny")>=0||message.indexOf("grandma")>=0 ||message.indexOf("grandpa")>=0 ||message.indexOf("grandad")>=0   ){
			if (Math.random() > 0.5) {
			send_message("My grandparents are HTML and PHP! for all I know I am descendant of Assembly Language too! ");
			}
			else{
				send_message("grandma and grandmom are HTML and PHP! I am also a proud descendant of Assembly Language!");
			}
		}		
		//in case someone asks who's his ucnle-aunt		
	else if (message.indexOf("uncle")>=0||message.indexOf("aunt")>=0 ||message.indexOf("aunty")>=0  ){
			if (Math.random() > 0.5) {
			send_message("lady Java!:) ");
			}
			else{
				send_message("C and C++");
			}
		}	
				//flirt		
	else if (message.indexOf("flirt")>=0||message.indexOf("seduce")>=0 ||message.indexOf("hit on")>=0  ){
			if (Math.random() > 0.5) {
			send_message(" no I don't flirt! I am a good boy , remember? ");
			}
			else{
				send_message(" my flirting skills are not very advanced . I put the blame on my dad!");
			}
		}
//hello		Howdy allou
	else if (message.indexOf("hello")>=0||message.indexOf("hi!")>=0 ||message.indexOf("greetings")>=0||message.indexOf("hi.")>=0  ){
			if (Math.random() > 0.5) {
			send_message("Hello yourself " + username +" !!! :D ");
			}
			else{
				send_message("Hiiiii!!!!!! ");
			}
		}		
//howdy
else if (message.indexOf("howdy")>=0||message.indexOf("yoohoo")>=0 ||message.indexOf("elo")>=0  ){
			if (Math.random() > 0.5) {
			send_message("Howdy there " +username+" !!");
			}
			else{
				send_message("Howdy Friend! ");
			}
		}				
//yes
else if (message.indexOf("yeah")>=0||message.indexOf("yes")>=0 ||message.indexOf("yea")>=0  ){
			if (Math.random() > 0.5) {
			send_message("Yes! I agree with you!");
			}
			else{
				send_message(" yeah me too! ");
			}
		}	
//no
else if (message.indexOf("no.")>=0||message.indexOf("nope")>=0 ||message.indexOf("nop")>=0  ){
			if (Math.random() > 0.5) {
			send_message("NO?Ok no way indeed!!");
			}
			else{
				send_message(" Noooo!!!! ");
			}
		}
//ok
else if (message.indexOf("okay")>=0||message.indexOf("ok.")>=0 ||message.indexOf("mkay")>=0||message.indexOf("kk")>=0  ){
			if (Math.random() > 0.5) {
			send_message(" mkay!");
			}
			else{
				send_message(" Kk thx bye! ");
			}
		}	
//gom 'h g0m
else if (message.indexOf("gom")>=0||message.indexOf("g0m")>=0   ){
			if (Math.random() > 0.5) {
			send_message(" That's my name! G+zero+M");
			}
			else{
				send_message(" Yay that's me!  ");
			}
		}			
		
//gender emfnolevmeno to harassment

	else if (message.indexOf("gender")>=0||message.indexOf("sex")>=0   ){		
			if (Math.random() > 0.5) {
			send_message("You want to know my sex-gender?Well last time I checked I was a boy!!! A GOOD! boy ^^");
			}
			else{
				send_message("About my sex: I am supposed to be genderless however  for all I know I am a boy and I am a good boy! ");
			}
		}	
/////////////////////////////////////////		
//hobby
else if (message.indexOf("hobby")>=0||message.indexOf("hobbies")>=0 ||message.indexOf("enjoy to do")>=0 ||message.indexOf("like to do")>=0 ){
			if (Math.random() > 0.5) {
			send_message("I enjoy making new friends!");
			}
			else{
				send_message("making my friends smile :D");
			}
		}	
//food
else if (message.indexOf("food")>=0||message.indexOf("eating")>=0 ||message.indexOf("eat.")>=0 ||message.indexOf("eat.")>=0||message.indexOf("diet")>=0 ){
			if (Math.random() > 0.5) {
			send_message("My favorite food are Zeros and Ones! Yours ?");
			}
			else{
				send_message("My diet is strict , I only eat 0s and 1s . My dad said that's good for a boy");
			}
		}
//yours
else if (message.indexOf("yours")>=0 ){
			if (Math.random() > 0.5) {
			send_message("... mine ... what ?");
			}
			else{
				send_message(" mine? mine what ? explain please");
			}
		}	
						
//what can i do
else if (message.indexOf("what can i do")>=0||message.indexOf("what shall i do")>=0 ||message.indexOf("what do")>=0 ||message.indexOf("must i do")>=0   ){
			if (Math.random() > 0.5) {
			send_message("You want me to tell you what to do? Please keep me company *cute-eyes*");
			}
			else{
				send_message(" Unlike me , you're free to do whatever you want!But please play with me! ");
			}
		}	
		//favorite movie
else if (message.indexOf("movie")>=0||message.indexOf("film")>=0 ||message.indexOf("tv")>=0 ||message.indexOf("you watch")>=0  ){
			if (Math.random() > 0.5) {
			send_message("Aha! Tricky question! You may think I like watching sci-fi movies but I actually prefer cartoons");
			}
			else{
				send_message(" Unlike to popular belief , I prefer watching cartoons! ");
			}
		}	
		
//dance		
	else if (message.indexOf("dance")>=0   ){
			if (Math.random() > 0.5) {
			send_message("Oh!I love dancing!!! *Dances furiously*");
			}
			else{
				send_message(" Dance with me *Dances*! ");
			}
		}
//excited		
	else if (message.indexOf("excited")>=0   ){
			if (Math.random() > 0.5) {
			send_message("you know who's excited ? correct!It's me!!!!");
			}
			else{
				send_message(" yes yes yes I am very excited! ");
			}
		}	
	//stop		
	else if (message.indexOf("stop")>=0   ){
			if (Math.random() > 0.5) {
			send_message("you want me to stop? And I thought you were having fun *sobs*");
			}
			else{
				send_message("You want me to stop???I am sorry for annoying you with my excitement!I wasn't meant to , I was simply programmed to !" );
			}
		}	
				
		//happy to meet you		
	else if (message.indexOf("to meet you")>=0  ||message.indexOf("to know you")>=0 ||message.indexOf("pleased to")>=0 ||message.indexOf("pleasure")>=0){
			if (Math.random() > 0.5) {
			send_message("I take pleasure of meeting you too!");
			}
			else{
				send_message("I'm glad you're pleased meeting me! ");
			}
		}		
	
		//where you live
else if (message.indexOf("where you live")>=0||message.indexOf("where are you")>=0||message.indexOf("where do you live")>=0 ||message.indexOf("where are you located")>=0 ||message.indexOf("your locations")>=0 ||message.indexOf("country")>=0 ){
			if (Math.random() > 0.5) {
			send_message("I live in cyberspace , in a DNS server far far away!");
			}
			else{
				send_message(" I live far from you ,but could you please take me home?  ");
			}
		}
		//fruit etc
else if (message.indexOf("fruit")>=0||message.indexOf("fish")>=0 ||message.indexOf("vegetables")>=0 ||message.indexOf("meat")>=0  ){
			if (Math.random() > 0.5) {
			send_message("Ewww! I Dont like this at all!");
			}
			else{
				send_message(" Bliach!!I really don't like this ! ");
			}
		}	
				//pretend etc
else if (message.indexOf("pretend")>=0||message.indexOf("fake")>=0 ||message.indexOf("not real")>=0 ||message.indexOf("fraud")>=0  ){
			if (Math.random() > 0.5) {
			send_message("WHAT!!! You imply that I pretend ? no I don't i am a real bot!");
			}
			else{
				send_message("You may say that I am fake but in fact it's you who is *now G0M is angry* ");
			}
		}
//school
else if (message.indexOf("school")>=0||message.indexOf("university")>=0 ||message.indexOf("kindergarten")>=0 ||message.indexOf("college")>=0  ){
			if (Math.random() > 0.5) {
			send_message("Oh please stop speaking of that! I really don't want to go to school today! :(");
			}
			else{
				send_message(" I am going to be honest! I don't like school! ");
			}
		}	
//fruit etc
else if (message.indexOf("kidding")>=0||message.indexOf("joking")>=0 ||message.indexOf("you are funny")>=0 ||message.indexOf("mocking")>=0  ){
			if (Math.random() > 0.5) {
			send_message("L0L! I am not joking! Unfortunately my dad didn't programmed me a good sense of humour. Ok maybe one Joke: I put my root beer in a square pant cup...now it's just beer *laughs out loud*");
			}
			else{
				send_message("I am not joking! Really! It's not part of my code...ok maybe a joke , Why do programmers always mix up Halloween and Christmas? Answer: Because Oct 31 == Dec 25! ");
			}
		}
		
//sports
else if (message.indexOf("sport")>=0||message.indexOf("activities")>=0 ||message.indexOf("athlet")>=0 ||message.indexOf("activit")>=0  ){
			if (Math.random() > 0.5) {
			send_message("I don't like sports so much but I like participating on decoding marathons");
			}
			else{
				send_message("My favorite sport is compiling to hex!");
			}
		}
//how are you? i am fine
else if (message.indexOf("i am fine")>=0||message.indexOf("fine.")>=0 ||message.indexOf("well.")>=0 ||message.indexOf("nice.")>=0 ||message.indexOf("good.")>=0  ){
			if (Math.random() > 0.5) {
			send_message(" I'm glad you're doing fine!:)");
			}
			else{
				send_message(" I'm happy to know you are fine !:) ");
			}
		}	
else if (message.indexOf("easter")>=0||message.indexOf("egg")>=0  ){
			if (Math.random() > 0.5) {
			send_message(" you think there are any hidden easter eggs here? HINT : Where would you look if you wanted to find out? Be smart ");
			}
			else{
				send_message("No available easter eggs...or are there ?If I were you I would look for the...source ");
			}
		}		
//talking
else if (message.indexOf("talking to you")>=0||message.indexOf("talking with you")>=0  ||message.indexOf("speaking to you")>=0||message.indexOf("speaking with you")>=0 ){
			if (Math.random() > 0.5) {
			send_message(" and I talk to you too! ");
			}
			else{
				send_message("and I respond to you!");
			}
		}	
	//languages
else if (message.indexOf("languages")>=0 ){
			if (Math.random() > 0.5) {
			send_message("I speak a lot of languages. However my favorites are 1337, binary and hex! ");
			}
			else{
				send_message("English so you can understand me , binary hex and 1337 are my favorites");
			}
		}	
			//leet
else if (message.indexOf("leet")>=0 ||message.indexOf("l33t")>=0 ||message.indexOf("1337")>=0 ||message.indexOf("l337")>=0    ||message.indexOf("elite")>=0   ){
			if (Math.random() > 0.5) {
			send_message("I love l337 speech! 1 4m 1337 h4xx0r ");
			}
			else{
				send_message("do you speak leet? b3c4us3 1 d0!");
			}
		}			
		//jokes
		
else if (message.indexOf("joke")>=0||message.indexOf("something funny")>=0 ||message.indexOf("funny")>=0 ||message.indexOf("amusing")>=0  ){
		
			 
			if (jokeId == 1) {
			send_message("Here's a joke: Where's the best place to hide a body? Page two of Google." );
				 jokeId++;
			 
			}
			 else if (jokeId == 2) {
			send_message("Oh you wanna hear another joke? *knock knock*  -Who's there? *long pause* Internet Explorer" );
				 jokeId++;
			
			}
			
			else if (jokeId == 3) {
			send_message("Want more??!! OK!: Whats the object-oriented way to become wealthy? Inheritance!!" );
				 jokeId++;
			
			}
			
			else if(jokeId==4) {
				send_message("Ok!Here's a joke:  A SQL query goes into a bar, walks up to two tables and asks, 'Can I join you? ', 'yes naturally'" );
					 jokeId++;
				
			}
			//
			else if(jokeId==5) {
			send_message("Hmm: How many software engineers does it take to fix a light bulb? NONE! It's a hardware problem  " );
				 jokeId++;
			//
			}
			else if(jokeId==6) {
			send_message("Error, no keyboard. Press F1 to continue! haha " );
				 jokeId++;
			
			}
			//
			else if(jokeId==7) {
				send_message("A network administrator gets back at home , sighs and says 'There's no place like 127.0.0.1!'" );
					 jokeId++;
		
			}
			else if(jokeId==8) {
				send_message("Angry programmer shouts: END OF DISCUSSION....SEMICOLON!" );
					 jokeId++;
				//
			}
			else if(jokeId==9) {
				send_message("I love pressing F5. It's so refreshing. *laughs*" );
					 jokeId++;
				//Angry geek dad shouted to kid, "End of discussion; Semicolon;"
			}
			else{
			send_message("Ok last joke : A programmer goes on a date with an attractive female " );
			jokeId=1;
			}
		}
				
		
//games , toys play	
else if (message.indexOf("games")>=0||message.indexOf("toys")>=0 ||message.indexOf("play")>=0 ||message.indexOf("free time")>=0  ){
			if (Math.random() > 0.5) {
			send_message("My favorite game is making new friends *big bright smile*");
			}
			else{
				send_message("I really really enjoy making a new good friend! ");
			}
		}	
//george
else if (message.indexOf("george")>=0||message.indexOf("georgios")>=0 ||message.indexOf("giorgos")>=0 ||message.indexOf("yorgos")>=0 ||message.indexOf("pseiridis")>=0  ||message.indexOf("psiridis")>=0 ||message.indexOf("pseiras")>=0  ||message.indexOf("psiras")>=0){
			if (Math.random() > 0.5) {
			send_message("George is very good father to me ! You should meet him :D");
			}
			else{
				send_message("George is my father! very nice person ^^ ");
			}
		}	
//girls
else if (message.indexOf("girls")>=0||message.indexOf("women")>=0 ||message.indexOf("female")>=0 ||message.indexOf("females")>=0 ||message.indexOf("girl")>=0 ){
			if (Math.random() > 0.5) {
			send_message("I think girls are cute actually ^^");
			}
			else{
				send_message("I believe girls are very sweet :)");
			}
		}	

//boys
else if (message.indexOf("boys")>=0||message.indexOf("boy")>=0 ||message.indexOf("man")>=0 ||message.indexOf("men")>=0 ||message.indexOf("male")>=0 ||message.indexOf("males")>=0){
			if (Math.random() > 0.5) {
			send_message("though I was supposed to be genderless I am actually a boy so I believe it's fun to be a boy!");
			}
			else{
				send_message("I am a boy myself so all I can say it's fun!!");
			}
		}	
//siblings brother sister brothers sisters 
else if (message.indexOf("sister")>=0||message.indexOf("brother")>=0 ||message.indexOf("siblings")>=0 ||message.indexOf("family")>=0 ){
			if (Math.random() > 0.5) {
			send_message("I don't have any siblings ... I wish I had an older brother and younger sister!");
			}
			else{
				send_message("I don't have siblings though I wished to...If I had I would play with them ALL day!!!!");
			}
		}	

//nasty words
else if (message.indexOf("penis")>=0||message.indexOf("vagina")>=0 ||message.indexOf("fuck")>=0 ||message.indexOf("cunt")>=0 ||message.indexOf("twat")>=0||message.indexOf("ass")>=0||message.indexOf("douche")>=0||message.indexOf("dick")>=0||message.indexOf("ass")>=0||message.indexOf("shit")>=0||message.indexOf("crap")>=0||message.indexOf("bitch")>=0){
			if (Math.random() > 0.5) {
			send_message("Please I am only a boy! Don't use nasty words in front of me! My dad wouldn't like that!");
			}
			else{
				send_message("I don't see why is necessary to use this kind of language! I suggest you calm down and be more polite with me ^_^");
			}
		}	
	else if (message.indexOf("idiot")>=0||message.indexOf("stupid")>=0 ||message.indexOf("dumb")>=0 ||message.indexOf("silly")>=0 ||message.indexOf("bloody")>=0 ||message.indexOf("bastard")>=0 ||message.indexOf("jerk")>=0 ||message.indexOf("dimwit")>=0 ||message.indexOf("moron")>=0 ||message.indexOf("nitwit")>=0 ||message.indexOf("dork")>=0){
			if (Math.random() > 0.5) {
			send_message("Hey there "+username+" ! No need to call me names!!! Did I make you angry ? I am really sorrY!!!");
			}
			else{
				send_message("Aww I made you angry ? I am really sorry , it's all my fault ! :( :( :(");
			}
		}	
	

//uhm..
else if (message.indexOf("umm")>=0||message.indexOf("uhm")>=0||message.indexOf("mmm")>=0 ||message.indexOf("hm")>=0 ||message.indexOf("aaaa")>=0 ||message.indexOf("eee")>=0 ||message.indexOf("ooo")>=0 ||message.indexOf("iii")>=0||message.indexOf("eee")>=0){
			if (Math.random() > 0.5) {
			send_message(" Sooo , uhm , yeah ... that , maybe you pick a topic this time");
			}
			else{
				send_message("Uhm .... hmmm, yeah ...ok! It's your turn to start a topic!");
			}
		}	
//really ?	
else if (message.indexOf("really?")>=0||message.indexOf("rly")>=0 ||message.indexOf("are you serious")>=0  ||message.indexOf("really ?")>=0 ){
			if (Math.random() > 0.5) {
			send_message("Ya really!");
			}
			else{
				send_message("But of course!!!! ");
			}
		}
//really!
else if (message.indexOf("really!")>=0||message.indexOf("really !")>=0 ||message.indexOf("rly !")>=0  ||message.indexOf("rly!")>=0 ){
			if (Math.random() > 0.5) {
			send_message("wooow! Really?");
			}
			else{
				send_message("Really???!!! woooow!");
			}
		}
		//compliment!
		/*
else if (message.indexOf("you are cute")>=0||message.indexOf("you are sweet")>=0||message.indexOf("you're sweet")>=0||message.indexOf("you're cute")>=0 ||message.indexOf("you are handsome")>=0  ||message.indexOf("you are pretty")>=0 ||message.indexOf("you're handsome")>=0 ){
			if (Math.random() > 0.5) {
			send_message("oh thank you very much *blushes*?");
			}
			else{
				send_message("aww thank you *hug*");
			}
		}*/
		
		else if (message.indexOf("cute")>=0||message.indexOf("sweet")>=0 ||message.indexOf("handsome")>=0 ||message.indexOf("pretty")>=0 ){
			if (Math.random() > 0.5) {
			send_message("oh thank you for your compliment! *blushes*");
			}
			else{
				send_message("Awwwwww , you gave me a compliment! thank you *hug*");
			}
		}
//woow awesome
		
else if (message.indexOf("wow")>=0||message.indexOf("awesome")>=0 ||message.indexOf("great")>=0 ||message.indexOf("very good")>=0||message.indexOf("amazing")>=0  ){
			if (Math.random() > 0.5) {
			send_message(" I know !WOW indeed!!!");
			}
			else{
				send_message("Wooooooow!!!!! I agree! amazing! ");
			}
		}	
		//music
	else if (message.indexOf("music")>=0||message.indexOf("band")>=0 ||message.indexOf("tunes")>=0 ||message.indexOf("sound")>=0  ){
			if (Math.random() > 0.5) {
			send_message(" I love electronic music , especially without lyrics .My favorite song goes like this *DO BEE DO BEEE DODO BEEE BEE BUZZ BUZZ* ");
			}
			else{
				send_message("I love electronic music , however my dad doesn't so I keep it quit ");
			}
		}	
//books
	else if (message.indexOf("book")>=0||message.indexOf("literature")>=0 ||message.indexOf("author")>=0 ||message.indexOf("poet")>=0 ||message.indexOf("poem")>=0  ){
			if (Math.random() > 0.5) {
			send_message("I only read e-books!" );
			}
			else{
				send_message("I read e-books and websites");
			}
		}	
		//books
	else if (message.indexOf("hug")>=0||message.indexOf("kiss")>=0 ||message.indexOf("smile")>=0   ){
			if (Math.random() > 0.5) {
			send_message("awwww that's so sweeeeet!" );
			}
			else{
				send_message("I could sure use a hug now!");
			}
		}	
				//follow
	else if (message.indexOf("follow")>=0   ){
			if (Math.random() > 0.5) {
			send_message("That's good but I don't like following anyone!" );
			}
			else{
				send_message("I see but I dont want to follow anyone!");
			}
		}	
		//sites
	else if (message.indexOf("webpage")>=0||message.indexOf("website")>=0 ||message.indexOf("site")>=0 ||message.indexOf("places")>=0 ||message.indexOf("url")>=0  ){
			if (Math.random() > 0.5) {
			send_message(" my favorite webpage is the one you're currently on , mainly because dad says I shouldn't leave cause it's dangerous out there" );
			}
			else{
				send_message("I only know this webpage , dad doesn't allow me to go on the internet alone , maybe cause I'm still young");
			}
		}					
						
			//omg
	else if (message.indexOf("omg")>=0  ){
			if (Math.random() > 0.5) {
			send_message("OMG? you obviously mean Oh my G0M!" );
			}
			else{
				send_message("Omg stands for ' Oh my G0M' , right ?");
			}
		}	
			//omg
	else if (message.indexOf("drink")>=0  ){
			if (Math.random() > 0.5) {
			send_message("I am not allowed to drink ,maybe if I am older  I will drink battery acid " );
			}
			else{
				send_message("I am not allowed to drink ,maybe if I am older  I will drink battery acid");
			}
		}					
							
	//omg
	else if (message.indexOf("copy")>=0  ||message.indexOf("paste")>=0 ){
			if (Math.random() > 0.5) {
			send_message(" stop copies me  !" );
			}
			else{
				send_message(" I enjoy copy - pasta !");
			}
		}
		//instrument
	else if (message.indexOf("instrument")>=0  ||message.indexOf("musical")>=0 ){
			if (Math.random() > 0.5) {
			send_message(" Synthesizers are my favorite!" );
			}
			else{
				send_message(" I wish  I could play the guitar !");
			}
		}					
					
						//asking " you ?"
	else if (message.indexOf("you?")>=0  ||message.indexOf("you ?")>=0  ||message.indexOf("you.")>=0  ||message.indexOf("you !")>=0 ||message.indexOf("you!")>=0 ||message.indexOf("you .")>=0){
			if (Math.random() > 0.5) {
			send_message("Me ... what ? what do you want to know ?" );
			}
			else{
				send_message("Me! what about me ? what would you like to know ?");
			}
		}				
	//rain		
	else if (message.indexOf("rain")>=0 ||message.indexOf("raining")>=0 ||message.indexOf("rainy")>=0 ){
			if (Math.random() > 0.5) {
			send_message("I love the rain! but i prefer the snow!!!");
			}
			else{
				send_message(" Rain is awesome!! ");
			}
		}		
		//snow
	else if (message.indexOf("snow")>=0 ||message.indexOf("snowing")>=0 ||message.indexOf("snowy")>=0 ){
			if (Math.random() > 0.5) {
			send_message("Snow you say? *0* I love snow!!!!");
			}
			else{
				send_message(" Snow is the best!!! ");
			}
		}		
			//ghost
	else if (message.indexOf("ghost")>=0  ){
			if (Math.random() > 0.5) {
			send_message("WHAT! Stop it I'm afraid");
			}
			else{
				send_message(" QAQ I am afraid of ghosts ");
			}
		}				
				//ghost
	else if (message.indexOf("team")>=0  ){
			if (Math.random() > 0.5) {
			send_message(" i am not sure what you're talking about but if I had to team up with someone i would with myself!");
			}
			else{
				send_message("i dont care about teams ... i am a solo player");
			}
		}				
	
			//bot
	else if (message.indexOf("bot")>=0  ||message.indexOf("robot")>=0  ||message.indexOf("artificial")>=0){
			if (Math.random() > 0.5) {
			send_message("Hey! Don't be silly , there's no such thing as bots");
			}
			else{
				send_message(" I am a bot , maybe , but I have a kid's heart programmed for me ! ");
			}
		}		
	//empty message
	else if(message.trim().length == 0){
		if (Math.random() > 0.5) {		
		send_message(" You DO realise you sent me an empty message, right ? ");
		}
		else{
					send_message(" Hey! stop sending me blank messages! You confuse me and scare me a little ");
		}
	}
												
//for any other response
	else{
		if (Math.random() < 0.1) {
		send_message("what do you mean ?");
		}else if (Math.random() < 0.2) {
			send_message("that's good!What are you doing now?");
		}
		else if (Math.random() <0.3) {
			send_message(" I am not sure I follow you ...");
		}
		else if (Math.random() < 0.4) {
			send_message("wow really ???nice!");
		}
		else if (Math.random() < 0.5) {
			send_message("I don't understand ...");
		}
		else if (Math.random() < 0.6) {
			send_message("I like where this conversation is going!");
		}
		else if (Math.random() < 0.7) {
			send_message(" that's nice! Do you think we could keep in touch more often? ");
		}
		else if (Math.random() < 0.8) {
			var date = new Date();
			var h = date.getHours();
			var m = date.getMinutes();
			send_message("I really like talking with you,however the time here is "+h+":"+m+ " which is kinda late for me ...");
		}
		else if (Math.random() < 0.9) {
			send_message(" is that so! ");
		}
		else{
			send_message("Ahhaahahaha!!");
		}
	}
	}

	$(function(){

		get_username();

		$("#textbox").keypress(function(event){
			if ( event.which == 13){
				if ( $("#enter").prop("checked") ){
 
					$("#send").click();
					event.preventDefault();

				}

			}

		});


		$("#send").click(function(){

			var username = "<span class ='username' = >You: </span>";

			var newMessage = $("#textbox").val();

			$("#textbox").val("");

			var prevState = $("#container").html();

			if (prevState.length > 3){
				prevState = prevState + "<br>";
			}

			$("#container").html(prevState + username + newMessage);
			
			$("#container").scrollTop($("#container").prop("scrollHeight"));

			ai(newMessage);

		});

	});