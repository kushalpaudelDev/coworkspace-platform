# CoworkSpace Management Platform

A modern, scalable management platform designed for coworking spaces to handle locations, workspaces, reservations, memberships, billing, visitors, notifications, and administrative operations.

## Overview

This system provides a complete solution for coworking operations:
- Members can browse available spaces, make reservations, manage their profiles, and track payment history.
- Receptionists and staff can handle visitor registrations and daily check-ins.
- Administrators get full control over locations, spaces, plans, billing, and operational metrics via a powerful Filament dashboard.

## Technology Stack

The platform is built using a modern, robust Laravel stack:
- **Framework**: Laravel 13 (PHP 8.3+)
- **Admin Panel**: Filament
- **Frontend**: Blade, Tailwind CSS v4, Vite
- **Database**: MySQL 8.4
- **Services**: 
  - **Redis** (Queues, Cache)
  - **Meilisearch** (Advanced Search)
  - **Mailpit** (Local Email Testing)
- **Infrastructure**: Laravel Sail / Docker

## Planned Modules

*(Note: These modules are currently in the planning/architectural phase and will be introduced progressively.)*

- **Authentication and Authorization**: Granular roles (Admin, Manager, Receptionist, Member).
- **Workspace Management**: Hierarchical tracking of Locations → Floors → Spaces (hot desks, private offices, meeting rooms).
- **Membership Management**: Subscriptions, plans, and access rules.
- **Booking System**: Robust reservation engine with server-side conflict prevention.
- **Payment and Invoicing**: Internal billing and invoice tracking (extensible for future payment gateways).
- **Search**: High-performance entity search powered by Meilisearch.
- **Notifications**: Automated emails and alerts for bookings and invoices.
- **Visitor Management**: Reception workflows for guest check-ins.
- **Dashboard and Reporting**: Real-time metrics based on actual database records.

## Local Development

### Prerequisites
- Docker Desktop
- PHP & Composer (locally, or use Sail directly)

### Environment Configuration
Never commit real credentials to the repository. Developers should create their local `.env` file from the provided template:

```bash
cp .env.example .env
```

Ensure you generate an application key:
```bash
./vendor/bin/sail artisan key:generate
```

### Running the Application
The project uses Laravel Sail for its local Docker environment. Start the infrastructure using:

```bash
./vendor/bin/sail up -d
```

### Development Workflow
- `main` is the primary, stable branch.
- Feature branches (`feature/*`) will be created for individual modules during active development.
