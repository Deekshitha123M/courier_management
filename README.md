# Courier Management System

 The Courier Management System is a web-based application designed to streamline and automate courier services. The system facilitates user registration, parcel booking, tracking, and delivery management. It also includes an admin panel for efficient oversight of couriers, user management, and system maintenance.

# Features
- **User Management:** Users can register, log in, update their details, and track parcels.

- **Courier Booking:** Users can book couriers by providing sender and receiver details.

- **Parcel Tracking:** Users can track the status of their parcels in real time.

- **Admin Panel:** Administrators can manage user details, update parcel statuses, and oversee system operations.

- **Database Integration:** Utilizes MySQL for managing courier details efficiently.

# Technologies Used

- **Frontend:** HTML, CSS, JavaScript

- **Backend:** PHP

- **Database:** MySQL

- **Server:** XAMPP

# Installation Instructions

To view or run this website locally, follow these steps:

 ## 1. Clone the Repository:
      
    git clone https://github.com/yourusername/courier-management-system.git

## 2. Setup Database:

- Import the `courier_management.sql` file into MySQL.
- Update database credentials in the `config.php` file.

## 3. Run the Application

 - Start XAMPP and run Apache and MySQL.
 - Place the project folder inside `htdocs`.
 - Access the application via `http://localhost/courier-management-system/`.

# Database Schema

- **Users Table**: Stores user details (user_id, name, email, password, contact).
- **Courier Table**: Stores courier details (courier_id, sender, receiver, status, tracking_id).
- **Admin Table**: Stores administrator details.
- **Tracking Table**: Maintains tracking history for each parcel.

# Usage

## User
-  Register/Login.
-  Book a courier.
-  Track shipment status.

## Admin
-  Manage users and couriers.
-  Update parcel delivery statuses.

## Screenshots

### User Login Page
![User Login](images/user_login.png)

### Courier Booking Page
![Courier Booking](images/courier_booking.png)

### Tracking Page
![Tracking](images/tracking.png)

### Admin Dashboard
![Admin Dashboard](images/admin_dashboard.png)





 
  




