-- Create the user table
CREATE TABLE user (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(255) NOT NULL,
  email VARCHAR(100) NOT NULL
);

-- Insert demo data into the user table
INSERT INTO user (username, password, email) VALUES
  ('johnsmith', 'password123', 'johnsmith@example.com'),
  ('janedoe', 'secret321', 'janedoe@example.com'),
  ('johndoe', 'qwerty', 'johndoe@example.com');

-- Create the travel table
CREATE TABLE travel (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  travel_type VARCHAR(50) NOT NULL,
  current_location VARCHAR(100) NOT NULL,
  destination VARCHAR(100) NOT NULL,
  depart_date DATE NOT NULL,
  return_date DATE NOT NULL,
  travel_class VARCHAR(50) NOT NULL
);

-- Insert demo data into the travel table
INSERT INTO travel (travel_type, current_location, destination, depart_date, return_date, travel_class) VALUES
  ('Business', 'New York', 'Los Angeles', '2023-05-15', '2023-05-20', 'First Class'),
  ('Vacation', 'London', 'Paris', '2023-06-01', '2023-06-10', 'Economy'),
  ('Business', 'Tokyo', 'Sydney', '2023-07-15', '2023-07-20', 'Business Class');

-- Create the MomoPayment table
CREATE TABLE momo_payment (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  account_name VARCHAR(100) NOT NULL,
  phone_number VARCHAR(20) NOT NULL,
  network_type VARCHAR(50) NOT NULL
);

-- Insert demo data into the MomoPayment table
INSERT INTO momo_payment (account_name, phone_number, network_type) VALUES
  ('John Smith', '024XXXXXXX', 'MTN'),
  ('Jane Doe', '020XXXXXXX', 'Vodafone'),
  ('John Doe', '027XXXXXXX', 'AirtelTigo');

-- Create the CardPayment table
CREATE TABLE card_payment (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  card_owner VARCHAR(100) NOT NULL,
  card_number VARCHAR(16) NOT NULL,
  cvv VARCHAR(3) NOT NULL,
  expiry_date DATE NOT NULL
);

-- Insert demo data into the CardPayment table
INSERT INTO card_payment (card_owner, card_number, cvv, expiry_date) VALUES
  ('John Smith', '1234567890123456', '123', '2024-12-31'),
  ('Jane Doe', '2345678901234567', '456', '2023-06-30'),
  ('John Doe', '3456789012345678', '789', '2025-09-30');
