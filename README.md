# Introduction

**Juaratiket** is a ticket booking application built with **Laravel** and powered by the **Filament Admin Panel** to manage tickets, categories, sellers, and booking transactions.  
It simplifies ticket sales management for administrators with a modern interface and automated CRUD features.

---

# App Screenshot

<img src="https://github.com/Fachrilfr/juaratiket/blob/e7cb3c5cdc0a7b92723a9b2f88800a55d43f796c/Design.png" width="auto" height="auto" >

---

# What's Inside

## Filament Resources

1. **BookingTransactionResource**
   - Manage ticket booking transaction data.
   - CRUD Pages: *List*, *Create*, *Edit*, *View*.
   - Includes search and transaction filtering features.

2. **CategoryResource**
   - Manage ticket categories (e.g., concert, sports, seminar).
   - CRUD Pages to create, edit, and delete categories.

3. **SellerResource**
   - Manage ticket seller data.
   - Supports profile management and seller information.

4. **TicketResource**
   - Manage available ticket data.
   - Includes event name, price, ticket quantity, and category.

## Filament Pages

- **BookingTransactionResource/Pages**  
  CRUD pages for booking transactions.

- **CategoryResource/Pages**  
  CRUD pages for ticket categories.

- **SellerResource/Pages**  
  CRUD pages for seller data.

- **TicketResource/Pages**  
  CRUD pages for ticket data.

---

# Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/Fachrilfr/juaratiket.git
   cd juaratiket
