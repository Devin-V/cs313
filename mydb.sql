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
    name VARCHAR (100),
    price INT NOT NULL,
    stock INT NOT NULL,
    typeofitem VARCHAR(100)
);

CREATE TABLE public.adverts(
    id SERIAL NOT NULL PRIMARY KEY,
    typeofitem VARCHAR(100),
    price FLOAT NOT NULL
);

CREATE TABLE public.employee(
    id SERIAL NOT NULL PRIMARY KEY,
    name VARCHAR(100),
    title VARCHAR(100),
    numsales INT NOT NULL,
    numloyalty INT NOT NULL,
    phonenumber VARCHAR(100),
    numprojects INT NOT NULL
);

/*------------------------------------------------------------*/

INSERT INTO employee (id, name, title, numsales, numloyalty, phonenumber, numprojects) VALUES (1, 'devin','cashier', 23, 2, '2083214567', 25);
INSERT INTO employee (id, name, title, numsales, numloyalty, phonenumber, numprojects) VALUES (2, 'dennis', 'cashier', 73, 23, '1234567890', 5);
INSERT INTO employee (id, name, title, numsales, numloyalty, phonenumber, numprojects) VALUES (3, 'john', 'cashier', 100, 50, '2083215567', 50);
INSERT INTO employee (id, name, title, numsales, numloyalty, phonenumber, numprojects) VALUES (4, 'doug', 'cashier', 56, 20, '2083214767', 20);
INSERT INTO employee (id, name, title, numsales, numloyalty, phonenumber, numprojects) VALUES (5, 'william', 'assistant manager', 20, 30, '2083204567', 100);
INSERT INTO employee (id, name, title, numsales, numloyalty, phonenumber, numprojects) VALUES (6, 'sharon', 'manager', 30, 45, '2083219567', 150);
INSERT INTO adverts (id, typeofitem, price) VALUES (1, 'food', 500);
INSERT INTO adverts (id, typeofitem, price) VALUES (2, 'electronics', 5000);
INSERT INTO adverts (id, typeofitem, price) VALUES (3, 'sports', 2000);
INSERT INTO adverts (id, typeofitem, price) VALUES (4, 'beauty', 500);
INSERT INTO adverts (id, typeofitem, price) VALUES (5, 'toys', 500);
INSERT INTO items (id, name, price, stock, typeofitem) VALUES (1, 'roast', 25.99, 130, 'food');
INSERT INTO items (id, name, price, stock, typeofitem) VALUES (2, 'milk', 2.25, 250, 'food');
INSERT INTO items (id, name, price, stock, typeofitem) VALUES (3, 'tv', 109.50, 125, 'electronics');
INSERT INTO items (id, name, price, stock, typeofitem) VALUES (4, 'computer', 500.50, 312, 'electronics');
INSERT INTO items (id, name, price, stock, typeofitem) VALUES (5, 'basketball', 50.99, 100, 'sports');
INSERT INTO items (id, name, price, stock, typeofitem) VALUES (6, 'hockey stick', 50.00, 100, 'sports');
INSERT INTO items (id, name, price, stock, typeofitem) VALUES (7, 'makeup', 4.75, 800, 'beauty');
INSERT INTO items (id, name, price, stock, typeofitem) VALUES (8, 'hair dryer', 30.25, 105, 'beauty');
INSERT INTO items (id, name, price, stock, typeofitem) VALUES (9, 'action figure', 27.00, 712, 'toys');
INSERT INTO items (id, name, price, stock, typeofitem) VALUES (10, 'baby blocks', 20.00, 101, 'toys');
INSERT INTO sales (id, timeofpurchase, typeofpurchase, typeofcustomer, onsale, item, employee) VALUES (1, '2018-01-08 04:05:06', 'visa', 'standard', 'true', 1, 1);
INSERT INTO sales (id, timeofpurchase, typeofpurchase, typeofcustomer, onsale, item, employee) VALUES (2, '2018-01-08 04:06:12', 'cash', 'loyalty', 'false', 2, 2);

/*************************************************************/
