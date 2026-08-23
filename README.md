# CoworkSpace Management Platform

A modern, production-ready system for managing coworking locations, workspaces, reservations, memberships, billing, visitors, notifications, and administrative operations.

## Overview

The CoworkSpace Management Platform provides a complete end-to-end solution for coworking businesses. It enables members to browse spaces, manage their memberships, and book desks or meeting rooms. Concurrently, it offers administrators and staff a powerful dashboard to manage the entire coworking operation, monitor occupancy, track revenue, and communicate with members.

## Technology Stack

This project is built using a modern PHP/Laravel ecosystem:

- **Core:** Laravel 13 (PHP 8.3+)
- **Admin Panel:** Filament
- **Frontend:** Laravel Blade, Tailwind CSS v4, Vite
- **Database:** MySQL 8.4
- **Search:** Meilisearch
- **Caching & Queues:** Redis
- **Email Testing:** Mailpit
- **Local Environment:** Laravel Sail (Docker)

## Planned Modules

*Note: The following modules are planned for future development and are not yet implemented.*

- **Authentication & Authorization**: Granular roles for administrators, managers, receptionists, staff, and members.
- **Workspace Management**: Hierarchical management of Locations, Floors, and Spaces (hot desks, private offices, meeting rooms).
- **Membership Management**: Subscription tracking and membership rules.
- **Booking System**: Conflict-free reservations with strict server-side validation.
- **Payment & Invoicing**: Internal billing structures and invoice generation.
- **Search**: Fast, synchronized entity searching via Meilisearch.
- **Notifications**: Automated emails and in-app alerts for bookings, invoices, and visitors.
- **Visitor Management**: Check-in and check-out workflows for guests.
- **Dashboard & Reporting**: Real-time occupancy, revenue, and member statistics.

## Local Development

### Prerequisites
- Docker Desktop (or equivalent)
- Composer
- Node.js & NPM

### Setup

1. **Clone the repository:**
   ```bash
   git clone https://github.com/kushalpaudelDev/coworkspace-management-platform.git
   cd coworkspace
   ```

2. **Environment Configuration:**
   Copy the example environment file and configure it. **Never commit actual credentials to `.env`.**
   ```bash
   cp .env.example .env
   ```
   *(Note: The `APP_KEY` will be generated in the next steps)*

3. **Install Dependencies:**
   ```bash
   composer install
   npm install
   ```

4. **Start the Docker Environment:**
   We use Laravel Sail to manage the local Docker setup.
   ```bash
   ./vendor/bin/sail up -d
   ```
   *(We recommend adding `alias sail='sh $([ -f sail ] && echo sail || echo vendor/bin/sail)'` to your shell profile)*

5. **Generate Application Key:**
   ```bash
   sail artisan key:generate
   ```

6. **Run Migrations:**
   ```bash
   sail artisan migrate
   ```

7. **Compile Frontend Assets:**
   ```bash
   sail npm run dev
   ```

The application will be accessible at `http://localhost`.

## Development Workflow

This repository strictly follows a two-tier branch strategy:
- `main`: Represents the stable, deployable state of the application.
- `develop`: The active integration branch.

Feature development should branch off `develop` (e.g., `feature/authentication`, `feature/workspace-management`) and be merged back via pull request. Empty branches should not be created until development actively begins.
