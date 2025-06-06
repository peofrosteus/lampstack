# Docker LAMP Stack

A simple LAMP (Linux, Apache, MySQL, PHP) stack using Docker.

## Prerequisites

- Docker
- Docker Compose

## Getting Started

1. Clone this repository
2. Copy the example environment file and edit it as needed:
   ```bash
   cp .env.example .env
   # Edit .env to set your own credentials
   ```
3. Create the required directories in the project root:
   ```bash
   mkdir -p www/inc
   ```
4. Start the containers:
   ```bash
   docker-compose up -d
   ```
5. Access the web application at: http://localhost:8081

## Configuration

- Web server runs on port 8081
- MySQL runs on port 3306
- Database credentials are set in the `.env` file

## Project Structure

- `Dockerfile` - Configuration for the PHP/Apache container
- `docker-compose.yml` - Docker Compose configuration
- `www/` - Directory containing your PHP files
  - `inc/` - Directory for include files
    - `db_config.php` - Database configuration
  - `index.php` - Main entry point
- `.env.example` - Example environment file for credentials

## Stopping the Stack

To stop the containers:
```bash
docker-compose down
```

To stop and remove volumes (this will delete the database data):
```bash
docker-compose down -v
```
