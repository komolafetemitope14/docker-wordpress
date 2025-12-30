# Self-Hosted WordPress Infrastructure

## Overview

This project documents my journey building a **self-hosted WordPress infrastructure** from the ground up as a hands-on learning exercise in **virtualization, containers, networking, and automation**.

The goal is to run WordPress in a controlled, reproducible environment using **KVM, AlmaLinux, Docker**, and eventually **Terraform and GitHub Actions** for infrastructure as code and CI/CD.

This project is still **in progress** and is being completed over the holiday break.

---

## Current Architecture (Implemented)

* **KVM Host** running AlmaLinux 9.6
* **AlmaLinux 9.6 VM** hosted on KVM
* **Docker Engine** running inside the VM
* **Dockerized Web Stack**:

  * Apache + PHP (latest)
  * WordPress deployed via bind-mounted volumes
* **Dockerized Database**:

  * MySQL (latest)
  * Persistent storage using Docker volumes
* **Docker Network** for container-to-container communication
* **GitHub Actions Self-Hosted Runner** installed and ready (pipeline not yet implemented)

WordPress is currently accessible and successfully connected to the database.

---

## Planned Components (Not Yet Implemented)

* CI/CD pipeline using **GitHub Actions** to:

  * Pull code from a GitHub repository
  * Deploy WordPress updates automatically
* **Terraform** configurations to:

  * Define Docker networks
  * Deploy Web and Database containers
  * Manage persistent volumes
* CI/CD validation of Terraform plans
* Automated testing (WordPress availability & DB connectivity)

These components will be added before the project is finalized and published.

---

## High-Level Infrastructure Flow

* KVM Host (AlmaLinux)

  * AlmaLinux VM

    * Docker Engine

      * Docker Network

        * Apache/PHP Container (WordPress)
        * MySQL Container
    * GitHub Actions Self-Hosted Runner (ready)
* GitHub Repository (external)

---

## Why This Project

This project was built to:

* Gain hands-on experience with **self-hosted infrastructure**
* Understand container networking and persistence
* Learn how CI/CD integrates with real infrastructure
* Practice designing infrastructure that can later be managed as code

---

## Status

* Infrastructure: **In Progress**
* WordPress Deployment: **Completed**
* CI/CD Pipeline: **Planned**
* Terraform Automation: **Planned**

---

## Next Steps

1. Implement GitHub Actions CI/CD pipeline
2. Write Terraform modules for Docker resources
3. Automate deployment and updates
4. Add basic monitoring and validation tests
5. Publish repository as a public reference

---

## Notes

This repository will be made **public** once CI/CD and Terraform integration are complete.

Feedback and suggestions are welcome once the project is shared.

---

## Author

<img width="1268" height="509" alt="Screenshot From 2025-12-29 19-51-31" src="https://github.com/user-attachments/assets/6ba5308a-a769-4b7e-b40a-95a508055830" />


Built as a learning project during the holiday break to deepen understanding of modern infrastructure and automation workflows.

