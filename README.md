Installation:

1.Install sshpass 

2.Add this line at '/etc/sudoers' file:


	Ubuntu: www-data ALL=(ALL) NOPASSWD: ALL
	
	Centos: www-data ALL=(ALL) NOPASSWD: ALL
	      : #Defaults    requiretty <-- comment it
3.Set execute permission for `check.sh` file
	
	 chmod +x run-check.sh

