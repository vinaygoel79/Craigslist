#!/bin/bash
mysql -u root -p <<EOFMYSQL

create database CraigsList;

use CraigsList;

create table Accounts(Email varchar(50) not null,Password varchar(50) not null,primary key(Email));

create table Ads(AddId bigint auto_increment not null,Email varchar(50) not null,Mobile bigint(10) not null,Price int not null,Cat varchar(20) not null,SubCat varchar(20) not null,State varchar(50) not null,City varchar(50) not null,PostalCode int(6) not null,Title varchar(100) not null,Details varchar(1000) null,primary key(AddId));

alter table Ads add constraint Email foreign key(Email) references Accounts(Email);

create table SubCat(S_No int auto_increment not null,SubCat varchar(20) not null,Cat varchar(20) not null,primary key(S_No));

insert into SubCat(SubCat,Cat) values('Activities','Community'),('Artists','Community'),('Childcare','Community'),('Classes','Community'),('Events','Community'),('General','Community'),('Groups','Community'),('Local News','Community'),('Lost+Found','Community'),('Musicians','Community'),('Pets','Community'),('Politics','Community'),('Rideshare','Community'),('Volunteers','Community'),
('Apts/Housing','Housing'),('Housing Swap','Housing'),('Housing Wanted','Housing'),('Office/Commercial','Housing'),('Parking/Storage','Housing'),('Real Estate For Sale','Housing'),('Rooms/Shared','Housing'),('Rooms Wanted','Housing'),('Sublets/Temporary','Housing'),('Vacation Rentals','Housing'),
('Strictly Platonic','Personals'),('Women Seek Women','Personals'),('Women Seeking Men','Personals'),('Men Seeking Women','Personals'),('Men Seeking Men','Personals'),('Misc Romance','Personals'),('Casual Encounters','Personals'),('Missed Connections','Personals'),('Rants And Raves','Personals'),
('Automotive','Services'),('Beauty','Services'),('Computer','Services'),('Creative','Services'),('Cycle','Services'),('Event','Services'),('Farm+Garden','Services'),('Financial','Services'),('Household','Services'),('Labor/Move','Services'),('Legal','Services'),('Lessons','Services'),('Marine','Services'),('Pet','Services'),('Real Estate','Services'),("Skill'd Trade",'Services'),('Sm Biz Ads','Services'),('Therapeutic','Services'),('Travel/Vac','Services'),('Write/Ed/tr8','Services'),
('Antiques','For Sale'),('Appliances','For Sale'),('Arts+Crafts','For Sale'),('Atv/Utv/Sno','For Sale'),('Auto Parts','For Sale'),('Baby+Kid','For Sale'),('Barter','For Sale'),('Beauty+Hlth','For Sale'),('Bikes','For Sale'),('Boats','For Sale'),('Books','For Sale'),('Business','For Sale'),('Cars+Trucks','For Sale'),('Cds/Dvd/Vhs','For Sale'),('Cell Phones','For Sale'),('Clothes+Acc','For Sale'),('Collectibles','For Sale'),('Computers','For Sale'),('Electronics','For Sale'),('Farm+Garden','For Sale'),('Free','For Sale'),('Furniture','For Sale'),('Garage Sale','For Sale'),('General','For Sale'),('Heavy Equip','For Sale'),('Household','For Sale'),('Jewelry','For Sale'),('Materials','For Sale'),('Motorcycles','For Sale'),('Music Instr','For Sale'),('Photo+Video','For Sale'),('Rvs+Camp','For Sale'),('Sporting','For Sale'),('Tickets','For Sale'),('Tools','For Sale'),('Toys+Games','For Sale'),('Video Gaming','For Sale'),('Wanted','For Sale'),
('Accounting+Finance','Jobs'),('Admin/Office','Jobs'),('Arch/Engineering','Jobs'),('Art/Media/Design','Jobs'),('Biotech/Science','Jobs'),('Business/Mgmt','Jobs'),('Customer Service','Jobs'),('Education','Jobs'),('Food/Bev/Hosp','Jobs'),('General Labor','Jobs'),('Government','Jobs'),('Human Resources','Jobs'),('Internet Engineers','Jobs'),('Legal/Paralegal','Jobs'),('Manufacturing','Jobs'),('Marketing/pr/Ad','Jobs'),('Medial/Health','Jobs'),('Nonprofit Sector','Jobs'),('Real Estate','Jobs'),('Retail/Wholesale','Jobs'),('Sales/Biz Dev','Jobs'),('Salon/Spa/Fitness','Jobs'),('Security','Jobs'),('Skilled Trade/Craft','Jobs'),('Software/Qa/Dba','Jobs'),('Systems/Network','Jobs'),('Technical Support','Jobs'),('Transport','Jobs'),('Tv/Film/Video','Jobs'),('Web/Info Design','Jobs'),('Writing/Editing','Jobs'),('[ETC]','Jobs'),('[part-time]','Jobs');

create table State(State varchar(50) not null,primary key(State));

insert into State values("Andaman and Nicobar Islands"),("Andhra Pradesh"),("Arunachal Pradesh"),("Assam"),("Bihar"),("Chandigarh"),("Chhattisgarh"),("Dadra and Nagar Haveli"),("Daman and Diu"),("Delhi"),("Goa"),("Gujarat"),("Haryana"),("Himachal Pradesh"),("Jammu & Kashmir"),("Jharkhand"),("Karnataka"),("Kerala"),("Lakshadweep"),("Madhya Pradesh"),("Maharashtra"),("Manipur"),("Meghalaya"),("Mizoram"),("Nagaland"),("Orissa"),("Pondicherry"),("Punjab"),("Rajasthan"),("Sikkim"),("Tamil Nadu"),("Telangana"),("Tripura"),("Uttar Pradesh"),("Uttarakhand"),("West Bengal");

EOFMYSQL
