create table movieTable
( `movieID` int unsigned not null auto_increment primary key,
  `movieName` char(50) not null
);

create table slotTable
( `slotID` int unsigned not null auto_increment primary key,
  `movieID` text not null,
  `day` text not null,
  `time` time not null
);

create table seatsTable
( `seatID` int unsigned not null auto_increment primary key,
  `slotID` text not null,
  `seatNumber` char(2) not null,
  `availability` text not null
);

create table transTable
( `transID` int unsigned not null auto_increment primary key,
  `name` text not null,
  `email` text not null,
  `number` char(8) not null,
  `address` text not null,
  `slotID` int not null,
  `seatID` int not null
);