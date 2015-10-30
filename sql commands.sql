extensive select - 256
cascade/restrict on update/delete - 1003
/** command used to create a table**/
show create table 'TABLE_NAME';


/**RENAME A TAB**/
ALTER TAB T RENAME TO T!;


/** describe attributes of a table**/
DESC `TABLE NAME`;

/**add primary key to an existing table**/
ALTER TABLE 'TAB_NAME'
ADD COLUMN `p_id` INT NOT NULL AUTO_INCREMNT FIRST,
ADD PRIMARY KEY(p_id);


/**add a column to an existing table**/
ALTER TABLE 'T_NAME'
ADD COLMUN phone_no VARCHAR(10) NOT NULL AFTER NAME;


/** command used to create a table**/
show create table 'TABLE_NAME';


/** describe attributes of a table**/
DESC `TABLE NAME`;


/**add a foreign key (grade_id) to an existing table (users), follow the following steps:**/

ALTER TABLE users ADD grade_id smallint unsigned not null default 0;
ALTER TABLE users ADD CONSTRAINT fk_grade_id FOREIGN KEY (grade_id) references grades(id);


/**add a column to an existing table**/
ALTER TABLE 'T_NAME'
ADD COLMUN phone_no VARCHAR(10) NOT NULL AFTER NAME;


/**change name and datatype of existing column**/
ALTER TABLE T
CHANGE COLUMN `old Col name` `new col name` INT NOT NULL AUTO_INCREMENT,
ADD PRIMARY KEY(`new column name`);


/**drop an existing col**/
alter table T
drop `col name`;


/**change only data type of an existing column**/
alter table T
MODIFY COLUMN 'C' VARCHAR(10);


/**CHANGE POSITION OF A COLUMN**/
alter table T
MODIFY COLUMN 'C' after COLUMN 'X';


/**update the values in a column**/
UPDATE TAB_NAME
SET
COL_NAME = 'new'
WHERE COL_NAME = 'old';


/**rename at tab**/
ALTER TAB T_NAME
RENAME TO 'NEW_T_MAME';


/**making an existing col auto incr**/
ALTER TAB T_NAME
CHANGE COL_NAME COL_NAME INT(10) NOT NULL AUTO_INCREMENT;

can only have one auto incr col per table, it has to be int and cant be null


/**remove primary key designation given to a column without changing data in it**/
ALTER TAB 'T_NAME'
DROP PRIMARY KEY;


/**remove auto incr designation from an existing col**/
ALTER TAB T_NAME
CHANGE COL_NAME COL_NAME INT(10) NOT NULL;


/**update values in a col depending upon the values of other cols of the same row**/
update T_NAME
SET col_NAME = 
CASE
WHEN C1 =  val1
THEN newVal1
WHEN C2 =  val2
THEN newVal2
****
ELSE newVal
END;


/**pick an employee with highest sales**/
SELECT frist_name, SUM(sales)
FROM sales_info
GROUP BY first_name,
ORDER BY SUM(sales), DESC;


/**create a tab with a foreign key**/
create table trader
(
    t_id int not null auto_increment primary key,
    u_id int,
    balance dec(8, 2),
    bet dec(8, 2),
    constraint user_u_id_fk
    foreign key(u_id)
    references user(u_id)
)


/**example to add 2 foriegn keys**/
CREATE TABLE product (
    category INT NOT NULL, id INT NOT NULL,
    price DECIMAL,
    PRIMARY KEY(category, id)
)   ENGINE=INNODB;

CREATE TABLE customer (
    id INT NOT NULL,
    PRIMARY KEY (id)
)   ENGINE=INNODB;

CREATE TABLE product_order (
    no INT NOT NULL AUTO_INCREMENT,
    product_category INT NOT NULL,
    product_id INT NOT NULL,
    customer_id INT NOT NULL,

    PRIMARY KEY(no),
    INDEX (product_category, product_id),
    INDEX (customer_id),

    FOREIGN KEY (product_category, product_id)
      REFERENCES product(category, id)
      ON UPDATE CASCADE ON DELETE RESTRICT,

    FOREIGN KEY (customer_id)
      REFERENCES customer(id)
)   ENGINE=INNODB;


/**AUTO INCR**/
create temporary table t (
    v varchar(100), 
    i integer(2) auto_increment, 
    primary key(v, i)
) engine=myisam;
insert into t (v) values ('a'),('a'),('b'),('b'),('b');
select * from t;
+---+---+
| v | i |
+---+---+
| a | 1 |
| a | 2 |
| b | 1 |
| b | 2 |
| b | 3 |
+---+---+


/**UPDATE THE DATA ASSOCIATED WITH ORIGINAL PRIMARY KEY **/
INSERT INTO Contacts (Name, Institution, Address, Email, Phone) 
VALUES (?, ?, ?, ?, ?) ON DUPLICATE KEY UPDATE 
Name = VALUES(NAME), 
Institution = VALUES(Institution) ...

