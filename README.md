# Swiggy Clone - PHP Backend Implementation

This is a complete PHP backend implementation of a Swiggy-like food delivery application with database integration.

## Features

- **User Authentication**: Login/Registration system
- **Restaurant Management**: Browse restaurants and view menus
- **Order Management**: Place orders, track status, cancel orders
- **Cart Functionality**: Add/remove items, quantity management
- **Payment Integration**: Multiple payment methods
- **Order Tracking**: Real-time order status updates
- **User Account**: Profile management and order history
- **Responsive Design**: Mobile-friendly interface
- **Dark Mode**: Toggle between light and dark themes

## Database Schema

The application uses MySQL with the following main tables:
- `users` - User accounts
- `restaurants` - Restaurant information
- `menu_items` - Food items
- `orders` - Order records
- `order_items` - Individual items in orders
- `coupons` - Discount codes
- `user_addresses` - Delivery addresses

## Setup Instructions

### Prerequisites
- XAMPP/WAMP/LAMP server
- PHP 7.4 or higher
- MySQL 5.7 or higher

### Installation

1. **Clone/Download the project** to your web server directory (e.g., `htdocs` for XAMPP)

2. **Database Setup**:
   - Start your MySQL server
   - Open phpMyAdmin or MySQL command line
   - Create a new database named `swiggy_db`
   - Run the setup script: `http://localhost/Assignment-swiggy/setup.php`

3. **Configuration**:
   - Update database credentials in `config/database.php` if needed
   - Default settings:
     - Host: localhost
     - Database: swiggy_db
     - Username: root
     - Password: (empty)

4. **Access the Application**:
   - Navigate to `http://localhost/Assignment-swiggy/swiggyhome.php`

## File Structure

```
Assignment-swiggy/
├── config/
│   └── database.php          # Database connection
├── sql/
│   └── schema.sql            # Database schema
├── swiggyhome.php            # Main restaurant listing page
├── login.php                 # User authentication
├── restaurant-details.php    # Restaurant menu page
├── payment.php               # Checkout and payment
├── tracking.php              # Order tracking
├── my-account.php            # User profile
├── help.php                  # Help and support
├── setup.php                 # Database setup script
└── README.md                 # This file
```

## Key Features Implementation

### 1. User Authentication
- Phone number based login
- User registration with validation
- Session management
- Secure password handling

### 2. Restaurant & Menu System
- Dynamic restaurant listing
- Menu categorization
- Search and filter functionality
- Restaurant details with ratings

### 3. Shopping Cart
- Add/remove items
- Quantity management
- Session-based cart storage
- Real-time cart updates

### 4. Order Management
- Order placement with validation
- Multiple payment methods
- Order status tracking
- Order cancellation
- Order history

### 5. Payment System
- Multiple payment options (Card, UPI, Net Banking, COD)
- Order total calculation
- Tax and delivery fee calculation
- Coupon system

### 6. Order Tracking
- Real-time status updates
- Estimated delivery time
- Order cancellation
- Mark as received

## Database Tables

### Users Table
- User registration and authentication
- Profile information storage

### Restaurants Table
- Restaurant details
- Ratings and delivery information

### Menu Items Table
- Food items with prices
- Category organization
- Availability status

### Orders Table
- Order information
- Payment details
- Delivery address
- Status tracking

### Order Items Table
- Individual items in orders
- Quantity and pricing

## Security Features

- Input sanitization
- SQL injection prevention
- Session management
- Form validation
- XSS protection

## Responsive Design

- Mobile-first approach
- Tailwind CSS framework
- Dark mode support
- Touch-friendly interface

## Browser Support

- Chrome (recommended)
- Firefox
- Safari
- Edge

## Troubleshooting

### Common Issues

1. **Database Connection Error**:
   - Check MySQL server is running
   - Verify database credentials in `config/database.php`
   - Ensure database `swiggy_db` exists

2. **Page Not Loading**:
   - Check PHP server is running
   - Verify file permissions
   - Check for PHP errors in logs

3. **Session Issues**:
   - Ensure session_start() is called
   - Check session configuration
   - Clear browser cookies

### Support

For technical support or questions:
- Email: support@swiggy.com
- Phone: +91 12345 67890
- Help Page: `help.php`

## License

This project is for educational purposes only.

## Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Test thoroughly
5. Submit a pull request

## Version History

- v1.0.0 - Initial release with basic functionality
- v1.1.0 - Added order tracking and user accounts
- v1.2.0 - Enhanced UI and mobile responsiveness

