CREATE TABLE public.timed(
    id SERIAL NOT NULL PRIMARY KEY,
    hour INT NOT NULL,
    min INT NOT NULL,
    day INT NOT NULL,
    month INT NOT NULL,
    year INT NOT NULL
);

CREATE TABLE public.description(
    id SERIAL NOT NULL PRIMARY KEY,
    color VARCHAR(100),
    model VARCHAR(100)
);

CREATE TABLE public.item(
    id SERIAL NOT NULL PRIMARY KEY,
    price INT NOT NULL,
    description_id INT NOT NULL,
    FOREIGN KEY (description_id) REFERENCES public.description(id)
);

CREATE TABLE public.saledata(
    id SERIAL NOT NULL PRIMARY KEY,
    person VARCHAR(100) NOT NULL,
    item INT NOT NULL,
    FOREIGN KEY (item) REFERENCES public.item(id),
    timed INT NOT NULL,
    FOREIGN KEY (timed) REFERENCES public.timed(id)
);


/*---------------------------------------------------*/

CREATE TABLE public.sales(
    id SERIAL NOT NULL PRIMARY KEY,
    timeofpurchase TIMESTAMP,
    typeofpurchase VARCHAR(100),
    typeofcustomer VARCHAR(100),
    onsale VARCHAR(100),
    item INT NOT NULL,
    FOREIGN KEY (item) REFERENCES public.items(id),
    employee INT NOT NULL,
    FOREIGN KEY (employee) REFERENCES public.employee(id)
);

CREATE TABLE public.items(
    id SERIAL NOT NULL PRIMARY KEY,
    price INT NOT NULL,
    stock INT NOT NULL,
    typeofitem VARCHAR(100)
);

CREATE TABLE public.adverts(
    id SERIAL NOT NULL PRIMARY KEY,
    typeofitem VARCHAR(100),
    price INT NOT NULL
);

CREATE TABLE public.employee(
    id SERIAL NOT NULL PRIMARY KEY,
    name VARCHAR(100),
    title VARCHAR(100),
    numsales INT NOT NULL,
    numloyalty INT NOT NULL,
    phonenumber INT NOT NULL,
    numprojects INT NOT NULL,
    custscore INT NOT NULL
);

/*------------------------------------------------------------*/

INSERT INTO employee (id, name, title, numsales, numloyalty, phonenumber, numprojects, custscore) VALUES (1, 'DEVIN','cashier', 23, 2, 1234567891, 25, 8.5);
INSERT INTO employee (id, name, title, numsales, numloyalty, phonenumber, numprojects, custscore) VALUES (2, 'dennis', 'cashier', 3, 23, 1234567890, 5, 2.5);
INSERT INTO adverts (id, typeofitem, price) VALUES (1, 'food', 500);
INSERT INTO adverts (id, typeofitem, price) VALUES (2, 'electronics', 5000);
INSERT INTO items (id, price, stock, typeofitem) VALUES (1, 25.99, 30, 'food');
INSERT INTO items (id, price, stock, typeofitem) VALUES (2, 109.50, 25, 'electronics');
INSERT INTO sales (id, timeofpurchase, typeofpurchase, typeofcustomer, onsale, item, employee) VALUES (1, '2018-01-08 04:05:06', 'visa', 'standard', 'true', 1, 1);
INSERT INTO sales (id, timeofpurchase, typeofpurchase, typeofcustomer, onsale, item, employee) VALUES (2, '2018-01-08 04:06:12', 'cash', 'loyalty', 'false', 2, 2);