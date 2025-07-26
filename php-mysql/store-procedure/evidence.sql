use company;

drop table if exists manufacturer;
create table manufacturer(
	id int(10) primary key auto_increment,
	name varchar(20) not null,
	contact varchar(20) 
);
insert into manufacturer(name,contact)values('Samsung','01874874587');
insert into manufacturer(name,contact)values('LG','01974874584');
insert into manufacturer(name,contact)values('Redmi','01574874874');
insert into manufacturer(name,contact)values('Philips','01878745874');
insert into manufacturer(name,contact)values('Toshiba','0167845874');


drop table if exists product;
create table product(
	id int(10) primary key auto_increment,
	name varchar(20),
	price double(10,2),
	manufac_id int(10)
);
insert into product(name,price,manufac_id)values('Monitor','8000','1');
insert into product(name,price,manufac_id)values('Mobile','28000','3');
insert into product(name,price,manufac_id)values('USB Drive','720','5');
insert into product(name,price,manufac_id)values('HDD','7200','4');






delimiter //
drop procedure if exists add_manufacture //
create procedure add_manufacture(mname varchar(20), mcontact varchar(20))
begin 
insert into manufacturer(name,contact)values(mname,mcontact);
end // 
delimiter ;




drop view if exists view_product;


create view view_product as select product.id,
p.name,p.price,m.name manme,
m.contact from product p, manufacturer m where m.id=p.manufac_id ;














delimiter //

drop procedure if exists add_product //
create procedure add_product(pname varchar(20),price double(10,2),m_id int(10))
begin 
insert into product(name,price,manufac_id)values(pname,price,m_id);
end //

delimiter ;















