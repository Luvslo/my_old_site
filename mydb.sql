CREATE DATABASE gom;

USE gom;

CREATE TABLE News(
News_Id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
News_Title TEXT null,
News_Text TEXT null,
News_Person TEXT null,
News_Date VARCHAR(255) ,
PRIMARY KEY (News_Id)

);


CREATE TABLE Anagram(
Anagram_Id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
Anagram_Player TEXT null,
Anagram_Score INTEGER,
Anagram_Date VARCHAR(255) ,
PRIMARY KEY (Anagram_Id )

);

CREATE TABLE AnagGames(
Gid INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
Creator TEXT null,
GameName TEXT null,
Password TEXT null,
NumOfQ INTEGER null,
PRIMARY KEY (Gid)

);

CREATE TABLE AnagWordBank(
Wid INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
Value TEXT null,
Gid INTEGER UNSIGNED NOT NULL,
PRIMARY KEY (Wid),
FOREIGN KEY (Gid) REFERENCES AnagGames(Gid)
);


CREATE TABLE AnagramCustom(
Anagram_Id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
Anagram_Player TEXT null,
Anagram_Score INTEGER,
Anagram_Date VARCHAR(255) ,
Gid INTEGER UNSIGNED NOT NULL,
PRIMARY KEY (Anagram_Id ),
FOREIGN KEY (Gid) REFERENCES AnagGames(Gid)

)