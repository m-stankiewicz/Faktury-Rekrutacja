
# Laravel Client-Invoices

## Description

"Client-Invoices" is a simple Laravel-based application that allows managing client, invoice, and invoice position data. The application provides basic functionality to display a list of clients in an HTML table, following Laravel best practices such as SOLID, DRY, and KISS principles.

---

## Features

1. **Client Management:**

   - Store information about companies, including name, email, address, and location.
   - Display a list of clients in an HTML view.

2. **Invoice Management:**

   - Store invoice details such as number, sale date, and receipt date.

3. **Invoice Position Management:**

   - Store invoice position details such as description, tax, quantity, and unit price.

4. **Relationships:**

   - A client can have many invoices.
   - An invoice can have many invoice positions.

---

## System Requirements

- PHP >= 8.1
- Composer
- Laravel >= 10
- SQLite (for testing) or MySQL/PostgreSQL (for production)

---

## Installation

1. **Clone the repository:**

   ```bash
   git clone <repository-url>
   cd client-invoices
   ```

2. **Install dependencies:**

   ```bash
   composer install
   ```

3. **Configure the ****`.env`**** file:**
   Copy the `.env.example` file to `.env` and adjust the database settings:

   ```bash
   cp .env.example .env
   ```

4. **Run database migrations:**
   Execute migrations to create the database schema:

   ```bash
   php artisan migrate
   ```

5. **Start the development server:**

   ```bash
   php artisan serve
   ```

   The application will be available at `http://localhost:8000`.

---

## Application Structure

### Database Tables

- **`customers`**: Stores client information.
- **`invoices`**: Stores invoice information.
- **`invoice_positions`**: Stores invoice position details.

### Models and Relationships

- **Customer**

  - `hasMany` -> `Invoice`

- **Invoice**

  - `belongsTo` -> `Customer`
  - `hasMany` -> `InvoicePosition`

- **InvoicePosition**

  - `belongsTo` -> `Invoice`

### Views

- **Client List:**
  Displays basic client information in an HTML table.

### Controllers

- **CustomerController:**
  - `index()` - Displays the list of clients.

---

## Best Practices Implemented

- **SOLID:** Each class and method has a single responsibility.
- **DRY:** Code reuse is achieved through relationships and factories.
- **KISS:** The code is simple and focused on basic functionality.
  
---

## Helper Commands

1. **Reset and re-run migrations:**

   ```bash
   php artisan migrate:fresh
   ```

2. **Start Tinker console:**

   ```bash
   php artisan tinker
   ```

3. **Generate test data (factories):**

   ```bash
   php artisan make:factory CustomerFactory
   ```

---

## Author

This application was created by Marek Stankiewicz as a sample test task. It provides basic functionality and is ready for further development.

