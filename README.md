# Dotin DevOps Scenario 

This repository is about Dotin (Datis Arian Qeshm) job opportunity as a Junior DevOps engineer. 
They have asked me to done the following tasks on my end to prove my practical skills. 
The assignment consists of 5 tasks which are listed here. 

    Ansible:

        ● Install Docker on 3 machines
        ● Configure docker swarm cluster with 3 nodes

    Gitlab:

        ● Config self-signed certificate (https/443)
        ● Config docker registry

    Sample Project:

        ● Configure a sample project with wordpress in docker swarm and use nginx as an external load balancer in front of it.

    ELK Stack:
        ● Configure ELK Stack in docker swarm
        ● Configure ELK for collect all containers logs in docker swarm

    Prometheus & Grafana:

        ● Monitor Linux machines, docker swarm cluster, containers with Prometheus and grafana

# Lets get started 

There are several folders in this repository. Please reffer to each folder for more information.

# Ansible

I could have Installed ansible via vagrant which is also added to the project but the installation procedure is done via the following ansible role.

        ansible-galaxy install atosatto.docker-swarm


for those who want to install via vagrant please reffer to vagrant folder.

# Gitlab

Personally I would rather install applications via JUJU charms in combination with MAAS than to write or use a playbook but this one is for demonstration purpose.

            https://maas.io/
            https://jaas.ai/ 

You can find the same folder as task name as well. 

# Sample Project:

A folder called `web` is presented here. It consists of a docker compose which is going to build neccessory images for the wordpress deployment. it consists of nginx as a load balancer , php-fpm , mariadb and two apache webservers as backend.

# ELK Stack:

    Elastic , logstash and kibana are deployed as docker



