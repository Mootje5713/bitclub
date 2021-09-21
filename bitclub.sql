
CREATE TABLE `contactgegevens` (
  `id` int(11) NOT NULL, AUTO_INCREMENT, PRIMARY KEY,
  `Naam` varchar(100) DEFAULT NULL, AUTO_INCREMENT, PRIMARY KEY,
  `Email` varchar(100) DEFAULT NULL,AUTO_INCREMENT, PRIMARY KEY, 
  `Bericht` varchar(100) AUTO_INCREMENT, DEFAULT NULL
);

INSERT INTO `contactgegevens` (`Naam`, `Email`,`Bericht`) VALUES

CREATE TABLE `gebruikers` (
  `userID` int(11) NOT NULL, AUTO_INCREMENT, PRIMARY KEY, 
  `Naam` varchar(255) NOT NULL ,AUTO_INCREMENT, PRIMARY KEY,
  `Achternaam` varchar(255) NOT NULL ,AUTO_INCREMENT, PRIMARY KEY,
  `Email` varchar(255) NOT NULL, AUTO_INCREMENT, PRIMARY KEY,
  `username` varchar(255) NOT NULL, AUTO_INCREMENT, PRIMARY KEY,
  `wachtwoord` varchar(50) NOT NULL, AUTO_INCREMENT, PRIMARY KEY
);


INSERT INTO `gebruikers` (`userID`, `Naam`, `Achternaam`, `Email`, `username`, `wachtwoord`) VALUES


CREATE TABLE `review` (
  `id` int(11) NOT NULL, AUTO_INCREMENT, PRIMARY KEY,
  `reactie` varchar(250) NOT NULL, AUTO_INCREMENT, PRIMARY KEY
);

INSERT INTO `review`(`reactie`) VALUES
