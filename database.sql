CREATE TABLE reports (
	report_id	serial,
	category_id integer,
	user_id	    integer default 0,
	title	    varchar(255),
	email	    varchar(255),
	descr	  	text,
	image_url 	varchar(255)[],
	report_date date,
	report_time	time,
	status    	boolean default true,
	PRIMARY KEY(report_id)
);

// category - type: report/abuse

CREATE TABLE categories (
	category_id serial,
	name		varchar(255),
	type        varchar(10) default 'report',
	status      boolean default true,
	PRIMARY KEY(category_id)
);

CREATE TABLE users (
	user_id  serial,
	name	  varchar(255),
	email	  varchar(255),
	pwd		  varchar(50),
	id_user   varchar(255),
	image_url varchar(255),
	url 	  varchar(255),
	admin     boolean default false, 	  
	type	  varchar(50) default 'normal',
	PRIMARY KEY(user_id)
);

CREATE TABLE comments (
	comment_id serial,
	report_id  integer,
	user_id	   integer default 0,
	parent_id  integer default 0,
	comment	   text,
	status     boolean default false,
	PRIMARY KEY(comment_id)
);

CREATE TABLE abuse (
	abuse_id    serial,
	report_id   integer,
	category_id integer,
	user_id     integer default 0,
	PRIMARY KEY(abuse_id)
);
