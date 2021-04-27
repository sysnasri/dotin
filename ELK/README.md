# ELK stack 
For collecting logs in swarm cluster, I'm going to use filebeat , elasticsearch , kibana and logstash. The stack can be setup easily with the docker stack deploy command. 

    on manager node please run the following, also note that images should be changed.

                docker stack deploy -c docker-compose.yml elk_stack

To collect logs via filebeat, please install this debian package. 

     curl -L -O https://artifacts.elastic.co/downloads/beats/filebeat/filebeat-7.12.0-amd64.deb
     sudo dpkg -i filebeat-7.12.0-amd64.deb


Add the following block of code into /etc/filebeat/filebeat.yml after filebeat.inputs directive. 

  - type: docker
    containers.ids: '*'
    processors:
      - add_docker_metadata: ~

You can access to Kibana interface through http://localhost:5601      
