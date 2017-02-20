CREATE DATABASE operator_services;
USE operator_services;

CREATE TABLE clients (
  id  INT AUTO_INCREMENT NOT NULL,
  tariff VARCHAR(255) NOT NULL NULL,
  validity VARCHAR(255) NOT NULL,
  phoneNumber VARCHAR(255) NOT NULL ,
  PRIMARY KEY(id)
) ENGINE=InnoDB CHARACTER SET=UTF8;

CREATE TABLE services (
  id  INT AUTO_INCREMENT NOT NULL,
  name VARCHAR(255) NOT NULL,
  category VARCHAR(255) NOT NULL,
  PRIMARY KEY(id)
) ENGINE=InnoDB CHARACTER SET=UTF8;

CREATE TABLE clients_services(
  id  INT AUTO_INCREMENT NOT NULL,
  client_id INT NOT NULL ,
  service_id INT NOT NULL ,
  activation_date VARCHAR (55) NOT NULL,
  disconnection_date VARCHAR (55) NOT NULL,
  PRIMARY KEY(id),
  FOREIGN KEY (client_id) REFERENCES clients(id),
  FOREIGN KEY (service_id) REFERENCES services(id)
    ON UPDATE CASCADE
    ON DELETE RESTRICT
) ENGINE=InnoDB CHARACTER SET=UTF8;

CREATE TABLE personal_information(
  id  INT AUTO_INCREMENT NOT NULL,
  client_id INT NOT NULL ,
  full_name VARCHAR (55) NOT NULL,
  address VARCHAR (55) NOT NULL,
  region VARCHAR (55) NOT NULL,
  PRIMARY KEY(id),
  FOREIGN KEY (client_id) REFERENCES clients(id)
    ON UPDATE CASCADE
    ON DELETE RESTRICT
) ENGINE=InnoDB CHARACTER SET=UTF8;

INSERT INTO clients (id,tariff,validity,phoneNumber) VALUES (1,"tariff1","10-02-2017","380938474271");
INSERT INTO clients (id,tariff,validity,phoneNumber) VALUES (2,"tariff1","10-02-2017","380938474272");
INSERT INTO clients (id,tariff,validity,phoneNumber) VALUES (3,"tariff2","12-01-2017","380938474273");
INSERT INTO clients (id,tariff,validity,phoneNumber) VALUES (4,"tariff3","10-01-2017","380938474274");
INSERT INTO clients (id,tariff,validity,phoneNumber) VALUES (5,"tariff3","11-02-2017","380938474275");

INSERT INTO  services(id,name,category) VALUES (1,"service1","category1");
INSERT INTO  services(id,name,category) VALUES (2,"service2","category1");
INSERT INTO  services(id,name,category) VALUES (3,"service3","category2");
INSERT INTO  services(id,name,category) VALUES (4,"service4","category2");
INSERT INTO  services(id,name,category) VALUES (5,"service5","category3");

INSERT INTO  clients_services(id,client_id,service_id,activation_date,disconnection_date) VALUES (1,1,1,"10-02-2017","20-02-2018");
INSERT INTO  clients_services(id,client_id,service_id,activation_date,disconnection_date) VALUES (2,2,3,"10-02-2017","20-02-2017");
INSERT INTO  clients_services(id,client_id,service_id,activation_date,disconnection_date) VALUES (3,3,2,"12-01-2017","19-02-2017");
INSERT INTO  clients_services(id,client_id,service_id,activation_date,disconnection_date) VALUES (4,4,4,"10-01-2017","17-02-2017");
INSERT INTO  clients_services(id,client_id,service_id,activation_date,disconnection_date) VALUES (5,5,5,"11-02-2017","20-02-2017");

INSERT INTO personal_information(id,client_id,full_name,address,region) VALUES (1,1,"fio1","addr1","region1");
INSERT INTO personal_information(id,client_id,full_name,address,region) VALUES (2,2,"fio2","addr2","region1");
INSERT INTO personal_information(id,client_id,full_name,address,region) VALUES (3,3,"fio3","addr3","region2");
INSERT INTO personal_information(id,client_id,full_name,address,region) VALUES (4,4,"fio4","addr4","region3");
INSERT INTO personal_information(id,client_id,full_name,address,region) VALUES (5,5,"fio5","addr5","region2");




