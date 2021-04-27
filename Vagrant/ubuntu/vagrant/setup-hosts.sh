#!/bin/bash
set -e
IFNAME=$1
ADDRESS="$(ip -4 addr show $IFNAME | grep "inet" | head -1 |awk '{print $2}' | cut -d/ -f1)"
sed -e "s/^.*${HOSTNAME}.*/${ADDRESS} ${HOSTNAME} ${HOSTNAME}.local/" -i /etc/hosts

# remove ubuntu-bionic entry
sed -e '/^.*ubuntu-bionic.*/d' -i /etc/hosts

# Update /etc/hosts about other hosts
cat >> /etc/hosts <<EOF
192.168.56.2  node1
192.168.56.3  node2
192.168.56.4  node3
EOF
adduser ansible --gecos "Ansible Last,RoomNumber,WorkPhone,HomePhone" --disabled-password
echo "ansible:secure1Pass" | sudo chpasswd
echo "ansible ALL=(ALL) NOPASSWD: ALL" >> /etc/sudoers
mkdir /home/ansible/.ssh/
cat >> /home/ansible/.ssh/authorized_keys <<EOF
ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABAQC/vMGnToL4Q6MbdsvixufNUuki1dEznU7PJDuXFeYPfwNn4FhY8V0eeofgvPkDFLv+1pu6kWxaZ9UqcJvVLPkvRwUD/SAHew+Nbduy/orjIGg+4OSk6J7IZ2kmmFlgHff3CKzniJmST0dKrHHfLJsoY3DanBSm/O5UPV2GaDGzIvPfuC9w/kU3cGHZ9ce0a3sgtkqyxaXOOMUL2CtYhNXW+8pb+//j1Nq1lkWal4dBGc7PjhppSX7KM6sbeWm18INIWvenUw1CJR/jV7R6ASByIejgnZqSqeBrMV1+AHzX5wEB91YE7Bl2o2qbSi1gsI4bfSAYDod4/9uEXj3mBMr5 ansible@ansible-ctl
EOF