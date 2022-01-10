## To-do

1. eval `ssh-agent`
2. ssh-add id_student
3. input pass
4. ssh to both machines to verify
5. 
```sh
ansible-playbook -i hosts.ini setup_wp.yaml -e DB_PW='<your_pass>'
```

6. continue the setup on <wp-nodes>/wp-admin
7. good job