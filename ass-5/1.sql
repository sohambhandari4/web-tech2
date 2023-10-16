create table owner(
oname text primary key,
address text,
phoneno int
);

create table property(
oname text ,
foreign key (oname) references owner (oname) on delete cascade on update cascade,
pno int primary key ,
desc1 text,
area text
);


create table own_pro(
oname text,
 foreign key (oname) references owner (oname) on delete cascade on update cascade,
pno int ,
foreign key (pno) references property (pno) on delete cascade on update cascade  ,
primary key(oname,pno)
);

a)   insert into owner values('abc','pune',12345678);
      insert into owner values('pqr','pune',98764453);
      insert into owner values('Nene','pune',1234);


b)   insert into property values('abc',233,'new ','pune');
      insert into property values('abc',401,'new ','pune');

c)  alter table owner alter column phoneno type varchar(10) ;
     update owner set phoneno=9890278008 where oname='Nene';


d) delete from owner  where address='pune' and name='abc';