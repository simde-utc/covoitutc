CREATE TABLE Users (
    email           VARCHAR PRIMARY KEY,
    ent_id          VARCHAR(10),
    phone           VARCHAR(10)
);

CREATE TABLE Rides (
    id_ride         INT SERIAL PRIMARY KEY
    departure       VARCHAR(50) NOT NULL,
    destination     VARCHAR(50) NOT NULL,
    day             DATE NOT NULL,
    hour            TIME NOT NULL,
    nb_seats        INT NOT NULL,
    car             VARCHAR(50),
    informations    TEXT,
    driver          VARCHAR(10) NOT NULL,
    FOREIGN KEY (driver) REFERENCES Users(email)
);

CREATE TABLE Passengers (
    email           VARCHAR,
    id_ride         INT,
    PRIMARY KEY (email, id_ride),
    FOREIGN KEY (email) REFERENCES Users(email),
    FOREIGN KEY (id_ride) REFERENCES Rides(id_ride)
);