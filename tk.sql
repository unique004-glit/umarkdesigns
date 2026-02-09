CREATE DATABASE IF NOT EXSISTS eticket_system;
USE eticket_system;

CREATE TABLE tickets (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ticket_code VARCHAR(100) NOT NULL UNIQUE,
    full_name VARCHAR(150) NOT NULL,
    email VARCHAR(150) NOT NULL,
    event_name VARCHAR(150) NOT NULL,
    event_date DATE NOT NULL,
    seat_number VARCHAR(20) NOT NULL,
    check_in_status ENUM('not_checked', 'checked_in') DEFAULT 'not_checked',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);