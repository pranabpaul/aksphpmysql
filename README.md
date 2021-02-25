# Migrating a PHP MySQL application to AKS with Deployment, StatefulSet, Secret, Key-Vault, Ingress and AGIC
This is a step by step actions to migrate a simple PHP-MySQL solution to Azure. 

<b>Prerequisites:</b>
1. Azure Account and access to provison a resource group, VNET, AKS cluster, ACR, Ingress Controller, Key-vault and optionally Application Gateway.
2. GitHub account to download this code.
3. VSCode installed on client machine.
4. Docker Desktop installed on client machine.

<b>What we are going to create:</b>

Follow steps given in <b>instructions.txt</b> file. We will create
1. An AKS cluster. 
2. An ACR.
3. Deployment to run PHP containers, Statefulset to run MYSQL container.
4. Secrets, Key-Vault to store sensitive information like database connection related informations.
5. Headless ClusterIP service to reach MySQL StatefulSet.
5. Load Balancer, Ingress and optionally App-Gateway to expose the application.  