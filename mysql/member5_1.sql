use member5;

show tables;


create table if not exists joinMember2(

userId varchar(100) not null,
userPw varchar(100) not null,
userName varchar(100) not null,
userGender varchar(10) not null,
userPhone varchar(200) not null,
primary key(userId)
)default charset=utf8;

desc joinMember2;

select * from joinMember2;

insert into joinMember2(userId, userPw, userName, userGender, userPhone)
				values('soyo','1111','byun','남자','010-0000-0000');

insert into joinMember2(userId, userPw, userName, userGender, userPhone)
				values('soyo2','2222','byun2','여자','010-2222-2222');
                
insert into joinMember2(userId, userPw, userName, userGender, userPhone)
				values('soyo3','3333','byun3','게이','010-3333-3333');
                
insert into joinMember2(userId, userPw, userName, userGender, userPhone)
				values('soyo4','4444','byun4','래즈','010-4444-4444');
                
insert into joinMember2(userId, userPw, userName, userGender, userPhone)
				values('soyo5','5555','byun5','바이','010-5555-5555');
                
select * from joinMeber2 where userId='soyo' and userPw='1111';