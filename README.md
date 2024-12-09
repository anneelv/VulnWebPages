# **Vulnerable Web Application for Learning Purposes**

This project hosts intentionally vulnerable web applications for practicing web penetration testing techniques like Cross-Site Scripting (XSS). The setup uses Docker to create an isolated and secure environment.

---

## **Project Structure**

```plaintext
ROOT/
├── index.php                # Main index page linking to vulnerable pages
├── .gitignore               # Git ignore file
├── .dockerignore            # Docker ignore file
├── Dockerfile               # Defines the Docker image
├── docker-compose.yml       # Docker Compose configuration
└── vulnerable-xss/          # Folder containing XSS examples
    └── xss-example.php
```

---

## **Prerequisites**

1. [Docker Desktop](https://www.docker.com/products/docker-desktop) (Ensure it is installed and running).
2. [Visual Studio Code](https://code.visualstudio.com/) with the **Docker** extension (optional but recommended).

---

## **Setup Instructions**

Follow these steps to set up the Docker environment and host the files:

### 1. **Clone the Repository**

```bash
git clone <repository-url>
cd <repository-folder>
```

### 2. **Build the Docker Image**

Run the following command to build the Docker image:

```bash
docker-compose build
```

### 3. **Start the Containers**

Start the Docker containers in detached mode:

```bash
docker-compose up -d
```

### 4. **Access the Application**

Open your web browser and navigate to:

```plaintext
http://localhost:8080
```

### 5. **Stop the Containers**

When done, stop the containers with:

```bash
docker-compose down
```

---

## **Testing XSS Pages**

1. Access the main index page (`http://localhost:8080`).
2. Follow the links to explore individual vulnerable XSS examples located in the `vulnerable-xss/` folder.

---

## **Troubleshooting**

- **Verify Docker is Running**:
  Ensure Docker Desktop is running, and check active containers with:
  ```bash
  docker ps
  ```
- **View Logs**:
  Check container logs for errors:
  ```bash
  docker-compose logs
  ```
- **Rebuild Containers**:
  If you make changes, rebuild the environment:
  ```bash
  docker-compose down
  docker-compose build
  docker-compose up -d
  ```

---

## **Security Note**

This setup is intentionally vulnerable and should only be run in a secure and isolated environment. Do not deploy this setup to public-facing servers.

---
