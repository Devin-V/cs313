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